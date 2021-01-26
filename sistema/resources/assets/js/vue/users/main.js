import Vue from 'vue';
import VueRouter from 'vue-router'
import routes from './routes'
// import axios from 'axios'
// import VueAxios from 'vue-axios'
// import store from './vuex/store'
import store from './store'

  
import App from './components/layouts/App' 

const router = new VueRouter({
    routes
}) 
 
  
Vue.use(VueRouter)
new Vue({
    store,
    router,
    components:{
        App, 
    }
}).$mount('#appvue')   