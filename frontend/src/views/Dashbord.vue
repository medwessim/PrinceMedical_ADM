<template>
    <div class="home">
      <navbar msg="Dashboard" add="addUser"></navbar>
      <news></news>

    </div>
  </template>
  
  <script>
  // @ is an alias to /src
  
  import navbar from '@/components/layout/navbar.vue'
  
  import news from '@/components/layout/New.vue'


  
  
  export default {
    name: 'Dashboard',
    components: {
      navbar,
      
      news
      
      
    }
  }
  </script>