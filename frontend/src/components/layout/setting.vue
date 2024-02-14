<template>
    <!-- component -->
    <!-- component -->
    <div class="bg-gray-200 min-h-screen ">
        <div class="container mx-auto">
            <div class="inputs w-full max-w-2xl p-6 mx-auto">
                <h2 class="text-2xl text-gray-900">Paramètre du compte</h2>
                <form class="mt-6 border-t border-gray-400 pt-4" @submit.prevent="updateUser()">
                    <div class='flex flex-wrap -mx-3 mb-6'>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'
                                for='grid-text-1'>Identifiant</label>
                            <input v-model="userName"
                                class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                id='grid-text-1' type='text' placeholder='Enter userName' required>
                        </div>

                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>selecter service 
                                </label>
                            <div class="flex-shrink w-full inline-block relative">
                                <select name="HeadlineAct" id="HeadlineAct" v-model="group_id"
                                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm p-2">
                                    <option value="">selecter service</option>
                                    <option v-for="group in groups" :key="group.id" :value="group.id">{{ group.zone_name }}
                                    </option>

                                </select>

                            </div>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>selecter post 
                                </label>
                            <div class="flex-shrink w-full inline-block relative">
                                <select name="HeadlineAct" id="HeadlineAct" v-model="jobposition_id"
                                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm p-2">
                                    <option value="">selecter post</option>
                                    <option v-for="post in posts" :key="post.id" :value="post.id">{{ post.job_name }}
                                    </option>


                                </select>

                            </div>
                        </div>
                        <div class="personal w-full border-t border-gray-400 pt-4">
                            <h2 class="text-2xl text-gray-900">Informations personnelles:</h2>
                            <div class="flex items-center justify-between mt-4">
                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                    <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>
                                        Nom</label>
                                    <input v-model="name"
                                        class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                        type='text'>
                                </div>
                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                    <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>
                                        Prenom</label>
                                    <input v-model="lastName"
                                        class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                        type='text' required>
                                </div>
                            </div>

                            <div class='w-full md:w-full px-3 mb-6'>
                                <label
                                    class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Image</label>
                                <div>
                                    <img v-if="photo != Null" class="h-12 w-12 flex-none rounded-full bg-gray-50 mb-2"
                                        :src="'http://localhost:8000' + photo" alt="" />
                                    <div v-if="photo == Null"
                                        class="relative mb-2 items-center justify-center h-12 w-12 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                        <span class="font-medium text-gray-600 dark:text-gray-300">{{
                                            lastName.charAt(0) + "." + name.charAt(0) }}</span>
                                    </div>

                                    <label for="file-upload"
                                        class="border border-gray-400 relative cursor-pointer rounded-md  text-gray-900 px-2 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>Télécharger image</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only" ref="photo"
                                            @change="saveImage">
                                    </label>
                                </div>


                            </div>
                            <div class='w-full md:w-full px-3 mb-6'>
                                <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>
                                    Numero de telephone 
                                </label>
                                <input v-model="num_tlf"
                                    class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                    type='text' required>
                            </div>

                            <div class="flex justify-end">
                                <button
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                    type="submit">sauvegarder</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class='w-full md:w-full px-3 mb-6 '>
                    <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Mot de passe</label>
                    <button @click="toggleEditPass" type
                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 ">
                        Modifier Mot de passe</button>
                </div>
                <form @submit.prevent="updatePassword()">
                    <div class='w-full md:w-full px-3 mb-6' v-if="editPass == true">
                        <div class=' px-3 mb-6'>

                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 '
                                :class="{ 'text-green-700 dark:text-green-500': success == true, 'text-red-700 dark:text-red-500': success == false }"
                                for='grid-text-1'>Mot de passe actuel</label>
                            <input v-model="password"
                                class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                :class="{ 'border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500': success == true, 'border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500': success == false }"
                                id='grid-text-1' type='password' placeholder='Enter current mot de passe' required>
                            <p v-if="success == false" class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">Oh,
                                    snapp!</span> Mot de passe incorrect.</p>
                            <p v-if="success == true" class="mt-2 text-sm text-green-600 dark:text-green-500"> Mot de passe
                                modifier avec succer.</p>

                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'
                                for='grid-text-1'>Nouvelle Mot de passe</label>
                            <input v-model="newPassword"
                                class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                id='grid-text-1' type='password' placeholder='Enter nouvelle mot de passe' required>
                        </div>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'
                                :class="{ 'text-green-700 dark:text-green-500': passwordsMatch == true, 'text-red-700 dark:text-red-500': passwordsMatch == false }"
                                for='grid-text-2'>Confirmer Mot de passe</label>
                            <input v-model="confirmPassword"
                                class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500'
                                :class="{ 'border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500': passwordsMatch == true, 'border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500': passwordsMatch == false }"
                                id='grid-text-2' type='password' placeholder='Enter confirmer mot de passe' required>
                            <p v-if="passwordsMatch == false" class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">Oh,
                                    snapp!</span> Mot de passe incorrect.</p>


                        </div>

                        <div class="flex justify-end">
                            <button
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="submit" :disabled="!passwordsMatch || !newPassword">sauvegarder</button>
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
            editPass: false,
            success: null,
            confirmPassword: '',
            newPassword: "",
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
        updatePassword() {
            UserService.updatePassword(this.store.getuser['id'], this.password, this.newPassword).then((res) => {
                this.success = res.data.success;
                this.user = res.data.data;
                this.password = "";
                this.newPassword = "";
                this.confirmPassword = "";
            })
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
            }, this.id).then((res) => {
                UserService.getUserById(this.store.getuser['id']).then((res) => {
                    this.store.setUser(res.data.data);



                })
            }).catch((error) => {
                console.error("Error updating user:", error);
            });

        },
        saveImage() {
            this.photo = this.$refs.photo.files[0];
            this.avatarupload = 1;
        },
        toggleEditPass() {
            this.editPass = !this.editPass;
        },

    },
    computed: {
        passwordsMatch() {
            console.log(this.confirmPassword);
            if(this.confirmPassword!=''){
                return this.newPassword === this.confirmPassword;
            }else{
                this.confirmPassword='';
            }
            
        }
    }
}



</script>