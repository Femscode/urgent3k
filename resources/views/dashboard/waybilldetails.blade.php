@extends('dashboard.master')
@section('header')
@endsection

<!--begin::Content wrapper-->
@section('content')

<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid ">
  <!--begin::Row-->
  <div class="row g-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-12">

      <!--begin::Misc Widget 1-->
      {{-- <div style='font-size:17px; border-top:10px solid #856404;' class='alert alert-warning'>

        Join our Whatsapp Community
        to get first hand update about our services.

        Click <a href='https://chat.whatsapp.com/Jukoxj54fvS9h51F00vgKu'>here</a> to join.

      </div> --}}

      {{-- <div class='alert alert-warning'>It's the season of joy! 🎉 Spread the festive cheer by hosting
        lively giveaways of data, airtime, and cash prizes in a very exciting way.</div> --}}


    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class='row'>
      <div class='col-md-8'>
        <div class="justify-content-center">
          <div class='card'>

            <tr>
              <td>
                <div style='border-left:5px solid #004085;background-color:#cce5ff;color:#004085'
                  class="position-relative p-4  bg-soft-primary rounded">
                  <div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-primary">
                  </div>
                  <a href="#" style='color:#004085' class="mb-1 h4 text-hover-primary alert-heading">
                    <b>{{
                      $waybill->product_name }} (NGN{{ number_format($waybill->totalamount)
                      }})</b><br>
                    Client : 
                    @if($user->id == $waybill->client_id)
                    {{ $waybill->self->name ?? "No name" }}
                    @else
                    {{ $waybill->client->name }}
                    @endif
                    <br>
                    <div class="d-flex">

                      <input disabled id="copyContent" type="text" class="form-control form-control-solid me-3 flex-grow-1"
                        name="search" value="https://securewaybill.com/{{ $waybill->reference }}">

                      <a id='copyBtn' class="btn btn-light btn-soft-primary fw-bold flex-shrink-0 copy-btn"
                       ><i class='bi-clipboard'></i></a>
                    </div>

                    @if($waybill->status == 0)
                    <span class='badge bg-warning text-dark rounded-pill ms-1'>Waybill yet to be
                      paid</span>
                    @elseif($waybill->status == 1)
                    <span class='badge bg-success text-dark rounded-pill ms-1'>Waybill Paid</span>
                    @elseif($waybill->status == 2)
                    <span class='badge bg-warning text-dark rounded-pill ms-1'>Waybill Sent</span>
                    @else
                    <span class='badge bg-success text-dark rounded-pill ms-1'>Waybill Received</span>
                    @endif
                  </a><br>



                  @if($user->id == $waybill->client_id)
                  @if($waybill->status == 0)
                  <p class='alert alert-danger'>Waybill yet to be paid for</p>
                  @elseif($waybill->status == 1)
                  <a onclick='confirm("Are you sure you want to mark this waybill as sent?")'
                    href='/marksent/{{ $waybill->uid }}' class='btn btn-primary btn-sm'>Mark Sent</a>
                  <a onclick='return confirm("Are you sure you want to cancel the waybill?")'
                    href='/cancelwaybill/{{ $waybill->uid }}' class='btn btn-danger btn-sm'>Cancel
                    Waybill</a>

                  @elseif($waybill->status == 2)
                  <p class='alert alert-soft-info'>Waybill sent to client, awaiting client confirmation
                    recipient</p>
                  <a href='https://wa.me' class='btn btn-primary btn-sm'>Open Dispute</a>
                  @elseif($waybill->status == 3)
                  <p class='alert alert-soft-info'>Waybill received by client. Waybill marked successful!
                    You
                    can now <a href='/withdraw/{{ $waybill->uid }}'>Withdraw Funds</a></p>


                  @elseif($waybill->status == 4)
                  <p class='alert alert-soft-info'>Waybill closed, Pending withdrawal
                  </p>


                  @else
                  <p class='alert alert-soft-info'>Withdraw successful, waybill closed!</a></p>



                  @endif



                  @if($waybill->checkcancel($waybill->reference) == 'self')
                  <p class='alert alert-danger'>Waybill has been cancelled by you, waiting for your client
                    to also approve. You can <a href='message'>message client</a> or <a href='uncancel'>Uncancel
                      waybill</a>
                    or <a href='opendispute'>open dispute</a>
                  </p>

                  @elseif($waybill->checkcancel($waybill->reference) == 'client')
                  <p class='alert alert-danger'>Waybill has been cancelled by your client and waiting for
                    you for approval. You can <a
                      onclick='return confirm("Are you sure you want to approve the cancellation of this waybill?")'
                      href='/cancelwaybill/{{ $waybill->uid }}'>approve cancellation</a> or <a href='marksent'>mark
                      sent</a>
                    or <a href='opendispute'>open dispute</a></p>



                  @elseif($waybill->checkcancel($waybill->reference) == 'withdraw')
                  <p class='alert alert-success'>Waybill cancellation has been approved, You can <a
                      href='withdraw'>Withdraw
                      Funds</a></p>


                  @elseif($waybill->checkcancel($waybill->reference) == 'client-withdraw')
                  <p class='alert alert-success'>Waybill cancellation has been approved for your client!
                    You can <a href='opendispute'>open dispute</a> within 2hours</p>

                  @else
                  @endif



                  @else
                  {{-- where self start --}}

                  @if($waybill->status == 0)
                  <a href='/premium-verify_purchase/{{ $waybill->uid }}' class='btn btn-primary btn-sm'>Make Payment</a>
                  <a onclick='return confirm("Are you sure you want to delete this waybill?")'
                    href='/deletewaybill/{{ $waybill->uid }}' class='btn btn-danger btn-sm'>Delete
                    Waybill</a>
                  @elseif($waybill->status == 1)
                  <a href='https://wa.me' class='btn btn-primary btn-sm'>Open Dispute</a>
                  <a onclick='return confirm("Are you sure you want to delete this waybill?")'
                    href='/deletewaybill/{{ $waybill->uid }}' class='btn btn-danger btn-sm'>Cancel
                    Waybill</a>
                  @elseif($waybill->status == 2)
                  <a onclick='confirm("Are you sure you want to mark this waybill as received?")'
                    href='/markreceived/{{ $waybill->uid }}' class='btn btn-primary btn-sm'>Mark
                    Received</a>
                  <a href='https://wa.me' class='btn btn-primary btn-sm'>Open Dispute</a>

                  @else


                  <p class='alert alert-soft-info'>Waybill received. Waybill marked closed!</p>


                  @endif

                  @if($waybill->checkcancel($waybill->reference) == 'self')
                  <p class='alert alert-danger'>Waybill has been cancelled by you, waiting for your client
                    to also approve. You can <a href='message'>message client</a> or <a href='uncancel'>Uncancel
                      waybill</a>
                    or <a href='opendispute'>open dispute</a>
                  </p>

                  @elseif($waybill->checkcancel($waybill->reference) == 'client')
                  <p class='alert alert-danger'>Waybill has been cancelled by your client and waiting for
                    you for approval. You can <a
                      onclick='return confirm("Are you sure you want to approve the cancellation of this waybill?")'
                      href='/cancelwaybill/{{ $waybill->uid }}'>approve cancellation</a> or <a href='opendispute'>open
                      dispute</a></p>



                  @elseif($waybill->checkcancel($waybill->reference) == 'withdraw')
                  <p class='alert alert-success'>Waybill cancellation has been approved, You can now <a
                      href='withdraw'>Withdraw Funds</a></p>


                  @elseif($waybill->checkcancel($waybill->reference) == 'client-withdraw')
                  <p class='alert alert-success'>Waybill cancellation has been approved for your client!
                    You can <a href='opendispute'>open dispute</a> within 2hours</p>


                  @else


                  @endif


                  @endif
                </div>
              </td>
            </tr>






          </div>

          <!--begin::Row-->

        </div>
      </div>
      <div class='col-md-4'>
        <div class='card'>
          <div class='card-header'>
            <h5 class="card-title">Waybill Activity</h5>
          </div>
          <div class="card-body">


            <div class="activity">
              @foreach($activities as $act)

              <div class="activity-item d-flex">
                <div class="activite-label">{{ \Carbon\Carbon::parse($act->created_at)->diffForHumans() }}
                </div>
                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                <div class="activity-content">
                  <a href="#" class="fw-bold text-dark">{{ $act->title }}</a><br>{{ $act->description }}
                </div>
              </div><!-- End activity item-->
              @endforeach


            </div>

          </div>
        </div>
        <!--end::Col-->
      </div>
    </div>
    <!--end::Row-->
  </div>

  @endsection
  <!--end::Content wrapper-->



  @section('script')
  <script>
    $('#copyBtn').click(function() {
      // Select the input field content
      var inputField = $('#copyContent');
      inputField.select();
      

      // Copy the selected content to clipboard
      document.execCommand('copy');

      // Deselect the input field
      inputField.blur();

      // You can add a visual feedback if needed, for example, change the icon color or show a tooltip
     
      $("#copyBtn").text('Copied')

      // Optionally, revert the icon color after a short delay
      setTimeout(function() {
        $('#refCode').html('<i class="bi-clipboard"></i>'); // Revert to the original color (empty string removes inline style)
      }, 1000); // Adjust the delay as needed
    });
  </script>
  @endsection