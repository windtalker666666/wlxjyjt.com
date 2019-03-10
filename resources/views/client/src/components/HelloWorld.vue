<template>
  <div class="hello">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-100"
            src="http://ee.pbcsf.tsinghua.edu.cn/userfiles/upload/banner/201712201616345775.jpg"
            alt="First slide"
          >
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="http://ee.pbcsf.tsinghua.edu.cn/userfiles/upload/banner/201810271047083031.jpg"
            alt="Second slide"
          >
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="http://ee.pbcsf.tsinghua.edu.cn/userfiles/upload/banner/201712201616345775.jpg"
            alt="Third slide"
          >
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  name: "HelloWorld",
  props: {}
};
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
</style>
