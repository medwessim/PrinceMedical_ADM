import axios from "axios";

const ApiClient = axios.create({
    baseURL: "http://localhost:8000/api",
    withCredentials: false,
    
  });

  export default {
    getNews(){
        return ApiClient.get("/news");
    },
    deleteNew(id){
        return ApiClient.delete("/deleteNew/"+id);
    },
    AddNew(news){
        let data= new FormData();
        data.append("title", news.title);
        data.append("description", news.description);
        data.append("photo", news.photo);
        const config = {
            Headers:{
              "content-Type" : "multipart/form-data",
            },
          };
      console.log(news);
        return ApiClient.post("/addNew", data, config);
    },
    getNewById(id){
      return ApiClient.get("/NewsDetails/"+id);
    },
    UpdateNew(id,news){
      return ApiClient.put("/updateNew/"+id,news);
    },
    
};