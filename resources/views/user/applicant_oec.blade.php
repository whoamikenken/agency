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
        <div class="card-header" style="font-size: 23px;background: #0d6cf9;color: white;">Certificates</div>
        <div class="card-body text-secondary">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">OEC No.</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-pass"></i></div>
                        <input type="text" id="oec_number" name="oec_number"
                        class="form-control" placeholder="Enter OEC No." value="{{ $oec_number }}">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please input.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">Pag-ibig No.</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-pass"></i></div>
                        <input type="text" id="oec_pagibig" name="oec_pagibig"
                        class="form-control" placeholder="Enter Pag-ibi no" value="{{ $oec_pagibig }}">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please input.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">Date Filed</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                        <input type="text" id="oec_date_filed" name="oec_date_filed" class="form-control datepicker" value="{{ $oec_date_filed }}" placeholder="Select date">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please input.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">Date Expired</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                        <input type="text" id="oec_date_expiration" name="oec_date_expiration" class="form-control datepicker" value="{{ $oec_date_expiration }}" placeholder="Select date">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please input.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">Contract Received</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                        <input type="text" id="oec_contract_received" name="oec_contract_received" class="form-control datepicker" value="{{ $oec_contract_received }}" placeholder="Select date">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please input.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">Flight Departure</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                        <input type="text" id="oec_flight_departure" name="oec_flight_departure" class="form-control datepicker" value="{{ $oec_flight_departure }}" placeholder="Select date">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please input.
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="text-center mt-5">COVID Declaration</h5>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">COVID Dec.</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="oec_covid_dec"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($oec_covid_dec != "")? "Replace":"Upload"}} COVID</label>
                        <input type="file" class="form-control form-control-sm" id="oec_covid_dec" name="oec_covid_dec">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($oec_covid_dec != "")
                    <label style="font-weight:600">Current COVID Dec.</label>
                    <div class="input-group">
                        <a class="btn btn-info text-white" target="_blank" href="{{ asset('storage/'.$oec_covid_dec.'')}}"><i class="bi bi-eye"></i> View</a>
                    </div>
                    @endif
                </div>
            </div>
            <h5 class="text-center mt-2">Insurance</h5>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">Insurance</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="oec_insurance"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($oec_insurance != "")? "Replace":"Upload"}} Insurance</label>
                        <input type="file" class="form-control form-control-sm" id="oec_insurance" name="oec_insurance">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($oec_insurance != "")
                    <label style="font-weight:600">Current Insurance</label>
                    <div class="input-group">
                        <a class="btn btn-info text-white" target="_blank" href="{{ asset('storage/'.$oec_insurance.'')}}"><i class="bi bi-eye"></i> View</a>
                    </div>
                    @endif
                </div>
            </div>
            <h5 class="text-center mt-2">Pregnancy Test</h5>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">Preg Test</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="oec_pregnancy_test"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($oec_pregnancy_test != "")? "Replace":"Upload"}} Preg Test</label>
                        <input type="file" class="form-control form-control-sm" id="oec_pregnancy_test" name="oec_pregnancy_test">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($oec_pregnancy_test != "")
                    <label style="font-weight:600">Current Preg Test</label>
                    <div class="input-group">
                        <a class="btn btn-info text-white" target="_blank" href="{{ asset('storage/'.$oec_pregnancy_test.'')}}"><i class="bi bi-eye"></i> View</a>
                    </div>
                    @endif
                </div>
            </div>
            <h5 class="text-center mt-2">Swab Test</h5>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">Swab test</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="oec_swab_test"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($oec_swab_test != "")? "Replace":"Upload"}} Swab test</label>
                        <input type="file" class="form-control form-control-sm" id="oec_swab_test" name="oec_swab_test">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($oec_swab_test != "")
                    <label style="font-weight:600">Current Swab test</label>
                    <div class="input-group">
                        <a class="btn btn-info text-white" target="_blank" href="{{ asset('storage/'.$oec_swab_test.'')}}"><i class="bi bi-eye"></i> View</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    
    $(document).ready(function () {
        
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
        
        $('.form-select').select2({
            theme: 'bootstrap-5'
        });
        
    });
    
    $("input[type=text], input[type=file], input[type=number], textarea, select").on("change", function(){
        
        if ($(this).val()) {
            saveSingleProfileColumn($(this));
        }else return;   
    });
</script>