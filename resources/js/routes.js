
import HomeComponet from "./components/HomeComponet";
import LoginComponet from "./components/LoginComponet"
import dashboradComponet from "./components/dashboradComponet";



 
export const routes  =[
    {
        path :"/",
        name :"index",
        component: HomeComponet
    },
    {
        path: "/home",
        name: "home",
        component: HomeComponet
    },
    {
        path: "/login",
        name: "login",
        component: LoginComponet
    },

    // requireAuth mean user must be Auth to arrived this page0
    {
        path: "/dashborad",
        name: "dashborad",
        component: dashboradComponet,
        meta :{
            requireAuth : true ,
        }  
    }
];