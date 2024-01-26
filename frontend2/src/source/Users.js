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
      let data= new FormData();
      data.append("name", user.name);
      data.append("lastName", user.lastName);
      data.append("userName", user.userName);
      data.append("password", user.password);
      data.append("num_tlf", user.num_tlf);
      data.append("group_id", user.group_id);
      data.append("jobposition_id", user.jobposition_id);
      data.append("photo", user.photo);
      const config = {
        Headers:{
          "content-type" : "multipart/form-data",
        },
      };
      console.log(user);
      console.log(data);
      return ApiClient.post("/addUser", data, config);
    },
    getUserById(id){
      return ApiClient.get("/usersDetails/"+id);
    },
    UpdateUser(id,user){
      return ApiClient.put("/updateUser/"+id,user);
    }
};