<template>
    <div class="home">
      <addUser></addUser>
      <!-- <navbar msg="Dashboard"></navbar> -->
      
  
    </div>
  </template>
  
  <script>
  // @ is an alias to /src

  import addUser from '@/components/addUser.vue'
  
  
  export default {
    name: 'add',
    components: {
      addUser,
      
      
      
      
    }
  }
  </script>