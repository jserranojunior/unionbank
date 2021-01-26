<template>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 bg-dark">
                    <section class="section">
                        <div class="row justify-content-sm-center">
                            <div class="col-12 text-center">
                                <img class="img-logo img-fluid" src="img/logo-smart-white.png" alt="">
                                <h4 class="font-weight-bold text-center text-white">www.contasmartmais.com.br</h4>
    
                            </div>
                        </div>
                        <div class="row btn-present justify-content-sm-center">
                            <div class="col-12 text-center">
                                <div class="btn btn-outline-light font-weight-bold">O Presente do futuro bancário</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="col-12  text-center">
                                    <router-link to="/login">
                                    <div class="btn btn-inicial-smart btn-primary">Acesse</div><br>
                                    </router-link>
                                </div>
                                <div class="col-12  text-center">
                                    <router-link to="/register">
                                    <div class="btn btn-inicial-smart btn-primary">Cadastre</div>
                                    </router-link>
                                </div>

                                <div class="col-12  text-center">
                                    <router-link to="/receber">
                                    <div class="btn btn-inicial-smart btn-primary">Receber</div>
                                    </router-link>
                                </div>
                            </div>
                        </div>
    
                    </section>
    
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <section class="section bg-smart">
                <div class="row justify-content-sm-center">
                    <div class="col-6">
                        <ul class="text-white font-weight-bold">
                            <li>
                                Saldo
                            </li>
                            <li>
                                Extrato
                            </li>
                            <li>
                                Transferência
                            </li>
                            <li>
                                Depósito
                            </li>
                            <li>
                                Saque
                            </li>
                            <li>
                                Investimento
                            </li>
                            <li>
                                Clube de desconto
                            </li>
                            <li>
                                Pagamentos
                            </li>
                            <li>
                                Comprovantes
                            </li>
                        </ul>
                    </div>
    
                    <div class="col-6">
    
                        <img class="img-celular img-fluid" src="img/mao.png" alt="">
    
    
                    </div>
                </div>
    
    
            </section>
                </div>
            </div>
    
    
        </div>
    </div>
</template>

<script>
export default {
    name: "Home"
}
</script>

<style>
.btn-present{
    margin-top:20px;
    margin-bottom:20px;
}
img.img-celular.img-fluid {
    position: absolute;
    top: -181px;
    width: 80%;
}

img.img-logo.img-fluid {
    width: 326px;
}

.bg-black{
    background-color:#211F21! important;
}
.bg-smart, body{
    background-color: #00A4BA
}

.section {
    padding-bottom: 20px;
    padding-top: 20px;
}

.btn-inicial-smart {
    margin-bottom: 0px;
    margin-top: 14px;
}

.btn.btn-inicial-smart.btn-primary {
    background-color: #fe4d01;
    width: 6em;
    border-color: #d64000;
}

.btn.btn-inicial-smart.btn-primary:hover {
    background-color: #ff601b;
}
</style>

