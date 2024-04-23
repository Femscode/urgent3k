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
                            <h5 class="card-label">Loan Transactions
                            </h5>
                        </div>

                    </div>
                    <div class="card-body">

                        <table class="datatable table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Reference</th>
                                    <th scope="col">Client</th>
                                  
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($loans as $key => $loan)

                                <tr>

                                    <td>{{ $loan->reference }}<b><br>₦{{ number_format($loan->totalamount) }}</b></td>
                                      
                                    <td>
                                        <span class='text-success'>
                                            User :
                                           
                                            {{ $loan->user->name }}
                                          
                                        </span>
                                    </td>
                                    

                                    <td>
                                        {{ Date('d-m-Y H:i',strtotime($loan->created_at)) }}<br>
                                        @if($loan->status == 0)
                                        <span class='badge bg-danger text-white rounded-pill ms-1'>Loan Rejected</span>
                                        @elseif($loan->status == 1)
                                        <span class='badge bg-success text-dark rounded-pill ms-1'>Loan Approved</span>
                                        @elseif($loan->status == 2)
                                        <span class='badge bg-warning text-dark rounded-pill ms-1'>Loan Pending</span>
                                        @else
                                        <span class='badge bg-success text-dark rounded-pill ms-1'>Loan Paid</span>
                                        @endif

                                    </td>
                                    <td>
                                      
                                        <a href='tel:{{ $loan->user->phone ?? "09058744473" }}'
                                            class='btn btn-primary btn-sm'>Call User</a>
                                        <a href='https://wa.me/{{ substr($loan->user->phone ?? "09058744473", 1) }}'
                                            class='btn btn-info btn-sm'>Message User</a>

                                            
                                        <a href='/approve_loan/{{ $loan->uid ?? "" }}' onclick='return confirm("Are you sure you want to approve this loan")' class='btn btn-warning btn-sm'>Approve Loan</a>
                                     
                                        <a href='/revert_loan/{{ $loan->uid ?? "" }}' onclick='return confirm("Are you sure you want to disapprove this loan")' class='btn btn-danger btn-sm'>Dissaprove Loan</a>
                                      
                                      
                                   
                                        <a href='loaninfo/{{ $loan->uid }}' class="btn btn-sm btn-secondary">Loan
                                            Info</a>
                                       
                                        <a href='/print_transaction_receipt/{{ $loan->id }}'
                                            class='btn btn-info btn-sm'>Print</a>
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