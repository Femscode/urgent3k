@extends('dashboard.master')
@section('header')
@endsection

@section('content')
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            {{-- @if($user->bvn == null)  --}}
            @if($user->approved == 0) 
                <div class='alert alert-danger'>
                    <h4><strong>Let's Know You!<br> Setup your KYC in 1Min.</strong></h4>
                    <p>Click <a href='/kyc'>here</a> to complete your profile to access your <b>URGENT3K</b>.</p>
                </div>
            @endif
            <div class="row">

                <!-- Sales Card -->
            


                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">My Loans</h5>
                            <table class="datatable table">
                                <thead>
                                    <tr>
                                        <th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1"
                                            colspan="1" aria-label="Campaign: activate to sort column ascending"
                                            style="width: 0px;"></th>


                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($loans as $key => $loan)

                                    <tr>
                                        <td>
                                            <div style='border-top:0px solid #004085;background-color:#cce5ff;border-color:#b8daff;color:#004085'
                                                class="position-relative p-4  bg-light-primary rounded">
                                                <div
                                                    class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-primary">
                                                </div>
                                                <a href="#" style='color:#004085'
                                                    class="mb-1 h2 text-hover-primary alert-heading">
                                                    <b>{{
                                                        $loan->reference }} (NGN{{ number_format($loan->totalamount)
                                                        }})</b><br></a>






                                                @if($loan->status == 1)
                                                <span class='p-2 text-dark'>
                                                    Approved

                                                    @elseif($loan->status == 0)
                                                    <span class='p-2 text-dark'>
                                                        Declined

                                                        @elseif($loan->status == 3)
                                                        <span class='p-2 text-dark'>
                                                            Paid

                                                            @else

                                                            <span class='p-2 text-dark'>
                                                                Requested
                                                                @endif on
                                                                {{ date('jS \of F, Y', strtotime($loan->updated_at)) }}

                                                            </span>
                                                            <br><br>
                                                            @if($loan->status == 1)
                                                            @if($loan->dayDifference > 5)

                                                            <span class='bg-danger text-white rounded-pill p-2'>
                                                                <div class="spinner-grow spinner-grow-sm "
                                                                    role="status">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                                Payment
                                                                Due for
                                                                {{ $loan->dayDifference - 5 }} days
                                                            </span>
                                                            @else
                                                            <span class='bg-warning rounded-pill ms-1 p-2'>
                                                                <div class="spinner-grow spinner-grow-sm "
                                                                    role="status">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                                Payment
                                                                Remaining {{ 5 - $loan->dayDifference }} days
                                                            </span>
                                                            @endif
                                                            @elseif($loan->status == 2)
                                                            <span class='bg-warning rounded-pill ms-1 p-2'>
                                                                <div class="spinner-grow spinner-grow-sm "
                                                                    role="status">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                                Approveal Pending
                                                            </span>

                                                            @elseif($loan->status == 0)
                                                            <span class='bg-danger rounded-pill ms-1 p-2'>
                                                                <div class="spinner-grow spinner-grow-sm "
                                                                    role="status">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                                Loan Declined
                                                            </span>

                                                            @else
                                                            <span class='bg-success text-white rounded-pill ms-1 p-2'>
                                                                <div class="spinner-grow spinner-grow-sm "
                                                                    role="status">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                                Loan Paid, Thanks!
                                                            </span>

                                                            @endif
                                                            <br>


                                                            @if($loan->status !== 3)
                                                            <a   href='/loaninfo/{{ $loan->uid }}'
                                                                class='btn btn-secondary btn-sm'>Loan
                                                                Info</a>
                                                            <a href='/makepayment/{{ $loan->uid }}'
                                                                class='btn btn-primary btn-sm'>Pay Back</a>
                                                            @else

                                                            <a href='/loaninfo/{{ $loan->uid }}'
                                                                class='btn btn-secondary btn-sm'>Loan
                                                                Info</a>

                                                            @endif



                                            </div>
                                        </td>
                                    </tr>

                                    @endforeach


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div><!-- End Recent Sales -->

            </div>
        </div><!-- End Left side columns -->

       

    </div>
</section>
@endsection

@section('script')
@endsection