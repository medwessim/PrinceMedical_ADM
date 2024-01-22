<template>
  <div class="home">
    <navbar msg="Dashboard"></navbar>
    
  </div>
</template>

<script>
// @ is an alias to /src

import navbar from '@/components/layout/navbar.vue'


export default {
  name: 'HomeView',
  components: {
    navbar,
    
    
  }
}
</script>