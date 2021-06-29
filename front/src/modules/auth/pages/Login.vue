<template>
  <div class="wallpaper">
    <div class="container-fluid">
      <div class="flex flex-wrap margin-bottom-4 margin-topo justify-center">
        <div class="w-full text-center">
          <img class="img-fluid" src="../../../assets/imgs/union-bank-logo.png" alt="" />
        </div>
      </div>
      <div class="flex flex-wrap row-space justify-center">
        <div class="w-full sm:1/2 md:1/3 lg:1/4 col-ja-tenho-conta mt-4">
          <router-link to="login">
            <div class="btn-success-tail btn-outline-light w-full font-weight-bold">
              JA SOU UNION BANK
            </div>
          </router-link>
        </div>
        <div class="w-full sm:1/2 md:1/3 lg:1/4 col-quero-conta mt-2">
          <router-link to="/register">
            <div class="btn-warning-tail btn-outline-light w-full font-weight-bold">
              QUERO SER UNION BANK
            </div>
          </router-link>
        </div>
      </div>

      <div class="flex flex-wrap row-space justify-center mt-2">
        <div class="col-4 col-xs-4 col-sm-4 col-md-1 col-lg-1 text-center">
          <div class="icon-social text-primary text-3xl text-green-600">
            <a target="_blank" :href="linkWhatsApp">
              <h5>
                <i class="bg-white-social fab fa-whatsapp"></i>
              </h5>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { inject, onBeforeMount } from "vue";

export default {
  // eslint-disable-next-line @typescript-eslint/explicit-module-boundary-types
  setup() {
    const useAuth = inject("auth");
    const { fields, auth, Login, bgImagem, mobile, linkWhatsApp, isMobile } = useAuth;

    onBeforeMount(() => {
      isMobile();
      // document.body.style.backgroundImage = "url('img" + "/bg-conta-elo.png')";
      // document.body.style.backgroundColor = "rgb(2,0,36)";
      document.body.style.background =
        "linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(1,42,120,1) 35%, rgba(0,56,161,1) 100%)";
      document.body.style.height = window.innerHeight;
      console.log(window.innerHeight);
    });

    return { fields, auth, Login, bgImagem, mobile, linkWhatsApp, isMobile };
  },
  // eslint-disable-next-line @typescript-eslint/explicit-module-boundary-types
};
</script>

<style scoped>
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
</style>
