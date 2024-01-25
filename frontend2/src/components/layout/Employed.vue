<template>
  <div>
    <header class="bg-gray-50 shadow ">
      <div class="mx-auto max-w-7xl  py-8 sm:px-6 ">

        <div class="flex items-center  gap-4">
          <h1 class="text-3xl font-bold tracking-tight text-gray-900">Employed </h1>
          <div class="justify-end">
            <label class="sr-only" for="search"> Search </label>

            <input class="h-10 w-full rounded-full border-none bg-white pe-10 ps-4 text-sm shadow-sm sm:w-56" id="search"
              type="search" placeholder="Search website..." />
          </div>
          <button @click="addUserPage()"
            class="inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
            ADD Employed
        </button>

        </div>
      </div>
    </header>
    <ul role="list" class="mx-auto max-w-7xl divide-y divide-gray-100">
      <li v-for="user in users" :key="user.id" class="flex justify-between gap-x-6 py-5">
        <div class="flex min-w-0 gap-x-4">
          <img class="h-12 w-12 flex-none rounded-full bg-gray-50" :src="user.photo" alt="" />
          <div class="min-w-0 flex-auto">
            <p class="text-sm font-semibold leading-6 text-gray-900">{{ user.name }}</p>
            <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ user.userName }}</p>
          </div>
        </div>
        <div class="inline-flex rounded-lg border border-gray-100 bg-gray-100 p-1">
          <button
            class="inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative"
            @click="updateUser(user.id)">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="h-4 w-4">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>

            Edit
          </button>

          <button
            class="inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative"
            @click="detailUser(user.id)">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="h-4 w-4">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>

            View
          </button>

          <button
            class="inline-flex items-center gap-2 rounded-md bg-white px-4 py-2 text-sm text-blue-500 shadow-sm focus:relative"
            @click="deletePage(user.id)">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="h-4 w-4">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
            </svg>

            Delete
          </button>
        </div>
      </li>
    </ul>
    <!-- add employed section  -->
    <div class="relative z-10" role="dialog" v-if="add == true">

      <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>

      <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">

          <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
            <div
              class="relative flex items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
              <button type="button"
                class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8"
                @click="close()">
                <span class="sr-only">Close</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>

              <form action="" @submit.prevent="updateUser"
                class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                <p class="text-center text-lg font-medium">Ajouter votre compte</p>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                  <label for="Name"
                    class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                    <input type="text" v-bind="name"
                      class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-4 pe-12"
                      placeholder="Name" />

                    <span
                      class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                      Name
                    </span>

                  </label>
                  <label for="LastName"
                    class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                    <input type="text" v-bind="lastName"
                      class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-4 pe-12"
                      placeholder="LastName" />

                    <span
                      class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                      LastName
                    </span>

                  </label>

                </div>
                <div>
                  <label for="Username"
                    class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                    <input type="text" v-bind="userName"
                      class=" w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-4 pe-12"
                      placeholder="Username" />

                    <span
                      class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                      Username
                    </span>
                  </label>
                </div>
                <div>
                  <label for="password" class="sr-only">Password</label>
                  <div class="relative">
                    <input type="password" v-bind="password"
                      class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                      placeholder="Enter password" />

                    <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                  <label for="Name"
                    class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                    <input type="text"
                      class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-4 pe-12"
                      placeholder="Name" />

                    <span
                      class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                      Name
                    </span>

                  </label>
                  <label for="LastName"
                    class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                    <input type="text" v-bind="num_tlf"
                      class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-4 pe-12"
                      placeholder="LastName" />

                    <span
                      class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                      numero telphone
                    </span>

                  </label>
                </div>

                <button type="submit"
                  class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                  ajouter
                </button>

                <p class="text-center text-sm text-gray-500">
                  No account?
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- detail section  -->

    <div class="relative z-10" role="dialog" v-if="detail == true">


      <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>

      <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">

          <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
            <div
              class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
              <button type="button"
                class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8"
                @click="close()">
                <span class="sr-only">Close</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>

              <div class="grid w-full grid-cols-1 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8">
                <div class="aspect-h-3 aspect-w-2 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                  <img src="https://tailwindui.com/img/ecommerce-images/product-quick-preview-02-detail.jpg"
                    alt="Two each of gray, white, and black shirts arranged on table." class="object-cover object-center">
                </div>
                <div class="sm:col-span-8 lg:col-span-7">
                  <h2 class="text-2xl font-bold text-gray-900 sm:pr-12 ">Basic Tee 6-Pack</h2>
                  <div class="py-8  flow-root rounded-lg border border-gray-100 shadow-sm ">
                    <dl class="-my-3 divide-y divide-gray-100 text-sm">
                      <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                        <dt class="font-medium text-gray-900">Title</dt>
                        <dd class="text-gray-700 sm:col-span-2">Mr</dd>
                      </div>

                      <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                        <dt class="font-medium text-gray-900">Name</dt>
                        <dd class="text-gray-700 sm:col-span-2 ">John Frusciante</dd>
                      </div>

                      <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                        <dt class="font-medium text-gray-900">Occupation</dt>
                        <dd class="text-gray-700 sm:col-span-2">Guitarist</dd>
                      </div>

                      <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                        <dt class="font-medium text-gray-900">Salary</dt>
                        <dd class="text-gray-700 sm:col-span-2">$1,000,000+</dd>
                      </div>

                      <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                        <dt class="font-medium text-gray-900">Bio</dt>
                        <dd class="text-gray-700 sm:col-span-2">
                          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et facilis debitis explicabo
                          doloremque impedit nesciunt dolorem facere, dolor quasi veritatis quia fugit aperiam
                          aspernatur neque molestiae labore aliquam soluta architecto?
                        </dd>
                      </div>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- update section -->
    <div class="relative z-10" role="dialog" v-if="edit == true">

      <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>

      <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">

          <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
            <div
              class="relative flex items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
              <button type="button"
                class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8"
                @click="close()">
                <span class="sr-only">Close</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>

              <form action="" @submit.prevent="AddUser"
                class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                <p class="text-center text-lg font-medium">Ajouter votre compte</p>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                  <label for="Name"
                    class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                    <input type="text" v-bind="name"
                      class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-4 pe-12"
                      placeholder="Name" />

                    <span
                      class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                      Name
                    </span>

                  </label>
                  <label for="LastName"
                    class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                    <input type="text" v-bind="lastName"
                      class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-4 pe-12"
                      placeholder="LastName" />

                    <span
                      class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                      LastName
                    </span>

                  </label>

                </div>
                <div>
                  <label for="Username"
                    class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                    <input type="text" v-bind="userName"
                      class=" w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-4 pe-12"
                      placeholder="Username" />

                    <span
                      class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                      Username
                    </span>
                  </label>
                </div>
                <div>
                  <label for="password" class="sr-only">Password</label>
                  <div class="relative">
                    <input type="password" v-bind="password"
                      class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                      placeholder="Enter password" />

                    <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                  <label for="Name"
                    class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                    <input type="text"
                      class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-4 pe-12"
                      placeholder="Name" />

                    <span
                      class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                      Name
                    </span>

                  </label>
                  <label for="LastName"
                    class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                    <input type="text" v-bind="num_tlf"
                      class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-4 pe-12"
                      placeholder="LastName" />

                    <span
                      class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                      numero telphone
                    </span>

                  </label>
                </div>

                <button type="submit"
                  class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                  ajouter
                </button>

                <p class="text-center text-sm text-gray-500">
                  No account?
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- delete section  -->
    <div class="relative z-10" role="dialog" v-if="deleteU == true">

      <div class="fixed inset-0 hidden  bg-opacity-75 transition-opacity md:block"></div>

      <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">

          <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-xl">
            <div class="relative flex items-center overflow-hidden  red-shadow">
              <button type="button"
                class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8"
                @click="close()">
                <span class="sr-only">Close</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>

              <div class="rounded-lg bg-white p-8 shadow-2xl">
                <h2 class="text-lg font-bold">Are you sure you want to do that?</h2>

                <p class="mt-2 text-sm text-gray-500">
                  Doing that could have cause some issues elsewhere, are you 100% sure it's OK?
                </p>

                <div class="mt-4 flex gap-2">
                  <button type="button" class="rounded bg-green-50 px-4 py-2 text-sm font-medium text-green-600">
                    Yes, I'm sure
                  </button>

                  <button type="button" class="rounded bg-gray-50 px-4 py-2 text-sm font-medium text-gray-600">
                    No, go back
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
import Detail from '@/components/layout/Detail.vue'
import UserService from "../../source/Users.js"

export default {
  created() {
    this.getUsers();


  },
  data() {
    return {
      users: [],
      name: "",
      lastName: "",
      userName: "",
      photo: "",
      detail: false,
      add: false,
      edit: false,
      deleteU: false,
      idUser: null
    }
  },
  components: {
    Detail
  },
  methods: {
    //         refresh(){
    //             this.title="";
    //             this.description="";
    //             this.idTodo=null;
    //             this.edit=false;
    //         },
    //         ShowUpdate(id){
    //             this.idTodo=id;
    //             this.edit=true;
    //             todosService.getTodoById(id).then((res)=>{
    //                 this.title=res.data.data.title;
    //                 this.description=res.data.data.description;
    //             })
    //         },


    // AddUser() {
    //   UserService.AddUser(
    //     {
    //       name: this.name,
    //       lastName: this.lastName,
    //       userName: this.userName,
    //       password: this.password,
    //       num_tlf: this.num_tlf,
    //       isAdmin:1,
    //     }
    //   ).then((res) => {
    //     this.getUsers();
    //     this.lastName = "";
    //     this.userName = "";
    //     this.password = "";
    //     this.num_tlf = "";

    //   })
    // },
    //         UpdateTodo(){
    //             todosService.UpdateTodo(
    //                 this.idTodo,
    //                 {
    //                     titre:this.title,
    //                     description:this.description
    //                 }
    //             ).then((res)=>{
    //                      this.getTodos();
    //                      this.refresh();
    //             })
    //         },
    getUsers() {
      UserService.getUsers().then((res) => {
        this.users = res.data.data;
      })
    },
    //         deletetodo(id){
    //             todosService.deleteTodo(id).then((res)=>{
    //                  this.getTodos();
    //             })
    //         }
    detailUser(id) {
      this.detail = true;
    },
    updateUser(id) {
      this.edit = true;
    },
    deletePage(id) {
      this.deleteU = true;
    },
    addUserPage(id) {
      this.add = true;
    },
    close() {
      this.detail = false;
      this.edit = false;
      this.deleteU = false;
      this.add = false;
    }
  }

}
</script> 
<style>
.red-shadow {
  position: relative;
  display: flex;
  align-items: center;
  overflow: hidden;
  box-shadow: 0 30px 50px rgba(255, 0, 0, 0.5);
  /* Red shadow with 50% opacity */
}
</style>

