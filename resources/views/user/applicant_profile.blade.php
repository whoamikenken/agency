<style>
    .custom-file-button input[type=file] {
        margin-left: -2px !important;
    }
    .custom-file-button input[type=file]::-webkit-file-upload-button {
        display: none;
    }
    .custom-file-button input[type=file]::file-selector-button {
        display: none;
    }
    .custom-file-button:hover label {
        background-color: #dde0e3;
        cursor: pointer;
    }
</style>

<div class="container-fluid p-0">
    <div class="card border-secondary mb-3 mt-4">
        <div class="card-header" style="font-size: 23px;background: #0d6cf9;color: white;">General Information</div>
        <div class="card-body text-secondary">
            <div class="row">
                <div class="col-sm-12 col-lg-2 text-center">
                    <form id="PictureForm" enctype="multipart/form-data">
                        @if ($user_profile != "")
                        <img src="{{ asset('images/user.png')}}" class="img-fluid rounded-start" alt="...">
                        @else
                        <img src="{{ asset('images/user.png')}}" class="img-fluid rounded-start" alt="...">
                        @endif
                        <br>
                        <div class="input-group custom-file-button">
                            <label class="input-group-text" for="user_profile">{{($user_profile != "")? "Replace":"Upload"}} Picture</label>
                            <input type="file" class="form-control form-control-sm" id="user_profile">
                        </div><br>
                        @if ($user_video != "")
                        <a class="btn btn-info" href="#">View Video</a>
                        @else
                        <div class="input-group custom-file-button">
                            <label class="input-group-text" for="user_video">Upload Video</label>
                            <input type="file" class="form-control form-control-sm" id="user_video">
                        </div>
                        @endif
                    </form>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">ER Ref.</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-pass"></i></div>
                            <input type="text" id="er_ref" name="er_ref"
                            class="form-control" placeholder="Enter ER Ref" value="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Applicant ID</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-pass"></i></div>
                            <input type="text" id="applicant_id" name="applicant_id"
                            class="form-control" placeholder="Enter Applicant ID" required value="{{ $applicant_id }}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Branch</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-building"></i></div>
                            <select name="branch" id="branch" class="form-control form-select">
                                @foreach ($branch_select as $item)
                                <option value="{{$item->code}}" {{ (isset($branch) && $branch == $item->code)? "selected":"" }} >{{$item->description}}</option>
                                @endforeach
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">First Name</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-person"></i></div>
                            <input type="text" id="fname" name="fname"
                            class="form-control validate" placeholder="Enter First Name" value="{{ $applicant_id }}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input a First Name.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Middle Name</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-person"></i></div>
                            <input type="text" id="mname" name="mname"
                            class="form-control validate" placeholder="Enter Middle Name" value="{{ $mname }}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input a Middle Name.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Address</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-geo-alt"></i></div>
                            <input type="text" id="address" name="address"
                            class="form-control validate" placeholder="Enter address" value="{{ $address }}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input a address.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Maid Ref</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-pass"></i></div>
                            <input type="text" id="maid_ref" name="maid_ref"
                            class="form-control" placeholder="Enter Maid Ref" value="{{ $maid_ref }}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Job Site</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-geo"></i></div>
                            <select name="jobsite" id="jobsite" class="form-control form-select">
                                @foreach ($jobsite_select as $item)
                                <option value="{{$item->code}}" {{ (isset($jobsite) && $jobsite == $item->code)? "selected":"" }} >{{$item->description}}</option>
                                @endforeach
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Sales Manager</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-file-earmark-person"></i></div>
                            <select name="sales_manager" id="sales_manager" class="form-control form-select">
                                @foreach ($users_select as $item)
                                <option value="{{$item->id}}" {{ (isset($sales_manager) && $sales_manager == $item->id)? "selected":"" }} >{{$item->name}}</option>
                                @endforeach
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Last Name</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-person"></i></div>
                            <input type="text" id="lnmae" name="lnmae"
                            class="form-control validate" placeholder="Enter Last Name" value="{{ $lname }}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input a Last Name.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Contact</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-hash"></i></div>
                            <input type="text" id="contact" name="contact"
                            class="form-control validate" placeholder="Enter Contact" value="{{ $contact }}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input a Contact.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Account Status</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-person-check"></i></div>
                            <select name="isactive" id="isactive" class="form-control form-select">
                                <option value="Active" {{ (isset($isactive) && $isactive == "Active")? "selected":"" }} >Active</option>
                                <option value="Inactive" {{ (isset($isactive) && $isactive == "Inactive")? "selected":"" }} >Inactive</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-secondary mb-3 mt-4">
        <div class="card-header" style="font-size: 23px;background: #0d6cf9;color: white;">Applicant Information</div>
        <div class="card-body text-secondary">
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Family Contact Name</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-person"></i></div>
                            <input type="text" id="family_contact_name" name="family_contact_name"
                            class="form-control" placeholder="Enter Family Contact Name" value="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Been Abroad</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-person-check"></i></div>
                            <select name="is_ex_abroad" id="is_ex_abroad" class="form-control form-select">
                                <option value="Yes" {{ (isset($is_ex_abroad) && $is_ex_abroad == "Yes")? "selected":"" }} >Yes</option>
                                <option value="No" {{ (isset($is_ex_abroad) && $is_ex_abroad == "No")? "selected":"" }} >No</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Family Contact No</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-hash"></i></div>
                            <input type="text" id="family_contact" name="family_contact" class="form-control" placeholder="Enter Family Contact No." value="{{$family_contact}}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">First Time</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-person-check"></i></div>
                            <select name="is_first" id="is_first" class="form-control form-select">
                                <option value="Yes" {{ (isset($is_first) && $is_first == "Yes")? "selected":"" }} >Yes</option>
                                <option value="No" {{ (isset($is_first) && $is_first == "No")? "selected":"" }} >No</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Date Applied</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                            <input type="text" id="date_applied" name="date_applied" class="form-control datepicker" value="{{ $date_applied }}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Abroad Experience</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-123"></i></div>
                            <input type="number" id="abroad_experience" name="abroad_experience" class="form-control" placeholder="Enter Year Of Experience." value="{{$abroad_experience}}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-secondary mb-3 mt-4">
        <div class="card-header" style="font-size: 23px;background: #0d6cf9;color: white;">Passport Information</div>
        <div class="card-body text-secondary">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Passport No.</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-person"></i></div>
                            <input type="text" id="family_contact_name" name="family_contact_name"
                            class="form-control" placeholder="Enter Passport No" value="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Issued On</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                            <input type="text" id="date_applied" name="date_applied" class="form-control datepicker" value="{{ $date_applied }}" placeholder="Select date passport issued">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Country Issued</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-geo-alt"></i></div>
                            <select name="passport_place_issued" id="passport_place_issued" class="form-control form-select">
                                @foreach ($country_select as $item)
                                <option value="{{$item->code}}" {{ (isset($passport_place_issued) && $passport_place_issued == $item->code)? "selected":"" }} >{{$item->description}}</option>
                                @endforeach
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Expiration</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                            <input type="text" id="passport_validity" name="passport_validity" class="form-control datepicker" value="{{ $passport_validity }}" placeholder="Select date expiration">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-secondary mb-3 mt-4">
        <div class="card-header" style="font-size: 23px;background: #0d6cf9;color: white;">Vaccination Information</div>
        <div class="card-body text-secondary">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">First Vacinne Date</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                            <input type="text" id="vac_first_dose_date" name="vac_first_dose_date" class="form-control datepicker" value="{{ $vac_first_dose_date }}" placeholder="Select date">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Second Vacinne Date</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                            <input type="text" id="vac_second_dose_date" name="vac_second_dose_date" class="form-control datepicker" value="{{ $vac_second_dose_date }}" placeholder="Select date">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Booster Vacinne Date</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                            <input type="text" id="vac_booster_dose_date" name="vac_booster_dose_date" class="form-control datepicker" value="{{ $vac_booster_dose_date }}" placeholder="Select date">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Country Vacinnated</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-geo-alt"></i></div>
                            <select name="vac_country" id="vac_country" class="form-control form-select">
                                @foreach ($country_select as $item)
                                <option value="{{$item->code}}" {{ (isset($vac_country) && $vac_country == $item->code)? "selected":"" }} >{{$item->description}}</option>
                                @endforeach
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">First Vacinne Brand</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-eyedropper"></i></div>
                            <select name="vac_first_brand" id="vac_first_brand" class="form-control form-select">
                                <option value="Pfizer" {{ (isset($vac_first_brand) && $vac_first_brand == "Pfizer")? "selected":"" }} >Pfizer</option>
                                <option value="AstraZeneca" {{ (isset($vac_first_brand) && $vac_first_brand == "AstraZeneca")? "selected":"" }} >AstraZeneca</option>
                                <option value="Sinovac" {{ (isset($vac_first_brand) && $vac_first_brand == "Sinovac")? "selected":"" }} >Sinovac</option>
                                <option value="Sputnik" {{ (isset($vac_first_brand) && $vac_first_brand == "Sputnik")? "selected":"" }} >Sputnik</option>
                                <option value="JandJ" {{ (isset($vac_first_brand) && $vac_first_brand == "JandJ")? "selected":"" }} >Jonhson and Jonhson`s</option>
                                <option value="Pfizer" {{ (isset($vac_first_brand) && $vac_first_brand == "Pfizer")? "selected":"" }} >Pfizer</option>
                                <option value="Bharat" {{ (isset($vac_first_brand) && $vac_first_brand == "Bharat")? "selected":"" }} >Bharat BioTech</option>
                                <option value="Moderna" {{ (isset($vac_first_brand) && $vac_first_brand == "Moderna")? "selected":"" }} >Moderna</option>
                                <option value="Novavax" {{ (isset($vac_first_brand) && $vac_first_brand == "Novavax")? "selected":"" }} >Novavax</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Second Vacinne Brand</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-eyedropper"></i></div>
                            <select name="vac_second_brand" id="vac_second_brand" class="form-control form-select">
                                <option value="Pfizer" {{ (isset($vac_second_brand) && $vac_second_brand == "Pfizer")? "selected":"" }} >Pfizer</option>
                                <option value="AstraZeneca" {{ (isset($vac_second_brand) && $vac_second_brand == "AstraZeneca")? "selected":"" }} >AstraZeneca</option>
                                <option value="Sinovac" {{ (isset($vac_second_brand) && $vac_second_brand == "Sinovac")? "selected":"" }} >Sinovac</option>
                                <option value="Sputnik" {{ (isset($vac_second_brand) && $vac_second_brand == "Sputnik")? "selected":"" }} >Sputnik</option>
                                <option value="JandJ" {{ (isset($vac_second_brand) && $vac_second_brand == "JandJ")? "selected":"" }} >Jonhson and Jonhson`s</option>
                                <option value="Pfizer" {{ (isset($vac_second_brand) && $vac_second_brand == "Pfizer")? "selected":"" }} >Pfizer</option>
                                <option value="Bharat" {{ (isset($vac_second_brand) && $vac_second_brand == "Bharat")? "selected":"" }} >Bharat BioTech</option>
                                <option value="Moderna" {{ (isset($vac_second_brand) && $vac_second_brand == "Moderna")? "selected":"" }} >Moderna</option>
                                <option value="Novavax" {{ (isset($vac_second_brand) && $vac_second_brand == "Novavax")? "selected":"" }} >Novavax</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Booster Vacinne Brand</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-eyedropper"></i></div>
                            <select name="vac_booster_brand" id="vac_booster_brand" class="form-control form-select">
                                <option value="Pfizer" {{ (isset($vac_booster_brand) && $vac_booster_brand == "Pfizer")? "selected":"" }} >Pfizer</option>
                                <option value="AstraZeneca" {{ (isset($vac_booster_brand) && $vac_booster_brand == "AstraZeneca")? "selected":"" }} >AstraZeneca</option>
                                <option value="Sinovac" {{ (isset($vac_booster_brand) && $vac_booster_brand == "Sinovac")? "selected":"" }} >Sinovac</option>
                                <option value="Sputnik" {{ (isset($vac_booster_brand) && $vac_booster_brand == "Sputnik")? "selected":"" }} >Sputnik</option>
                                <option value="JandJ" {{ (isset($vac_booster_brand) && $vac_booster_brand == "JandJ")? "selected":"" }} >Jonhson and Jonhson`s</option>
                                <option value="Pfizer" {{ (isset($vac_booster_brand) && $vac_booster_brand == "Pfizer")? "selected":"" }} >Pfizer</option>
                                <option value="Bharat" {{ (isset($vac_booster_brand) && $vac_booster_brand == "Bharat")? "selected":"" }} >Bharat BioTech</option>
                                <option value="Moderna" {{ (isset($vac_booster_brand) && $vac_booster_brand == "Moderna")? "selected":"" }} >Moderna</option>
                                <option value="Novavax" {{ (isset($vac_booster_brand) && $vac_booster_brand == "Novavax")? "selected":"" }} >Novavax</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-secondary mb-3 mt-4">
        <div class="card-header" style="font-size: 23px;background: #0d6cf9;color: white;">Biodata Status</div>
        <div class="card-body text-secondary">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Biodata Transferred Date</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                            <input type="text" id="bio_trans_date" name="bio_trans_date" class="form-control datepicker" value="{{ $bio_trans_date }}" placeholder="Select date">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Biodata Lunched Date</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                            <input type="text" id="bio_lunch_date" name="bio_lunch_date" class="form-control datepicker" value="{{ $bio_lunch_date }}" placeholder="Select date">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Biodata Status</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-option"></i></div>
                            <select name="bio_status" id="bio_status" class="form-control form-select">
                                <option value="Pending" {{ (isset($bio_status) && $bio_status == "Pending")? "selected":"" }} >Pending</option>
                                <option value="Approved" {{ (isset($bio_status) && $bio_status == "Approved")? "selected":"" }} >Approved</option>
                                <option value="Disapproved" {{ (isset($bio_status) && $bio_status == "Disapproved")? "selected":"" }} >Disapproved</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Biodata Availability</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-option"></i></div>
                            <select name="bio_availability" id="bio_availability" class="form-control form-select">
                                <option value="Available" {{ (isset($bio_availability) && $bio_availability == "Available")? "selected":"" }} >Available</option>
                                <option value="Sold" {{ (isset($bio_availability) && $bio_availability == "Sold")? "selected":"" }} >Sold</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-secondary mb-3 mt-4">
        <div class="card-header" style="font-size: 23px;background: #0d6cf9;color: white;">Job Order</div>
        <div class="card-body text-secondary">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Job Order Receive</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                            <input type="text" id="jo_received" name="jo_received" class="form-control datepicker" value="{{ $jo_received }}" placeholder="Select date">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Job Order Confirm</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                            <input type="text" id="jo_confirmed" name="jo_confirmed" class="form-control datepicker" value="{{ $jo_confirmed }}" placeholder="Select date">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Job Order Cancel?</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-option"></i></div>
                            <select name="jo_er_iscancel" id="jo_er_iscancel" class="form-control form-select">
                                <option value="Yes" {{ (isset($jo_er_iscancel) && $jo_er_iscancel == "Yes")? "selected":"" }} >Yes</option>
                                <option value="No" {{ (isset($jo_er_iscancel) && $jo_er_iscancel == "No")? "selected":"" }} >No</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Job Order Maid Cancel?</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-option"></i></div>
                            <select name="jo_maid_iscancel" id="jo_maid_iscancel" class="form-control form-select">
                                <option value="Yes" {{ (isset($jo_maid_iscancel) && $jo_maid_iscancel == "Yes")? "selected":"" }} >Yes</option>
                                <option value="No" {{ (isset($jo_maid_iscancel) && $jo_maid_iscancel == "No")? "selected":"" }} >No</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-secondary mb-3 mt-4">
        <div class="card-header" style="font-size: 23px;background: #0d6cf9;color: white;">Medical Information</div>
        <div class="card-body text-secondary">
            <h3 class="text-center">First Medical</h3>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Medical Date</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                            <input type="text" id="med_first_date" name="med_first_date" class="form-control datepicker" value="{{ $med_first_date }}" placeholder="Select date">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Medical Result</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                            <select name="med_first_clinic" id="med_first_clinic" class="form-control form-select">
                                <option value="Success" {{ (isset($med_first_clinic) && $med_first_clinic == "Success")? "selected":"" }} >Success</option>
                                <option value="Failed" {{ (isset($med_first_clinic) && $med_first_clinic == "Failed")? "selected":"" }} >Failed</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Medical Clinic</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-option"></i></div>
                            <select name="med_first_clinic" id="med_first_clinic" class="form-control form-select">
                                @foreach ($medical_select as $item)
                                <option value="{{$item->code}}" {{ (isset($med_first_clinic) && $med_first_clinic == $item->code)? "selected":"" }} >{{$item->description}}</option>
                                @endforeach
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Medical Cost</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-receipt"></i></div>
                            <input type="number" id="med_first_cost" name="med_first_cost" class="form-control" placeholder="Enter Medical Cost" value="{{$med_first_cost}}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="text-center mt-2">Second Medical</h3>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Medical Date</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                            <input type="text" id="med_second_date" name="med_second_date" class="form-control datepicker" value="{{ $med_second_date }}" placeholder="Select date">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Medical Result</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                            <select name="med_second_clinic" id="med_second_clinic" class="form-control form-select">
                                <option value="Success" {{ (isset($med_second_clinic) && $med_second_clinic == "Success")? "selected":"" }} >Success</option>
                                <option value="Failed" {{ (isset($med_second_clinic) && $med_second_clinic == "Failed")? "selected":"" }} >Failed</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Medical Clinic</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-option"></i></div>
                            <select name="med_second_clinic" id="med_second_clinic" class="form-control form-select">
                                @foreach ($medical_select as $item)
                                <option value="{{$item->code}}" {{ (isset($med_second_clinic) && $med_second_clinic == $item->code)? "selected":"" }} >{{$item->description}}</option>
                                @endforeach
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label style="font-weight:600">Medical Cost</label>
                        <div class="input-group">
                            <div class="input-group-text"><i class="bi bi-receipt"></i></div>
                            <input type="number" id="med_second_cost" name="med_second_cost" class="form-control" placeholder="Enter Medical Cost" value="{{$med_second_cost}}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form id="profileForm" enctype="multipart/form-data">
@csrf
<input type="hidden" name="applicant_id" value="{{$applicant_id}}">
</form>

<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
    })

    $(document).ready(function () {
        
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
        
        $('.form-select').select2({
            theme: 'bootstrap-5'
        });
        
    });

    $("input:text, textarea").on("change", function(){
        if ($(this).val()) {
            saveSingleProfileColumn($(this));
        }else return;   
    });

    function saveSingleProfileColumn(tags){
        if(tags.val()){
            $("<input type='text'/>")
            .attr("name", tags.attr("name"))
            .attr("value", tags.val())
            .prependTo("#profileForm");

            var formdata = $("#profileForm").serialize();

            $.ajax({
                url : "{{ url('applicant/store') }}",
                type : "POST",
                data : formdata,
                success : function(response){
                    Toast.fire({
                        icon: 'success',
                        title: 'Updated'
                    });
                }
            });
        }
    }

</script>