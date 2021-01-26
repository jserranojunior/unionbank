
<template>
<div>
    <Header></Header>  
    <div class="container">
    
        <div class="row justify-content-sm-center">
            
            <div class="col-sm-12">    
                <hr/>            
                <p class=" text-center text-white">Ola, nome da pessoa - 
                    <router-link to="#">
                        <a href="#">Sair</a>
                    </router-link>
                    </p>    
                    <hr/>            
            </div>

            <!-- <div class="col-sm-12 text-center">
                <button class="btn btn-sm btn-light">Sair</button>
                 
            </div> -->
           
        </div>
    
        <div class="row row-space">
            <div @click="mostrarSaldo = !mostrarSaldo" class="col-6 text-white text-center">
                MOSTRAR SALDO <br>
    
                <p v-if="mostrarSaldo">R$0,00</p>
    
                <p v-if="mostrarSaldo == false" class="text-center"><i class="fas fa-chevron-down"></i></p>
    
    
            </div>
    
    
            <div class="col-6 text-white">
                <div class="btn btn-light btn-sm btn-inicial-mini">Extrato</div><br>
                <div class="btn btn-light btn-sm btn-inicial-mini">Transfêrencias</div><br>
                <div class="btn btn-light btn-sm btn-inicial-mini">Pagamentos</div>
            </div>
        </div>
    
        <section class="section-funcoes">
    
            <div class="row row-space">
                <div class="col-4">
                    <div class="btn-inicial-func border border-light text-center text-white">
                        <h4>
                            <i class="fas fa-money-bill-alt"></i>
                        </h4>
                        <span class=" text-btn-func text-center"> Saldo</span><br>
    
                    </div>
                </div>
                <div class="col-4">
                    <div class="btn-inicial-func border border-light text-center text-white">
                        <h4>
                            <i class="fas fa-qrcode"></i>
                        </h4>
                        <p class=" text-btn-func text-center">Extrato</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="btn-inicial-func border border-light text-center text-white">
                        <h4>
                            <i class="fas fa-exchange-alt"></i>
                        </h4>
                        <p class=" text-btn-func text-center">Transferência</p><br>
                        <!-- <p class=" text-btn-func text-center">Transferência</p> -->
                    </div>
                </div>
            </div>
    
    
    
    
            <div class="row row-space">
                <div class="col-4">
                    <div class="btn-inicial-func border border-light text-center text-white">
                        <h4>
                            <i class="fas fa-donate"></i>
                        </h4>
                        <p class=" text-btn-func text-center"> Deposito </p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="btn-inicial-func border border-light text-center text-white">
                        <h4>
                            <i class="far fa-credit-card"></i>
                        </h4>
                        <p class=" text-btn-func text-center"> Saque </p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="btn-inicial-func border border-light text-center text-white">
                        <h4>
                            <i class="fas fa-chart-line"></i>
                        </h4>
                        <p class=" text-btn-func text-center"> Elo Invest </p>
                    </div>
                </div>
            </div>
    
            <div class="row row-space">
                <div class="col-4">
                    <div class="btn-inicial-func border border-light text-center text-white">
                        <h4>
                            <i class="fas fa-comments-dollar"></i>
                        </h4>
                        <span class=" text-btn-func text-center"> Envio</span><br>
                        <p class=" text-btn-func text-center">(Câmbio)</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="btn-inicial-func border border-light text-center text-white">
                        <h4>
                            <i class="fas fa-history"></i>
                        </h4>
                        <p class=" text-btn-func text-center">Apoio <br>Contabio Mei </p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="btn-inicial-func border border-light text-center text-white">
                        <h4>
                            <i class="fas fa-bold"></i>
                        </h4>
                        <p class=" text-btn-func text-center">BPP</p><br><br>
                    </div>
                </div>
            </div>
        </section>
    
        <div class="row row-space">
            <div class="col-6">
                <div class="btn btn-light">SUPORTE</div>
            </div>
            <div class="col-6 text-right">
                <div class="btn btn-light">ELO</div>
            </div>
        </div>
    
        <div class="row row-space"></div>
    </div>
</div>
    
</template>

<script>
    import Header from '../components/layouts/Header'
export default {
    name: "HomeLogin",
    data() {
        return {
            mostrarSaldo: false
        }
    },
    components: {
            Header,
            },
}
</script>

<style>
.card {
    background-color: #00A4BA;
    border: 1px solid #f8f9fa;
    color: white;
}

.btn-inicial-func {
    padding: 15px;
    margin-bottom: 20px;
    height: 100px;
}

.section-funcoes {
    margin-top: 15px;
}

.btn-inicial-mini {
    width: 100%;
    margin-bottom: 2px;
}

.card-columns {
    column-count: 2;
}

.btn {
    cursor: pointer;
}

@media (min-width: 260px) and (max-width: 400px) {
    .text-btn-func {
        font-size: 0.6rem;
        font-weight: bold;
    }
    .card-deck {
        column-count: 4;
    }
    /* .card-deck .card{
    margin-left: 4px;
}
   
    .card-deck {
       flex-direction: row! important
    } */
}
</style>


