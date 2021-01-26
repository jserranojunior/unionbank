import axios from "axios"

export default {
    state: {
        data: {},
        register:{},
        message:"",
        
    },
    mutations: {
        REGISTER(state, register) {
            state.register = register
        }        
    },
    actions: {        
        Register(context, data) {
            var pathname = window.location.pathname;
            let url = pathname + 'api/users/register';
            console.log(url)
            axios
                .post(url, data)
                .then(response => {
                    context.commit('REGISTER', response)
                })
                .catch(function (error) {
                    console.log(error);
                });            
        },
        //login no laravel com o csrf
        LoginLaravel(context, data){
            var pathname = window.location.pathname;
            let url = pathname + 'login';
            console.log(url)
            axios
                .post(url, data)
                .then(response => {
                   console.log('RODOU ALGO')
                   window.location.href = "/login";
                })
                .catch(function (error) {
                    console.log(error);
                });  
        }

    }
}