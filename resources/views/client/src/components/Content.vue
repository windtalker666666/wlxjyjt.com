<template>
  <div class="container-fluid">
    <h4>
      <p>新闻中心</p>
    </h4>
    <div style="height:600px" class="row">
      <div class="col-5">
        <div class="left">
          <div class="left_content">
            <h2>First featurette heading. It'll blow your mind.</h2>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
          </div>
        </div>
      </div>
      <div class="col-7">
        <div class="right">
          <img
            src="http://ee.pbcsf.tsinghua.edu.cn/userfiles/upload/news/201901220951062268.jpg"
            alt
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Content",
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
.left,
.right {
  height: 100%;
  padding: 50px 100px;
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  align-items: center;
}
.right img {
  width: 100%;
  height: 500px;
}
</style>
