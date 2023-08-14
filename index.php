<? 

	session_start(); 
	require_once 'app/models/model_index.php';
	$data = model_index();
		require_once __DIR__.'/app/models/model_attraction.php';

?>

<? require_once 'page/includes/htmlhead.php' ?>
<body class="animsition">
	
  	<? require_once 'page/includes/navbar.php' ?>


  <!-- //header -->
  <!--banner-slider-->
  <!-- main-slider -->
  <section class="w3l-main-slider" id="home">
    <div class="banner-content">
      <div id="demo-1"
        data-zs-src='["assets/images/banner1.jpg", "assets/images/banner2.jpg","assets/images/banner3.jpg", "assets/images/banner4.jpg"]'
        data-zs-overlay="dots">
        <div class="demo-inner-content">
          <div class="container">
            <div class="banner-infhny">
              <h3>Вам не нужно далеко ходить, чтобы найти то, что имеет значение.</h3>
              <h6 class="mb-3">Откройте для себя свое следующее приключение</h6>
              <div class="flex-wrap search-wthree-field mt-md-5 mt-4">
                <form action="/app/search.php" method="POST" class="booking-form">
                  <div class="row book-form">
                    <div class="form-input col-md-4 mt-md-0 mt-3">

                    <input type="text" name="search_pr" placeholder="Поиск..." required="">

                    </div>
                    <div class="form-input col-md-4 mt-md-0 mt-3">

                      <input type="date" name="" placeholder="Date" required="">
                    </div>
                    <div class="bottom-btn col-md-4 mt-md-0 mt-3">
                      <button class="btn btn-style btn-secondary"><span class="fa fa-search mr-3"
                          aria-hidden="true"></span> Поиск</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /main-slider -->
  <!-- //banner-slider-->


  <section class="w3l-grids-3 py-5">
    <div class="container py-md-5">
      <div class="title-content text-left mb-lg-5 mb-4">
      <h6 class="sub-title">Посетите</h6>
        <h3 class="hny-title">Популярные места</h3>
      </div>
      <div class="row bottom-ab-grids">
  <!--/row-grids-->

  <? if(!empty($data['attraction'])){
				for($i = 0; $i < count($data['attraction']); $i++){ ?> 

        <div class="col-lg-6 subject-card mt-lg-0 mt-4">
          <div class="subject-card-header p-4">
		
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="/page/img/<? echo $data['attraction'][$i]['img']; ?>" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4><? echo $data['attraction'][$i]['name']; ?></h4>
             
                  <div class="dst-btm">
                    <h6 class=""> Стоимость </h6>
                    <span><? echo $data['attraction'][$i]['price']; ?>р.</span>
                  </div>
                  <a  class="css-modal-open" href="#info-map<?=$i.'000'?>">Описание</a>
                </div>
              </div>
           
          </div>
        </div>
	    
              <? } ?>
			<? }else{ ?>
				<div class="prod-none">Данная продукция не найдена!</div>
			<? } ?>
		</div>
    </div>
  </section>


  <? if(!empty($data['attraction'])){
				for($i = 0; $i < count($data['attraction']); $i++){ ?> 

  <div class="dmapp-overlay" id="info-map<?=$i.'000'?>">
    <div class="dmapp-table">
        <div class="dmapp-cell">
            <div class="dmapp-modal">
                <a href="#close" class="close">X</a>
                <div class="txtli" >
                  <h3>  <? echo  $data['attraction'][$i]['name']; ?></h3>
                  <? echo  $data['attraction'][$i]['map']; ?>
                <p><? echo $data['attraction'][$i]['desc']; ?></p><br>
                </div>
            
                
                
            </div>
        </div>
    </div>
</div>

<? } ?>
			<? }else{ ?>
				
			<? } ?>




 
  
  <!--/-->
  <div class="best-rooms py-5">
    <div class="container py-md-5">
        <div class="ban-content-inf row">
            <div class="maghny-gd-1 col-lg-6">
              <div class="maghny-grid">
                <figure class="effect-lily border-radius  m-0">
                    <img class="img-fluid" src="assets/images/g10.jpg" alt="" />
                    <figcaption>
                        <div>
                            <h4>Новость</h4>
                            <p>текст </p>
                        </div>

                    </figcaption>
                </figure>
            </div>
            </div>
            <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                <div class="row">
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/g9.jpg" alt="" />
                                <figcaption>
                                    <div>
                                    <h4>Новость</h4>
                            <p>текст </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/g8.jpg" alt="" />
                                <figcaption>
                                    <div>
                                    <h4>Новость</h4>
                            <p>текст </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6 mt-4">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/g7.jpg" alt="" />
                                <figcaption>
                                    <div>
                                    <h4>Новость</h4>
                            <p>текст </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6 mt-4">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/g6.jpg" alt="" />
                                <figcaption>
                                    <div>
                                   <h4>Новость</h4>
                                   <p>текст </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

		
  
	

	<? require_once 'page/includes/navbarf.php' ?>

</body>
</html>