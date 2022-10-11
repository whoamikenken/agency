<?php

namespace App\Http\Controllers;

use DateTime;
use DatePeriod;
use DateInterval;
use App\Models\Extras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(Auth::user()->user_image);
        // auth()->logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        $menus = DB::table('menus')->where('root', '=', '0')->get();
        // dd($data['menus']);
        foreach ($menus as $key => $value) {
            $data['menus'][$value->title] = json_decode(DB::table('menus')->where("root", "=", $value->menu_id)->orderBy("order", "asc")->get());
        }
        
        return view('home', $data);
    }

    public function dashboard(){
    
        if(Auth::user()->user_type == "Admin"){
        $data['registeredApplicantMonth'] = Extras::countApplicantRegistered();
        $data['upcomingDeparture'] = Extras::countUpcomingMonthDeparture();
        $data['active_applicant'] = Extras::countActiveApplicant();
        $data['expired_applicant'] = Extras::countExpiredPassportAndVisa();
            
        // dd($data);
            return view('dashboard/admin', $data);
        }else{

        }
    }

    public function departureMontlyBarChart()
    {
        $start    = (new DateTime(date("Y-")."01-01"))->modify('first day of this month');
        $end      = (new DateTime(date("Y-") . "12-31"))->modify('first day of next month');
        $interval = DateInterval::createFromDateString('1 month');
        $period   = new DatePeriod($start, $interval, $end);

        // $highestAmounContribute = $this->setup->getHighestContribution();
        $highest = 0;
        $data = "[";
        $month = "[";
        foreach ($period as $dt) {
            
            $val = Extras::getDepartureMonth($dt->format("m"));
            if ($val != 0) {
                $data = $data . $val . ",";
                if ($val > $highest) $highest = $val;
            } else {
                $data = $data . "0,";
            }

            $month = $month . '"' . $dt->format("F") . '",';
        }
     
        $data = substr($data, 0, -1);
        $data = $data . "]";
        $month = substr($month, 0, -1);
        $month = $month . "]";
        $return['data'] = $data;
        $return['month'] = $month;
        $percentageAdded = (30 / 100) * $highest;
        $return['high'] = $highest + $percentageAdded;
        // echo '<pre>'; print_r(;die;
        echo json_encode($return);
    }

    public function branchPieApplicant()
    {
        $branchesResult = DB::table('branches')->get();

        $data = "[";
        $label = "[";
        foreach ($branchesResult as $key => $value) {

            $val = Extras::getApplicantInBranch($value->code);
            if ($val != 0) {
                $data = $data . $val . ",";
            } else {
                $data = $data . "0,";
            }

            $label = $label . '"' . $value->description . '",';
        }

        $data = substr($data, 0, -1);
        $data = $data . "]";
        $label = substr($label, 0, -1);
        $label = $label . "]";
        $return['data'] = $data;
        $return['label'] = $label;
        echo json_encode($return);
    }
}
