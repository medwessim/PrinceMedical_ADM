<template>
    <div class="home">
      <navbar msg="Employed" ></navbar>
      <Employed></Employed>
      <Footer></Footer>
    </div>
  </template>
  
  <script>
  // @ is an alias to /src
  
  import navbar from '@/components/layout/navbar.vue'
  import Employed from '@/components/layout/Employed.vue'
  import Footer from '@/components/layout/Footer.vue'
  
  export default {
    name: 'employed',
    components: {
      navbar,
      Employed,
      Footer
      
    }
  }
  </script>