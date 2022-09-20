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
            <h5 class="text-center mt-2">E-Registration</h5>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">E-REG</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="cert_ereg"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($cert_ereg != "")? "Replace":"Upload"}} E-Registration</label>
                        <input type="file" class="form-control form-control-sm" id="cert_ereg" name="cert_ereg">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($cert_ereg != "")
                    <label style="font-weight:600">Current E-REG</label>
                    <div class="input-group">
                        <a class="btn btn-info text-white" target="_blank" href="{{  Storage::disk('s3')->url($cert_ereg)}}"><i class="bi bi-eye"></i> View</a>
                    </div>
                    @endif
                </div>
            </div>
            <h5 class="text-center mt-2">Pre-Employment Orientation Seminar</h5>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">PEOS</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="cert_peos"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($cert_peos != "")? "Replace":"Upload"}} PEOS</label>
                        <input type="file" class="form-control form-control-sm" id="cert_peos" name="cert_peos">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($cert_peos != "")
                    <label style="font-weight:600">Current PEOS</label>
                    <div class="input-group">
                        <a class="btn btn-info text-white" target="_blank" href="{{  Storage::disk('s3')->url($cert_peos)}}"><i class="bi bi-eye"></i> View</a>
                    </div>
                    @endif
                </div>
            </div>
            <h5 class="text-center mt-2">OFW Infosheet</h5>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">Infosheet</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="cert_ofw_infosheet"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($cert_ofw_infosheet != "")? "Replace":"Upload"}} Infosheet</label>
                        <input type="file" class="form-control form-control-sm" id="cert_ofw_infosheet" name="cert_ofw_infosheet">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($cert_ofw_infosheet != "")
                    <label style="font-weight:600">Current PEOS</label>
                    <div class="input-group">
                        <a class="btn btn-info text-white" target="_blank" href="{{  Storage::disk('s3')->url($cert_ofw_infosheet)}}"><i class="bi bi-eye"></i> View</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="card border-secondary mb-3 mt-4">
        <div class="card-header" style="font-size: 23px;background: #0d6cf9;color: white;">Supporting Documents</div>
        <div class="card-body text-secondary">
            <h5 class="text-center mt-2">EC/ID988A</h5>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">EC/ID988A</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="sup_doc_id988a"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($sup_doc_id988a != "")? "Replace":"Upload"}} EC/ID988A</label>
                        <input type="file" class="form-control form-control-sm" id="sup_doc_id988a" name="sup_doc_id988a">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($sup_doc_id988a != "")
                    <label style="font-weight:600">Current EC/ID988A</label>
                    <div class="input-group">
                        <a class="btn btn-info text-white" target="_blank" href="{{  Storage::disk('s3')->url($sup_doc_id988a)}}"><i class="bi bi-eye"></i> View</a>
                    </div>
                    @endif
                </div>
            </div>
            <h5 class="text-center mt-2">EC pt6 p4</h5>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">EC pt6 p4</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="sup_pt6"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($sup_pt6 != "")? "Replace":"Upload"}} EC pt6 p4</label>
                        <input type="file" class="form-control form-control-sm" id="sup_pt6" name="sup_pt6">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($sup_pt6 != "")
                    <label style="font-weight:600">Current EC pt6 p4</label>
                    <div class="input-group">
                        <a class="btn btn-info text-white" target="_blank" href="{{  Storage::disk('s3')->url($sup_pt6)}}"><i class="bi bi-eye"></i> View</a>
                    </div>
                    @endif
                </div>
            </div>
            <h5 class="text-center mt-2">Certificate of Eligibility</h5>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">COE</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="sup_coe"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($sup_coe != "")? "Replace":"Upload"}} COE</label>
                        <input type="file" class="form-control form-control-sm" id="sup_coe" name="sup_coe">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($sup_coe != "")
                    <label style="font-weight:600">Current COE</label>
                    <div class="input-group">
                        <a class="btn btn-info text-white" target="_blank" href="{{  Storage::disk('s3')->url($sup_coe)}}"><i class="bi bi-eye"></i> View</a>
                    </div>
                    @endif
                </div>
            </div>
            <h5 class="text-center mt-2">HQ</h5>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">HQ</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="sup_hq"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($sup_hq != "")? "Replace":"Upload"}} HQ</label>
                        <input type="file" class="form-control form-control-sm" id="sup_hq" name="sup_hq">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($sup_hq != "")
                    <label style="font-weight:600">Current HQ</label>
                    <div class="input-group">
                        <a class="btn btn-info text-white" target="_blank" href="{{  Storage::disk('s3')->url($sup_hq)}}"><i class="bi bi-eye"></i> View</a>
                    </div>
                    @endif
                </div>
            </div>
            <h5 class="text-center mt-2">POLOHKSar</h5>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">POLOHKSar</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="sup_polohk"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($sup_polohk != "")? "Replace":"Upload"}} POLOHKSar</label>
                        <input type="file" class="form-control form-control-sm" id="sup_polohk" name="sup_polohk">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($sup_polohk != "")
                    <label style="font-weight:600">Current POLOHKSar</label>
                    <div class="input-group">
                        <a class="btn btn-info text-white" target="_blank" href="{{  Storage::disk('s3')->url($sup_polohk)}}"><i class="bi bi-eye"></i> View</a>
                    </div>
                    @endif
                </div>
            </div>
            <h5 class="text-center mt-2">Privacy Policy</h5>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">Privacy Policy</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="sup_privacy_policy"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($sup_privacy_policy != "")? "Replace":"Upload"}} Privacy Policy</label>
                        <input type="file" class="form-control form-control-sm" id="sup_privacy_policy" name="sup_privacy_policy">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($sup_privacy_policy != "")
                    <label style="font-weight:600">Current Privacy Policy</label>
                    <div class="input-group">
                        <a class="btn btn-info text-white" target="_blank" href="{{  Storage::disk('s3')->url($sup_privacy_policy)}}"><i class="bi bi-eye"></i> View</a>
                    </div>
                    @endif
                </div>
            </div>
            <h5 class="text-center mt-2">Affidavit</h5>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">Affidavit</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="sup_affidavit"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($sup_affidavit != "")? "Replace":"Upload"}} Affidavit</label>
                        <input type="file" class="form-control form-control-sm" id="sup_affidavit" name="sup_affidavit">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($sup_affidavit != "")
                    <label style="font-weight:600">Current Affidavit</label>
                    <div class="input-group">
                        <a class="btn btn-info text-white" target="_blank" href="{{  Storage::disk('s3')->url($sup_affidavit)}}"><i class="bi bi-eye"></i> View</a>
                    </div>
                    @endif
                </div>
            </div>
            <h5 class="text-center mt-2">MMR Vaccination</h5>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">MMR Vaccination</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="sup_mmr_vac"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($sup_mmr_vac != "")? "Replace":"Upload"}} MMR Vaccination</label>
                        <input type="file" class="form-control form-control-sm" id="sup_mmr_vac" name="sup_mmr_vac">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($sup_mmr_vac != "")
                    <label style="font-weight:600">Current MMR Vaccination</label>
                    <div class="input-group">
                        <a class="btn btn-info text-white" target="_blank" href="{{  Storage::disk('s3')->url($sup_mmr_vac)}}"><i class="bi bi-eye"></i> View</a>
                    </div>
                    @endif
                </div>
            </div>
            <h5 class="text-center mt-2">Infosheet</h5>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label style="font-weight:600">Infosheet</label>
                    <div class="input-group custom-file-button">
                        <label class="input-group-text" for="sup_infosheet"><i class="bi bi-file-earmark-text"></i>&nbsp;&nbsp;{{($sup_infosheet != "")? "Replace":"Upload"}} Infosheet</label>
                        <input type="file" class="form-control form-control-sm" id="sup_infosheet" name="sup_infosheet">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if ($sup_infosheet != "")
                    <label style="font-weight:600">Current PEOS</label>
                    <div class="input-group">
                        <a class="btn btn-info text-white" target="_blank" href="{{  Storage::disk('s3')->url($sup_infosheet)}}"><i class="bi bi-eye"></i> View</a>
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
                    $("#pills-document-tab").click();
                }, 2000);
            }
        }else return;   
    });
</script>