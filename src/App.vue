<template>
  <div id="app">
      <hello></hello>
  </div>
</template>
<script>
import hello from './components/Hello'
 export default{
  name:'app',
  components:{
    'hello':hello
  }
 }
</script>
<style>
div{background: #000;}
</style>
