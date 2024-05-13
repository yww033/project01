<section id="header"><!-- navbar-->
    <nav class="navbar bg-gradient fixed-top">
      <div class="container-fluid ">
        <img src="./images/logo.gif" width="65px" />
        <a class="navbar-brand" href="#" style="font-size: 35px; line-height: 20px;margin-left:8%">If Time Tea</a>

        <!-- 漢堡選單 -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <a href="#" id="searchIcon"><i class="fas fa-search" "></i></a> <!-- 放大鏡搜尋圖示 -->
          <a href=" #" id="searchIcon"><i class="fa-solid fa-user"></i></a> <!-- 登入圖示 -->
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
                  <i class="fas fa-star" style="color: 	#FFDC35;"></i>母親節<span style="color: #FF8000;">淡果香</span>特惠組<i class="fas fa-star" style="color: 	#FFDC35;"></i>

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
              <a class="nav-link " href="#" role="button">
                果乾茶
              </a>

            </li>
            <li class="nav-item "><!-- 貼心媽咪專區 -->
              <a class="nav-link " href="#" role="button">
                貼心媽咪專區
              </a>

            </li>
            <li class="nav-item "><!-- 會員優惠 -->
              <a class="nav-link " href="#" role="button">
                會員優惠
              </a>

            </li>
            </ul>

          </div>
        </div>
      </div>
    </nav>
  </section>
