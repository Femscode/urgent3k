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
                            <h3 class="card-label">Data Plan Status
                            </h3>
                        </div>

                    </div>
                    <div class="card-body">

                        <table class="datatable table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Network</th>
                                    <th scope="col">Plan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               <tr>
                                    <td>MTN</td>
                                    <td>SME</td>
                                    <td>{{ $mtn_sme->status }}</td>
                                    <td>
                                        @if($mtn_sme->status == 0)
                                        <a href="/plan_status/1/sme" class='btn btn-sm btn-success' onclick='return confirm("Change the status of this plan?")'>
                                            Enable
                                        </a>
                                        @else 
                                        <a href="/plan_status/1/sme" class='btn btn-sm btn-danger' onclick='return confirm("Change the status of this plan?")'>
                                            Disable
                                        </a>
                                        @endif
                                    </td>
                               </tr>
                               <tr>
                                    <td>MTN</td>
                                    <td>CG</td>
                                    <td>{{ $mtn_cg->status }}</td>
                                    <td>
                                        @if($mtn_cg->status == 0)
                                        <a href="/plan_status/1/cg" class='btn btn-sm btn-success' onclick='return confirm("Change the status of this plan?")'>
                                            Enable
                                        </a>
                                        @else 
                                        <a href="/plan_status/1/cg" class='btn btn-sm btn-danger' onclick='return confirm("Change the status of this plan?")'>
                                            Disable
                                        </a>
                                        @endif
                                    </td>
                               </tr>
                               <tr>
                                    <td>MTN</td>
                                    <td>cg_lite</td>
                                    <td>{{ $mtn_cg_lite->status }}</td>
                                    <td>
                                        @if($mtn_cg_lite->status == 0)
                                        <a href="/plan_status/1/cg_lite" class='btn btn-sm btn-success' onclick='return confirm("Change the status of this plan?")'>
                                            Enable
                                        </a>
                                        @else 
                                        <a href="/plan_status/1/cg_lite" class='btn btn-sm btn-danger' onclick='return confirm("Change the status of this plan?")'>
                                            Disable
                                        </a>
                                        @endif
                                    </td>
                               </tr>
                               <tr>
                                    <td>MTN</td>
                                    <td>direct</td>
                                    <td>{{ $mtn_direct->status }}</td>
                                    <td>
                                        @if($mtn_direct->status == 0)
                                        <a href="/plan_status/1/direct" class='btn btn-sm btn-success' onclick='return confirm("Change the status of this plan?")'>
                                            Enable
                                        </a>
                                        @else 
                                        <a href="/plan_status/1/direct" class='btn btn-sm btn-danger' onclick='return confirm("Change the status of this plan?")'>
                                            Disable
                                        </a>
                                        @endif
                                    </td>
                               </tr>
                          
                               <tr>
                                    <td>GLO</td>
                                    <td>cg</td>
                                    <td>{{ $glo_cg->status }}</td>
                                    <td>
                                        @if($glo_cg->status == 0)
                                        <a href="/plan_status/2/cg" class='btn btn-sm btn-success' onclick='return confirm("Change the status of this plan?")'>
                                            Enable
                                        </a>
                                        @else 
                                        <a href="/plan_status/2/cg" class='btn btn-sm btn-danger' onclick='return confirm("Change the status of this plan?")'>
                                            Disable
                                        </a>
                                        @endif
                                    </td>
                               </tr>
                             
                               <tr>
                                    <td>GLO</td>
                                    <td>direct</td>
                                    <td>{{ $glo_direct->status }}</td>
                                    <td>
                                        @if($glo_direct->status == 0)
                                        <a href="/plan_status/2/direct" class='btn btn-sm btn-success' onclick='return confirm("Change the status of this plan?")'>
                                            Enable
                                        </a>
                                        @else 
                                        <a href="/plan_status/2/direct" class='btn btn-sm btn-danger' onclick='return confirm("Change the status of this plan?")'>
                                            Disable
                                        </a>
                                        @endif
                                    </td>
                               </tr>
                               <tr>
                                    <td>AIRTEL</td>
                                    <td>cg</td>
                                    <td>{{ $airtel_cg->status }}</td>
                                    <td>
                                        @if($airtel_cg->status == 0)
                                        <a href="/plan_status/3/cg" class='btn btn-sm btn-success' onclick='return confirm("Change the status of this plan?")'>
                                            Enable
                                        </a>
                                        @else 
                                        <a href="/plan_status/3/cg" class='btn btn-sm btn-danger' onclick='return confirm("Change the status of this plan?")'>
                                            Disable
                                        </a>
                                        @endif
                                    </td>
                               </tr>
                               <tr>
                                    <td>AIRTEL</td>
                                    <td>direct</td>
                                    <td>{{ $airtel_direct->status }}</td>
                                    <td>
                                        @if($airtel_direct->status == 0)
                                        <a href="/plan_status/3/direct" class='btn btn-sm btn-success' onclick='return confirm("Change the status of this plan?")'>
                                            Enable
                                        </a>
                                        @else 
                                        <a href="/plan_status/3/direct" class='btn btn-sm btn-danger' onclick='return confirm("Change the status of this plan?")'>
                                            Disable
                                        </a>
                                        @endif
                                    </td>
                               </tr>
                               <tr>
                                    <td>9MOBILE</td>
                                    <td>SME</td>
                                    <td>{{ $nmobile_sme->status }}</td>
                                    <td>
                                        @if($nmobile_sme->status == 0)
                                        <a href="/plan_status/4/sme" class='btn btn-sm btn-success' onclick='return confirm("Change the status of this plan?")'>
                                            Enable
                                        </a>
                                        @else 
                                        <a href="/plan_status/4/sme" class='btn btn-sm btn-danger' onclick='return confirm("Change the status of this plan?")'>
                                            Disable
                                        </a>
                                        @endif
                                    </td>
                               </tr>
                               <tr>
                                    <td>9MOBILE</td>
                                    <td>direct</td>
                                    <td>{{ $nmobile_direct->status }}</td>
                                    <td>
                                        @if($nmobile_direct->status == 0)
                                        <a href="/plan_status/4/direct" class='btn btn-sm btn-success' onclick='return confirm("Change the status of this plan?")'>
                                            Enable
                                        </a>
                                        @else 
                                        <a href="/plan_status/4/direct" class='btn btn-sm btn-danger' onclick='return confirm("Change the status of this plan?")'>
                                            Disable
                                        </a>
                                        @endif
                                    </td>
                               </tr>
                             

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