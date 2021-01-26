import axios from "axios";

export default {
  state: {
    data: {},
    register: {},
    message: "",
  },
  mutations: {
    REGISTER(state, register) {
      state.register = register;
    },
  },
  actions: {
    Register(context, data) {
      var pathname = window.location.host;
      let url = "http://" + pathname + "/api/users/register";
      console.log(url);
      axios
        .post(url, data)
        .then((response) => {
          console.log(response);
          context.commit("REGISTER", response);
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    //login no laravel com o csrf
    LoginLaravel(context, data) {
      var pathname = window.location.host;
      let url = "http://" + pathname + "/login";
      console.log(url);
      axios
        .post(url, data)
        .then((response) => {
          console.log("RODOU ALGO");
          window.location.href = "/login";
        })
        .catch(function(error) {
          console.log(error);
        });
    },
  },
};
