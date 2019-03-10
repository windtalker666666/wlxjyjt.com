<template>
  <div class="container-fluid">
    <h4>
      <p>师资队伍</p>
    </h4>
    <div class="row">
      <div class="col" v-for="item in 3" :key="item">
        <div class="box">
          <div class="avatar"></div>
          <div class="box_header">
            <h3>Heading</h3>
          </div>
          <div
            class="box_conten"
          >Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</div>
        </div>
      </div>
    </div>
    <hr class="featurette-divider">
  </div>
</template>

<script>
export default {
  name: "Showbar",
  props: {},
  data() {
    return {};
  }
};
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
h4 {
  color: #9a273f;
  font-weight: bold;
  padding: 50px 100px;
}
h4 p {
  height: 25px;
  border-left: 5px solid #9a273f;
  padding-left: 10px;
  line-height: 25px;
}
.box {
  min-height: 300px;
  padding: 100px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.box .avatar {
  width: 100px;
  height: 100px;
  margin: 10px 0;
  border-radius: 50%;
  background: #5a5a5a;
}
.box .box_header {
  width: 100%;
  margin: 10px 0;
  text-align: center;
}
</style>
