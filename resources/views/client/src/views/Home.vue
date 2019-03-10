<template>
  <div class="home">
    <HelloWorld/>
    <Showbar/>
    <Content/>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from "@/components/HelloWorld.vue";
import Showbar from "@/components/Showbar.vue";
import Content from "@/components/Content.vue";

export default {
  name: "home",
  components: {
    HelloWorld,
    Showbar,
    Content
  }
};
</script>
