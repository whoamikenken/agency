<input type="hidden" type="text" id="uid" value="{{$uid}}">
<ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" link="{{ url('applicant/profile') }}" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Profile</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" link="{{ url('applicant/record') }}" id="pills-record-tab"  data-bs-toggle="pill" data-bs-target="#pills-record" type="button" role="tab" aria-controls="pills-record" aria-selected="false">Records</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" link="{{ url('applicant/document') }}" id="pills-document-tab" data-bs-toggle="pill" data-bs-target="#pills-document" type="button" role="tab" aria-controls="pills-document" aria-selected="false">Documents</button>
    </li>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        
    </div>
    <div class="tab-pane fade" id="pills-record" role="tabpanel" aria-labelledby="pills-record-tab">
        Record
    </div>
    <div class="tab-pane fade" id="pills-document" role="tabpanel" aria-labelledby="pills-document-tab">
        Document
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#pills-profile-tab").click();
    });
    $("#pills-tab").on("click",".nav-link",function(){
        var link = $(this).attr('link');
        $.ajax({
            type: "POST",
            url: link,
            data: {
                uid: $("#uid").val()
            },
            success: function(response) {
                // setTimeout(() => {
                    $("#pills-tabContent").find(".active").html(response);
                // }, 1000);
            }
        });
    })

</script>