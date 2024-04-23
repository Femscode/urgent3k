@extends('dashboard.master')

@section('header')
@endsection

@section('content')

<div id="kt_app_content" class="app-content  flex-column-fluid ">
  <!--begin::Profile Account Information-->
  <div class="row">

    <!--begin::Content-->
    <div class="col-md-12">
      <!--begin::Card-->
      <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
          <div class="card-title">
            <h3 class="card-label">{{ $user->name }} Transactions
              <span class="text-muted pt-2 font-size-sm d-block">{{ $user->email }}</span>
            </h3>

            <div class="col-auto">
              <!-- Filter -->
              <form>
                <!-- Search -->
                <div class="input-group input-group-merge input-group-flush">
                  <div class="input-group-prepend input-group-text">
                    <i class="bi-search"></i>
                  </div>
                  <input id="datatableWithSearchInput" type="search" class="form-control"
                    placeholder="Search transactions" aria-label="Search transactions">
                </div>
                <!-- End Search -->
              </form>
              <!-- End Filter -->
            </div>


          </div>

        </div>
        <div class="card-body">



          <div class="table-responsive datatable-custom">
            <table
              class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
              data-hs-datatables-options='{
                           "order": [],
                           "search": "#datatableWithSearchInput",
                           "isResponsive": false,
                           "isShowPaging": false,
                           "pagination": "datatableWithSearchPagination"
                         }'>
              <thead>
                <tr>
                  <th style='display:none' scope="col"></th>
                  {{-- <th scope="col">Title</th>
                  <th scope="col">Reference</th>
                  <th scope="col">Details</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Previous Balance</th>
                  <th scope="col">Later Balance</th>
                  <th scope="col">Type</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th> --}}
                </tr>
              </thead>
              <tbody>
                <input style='visibility:hidden' value='{{ $user->balance }}' id='user_amount' />
                @foreach($transactions as $key => $tranx)

                <tr>
                  <td class="list-group">
                    <li @if($tranx->status == 1 ) style='color: #155724;background-color: #d4edda;border-color: #c3e6cb;' class='bg bg-soft-info list-group-item align-items-center'
                      @elseif($tranx->status == 2) style='color: #856404;background-color: #fff3cd;border-color: #fff3cd;' class='bg bg-soft-warning list-group-item align-items-center'
                      @elseif($tranx->status == 0) style='color: #721c24;background-color: #f8d7da;border-color: #f8d7da;' class='bg bg-soft-success list-group-item align-items-center'@else
                      class='bg bg-soft-danger list-group-item align-items-center' @endif>
                      @if($tranx->status == 1 )
                      <i class="bi-check-circle fw-bolder h1 list-group-icon"></i>
                    
                     
                      @elseif($tranx->status == 2)
                      <i class="bi-arrow-counterclockwise fw-bolder h1 list-group-icon"></i>


                      @else
                      <i class="bi-x-circle h1 list-group-icon"></i>

                      @endif


                      {{ $tranx->title }}<br>
                      {{ $tranx->description }}<br>
                      Amount : NGN{{ number_format($tranx->amount) }}<br>
                      <span class="badge bg-secondary rounded-pill">
                        {{ $tranx->updated_at->format('Y-m-d h:i A') }}<br>
                        @if($tranx->status == 1 )
                        <b>Status : Withdrawal Approved</b>
                      
                       
                        @elseif($tranx->status == 2)
                        <b>Status : Withdrawal Pending</b>
  
  
                        @else
                        <b>Status : Failed</b>
                        @endif
                        
                      </span>
                      <div class='mt-2'>
                        <a href='/verify_transaction/{{ $tranx->reference }}' class='btn btn-primary btn-sm'>Verify</a>

                        <a href='/print_transaction_receipt/{{ $tranx->uid }}' class='btn btn-success btn-sm'>Print</a>
                      </div>

                    </li>

                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <!--end: Datatable-->
        </div>
      </div>
      <!--end::Card-->
    </div>
    <!--end::Content-->
  </div>
  <!--end::Profile Account Information-->
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