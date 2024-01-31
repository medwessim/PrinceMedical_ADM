import axios from "axios";

const ApiClient = axios.create({
    baseURL: "http://localhost:8000/api",
    withCredentials: false,
    
  });

  export default {
    getGroups(){
        return ApiClient.get("/groups");
    },
    deleteGroup(id){
        return ApiClient.delete("/deleteGroup/"+id);
    },
    AddGroup(group){
      console.log(group);
        return ApiClient.post("/addGroup",group);
    },
    getGroupById(id){
      return ApiClient.get("/GroupsDetails/"+id);
    },
    UpdateGroup(id,group){
      return ApiClient.put("/updateGroup/"+id,group);
    },
    getGroupsById(id){
      return ApiClient.get("/GroupsDetails/"+id);
    }
};