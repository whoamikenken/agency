<style>
    .border-left-primary {
        border-left: 0.25rem solid #4e73df!important;
    }
    .border-left-info {
        border-left: 0.25rem solid #36b9cc!important;
    }
    .border-left-warning {
        border-left: 0.25rem solid #f6c23e!important;
    }
    .border-left-success {
        border-left: 0.25rem solid #18ff5d!important;
    }
</style>
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Registered Applicant</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$applicantPending}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-people fs-1 text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Upcoming Departure</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$upcomingDeparture}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-airplane-engines fs-1 text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Active Applicant</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$active_applicant}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-person-check fs-1 text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Expired VISA/PASSPORT</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$expired_applicant}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi-bookmark-x fs-1 text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

<div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="card mb-4">
            <div class="card-header">
                <i class="bi bi-bar-chart me-1"></i>
                Total Departure Per Month
            </div>
            <div class="card-body"><canvas id="myBarChart" width="100%" height="47"></canvas></div>
        </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="bi bi-bar-chart me-1"></i>
                Branches Applicants
            </div>
            <div class="card-body"><canvas id="pieChartBranch" width="100%" height="40"></canvas></div>
        </div>
    </div>
</div>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<script>

    $(document).ready(function () {
        getDeparturePerMonth();
        getBranchApplicant();
    });

    function getBranchApplicant(){
        $.ajax({
            type: "GET",
            url: "{{ url('dashboard/getBranchPie')}}",
            data: {},
            dataType: "json",
            success:function(response){

                const config = {
                    type: 'pie',
                    data: {
                        labels: JSON.parse(response.label),
                        datasets: [{
                        label: "Branches",
                        backgroundColor: [
                        'rgb(255, 0, 21)',
                        'rgb(255, 0, 242)',
                        'rgb(127, 0, 255)',
                        'rgb(21, 0, 255)',
                        'rgb(0, 153, 255)',
                        'rgb(0, 255, 25)',
                        'rgb(204, 255, 0)'
                        ],
                        data: JSON.parse(response.data),
                        }],
                    },
                    options: {
                    responsive: true,
                    plugins: {
                      legend: {
                        position: 'top',
                      },
                      title: {
                        display: true,
                        text: 'Branches'
                      }
                    }
                  }
                };

                const myChart = new Chart(
                    document.getElementById('pieChartBranch'),
                    config
                );
            }
        });
    }

    function getDeparturePerMonth(){
        $.ajax({
            type: "GET",
            url: "{{ url('dashboard/getDepartureMontly')}}",
            data: {},
            dataType: "json",
            success:function(response){

                const config = {
                    type: 'bar',
                    data: {
                        labels: JSON.parse(response.month),
                        datasets: [{
                        label: "Departure",
                        backgroundColor: "rgba(2,117,216,1)",
                        borderColor: "rgba(2,117,216,1)",
                        data: JSON.parse(response.data),
                        }],
                    },
                    options: {
                    scales: {
                      xAxes: [{
                        time: {
                          unit: 'month'
                        },
                        gridLines: {
                          display: false
                        }
                      }],
                      yAxes: [{
                        ticks: {
                          min: 200,
                          max: JSON.parse(response.high),
                          maxTicksLimit: 5
                        },
                        gridLines: {
                          display: true
                        }
                      }],
                    },
                    legend: {
                      display: false
                    }
                  },
                };

                const myChart = new Chart(
                    document.getElementById('myBarChart'),
                    config
                );

            }
        });
    }
</script>