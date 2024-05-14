<!doctype html>
<html lang="en">

<head>
  <!-- 引入網頁標頭模組 -->
  <?php require_once("header.php"); ?>
  <title>If Time Tea</title>
</head>

<body>
  <!-- 引入網頁標頭模組 -->
  <?php require_once("headerNavbar.php"); ?>


  <!-- <script>
    // 獲取放大鏡搜尋圖示和搜尋表單元素
    const searchIcon = document.getElementById('searchIcon');
    const searchForm = document.getElementById('searchForm');

    // 點擊放大鏡搜尋圖示時顯示搜尋表單
    searchIcon.addEventListener('click', function() {
      searchForm.style.display = 'block';
    });
  </script> -->

  <section id="content01"><!--輪播區 -->
    <div class="container-fliud">
      <div class="row">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="8000">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="https://game.granbluefantasy.jp/"><img src="images/03.gif" class="d-block w-100" alt="廣告輪播測試01"></a>
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <a href="https://game.granbluefantasy.jp/"><img src="images/04.gif" class="d-block w-100" alt="廣告輪播測試02"></a>
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <a href="https://game.granbluefantasy.jp/"><img src="images/05.gif" class="d-block w-100" alt="廣告輪播測試03"></a>
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    </div>

  </section>
  <section id="content001"><!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="..."><img src="./images/10001.png" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/禮盒組/花果盛宴.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/禮盒組/果香漫饗.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/禮盒組/漢方養生.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/禮盒組/好孕媽咪禮盒組.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/禮盒組/無添加食用果乾禮盒組.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/禮盒組/清新果醋.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/禮盒組/蘋蘋甜蜜.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/禮盒組/幸福旺來.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/禮盒組/澄心滿滿.webp" /></a>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
  </section>
  <section id="content02">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="https://game.granbluefantasy.jp/"><img src="./images/006.png" class="d-block w-100" alt="...">
            <img src="./images/006-1.png" class="hover-image" alt="Hover Image">
        </div>
        <div class="carousel-item">
          <img src="./images/007.png" class="d-block w-100" alt="...">
          <img src="./images/006-1.png" class="hover-image d-block w-100" alt="Hover Image" style="margin-right:5%; ">
        </div>
        <!-- <div class="carousel-item">
          <img src="./images/04.png" class="d-block w-100" alt="...">
          <img src="./images/03-1.png" class="hover-image" alt="Hover Image"></a>
        </div> -->
      </div>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel" data-bs-interval="7000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="https://game.granbluefantasy.jp/"><img src="./images/05.png" class="d-block w-100" alt="...">
            <img src="./images/03-2.png" class="hover-image" alt="Hover Image">
        </div>
        <div class="carousel-item">
          <img src="./images/04.png" class="d-block w-100" alt="...">
          <img src="./images/03-2.png" class="hover-image" alt="Hover Image">
        </div>
        <div class="carousel-item">
          <img src="./images/03.png" class="d-block w-100" alt="...">
          <img src="./images/03-2.png" class="hover-image" alt="Hover Image"></a>
        </div>
      </div>
    </div>


    <!-- <img src="./images/03.png" class="img-fluid" alt="..." style="margin-bottom: 10px;">
    <img src="./images/04.png" class="img-fluid" alt="..." style="margin-bottom: 10px;">
    <img src="./images/03.png" class="img-fluid" alt="..." style="margin-bottom: 10px;"> -->
  </section>
  <section id="footer">
    <div class="container">
      <div class="box">
        <div class="imgBx">
          <img src="./images/footer/FB.webp">
        </div>
        <div class="content">
          <div>
            <h2>關於我們</h2>
            <p>品牌故事 About us <br>
              實體據點 Store-info <br>
              會員優惠 VIP <br>
              媒體推薦 Recommend <br>
              部落格首頁 Blog <br>
            </p>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="imgBx">
          <img src="./images/footer/IG.jpg">
        </div>
        <div class="content">
          <div>
            <h2>檔期活動</h2>
            <p>文創聯名 signed jointly<br>
              常見問題 FAQ <br>
              如何購買 How to buy <br>
              售後服務 After-sales service <br>
              條款與細則 Terms & Conditions <br>
            </p>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="imgBx">
          <img src="./images/footer/訂閱.jpg">
        </div>
        <div class="content">
          <div>
            <h2>聯絡我們</h2>
            <p>果祭文創有限公司 / 統編 12345678 <br>
              客服電話｜(04) 1234-5678<br>
              客服信箱｜ tw@yww.com<br>
              服務時間｜一至五 9:00~12:00 / 13:00~18:00
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="frame">
    <a href="#" class="btn">
      <i class="fab fa-facebook-f" style="color: #3b5998;"></i>
    </a>
    <a href="#" class="btn">
      <i class="fab fa-twitter" style="color: #00acee;"></i>
    </a>
    <a href="#" class="btn">
      <i class="fab fa-dribbble" style="color: #ea4c89;"></i>
    </a>
    <a href="#" class="btn">
      <i class="fab fa-linkedin-in" style="color:#0e76a8;"></i>
    </a>
    <a href="#" class="btn">
      <i class="fab fa-get-pocket" style="color:#ee4056;"></i>
    </a>
    <a href="#" class="btn">
      <i class="far fa-envelope"></i>
    </a>
  </div>

</body>

</html>
