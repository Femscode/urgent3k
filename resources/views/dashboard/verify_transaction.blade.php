@extends('dashboard.master')

@section('header')
@endsection

@section('content')

<div class="content container-fluid" style="margin-top: -17rem;">
  <!--begin::Container-->
  <div id="kt_app_content" class="app-content  flex-column-fluid ">
    <!--begin::Profile Account Information-->
    <div class="row">

        <div class="col-xl-12">

            <!-- end row -->

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Verify Payment</h4>
                    <div>
                        <form method='post' action='{{ route("check_verify_transaction") ?? '' }}'
                            enctype='multipart/form-data'>
                            @csrf

                            <div class="mb-3">
                                <label for="heading" class="form-label">Reference</label>
                                <input type="text"  value='{{ $ref ?? "" }}' id='reference' class="form-control" name="reference" value=""
                                    placeholder="Enter transaction reference">

                            </div>




                            <div class='text-right'>
                                <button type="submit" name='submit_type' value='save'
                                    class="btn btn-primary w-md ">Verify</button>
                            </div>
                        </form>
                    </div>
                    @if(isset($response))
                    <div style='overflow-x:auto;max-width: 100%'>
                        <table style='width:100%' class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Reference</th>

                                    <th scope="col">Details</th>
                                  
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                   
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   
                                    <td>{{ $response->reference ?? '' }}</td>
                                    <td>Amount : NGN{{ number_format($response->amount) ?? '' }}, Channel : {{ $response['payment_type'] }}</td>
                                   
                                  
                                    <td>{{ $response->created_at ?? '' }}</td>
                                    <td>{{ $response->status ?? '' }}</td>
                                    <td>
                                        <a class='btn btn-success'>Print</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
                <!-- end card body -->
            </div>
        </div>


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