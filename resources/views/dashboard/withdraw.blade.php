@extends('dashboard.master')

@section('header')
@endsection

@section('content')


    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <!--begin::Container-->
        
    <div class="row">

        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                data-bs-target="#kt_account_profile_details" aria-expanded="true"
                aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Withdraw Funds</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <!-- <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"> -->
                <form id="make_transfer" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    enctype='multipart/form-data' novalidate="novalidate">@csrf
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">

                        <!--begin::Input group-->

                        <!--end::Input group-->
                        <!--begin::Input group-->

                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="required">Select Bank</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Country of origination"
                                    aria-label="Country of origination"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 mb-2 fv-row fv-plugins-icon-container">

                                <select required class='form-select' id='bank_code'>
                                    <option>--Select bank--</option>
                                    <option value="120001">9mobile 9Payment Service Bank</option>
                                    <option value="801">Abbey Mortgage Bank</option>
                                    <option value="51204">Above Only MFB</option>
                                    <option value="51312">Abulesoro MFB</option>
                                    <option value="044">Access Bank</option>
                                    <option value="063">Access Bank (Diamond)</option>
                                    <option value="602">Accion Microfinance Bank</option>
                                    <option value="50036">Ahmadu Bello University Microfinance Bank</option>
                                    <option value="120004">Airtel Smartcash PSB</option>
                                    <option value="51336">AKU Microfinance Bank</option>
                                    <option value="035A">ALAT by WEMA</option>
                                    <option value="50926">Amju Unique MFB</option>
                                    <option value="51341">AMPERSAND MICROFINANCE BANK</option>
                                    <option value="50083">Aramoko MFB</option>
                                    <option value="401">ASO Savings and Loans</option>
                                    <option value="MFB50094">Astrapolaris MFB LTD</option>
                                    <option value="51229">Bainescredit MFB</option>
                                    <option value="50117">Banc Corp Microfinance Bank</option>
                                    <option value="50931">Bowen Microfinance Bank</option>
                                    <option value="FC40163">Branch International Financial Services Limited</option>
                                    <option value="565">Carbon</option>
                                    <option value="865">CASHCONNECT MFB</option>
                                    <option value="50823">CEMCS Microfinance Bank</option>
                                    <option value="50171">Chanelle Microfinance Bank Limited</option>
                                    <option value="023">Citibank Nigeria</option>
                                    <option value="50910">Consumer Microfinance Bank</option>
                                    <option value="50204">Corestep MFB</option>
                                    <option value="559">Coronation Merchant Bank</option>
                                    <option value="FC40128">County Finance Limited</option>
                                    <option value="51297">Crescent MFB</option>
                                    <option value="50162">Dot Microfinance Bank</option>
                                    <option value="050">Ecobank Nigeria</option>
                                    <option value="50263">Ekimogun MFB</option>
                                    <option value="098">Ekondo Microfinance Bank</option>
                                    <option value="50126">Eyowo</option>
                                    <option value="51318">Fairmoney Microfinance Bank</option>
                                    <option value="070">Fidelity Bank</option>
                                    <option value="51314">Firmus MFB</option>
                                    <option value="011">First Bank of Nigeria</option>
                                    <option value="214">First City Monument Bank</option>
                                    <option value="107">FirstTrust Mortgage Bank Nigeria</option>
                                    <option value="50315">FLOURISH MFB</option>
                                    <option value="501">FSDH Merchant Bank Limited</option>
                                    <option value="812">Gateway Mortgage Bank LTD</option>
                                    <option value="00103">Globus Bank</option>
                                    <option value="100022">GoMoney</option>
                                    <option value="50739">Goodnews Microfinance Bank</option>
                                    <option value="562">Greenwich Merchant Bank</option>
                                    <option value="058">Guaranty Trust Bank</option>
                                    <option value="51251">Hackman Microfinance Bank</option>
                                    <option value="50383">Hasal Microfinance Bank</option>
                                    <option value="030">Heritage Bank</option>
                                    <option value="120002">HopePSB</option>
                                    <option value="51244">Ibile Microfinance Bank</option>
                                    <option value="50439">Ikoyi Osun MFB</option>
                                    <option value="50442">Ilaro Poly Microfinance Bank</option>
                                    <option value="50457">Infinity MFB</option>
                                    <option value="301">Jaiz Bank</option>
                                    <option value="50502">Kadpoly MFB</option>
                                    <option value="082">Keystone Bank</option>
                                    <option value="50200">Kredi Money MFB LTD</option>
                                    <option value="50211">Kuda Bank</option>
                                    <option value="90052">Lagos Building Investment Company Plc.</option>
                                    <option value="50549">Links MFB</option>
                                    <option value="031">Living Trust Mortgage Bank</option>
                                    <option value="303">Lotus Bank</option>
                                    <option value="50563">Mayfair MFB</option>
                                    <option value="50304">Mint MFB</option>
                                    <option value="50515">Moniepoint MFB</option>
                                    <option value="120003">MTN Momo PSB</option>
                                    <option value="00107">Optimus Bank Limited</option>
                                    <option value="100002">Paga</option>
                                    <option value="999991">PalmPay</option>
                                    <option value="104">Parallex Bank</option>
                                    <option value="311">Parkway - ReadyCash</option>
                                    <option value="999992">Paycom</option>
                                    <option value="50743">Peace Microfinance Bank</option>
                                    <option value="51146">Personal Trust MFB</option>
                                    <option value="50746">Petra Mircofinance Bank Plc</option>
                                    <option value="076">Polaris Bank</option>
                                    <option value="50864">Polyunwana MFB</option>
                                    <option value="105">PremiumTrust Bank</option>
                                    <option value="101">Providus Bank</option>
                                    <option value="51293">QuickFund MFB</option>
                                    <option value="502">Rand Merchant Bank</option>
                                    <option value="90067">Refuge Mortgage Bank</option>
                                    <option value="50767">ROCKSHIELD MICROFINANCE BANK</option>
                                    <option value="125">Rubies MFB</option>
                                    <option value="51113">Safe Haven MFB</option>
                                    <option value="951113">Safe Haven Microfinance Bank Limited</option>
                                    <option value="50582">Shield MFB</option>
                                    <option value="51062">Solid Allianze MFB</option>
                                    <option value="50800">Solid Rock MFB</option>
                                    <option value="51310">Sparkle Microfinance Bank</option>
                                    <option value="221">Stanbic IBTC Bank</option>
                                    <option value="068">Standard Chartered Bank</option>
                                    <option value="51253">Stellas MFB</option>
                                    <option value="232">Sterling Bank</option>
                                    <option value="100">Suntrust Bank</option>
                                    <option value="50968">Supreme MFB</option>
                                    <option value="302">TAJ Bank</option>
                                    <option value="090560">Tanadi Microfinance Bank</option>
                                    <option value="51269">Tangerine Money</option>
                                    <option value="51211">TCF MFB</option>
                                    <option value="102">Titan Bank</option>
                                    <option value="100039">Titan Paystack</option>
                                    <option value="50840">U&C Microfinance Bank Ltd (U AND C MFB)</option>
                                    <option value="MFB51322">Uhuru MFB</option>
                                    <option value="50870">Unaab Microfinance Bank Limited</option>
                                    <option value="50871">Unical MFB</option>
                                    <option value="51316">Unilag Microfinance Bank</option>
                                    <option value="032">Union Bank of Nigeria</option>
                                    <option value="033">United Bank For Africa</option>
                                    <option value="215">Unity Bank</option>
                                    <option value="566">VFD Microfinance Bank Limited</option>
                                    <option value="035">Wema Bank</option>
                                    <option value="057">Zenith Bank</option>
                                </select>


                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="required">Account Number</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Phone number must be active"
                                    aria-label="Phone number must be active"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 mb-2 fv-row fv-plugins-icon-container">
                                <input type="number" name="account_no" id='account_no'
                                   
                                    class="form-control form-control-solid"
                                    placeholder="Account number">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>


                        <div id='show_details' style='display:none'>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Account Name</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 mb-2 fv-row fv-plugins-icon-container">
                                    <input type="text" id='account_name' readonly name="account_name"
                                        class="form-control form-control- form-control-solid"
                                        value="{{$user->account_name}}">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="required">Amount</span>
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Phone number must be active"
                                        aria-label="Email address must be active"></i>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 mb-2 fv-row fv-plugins-icon-container">
                                    <input readonly required type="number" min='100' name="phone" id='amount'
                                        class="form-control form-control-solid" value="{{ $waybill->subamount }}">
                                    <input type="hidden" name="phone" id='recipient_code'
                                        class="form-control form-control-solid" placeholder="Amount">
                                    <input type="hidden" value="{{ $waybill->uid }}" name="waybillId" id='waybillId'
                                        class="form-control form-control-solid" >

                                    <div class="fv-plugins-message-container invalid-feedback">Withdrawal charges of NGN{{ $waybill->charges }} is being applied.</div>
                                </div>




                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Transaction Pin</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 mb-2 fv-row fv-plugins-icon-container">
                                    <div id="otp" class="inputs d-flex flex-row justify-content-center">
                                        <input class="m-2 text-center form-control rounded" type="password" id="first"
                                            id="first" maxlength="1" required />
                                        <input class="m-2 text-center form-control rounded" type="password" id="second"
                                            id="second" maxlength="1" required />
                                        <input class="m-2 text-center form-control rounded" type="password" id="third"
                                            id="third" maxlength="1" required />
                                        <input class="m-2 text-center form-control rounded" type="password" id="fourth"
                                            id="fourth" maxlength="1" required />
                                    </div>
                                </div>

                                <!--end::Col-->
                            </div>


                        </div>

                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>

                        <button type="submit" style='display:none' class="btn btn-success" id="transfer_button">Withdraw</button>
                    </div>
                    <!--end::Actions-->
                    <input type="hidden">
                    <div></div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
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

        $("#account_no").on("input", async function(e) {
            e.preventDefault();
            if($("#account_no").val().length >= 10 && $("#bank_code").val().length >= 2) {

                Swal.fire({
          title: "Fetching account details, please wait...",
          // html: '<div class="text-center"><i class="fa fa-spinner fa-spin fa-3x"></i></div>',
          showConfirmButton: false,
          allowOutsideClick: true,
          allowEscapeKey: true,
          didOpen: () => {
            Swal.showLoading();
          },
        });
        $("#show_details").hide()
           
            var fd = new FormData;
            fd.append('account_no', $("#account_no").val());
            fd.append('bank_code', $("#bank_code").val());
            
           
            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "/confirm_account",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response.data)
                    if(response && response.data !== false) {
                        console.log(response.data);
                        Toast.fire({
                        icon: 'success',
                        title: 'Account fetched!'
                        }) 
                        $("#show_details").show()
                        $("#transfer_button").show()
                        $("#recipient_code").val(response.data.recipient_code)
                        $("#account_name").val(response.data.details.account_name)
                        $("#bank_code").val(response.data.details.bank_code)
                        $("#first").val('')
                        Swal.close()
                    Toast.fire({
                        icon: 'success',
                        title: 'Account fetched!'
                        }) 
                    }
                    else {
                        $("#show_details").show()
                        $("#transfer_button").hide()
                        $("#recipient_code").val('')
                        $("#account_name").val('Invalid Account')
                        $("#bank_code").val('')
                        $("#first").val('')
                        Swal.close()
                    Toast.fire({
                        icon: 'error',
                        title: 'Invalid Account!'
                        }) 
                    }
                    
                   
                
                

                },
                error: function(data) {
                    console.log(data)
                    Swal.close()
                    Swal.fire('Opps!', 'Invalid account details', 'error')
                }
            })
        }

        })
        $("#make_transfer").on("submit", async function(e) {
            e.preventDefault();
            if($("#bank_code").val().length >= 1 && $("#recipient_code").val().length >= 5 && $("#amount").val().length >= 3) {

            Swal.fire({
          title: "Withdrawing funds, please wait...",
          // html: '<div class="text-center"><i class="fa fa-spinner fa-spin fa-3x"></i></div>',
          showConfirmButton: false,
          allowOutsideClick: false,
          allowEscapeKey: false,
          didOpen: () => {
            Swal.showLoading();
          },
        });
           
            var fd = new FormData;
            fd.append('account_name', $("#account_name").val());
            fd.append('account_no', $("#account_no").val());
            fd.append('bank_code', $("#bank_code").val());
            fd.append('amount', $("#amount").val());
            fd.append('recipient_code', $("#recipient_code").val());
            fd.append('waybillId', $("#waybillId").val());
            fd.append('first', $("#first").val());
            fd.append('second', $("#second").val());
            fd.append('third', $("#third").val());
            fd.append('fourth', $("#fourth").val());
           
            console.log(fd)
            $.ajax({
                type: 'POST',
                url: "{{route('make_transfer')}}",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response,'the res')
                    if(response.status == true) {
                        console.log(response.message);
                        Swal.fire('Withdraw Successful', 'Amount : NGN'+$("#amount").val(), 'success') 

                      
                    }
                    else {
                        Swal.fire('error', response.message, 'error')
                    }
                   
                
                // window.location.reload()

                },
                error: function(data) {
                    console.log(data)
                    Swal.close()
                    Swal.fire('Withdraw Successful', 'Amount : NGN'+$("#amount").val(), 'success') 
                }
            })
        } else {
            Swal.fire('error','Please fill in the neccessary fields appropriately','error')
        }

        })


    })
</script>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        function OTPInput() {
            const inputs = document.querySelectorAll('#otp > *[id]');
            for (let i = 0; i < inputs.length; i++) { inputs[i].addEventListener('keydown', function(event) { if (event.key==="Backspace" ) { inputs[i].value='' ; if (i !==0) inputs[i - 1].focus(); } else { if (i===inputs.length - 1 && inputs[i].value !=='' ) { return true; } else if (event.keyCode> 47 && event.keyCode < 58) { inputs[i].value=event.key; if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } else if (event.keyCode> 64 && event.keyCode < 91) { inputs[i].value=String.fromCharCode(event.keyCode); if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } } }); } } OTPInput(); });
</script>
@endsection