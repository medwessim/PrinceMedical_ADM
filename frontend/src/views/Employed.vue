<template>
    <div class="home">
      <navbar msg="Employed" ></navbar>
      <Employed></Employed>
      
    </div>
  </template>
  
  <script>
  // @ is an alias to /src
  
  import navbar from '@/components/layout/navbar.vue'
  import Employed from '@/components/layout/Employed.vue'

  
  export default {
    name: 'employed',
    components: {
      navbar,
      Employed,
      
      
    }
  }
  </script>