<form id="tablecolumnForm" class="row g-2 needs-validation" novalidate>
    @csrf
    <div class="table-responsive">
        <table id="columnTable" class="table table-striped">
            <thead>
                <tr>
                    @foreach ($column as $item => $val)
                        <th>{{$val->description}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($column as $item => $val)
                    <th>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="{{$val->code}}" name="{{$val->code}}" value="Show">
                            <label class="form-check-label" for="{{$val->code}}">
                                {{$val->description}}
                            </label>
                        </div>
                    </th>
                @endforeach
            </tbody>
        </table>
    </div>
</form>
<script>
    
    $("#saveModal").unbind("click").click(function() {
        bootstrapForm($("#tablecolumnForm"));
        
        var formdata = $("#tablecolumnForm").serialize();
        console.log(formdata);
        return;
        swal.fire({
            html: '<h4>Loading...</h4>',
            didRender: function() {
                $('#swal2-html-container').prepend(sweet_loader);
            }
        });

        $.ajax({
            url: "{{ url('usertype/add') }}",
            type: "POST",
            data: formdata,
            dataType: 'json',
            success: function(response) {
                if (response.status == 1) {
                    Swal.fire({
                        icon: 'success',
                        title: response.title,
                        text: response.msg,
                        time: 2500
                    })
                    $("#modalclose").click();
                    UsertypeList();
                }else if (response.status == 2) {
                    Swal.fire({
                        icon: 'info',
                        title: response.title,
                        text: response.msg
                    })
                }else if (response.status == 0) {
                    Swal.fire({
                        icon: 'error',
                        title: response.title,
                        text: response.msg
                    })
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: "System Error",
                        text: "Please contact developer."
                    })
                }
            }
        });
    });
</script>