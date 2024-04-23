@extends('dashboard.master1')

@section('header')
<style>
    .credit-card {
        
 background: linear-gradient(to right, #fb9129, #155724);
 border-radius: 10px;
 box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
 overflow: hidden;
 width: 300px;
 margin: 20px;
 color: black;
}

.card {
 border: none;
 
 color:black;
}
</style>
@endsection

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <!--begin::Container-->
        <div class="row">
            <!--begin::Profile Account Information-->

            <!--begin::Content-->
            <div class="col-md-12">
                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Header-->

                    <!--end::Header-->
                    <!--begin::Form-->

                    <div class="card-body">
                        <!--begin::Heading-->


                        <div class="text-center my-8">
                            <span class=" text-gray-500 fw-bold fs-4">-- FUND WALLET --</span>
                        </div>
                        @if($user->account_no !== null)

                        <div class="credit-card justify-content-center">
                            <div class="card card-dashed bg-gradient-primary flex-row flex-stack flex-wrap p-6 text-black m-2">
                                <!--begin::Info-->
                                <h4>Transfer to your virtual account</h4>
                                <div class="d-flex flex-column p-2 m-2">
                        
                                    <div class="d-flex align-items-center">
                        
                                        <div>
                                            <div class="fs-6 fw-semibold">
                                                Acct. No :
                                            </div>
                                            <div class="fs-4 fw-bold"><strong>{{ $user->account_no ?? "No account generated yet!" }}</strong></div>
                                            <div class="fs-6 fw-semibold">
                                                Bank Name :
                                            </div>
                                            <div class="fs-6 fw-bold"><strong>{{ $user->bank_name ?? "No account generated yet!" }}</strong></div>
                                            <div class="fs-6 fw-semibold">
                                                Account Name :
                                            </div>
                                            <div class="fs-4 fw-bold"><strong>{{ $user->account_name }}</strong></div>
                        
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                        
                            </div>
                        </div>

                        @else

                        
                        <div class='alert alert-success'>
                            <h2>Get yourself a permanent virtual account!</h2>
                            <ol>
                                <li>Send any amount at anytime</li>
                                <li>Enjoy less charges</li>
                                <li>Enjoy fast funding transaction speed</li>
                            </ol>
                            <a id='showBvn' style='color:red;cursor:pointer'>Click here to generate your permanent virtual account→</a><br>
                            <div style='display:none' id='bvnfield'>
                            <form method='post' action='/generatePermanentAccount' style='display: inline-block;'>@csrf 
                                <input type='number' name='bvn' placeholder='Enter Your BVN number' class='form-control' style='display: inline-block; width: auto;'/>
                                <input type='submit' class='btn btn-success' style='display: inline-block; width: auto;'/>
                            </form>
                            </div>
                            
                        </div>
                        @endif

                        <hr>
                        <h4 class='text-center'>
                        --------------Or-----------------</h4>
                        <div class="py-2">
                            <form method="POST" action="{{ route('checkout',['subdomain']) }}" accept-charset="UTF-8"
                                class="form-horizontal" role="form">@csrf
                                <div class="row" style="margin-bottom:40px;">
                                    <div class="col-md-12 col-md-offset-2">

                                        <input required name='amount' type="number" min='100' id='u_amount' class="form-control"
                                            placeholder="Amount" aria-label="Amount">
                                            <span class='text-danger' id='show_charge'></span>


                                     

                                        <input type="hidden" name="metadata"
                                            value="{{ json_encode($array = ['phone' => $user->phone,]) }}">
                                        <div>


                                            <input required type='radio' name='type' value='transfer' />
                                            <label class="form-check-label" for="Pay with bank transfer">
                                                Automatic Bank Transfer
                                            </label>
                                            <input required type='radio' name='type' value='card' />
                                            <label class="form-check-label" for="Pay with card">
                                                Pay With Credit Card
                                            </label>
                                        </div>
                                      
                                        <p class='mt-2 justify-content-center'
                                            style='display:flex;justify-content:center'>
                                            <button class="btn btn-success btn-lg btn-block" type="submit"
                                                value="Pay Now!">
                                                <i class="fa fa-plus-circle fa-lg"></i>
                                                Fund Wallet
                                            </button>
                                        </p>

                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>



                    <!--end::Form-->
                </div>

                <!--end::Card-->
            </div>
            <!--end::Content-->

            <!--end::Profile Account Information-->
        </div>
        <!--end::Container-->
    </div>
</div>

@endsection

@section('script')
<script>
    $(document).ready(function() {
        @if (session('message'))
        Swal.fire('Success!',"{{ session('message') }}",'success');
       @endif

       $("#showBvn").on('click', function() {
        $("#bvnfield").show()
    })
  
    $("#u_amount").on('input', function() {
        price = $("#u_amount").val()
       
        if (price <= 1000) {
            charges = 10;
            price -= charges;
        } else if (price < 3000) {
            charges = 30;
            price -= charges;
        // } else if (price < 5000) {
        //     charges = 50;
        //     price -= charges;
        } else {
            charges = 50;
            price -= charges;
        }
        $("#show_charge").text("Charges : NGN"+charges)
    })
    })

</script>
@endsection 