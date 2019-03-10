<template>
  <div id="footer" class="container-fluid">
    <div class="content">
      <div class="row">
        <div v-for="item in footerItem" :key="item.title" class="col-3">
          <div>{{item.title}}</div>
          <div
            class="small"
            v-for="sub_item
           in item.sub_title"
            :key="sub_item.value"
          >{{sub_item}}</div>
        </div>
      </div>
    </div>
    <div class="tips">版权所有©深圳太邦科技网络有限公司 | All Rights Reserved</div>
  </div>
</template>

<script>
export default {
  name: "Footer",
  props: {},
  data() {
    return {
      footerItem: [
        { title: "关于我们", sub_title: ["领导寄语"] },
        { title: "公开课程", sub_title: ["领导寄语"] },
        { title: "定制课程", sub_title: ["领导寄语"] },
        {
          title: "联系我们",
          sub_title: [
            "地址：北京市海淀区成府路43号",
            "邮编：100083",
            "传真：＋86-10-62799039",
            "邮箱：ee@pbcsf.tsinghua.edu.cn",
            "电话：＋86-10-62799555"
          ]
        }
      ]
    };
  }
};
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
#footer {
  color: #fff;
  height: 500px;
  background: #000;
}
.content {
  padding: 60px;
  width: 80%;
  height: 80%;
  margin: 100px auto 0;
  border-bottom: 1px solid #9a273f;
}
.tips {
  font-size: 14px;
  padding: 20px;
  text-align: center;
}
.small {
  margin: 10px 0;
}
</style>