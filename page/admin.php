<? 
	session_start();
	if($_SESSION['admin'] == false){
		header('Location: /');
	}
	
	require_once __DIR__.'/../app/models/model_admin.php';
	$data = model_admin();


?>


<? require_once 'includes/htmlhead.php' ?>

<body>
	<? require_once 'includes/navbar.php'; ?>		
	<? require_once 'includes/navimg.php'; ?>		
	





 








	<section class="w3l-grids-3 py-5">
    <div class="container py-md-5">

    <nav>
  <ul class="topmenu">
    
    <li><a href="#">Админ-Панель</a>
       <ul class="submenu">
       <li><a  href="#hotel">Отели</a></li>
    <li> <a href="#uslugi"> Достопримечательности </a></li>
     <li> <a href="#clients"> Клиенты </a></li><br>
     <li><a  href="#hotel-add">Добавить отель</a></li><br>
     <li><a  href="#turhl-add">Добавить отель<br>к туру</a></a></li><br>
     <li><a  href="#attractions-add"> Добавить достопримечательность  </a></li><br>
     <li><a  href="#turattractions-add">Добавить достопримечательность<br>к туру</a></a></li><br>

    
     <li><a  href="#tur-add">Добавить тур</a></a></li><br>
     <li><a  href="#tur-del">Удалить тур</a></a></li><br>

     <li><a  href="#photo-add">Добавить фотo</a></li><br>
    </ul>
    </li>
   
  </ul>
</nav>

<div class="dm-overlay" id="tur-del">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <a href="#close" class="close">X</a>
                <form action="/app/admin.php" method="POST"> 
				
						<input type="text" name="type" value="dl_tur" style="display:none">
						<label for='Lemail'>Тур</label><br>
						<input type="text" class="contact-input" name="id_cm" minlength="1" placeholder="Введите id" required value=""><br>
						
						<button type="submit" class="registerbtn">Удалить тур</button>
					
				</form>
              
                
            </div>
        </div>
    </div>
</div>



<div class="dm-overlay" id="tur-add">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <a href="#close" class="close">X</a>
                <form action="/app/admin.php" method="POST"> 
				
						<input type="text" name="type" value="add_cm" style="display:none">
						<label for='Lemail'>Тур</label><br>
						<input type="text" class="contact-input" name="name" minlength="1" placeholder="Введите город" required value=""><br>
            <label for='Lemail'>Страна</label><br>
						<input type="text" class="contact-input" name="country" minlength="1" placeholder="Введите страну" required value=""><br>

            <label for='Lemail'>Описание</label><br>
							<input type="text" class="contact-input"  name="desc" id="name" placeholder="Введите описание" required value=""><br>
              <label for='Lemail'>Стоимость</label><br>
							<input type="text" class="contact-input"  name="cost" id="cost" placeholder="Введите описание" required value=""><br>
              <label for='Lemail'>Добавить изображение</label><br>
							<input type="file" name="img" id="img" minlength="1" placeholder="Название изображение" required value=""><br>
						<button type="submit" class="registerbtn">Добавить тур</button>
					
				</form>
              
                
            </div>
        </div>
    </div>
</div>



<div class="dm-overlay" id="turattractions-add">
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


<div class="dm-overlay" id="turhl-add">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <a href="#close" class="close">X</a>
				<form action="/app/admin.php" method="POST"> 
    
				<input type="text" name="type" value="add_hl" style="display:none"><br>
        <label for='Lemail'>Тур</label><br>
						<input type="text" class="contact-input"   name="id_cm" placeholder="Введите ID тура" required value=""><br>
            <label for='Lemail'>Отель</label><br>		
            <input type="text" class="contact-input"   name="id_prod" placeholder="Введите ID отелей" required value=""><br>
						<button type="submit" class="registerbtn">Добавить  отель к туру</button>
					
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
                <h3>Добавить достопримечательность</h3>
					<form action="/app/admin.php" method="POST"  > 
						<div class="container">
						<label for='Lemail'>Название</label><br>
							<input type="text" name="name" id="login"  minlength="1" placeholder="Введите название" required value=""><br>
							<label for='Lemail'>Описание</label><br>
							<input type="text" name="desc" id="name" placeholder="Введите описание" required value=""><br>
							<label for='Lemail'>Цена </label><br>
							<input type="text" name="price" id="name" minlength="1" placeholder="Введите цену" required value=""><br>
              <label for='Lemail'>3D панорама</label><br>
							<input type="text" name="map" id="name" minlength="1" placeholder="Введите панораму" required value=""><br>
              <label for='Lemail'>Добавить изображение</label><br>
							<input type="file" name="img" id="img" minlength="1" placeholder="Название изображение" required value=""><br>
							<input type="text" name="type" value="add" style="display:none"><br>
							<button type="submit" name="do_signup" class="css-modal-open">Добавить достопримечательность</button>
						</div>
					</form>
            </div>
        </div>
    </div>
</div>






<div class="dm-overlay" id="photo-add">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <a href="#close" class="close">X</a>
                <h3>Добавить фотo</h3>
				<form method="post" enctype="multipart/form-data">
			<input type="file" name="img">
			<br>
			<label>Тип загрузки</label>
			<br>
			<select name="file_type">
				<option value="1">Эскиз</option>
				<option value="2">Большое изображение</option>
			</select>
			<br>
			
			<br>
			<input type="submit" value="Загрузить">
		</form>
            </div>
        </div>
    </div>
</div>



<div class="dm-overlay" id="hotel-add">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <a href="#close" class="close">X</a>
                <h3>Добавить Отель</h3>
					<form action="/app/admin.php" method="POST"  > 
						<div class="container">
						<label for='Lemail'>Название</label><br>
							<input type="text" name="name" id="login"  minlength="1" placeholder="Введите название" required value=""><br>
							<label for='Lemail'>Описание</label><br>
							<input type="text" name="desc" id="name" placeholder="Введите описание" required value=""><br>
							<label for='Lemail'>Цена Отеля</label><br>
							<input type="text" name="price" id="name" minlength="1" placeholder="Введите цену" required value=""><br>
              <label for='Lemail'>3D панорама</label><br>
							<input type="text" name="map" id="name" minlength="1" placeholder="Введите панораму" required value=""><br>
              <label for='Lemail'>Добавить изображение</label><br>
							<input type="file" name="img" id="img" minlength="1" placeholder="Название изображение" required value=""><br>
							<input type="text" name="type" value="add_h" style="display:none"><br>
							<button type="submit" name="do_signup" class="css-modal-open">Добавить Отель</button>
						</div>
					</form>
            </div>
        </div>
    </div>
</div>










</div>
</div>











<section class="w3l-grids-3 py-5" id="hotel">
    <div class="container py-md-5">
      <div class="title-content text-left mb-lg-5 mb-4">
        <h3 class="hny-title">Все<br> Отели</h3>
      </div>
      <div class="row bottom-ab-grids">
  <!--/row-grids-->

  <? for($i = 0; $i < count($data['hotel']); $i++){ ?> 

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
				  <a  class="css-modal-open" href="#hotel<?=$i.'000'?>">
                 Изменить
				  </a>
          <a href="#delete-hotel<?=$i.'000'?>" class="btn btn-style btn-secondary">Удалить</a>

                </div>
              </div>
           
          </div>
        </div>
	
		<? } ?>
		</div>
    </div>
  </section>

          <!--//row-grids-->
    

  <? for($i = 0; $i < count($data['hotel']); $i++){ ?> 


    <div class="dm-overlay" id="hotel<?=$i.'000'?>">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <a href="#close" class="close">Х</a>
                <h3>Изменить Отель</h3>
	<form action="/app/admin.php" method="POST" >
						<div class='field'>
							<label for='Lemail'>Название</label><br>
							<input type="text" name="name_f" id="login"  minlength="1" value="<?=$data['hotel'][$i]['name']?>" style="display:none">

							<input type="text"name="name" id="login"  minlength="1" placeholder="Введите название"  required minlength="4" maxlength="30" required value="<?=$data['hotel'][$i]['name']?>">
						</div>
						<div class='field'>
							<label for='Lpass'>Описание</label><br>
							<input type="text" name="desc" id="name" required minlength="1" placeholder="Введите описание" required value="<?=$data['hotel'][$i]['desc']?>">
						</div>

						<div class='field'>
							<label for='Lpass'>Цена</label><br>
							<input type="text" name="price" id="name" required minlength="1" placeholder="Введите цену" required value="<?=$data['hotel'][$i]['price']?>"><br>
						</div>
            <div class='field'>
            <label for='Lemail'>3D панорама</label><br>
							<textarea type="text" name="map" id="name" required minlength="1" placeholder="Введите панораму"  value=""></textarea><br>
						</div>


						<div class='field'>
							<input type="file" name="img" id="name" required minlength="1" placeholder="Название картинки" required value="<?=$data['hotel'][$i]['img']?>"><br>
						</div>

						<div class='field'>
						<button type="submit" name="do_signup" class="css-modal-open">Изменить данные</button>
						</div>
					</form>
				</div>
			
    </div>
      
    </div>
    </div>

  



<? } ?>

<? for($i = 0; $i < count($data['hotel']); $i++){ ?> 

  <div class="dm-overlay" id="delete-hotel<?=$i.'000'?>">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <a href="#close" class="close">X</a>
                <h3>Удалить отель</h3>
				<form action="/app/admin.php" method="POST">
			<br>
			<label>Вы уверены, что хотите удалить данные? </label>


      <input type="text" name="type" value="dl_hl" style="display:none">
			<input type="text" class="contact-input" style="display:none" name="id_hl"  placeholder="Введите id" required value="<? echo $data['hotel'][$i]['id']; ?>"><br>
						

			<br>

			
			<br>
     	<button type="submit" class="btn btn-style btn-secondary">Удалить</button>

		</form>
            </div>
        </div>
    </div>
</div>
<? } ?>























<section class="w3l-grids-3 py-5" id="uslugi">
    <div class="container py-md-5">
      <div class="title-content text-left mb-lg-5 mb-4">
        <h3 class="hny-title">Все<br> Достопримечательности</h3>
      </div>
      <div class="row bottom-ab-grids">
  <!--/row-grids-->

  <? for($i = 0; $i < count($data['attraction']); $i++){ ?> 

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
				  <a  class="css-modal-open" href="#tur<?=$i.'000'?>">
                 Изменить
				  </a>
          <a href="#delete-attraction<?=$i.'000'?>" class="btn btn-style btn-secondary">Удалить</a>

                </div>
              </div>
           
          </div>
        </div>
	
		<? } ?>
		</div>
    </div>
  </section>

  <? for($i = 0; $i < count($data['attraction']); $i++){ ?> 
  <div class="dm-overlay" id="delete-attraction<?=$i.'000'?>">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <a href="#close" class="close">X</a>
                <h3>Удалить достопримечательность</h3>
				<form action="/app/admin.php" method="POST">
			<br>
			<label>Вы уверены, что хотите удалить данные? </label>


      <input type="text" name="type" value="dl_attr" style="display:none">
			<input type="text" style="display:none" class="contact-input" name="id_attr"  placeholder="Введите id" required value="<? echo $data['attraction'][$i]['id']; ?>"><br>
						

			<br>

			
			<br>
     	<button type="submit" class="btn btn-style btn-secondary">Удалить</button>

		</form>
            </div>
        </div>
    </div>
</div>
<? } ?>









    

  <? for($i = 0; $i < count($data['attraction']); $i++){ ?> 


    <div class="dm-overlay" id="tur<?=$i.'000'?>">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <a href="#close" class="close">Х</a>
                <h3>Изменить достопримечательность</h3>
	<form action="/app/admin.php" method="POST" >
						<div class='field'>
							<label for='Lemail'>Название</label><br>
							<input type="text" name="name_f" id="login"  minlength="1" value="<?=$data['attraction'][$i]['name']?>" style="display:none">

							<input type="text"name="name" id="login"  minlength="1" placeholder="Введите название"  required minlength="4" maxlength="30" required value="<?=$data['attraction'][$i]['name']?>">
						</div>
						<div class='field'>
							<label for='Lpass'>Описание</label><br>
							<input type="text" name="desc" id="name" required minlength="1" placeholder="Введите описание" required value="<?=$data['attraction'][$i]['desc']?>">
						</div>

						<div class='field'>
							<label for='Lpass'>Цена</label><br>
							<input type="text" name="price" id="name" required minlength="1" placeholder="Введите цену" required value="<?=$data['attraction'][$i]['price']?>"><br>
						</div>
            <div class='field'>
            <label for='Lemail'>3D панорама</label><br>
							<textarea type="text" name="map" id="name" required minlength="1" placeholder="Введите панораму"  value=""></textarea><br>
						</div>


						<div class='field'>
							<input type="file" name="img" id="name" required minlength="1" placeholder="Название картинки" required value="<?=$data['attraction'][$i]['img']?>"><br>
						</div>

						<div class='field'>
						<button type="submit" name="do_signup" class="css-modal-open">Изменить данные</button>
						</div>
					</form>
				</div>
			
    </div>
      
    </div>
    </div>

  



<? } ?>




<section class="w3l-grids-3 py-5" id="clients">
    <div class="container py-md-5">
      <div class="title-content text-left mb-lg-5 mb-4">
        <h3 class="hny-title">Все клиенты</h3>
      </div>
      <div class="row bottom-ab-grids">
  <!--/row-grids-->

  <? for($i = 0; $i < count($data['clients']); $i++){ ?> 

        <div class="col-lg-6 subject-card mt-lg-0 mt-4">
          <div class="subject-card-header p-4">
		
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img img src="/page/img/<? echo $data['clients'][$i]['img']; ?>" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4><? echo $data['clients'][$i]['login']; ?></h4>
                  <p><? echo $data['clients'][$i]['name']; ?></p>
                  <div class="dst-btm">
				
                  </div>
				  <a  class="css-modal-open" href="#win<?=$i.'000'?>">
                 Изменить
				  </a>
          <a href="#" class="btn btn-style btn-secondary">Удалить</a>

                </div>
              </div>
           
          </div>
        </div>
	
		<? } ?>
		</div>
    </div>
  </section>





  <? for($i = 0; $i < count($data['clients']); $i++){ ?> 




	<div class="dm-overlay" id="win<?=$i.'000'?>">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <a href="#close" class="close">Х</a>
                <h3>Изменить клиента</h3>
                
				<form action="/app/admin.php" method="POST">
					<div class='field'>
						<label for='Lemail'>Логин</label><br>
						<input type="text" name="login_f" id="login"  minlength="4" maxlength="30" value="<?=$data['clients'][$i]['login']?>" style="display:none">

						<input type="text" name="login" id="login"  minlength="4" maxlength="30" placeholder="Введите логин" required value="<?=$data['clients'][$i]['login']?>">
					</div><br>
					<div class='field'>
						<label for='Lpass'>Имя</label><br>
						<input type="text" name="name" id="name" required minlength="4" maxlength="30" placeholder="Введите имя" value="<?=$data['clients'][$i]['name']?>">
					</div>

					<div class='field'>
						<label for='Lpass'>Пароль</label><br>
						<input type="password" name="password" id="password" minlength="4" maxlength="30" placeholder="Введите пароль">
					</div>

					<div class='field'>
					<input type="file" name="img" id="name" minlength="1" placeholder="Название картинки" required value="<?=$data['clients'][$i]['img']?>">
					</div>

					<div class='field'>
					<button type="submit" name="do_signup" class="css-modal-open">Изменить данные</button>
          <a href="#" class="btn btn-style btn-secondary">Удалить</a>

        </div>
				</form>
			</div>
			  
			 
            </div>
        </div>
    </div>
</div>
















<? } ?>
















			



















		
	
  
	<div class='overlay'></div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <script  src="/assets/js/index.js"></script>
		
 	<? require_once 'includes/navbarf.php' ?>

</body>
</html>