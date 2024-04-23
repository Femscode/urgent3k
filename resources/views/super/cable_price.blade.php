@extends('super.master')

@section('header')
@endsection

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Container-->
    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <!--begin::Profile Account Information-->
        <div class="row">

            <!--begin::Content-->
            <div class="col-md-12">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h3 class="card-label">Cable Prices
                            </h3>
                        </div>

                    </div>
                    <div class="card-body">

                        <table class="datatable table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Company</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Actual Price</th>
                                    <th scope="col">Real Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cables as $key => $cable)

                                <tr>

                                    <td>
                                        @if($cable->company == 1)
                                        DSTV
                                        @elseif($cable->company == 2)
                                        GOTV
                                       
                                        @else
                                        STARTIMES
                                        @endif



                                    </td>
                                    <td><input id='plan_name_{{ $cable->plan_id }}' class='form-control' value="{{ $cable->plan_name }}"/></td>
                                    <td><input id='actual_price_{{ $cable->plan_id }}' class='form-control' value="{{ $cable->actual_price }}"/></td>
                                    <td><input id='real_price_{{ $cable->plan_id }}' class='form-control' value="{{ $cable->real_price }}"/></td>
                                   
                                    <td>
                                        <a data-id='{{ $cable->plan_id }}' class='update_cable btn btn-success btn-sm'>Update</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Profile Account Information-->
    </div>
    <!--end::Container-->
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        var oTable = $('.datatable').DataTable({
            ordering: false,
            searching: true
            });   

        @if (session('message'))
        Swal.fire('Success!',"{{ session('message') }}",'success');
    @endif
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

    $('body').on('click', '.update_cable', function() {

                    id = $(this).data('id');
                  
                    var fd = new FormData;
            fd.append('plan_id', id);
          
            fd.append('actual_price', $("#actual_price_"+id).val());
            fd.append('real_price', $("#real_price_"+id).val());
            fd.append('plan_name', $("#plan_name_"+id).val());
            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "{{route('update_cable')}}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function($data) {
                    console.log('the data', $data)
                    Swal.close()
                    Toast.fire({
                          icon: 'success',
                          title: 'Tv price updated successfully!'
                        })
					
					

                },
                error: function(data) {
                    console.log(data)
                    Swal.close()
                    Swal.fire('Opps!', data.message, 'error')
                }
            })

});
        
    })

</script>
@endsection