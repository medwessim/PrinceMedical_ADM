<template>
    <div>
        <header class="bg-gray-50 shadow ">
            <div class="mx-auto max-w-7xl  py-8 sm:px-6 ">

                <div class="flex items-center  gap-4">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Service </h1>
                    <form class="justify-end">
            <label for="default-search"
              class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
              <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
              </div>
              <input type="search" class="block w-full p-4 ps-10 pe-32 text-sm  border  rounded-lg     dark:text-white"
                v-model="search"  placeholder="Search website..." />
              <button type="button"
                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
          </form>
                    <button @click="addGroupPage()" v-if="isAdmin == 1"
                        class="inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                        Ajouter Nouvelle Service
                    </button>

                </div>
            </div>
        </header>

        <div class="py-8 overflow-x-auto mx-auto max-w-7xl divide-y ">
            <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                <thead class="ltr:text-left rtl:text-right">
                    <tr>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Id Service</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">nom du Service</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">créé à</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">mise à jour à</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900" v-if="isAdmin == 1">opération</th>
                    </tr>
                </thead>

                <tbody v-for="group in groups" :key="group.id" class="divide-y divide-gray-200 ">
                    <tr class="odd:bg-gray-50 text-center">
                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ group.id }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ group.zone_name }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ group.created_at }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ group.updated_at }}</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700" v-if="isAdmin == 1"><span
                                class="inline-flex overflow-hidden rounded-md border bg-white shadow-sm">
                                <button  class="inline-block border-e p-3 text-gray-700 hover:bg-gray-50 focus:relative"
                                    title="Edit" @click="updateGroup(group.id)">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </button>

                                <button class="inline-block p-3 text-gray-700 hover:bg-gray-50 focus:relative"
                                    title="Delete" @click="deletePage(group.id)">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </span></td>
                    </tr>


                </tbody>
            </table>
        </div>
        <!-- add group section  -->
        <div class="relative z-10" role="dialog" v-if="add == true">

            <div class="fixed  inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex  min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">

                    <div class="flex  transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                        <div
                            class="relative flex items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                            <button type="button"
                                class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8"
                                @click="close()">
                                <span class="sr-only">Close</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>

                            <form @submit.prevent="AddGroup()"
                                class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                                <p class="text-center text-lg font-medium">Ajouter une zone</p>


                                <div>
                                    <label for="Username"
                                        class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                        <input type="text" v-model="zone_name"
                                            class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-4 pe-12"
                                            placeholder="Username" />

                                        <span
                                            class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                            Nom du Zone
                                        </span>
                                    </label>
                                </div>



                                <button type="submit"
                                    class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                                    ajouter
                                </button>

                                <p class="text-center text-sm text-gray-500">
                                    No ?
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- edit group section  -->
        <div class="relative z-10" role="dialog" v-if="edit == true">

            <div class="fixed  inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex  min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">

                    <div class="flex  transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                        <div
                            class="relative flex items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                            <button type="button"
                                class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8"
                                @click="close()">
                                <span class="sr-only">Close</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>

                            <form action="" @submit.prevent="updateUser"
                                class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                                <p class="text-center text-lg font-medium">modifier cette zone</p>


                                <div>
                                    <label for="Username"
                                        class="w-full relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                        <input type="text" v-model="zone_name"
                                            class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-4 pe-12"
                                            placeholder="Username" />

                                        <span
                                            class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                            Zone Name
                                        </span>
                                    </label>
                                </div>



                                <button type="submit"
                                    class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                                    modifier
                                </button>

                                <p class="text-center text-sm text-gray-500">
                                    No ?
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- delete section  -->
        <div class="relative z-10" role="dialog" v-if="deleteG == true">

            <div class="fixed inset-0 hidden  bg-opacity-75 transition-opacity md:block"></div>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">

                    <div
                        class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-xl">
                        <div class="relative flex items-center overflow-hidden  red-shadow">
                            <button type="button"
                                class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8"
                                @click="close()">
                                <span class="sr-only">Close</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>

                            <div class="rounded-lg bg-white p-8 shadow-2xl">
                                <h2 class="text-lg font-bold">Tu es sûr de vouloir faire ça ?</h2>

                                <p class="mt-2 text-sm text-gray-500">
                                    Faire cela pourrait causer des problèmes ailleurs, êtes-vous sûr à 100% que c’est OK?
                                </p>

                                <div class="mt-4 flex gap-2">
                                    <button type="button" @click="deleteGroup()"
                                        class="rounded bg-green-50 px-4 py-2 text-sm font-medium text-green-600">
                                        Oui, je suis sûr que
                                    </button>

                                    <button type="button" @click="close()"
                                        class="rounded bg-gray-50 px-4 py-2 text-sm font-medium text-gray-600">
                                        Non, reviens
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import groupService from "@/source/Group.js"
import { AuthStore } from "@/store/index.js"

export default {
    created() {
        this.getGroups();
        this.getAdmin();
    },

    data() {
        return {
            groups: [],
            zone_name: "",
            edit: false,
            add: false,
            deleteG: false,
            idGroup: null,
            isAdmin: 0,
            store: AuthStore(),

        }

    },
    components: {

    },

    methods: {
        getAdmin() {
            this.isAdmin = this.store.getuser['isAdmin'];
        },
        getGroups() {
            groupService.getGroups().then((res) => {
                this.groups = res.data.data;
            })
        },
        close() {
            this.edit = false;
            this.deleteG = false;
            this.add = false;
        },

        updateGroup(id) {
            this.edit = true;
        },
        deletePage(id) {
            this.deleteG = true;
            this.idGroup = id;

        },
        addGroupPage() {
            this.add = true;
        },
        deleteGroup() {
            groupService.deleteGroup(this.idGroup).then((res) => {
                this.getGroups();
            })
            this.deleteG = false;
        },
        AddGroup() {
            groupService.AddGroup(
                {
                    "zone_name": this.zone_name,

                }
            ).then((res) => {
                this.getGroups();
                this.zone_name = ""
                this.add = false;

            }).catch((error) => {
                console.log("error");
                this.load = false;
            })
            // router.go();

        },

    },
}




</script>

<style>
.red-shadow {
    position: relative;
    display: flex;
    align-items: center;
    overflow: hidden;
    box-shadow: 0 10px 10px rgba(255, 0, 0, 0.5);
    /* Red shadow with 50% opacity */
}
</style>