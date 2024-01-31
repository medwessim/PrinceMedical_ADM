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
    getPosts(){
        return ApiClient.get("/posts");
    },
    deletePost(id){
        return ApiClient.delete("/deletePost/"+id);
    },
    AddPost(JobPosition){
        return ApiClient.post("/addPost",JobPosition);
    },
    getPostById(id){
      return ApiClient.get("/PostsDetails/"+id);
    },
    UpdatePost(id,JobPosition){
      return ApiClient.put("/updatePost/"+id,JobPosition);
    },
    getPostsById(id){
      return ApiClient.get("/PostsDetails/"+id);
    }
};