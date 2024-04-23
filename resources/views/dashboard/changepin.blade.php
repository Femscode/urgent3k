@extends('dashboard.master')
@section('content')


    <!--begin::Content-->
    <div id="kt_app_content" class="app-content  flex-column-fluid ">

        <div class="col-xl-12 ps-xl-12">
            <div class='card p-4 mb-4'>

                <form action='{{ route("resetpin") }}' method='post'> @csrf
                    <div class="widget-content col-md-12">
                        <div class="form-group row mb-4">
                            <label class="col-xl-3 col-lg-3 col-form-label">Current Pin</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="input-group input-group-lg input-group-solid">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-soft-primary">
                                            <i class="bi-key"></i>
                                        </span>
                                    </div>
                                    <div class="">
                                        <input placeholder="****" maxlength="4" required type="password"
                                            name='current_pin' class="form-control" aria-label="Current Password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-xl-3 col-lg-3 col-form-label">New Pin</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="input-group input-group-lg input-group-solid">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-soft-primary">
                                            <i class="bi-key"></i>
                                        </span>
                                    </div>
                                    <div class="">
                                        <input required type="password" maxlength="4" name='new_pin' id='new_password'
                                            class="form-control" placeholder="****" aria-label="New Password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-xl-3 col-lg-3 col-form-label">Confirm Pin</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="input-group input-group-lg input-group-solid">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-soft-primary">
                                            <i class="bi-key"></i>
                                        </span>
                                    </div>
                                    <div class="">
                                        <input required type="password" maxlength="4" name='confirm_pin'
                                            id='new_password' class="form-control" placeholder="****"
                                            aria-label="Confirm Pin">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label class="col-xl-3 col-lg-3 col-form-label"></label>
                            <div class="col-lg-9 col-xl-6">

                                <p>Forgot your pin? click <a style='color:red;cursor:pointer' id='reset_pin'>here</a> to
                                    reset pin.</p>



                                <div class='mb-4'>
                                    <button id='sub_btn' type="submit" class="btn btn-primary float-right">
                                        Change Pin
                                    </button>
                                </div>
                            </div>
                        </div>






                    </div>
                </form>
            </div>


        </div>

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
    $("#reset_pin").click(function() {
        Swal.fire({
title: 'You are about to reset your pin?',
text: 'A token will be sent to your email, copy the token to reset your pin!',
icon: 'warning',
showCancelButton: true,
confirmButtonText: 'Yes, reset',
cancelButtonText: 'Cancel'
}).then((result) => {
if (result.isConfirmed) {
   Swal.fire('Sending your token, please wait...')
        $.ajax({
       type: 'POST',
       url: "{{route('forgot-pin')}}",
      
       cache: false,
       contentType: false,
       processData: false,
       success: function(data) {
          console.log(data)
          location.href = 'https://vtubiz.com/reset-pin-with-token';
       },
       error: function(data) {
           console.log(data)
           Swal.close()
          
           Swal.fire('Opps!', 'Something went wrong, please try again later', 'error')
       }
   })
}
})
    })
    })
  
</script>
@endsection