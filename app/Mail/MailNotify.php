<?php

namespace App\Mail;

use App\Models\Extras;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Attachment;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    private $data = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       
        if ($this->data['emailtype']) {
            $this->data['fullname'] = $this->data['attachment'][0]->fullname;
            unset($this->data['attachment'][0]->fullname);
            $this->from('whoamikenken@gmail.com', 'Kingsmanpower')->subject($this->data['subject'])->view("email.status_email",$this->data);
            foreach ($this->data['attachment'][0] as $file => $val) {
                if($val){
                    
                    $fileDesc = Extras::showDesc($file);
                    
                    $getMime = explode(".", $val);
                    
                    $getMime = $getMime[1];
                    // dd();
                    $this->attach(Attachment::fromPath(Storage::disk('empsys')->url($val))->as($fileDesc . "." . $getMime));
                }
            }

            return $this;
        }else{
            return $this->from('whoamikenken@gmail.com', 'Kingsmanpower')->subject($this->data['subject'])->view("email.status_email")->with('data', $this->data)->attach(Attachment::fromPath("https://media-v2.technic.com.hk/applicants/KMM1096AA/video%20-%201663904724547.mp4")
            ->as('TEst.mp4'));
        }
    }
}
