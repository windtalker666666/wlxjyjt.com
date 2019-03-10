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
          <h3 class="card-title">师资团队</h3>
        </div>
      </div>
    </div>

    <div class="card-list">
      <div v-for="item in 20" class="card" :key="item.value">
        <img
          src="http://ee.pbcsf.tsinghua.edu.cn/userfiles/upload/course/201808311509312639.jpg"
          class="card-img-top"
          alt="..."
        >
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p
            class="card-text"
          >This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text">
            <small class="text-muted">Last updated 3 mins ago</small>
          </p>
        </div>
      </div>
    </div>
    <button type="button" style="margin:100px auto;width:400px" class="btn btn-primary">还有更多</button>
  </div>
</template>
<style>
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
  margin: 0 auto;
  padding: 80px;
}
.card {
  width: 300px;
  margin: 10px;
}
</style>
