<template>
    <!-- component -->
    <!-- component -->
    <div class="bg-gray-200 min-h-screen pt-2 font-mono my-16">
        <div class="container mx-auto">
            <div class="inputs w-full max-w-2xl p-6 mx-auto">
                <h2 class="text-2xl text-gray-900">Account Setting</h2>
                <form class="mt-6 border-t border-gray-400 pt-4" @click="updateUser()">
                    <div class='flex flex-wrap -mx-3 mb-6'>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'
                                for='grid-text-1'>User Name</label>
                            <input v-model="userName"
                                class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                id='grid-text-1' type='text' placeholder='Enter userName' required>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6 '>
                            <label
                                class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>password</label>
                            <button
                                class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md ">change
                                your password</button>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>pick your
                                zone</label>
                            <div class="flex-shrink w-full inline-block relative">
                                <select name="HeadlineAct" id="HeadlineAct" v-model="group_id"
                                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm p-2">
                                    <option value="">select zone</option>
                                    <option v-for="group in groups" :key="group.id" :value="group.id">{{ group.zone_name }}
                                    </option>

                                </select>

                            </div>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>pick your
                                post</label>
                            <div class="flex-shrink w-full inline-block relative">
                                <select name="HeadlineAct" id="HeadlineAct" v-model="jobposition_id"
                                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm p-2">
                                    <option value="">select post</option>
                                    <option v-for="post in posts" :key="post.id" :value="post.id">{{ post.job_name }}
                                    </option>


                                </select>

                            </div>
                        </div>
                        <div class="personal w-full border-t border-gray-400 pt-4">
                            <h2 class="text-2xl text-gray-900">Personal info:</h2>
                            <div class="flex items-center justify-between mt-4">
                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                    <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>first
                                        name</label>
                                    <input v-model="name"
                                        class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                        type='text' required>
                                </div>
                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                    <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>last
                                        name</label>
                                    <input v-model="lastName"
                                        class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                        type='text' required>
                                </div>
                            </div>

                            <div class='w-full md:w-full px-3 mb-6'>
                                <label
                                    class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>photo</label>
                                <div><img class="h-12 w-12 flex-none rounded-full bg-gray-50 mb-2"
                                        :src="'http://localhost:8000' + photo" alt="" />

                                    <label for="file-upload"
                                        class="border border-gray-400 relative cursor-pointer rounded-md  text-gray-900 px-2 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>Upload a photo</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only" ref="photo"
                                            @change="saveImage">
                                    </label>
                                </div>


                            </div>
                            <div class='w-full md:w-full px-3 mb-6'>
                                <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Phone
                                    number
                                </label>
                                <input v-model="num_tlf"
                                    class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                    type='text' required>
                            </div>

                            <div class="flex justify-end">
                                <button
                                    class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md mr-3"
                                    type="button">save changes</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import { AuthStore } from "../../store/index"
import UserService from "../../source/Users.js"
import groupService from "@/source/Group.js"
import postService from "@/source/Post.js"
import router from "@/router"


export default {

    setup() {

    },
    data() {
        return {
            store: AuthStore(),
            passwordForm: false,
            groups: [],
            users: [],
            user: [],
            posts: [],
            job_name: "",
            zone_name: "",
            name: "",
            lastName: "",
            userName: "",
            photo: "",
            jobposition_id: "",
            num_tlf: "",
            password: "",
            group_id: "",
            id: "",
        }

    },
    created() {

        this.getPosts();
        this.getUserById(this.store.getuser['id']);
        this.getGroups();

    },
    methods: {
        passwordPage() {
            this.passwordForm = true;
        },
        getPosts() {
            postService.getPosts().then((res) => {
                this.posts = res.data.data;
            })
        },
        getGroups() {
            groupService.getGroups().then((res) => {
                this.groups = res.data.data;
            })
        },
        getUserById(id) {
            UserService.getUserById(id).then((res) => {
                this.user = res.data.data;
                this.name = this.user.name;
                this.lastName = this.user.lastName;
                this.userName = this.user.userName;
                this.password = this.user.password;
                this.num_tlf = this.user.num_tlf;
                this.group_id = this.user.group_id;
                this.photo = this.user.photo;
                this.jobposition_id = this.user.jobposition_id;
                this.id = this.user.id;
            })
        },
        updateUser() {
            console.log(this.user);
            UserService.UpdateUser({
                name: this.name,
                lastName: this.lastName,
                userName: this.userName,
                num_tlf: this.num_tlf,
                group_id: this.group_id,
                jobposition_id: this.jobposition_id,
                photo: this.photo,
                avatarupload: this.avatarupload
            }, this.id).then((res) => {UserService.getUserById(this.store.getuser['id']).then((res) =>{
                this.store.setUser(res.data.data);
                
                
                

                
                
                })

            })
            
        },
        saveImage() {
            this.photo = this.$refs.photo.files[0];
            this.avatarupload = 1;
        },
    }
}



</script>