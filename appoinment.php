<? 	session_start(); ?>
<?
require_once __DIR__.'/app/models/model_tur.php';
$tur = !empty($_GET['search'])?model_tur($_GET['search']):model_tur();

?>
<?
require_once __DIR__.'/app/models/model_hotel.php';
$hotel = !empty($_GET['search'])?model_hotel($_GET['search']):model_hotel()
?>


<? require_once 'page/includes/htmlhead.php' ?>
<body id="top">
<? require_once 'page/includes/navbar.php' ?>
	


<section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">Пункт назначения </h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="/">Гланая</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Пункт назначения</li>
        </ul>
      </div>
    </div>
  </section>


  <section class="w3l-contact" id="contact">
  <div class="contact-infubd py-5">
    <div class="container py-lg-3">
      <div class="contact-grids row">
        <div class="col-lg-6 contact-left">
          <div class="partners">
            <div class="cont-details">
              <h5>Заказ</h5>
              <p class="mt-3 mb-4">Привет всем, мы доступны 24/7 по факсу, электронной почте или по телефону. Напишите нам, чтобы мы могли поговорить
об этом дальше.</p>
            </div>
            <div class="hours">
              <h6 class="mt-4">Email:</h6>
              <p> <a href="mailto:mail@traversal.com">
                mail@proj.com</a></p>
              <h6 class="mt-4">Посетите нас:</h6>
              <p> Чебоксары</p>
              <h6 class="mt-4">Контакт:</h6>
              <p class="margin-top"><a href="#">+7-900-000-00-00</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-lg-0 mt-5 contact-right">
        <form id="#" class="appoinment-form" method="POST" action="/app/order.php" class="signin-form"  >
                    <div class="row">
                  

                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="data" id="data" type="date" class="form-control"   value="2022-07-22"  min="2005-01-01" >
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="time" id="time"  type="time" class="form-control"  min="05:00" max="23:00">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Ф.И.О" value="<?=$_SESSION['name']?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="text" class="form-control" value="7"   placeholder="Номер телефона">
								<small>Format: +79000000000</small>
							</div>
                        </div>




					            	<div class="col-lg-6">
                            <div class="form-group">
                            <select  class="select-css" name="tur" id="tur">
                            <option value="" hidden disabled selected>Выбрать тур</option>
                            <? for($i = 0; $i < count($tur['tur']); $i++){ ?> 

                             <option value="<? echo $tur['tur'][$i]['name']; ?>" ><? echo $tur['tur'][$i]['name']; ?></option>

                             <? } ?>
			
			

                            </select>
                          </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                            <select  class="select-css" name="hotel" id="hotel">
                            <option value="" hidden disabled selected>Выбрать отель</option>
                            <? if(!empty($hotel['hotel'])){
				for($i = 0; $i < count($hotel['hotel']); $i++){ ?> 

                             <option value="<? echo $hotel['hotel'][$i]['name']; ?>" ><? echo $hotel['hotel'][$i]['name']; ?></option>

                             <? } ?>
			<? }else{ ?>
			<? } ?>

                            </select>
                          </div>
                        </div>



                      
                    </div>
					<input type="text" name="type" value="add" style="display:none"><br>
                    <div class="form-group-2 mb-4">
                        <textarea name="desc" id="desc" class="form-control" rows="6" placeholder="Ваше сообщение"></textarea>
               
               
                      </div>

                      <div class="text-right">
              <button class="btn btn-style btn-primary">Заказ</button>
            </div>


                </form>
        </div>

      </div>
      
    </div>
</section>








        
    

<? require_once 'page/includes/navbarf.php' ?>

  </body>
  </html>