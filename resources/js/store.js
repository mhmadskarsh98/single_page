import { getLoggedInUser } from "./auth";

const user = getLoggedInUser();

export default {

    state: {
        currentUser: user,
        isloggedIn: !!user,
        auth_error: null,
        reg_error: null,
        registeredUser: null
    },
    getters: { // value to pass to state
        isloggedIn(state){
            return state.isloggedIn;
        },
        currentUser(state){
            return state.currentUser
        },
        authError(state) {
            return state.auth_error
        },
        registeredUser(state) {
            return state.registeredUser
        },

    },
    mutations: {
        login(state){
            state.auth_error = null ;
        },
        loginSuccess(state, payload) { //payload is the values return with auth 
            state.auth_error = null;
            state.isloggedIn = true;
            state.currentUser = Object.assign({}, payload.user, { token: payload.access_token}); //value of login (token)
            localStorage.setItem("user", JSON.stringify(state.currentUser)) 
        },
        loginFailed(state,payload){
            state.auth_error = payload.error 
        },
        logout(state){
            localStorage.removeItem('user');
            state.isloggedIn=false;
            state.currentUser=null
        },
        registeredUser(state,payload){
            state.reg_error = null ;
            state.registeredUser = payload.user;
        },
        registeredFailed(state, payload) {
            state.registeredUser = payload.user;
        },

    },
    actions: {
        login(context){
            context.commit('login')
        } 
    },
};