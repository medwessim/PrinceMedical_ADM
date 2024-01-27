import axios from "axios";

const ApiClient = axios.create({
    baseURL: "http://localhost:8000/api",
    withCredentials: false,
    headers: {
      accept: "application/json",
      "content-type": "application/json",
    },
  });

export default{

    async signInUser(userName,password){
        console.log("done");
        const store=AuthStore();
        const res= await ApiClient.post('/auth',{userName,password});
        if(res.status===200){
            store.login(res.data.data.token,res.data.data.user,res.data.data.isAdmin);
        }else{
            store.logout();
        }
     },  

     

}