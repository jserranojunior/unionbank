<template>
    <div>
        <div class="row row-space justify-content-sm-center">                
                <div class="col-sm-11">                 
                    <input type="text" class="form-control input-main-login" placeholder="Nome completo ou Razão social">   
                    <input type="text" class="form-control input-main-login" placeholder="Digite seu celular ou CPF/CNPJ">
                    <input type="password" class="form-control input-main-login" placeholder="Crie uma senha">
                </div>
                <div class="col-sm-11 text-right">
                    <router-link to="/register">
                    <div class="btn btn-sm btn-outline-light font-weight-bold">RECEBER</div>
                    </router-link>
                </div>
            </div>
    </div>
</template>

<script>
export default {
    name: "Receber"
}
</script>

