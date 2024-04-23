@extends('super.master')

@section('header')
@endsection

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Container-->
    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <!--begin::Profile Account Information-->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Contact Gain</h4>
                        <form method='post' action='/downloadCSV'>@csrf
                            <div class="form-group row">
                                <div class='col-md-6'>
                                    <label for="exampleInputEmail1">From</label>
                                    <input type="date" class="form-control" name='from' >
                                </div>
                                <div class='col-md-6'>
                                    
                                    <label for="exampleInputPassword1">To</label>
                                    <input type="date" class="form-control" name='to' >
                                </div>
                            </div>
                          
                            <div class="form-group">
                              <label for="exampleInputPassword1">Prefix</label>
                              <input type="text" class="form-control" name='prefix' placeholder='B3_Fastpay_User' >
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Download CSV</button>
                          </form>

                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <!-- end col -->
        </div>
        <!--end::Profile Account Information-->
    </div>
    <!--end::Container-->
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        var oTable = $('.datatable').DataTable({
            ordering: false,
            searching: true
            });   
            $('#searchTable').on('keyup', function() {
              oTable.search(this.value).draw();
            });

        @if (session('message'))
        Swal.fire('Success!',"{{ session('message') }}",'success');
    @endif
        
    })

</script>
@endsection