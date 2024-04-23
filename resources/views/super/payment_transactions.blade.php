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
                            <h3 class="card-label">Payment Transactions
                            </h3>
                        </div>
                     
                    </div>
                    <div class="card-body">
                        <div class='col-md-6'>
                            <input type="text" class="form-control" placeholder="Search..." id="searchTable">
                            </div>
                        <table class="datatable table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Reference</th>
                                    <th scope="col">Details</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Before</th>
                                    <th scope="col">After</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($payments as $key => $tranx)

                                <tr>

                                    <td>{{ $tranx->reference }}<br><span class='text-danger'>{{ $tranx->user->name ?? "" }}</span></td>
                                    <td>{{ $tranx->description }}</td>
                                    <td>₦{{ number_format($tranx->amount) }}</td>
                                    <td>₦{{ number_format($tranx->before) }}</td>
                                    <td>₦{{ number_format($tranx->after) }}</td>
                                    <td>{{ $tranx->type }}</td>
                                    <td>
                                        {{ Date('d-m-Y H:i',strtotime($tranx->created_at)) }}
                                        @if($tranx->status == 1)
                                        <span class='badge badge-light-success'>Success</span>
                                        @else
                                        <span class='badge badge-light-danger'>Failed</span>
                                        @endif
                                    
                                    </td>
                                    <td>
                                        <a href='' class='btn btn-success btn-sm'>Print</a>
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