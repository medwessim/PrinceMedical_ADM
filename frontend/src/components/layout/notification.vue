<template>
    <div>
        <div class="hidden md:block ">
            <div class="ml-4 flex items-center md:ml-6">
                <button type="button" @click="dropdown = !dropdown"
                    class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                    <div
                        class="absolute bottom-auto left-auto right-0 top-0 z-10 inline-block -translate-y-1/2 translate-x-2/4 rotate-0 skew-x-0 skew-y-0 scale-x-100 scale-y-100 whitespace-nowrap rounded-full bg-red-400 px-2.5 py-1 text-center align-baseline text-xs font-bold leading-none text-white">
                        {{ notifs.length }}
                    </div>
                </button>
            </div>
        </div>

        <!-- Dropdown menu -->
        <div v-if="dropdown == true"
            class="flex flex-col flex-grow  overflow-auto h-[400px] ml-6 absolute mr-8  z-10 mt-2 w-[300px] divide-y divide-gray-100 rounded-md border border-gray-100 bg-white shadow-lg "
            role="menu">
            <div v-if="notifs.length == 0" role="alert" class=" rounded border-s-4 border-green-500 bg-green-50 p-4">
                <strong class="block font-medium text-green-800"> Pas de notification </strong>


            </div>
            <div class=" p-2" v-for="notif in notifs.slice().reverse()" :key="notif.id">
                <div v-for="user in users" :key="user.id">
                    <div id="toast-notification"
                        class="w-full max-w-xs p-4 text-gray-900 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-300"
                        role="alert" v-if="user.id == notif.envoi_id">

                        <div class="flex items-center mb-3">
                            <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">New notification</span>
                            <button type="button" @click="deleteNotif(notif.id)"
                                class="ms-auto -mx-1.5 -my-1.5 bg-white justify-center items-center flex-shrink-0 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                                data-dismiss-target="#toast-notification" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center">
                            <div class="relative inline-block shrink-0">
                                <img v-if="user && user.photo != null" class="h-12 w-12 flex-none rounded-full bg-gray-50"
                                    :src="'http://localhost:8000' + user.photo" alt="" />
                                <div v-else
                                    class="relative inline-flex items-center justify-center h-12 w-12 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                    <span class="font-medium text-gray-600 dark:text-gray-300">{{ user.lastName.charAt(0) + " " + user.name.charAt(0) }}</span>
                                </div>
                                <span
                                    class="absolute bottom-0 right-0 inline-flex items-center justify-center w-6 h-6 bg-blue-600 rounded-full">
                                    <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 18" fill="currentColor">
                                        <path
                                            d="M18 4H16V9C16 10.0609 15.5786 11.0783 14.8284 11.8284C14.0783 12.5786 13.0609 13 12 13H9L6.846 14.615C7.17993 14.8628 7.58418 14.9977 8 15H11.667L15.4 17.8C15.5731 17.9298 15.7836 18 16 18C16.2652 18 16.5196 17.8946 16.7071 17.7071C16.8946 17.5196 17 17.2652 17 17V15H18C18.5304 15 19.0391 14.7893 19.4142 14.4142C19.7893 14.0391 20 13.5304 20 13V6C20 5.46957 19.7893 4.96086 19.4142 4.58579C19.0391 4.21071 18.5304 4 18 4Z"
                                            fill="currentColor" />
                                        <path
                                            d="M12 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V9C0 9.53043 0.210714 10.0391 0.585786 10.4142C0.960859 10.7893 1.46957 11 2 11H3V13C3 13.1857 3.05171 13.3678 3.14935 13.5257C3.24698 13.6837 3.38668 13.8114 3.55279 13.8944C3.71889 13.9775 3.90484 14.0126 4.08981 13.996C4.27477 13.9793 4.45143 13.9114 4.6 13.8L8.333 11H12C12.5304 11 13.0391 10.7893 13.4142 10.4142C13.7893 10.0391 14 9.53043 14 9V2C14 1.46957 13.7893 0.960859 13.4142 0.585786C13.0391 0.210714 12.5304 0 12 0Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="sr-only">Message icon</span>
                                </span>
                            </div>
                            <div class="ms-3 text-sm font-normal">
                                <div class="text-sm font-semibold text-gray-900 dark:text-white">
                                    {{ user.name + " " + user.lastName }}</div>
                                <div class="text-sm font-normal">{{ notif.message }}</div>
                                <span class="text-xs font-medium text-blue-600 dark:text-blue-500">{{
                                    moment(notif.created_at).fromNow() }}</span>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</template>

<script>
import moment from 'moment'
import notifService from "@/source/notif"
import UserService from "../../source/Users.js"
export default {
    mounted() {
        window.Echo.channel('public').listen('ChatMessageSent', (e) => {
            this.getNotif();


        })
    },
    created() {
        this.getUsers();
        this.getNotif();
        this.moment = moment;

        // console.log(this.recu_id);
    },
    props: {
        recu_id: Number,
    },
    data() {
        return {
            dropdown: false,
            notifs: [],
            users: [],
            search: "",


        }
    },
    methods: {
        async getNotif() {
            try {
                const res = await notifService.getNotif({
                    recu_id: this.recu_id
                });
                this.notifs = res.data.data;
                this.tail = this.notifs.length;


            } catch (error) {
                console.error('Error fetching messages:', error);
            }
        },
        getUsers() {
            UserService.getUsers(this.recu_id, this.search).then((res) => {
                this.users = res.data.data;


            })
        },
        deleteNotif(id) {
            notifService.deleteNotif(id).then((res) => {
                this.getNotif();
                console.log("notif deleted");

            })
        }
    }

}


</script>