@extends('dashboard.master')

@section('header')
<script src="https://checkout.flutterwave.com/v3.js"></script>
@endsection

@section('content')

    <div class="row">
        <!--begin::Profile Account Information-->

        <div class="card mb-xl-10">
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                data-bs-target="#kt_account_profile_details" aria-expanded="true"
                aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h2 class="fw-bolder m-0">Pay With Card</h2>
                </div>
                <!--end::Card title-->
            </div>

            <div class="card-body">
                <!--begin::Heading-->

                <div class="alert bg-light-success alert-custom alert-light-success fade show mb-2" role="alert">
                    {{-- <div class="alert-icon">
                        <span class="svg-icon svg-icon-3x svg-icon-info">
                            <!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Code/Info-circle.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                                    <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1"></rect>
                                    <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1"></rect>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </div> --}}
                    <input id='phone' value='{{ $user->phone }}' type='hidden' />
                    <input id='name' value='{{ $user->name }}' type='hidden' />
                    <input id='email' value='{{ $user->email }}' type='hidden' />
                    <input id='loan_id' value='{{ $loanId }}' type='hidden' />
                  
                    <input id='amount' value='{{ $amount }}' type='hidden' />
                    <input id='redirect_url' value='{{ $callback_url }}' type='hidden' />
                    <input id='public_key' value='{{ $public_key }}' type='hidden' />

                    <div class="alert-text fw-semibold fs-6 text-center">You are about to make a total payment
                        of <br>
                        <span class='font-weight-bold text-success' style='font-size:25px'>NGN{{
                            number_format($amount,2) }}</span>
                    </div>

                    <p class='mt-2 justify-content-center' style='display:flex;justify-content:center'>
                        <button class="btn btn-success btn-lg btn-block" onclick="makePayment()" value="Pay Now!">
                            <i class="fa fa-plus-circle fa-lg"></i>
                            Yes, Proceed
                        </button>
                    </p>
                </div>

            </div>



            <!--end::Form-->
        </div>


        <!--end::Profile Account Information-->
    </div>


@endsection

@section('script')
<script>
    var phone = $("#phone").val()
    var email = $("#email").val()
    var amount = $("#amount").val()
    var public_key = $("#public_key").val()
    var redirect_url = $("#redirect_url").val()

        function makePayment() {
           console.log(phone, email, amount, public_key, redirect_url)
  FlutterwaveCheckout({
    public_key: public_key,
    tx_ref:  $("#loan_id").val(),
    amount: amount,
    currency: "NGN",
    payment_options: "card, mobilemoneyghana, ussd",
    redirect_url: redirect_url,
    meta: {
     
      loan_id : $("#loan_id").val()
    },
    customer: {
      email: email,
      phone_number: phone,
      name: name,
    },
    customizations: {
      title: "SECUREWAYBILL Checkout",
      description: "Fast and Easy Payment",
      logo: "https://vtubiz.com/assets/img/logo/vtulogo.png",
    },
  });
}

</script>
@endsection