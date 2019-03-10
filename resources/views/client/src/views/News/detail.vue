<template>
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

    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <router-link :to="{ path: '/' }">首页</router-link>
          </li>
          <li class="breadcrumb-item">
            <router-link :to="{ path: '/news' }">新闻中心</router-link>
          </li>
          <li class="breadcrumb-item active" aria-current="page">这是第一遍新闻</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col-8">
          <div class="top">
            <h3 class="header">这是第一遍新闻</h3>
            <div class="tags">发布时间：2019-01-22 浏览次数：420</div>
          </div>
          <div class="content">
            <p class="lead">
              1月18日，清华大学五道口金融学院主办的“智慧企业家”高管课程在京正式开班，来自地产、制造、零售、物流和金融等产业的创新企业家们汇聚一堂共同学习。
              2018年10月，中央政治局集体学习人工智能发展现状和趋势，习近平总书记指出发展人工智能是事关我国抓住新一轮科技革命和产业变革机遇的战略问题。清华大学五道口金融学院首创的“智慧企业家”成长计划，站在清华百年科技与产业积淀之上，结合清华大学数据科学研究院和人工智能研究院的科研力量，精选智慧城市、智能制造、智慧生活、金融科技等大数据与人工智能领域的最佳实践与案例，邀请最具创新精神的智慧企业家，共同学习数据思维、分享创新模式、解析产业生态，系统化探索数字融合与AI赋能对企业竞争力的提升，希望培养出一批未来产业的全球引领者，创造出更具想象力和竞争力的超级新物种与商业新型态。
              清华大学人工智能研究院院长张钹院士，作为“智慧企业家”课程的顾问之一，曾经表示“充分发掘人与机器各自的优势，才能实现人工智能在产业落地的最大价值，希望企业家们能推动这一场景的来临。”
            </p>
          </div>
        </div>
        <div style="margin:0 auto" class="col-3">
          <div class="hot">
            <h5>热搜排行</h5>
            <div class="hot-list">
              <div class="list" v-for="(item,index) in 10" :key="item.value">
                <router-link :to="{ path: '/news' }">{{index+1}}.清华大学五道口金融学院主办的“智慧企业家”高管课程</router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "detail",
  data() {
    return {
      id: 0
    };
  },
  methods: {},
  mounted() {
    this.id = this.$route.params.aid;
  }
};
</script>
<style scoped>
.top {
  padding: 30px 0;
  border-bottom: 1px solid #e9ecef;
}
.tags {
  margin: 10px 0;
}
.content {
  margin: 30px 0 0 0;
  text-indent: 40px;
  line-height: 2;
}
a {
  text-decoration: none;
}
.hot {
  border: 1px solid #e9ecef;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding: 30px 20px;
}
.hot-list .list {
  margin: 10px 0;
}
.hot-list a {
  color: #2c3e50;
}

.hot-list a:hover {
  color: #007bff;
}
</style>
