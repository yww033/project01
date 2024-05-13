<!doctype html>
<html lang="en">

<head>
  <!-- 引入網頁標頭模組 -->
  <?php require_once("header.php"); ?>
</head>

<body>
  <section id="header"><!-- navbar-->
    <nav class="navbar bg-gradient fixed-top">
      <div class="container-fluid ">
        <img src="./images/logo.gif" width="65px" />
        <a class="navbar-brand" href="#" style="font-size: 35px; line-height: 20px;margin-left:7%">If Time Tea</a>

        <!-- 漢堡選單 -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <a href="#" id="searchIcon"><i class="fas fa-search" "></i></a> <!-- 放大鏡搜尋圖示 -->
          <a href=" #" id=""><i class="fa-solid fa-cart-shopping" "></i></a> <!-- 購物車圖示 -->
          <a href=" https://www.facebook.com/your-facebook-page"><i class="fab fa-facebook"></i></a> <!-- 臉書圖示 -->
          <a href="https://www.instagram.com/your-instagram-page"><i class="fab fa-instagram" "></i></a> <!-- IG 圖示 -->

          <i class=" fa-solid fa-barcode"></i><!-- 漢堡選單 -->
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">茹果季茶</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <form class="d-flex mt-3" role="search" id="searchForm" style="display: none;"> <!-- 搜尋表單初始狀態隱藏 -->

            <input class="form-control  " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success " type="submit">Search</button>


          </form>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home"></i> <i class="fab fa-facebook"></i></a>
              </li> -->
              <li class="nav-item">

              </li>
              <li class="nav-item dropdown"><!-- 禮盒組 -->
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-star" style="color: 	#FFDC35;"></i>精緻<span style="color: #FF8000;">淡果香</span>禮盒組<i class="fas fa-star" style="color: 	#FFDC35;"></i>

                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">花果盛宴</a></li>
                  <li><a class="dropdown-item" href="#">果香漫饗</a></li>
                  <li><a class="dropdown-item" href="#">漢方養生</a></li>
                  <li><a class="dropdown-item" href="#">清新果醋</a></li>
                  <li>

                </ul>
              </li>
              <li class="nav-item dropdown"><!-- 所有商品 -->
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  所有商品
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">果乾茶</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">台灣茶</a></li>
                  <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">食用果乾</a></li>
              <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">手工果醬</a></li>
            </ul>
            </li>
            <li class="nav-item "><!-- 果乾茶 -->
              <a class="nav-link " href="#" role="button" >
                果乾茶
              </a>

            </li>
            <li class="nav-item "><!-- 貼心媽咪專區 -->
              <a class="nav-link " href="#" role="button" >
                貼心媽咪專區
              </a>

            </li>
            <li class="nav-item "><!-- 會員優惠 -->
              <a class="nav-link " href="#" role="button" >
                會員優惠
              </a>

            </li>
            </ul>

          </div>
        </div>
      </div>
    </nav>
  </section>

  <script>
    // 獲取放大鏡搜尋圖示和搜尋表單元素
    const searchIcon = document.getElementById('searchIcon');
    const searchForm = document.getElementById('searchForm');

    // 點擊放大鏡搜尋圖示時顯示搜尋表單
    searchIcon.addEventListener('click', function() {
      searchForm.style.display = 'block';
    });
  </script>

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
          <a href="..."><img src="./images/10001.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/10003.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/10002.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/10004.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/10005.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/10008.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/10007.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/10008.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/10009.webp" /></a>
        </div>
        <div class="swiper-slide">
          <a href="..."><img src="./images/10010.webp" /></a>
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
    <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel" data-bs-interval="7000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="https://game.granbluefantasy.jp/"><img src="./images/03.png" class="d-block w-100" alt="...">
            <img src="./images/03-1.png" class="hover-image" alt="Hover Image">
        </div>
        <div class="carousel-item">
          <img src="./images/04.png" class="d-block w-100" alt="...">
          <img src="./images/03-1.png" class="hover-image" alt="Hover Image">
        </div>
        <div class="carousel-item">
          <img src="./images/05.png" class="d-block w-100" alt="...">
          <img src="./images/03-1.png" class="hover-image" alt="Hover Image"></a>
        </div>
      </div>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="https://game.granbluefantasy.jp/"><img src="./images/06.png" class="d-block w-100" alt="...">
            <img src="./images/03-1.png" class="hover-image" alt="Hover Image">
        </div>
        <div class="carousel-item">
          <img src="./images/07.png" class="d-block w-100" alt="...">
          <img src="./images/03-1.png" class="hover-image d-block w-100" alt="Hover Image" style="margin-right:5%; ">
        </div>
        <!-- <div class="carousel-item">
          <img src="./images/04.png" class="d-block w-100" alt="...">
          <img src="./images/03-1.png" class="hover-image" alt="Hover Image"></a>
        </div> -->
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
          <img src="https://images.unsplash.com/photo-1579748138140-ce9ef2c32db1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80">
        </div>
        <div class="content">
          <div>
            <h2>聯名相關</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi accusamus molestias quidem iusto.
            </p>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="imgBx">
          <img src="https://images.unsplash.com/photo-1579639782539-15cc6c0be63f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80">
        </div>
        <div class="content">
          <div>
            <h2>展期活動</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi accusamus molestias quidem iusto.
            </p>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="imgBx">
          <img src="./images/logo.gif">
        </div>
        <div class="content">
          <div>
            <h2>聯絡我們</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi accusamus molestias quidem iusto.
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
