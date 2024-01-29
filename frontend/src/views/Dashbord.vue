<template>
    <div class="home">
      <navbar msg="Dashboard" add="addUser"></navbar>
      <dashbord></dashbord>

    </div>
  </template>
  
  <script>
  // @ is an alias to /src
  
  import navbar from '@/components/layout/navbar.vue'
  import dashbord from '@/components/dashbord.vue'

  
  
  export default {
    name: 'Dashboard',
    components: {
      navbar,
      dashbord
      
      
    }
  }
  </script>