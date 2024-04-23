@extends('dashboard.master1')
@section('header')
@endsection

<!--begin::Content wrapper-->
@section('content')

                        <div class="d-flex flex-column flex-column-fluid">


                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content  flex-column-fluid ">
                                <!--begin::Row-->
                                <div class="row g-5 g-xl-8">
                                    <!--begin::Col-->
                                    <div class="col-xl-4">

                                        <!--begin::Misc Widget 1-->
                                        <div class="row mb-5 mb-xl-8 g-5 g-xl-8">

                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Card-->
                                                <div class="card card-stretch">
                                                    <!--begin::Link-->
                                                    <a href="/profile"
                                                        class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                                                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                                                        <span class="svg-icon svg-icon-3tx mb-5 ms-n1"><svg width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z"
                                                                    fill="currentColor" />
                                                                <path opacity="0.3"
                                                                    d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <span class="fs-4 fw-bold">
                                                            User Profile </span>
                                                    </a>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Card-->
                                                <div class="card card-stretch">
                                                    <!--begin::Link-->
                                                    <a href="/transactions"
                                                        class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                                                        <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
                                                        <span class="svg-icon svg-icon-3tx mb-5 ms-n1"><svg width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3"
                                                                    d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <span class="fs-4 fw-bold">
                                                            Transactions </span>
                                                    </a>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            {{-- <div class="col-6">
                                                <!--begin::Card-->
                                                <div class="card card-stretch">
                                                    <!--begin::Link-->
                                                    <a href="account/referrals.html"
                                                        class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                                                        <!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
                                                        <span class="svg-icon svg-icon-3tx mb-5 ms-n1"><svg width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3"
                                                                    d="M21 10.7192H3C2.4 10.7192 2 11.1192 2 11.7192C2 12.3192 2.4 12.7192 3 12.7192H6V14.7192C6 18.0192 8.7 20.7192 12 20.7192C15.3 20.7192 18 18.0192 18 14.7192V12.7192H21C21.6 12.7192 22 12.3192 22 11.7192C22 11.1192 21.6 10.7192 21 10.7192Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M11.6 21.9192C11.4 21.9192 11.2 21.8192 11 21.7192C10.6 21.4192 10.5 20.7191 10.8 20.3191C11.7 19.1191 12.3 17.8191 12.7 16.3191C12.8 15.8191 13.4 15.4192 13.9 15.6192C14.4 15.7192 14.8 16.3191 14.6 16.8191C14.2 18.5191 13.4 20.1192 12.4 21.5192C12.2 21.7192 11.9 21.9192 11.6 21.9192ZM8.7 19.7192C10.2 18.1192 11 15.9192 11 13.7192V8.71917C11 8.11917 11.4 7.71917 12 7.71917C12.6 7.71917 13 8.11917 13 8.71917V13.0192C13 13.6192 13.4 14.0192 14 14.0192C14.6 14.0192 15 13.6192 15 13.0192V8.71917C15 7.01917 13.7 5.71917 12 5.71917C10.3 5.71917 9 7.01917 9 8.71917V13.7192C9 15.4192 8.4 17.1191 7.2 18.3191C6.8 18.7191 6.9 19.3192 7.3 19.7192C7.5 19.9192 7.7 20.0192 8 20.0192C8.3 20.0192 8.5 19.9192 8.7 19.7192ZM6 16.7192C6.5 16.7192 7 16.2192 7 15.7192V8.71917C7 8.11917 7.1 7.51918 7.3 6.91918C7.5 6.41918 7.2 5.8192 6.7 5.6192C6.2 5.4192 5.59999 5.71917 5.39999 6.21917C5.09999 7.01917 5 7.81917 5 8.71917V15.7192V15.8191C5 16.3191 5.5 16.7192 6 16.7192ZM9 4.71917C9.5 4.31917 10.1 4.11918 10.7 3.91918C11.2 3.81918 11.5 3.21917 11.4 2.71917C11.3 2.21917 10.7 1.91916 10.2 2.01916C9.4 2.21916 8.59999 2.6192 7.89999 3.1192C7.49999 3.4192 7.4 4.11916 7.7 4.51916C7.9 4.81916 8.2 4.91918 8.5 4.91918C8.6 4.91918 8.8 4.81917 9 4.71917ZM18.2 18.9192C18.7 17.2192 19 15.5192 19 13.7192V8.71917C19 5.71917 17.1 3.1192 14.3 2.1192C13.8 1.9192 13.2 2.21917 13 2.71917C12.8 3.21917 13.1 3.81916 13.6 4.01916C15.6 4.71916 17 6.61917 17 8.71917V13.7192C17 15.3192 16.8 16.8191 16.3 18.3191C16.1 18.8191 16.4 19.4192 16.9 19.6192C17 19.6192 17.1 19.6192 17.2 19.6192C17.7 19.6192 18 19.3192 18.2 18.9192Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <span class="fs-4 fw-bold">
                                                            Biometrics </span>
                                                    </a>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Card-->
                                                <div class="card card-stretch">
                                                    <!--begin::Link-->
                                                    <a href="apps/customers/view.html"
                                                        class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs025.svg-->
                                                        <span class="svg-icon svg-icon-3tx mb-5 ms-n1"><svg width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M16.925 3.90078V8.00077L12.025 10.8008V5.10078L15.525 3.10078C16.125 2.80078 16.925 3.20078 16.925 3.90078ZM2.525 13.5008L6.025 15.5008L10.925 12.7008L6.025 9.90078L2.525 11.9008C1.825 12.3008 1.825 13.2008 2.525 13.5008ZM18.025 19.7008V15.6008L13.125 12.8008V18.5008L16.625 20.5008C17.225 20.8008 18.025 20.4008 18.025 19.7008Z"
                                                                    fill="currentColor" />
                                                                <path opacity="0.3"
                                                                    d="M8.52499 3.10078L12.025 5.10078V10.8008L7.125 8.00077V3.90078C7.125 3.20078 7.92499 2.80078 8.52499 3.10078ZM7.42499 20.5008L10.925 18.5008V12.8008L6.02499 15.6008V19.7008C6.02499 20.4008 6.82499 20.8008 7.42499 20.5008ZM21.525 11.9008L18.025 9.90078L13.125 12.7008L18.025 15.5008L21.525 13.5008C22.225 13.2008 22.225 12.3008 21.525 11.9008Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <span class="fs-4 fw-bold">
                                                            Transactions </span>
                                                    </a>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Card-->
                                            </div> --}}
                                            <!--end::Col-->

                                        </div>


                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-xl-8 ps-xl-12">
                                        <div class='card p-4 mb-4'>

                                            <form action='{{ route("reset-forgot-pin") }}' method='post'> @csrf
                                                <div class="widget-content col-md-12">

                                                    <p class="">Token</p>
                                                    <div class="input-group mb-4">

                                                        <input placeholder="*******" maxlength="7" required
                                                            type="password" name='token' class="form-control"
                                                            aria-label="Current Password">

                                                    </div>
                                                    <p class="">New Pin</p>
                                                    <div class="input-group mb-4">

                                                        <input required type="password" maxlength="4" name='new_pin'
                                                            id='new_password' class="form-control" placeholder="****"
                                                            aria-label="New Password">


                                                    </div>
                                                    <p class="">Confirm New Pin</p>
                                                    <div class="input-group mb-4">

                                                        <input required type="password" maxlength="4" name='confirm_pin'
                                                            id='new_password' class="form-control" placeholder="****"
                                                            aria-label="New Password">


                                                    </div>


                                                    {{-- <p>Reset your pin? click <a style='color:red;cursor:pointer'
                                                            href='/change-pin'>here</a> to reset pin.</p> --}}



                                                    <div class='mb-4 p-2'>
                                                        <button id='sub_btn' type="submit"
                                                            class="btn btn-primary float-right">
                                                            Change
                                                        </button>
                                                    </div>




                                                </div>
                                            </form>
                                        </div>

                                        <!--begin::Engage widget 1-->
                                        <div class="card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-250px bg-body mb-5 mb-xl-8"
                                            style="background-position: 100% 50px;background-size: 500px auto;background-image:url('assets/media/misc/city.png')"
                                            dir="ltr">
                                            <!--begin::Body-->
                                            <div class="card-body d-flex flex-column justify-content-center ps-lg-12">
                                                <!--begin::Title-->
                                                <h3 class="text-dark fs-2qx fw-bold mb-7">
                                                    Kindly follow our <br />
                                                    social media pages.
                                                </h3>
                                                <!--end::Title-->

                                                <!--begin::Action-->
                                                <div class="m-0">
                                                    <!-- Facebook -->
                                                    <a class="btn btn-primary btn-sm" style="background-color: #3b5998;"
                                                        href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                                                    <!-- Twitter -->
                                                    <a class="btn btn-primary btn-sm" style="background-color: #55acee;"
                                                        href="#!" role="button"><i class="fab fa-twitter"></i></a>

                                                    <!-- Instagram -->
                                                    <a class="btn btn-primary btn-sm" style="background-color: #ac2bac;"
                                                        href="#!" role="button"><i class="fab fa-instagram"></i></a>

                                                    <!-- Linkedin -->
                                                    <a class="btn btn-primary btn-sm" style="background-color: #0082ca;"
                                                        href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                                                    <!-- Youtube -->
                                                    <a class="btn btn-primary btn-sm" style="background-color: #ed302f;"
                                                        href="#!" role="button"><i class="fab fa-youtube"></i></a>

                                                    <!-- Whatsapp -->
                                                    <a class="btn btn-primary btn-sm" style="background-color: #25d366;"
                                                        href="#!" role="button"><i class="fab fa-whatsapp"></i></a>
                                                </div>
                                                <!--begin::Action-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Engage widget 1-->
                                        <!--begin::Row-->

                                        <!--end::Row-->


                                        <!--begin::Tables Widget 5-->

                                        <!--end::Tables Widget 5-->
                                        <!--begin::Row-->

                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            @if (session('message'))
            Swal.fire('Success!',"{{ session('message') }}",'success');
        @endif
       @if (session('error'))
            Swal.fire('{{ session('error') }}',"Try reset pin again",'error');
        @endif
        })
      
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    @endsection