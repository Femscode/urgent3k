@extends('dashboard.master')
@section('content')


<div class="flex-row-fluid">
    <!--begin::Card-->
    <div class="card card-custom">
        <!--begin::Header-->
        <form class="form" method='post' action='/payloan' enctype="multipart/form-data">@csrf


            <div class="card-body mt-4">
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

                <div class="form-group row mb-4">
                    <div class="col-lg-12 col-xl-12 col-md-12">
                        <div class="alert alert-secondary loan-details-table">
                            <table>
                                <tr>
                                    <td><b>Loan ID:</b></td>
                                    <td>{{ $loan->reference }}</td>
                                </tr>
                                <tr>
                                    <td><b>Loan Amount:</b></td>
                                    <td>₦<span id='subtotal'>{{ number_format($loan->amount) }}</td>
                                </tr>
                                <tr>
                                    <td><b>Interest:</b></td>
                                    <td>₦<span id='charges'>{{ number_format(ceil($loan->charges)) }}</td>
                                </tr>
                                <tr>
                                    <td><b>Total Amount:</b></td>
                                    <td>₦<span id='totalamount'>{{
                                number_format($loan->totalamount) }}</td>
                                    <input name='amount' type='hidden' id='totalamounthidden'
                                value="{{ $loan->totalamount }}" />
                                </tr>
                            </table>

                            <hr>

                            <div class="payment-section">
                                <div class="mode-of-payment">
                                    <b>Mode Of Payment:</b><br>
                                    <label class="custom-radio">
                                        <input required class="form-check-input" name='paymentmode' type='radio'
                                            value='Transfer' checked>Instant Transfer
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom-radio">
                                        <input required class="form-check-input" name='paymentmode' type='radio'
                                            value='Card'>Credit Card
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="payment-type">
                                    <b>Payment Type:</b><br>
                                    <label class="custom-radio">
                                        <input required class="form-check-input" id='fullpayment' name='paymenttype'
                                            type='radio' value='Full' checked>Full Payment
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom-radio">
                                        <input required class="form-check-input" id='partpayment' name='paymenttype'
                                            type='radio' value='Part'>Part Payment
                                        <span class="checkmark"></span>
                                    </label>
                                    <input type='hidden' value='{{ $loan->uid }}' name='loanId' />
                                    <div id='showpaymentform' style='display:none'>
                                        <input type='number' id='partpaymentamount' class='form-control'
                                            name='partpaymentamount' max="{{ $loan->totalamount}}"
                                            placeholder="Enter part payment amount" />
                                    </div>
                                </div>
                            </div>

                            <div class="action-buttons">
                                <button type="submit" class="btn btn-primary font-weight-bold btn-sm">Proceed To Make
                                    Payment</button>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    .loan-details-table table {
                        width: 100%;
                    }

                    .loan-details-table table td {
                        padding: 5px;
                    }

                    .action-buttons {
                        display: flex;
                        justify-content: center;
                        margin-top: 10px;
                    }

                    .action-buttons button {
                        background: #004085;
                        color: #fff;
                        padding: 8px 16px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                    }

                    .action-buttons button:hover {
                        background: #003162;
                    }

                    .payment-section {
                        margin-bottom: 20px;
                    }

                    .mode-of-payment,
                    .payment-type {
                        margin-bottom: 10px;
                    }

                    .custom-radio {
                        position: relative;
                        padding-left: 30px;
                        cursor: pointer;
                        display: block;
                    }

                    .custom-radio input {
                        position: absolute;
                        opacity: 0;
                        cursor: pointer;
                    }

                    .checkmark {
                        position: absolute;
                        top: 0;
                        left: 0;
                        height: 20px;
                        width: 20px;
                        background-color: #eee;
                        border-radius: 50%;
                    }

                    .custom-radio input:checked~.checkmark:after {
                        content: '';
                        position: absolute;
                        display: block;
                        top: 5px;
                        left: 5px;
                        width: 10px;
                        height: 10px;
                        background-color: #004085;
                        border-radius: 50%;
                    }

                    .custom-radio:hover input~.checkmark {
                        background-color: #ccc;
                    }

                    .custom-radio:hover input:checked~.checkmark:after {
                        background-color: #004085;
                    }

                    .custom-radio .checkmark:after {
                        display: none;
                        content: '';
                    }

                    .custom-radio input:checked~.checkmark {
                        background-color: #004085;
                    }

                    .custom-radio:hover input~.checkmark:after {
                        background-color: #004085;
                    }

                    .custom-radio input:checked~.checkmark:after {
                        display: block;
                    }
                </style>


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