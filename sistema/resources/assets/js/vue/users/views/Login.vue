<template>
    <div class="wallpaper">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-sm-12 text-center">
                   <router-link to="/">
        <img class="img-fluid" src="/img/logo/union-bank-logo.png" alt="">
                    <!-- <p class="font-weight-bold text-center text-white">BEM VINDO!</p> -->
                    <hr/>
                   </router-link>
                </div>
            </div>
    
            <LoginComponent></LoginComponent>

        
        </div>
    </div>
</template>

<script>
import LoginComponent from "../components/auth/Login";
// import RegisterComponent from '../components/auth/Register'
// import ReceberComponent from '../components/auth/Receber'
// import Footer from '../components/layouts/Footer'
export default {
  name: "Login",
  components: {
    LoginComponent,
    // RegisterComponent,
    // ReceberComponent,
    // Footer,
  },
  beforeMount() {
    this.isMobile();
    document.body.style.background =
      "linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(1,42,120,1) 35%, rgba(0,56,161,1) 100%)";
    document.body.style.height = window.innerHeight;
    console.log(window.innerHeight);
  },
};
</script>

<style>
.wallpaper {
  height: 100%;
  width: 100%;
  background-repeat: repeat-y;
  background-repeat: repeat-x;

  width: 100vw;
  height: 100vh;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}

.hr-space {
  margin-bottom: 40px;
  margin-top: 40px;
}
body {
  background: linear-gradient(
    90deg,
    rgba(2, 0, 36, 1) 0%,
    rgba(1, 42, 120, 1) 35%,
    rgba(0, 56, 161, 1) 100%
  );
}
.img-logo {
  margin-bottom: 20px;
  margin-top: 30px;
}
.row-suporte {
  margin-top: 30px;
  margin-bottom: 15px;
}

input.form-control.input-main-login {
  margin-bottom: 10px;
  border: aliceblue;
  border-bottom: 1px solid white;
  background-color: #f0f8ff00;
  color: white;
  border-radius: 0rem;
}

.form-control:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0);
}

.form-control::-webkit-input-placeholder {
  color: #ced4da;
}

/* WebKit, Blink, Edge */

.form-control:-moz-placeholder {
  color: #ced4da;
}

/* Mozilla Firefox 4 to 18 */

.form-control::-moz-placeholder {
  color: white;
}

/* Mozilla Firefox 19+ */

.form-control:-ms-input-placeholder {
  color: white;
}

/* Internet Explorer 10-11 */

.form-control::-ms-input-placeholder {
  color: white;
}

/* Microsoft Edge */

.title-bank {
  color: yellow;
  font-size: 6rem;
  font-family: "Courier New", Courier, monospace;
}
.title-bank-seccond {
  font-size: 7rem;
}
.strong {
  font-weight: bold;
}
</style>
