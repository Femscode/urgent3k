@extends('dashboard.master')
@section('header')
{{--
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css"> --}}

@endsection

@section('content')


    <div style='border-radius:5px' class='card p-2'>

        <div class="card-header card-header-content-between">
            <h4 class="card-header-title">My Waybills <i class="bi-patch-check-fill text-primary"
                    data-bs-toggle="tooltip" data-bs-placement="top"
                    title="This report is based on 100% of sessions."></i></h4>

            <!-- Dropdown -->
            <a href='/createwaybill' class='btn btn-primary'>Create Waybill</a>
            <!-- End Dropdown -->
        </div>


        {{-- <div class='col-md-6'>
            <input type="text" class="form-control" placeholder="Search..." id="searchTable">
        </div> --}}

        <table class="datatable table">
            <thead>
                <tr>
                    <th class="sorting" tabindex="0" aria-controls="kt_widget_table_3" rowspan="1" colspan="1"
                        aria-label="Campaign: activate to sort column ascending" style="width: 0px;"></th>


                </tr>
            </thead>
            <tbody>

                @foreach($waybills as $key => $waybill)

                <tr>
                    <td>
                        <div style='border-top:0px solid #004085;background-color:#cce5ff;border-color:#b8daff;color:#004085'
                            class="position-relative p-4  bg-light-primary rounded">
                            <div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-primary">
                            </div>
                            <a href="#" style='color:#004085' class="mb-1 h2 text-hover-primary alert-heading">
                                <b>{{
                                    $waybill->product_name }} (NGN{{ number_format($waybill->totalamount)
                                    }})</b><br></a>
                            <h4>Client : @if($user->id == $waybill->client_id)
                                {{ $waybill->self->name ?? "No name" }}
                                @else
                                {{ $waybill->client->name }}
                                @endif
                            </h4>
                            
                            {{-- <h5>Client trust level</h5>
                            <div class='col-md-6'>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div> --}}
                            <div class="d-flex">

                                <input readonly id="copy_content_{{ $loop->iteration }}" type="text"
                                    class="form-control form-control-solid me-3 flex-grow-1" name="search"
                                    value="https://securewaybill.com/{{ $waybill->reference }}">

                                <a class="btn btn-light btn-soft-primary fw-bold flex-shrink-0 copy-btn"
                                    data-clipboard-target="#copy_content_{{ $loop->iteration }}"><i
                                        class='bi-clipboard'></i></a>
                            </div>


                            @if($waybill->status == 0)
                            <span class='badge bg-warning text-dark rounded-pill ms-1'>
                                <div class="spinner-grow spinner-grow-sm" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div> Waybill yet to be
                                paid
                            </span>
                            @elseif($waybill->status == 1)
                            <span class='badge bg-success text-dark rounded-pill ms-1'>Waybill Paid</span>
                            @elseif($waybill->status == 2)
                            <span class='badge bg-warning text-dark rounded-pill ms-1'>
                                <div class="spinner-grow spinner-grow-sm" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div> Waybill Sent
                            </span>
                            @else
                            <span class='badge bg-success text-dark rounded-pill ms-1'>Waybill Received <i
                                    class="bi-patch-check-fill text-white"></i></span>
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
                                can now <a href='/withdraw/{{ $waybill->uid }}'>withdraw funds</a></p>


                            @elseif($waybill->status == 4)
                            <p class='alert alert-soft-info'>Waybill closed, Pending withdrawal
                            </p>


                            @else
                            <p class='alert alert-soft-info'>Withdraw successful, waybill closed!</a></p>



                            @endif



                            @if($waybill->checkcancel($waybill->reference) == 'self')
                            <p class='alert alert-soft-danger'>Waybill has been cancelled by you, waiting for your
                                client
                                to also approve. You can <a href='message'>message client</a> or <a
                                    onclick='return confirm("Are you sure you want to uncancel/revert this waybill?")'
                                    href='/uncancelwaybill/{{ $waybill->uid }}'>uncancel waybill</a> or <a
                                    href='opendispute'>open dispute</a>
                            </p>

                            @elseif($waybill->checkcancel($waybill->reference) == 'client')
                            <p class='alert alert-soft-danger'>Waybill has been cancelled by your client and waiting for
                                you for approval. You can <a
                                    onclick='return confirm("Are you sure you want to approve the cancellation of this waybill?")'
                                    href='/cancelwaybill/{{ $waybill->uid }}'>approve cancellation</a> or <a
                                    href='marksent'>mark sent</a> or <a href='opendispute'>open dispute</a></p>



                            @elseif($waybill->checkcancel($waybill->reference) == 'withdraw')
                            <p class='alert alert-success'>Waybill cancellation has been approved, You can <a
                                    href='withdraw'>withdraw funds</a></p>


                            @elseif($waybill->checkcancel($waybill->reference) == 'client-withdraw')
                            <p class='alert alert-success'>Waybill cancellation has been approved for your client!
                                You can <a href='opendispute'>open dispute</a> within 2hours</p>

                            @else
                            @endif



                            @else
                            {{-- where self start --}}

                            @if($waybill->status == 0)
                            <a href='/make-payment/{{ $waybill->uid }}' class='btn btn-primary btn-sm'>Make
                                Payment</a>
                            <a onclick='return confirm("Are you sure you want to delete this waybill?")'
                                href='/deletewaybill/{{ $waybill->uid }}' class='btn btn-danger btn-sm'>Delete
                                Waybill</a>
                            @elseif($waybill->status == 1)
                            <a href='https://wa.me' class='btn btn-primary btn-sm'>Open Dispute</a>
                            <a onclick='return confirm("Are you sure you want to cancel this waybill?")'
                                href='/cancelwaybill/{{ $waybill->uid }}' class='btn btn-danger btn-sm'>Cancel
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
                            <p class='alert alert-soft-danger'>Waybill has been cancelled by you, waiting for your
                                client
                                to also approve. You can <a href='message'>message client</a> or <a
                                    onclick='return confirm("Are you sure you want to uncancel/revert this waybill?")'
                                    href='/uncancelwaybill/{{ $waybill->uid }}'>uncancel waybill</a> or <a
                                    href='opendispute'>open dispute</a>
                            </p>

                            @elseif($waybill->checkcancel($waybill->reference) == 'client')
                            <p class='alert alert-soft-danger'>Waybill has been cancelled by your client and waiting for
                                you for approval. You can <a
                                    onclick='return confirm("Are you sure you want to approve the cancellation of this waybill?")'
                                    href='/cancelwaybill/{{ $waybill->uid }}'>approve cancellation</a> or <a
                                    href='opendispute'>open dispute</a></p>



                            @elseif($waybill->checkcancel($waybill->reference) == 'withdraw')
                            <p class='alert alert-success'>Waybill cancellation has been approved, You can now <a
                                    href='withdraw'>withdraw funds</a></p>


                            @elseif($waybill->checkcancel($waybill->reference) == 'client-withdraw')
                            <p class='alert alert-success'>Waybill cancellation has been approved for your client!
                                You can <a href='opendispute'>open dispute</a> within 2hours</p>


                            @else


                            @endif


                            @endif
                        </div>
                    </td>
                </tr>

                @endforeach


            </tbody>
        </table>
    </div>



@endsection

@section('script')
<script src="/newdashboard/node_modules/clipboard/dist/clipboard.min.js"></script>
<script src="/newdashboard/js/hs.clipboard.js"></script>

<script>
    (function() {
      // INITIALIZATION OF CLIPBOARD
      // =======================================================
      HSCore.components.HSClipboard.init('.js-clipboard')
    })();
</script>
<script>
    $(document).ready(function() {
    var oTable = $('.datatable').DataTable({
            ordering: false,
            searching: true
            });   


            $('#searchTable').on('keyup', function() {
              oTable.search(this.value).draw();
            });

            var clipboard = new ClipboardJS('.copy-btn');

        clipboard.on('success', function (e) {
            e.clearSelection();
            var btn = e.trigger;
            btn.innerHTML = 'Copied!';
                    setTimeout(function () {
                        btn.innerHTML = '<i class="bi-clipboard"></i>';
                    }, 2000); // Reset to 'Copy' after 2 seconds
        });
        
        clipboard.on('error', function (e) {
            console.error('Action:', e.action);
            console.error('Trigger:', e.trigger);
        });
  })
</script>


<script>
    // Initialize Clipboard.js
    var clipboard = new ClipboardJS('.copy-btn');

    clipboard.on('success', function (e) {
        // Change the button text to "Copied"
        $(e.trigger).html('<i class="bi-check"></i> Copied');

        // Show "Copied" message
        var copyStatus = $(e.trigger).siblings('.copy-status');
        copyStatus.fadeIn().delay(1000).fadeOut();

        // Reset the button text after a short delay
        setTimeout(function () {
            $(e.trigger).html('<i class="bi-clipboard"></i>');
        }, 1500);

        // Reset the input field selection
        e.clearSelection();
    });

    clipboard.on('error', function (e) {
        console.error('Unable to copy to clipboard.', e);
    });

    // Custom function to handle copying
    function copyToClipboard(btn) {
        var inputFieldId = $(btn).data('clipboard-target');
        var inputField = $('#' + inputFieldId);

        // Manually select the input field content
        inputField.select();

        try {
            document.execCommand('copy');
        } catch (err) {
            console.error('Unable to copy to clipboard.', err);
        }

        // Deselect the input field
        inputField.blur();
    }
</script>
@endsection