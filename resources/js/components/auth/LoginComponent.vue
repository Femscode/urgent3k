<template>
  <div>
    <!--begin::Heading-->
    <form v-on:submit.prevent="loginUser()">
      <div class="text-center mb-11" >
        <!--begin::Title-->
        <h1 class="text-dark fw-bolder mb-3">Log In</h1>
        <!--end::Title-->

        <!--begin::Subtitle-->
        <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
        <!--end::Subtitle--->
      </div>
      <!--begin::Heading-->

      <!--begin::Login options-->
      <div class="row g-3 mb-9">
        <!--begin::Col-->
        <div class="col-md-6">
          <!--begin::Google link--->
          <a
            href="#"
            class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100"
          >
            <img
              alt="Logo"
              src="/assets/media/svg/brand-logos/google-icon.svg"
              class="h-15px me-3"
            />
            Sign in with Google
          </a>
          <!--end::Google link--->
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-md-6">
          <!--begin::Google link--->
          <a
            href="#"
            class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100"
          >
            <img
              alt="Logo"
              src="/assets/media/svg/brand-logos/apple-black.svg"
              class="theme-light-show h-15px me-3"
            />
            <img
              alt="Logo"
              src="/assets/media/svg/brand-logos/apple-black-dark.svg"
              class="theme-dark-show h-15px me-3"
            />
            Sign in with Apple
          </a>
          <!--end::Google link--->
        </div>
        <!--end::Col-->
      </div>
      <!--end::Login options-->

      <!--begin::Separator-->
      <div class="separator separator-content my-14">
        <span class="w-125px text-gray-500 fw-semibold fs-7"
          >Or with email</span
        >
      </div>
      <!--end::Separator-->

      <!--begin::Input group--->

      <div class="fv-row mb-3">
        <!--begin::Email-->
        <input
          autocomplete=""
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
          class="form-control bg-transparent"
          required
        />
        <!--end::Password-->
      </div>

      <!--end::Input group--->

      <!--begin::Wrapper-->
      <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
        <!--begin::Link-->
        <a href="/forgot-password" class="link-primary">
          Forgot Password ?
        </a>
        <!--end::Link-->
      </div>
      <!--end::Wrapper-->

      <!--begin::Submit button-->
      <div class="d-grid mb-10">
        <button type="submit" class="btn btn-primary">Sign In</button>
      </div>
      <!--end::Submit button-->

      <!--begin::Sign up-->
    </form>
    <div class="text-gray-500 text-center fw-semibold fs-6">
      Yet to have an account?

      <a href="/register" class="link-success"> Sign up </a>
    </div>
  </div>

  <!--end::Sign up-->
</template>
  
  <script>
export default {
  data() {
    return {
      email: "",
      password: "",
    };
  },
  methods: {
    loginUser() {
      Swal.fire({
                // icon: "success",
                title: "Signing In",
                text: "Signing in, please wait...",
                timer: 2000,
                timerProgressBar: true,
                showConfirmButton: false,
              }).then((result) => {
                location.reload();
              });
      console.log(
        this.email,

        this.password
      );
      let fd = new FormData();
      fd.append("email", this.email);
      fd.append("password", this.password);
      axios
        .post("/login", fd)
        .then((response) => {
          // Swal.fire("Login successful", "success");
          console.log(response.data);
          location.reload();
        })
        .catch((error) => {
          console.log(error.message);
          Swal.fire("Opps", "Invalid credentials", "error");
        });
    },
  },
};
</script>
  
  <style>
</style>