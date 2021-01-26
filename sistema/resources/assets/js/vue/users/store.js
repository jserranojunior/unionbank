import Vue from 'vue'
import Vuex from 'vuex'

import Login from './components/auth/VuexAuth'


Vue.use(Vuex)

export default new Vuex.Store({
    modules:{
        Login,        
    } 
})