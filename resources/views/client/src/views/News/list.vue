<template>
  <div class="about">
    <div class="container-fluid">
      <div
        style="width:100%;height:400px;overflow:hidden;margin:50px 0"
        class="card bg-dark text-white"
      >
        <img
          src="http://ee.pbcsf.tsinghua.edu.cn/userfiles/upload/banner/201810271047083031.jpg"
          class="card-img"
          alt="..."
        >
        <div class="card-img-overlay">
          <h3 class="card-title">新闻中心</h3>
        </div>
      </div>
    </div>
    <a v-for="(item,index) in 20" :key="item.value" href="#">
      <div @click="toDetail(index)" class="card mb-3" style="width: 70%;margin:0 auto">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img
              src="http://ee.pbcsf.tsinghua.edu.cn/userfiles/upload/course/201808311509312639.jpg"
              class="card-img"
              alt="..."
            >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 href="##" class="card-title">Card title</h5>
              <p
                class="card-text"
              >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </a>
    <button type="button" style="margin:100px auto;width:400px" class="btn btn-light">还有更多</button>
  </div>
</template>
<script>
export default {
  name: "list",
  data() {
    return {};
  },
  methods: {
    toDetail(arg) {
      console.log(arg);
      this.$router.push({ name: "detail", params: { aid: arg } });
    }
  }
};
</script>

<style scoped>
.about {
  display: flex;
  flex-wrap: wrap;
  background: #fff;
}
h3 {
  margin: 20px;
}
.card-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.card {
  width: 300px;
  margin: 10px;
}
a {
  text-decoration: none;
  color: #2c3e50;
}
</style>
