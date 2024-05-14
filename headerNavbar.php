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
            <?php
              require_once('Connections/conn_db.php');
              $SQLstr = "
                SELECT *
                FROM expstore.pyclass_2
                group by list1
                ORDER BY key1
              ";
              $sql = $link->query($SQLstr);
              while ($row = $sql->fetch()) {
                if($row['list1']=="禮盒組"){
                  $show = '<i class="fas fa-star" style="color: 	#FFDC35;"></i>母親節<span style="color: #FF8000;">淡果香</span>特惠組<i class="fas fa-star" style="color: 	#FFDC35;"></i>';
                }else{
                  $show = $row['list1'];
                }

                echo '
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  '.$show.'
                  </a>
                  <ul class="dropdown-menu">';

                  $SQLstr2 = "
                    SELECT *
                    FROM expstore.pyclass_2
                    where list1 = '".$row['list1']."'
                    group by list2
                    ORDER BY key1
                  ";
                  // echo $SQLstr2;
                  $sql2 = $link->query($SQLstr2);
                  while ($row2 = $sql2->fetch()) {
                    echo '<li><a class="dropdown-item" href="#">'.$row2['list2'].'</a></li>';
                  }
                echo '
                </ul>
              </li>
              ';
              }
            ?>

          <li class="nav-item "><!-- 會員優惠 -->
            <a class="nav-link " href="#" role="button">會員優惠</a>
          </li>

        </div>
      </div>
    </div>
  </nav>
</section>
