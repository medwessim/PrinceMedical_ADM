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
    getUsers(){
        return ApiClient.get("/users");
    },
    deleteUser(id){
        return ApiClient.delete("/deleteUser/"+id);
    },
    AddUser(user){
        return ApiClient.post("/addUser",user);
    },
    getUserById(id){
      return ApiClient.get("/usersDetails/"+id);
    },
    UpdateUser(id,user){
      return ApiClient.put("/updateUser/"+id,user);
    }
};