import axios from "axios";

const ApiClient = axios.create({
    baseURL: "http://localhost:8000/api",
    withCredentials: false,
    headers: {
        accept: "application/json",
        "content-type": "application/json",
      },
    
  });

  export default {
    getNotif(notif){
        console.log(notif);
        return ApiClient.get("/getNotif",{ params: notif });
    },
    
  }