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
                            <h3 class="card-label">Data Prices
                            </h3>
                        </div>

                    </div>
                    <div class="card-body">

                        <table class="datatable table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Network</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Actual Price</th>
                                    <th scope="col">Data Price</th>
                                    <th scope="col">Account Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $key => $data)

                                <tr>

                                    <td>
                                        @if($data->network == 1)
                                        MTN
                                        @elseif($data->network == 2)
                                        GLO
                                        @elseif($data->network == 3)
                                        AIRTEL
                                        @else
                                        9MOBILE
                                        @endif



                                    </td>
                                    <td><input id='plan_name_{{ $data->plan_id }}' class='form-control' value="{{ $data->plan_name }}"/></td>
                                    <td><input id='actual_price_{{ $data->plan_id }}' class='form-control' value="{{ $data->actual_price }}"/></td>
                                    <td><input id='data_price_{{ $data->plan_id }}' class='form-control' value="{{ $data->data_price }}"/></td>
                                    <td><input id='account_price_{{ $data->plan_id }}' class='form-control' value="{{ $data->account_price }}"/></td>
                                   
                                    <td>
                                        <a data-id='{{ $data->plan_id }}' class='update_data btn btn-success btn-sm'>Update</a>
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

    $('body').on('click', '.update_data', function() {

                    id = $(this).data('id');
                  
                    var fd = new FormData;
            fd.append('plan_id', id);
          
            fd.append('actual_price', $("#actual_price_"+id).val());
            fd.append('data_price', $("#data_price_"+id).val());
            fd.append('account_price', $("#account_price_"+id).val());
            fd.append('plan_name', $("#plan_name_"+id).val());
            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "{{route('update_data')}}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function($data) {
                    console.log('the data', $data)
                    Swal.close()
                    Toast.fire({
                          icon: 'success',
                          title: 'Data price updated successfully!'
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