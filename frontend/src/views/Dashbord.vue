<template>
    <div class="home">
      <navbar msg="Dashboard" add="addUser"></navbar>
      <!-- <Footer></Footer> -->

    </div>
  </template>
  
  <script>
  // @ is an alias to /src
  
  import navbar from '@/components/layout/navbar.vue'
  // import Footer from '@/components/layout/Footer.vue'

  
  
  export default {
    name: 'Dashboard',
    components: {
      navbar,
      // Footer
      
      
    }
  }
  </script>