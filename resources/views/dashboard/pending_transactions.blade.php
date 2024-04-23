@extends('dashboard.master1')

@section('header')
@endsection

@section('content')

<div class="d-flex flex-column flex-column-fluid">
  <!--begin::Container-->
  <div id="kt_app_content" class="app-content  flex-column-fluid ">
    <!--begin::Profile Account Information-->
    <div class="row">

      <!--begin::Content-->
      <div class="col-md-12">
        <!--begin::Card-->
        <div class="card card-custom">
          <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
              <h3 class="card-label">Pending Transactions
                <span class="text-muted pt-2 font-size-sm d-block">{{ $user->email }}</span>
              </h3>


            </div>

          </div>
          <div class="card-body">
            <div class='col-md-6'>
            <input type="text" class="form-control" placeholder="Search..." id="searchTable">
            </div>
                           

            <table class="datatable table table-striped">
                <thead>
                    <tr>
                      
                        <th scope="col">Details</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date & Time</th>
                      
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $key => $tranx)

                    <tr>

                        <td>{{ $tranx->details }}</td>
                        <td>₦{{ number_format($tranx->amount) }}</td>
                        <td>{{ Date('d-m-Y | h:i',strtotime($tranx->created_at))}} </td>
                       
                        <td>
                            <a href='admin_delete_duplicate/confirm/{{ $tranx->id }}' onclick="return confirm('Confirm the success of this transaction?')" class='btn btn-success btn-sm'>Confirm Tranx</a>
                            <a href='https://wa.me/2349058744473' class='btn btn-info btn-sm'>Complain Tranx</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <!--end: Datatable-->
          </div>
        </div>
        <!--end::Card-->
      </div>
      <!--end::Content-->
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