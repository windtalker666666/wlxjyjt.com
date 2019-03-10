<template>
  <div id="app">
    <Navbar style="margin:20px 0;background:#fff"/>
    <router-view/>
    <Footer/>
  </div>
</template>
<script>
// @ is an alias to /src
import Navbar from "@/components/Navbar.vue";
import Footer from "@/components/Footer.vue";
export default {
  name: "app",
  components: {
    Navbar,
    Footer
  }
};
</script>
<style lang="scss">
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  background: #f9f9f9;
}
</style>
