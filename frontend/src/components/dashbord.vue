<template>
    <div>
        <header class="bg-gray-50 shadow ">
            <div class="mx-auto max-w-7xl  py-8 sm:px-6 ">

                <div class="flex items-center  gap-4">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashbord </h1>


                </div>
            </div>
        </header>
        <section
            class="overflow-hidden bg-cover bg-top bg-no-repeat  max-w-screen-2xl mx-auto" :style="{ backgroundImage: `url(${require('@/assets/dashbord1.jpg')})` }">
            <div class="bg-black/25 p-8 md:p-12 lg:px-16 lg:py-24">
                <div class="text-center ltr:sm:text-left rtl:sm:text-right">
                    <h2 class="text-2xl font-bold text-white sm:text-3xl md:text-5xl">dernières nouvelles</h2>

                    <p class="hidden max-w-lg text-white/90 md:mt-6 md:block md:text-lg md:leading-relaxed">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore officia corporis quasi
                        doloribus iure architecto quae voluptatum beatae excepturi dolores.
                    </p>

                    <div class="mt-4 sm:mt-8">
                        <a href="#"
                            class="inline-block rounded-full bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                            Get Yours Today
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- <chat :recu_id="2" :envoi_id="1"></chat> -->
    </div>
</template>
<script>
import chat from "@/components/layout/chat.vue"

export default{
    components: {
        chat
    },
    data() {
        return {
            envoi_id: "",
            recu_id: ""
        }
    }

}
</script>