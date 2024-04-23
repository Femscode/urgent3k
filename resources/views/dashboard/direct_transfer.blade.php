@extends('dashboard.master')

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

        color: black;
    }
    .countdown-container {
            position: relative;
            width: 150px;
            height: 150px;
            margin: 50px auto;
            border-radius: 50%;
            border: 8px solid #ccc;
        }

        .countdown-timer {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
        }

        .countdown-timer h2 {
            margin: 0;
            font-size: 24px;
        }
</style>
@endsection

@section('content')

<!--end::Subheader-->
<!--begin::Entry-->
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <!--begin::Container-->
        <div class="row">
            <!--begin::Profile Account Information-->

            <!--begin::Content-->
            <div class="col-md-12">
                <!--begin::Card-->
                <div style='border:1px dashed #004085;background-color:#cce5ff;color:#004085'
                    class="card card-custom">
                    <!--begin::Header-->

                    <!--end::Header-->
                    <!--begin::Form-->

                    <div class="card-body">
                        <!--begin::Heading-->


                        <div class="text-center mt-4">
                            <span class=" text-gray-500 fw-bold fs-4">-- BANK TRANSFER --</span>
                        </div>
                        <div class="alert bg-light-success alert-custom alert-light-success fade show mb-2"
                            role="alert">
                          
                            {{-- <input type='hidden' id='expire' value='30'/>
                            <H3>Guildline</H3>
                            <ul>
                                <li>Transfer only the exact amount stated below.</li>
                                <li>Take note that account details below is a temporary account, and it expires in  <span class='text-danger'><b><span id='min'>30</span>Mins <span id='secs'>0</span>Secs</b></span> time.</li>
                                <li>Take note of the account name during transfer, it must begin with URGENT3K.</li>
                            </ul> --}}
                          
                          


                        </div>
                        <div class="card card-dashed bg-light-secondary flex-row flex-stack flex-wrap p-6 m-2">
                            <!--begin::Info-->
                            <div class="d-flex flex-column p-2 m-2">
                                <!--begin::Owner-->

                                <!--end::Owner-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Icon-->



                                    <!--end::Icon-->

                                    <!--begin::Details-->
                                    <div>
                                        <div class="fs-6 fw-semibold text-gray-600">
                                            Acct. No :</div>
                                        <div class="fs-4 fw-bold">
                                            <strong id='acctNo'>{{ $account_no ?? "No account generated
                                                yet!" }}
                                            </strong>
                                          
                                            <a style='cursor:pointer' id='copyAcct'>
                                                <i class='bi-clipboard m-2'>
                                                </i>
                                            </a>
                                        </div>
                                        <div class="fs-6 fw-semibold text-gray-600">Bank Name :</div>
                                        <div class="fs-4 fw-bold"><strong>{{ $bank_name ?? "No
                                                account generated yet!" }}</strong></div>
                                        <div class="fs-6 fw-semibold text-gray-600">Account Name :</div>
                                        <div class="fs-4 fw-bold"><strong>{{ $account_name ?? "No
                                                account generated yet!" }}</strong></div>
                                        <div class="fs-6 fw-semibold text-gray-600">
                                            Amount :</div>
                                        <div class="fs-4 fw-bold"><strong>NGN{{ number_format($amount) ?? "No account
                                                generated
                                                yet!" }}</strong></div>
                                        {{-- <span class='text-danger'>Please transfer only the exact amount above!</span> --}}
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Info-->



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
        $("#u_amount").on('input',function() {
        var amount = parseInt($("#u_amount").val()) * 100;
        // var charges = 0.02 * amount
        var charges = 0
      
       
        if(parseInt($("#u_amount").val()) < 2500) {
            $("#amount").val(amount + charges);
        }
        else {
            $("#amount").val(amount + (0.05 * amount) +10000);    
            // var charges =   0.02 * amount + 10000
            var charges =   0
            
        }
        $("#charges").text('Charges : '+ (charges/100).toLocaleString('en-US', { style: 'currency', currency: 'NGN' }))          
        $("#total_payment").text('Total payment : '+ (amount/100 + charges/100).toLocaleString('en-US', { style: 'currency', currency: 'NGN' }))          
        
        // alert($("#u_amount").val() * 100)
    })
    $('#copyAcct').click(function() {
      // Select the input field content
      var tempTextarea = $('<textarea>');
            
            // Set its value to the content of acctNo
            tempTextarea.val($('#acctNo').text());
            
            // Append it to the body and select its content
            $('body').append(tempTextarea);
            tempTextarea.select();
            
            // Copy the selected text to the clipboard
            document.execCommand('copy');
            
            // Remove the temporary textarea
            tempTextarea.remove();

      // You can add a visual feedback if needed, for example, change the icon color or show a tooltip
     
      $("#copyAcct").text('Copied')

      // Optionally, revert the icon color after a short delay
      setTimeout(function() {
        $('#copyAcct').html('<i class="bi-clipboard"></i>'); // Revert to the original color (empty string removes inline style)
      }, 1000); // Adjust the delay as needed
    });
        var minutes = $("#expire").val();
        var seconds = 0;

        // Update countdown every second
        var countdownInterval = setInterval(function () {
            // Update seconds
            seconds--;
            if (seconds < 0) {
                seconds = 59;
                // Update minutes when seconds reach 0
                minutes--;
                if (minutes < 0) {
                    // Countdown finished, clear interval
                    clearInterval(countdownInterval);
                    // You can add any additional actions here when the countdown reaches 0
                }
                // Update minutes element
                $('#min').text(minutes);
            }

            // Update seconds element
            $('#secs').text(seconds);
        }, 1000); // Update every second
    })

</script>
@endsection