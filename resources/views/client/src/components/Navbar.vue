<template>
  <div class="container-fluid">
    <img src="http://ee.pbcsf.tsinghua.edu.cn/web/images/base/header_logo.png" alt>
    <nav style="background:#fff" class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item" v-for="item in navItems" :key="item.value">
            <a class="nav-link" href="#" @click.prevent="lintToPage(item.link)">{{item.title}}</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" aria-label="Search">
          <button class="btn btn-primary" type="submit">搜索</button>
        </form>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  name: "Navbar",
  props: {},
  data() {
    return {
      navItems: [
        { title: "首页", link: "home" },
        { title: "新闻中心", link: "news" },
        { title: "课程介绍", link: "course" },
        { title: "合作项目", link: "project" },
        { title: "师资团队", link: "team" },
        { title: "关于我们", link: "about" }
      ]
    };
  },
  methods: {
    lintToPage(link) {
      this.$router.push({ name: link });
    }
  }
};
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
img {
  margin: 10px 0;
}
.nav-item {
  margin: 0 10px;
}
</style>
