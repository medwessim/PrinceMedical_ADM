<template>
    <div class="home">
      <navbar msg="#" ></navbar>
      <setting></setting>
    </div>
  </template>
  
  <script>
  // @ is an alias to /src
  
  import navbar from '@/components/layout/navbar.vue'
  import setting from '@/components/layout/setting.vue'
  
  
  export default {
    name: 'settings',
    components: {
      navbar,
      setting
      
    }
  }
  </script>