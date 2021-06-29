import useHttpAuth from "./useHttpAuth";
import { reactive, toRefs } from "vue";
// import { useRouter } from 'vue-router'
import router from "@/router/index";

const HttpAuth = new useHttpAuth();
// eslint-disable-next-line @typescript-eslint/explicit-module-boundary-types
export const useAuth = () => {
  const state = reactive({
    ola: "Ola",
    fields: { email: "", password: "" },
    auth: { erro: "", token: "" },
    bgImagem: "",
    mobile: false,
    linkWhatsApp: "https://web.whatsapp.com/send?phone=5511998068930",
  });

  async function Login() {
    if (state.fields && state.fields.email && state.fields.password) {
      const Auth = HttpAuth.login(state.fields);
      Auth.then((res) => {
        if (res && res.data) {
          setToken(res.data.token).then((response) => {
            if (response) {
              router.push({ name: "Financeiro" });
            }
          });
        } else {
          state.auth.erro = "Erro ao fazer o login";
        }
      });
      Auth.catch(() => {
        state.auth.erro = "Erro ao fazer o login";
      });
    } else {
      state.auth.erro = "Campos Vazios";
      setToken("");
    }
  }

  async function isMobile() {
    const userAgent = navigator.userAgent.toLowerCase();
    if (
      userAgent.search(
        /(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i
      ) != -1
    ) {
      state.linkWhatsApp = "whatsapp://send?phone=5511998068930";
    } else {
      state.linkWhatsApp = "https://web.whatsapp.com/send?phone=5511998068930";
    }
  }

  async function isLogged() {
    if (localStorage.getItem("token") !== state.auth.token) {
      let token: string;
      if (
        localStorage.getItem("token") != "null" ||
        localStorage.getItem("token") != "undefined" ||
        localStorage.getItem("token") != null ||
        localStorage.getItem("token") != undefined
      ) {
        token = String(localStorage.getItem("token"));
      } else {
        token = "";
      }

      await setToken(token).then(() => {
        if (state.auth.token == "") {
          state.auth.erro = "Erro ao fazer login";
          return false;
        } else {
          return true;
        }
      });
    }
    if (
      !state.auth ||
      !state.auth.token ||
      state.auth.token == "" ||
      state.auth.token == undefined ||
      state.auth.token == "undefined" ||
      state.auth.token == "null" ||
      state.auth.token == null ||
      state.auth.token.length == 0
    ) {
      return false;
    } else if (state.auth && state.auth.token !== "") {
      return true;
    }
  }

  async function setToken(value: string) {
    localStorage.setItem("token", value);
    state.auth.token = value;
    if (value) {
      state.auth.erro = "";
      return true;
    } else {
      return false;
    }
  }
  function Logout() {
    setToken("");
    router.push({ name: "Login" });
  }
  return { ...toRefs(state), Logout, Login, isLogged, isMobile };
};
