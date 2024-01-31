<template>
  <div id="app">
    <router-view/>
    
  </div>
</template>


<script>
export default {
  mounted(){
    console.log("test");
    window.Echo.channel('public').listen('ChatMessageSent',(e)=>{
      console.log("test test");
      console.log(e);
    })
  }
}
</script>

<style lang="scss">

</style>
