<template>
    <div class="home">
      <navbar msg="Dashboard" add="addUser"></navbar>
    </div>
  </template>
  
  <script>
  // @ is an alias to /src
  
  import navbar from '@/components/layout/navbar.vue'
  
  
  export default {
    name: 'Dashboard',
    components: {
      navbar,
      
      
    }
  }
  </script>