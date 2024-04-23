@extends('dashboard.master')

@section('header')
@endsection

@section('content')

<div class="content container-fluid" style="margin-top: -17rem;">
  
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">


        <div class="d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Entry-->
            <div class="app-content flex-column-fluid">
                <!--begin::Container-->
                <div class="row">
                    <!--begin::Invoice-->
                    <div class="card card-custom position-relative overflow-hidden">
                        <!--begin::Shape-->
                        <div class="position-absolute opacity-30">
                            <span class="svg-icon svg-icon-10x svg-logo-white">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/shapes/abstract-8.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" width="176" height="165"
                                    viewBox="0 0 176 165" fill="none">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M-10.001 135.168C-10.001 151.643 3.87924 165.001 20.9985 165.001C38.1196 165.001 51.998 151.643 51.998 135.168C51.998 118.691 38.1196 105.335 20.9985 105.335C3.87924 105.335 -10.001 118.691 -10.001 135.168Z"
                                            fill="#AD84FF" />
                                        <path
                                            d="M28.749 64.3117C28.749 78.7296 40.8927 90.4163 55.8745 90.4163C70.8563 90.4163 83 78.7296 83 64.3117C83 49.8954 70.8563 38.207 55.8745 38.207C40.8927 38.207 28.749 49.8954 28.749 64.3117Z"
                                            fill="#AD84FF" />
                                        <path
                                            d="M82.9996 120.249C82.9996 144.964 103.819 165 129.501 165C155.181 165 176 144.964 176 120.249C176 95.5342 155.181 75.5 129.501 75.5C103.819 75.5 82.9996 95.5342 82.9996 120.249Z"
                                            fill="#AD84FF" />
                                        <path
                                            d="M98.4976 23.2928C98.4976 43.8887 115.848 60.5856 137.249 60.5856C158.65 60.5856 176 43.8887 176 23.2928C176 2.69692 158.65 -14 137.249 -14C115.848 -14 98.4976 2.69692 98.4976 23.2928Z"
                                            fill="#AD84FF" />
                                        <path
                                            d="M-10.0011 8.37466C-10.0011 20.7322 0.409554 30.7493 13.2503 30.7493C26.0911 30.7493 36.5 20.7322 36.5 8.37466C36.5 -3.98287 26.0911 -14 13.2503 -14C0.409554 -14 -10.0011 -3.98287 -10.0011 8.37466Z"
                                            fill="#AD84FF" />
                                        <path
                                            d="M-2.24881 82.9565C-2.24881 87.0757 1.22081 90.4147 5.50108 90.4147C9.78135 90.4147 13.251 87.0757 13.251 82.9565C13.251 78.839 9.78135 75.5 5.50108 75.5C1.22081 75.5 -2.24881 78.839 -2.24881 82.9565Z"
                                            fill="#AD84FF" />
                                        <path
                                            d="M55.8744 12.1044C55.8744 18.2841 61.0788 23.2926 67.5001 23.2926C73.9196 23.2926 79.124 18.2841 79.124 12.1044C79.124 5.92653 73.9196 0.917969 67.5001 0.917969C61.0788 0.917969 55.8744 5.92653 55.8744 12.1044Z"
                                            fill="#AD84FF" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <!--end::Shape-->
                        <!--begin::Invoice header-->
                        <div style='background-color:#ebab21 !important' class="row justify-content-center py-8 px-8 py-md-36 px-md-0 bg-primary">
                            <div class="col-md-9">
                                <div
                                    class="d-flex justify-content-between align-items-md-center flex-column flex-md-row">
                                    <div class="d-flex flex-column px-0 order-2 order-md-1">
                                      
                                        <span
                                            class="d-flex flex-column font-size-h5 font-weight-bold text-white">
                                            <span>{{ $transaction->title }}</span>
                                            <span>{{ Date('jS \of F, Y',strtotime($transaction->created_at)) }}</span>
                                        </span>
                                    </div>
                                    <h1
                                        class="display-3 font-weight-boldest text-white order-1 order-md-2">
                                        SECUREWAYBILL RECEIPT
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <!--end::Invoice header-->
                        <div class="row justify-content-center py-8 px-8 py-md-30 px-md-0">
                            <div class="col-md-9">
                                <!--begin::Invoice body-->
                                <div class="row pb-26">
                                    <div class="col-md-3 border-right-md pr-md-10 py-md-10">
                                        <!--begin::Invoice To-->
                                        <div class="text-dark-50 font-size-lg font-weight-bold mb-3">
                                            PAYMENT FOR:</div>
                                        <div class="font-size-lg font-weight-bold mb-10">{{ $transaction->description }}
                                        </div>
                                        <!--end::Invoice To-->
                                        <!--begin::Invoice No-->
                                       
                                         </div>
                                    <div class="col-md-9 py-10 pl-md-10">
                                        <div class="table-responsive">
                                            <table class="table">
                                               
                                                <tbody>
                                                    <tr class="font-weight-bolder font-size-lg">
                                                        <td
                                                            class="border-top-0 pl-0 pl-md-5 pt-7 d-flex align-items-center">
                                                            <span class="navi-icon mr-2">
                                                              
                                                            </span>REFERENCE
                                                        </td>
                                                      
                                                        <td
                                                            class="pr-0 pt-7 font-size-h6 font-weight-boldest text-right">
                                                            {{ $transaction->reference }}</td>
                                                    </tr>
                                                    <tr
                                                        class="font-weight-bolder border-bottom-0 font-size-lg">
                                                        <td
                                                            class="border-top-0 pl-0 pl-md-5 py-4 d-flex align-items-center">
                                                            <span class="navi-icon mr-2">
                                                               
                                                            </span>STATUS
                                                        </td>
                                                       
                                                        <td
                                                            class="border-top-0 pr-0 py-4 font-size-h6 font-weight-boldest text-right">
                                                           @if($transaction->status == 1)
                                                            <span class='badge badge-success'>Success</span>
                                                            @else 
                                                            <span class='badge badge-danger'>Failed</span>
                                                            @endif


                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="font-weight-bolder border-bottom-0 font-size-lg">
                                                        <td
                                                            class="border-top-0 pl-0 pl-md-5 py-4 d-flex align-items-center">
                                                            <span class="navi-icon mr-2">
                                                                
                                                            </span>TRANSACTION TYPE
                                                        </td>
                                                       
                                                        <td
                                                            class="border-top-0 pr-0 py-4 font-size-h6 font-weight-boldest text-right">
                                                            {{ $transaction->type }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Invoice body-->
                                <!--begin::Invoice footer-->
                                <div class="row">
                                    <div class="col-md-5 border-top pt-14 pb-10 pb-md-18">
                                        <div class="d-flex flex-column flex-md-row">
                                            <div class="d-flex flex-column">
                                                <div class="font-weight-bold font-size-h6 mb-3">MORE DETAILS
                                                    </div>
                                                <div
                                                    class="d-flex justify-content-between font-size-lg mb-3">
                                                    <span class="font-weight-bold mr-15">Account
                                                        Name:</span>
                                                    <span class="text-right">{{ $user->name }}</span>
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between font-size-lg mb-3">
                                                    <span class="font-weight-bold mr-15">Date
                                                        :</span>
                                                    <span class="text-right">{{ Date('jS \of F, Y',strtotime($transaction->created_at)) }}</span>
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between font-size-lg">
                                                    <span class="font-weight-bold mr-15">Time:</span>
                                                    <span class="text-right">{{ \Carbon\Carbon::parse($transaction->created_at)->diffForHumans() }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 pt-md-25">
                                        <div  style='background-color:#ebab21 !important'
                                            class="bg-primary rounded d-flex align-items-center justify-content-between text-white max-w-350px position-relative ml-auto p-7">
                                            <!--begin::Shape-->
                                            <div class="position-absolute opacity-30 top-0 right-0">
                                                <span
                                                    class="svg-icon svg-icon-2x svg-logo-white svg-icon-flip">
                                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/shapes/abstract-8.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="176"
                                                        height="165" viewBox="0 0 176 165" fill="none">
                                                        <g clip-path="url(#clip0)">
                                                            <path
                                                                d="M-10.001 135.168C-10.001 151.643 3.87924 165.001 20.9985 165.001C38.1196 165.001 51.998 151.643 51.998 135.168C51.998 118.691 38.1196 105.335 20.9985 105.335C3.87924 105.335 -10.001 118.691 -10.001 135.168Z"
                                                                fill="#AD84FF" />
                                                            <path
                                                                d="M28.749 64.3117C28.749 78.7296 40.8927 90.4163 55.8745 90.4163C70.8563 90.4163 83 78.7296 83 64.3117C83 49.8954 70.8563 38.207 55.8745 38.207C40.8927 38.207 28.749 49.8954 28.749 64.3117Z"
                                                                fill="#AD84FF" />
                                                            <path
                                                                d="M82.9996 120.249C82.9996 144.964 103.819 165 129.501 165C155.181 165 176 144.964 176 120.249C176 95.5342 155.181 75.5 129.501 75.5C103.819 75.5 82.9996 95.5342 82.9996 120.249Z"
                                                                fill="#AD84FF" />
                                                            <path
                                                                d="M98.4976 23.2928C98.4976 43.8887 115.848 60.5856 137.249 60.5856C158.65 60.5856 176 43.8887 176 23.2928C176 2.69692 158.65 -14 137.249 -14C115.848 -14 98.4976 2.69692 98.4976 23.2928Z"
                                                                fill="#AD84FF" />
                                                            <path
                                                                d="M-10.0011 8.37466C-10.0011 20.7322 0.409554 30.7493 13.2503 30.7493C26.0911 30.7493 36.5 20.7322 36.5 8.37466C36.5 -3.98287 26.0911 -14 13.2503 -14C0.409554 -14 -10.0011 -3.98287 -10.0011 8.37466Z"
                                                                fill="#AD84FF" />
                                                            <path
                                                                d="M-2.24881 82.9565C-2.24881 87.0757 1.22081 90.4147 5.50108 90.4147C9.78135 90.4147 13.251 87.0757 13.251 82.9565C13.251 78.839 9.78135 75.5 5.50108 75.5C1.22081 75.5 -2.24881 78.839 -2.24881 82.9565Z"
                                                                fill="#AD84FF" />
                                                            <path
                                                                d="M55.8744 12.1044C55.8744 18.2841 61.0788 23.2926 67.5001 23.2926C73.9196 23.2926 79.124 18.2841 79.124 12.1044C79.124 5.92653 73.9196 0.917969 67.5001 0.917969C61.0788 0.917969 55.8744 5.92653 55.8744 12.1044Z"
                                                                fill="#AD84FF" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </div>
                                            <!--end::Shape-->
                                            <div class="font-weight-boldest font-size-h5">TOTAL AMOUNT
                                            </div>
                                            <div class="text-right d-flex flex-column">
                                                <span
                                                    class="font-weight-boldest font-size-h3 line-height-sm">NGN{{ number_format($transaction->amount,2) }}</span>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Invoice footer-->
                            </div>
                        </div>
                        <!-- begin: Invoice action-->
                        <div class="row justify-content-center border-top py-8 px-8 py-md-28 px-md-0">
                            <div class="col-md-9">
                                <div class="d-flex font-size-sm flex-wrap">
                                    <button type="button" style='background-color:#640f11;color:#fff'
                                        class="btn btn-primary font-weight-bolder py-4 mr-3 mr-sm-14 my-1 m-2"
                                        onclick="window.print();">Print Receipt</button>
                                    <button type="button"
                                        class="btn btn-warning font-weight-bolder mr-3 my-1">Download</button>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- end: Invoice action-->
                    </div>
                    <!--end::Invoice-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
    </div>
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
    $("body").on('click','.redo', function() {
        var description = $(this).data('description')
        var title = $(this).data('title')
        var transaction_id = $(this).data('transaction_id')
        console.log($(this).data('amount'),  $("#user_amount").val(), 'price different' )
       if(parseInt( $("#user_amount").val()) > parseInt($(this).data('amount'))) {
       
        Swal.fire({
          title: "You are about to redo " + description,
          html: " <span class='text-warning'>Input your four(4) digit pin to proceed</span> " ,
          icon: "warning",
          input: "password",
          inputAttributes: {
            inputmode: "numeric",
            maxlength: 4,
            autocomplete: "new-password",
            name: "my-pin",
            autocapitalize: "off",
            pattern: "[0-9]*",
            style: "text-align:center;font-size:24px;letter-spacing: 20px",
          },
          showCancelButton: true,
          confirmButtonColor: "#ebab21",
          cancelButtonColor: "grey",
          confirmButtonText: "Proceed",
          allowOutsideClick: false,
          allowEscapeKey: false,
          preConfirm: () => {
            const confirmButton = Swal.getConfirmButton();
            confirmButton.textContent = "Validating ";
            confirmButton.disabled = true;
            confirmButton.insertAdjacentHTML(
              "beforeend",
              `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`
            );
            return new Promise((resolve) => {
              // You can perform any necessary validation here, e.g. making a server call.
              // Once validation is complete, call resolve() to close the modal.
              setTimeout(() => {
                resolve();
              }, 500);
            });
          },

          inputValidator: (text) => {
            if (!/^\d{4}$/.test(text)) {
              return "Please enter a four-digit PIN";
            }
          },
        }).then((result) => {
          if(result.isConfirmed == false) {
          return;

          }
          console.log(result, 'the result')
        
        Swal.fire({
          title: "Processing transaction, please wait...",
          // html: '<div class="text-center"><i class="fa fa-spinner fa-spin fa-3x"></i></div>',
          showConfirmButton: false,
          allowOutsideClick: false,
          allowEscapeKey: false,
          didOpen: () => {
            Swal.showLoading();
          },
        });
        let fd = new FormData();
        fd.append("transaction_id", transaction_id);
        fd.append("pin", result.value);
       
      
        axios
          .post("/redo_transaction", fd)
          .then((response) => {
            console.log(response, 'the res')
            if (response.data.success == "true") {
              Swal.fire({
                icon: "success",
                title: "Purchase successful!",
                showConfirmButton: true, // updated
                confirmButtonColor: "#3085d6", // added
                confirmButtonText: "Ok", // added
                allowOutsideClick: false, // added to prevent dismissing the modal by clicking outside
                allowEscapeKey: false, // added to prevent dismissing the modal by pressing Esc key
              }).then((result) => {
                if (result.isConfirmed) {
                  location.reload();
                }
              });
            } else {
              Swal.fire({
                icon: "error",
                title: response.data.message,
                // text: "Updating...",
                showConfirmButton: true, // updated
                confirmButtonColor: "#3085d6", // added
                confirmButtonText: "Ok", // added
                allowOutsideClick: false, // added to prevent dismissing the modal by clicking outside
                allowEscapeKey: false, // added to prevent dismissing the modal by pressing Esc key
              }).then((result) => {
                if (result.isConfirmed) {
                  // location.reload();
                }
              });
            }
          })
          .catch((error) => {
            console.log(error.message);
            Swal.fire(error.message);
          });
        }) 
      } else {
        Swal.fire({
                title: 'Insufficient balance!,',
                icon: 'info',
                html:
                    'Click ' +
                    '<a href="https://fastpay.cttaste.com/fundwallet">here</a> ' +
                    'to fund your wallet.',
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
              
                })
            

            }
     
    })
  
        
    })

</script>
@endsection