@extends('dashboard.master')
@section('content')

    <div id="kt_app_content" class="app-content  flex-column-fluid ">
      
           
            <div class="col-xl-12 ps-xl-12">
                <div class='card p-4 mb-4'>

                    <form action='/resetpassword' method='post'> @csrf
                        <div class="widget-content col-md-12">
                            <div class="form-group row mb-4">
                                <label class="col-xl-3 col-lg-3 col-form-label">Current Password</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-soft-primary">
                                                <i class="bi-key"></i>
                                            </span>
                                        </div>
                                        <div class="">
                                            <input  placeholder="**********"  required type="password" name='current_password' class="form-control"
                                            aria-label="Current Password">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                          
                         
                            <div class="form-group row mb-4">
                                <label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-soft-primary">
                                                <i class="bi-key"></i>
                                            </span>
                                        </div>
                                        <div class="">
                                            <input required type="password" minlength='8' name='new_password' id='new_password' class="form-control"
                                            placeholder="**********" aria-label="New Password">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-xl-3 col-lg-3 col-form-label">Confirm Password</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-soft-primary">
                                                <i class="bi-key"></i>
                                            </span>
                                        </div>
                                        <div class="">
                                            <input required type="password" minlength='8' name='confirm_password' id='new_password' class="form-control"
                                            placeholder="**********" aria-label="New Password">
                                          
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                <div class="col-lg-9 col-xl-6">
                                  
                            <p>Forgot your password? click <a style='color:red' href='/forgot-password'>here</a> to reset password.</p>

                            

                            <div class='mb-4'>
                            <button id='sub_btn' type="submit" class="btn btn-primary float-right">
                                Change Password
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
    // var oTable = $('.datatable').DataTable();   //using Capital D, which is mandatory to retrieve "api" datatables' object, latest jquery Datatable
//    $('#myInput').keyup(function(){
//          oTable.search($(this).val()).draw() ;
//    });
   @if (session('message'))
        Swal.fire('Success!',"{{ session('message') }}",'success');
    @endif
   @if (session('error'))
        Swal.fire('Incorrect Password!',"{{ session('error') }}",'error');
    @endif
</script>
@endsection
