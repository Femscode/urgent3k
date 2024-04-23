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
                        <h4 class="card-title mb-4">Duplicate Transactions, <span class='alert alert-success'>Balance : NGN{{ number_format($easy_balance,2) }}</span></h4>
                        <table class="datatable table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Username</th>
                                   
                                    <th scope="col">Details</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date & Time</th>
                                  
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($duplicate_transactions as $key => $tranx)

                                <tr>

                                    <td>{{ $tranx->user->name ?? "No name" }}<br><span class='text-danger'>{{ $tranx->title }}</span></td>
                                    <td>{{ $tranx->details }}</td>
                                    <td>₦{{ number_format($tranx->amount) }}</td>
                                    <td>{{ Date('d-m-Y | h:i',strtotime($tranx->created_at))}} | {{ Date("h:i", strtotime($tranx->created_at)) }}</td>
                                   
                                    <td>
                                        <a href='admin_delete_duplicate/confirm/{{ $tranx->id }}' onclick="return confirm('Are you sure you want to approve/debit this transaction?')" class='btn btn-success btn-sm'>Confirm/Debit</a>
                                        <a href='admin_delete_duplicate/delete/{{ $tranx->id }}' onclick="return confirm('Are you sure you want to delete/disconfirm this transaction?')" class='btn btn-danger btn-sm'>Confirm/Debit</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

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