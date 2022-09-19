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
        <div class="card-header" style="font-size: 23px;background: #0d6cf9;color: white;">(PDOS) Pre-departure Orientation Seminar</div>
        <div class="card-body text-secondary">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">Date of Seminar</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                        <input type="text" id="cert_pdos_date" name="cert_pdos_date" class="form-control datepicker" value="{{ $cert_pdos_date }}" placeholder="Select date">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please input.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">Date of Release</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                        <input type="text" id="cert_pdos_release_date" name="cert_pdos_release_date" class="form-control datepicker" value="{{ $cert_pdos_release_date }}" placeholder="Select date">
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
                    <label style="font-weight:600">Certificate</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="cert_pdos"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($cert_pdos != "")? "Replace":"Upload"}} Certificate</label>
                        <input type="file" class="form-control form-control-sm" id="cert_pdos" name="cert_pdos">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($cert_pdos != "")
                    <label style="font-weight:600">Current Certificate Document</label>
                    <div class="input-group">
                    <a class="btn btn-info text-white" target="_blank" href="{{ asset('storage/'.$cert_pdos.'')}}"><i class="bi bi-eye"></i> View</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="card border-secondary mb-3 mt-4">
        <div class="card-header" style="font-size: 23px;background: #0d6cf9;color: white;">(OWWA) Overseas Workers Welfare Administration</div>
        <div class="card-body text-secondary">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">Date of Seminar</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                        <input type="text" id="cert_owwa_date" name="cert_owwa_date" class="form-control datepicker" value="{{ $cert_owwa_date }}" placeholder="Select date">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please input.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">Date of Release</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                        <input type="text" id="cert_owwa_release_date" name="cert_owwa_release_date" class="form-control datepicker" value="{{ $cert_owwa_release_date }}" placeholder="Select date">
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
                    <label style="font-weight:600">Certificate</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="cert_owwa"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($cert_owwa != "")? "Replace":"Upload"}} Certificate</label>
                        <input type="file" class="form-control form-control-sm" id="cert_owwa" name="cert_owwa">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($cert_owwa != "")
                    <label style="font-weight:600">Current Certificate Document</label>
                    <div class="input-group">
                    <a class="btn btn-info text-white" target="_blank" href="{{ asset('storage/'.$cert_owwa.'')}}"><i class="bi bi-eye"></i> View</a>
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
            if($(this).attr("type") == "file"){
                setTimeout(() => {
                    $("#pills-record-tab").click();
                }, 2000);
            }
        }else return;   
    });
</script>