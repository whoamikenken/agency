<form id="userForm" class="row g-2 needs-validation" novalidate>
    @csrf
    <input type="hidden" name="uid" value="{{($uid)}}">

    <div class="col-md-6 col-sm-12">
        <label>Username<span class="text-danger">*</span></label>
        <div class="input-group">
            <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
            <input type="text" id="username" name="username"
            class="form-control validate" placeholder="Enter Username" required value="{{ (isset($username))? $username:"" }}">
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please input a Username.
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-sm-12">
        <label>Email<span class="text-danger">*</span></label>
        <div class="input-group">
            <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
            <input type="text" id="email" name="email"
            class="form-control validate" placeholder="Enter Email" required value="{{ (isset($email))? $email:"" }}">
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please input a Email.
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <label>First Name<span class="text-danger">*</span></label>
        <div class="input-group">
            <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
            <input type="text" id="fname" name="fname"
            class="form-control validate" placeholder="Enter First Name" required value="{{ (isset($fname))? $fname:"" }}">
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please input a First Name.
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-sm-12">
        <label>Last Name<span class="text-danger">*</span></label>
        <div class="input-group">
            <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
            <input type="text" id="lname" name="lname"
            class="form-control validate" placeholder="Enter Last Name" required value="{{ (isset($lname))? $lname:"" }}">
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please input a Last Name.
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <label>User Type<span class="text-danger">*</span></label>
        <div class="input-group">
            <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
            <select name="user_type" id="user_type" class="form-select validate">
                {{-- @foreach ($jobsite_select as $item)
                    <option value="{{$item->code}}" {{ (isset($jobsite) && $jobsite == $item->code)? "selected":"" }} >{{$item->description}}</option>
                @endforeach --}}

                <option value="Admin" {{ (isset($user_type) && $user_type == "Admin")? "selected":"" }} >Admin</option>
                <option value="Sales" {{ (isset($user_type) && $user_type == "Sales")? "selected":"" }} >Sales</option>
            </select>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please input a Description.
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <label>Status<span class="text-danger">*</span></label>
        <div class="input-group">
            <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
            <select name="status" id="status" class="form-select validate">
                {{-- @foreach ($location_select as $item)
                    <option value="{{$item->code}}" {{ (isset($location) && $location == $item->code)? "selected":"" }} >{{$item->description}}</option>
                @endforeach --}}

                <option value="verified" {{ (isset($status) && $status == "verified")? "selected":"" }} >Verified</option>
                <option value="unverified" {{ (isset($status) && $status == "unverified")? "selected":"" }} >Unverified</option>
            </select>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please input a Description.
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <label>Password<span class="text-danger"></span></label>
        <div class="input-group">
            <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
            <input type="password" id="password" name="password"
            class="form-control" placeholder="Update password?" value="">
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please input a Description.
            </div>
        </div>
    </div>
    
</form>

<script>
    
    $("#saveModal").unbind("click").click(function() {
        bootstrapForm($("#userForm"));
        
        var formdata = $("#userForm").serialize();

        swal.fire({
            html: '<h4>Loading...</h4>',
            didRender: function() {
                $('#swal2-html-container').prepend(sweet_loader);
            }
        });

        $.ajax({
            url: "{{ url('user/add') }}",
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
                    UserList();
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