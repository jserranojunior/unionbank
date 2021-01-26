import Home from './views/Home'
// import HomeLogin from './views/HomeLogin'
import Register from './views/Register'
import RegisterInicial from './views/RegisterInicial'
import Login from './views/Login'
// import Receber from './views/Receber'

// import RegisterComplete from './views/Register'


import CaixaConta from './views/Caixa/Caixa'

const routes = [
    // {path:'/', name:'Home', component: Home},


    {path:'/login', name:'Login', component: Login},
    {path:'/register', name:'Register', component: Register},
    {path:'/', name:'RegisterInicial', component: RegisterInicial},
    // {path:'/registercomplete', name:'RegisterComplete', component: RegisterComplete},
    // {path:'/receber', name:'Receber', component: Receber},
    // {path:'/user/home', name:'HomeLogin', component: HomeLogin},

    {path:'/caixa', name:'CaixaConta', component:CaixaConta},


]

export default routes