<div class="row animate__animated animate__fadeInUp" id="pagination_data">
    @unless (count($result) == 0)
        @foreach ($result as $item)
        @php
            $color = "red";
            if($item->bio_availability == "Available") $color = "green";
            if($item->bio_availability == "Signed Up") $color = "teal";
            if($item->bio_availability == "Resell/Push") $color = "teal";
            if($item->bio_availability == "Pending") $color = "blue";
            if($item->bio_availability == "Backed out") $color = "#ffc107";
        @endphp
            <div class="col-sm-12 col-xl-4 col-lg-6 col-md-12">
                <div class="card mb-3 shadow-sm">
                    <div class="row g-0">
                        <div class="col-4">
                            @if ($item->user_profile)
                                <img src="{{  Storage::disk('empsys')->url($item->user_profile_face) }}" id="{{$item->applicant_id}}" class="img-fluid user_photo_list rounded animate__animated animate__fadeIn animate__delay-1s m-2" alt="..." style="height: 213px" onerror="this.onerror=null;this.src='{{ asset('images/user.png')}}'">
                            @else
                                <img src="{{ asset('images/user.png')}}" class="img-fluid user_photo_list rounded animate__animated animate__fadeIn animate__delay-1s" alt="..." id="twa">
                            @endif
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->fname." ".$item->lname}}</h5>
                                <p class="text-wrap">Jobsite: {{$item->jobsite}}<br>
                                Branch: {{$item->branch}}<br>
                                Status: <span style="color:{{ ($item->isactive == "Active") ? "green":"red"  }}">{{$item->isactive}}</span><br>
                                Availability: <span style="color:{{ $color  }}">{{$item->bio_availability}}</span></p>
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

<div id="paginationApplicant" class="justify-content-center">
  {{ $result->links() }}
</div>

<script>
    $(document).ready(function () {
    });
</script>
