<template>
  <div class="home">
    <Home></Home>
    <!-- <navbar msg="Dashboard"></navbar> -->
    

  </div>
</template>

<script>
// @ is an alias to /src
import Home from "@/components/Home.vue"
import navbar from '@/components/layout/navbar.vue'


export default {
  name: 'HomeView',
  components: {
    Home,
    navbar,
    
    
    
  }
}
</script>