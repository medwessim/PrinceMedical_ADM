<template>
    <div>
        <header class="bg-gray-50 shadow ">
            <div class="mx-auto max-w-7xl  py-8 sm:px-6 ">

                <div class="flex items-center  gap-4">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Acceuil </h1>


                </div>
            </div>
        </header>
        <section class="overflow-hidden bg-cover bg-top bg-no-repeat  max-w-screen-2xl mx-auto"
            :style="{ backgroundImage: `url(${require('@/assets/dashbord1.jpg')})` }">
            <div class="bg-black/25 p-8 md:p-12 lg:px-16 lg:py-24">
                <div class="text-center ltr:sm:text-left rtl:sm:text-right">
                    <h2 class="text-2xl font-bold text-white sm:text-3xl md:text-5xl">dernières nouvelles</h2>

                    <p class="hidden max-w-lg text-white/90 md:mt-6 md:block md:text-lg md:leading-relaxed">
                        <!-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore officia corporis quasi
                        doloribus iure architecto quae voluptatum beatae excepturi dolores. -->
                    </p>

                    <div class="mt-4 sm:mt-8">
                        <button type="button" @click="add = true"
                            class="inline-block rounded-full bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                            Ajouter dernières nouvelles
                        </button>

                    </div>
                </div>
            </div>
        </section>
        <div class="container my-24 mx-auto md:px-6">

            <!-- Section: Design Block -->
            <section class="mb-32 text-center">
                <h2 class="mb-12 pb-4 text-center text-3xl font-bold">
                    Latest articles
                </h2>

                <div class="grid gap-6 lg:grid-cols-3 xl:gap-x-12">
                    <div class="mb-6 lg:mb-0">
                        <div
                            class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                            <div class="flex">
                                <div class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                                    data-te-ripple-init data-te-ripple-color="light">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/024.webp" class="w-full" />
                                    <a href="#!">
                                        <div
                                            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="p-6">
                                <h5 class="mb-3 text-lg font-bold">My paradise</h5>
                                <p class="mb-4 text-neutral-500 dark:text-neutral-300">
                                    <small>Published <u>13.01.2022</u> by
                                        <a href="#!">Anna Maria Doe</a></small>
                                </p>
                                <p class="mb-4 pb-2">
                                    Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                                    placerat vulputate. Ut vulputate est non quam dignissim
                                    elementum. Donec a ullamcorper diam.
                                </p>
                                <div class="inline-flex rounded-lg border border-gray-100 bg-gray-100 p-1">
                                    <button
                                        class="inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>

                                        modifier
                                    </button>

                                    <button
                                        class="inline-flex items-center gap-2 rounded-md bg-white px-4 py-2 text-sm text-blue-500 shadow-sm focus:relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>

                                        Supprimer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </section>
            <!-- Section: Design Block -->
            <!-- section add  -->
            <div class="relative z-10 " role="dialog" v-if="add == true">

                <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>

                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                    <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">

                        <div
                            class=" flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                            <div
                                class=" relative flex items-center overflow-hidden  bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                                <button type="button" @click="add = false"
                                    class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
                                    <span class="sr-only">Close</span>
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <form enctype="multipart/form-data" @submit.prevent="addNew()"
                                    class="w-200 mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                                    <p class="text-center text-lg font-medium">Ajouter une nouvelle</p>
                                    <div>
                                        <label for="Username"
                                            class="relative block rounded-md border border-gray-200 shadow-sm">
                                            <input type="text" v-model="title"
                                                class=" w-[500px] peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-4 pe-12"
                                                placeholder="Username" />

                                            <span
                                                class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                                titre
                                            </span>
                                        </label>
                                    </div>
                                    <div class="relative mb-3" data-te-input-wrapper-init>
                                        <textarea v-model="description"
                                            class="border border-gray-200 peer block min-h-[auto] w-full rounded  bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                            id="exampleFormControlTextarea1" rows="3" placeholder="Your message"></textarea>
                                        <label for="exampleFormControlTextarea1"
                                            class="pointer-events-none absolute bg-white left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6]text-xs text-gray-700  transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Example
                                            description de nouvelle</label>
                                    </div>
                                    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
                                    <div class="mb-3">
                                        <label for="formFile"
                                            class="mb-2 inline-block text-neutral-700 dark:text-neutral-200">image</label>
                                        <input
                                            class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                            ref="photo" @change="saveImage" type="file" id="formFile" />
                                    </div>
                                    <button type="submit"
                                        class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                                        ajouter
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import newService from "@/source/News"
import { AuthStore } from "@/store/index.js"

export default {
    created() {
        this.getNews();
    },
    data() {
        return {
            news: [],
            title: "",
            description: "",
            photo: "",
            store: AuthStore(),
            add: false,
        }
    },
    methods: {
        getNews() {
            newService.getNews().then((res) => {
                this.news = res.data.data
                console.log(this.news);
            })
        },
        addNew() {
            newService.AddNew({
                "title": this.title,
                "description": this.description,
                "photo": this.photo,

            }).then((res) => {
                this.photo = "";
                this.description = "";
                this.title = "";
            })
        },
        saveImage() {
            this.photo = this.$refs.photo.files[0];
            this.avatarupload = 1;
        },

    }
}




</script>