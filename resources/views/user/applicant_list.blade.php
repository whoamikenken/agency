<div class="row animate__animated animate__fadeInUp" id="pagination_data">
    @unless (count($result) == 0)
        @foreach ($result as $item)
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="card mb-3 shadow-sm" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="{{ asset('images/user.png')}}" class="img-fluid rounded-start animate__animated animate__fadeIn animate__delay-1s" alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->fname." ".$item->lname}}</h5>
                                <p class="card-text">Jobsite: {{$item->jobsite}}</p>
                                <p class="card-text">Branch: {{$item->branch}}</p>
                                <p class="card-text">Status: <span style="color:green">{{$item->isactive}}</span></p>
                                <button class="btn btn-info text-white applicantView" uid="{{$item->applicant_id}}"><i class="bi bi-eye"></i>&nbsp;&nbsp;View</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
            <h2 class="text-center">No Applicant</h2>
    @endunless
</div>

<div id="pagination" class="justify-content-center">
  {{ $result->links() }}
</div>
