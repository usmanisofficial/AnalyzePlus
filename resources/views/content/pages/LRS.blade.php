@extends('layouts/layoutMaster')

@section('title', 'DataTables - Tables')

<!-- Vendor Styles -->
@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
  'resources/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss'
])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/flatpickr/flatpickr.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js'
])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/tables-datatables-basic.js'])
@endsection

@section('content')
<h4 class="py-3 mb-4">
  Loss Reason System
</h4>

<!-- DataTable with Buttons -->
<div class="card">
  <div class="card-datatable table-responsive pt-0">
    <table class="datatables-basic table">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th>id</th>
          <th>StopID</th>
          <th>Start Time</th>
          <th>End Time</th>
          <th>Machine Name</th>
          <th>Loss Category</th>
          <th>Loss Reason</th>
          <th>Loss Duration</th>
          <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!-- Modal to add new record -->
<div class="offcanvas offcanvas-end" id="add-new-record">
  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title" id="exampleModalLabel">Update Stop</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body flex-grow-1">
    <form class="add-new-record pt-0 row g-2" id="form-add-new-record" onsubmit="return false">
      <div class="col-sm-12">
        <label class="form-label" for="basicFullname">Stop ID </label>
        <div class="input-group input-group-merge disabled">
        <span id="basicFullname2" class="input-group-text"><i class="ti ti-hash"></i></span>
          <input type="text" id="basicFullname" class="form-control  dt-stop-id" name="basicFullname" disabled placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
        </div>
      </div>
      <div class="col-sm-12">
        <label class="form-label" for="basicLossCategory">Loss Category</label>
        <select class="form-select dt-category" id="basicLossCategory" name="basicLossCategory" aria-label="Minor Stop">
          <option value="0">Select</option>
          <option value="1">Minor Stop</option>
          <option value="2">Planned Stop</option>
          <option value="3">Unplanned Stop</option>
          <option value="4">Emergency Stop</option>
        </select>
      </div>
      <div class="col-sm-12">
        <label class="form-label" >Loss Reason</label>
        <div class="input-group input-group-merge">
        <textarea class="form-control dt-loss-reason" rows="3">The most developer friendly & highly customizable HTML5 Admin</textarea>
        </div>
      </div>
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">Submit</button>
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
        <div class="form-text">
          Operators can only update once.
          <br>To change again, please contact the Supervisor/Engineer.
        </div>
      </div>
    </form>
  </div>
</div>
<!--/ DataTable with Buttons -->
@endsection
