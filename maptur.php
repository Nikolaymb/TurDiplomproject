<? 

	session_start(); 
	require_once __DIR__.'/app/models/model_attraction.php';
	require_once __DIR__.'/app/models/model_tur.php';

	$data = !empty($_GET['search'])?model_attraction($_GET['search']):model_attraction();
	$data = !empty($_GET['search'])?model_tur($_GET['search']):model_tur()
?>

<? require_once 'page/includes/htmlhead.php' ?>


<body>
<? require_once 'page/includes/navbar.php' ?>
  <!-- //header -->
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">Пункт назначения </h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="/">Гланая</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Пункт назначения</li>

       
          <? 
			if($_SESSION['admin'] == true){
				echo '<li class="active" ><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> <a  href="#tur-add">Добавить тур</a></li>';
				echo '<li class="active" ><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> <a  href="#attractions-add">Добавить достопримечательность</a></li>';
			} 
		?>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->

  <section class="w3l-grids-3 py-5">
    <div class="container py-md-5">
      <div class="title-content text-left mb-lg-5 mb-4">
        <h3 class="hny-title">Все туры</h3>
        <form action="/app/search.php" method="POST" class="booking-form">
                  <div class="row book-form">
                    <div class="form-input col-md-4 mt-md-0 mt-3">

                    <input type="text" name="search_pr" placeholder="Поиск..." >

                    </div>
                  
                    <div class="form-input col-md-4 mt-md-0 mt-3">
         
         <input type=number name="search_pr" step="500" placeholder="Укажите цену"  min="0" max="200000" value="" >
         </div>
                 <div class="form-input col-md-4 mt-md-0 mt-3">
                      <select  class="select-css" name="search_pr" id="country">
                          <option value="" hidden disabled selected>Выбрать страну</option>
                             <option value="Россия" >Россия</option>
                      </select>
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

  <? if(!empty($data['tur'])){
				for($i = 0; $i < count($data['tur']); $i++){ ?> 

        <div class="col-lg-6 subject-card mt-lg-0 mt-4">
          <div class="subject-card-header p-4">
		
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="/page/img/<? echo $data['tur'][$i]['img']; ?>" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4><? echo $data['tur'][$i]['name']; ?></h4>
             
                  <div class="dst-btm">
                    <h6 class=""> Стоимость </h6>
                    <span> <? echo $data['tur'][$i]['cost']; ?></span>
                  </div>
                  <a  class="css-modal-open" href="#info<?=$i.'000'?>">Описание</a>
                  <a href="/appoinment.php" class="btn btn-style btn-secondary">Забронировать</a>
                </div>
              </div>
           
          </div>
        </div>



        
        <div class="dmap-overlay" id="info<?=$i.'000'?>">
    <div class="dmap-table">
        <div class="dmap-cell">
        <h2 style="background-color: #d9d9d9;">Достопримечательности города</h2>
            <div class="dmap-modal">
                <a href="#close" class="close">X</a><br>
      
                <? for($a = 0; $a < count($data['tur'][$i]['attraction']); $a++){  ?>



               

				<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]"><br>
	      	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
	               <div class="doctor-img">
	               		<img src="/page/img/<? echo $data['tur'][$i]['attraction'][$a]['img']; ?>" alt="image" class="img-fluid w-100">
	               </div>
	            </div>
                <div class="content mt-3">
                	<h4 class=""><? echo $data['tur'][$i]['attraction'][$a]['name']; ?></h4>
                  <a  class="css-modal-open" href="#attractions<? echo $data['tur'][$i]['attraction'][$a]['id']; ?>">Описание</a>
                </div> 
	      	</div>
      	</div>


      

<? } ?>

          
</div>
        </div>
    </div>
</div>


                <? for($a = 0; $a < count($data['tur'][$i]['attraction']); $a++){  ?>



                  <div class="dmapp-overlay" id="attractions<? echo $data['tur'][$i]['attraction'][$a]['id']; ?>">
    <div class="dmapp-table">
        <div class="dmapp-cell">
            <div class="dmapp-modal">
                <a href="#close" class="close">X</a>

				<div class="" data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
	      	<div class="">
		        <div class="">
	               <div class="txtli">
                 <h4 class=""><? echo $data['tur'][$i]['attraction'][$a]['name']; ?></h4>

	    <? echo $data['tur'][$i]['attraction'][$a]['map']; ?>
	               </div>
	            </div>
                <div class="content mt-3">
                	<p> <? echo $data['tur'][$i]['attraction'][$a]['desc']; ?></p>
               
                </div> 
	      	</div>
      	</div>

        </div>
        </div>
    </div>
</div>
      

<? } ?>

          




		
      



	    
              <? } ?>
			<? }else{ ?>
				<div class="prod-none">Данный тур не найден!</div>
			<? } ?>
		</div>
    </div>
  </section>



 
               

 
                 
   
				





      















<div class="dm-overlay" id="tur-add">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <a href="#close" class="close">X</a>
                <form action="/app/admin.php" method="POST"> 
				
						<input type="text" name="type" value="add_cm" style="display:none">
						<label for='Lemail'>Тур</label><br>
						<input type="text" class="contact-input" name="name" minlength="1" placeholder="Введите город" required value=""><br>
						<label for='Lemail'>Описание</label><br>
							<input type="text" class="contact-input"  name="desc" id="name" placeholder="Введите описание" required value=""><br>
              <label for='Lemail'>Добавить изображение</label><br>
							<input type="file" name="img" id="img" minlength="1" placeholder="Название изображение" required value=""><br>
						<button type="submit" class="registerbtn">Добавить город</button>
					
				</form>
              
                
            </div>
        </div>
    </div>
</div>


<div class="dm-overlay" id="attractions-add">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <a href="#close" class="close">X</a>
				<form action="/app/admin.php" method="POST"> 
    
				<input type="text" name="type" value="add_prod" style="display:none"><br>
        <label for='Lemail'>Тур</label><br>
						<input type="text" class="contact-input"   name="id_cm" placeholder="Введите ID тура" required value=""><br>
            <label for='Lemail'>Достопримечательность</label><br>		
            <input type="text" class="contact-input"   name="id_prod" placeholder="Введите ID достопримечательности" required value=""><br>
						<button type="submit" class="registerbtn">Добавить  достопримечательность</button>
					
				</form>
              
                
            </div>
        </div>
    </div>
</div>









 
  <? require_once 'page/includes/navbarf.php' ?>





  
</body>

</html>