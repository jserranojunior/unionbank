<template>
<div>
    <div class="row row-space justify-content-center">
        <div class="col-12 col-xs-12 col-sm-10 col-md-6 col-lg-6">
            <input type="hidden" name="_token" :value="inputs.token" /> 
            <div class="form-group">
                <input type="email" class="form-control input-main-login" v-model="inputs.email" placeholder="Digite seu e-mail">
            </div>
            <div class="form-group">
                <input type="password" class="form-control input-main-login" v-model="inputs.password" placeholder="Digite sua senha">
            </div>
        </div>  
    </div>
        <div v-if="message" class="row justify-content-center row-space-form">
            <div class="col-12 col-xs-12 col-sm-10 col-md-6 col-lg-6">
                <div class="alert alert-danger" role="alert">
                <ul>
                    <li >
                        {{message}}
                    </li>
                </ul>
            </div>
             </div>  
            </div>
             <div class="row row-space justify-content-center">
        <div class="col-10 text-left">
            <div class="form-group">
                <div class="row">                    
                        <div class="col-12 text-center">
                           
                            <div class="btn  btn-outline-light font-weight-bold float-center" @click="Login()">FAZER LOGIN</div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="/password/reset">
                            <button type="button" class="btn btn-link text-white text-left">Esqueci minha senha</button>
                        </a>
                    </div>
                    <div class="col-12 text-center">
                        <router-link to="/register">
                            <a href="#">
                            <button type="button" class="btn btn-link text-white text-left">Ainda não sou Union Bank</button>
                        </a>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
             </div>
    </div>
</div>
</template>

<script>
import { mapState, mapActions } from "vuex";
import axios from "axios";
export default {
  name: "Login",
  data() {
    return {
      inputs: {},
      message: "",
    };
  },
  mounted() {
    this.inputs.token = document.head.querySelector(
      'meta[name="csrf-token"]'
    ).content;
    console.log(this.inputs.token);
  },
  watch: {
    message() {
      if (this.message === "logado") {
        console.log("what logado");
        this.LoginLaravel(this.inputs);
      }
    },
  },
  methods: {
    ...mapActions(["LoginLaravel"]),
    Login() {
      var pathname = window.location.host;
      var port = window.location.port;
      let url = "";
      if (port > "") {
        url = `http://${pathname}:${port}/api/users/login`;
      } else {
        url = `http://${pathname}/api/users/login`;
      }
      console.log(url);
      axios
        .post(url, this.inputs)
        .then((response) => {
          this.message = response.data.message;
        })
        .catch(function(error) {
          console.log(error);
        });
    },
  },
};
</script>
