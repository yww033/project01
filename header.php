<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="website_p01.css"> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Lugrasimo&family=Noto+Sans+TC:wght@100..900&family=Pacifico&display=swap');

body {
  font-family: "Kalam", cursive;
  font-weight: 700;
  font-style: normal;
}

.navbar-toggler {
  color: #6d6767;
  /* 修改漢堡選單的顏色 */
  font-size: 150%;
  /* 修改漢堡選單的大小 */
  padding: 5px;
  /* 修改漢堡選單的內邊距 */
}

#content02 .carousel-item {
  padding-top: 50px;
}


.carousel-item:hover .hover-image {
  display: block;
}

.hover-image {
  display: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  /* width: 50px; */
  max-width: 100%;
  /* 使用 max-width 限制图片最大宽度 */
  height: auto;

}

.navbar-toggler a:hover i {
  color: #302f2f;
  /* 更改悬停时的颜色 */
}

.navbar-toggler a i {
  color: #9b9090;
  /* 更改悬停时的颜色 */
}

.form-control {
  display: block;
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border-radius: 0.375rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.offcanvas,
.offcanvas-xxl,
.offcanvas-xl,
.offcanvas-lg,
.offcanvas-md,
.offcanvas-sm {
  --bs-offcanvas-zindex: 1045;
  --bs-offcanvas-width: 250px;
  --bs-offcanvas-height: 30vh;
  --bs-offcanvas-padding-x: 1rem;
  --bs-offcanvas-padding-y: 1rem;
  --bs-offcanvas-color: ;
  --bs-offcanvas-bg: #fff;
  --bs-offcanvas-border-width: 10px;
  --bs-offcanvas-border-color: var(--bs-border-color-translucent);
  --bs-offcanvas-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
}

/* body,
#content002 {
  position: relative;
  height: 100%;
}

#content002 {
  background: #eee;
  font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
  font-size: 14px;
  color: #000;
  margin: 0;
  padding: 0;
} */

.swiper {
  width: 100%;
  padding-top: 50px;
  padding-bottom: 50px;
  user-select: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}

.swiper-slide {
  background-position: center;
  background-size: cover;
  width: 300px;
  height: 300px;
}

.swiper-slide img {
  display: block;
  width: 100%;
}

/* footer */
/* * {
  margin: 0;
  padding: 0;
} */
/* body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
} */
.container {
  position: relative;
  width: 1160px;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  transform-style: preserve-3d;
  perspective: 500px;
  margin: auto;
}

.container .box {
  position: relative;
  width: 275px;
  height: 275px;
  background: #ffffff;
  transition: 0.5s;
  transform-style: preserve-3d;
  overflow: hidden;
  margin-right: 15px;
  margin-top: 45px;
}

.container:hover .box {
  transform: rotateY(25deg);
}

.container .box:hover~.box {
  transform: rotateY(-25deg);
}

.container .box:hover {
  transform: rotateY(0deg) scale(1.25);
  z-index: 1;
  box-shadow: 0 25px 40px rgba(146, 136, 136, 0.5);
  /*设置盒子的阴影效果 */
}

.container .box .imgBx {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.container .box .imgBx:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(180deg, rgb(227, 183, 233), #cebebe);
  z-index: 1;
  opacity: 0;
  transition: 0.5s;
  mix-blend-mode: multiply;
}

.container .box:hover .imgBx:before {
  opacity: 1;
}

.container .box .imgBx img {
  position: absolute;
  /*将图片设为绝对定位 */
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  /*指定图片如何适应容器尺寸，保持宽高比并填充容器 */
}

.container .box .content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  display: flex;
  padding: 20px;
  align-items: flex-end;
  box-sizing: border-box;
}

.container .box .content h2 {
  color: #fff;
  transition: 0.5s;
  text-transform: uppercase;
  /*标题文本转换为大写 */
  margin-bottom: 5px;
  font-size: 20px;
  transform: translateY(200px);
  transition-delay: 0.3s;
}

.container .box:hover .content h2 {
  transform: translateY(0px);
}

.container .box .content p {
  color: #fff;
  /*文字颜色为白色 */
  transition: 0.5s;
  font-size: 14px;
  transform: translateY(200px);
  /*将段落向下平移200像素，初始状态隐藏*/
  transition-delay: 0.4s;
}

.container .box:hover .content p {
  transform: translateY(0px);
}

/* 123 */

.parallax {
  position: relative;
  /* 将容器设为相对定位，用于后续绝对定位元素的参考 */
  /* 设置容器的宽度为视口宽度的100%，高度为视口宽度的50% */
  width: 100vw;
  height: 50vw;

  transform-origin: bottom center;
  /* 设置变换的原点在底部中心 */
  will-change: transform;
  transform:
    /*应用视差效果的变换，包括沿垂直方向的平移和缩放 */
    translate3d(0, calc(var(--pct) * 35%), 0) scale3d(calc(var(--pct)/2 + 1), calc(var(--pct)/2 + 1), 1);

  .parallax div {
    /*定义视差效果的各个图层，具有以下属性： */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;


    will-change: transform;
    transform-origin: bottom center;
    transform: translate3d(0, 0, 0);

    &.p1 {
      transform: translate3d(0, calc(var(--pct) * -20.0%), 0);
    }

    &.p2 {
      transform: translate3d(0, calc(var(--pct) * -17.5%), 0);
    }

    &.p3 {
      transform: translate3d(0, calc(var(--pct) * -15.0%), 0);
    }

    &.p4 {
      transform: translate3d(0, calc(var(--pct) * -12.5%), 0);
    }

    &.p5 {
      transform: translate3d(0, calc(var(--pct) * -10.0%), 0);
    }

    &.p6 {
      transform: translate3d(0, calc(var(--pct) * -7.5%), 0);
    }

    &.p7 {
      transform: translate3d(0, calc(var(--pct) * -5.0%), 0);
    }

    &.p8 {
      transform: translate3d(0, calc(var(--pct) * -2.5%), 0);
    }
  }
}






html {
  box-sizing: border-box;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

html,
body {
  margin: 0;
  background-color: #ffffff;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-family: "Kalam", cursive;
  font-weight: 700;
  font-style: normal;
}


header {
  overflow: hidden;
  box-shadow: inset 0 -4em 4em -4em #ffffff;
}

main {
  position: relative;
  z-index: 1;
  min-height: 100vh;
  border-top: 1px solid lighten(#ffffff, 5%);
  padding: 2em 1em 4em;
  max-width: 580px;
  margin: 0 auto;
}

/* @import url('https://fonts.googleapis.com/css?family=Open+Sans|Oswald:200'); */

.logo {
  fill: rgba(#fff, 0.3);
  width: .72em;
  vertical-align: top;
  margin: 0.15em 0.15em 0.15em 0;
}

.separator {
  fill: rgba(#fff, 0.1);
  height: 2em;
  vertical-align: top;
  margin: 1em 0 0;
  width: 100%;
}

h1 {
  margin: 0;
  /* font-family: Oswald; */
  font-size: 2em;
  line-height: 1;
  font-weight: 200;
  color: rgba(#fff, 0.7);
}

h2 {
  margin: 2em 0 0;
  /* font-family: Oswald; */
  font-size: 1.6em;
  line-height: 1;
  font-weight: 200;
  color: rgba(#fff, 0.7);
}

p,
a {
  /* font-family: Open Sans; */
  color: rgba(#fff, 0.7);
}


.no-iframe {
  position: absolute;
  top: 2em;
  right: 1em;
  display: none;
  transition: 200ms;
  z-index: 1;
  font-size: 0.7em;
  padding: 0.5em;
  text-decoration: none;
  background-color: #ffffff;
  opacity: 0.5;

  &:hover {
    opacity: 0.7;
  }
}
* {
  margin : 0;
  padding: 0;
  box-sizing : border-box;
  font-familly : "Poppins", sans-serif;
}
.bodya {
  display : flex;
  align-items : center;
  justify-content : center;
  background-color: #FFF;
  min-height : 800px;
}

.container {
  font-size: 14px !important;
  position : relative;
  width : max;
  display : flex;
  align-items : center;
  justify-content : center;
  flex-warp : warp;
  flex-direction: row;
  /* padding : 30px; */
  margin-top: 5%;


}

.container .card {
  position: relative;
  max-width : 300px;
  height : 215px;
  background-color : #fff;
  margin : 30px 10px;
  padding : 20px 15px;

  display : flex;
  flex-direction : column;
  box-shadow : 0 5px 20px rgba(0,0,0,0.5);
  transition : 0.3s ease-in-out;
  border-radius : 15px;
}
.container .card:hover {
  height : 320px;
}


.container .card .image {
  position : relative;
  width : 260px;
  height : 260px;
  border-radius : 15px;
  top : -40%;
  left: 8px;
  box-shadow : 0 5px 20px rgba(0,0,0,0.2);
  z-index : 1;
}

.container .card .image img {
  max-width : 100%;
  border-radius : 15px;
}

.container .card .content {
  position : relative;
  top : -140px;
  padding : 10px 15px;
  color : #111;
  text-align : center;

  visibility : hidden;
  opacity : 0;
  transition : 0.3s ease-in-out;

}

.container .card:hover .content {
   margin-top : 30px;
   visibility : visible;
   opacity : 1;
   transition-delay: 0.2s;

}
</style>
