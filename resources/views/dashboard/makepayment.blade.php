@extends('dashboard.master')
@section('content')


<div class="flex-row-fluid ml-lg-8">
    <!--begin::Card-->
    <div class="card card-custom">
        <!--begin::Header-->
        <form class="form" method='post' action='/payloan' enctype="multipart/form-data">@csrf


            <div class="card-body m-4">
                @if($errors->any())
                <div class="alert alert-danger">
                  <p><strong>Opps Something went wrong</strong></p>
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
                <!--begin::Heading-->

                <!--begin::Form Group-->
                <div class="form-group row mb-4">
                    <label class="col-xl-3 col-lg-3 col-form-label"></label>
                    <div class="col-lg-9 col-xl-6">
                        <div style=''
                            class="p-4 alert alert-secondary rounded bg-soft-primary font-weight-bold text-left">
                            <b>Loan ID: </b>{{ $loan->reference }}<br>
                            <b>Amount Borrowed: </b>₦<span id='subtotal'>{{ number_format($loan->amount) }}</span>
                            <br><b>Interest: </b>₦<span id='charges'>{{ number_format(ceil($loan->charges)) }}</span>
                            <br><b>Total Payable Amount: </b>₦<span id='totalamount'>{{
                                number_format($loan->totalamount) }}</span>
                            <input name='amount' type='hidden' id='totalamounthidden'
                                value="{{ $loan->totalamount }}" />
                            <br><br>
                            <div class='alert alert-secondary'
                                style='border:1px dashed #004085;background-color:#cce5ff;color:#004085'>
                                <b>Mode Of Payment</b><br>
                                <input required class="form-check-input" name='paymentmode' type='radio'
                                    value='Transfer' checked>Instant Transfer
                                <input required class="form-check-input" name='paymentmode' type='radio'
                                    value='Card'>Credit Card
                                <br>
                                <b>Payment Type</b><br>
                                <input required class="form-check-input" id='fullpayment' name='paymenttype' type='radio' value='Full'
                                    checked>Full Payment
                                <input required class="form-check-input" id='partpayment' name='paymenttype'
                                    type='radio' value='Part'>Part Payment
                                    <input type='hidden' value='{{ $loan->uid }}' name='loanId'/>
                                <div id='showpaymentform' style='display:none'>

                                    <input type='number' id='partpaymentamount' class='form-control'
                                        name='partpaymentamount' max="{{ $loan->totalamount}}" placeholder="Enter part payment amount" />
                                </div>

                                <div class=" align-item-center col-12">
                                    <button type="submit" style='background:#004085'
                                        class="p-2 mt-2 btn btn-primary font-weight-bold btn-sm">Proceed To Make
                                        Payment</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card-->
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
        @if (session('message'))
        Swal.fire('Success!',"{{ session('message') }}",'success');
    @endif
   @if (session('error'))
        Swal.fire('Incorrect Pin!',"{{ session('error') }}",'error');
    @endif
   
    $("#partpayment").click(function() {
      
        $("#showpaymentform").show()
    })
    $("#fullpayment").click(function() {
        $("#showpaymentform").hide()
       
    })

    $("#amount").on('input', function() {
    var amount = parseFloat($("#amount").val());
    if (isNaN(amount)) {
        amount = 0;
    }
    if(amount <=100000) {
        var charges = 0.02 * amount;
    } else {
        var charges = 0.01 * amount;
    }
    var totalamount = amount + charges;

    var formattedAmount = formatAsCurrency(amount);
    var formattedCharges = formatAsCurrency(charges);
    var formattedTotalAmount = formatAsCurrency(totalamount);

    $("#subtotal").text(formattedAmount);
    $("#charges").text(formattedCharges);
    $("#totalamount").text(formattedTotalAmount);
    $("#totalamounthidden").val(totalamount) ;
    $("#chargehidden").val(charges) ;
    });

            function formatAsCurrency(number) {
                return number.toLocaleString('en-US', {
                style: 'currency',
                currency: 'NGN'
                });
            }

    })
  
</script>
@endsection