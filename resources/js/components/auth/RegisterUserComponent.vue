<template>
    <div>
      <!--begin::Heading-->
      <form v-on:submit.prevent="registerUser()">
        <div class="text-center mb-11">
          <!--begin::Title-->
          <img class="mx-auto h-100px h-lg-150px  theme-light-show" src="https://preview.keenthemes.com/metronic8/demo1/assets/media/illustrations/unitedpalms-1/15.png" alt="">
      
          <h1 class="text-dark fw-bolder mb-3">Begin Your Adventure</h1>
        
        </div>
        <!--begin::Heading-->
  
  
        <!--begin::Input group--->
        <div class="fv-row mb-3">
          <!--begin::Email-->
          <input
            autocomplete=""
            v-model="user_name"
            placeholder="Full name"
            type="text"
            class="form-control"
            required
            name="name"
          />
  
          <!--end::Email-->
        </div>
        <div class="fv-row mb-3">
          <!--begin::Email-->
          <input
            autocomplete=""
            v-model="company_id"
            placeholder="Brand/Company name"
            type="hidden"
            class="form-control"
            required
           
            name="name"
          />
  
          <!--end::Email-->
        </div>
        <div class="fv-row mb-3">
          <!--begin::Email-->
          <input
            autocomplete=""
            v-model="user_phone"
            placeholder="Phone number"
            type="text"
            class="form-control"
            required
            name="phone"
          />
  
          <!--end::Email-->
        </div>
        <div class="fv-row mb-3">
          <!--begin::Email-->
          <input
           
            type="email"
            v-model="email"
            placeholder="Email address"
            class="form-control bg-transparent"
            required
          />
  
          <!--end::Email-->
        </div>
  
        <!--end::Input group--->
        <div class="fv-row mb-3">
          <!--begin::Password-->
          <input
            type="password"
            v-model="password"
            placeholder="Password"
            autocomplete=""
            @input="confirmPassword"
            class="form-control bg-transparent"
            required
          />
          <!--end::Password-->
        </div>
  
        <div class="fv-row mb-3">
          <!--begin::Password-->
          <input
            v-model="password_confirmation"
            type="password"
            class="form-control"
            name="password_confirmation"
            required
            autocomplete=""
            @input="confirmPassword"
            placeholder="Confirm password"
          />
          <!--end::Password-->
        </div>
        <div v-if="show_password_confirm" class="alert alert-success">Password matched</div>
        <!--end::Input group--->
  
        <!--begin::Wrapper-->
      
  
        <!--begin::Submit button-->
        <div class="d-grid mb-10">
          <button :disabled="!sign_in_status"  type="submit" class="btn btn-primary">Sign Up</button>
        </div>
        <!--end::Submit button-->
  
        <!--begin::Sign up-->
      </form>
      <div class="text-gray-500 text-center fw-semibold fs-6">
        Already registered?
  
        <a href="/login" class="link-success"> Sign In </a>
      </div>
    </div>
  
    <!--end::Sign up-->
  </template>
  
  <script>
  export default {
    props : ['company_id'],
    data() {
      return {
        user_name: "",
       
        email: "",
        password: "",
        password_confirmation: "",
        user_phone: '',
        show_password_confirm : false,
        sign_in_status : false
      };
    },
    methods: {
      confirmPassword() {
        if(this.password == this.password_confirmation && this.password.length >= 8) {
          this.show_password_confirm = true
          this.sign_in_status = true
        }
        else {
          this.show_password_confirm = false
          this.sign_in_status = false
          
        }
  
      },
      registerUser() {
        Swal.fire({
                  // icon: "success",
                  title: "Sign Up",
                  text: "Signing in, please wait...",
                  timer: 2000,
                  timerProgressBar: true,
                  showConfirmButton: false,
                }).then((result) => {
                  location.reload();
                });
        console.log(
          this.email,
          this.user_name,
          this.company_id,
          this.password,
          this.password_confirmation
        );
        let fd = new FormData();
        fd.append("name", this.user_name);
        fd.append("company_id", this.company_id);
        fd.append("email", this.email);
        fd.append("phone", this.user_phone);
        fd.append("password", this.password);
        fd.append("password_confirmation", this.password_confirmation);
  
        axios
          .post('/register', fd)
          .then((response) => {
            console.log(response.data);
            location.reload()
          })
          .catch((error) => {
            console.log(error.response.data.errors);
            Swal.fire('Opps','Email address already taken!','error')
          });
      },
    },
  };
  </script>
  
  <style>
  </style>