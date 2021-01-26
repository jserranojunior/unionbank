<template>
<div>
    <div class="row justify-content-center">
        <div class=" ">
            <div class="form-group">
                <input class="form-control input-main-login" v-model="inputs.name" type="text" placeholder="Digite seu nome completo">
            </div>
            <div class="form-group">
                <input class="form-control input-main-login" v-model="inputs.email" type="text" placeholder="Digite seu e-mail">
            </div>
            <div class="form-group">
                <div class="row ">

                    <div class=" col-4 col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="dropdown">
                            <a v-if="!labelCodeCountry.ddi" class="btn btn-secondary btn-label-code-country dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{labelCodeCountry}}
                            </a>
                            <a v-else class="btn btn-secondary btn-label-code-country dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="flag" :src="labelCodeCountry.flag" alt=""> {{labelCodeCountry.ddi}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" @click="setCodeCountry('+055','https://upload.wikimedia.org/wikipedia/commons/0/05/Flag_of_Brazil.svg')" href="#">
                                    <img class="flag" src="https://upload.wikimedia.org/wikipedia/commons/0/05/Flag_of_Brazil.svg" alt=""> +055
                                </a>
                                <a class="dropdown-item" href="#" @click="setCodeCountry('+591', 'https://upload.wikimedia.org/wikipedia/commons/d/de/Flag_of_Bolivia_%28state%29.svg')">
                                    <img class="flag" src="https://upload.wikimedia.org/wikipedia/commons/d/de/Flag_of_Bolivia_%28state%29.svg" alt=""> +591
                                </a>

                                <a class="dropdown-item" href="#" @click="setCodeCountry('+058', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Flag_of_Venezuela.svg/1200px-Flag_of_Venezuela.svg.png')">
                                    <img class="flag" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Flag_of_Venezuela.svg/1200px-Flag_of_Venezuela.svg.png" alt=""> +058
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <input class="form-control input-main-login" v-model="phoneNumber" v-mask="'(##)#####-####'" type="text" placeholder="Telefone (00)00000-0000">
                    </div>

                </div>
            </div>
            <div class="form-group">
                <input class="form-control input-main-login" v-model="inputs.password" type="password" placeholder="Crie sua senha">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-6 text-left">
                        <!-- <a href="./login">
                                    <div class="btn btn-outline-light font-weight-bold">FAZER LOGIN</div>
                                </a> -->
                    </div>
                    <div class="col-12 text-center">
                        <div class="btn btn-outline-light font-weight-bold" @click="Cadastrar(inputs)">CADASTRAR</div>
                    </div>
                </div>
                <div class="row">                    
                    <div class="col-12 text-center">
                        <router-link to="/login">
                            <a href="#">
                            <button type="button" class="btn btn-link text-white text-left">Já sou Union Bank</button>
                        </a>
                        </router-link>
                    </div>
                </div>
            </div>
             <div v-if="erros" class="row justify-content-center row-space-form">
            <div class="col">
                <div class="alert alert-danger" role="alert">
                <ul>
                    <li v-for="error in register.data.erros">
                        {{error[0]}}
                    </li>
                </ul>
            </div>
            </div>
        </div>
        <div v-if="registradoComSucesso" class="row justify-content-center row-space-form">
            <div class="alert alert-success" role="alert">
                Cadastro efetuado com sucesso
                <p>Você será redirecionado para fazer login</p>
            </div>
        </div>
        </div>
    </div>
</div>
</template>

<script>
import { mask } from "vue-the-mask";
import { mapState, mapActions } from "vuex";
import axios from "axios";
export default {
  name: "Register",
  data() {
    return {
      inputs: {},
      data: "",
      message: "",
      erros: false,
      CodeCountry: "+055",
      flagDdi: "",
      labelCodeCountry: {},
      phoneNumber: "",
      registradoComSucesso: "",
    };
  },
  mounted() {
    this.inputs.token = document.head.querySelector(
      'meta[name="csrf-token"]'
    ).content;
  },
  beforeMount() {
    this.labelCodeCountry = {
      ddi: "+055",
      flag:
        "https://upload.wikimedia.org/wikipedia/commons/0/05/Flag_of_Brazil.svg",
    };

    this.inputs.celular = this.CodeCountry + this.phoneNumber;

    document.body.style.height = window.innerHeight;
  },
  watch: {
    CodeCountry() {
      this.inputs.celular = this.CodeCountry + this.phoneNumber;
    },
    phoneNumber() {
      this.inputs.celular = this.CodeCountry + this.phoneNumber;
    },
    registradoComSucesso() {
      if (this.registradoComSucesso === true) {
        var that = this;
        window.setTimeout(function() {
          console.log("efetuando o time out");
          that.$router.push({
            name: "CaixaConta",
          });
        }, 3000);
      }
    },
    register: function(val) {
      if (!this.register.data.email) {
        if (this.register.data.message == "Cadastrado") {
          console.log("roteando");
          this.registradoComSucesso = true;
          this.LoginLaravel(this.inputs);
        }
      }
      if (this.register.data.erros) {
        this.erros = true;
      }
    },
  },
  computed: {
    ...mapState({
      register: (state) => state.Login.register,
    }),
  },
  methods: {
    ...mapActions(["Register", "LoginLaravel"]),
    setCodeCountry(ddi, flag) {
      (this.CodeCountry = ddi), (this.flagDdi = flag);
      this.labelCodeCountry = {
        ddi: ddi,
        flag: flag,
      };
    },
    Cadastrar(inputs) {
      this.Register(inputs);
    },
  },
  directives: {
    mask,
  },
};
</script>

<style>
.col-space-form {
  margin-bottom: 15px;
}

.btn-label-code-country {
  background: white;
  color: black;
}

.btn-label-code-country:hover,
.btn-label-code-country:focus {
  background: #c7c7b0 !important;
  color: black !important;
}

.flag {
  width: 25px;
}
</style>
