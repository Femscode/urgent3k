@extends('dashboard.master1')

@section('header')
@endsection 

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Container-->
    <div class="app-content  flex-column-fluid" data-sortable-id="form-stuff-1">
        <div class="row">

            <!--begin::Content-->
            <div class="col-md-12">
              <!--begin::Card-->
              <div class="card card-custom">
                <div class='d-flex m-2 p-2'>

                <div class="col">
                    <h4 class="font-weight-bold"><b>Bulk SMS Transaction</b></h4>
                  </div>
                  <div class="col text-end">
                    <a
                      onclick="window.history.back()"
                      class="btn-sm btn btn-secondary"
                      >Back</a
                    >
                  </div>
                  </div>
                <div class='col-md-12'>
         
          <div class='alert @if($transaction->status == 1)alert-success @else alert-danger @endif'>
            <ul>
              <li><b>Title</b> : {{ $transaction->title }}</li>
              <li><b>Details</b> : {{ $transaction->description }}</li>
              <li><b>Sender Name</b> : {{ $transaction->sender_name }}</li>
              <li><b>Recipients</b> : {{ $transaction->recipient }}</li>
              <li><b>Message Sent</b> : {{ $transaction->message }}</li>
              <li><b>Amount Charged</b> : NGN{{ number_format($transaction->amount,2) }}</li>
              <li><b>Date Of Transaction</b> : {{ Date('Y-m-d h:i:s',strtotime($transaction->created_at)) }}</li>
            </ul>
          </div>
        </div>
  
      </div>
    <!--end::Container-->
</div>
</div>
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
      
       
        if(parseInt($("#u_amount").val()) < 2500) {
            $("#amount").val((amount) + (0.05 * amount));
          
        }
        else {
            $("#amount").val((amount) + (0.05 * amount) +10000);
          
          
        }
        
        // alert($("#u_amount").val() * 100)
    })
    })

</script>
<script>
    $(document).ready(function() {
      // Swal.fire('very nice work')
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
  
      $(".myForm").on("submit", async function(e) {
        e.preventDefault();
        $("#schedule_time").val('')
        $("#schedule_date").val('')
  
            submitSMS();
      })
      $("#import_csv").click(function() {
        $("#import_field").show()
        $("#manual_input_field").hide()
        $("#select_group_field").hide()
      })
      $("#manual_input").click(function() {
        $("#manual_input_field").show()
        $("#select_group_field").hide()
        $("#import_field").hide()
      })
      $("#select_group").click(function() {
        $("#manual_input_field").hide()
        $("#select_group_field").show()
        $("#import_field").hide()
      })
      $("#sms").on('input', function() {
        var page = parseInt($("#pages").text())
        var recipient = parseInt($("#no_of_recipients").text())
        console.log(page, recipient, 'coole')
        //charge is the amount set by the admin to be charged per each transactions
        var charge = 4
        $("#amount_field").val(page * recipient * charge )
        $("#amount").text(page * recipient * charge)
      
        var sms_length = parseInt($("#sms").val().length / page)
        console.log(sms_length, 'the sms length')
        if(sms_length < 160) {
            $("#character").text(160 - sms_length)
            console.log(sms_length)
           } else {
          
            $("#pages").text(page + 1)
            $("#character").text('')
          
        }
      })
      $("#scheduleSend").click(function() {
        scheduleSend()
      })
      function scheduleSend() {
          Swal.fire({
              title: 'Schedule Send For Later',
              html: "<input id='sweet_alert_date' class='form-control form-input' min='" + new Date().toISOString().split("T")[0] + "' type='date'/><br><input id='sweet_alert_time' class='form-control form-input' type='time' />",
              showCancelButton: true,
              confirmButtonText: "Send SMS Later",
              preConfirm: () => {
                // Get the selected date from the date picker
                const selectedDate = document.getElementById('sweet_alert_date').value;
                const selectedTime = document.getElementById('sweet_alert_time').value;
                console.log('Selected Date:', selectedDate, selectedTime);
                $("#schedule_date").val(selectedDate)
                $("#schedule_time").val(selectedTime)
              },
          }).then((result) => {
                // If the user confirms, submit the form
                if (result.isConfirmed) {
                   submitSMS()
                }
            });
      }
      function submitSMS() {
        Swal.fire({
                        title: "Fetching response, please wait...",
                        // html: '<div class="text-center"><i class="fa fa-spinner fa-spin fa-3x"></i></div>',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        didOpen: () => {
                          Swal.showLoading();
                        },
                      });
        
          var fd = new FormData;
          fd.append('sender_name', $("#sender_name").val());
          fd.append('contact_type', $(".contact_type:checked").val());
          fd.append('selected_group', $("#selected_group").val());
          fd.append('contact_field', $("#contact_field").val());
          fd.append('message_type', $('#message_type').val());
          fd.append('message', $('#sms').val());
          var importFileInput = $('#import_file')[0]; // Get the file input element
  
          if (importFileInput  && importFileInput.files.length > 0) {
            fd.append('import_file', importFileInput.files[0]); 
          } 
          var schedule_date = $('#schedule_date').val(); // Get the file input element
  
          if (schedule_date  && schedule_date.length > 0) {
              fd.append('schedule_date', schedule_date); 
              fd.append('schedule_time',  $("#schedule_time").val()); 
          } 
          console.log(fd)
          $.ajax({
              type: 'POST',
              url: "{{route('submitSMSForm')}}",
              data: fd,
              cache: false,
              contentType: false,
              processData: false,
              success: function(response) {
                Swal.close()
                if(response.success == false) {
                  console.log('the data', response)
                
                Toast.fire({
                        icon: 'error',
                        title: response.message
                        })
                }  else {
                  Swal.fire({
                        title: '<strong>Confirm SMS</strong>',
                        icon: 'info',
                        html:
                          `Total Recipients : <b>${response.count_recipient}</b><br> ` +
                          `Total Pages : <b>${response.message_count}</b><br> ` +
                           
                          ` Total Charge : <b>NGN ${response.amount}</b><br><span class='text-danger'>Input your four(4) digit PIN to proceed</span>`,
                        showCloseButton: true,
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonText:
                          'Proceed!',
                        cancelButtonText:
                          'Cancel',
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
                    })
                    .then((result) => {
                      if (result.isConfirmed == false) {
                          return;
                        }
                    if (result.isConfirmed) {  
                      if(response.schedule) {
                             Swal.fire({
                             title: "Scheduling SMS, please wait...",
                             // html: '<div class="text-center"><i class="fa fa-spinner fa-spin fa-3x"></i></div>',
                             showConfirmButton: false,
                             allowOutsideClick: false,
                             allowEscapeKey: false,
                             didOpen: () => {
                               Swal.showLoading();
                             },
                           });
                        } else {
                              Swal.fire({
                            title: "Sending SMS, please wait...",
                            // html: '<div class="text-center"><i class="fa fa-spinner fa-spin fa-3x"></i></div>',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            didOpen: () => {
                              Swal.showLoading();
                            },
                          });
                        } 
                     
                      var fd = new FormData;
                        fd.append('sender_name', response.sender_name);
                        fd.append('contacts', response.contacts);
                        fd.append('message', response.sms);
                        fd.append('message_type', response.message_type);
                        fd.append('amount', response.amount);
                        fd.append('real_amount', response.real_amount);
                        fd.append("pin", result.value);
                        if(response.schedule) {
                          fd.append('schedule', response.schedule);
                        }
                      
                        console.log(fd)
                        $.ajax({
                            type: 'POST',
                            url: "{{route('sendSMS2')}}",
                            data: fd,
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                              Swal.close()
                              if(response.success == false) {
                                console.log('the data', response)
                              
                                    Swal.fire({
                                      icon: 'error',
                                      title: response.message
                                     
                                      })
                                    } else {
                                      if(response.schedule) {
                                        Swal.fire('Success!','Bulk SMS Scheduled Successfully.','success')
                                      }
                                      else {
                                         Swal.fire('Success!','Bulk SMS Sent Successfully.','success')
  
                                       }
                                    }
                            },
                            error: function(response) {
                            console.log(response)
                             Swal.close()
                             Swal.fire({
                                      icon: 'error',
                                      title: 'Error while sending message, try again later or contact support!'
                                      })
                         }
                });
              }
            });
                          
          }
  
              },
              error: function(response) {
                  console.log(response)
                  Swal.close()
                  Swal.fire('Opps!', 'Error while sending message, try again later or contact support', 'error')
              }
          })
      }
   

      $('#contact_field').on('input', function(e) {
        // Get the input value
        var page = parseInt($("#pages").text())
        var recipient = parseInt($("#no_of_recipients").text())
        console.log(page, recipient, 'coole')
        //charge is the amount set by the admin to be charged per each transactions
        var charge = 4
        $("#amount_field").val(page * recipient * charge )
        $("#amount").text(page * recipient * charge)
        //start copy
        let inputText = e.target.value;
        // var inputText = $(this).val();

        // Remove all characters that are not numbers, spaces, or commas
        inputText = inputText.replace(/[^0-9,\n ]/g, ''); // Allow numbers, commas, spaces, and line breaks

        // Replace line breaks and spaces with commas
        inputText = inputText.replace(/[\n ]+/g, ',');

        // Remove consecutive commas
        inputText = inputText.replace(/,+/g, ',');

        // Remove leading/trailing commas
        // inputText = inputText.replace(/^,|,$/g, '');

        // Update the input value with the modified text
        e.target.value = inputText;

        // Split the input by commas
        var phoneNumbers = inputText.split(',');

        // Remove any leading/trailing whitespace from each phone number
        phoneNumbers = phoneNumbers.map(function(number) {
          return number.trim();
        });

        // Filter out any empty strings
        phoneNumbers = phoneNumbers.filter(function(number) {
          return number !== "";
        });

        // Update the count
        $("#no_of_recipients").text(phoneNumbers.length);
        //end copy

    });
  
  })
</script>

@endsection