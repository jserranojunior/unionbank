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
      var port = window.location.port;

      let url = "";
      if (port > "") {
        url = `http://${pathname}:${port}/api/users/register`;
      } else {
        url = `http://${pathname}/api/users/register`;
      }

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
      var port = window.location.port;

      let url = "";
      if (port > "") {
        url = `http://${pathname}:${port}/login`;
      } else {
        url = `http://${pathname}/login`;
      }

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
