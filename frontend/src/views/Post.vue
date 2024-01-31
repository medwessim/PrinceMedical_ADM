<template>
    <div class="home">
      <navbar msg="Post" ></navbar>
      <PostTable></PostTable>
    </div>
  </template>
  
  <script>
  // @ is an alias to /src
  
  import navbar from '@/components/layout/navbar.vue'
  import PostTable from '@/components/layout/PostTable.vue'
  
  
  export default {
    name: 'Post',
    components: {
      navbar,
      PostTable
      
    }
  }
  </script>