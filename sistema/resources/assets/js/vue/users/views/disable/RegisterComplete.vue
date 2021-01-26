<template>
    <div>
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-sm-12">
                    <img class="img-logo img-fluid" src="img/logo-white-conta-smart.png" alt="">
                    <hr/>
                </div>
            </div>
    
            <div class="row row-space justify-content-sm-center">
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="NOME COMPLETO">
                    </div>
    
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="EMAIL">
                    </div>
    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="WHATSAPP">
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="TELEFONE">
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="RG/RNE/RNM/CI">
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="VALIDADE">
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="DATA EXPEDIÇÃO">
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="CPF/CNPJ">
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="DATA NASCIMENTO">
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="LOCAL DE NASCIMENTO">
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="NOME CÔNJUGE">
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="NOME DO PAI">
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="NOME DO MÃE">
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="CEP">
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="NÚMERO">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="LOGRADOURO">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="BAIRRO">
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="ESTADO">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="CIDADE">
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="COMPLEMENTO">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="RENDA MENSAL">
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="SALDO">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="RECIBO DO IMPOSTO DE RENDA">
                            </div>                            
                        </div>
                    </div>

                     <div class="form-group">
                        <div class="row">
                            <div class="col-12 text-right">
                                <div class="btn btn-outline-light font-weight-bold">CADASTRAR</div>
                            </div>                            
                        </div>
                    </div>
    
    
                </div>
            </div>
    
     
    
        </div>
    </div>
</template>

<script>
export default {
    name: "RegisterComplete"
}
</script>

<style>
.hr-space {
    margin-bottom: 40px;
    margin-top: 40px;
}

body {
    background-color: #00A4BA
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
    color: #6c757d;
}
.form-control:-moz-placeholder {
    color: #6c757d;
}
.form-control::-moz-placeholder {
    color: #6c757d;
}
.form-control:-ms-input-placeholder {
    color: #6c757d;
}
.form-control::-ms-input-placeholder {
    color: #6c757d;
}
</style>