@extends('dashboard.master')
@section('header')
@endsection

@section('content')
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
            {{-- @if($user->bvn == null) --}}

            @if($loan->status == 3)
            <div class='alert alert-success'>
                <h3><b>Thanks for keeping to agreement, this loan has been paid!</b></h3>
                <p>Loan ID :<strong> {{ $loan->reference }}  </strong></p>
                <p>Loan Amount :<strong> ₦{{ number_format($loan->amount) }} </strong></p>
                <p>Borrowed Date :<strong> {{ Date('d-m-Y',strtotime($loan->created_at)) }}  </strong></p>
                <p>Paid Date :<strong>  {{ Date('d-m-Y',strtotime($loan->updated_at)) }} </strong></p>
                <p>Total Interest :<strong> ₦{{ number_format($totalinterest) }} </strong></p>
                <p>Total Amount Paid :<strong> ₦{{ number_format($totalinterest + $loan->amount) }} </strong></p>
               
                {{-- <p>Click <a href='/kyc'>here</a> to complete your profile to access your <b>URGENT3K</b>.</p> --}}
            </div>
            @else
            <div class='alert alert-primary'>
                <p>Loan ID :<strong> {{ $loan->reference }}  </strong></p>
                <p>Loan Amount :<strong> ₦{{ number_format($loan->amount) }} </strong></p>
                <p>Borrowed Date :<strong> {{ Date('d-m-Y',strtotime($loan->created_at)) }}  </strong></p>
                <p>Due Date :<strong>  {{ Date('d-m-Y',strtotime($loan->created_at ."+ 5 days")) }} </strong></p>
                <p>Total Interest :<strong> ₦{{ number_format($totalinterest) }} </strong></p>
                <p>Total Payable Amount  :<strong> ₦{{ number_format($totalinterest + $loan->amount) }} </strong></p>
                <p>Status  :<strong> @if($loan->status == 0)<span class='badge bg-danger'>failed</span> @elseif($loan->status == 2) <span class='badge bg-warning'>pending</span> @else <span class='badge bg-success'>Approved</span> @endif </strong></p>
                <a href='makepayment/{{ $loan->uid }}' class="btn btn-sm btn-primary">Pay
                    Back</a>
                {{-- <p>Click <a href='/kyc'>here</a> to complete your profile to access your <b>URGENT3K</b>.</p> --}}
            </div>
            @endif
        
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

            <!-- Recent Activity -->
            <div class="card">
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
                    <h5 class="card-title">Interest History</h5>

                    <div class="activity">
                        @foreach($interests as $int)

                        <div class="activity-item d-flex">
                            <div class="activite-label">{{ \Carbon\Carbon::parse($int->created_at)->diffForHumans() }}
                            </div>
                            <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                            <div class="activity-content">
                                <a href="#" class="fw-bold text-dark"> + ₦{{ number_format($int->interest) }}</a><br> = ₦{{ number_format($int->after) }}
                            </div>
                        </div><!-- End activity item-->
                        @endforeach

                        <div class='pagination'> {!! $interests->links('pagination::bootstrap-4') !!}</div>


                    </div>
                   
                </div>
            </div><!-- End Recent Activity -->


        </div><!-- End Right side columns -->

    </div>
</section>
@endsection

@section('script')
@endsection