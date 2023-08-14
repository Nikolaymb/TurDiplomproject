<? 

	session_start(); 
	require_once __DIR__.'/app/models/model_hotel.php';
	

	$data = !empty($_GET['search'])?model_hotel($_GET['search']):model_hotel()

?>
<? require_once 'page/includes/htmlhead.php' ?>

<body>
<? require_once 'page/includes/navbar.php' ?>

<section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">Пункт назначения </h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="/">Гланая</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Отели</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
 
  <section class="w3l-grids-3 py-5">
    <div class="container py-md-5">
      <div class="title-content text-left mb-lg-5 mb-4">
        <h3 class="hny-title">Все Отели</h3>
        <form action="/app/search.php" method="POST" class="booking-form">
                  <div class="row book-form">
                    <div class="form-input col-md-4 mt-md-0 mt-3">

                    <input type="text" name="search_hl" placeholder="Поиск..." >
                    </div>
                    <div class="form-input col-md-4 mt-md-0 mt-3">
         
<input type=number name="search_hl" step="500" placeholder="Укажите цену"  min="0" max="200000" value="" >
</div>


                    <div class="bottom-btn col-md-4 mt-md-0 mt-3">
                      <button class="btn btn-style btn-secondary"><span class="fa fa-search mr-3"
                          aria-hidden="true"></span> Поиск</button>
                    </div>
                  </div>
                </form>
        <? echo !empty($_GET['search'])?" - по запросу \"<i>{$_GET['search']}</i>\"":"" ?>
      </div>
      <div class="row bottom-ab-grids">
  <!--/row-grids-->

  <? if(!empty($data['hotel'])){
				for($i = 0; $i < count($data['hotel']); $i++){ ?> 

        <div class="col-lg-6 subject-card mt-lg-0 mt-4">
          <div class="subject-card-header p-4">
		
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="/page/img/<? echo $data['hotel'][$i]['img']; ?>" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4><? echo $data['hotel'][$i]['name']; ?></h4>
             
                  <div class="dst-btm">
                    <h6 class=""> Стоимость </h6>
                    <span><? echo $data['hotel'][$i]['price']; ?>р.</span>
                  </div>
                  <a  class="css-modal-open" href="#info-map<?=$i.'000'?>">Описание</a>
                </div>
              </div>
           
          </div>
        </div>

      



	    
              <? } ?>
			<? }else{ ?>
				<div class="prod-none">Данный тур не найден!</div>
			<? } ?>
		</div>
    </div>
  </section>


  <? if(!empty($data['hotel'])){
				for($i = 0; $i < count($data['hotel']); $i++){ ?> 

  <div class="dmapp-overlay" id="info-map<?=$i.'000'?>">
    <div class="dmapp-table">
        <div class="dmapp-cell">
        <h2 style="background-color: #d9d9d9;"><? echo $data['hotel'][$i]['name']; ?></h2>

            <div class="dmapp-modal">
                <a href="#close" class="close">X</a>
                <div class="" >
                  <h3>Описание</h3>
                <p><? echo $data['hotel'][$i]['desc']; ?></p><br>
                </div>
                <? echo $data['hotel'][$i]['map']; ?>
                <div class="d-lg-block d-none">
          <a href="/appoinment.php" class="btn btn-style btn-secondary">Забронировать</a>
        </div>
            </div>
        </div>
    </div>
</div>

<? } ?>
			<? }else{ ?>
				
			<? } ?>







 
  <? require_once 'page/includes/navbarf.php' ?>

</body>

</html>