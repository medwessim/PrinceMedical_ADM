<template>
    <div class="home">
      <navbar msg="Group" ></navbar>
      <GroupTable></GroupTable>
    </div>
  </template>
  
  <script>
  // @ is an alias to /src
  
  import navbar from '@/components/layout/navbar.vue'
  import GroupTable from '@/components/layout/GroupTable.vue'
  
  
  export default {
    name: 'Group',
    components: {
      navbar,
      GroupTable
      
    }
  }
  </script>