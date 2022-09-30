<form id="reportForm" class="row g-2" action="{{ url('report/generateReport') }}" method="POST" target="_blank">
    @csrf
    <input type="hidden" name="tag" value="{{($tag)}}">
    @if ($tag == "hrreport")
    <div class="col-md-6 col-sm-12">
        <label style="font-weight:600">Biodata Availability</label>
        <div class="input-group">
            <div class="input-group-text"><i class="bi bi-option"></i></div>
            <select name="bio_availability" id="bio_availability" class="form-control form-select">
                <option value="" >All</option>
                <option value="Sold" >Sold</option>
                <option value="Available" >Available</option>
                <option value="Signed Up" >Signed Up</option>
                <option value="Pending" >Pending</option>
                <option value="Backed out" >Backed out</option>
                <option value="Resell/Push" >Resell/Push</option>
            </select>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please input.
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <label style="font-weight:600">Account Status</label>
        <div class="input-group">
            <div class="input-group-text"><i class="bi bi-person-check"></i></div>
            <select name="isactive" id="isactive" class="form-control form-select">
                <option value="" >All</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please input.
            </div>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <h4 class="text-center p-1">Select Data</h4>
    @php
        echo $showColumn;
    @endphp
    @else
    
    @endif
</form>

<script>
    
    $(document).ready(function () {
        
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
        
        $('.form-select').select2({
            dropdownParent: $('#modal-view'),
            theme: 'bootstrap-5'
        });
        
    });
    
    $("#saveModal").unbind("click").click(function(){
        jQuery('#reportForm').submit();
    });
    
</script>