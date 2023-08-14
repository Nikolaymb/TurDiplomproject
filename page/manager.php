<? 
	session_start();
	if($_SESSION['manager'] == false){
		header('Location: /');
	}
	
	require_once __DIR__.'/../app/models/model_manager.php';
	$data = model_manager();


?>


<? require_once 'includes/htmlhead.php' ?>

<body>
	<? require_once 'includes/navbar.php'; ?>		
	<? require_once 'includes/navimg.php'; ?>		
	





 








	<section class="w3l-grids-3 py-5">
    <div class="container py-md-5">

    <nav>
  <ul class="topmenu">
    
    <li><a href="#">Панель-Менеджера</a>
       <ul class="submenu">
  
     <li> <a href="#clients"> Клиенты </a></li><br>
   
    
     <li><a  href="#orders">Заказы</a></a></li><br>

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





</div>
</div>


<section class="w3l-grids-3 py-5" id="orders">
    <div class="container py-md-5">
      <div class="title-content text-left mb-lg-5 mb-4">
        <h3 class="hny-title">Заказы</h3>
      </div>

<table class="table">
	<thead>
		<tr>
			<th>Ф.И.О</th>
			<th>Дата</th>
			<th>Время</th>
			<th>Телефон</th>
			<th>Тур</th>
			<th>Отель</th>
			<th>Удалить</th>
			<th>Изменить</th>
		</tr>
	</thead>
	<tbody>
  <? for($i = 0; $i < count($data['orders']); $i++){ ?> 
		<tr>
			<td><? echo $data['orders'][$i]['name']; ?></td>
      <td><? echo $data['orders'][$i]['data']; ?></td>
			<td><? echo $data['orders'][$i]['time']; ?></td>
			<td>+<? echo $data['orders'][$i]['phone']; ?></td>
			<td><? echo $data['orders'][$i]['tur']; ?></td>
			<td><? echo $data['orders'][$i]['hotel']; ?></td>

			<td><a href="#delete-or<?=$i.'000'?>" class="">Удалить</a></td>
			<td><a href="#rt-or<?=$i.'000'?>" class="">Изменить</a></td>

		</tr>
		<? } ?>
	</tbody>
</table>
</div>
  </section>

  <? for($i = 0; $i < count($data['orders']); $i++){ ?> 
  <div class="dm-overlay" id="delete-or<?=$i.'000'?>">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <a href="#close" class="close">X</a>
                <h3>Удалить заказ</h3>
				<form action="/app/manager.php" method="POST">
			<br>
			<label>Вы уверены, что хотите удалить данные? </label>


      <input type="text" name="type" value="dl_or" style="display:none">
			<input type="text" style="display:none"  class="contact-input" name="id_or"  placeholder="Введите id" required value="<? echo $data['orders'][$i]['id']; ?>"><br>
						

			<br>

			
			<br>
     	<button type="submit" class="btn btn-style btn-secondary">Удалить</button>

		</form>
            </div>
        </div>
    </div>
</div>
<? } ?>



  <? for($i = 0; $i < count($data['orders']); $i++){ ?> 
	<div class="dm-overlay" id="rt-or<?=$i.'000'?>">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <a href="#close" class="close">Х</a>
                <h3>Изменить заказ</h3>
                
				<form action="/app/manager.php" method="POST">
					<div class='field'>
						<label for='Lemail'>Ф.И.О</label><br>
						<input type="text" name="name_f" id="login"  minlength="4" maxlength="30" value="<?=$data['orders'][$i]['name']?>" style="display:none">

						<input type="text" name="name" id="login"  minlength="4" maxlength="30" placeholder="Введите логин" required value="<?=$data['orders'][$i]['name']?>">
				
				
						<label for='Lpass'>Дата</label><br>
						<input type="date" name="data" id="data" required minlength="4" maxlength="30" placeholder="Введите имя" value="<?=$data['orders'][$i]['data']?>">
					</div>
					<div class='field'>
						<label for='Lpass'>Время</label><br>
						<input type="time" name="time" id="time" required minlength="4" maxlength="30" placeholder="Введите имя" value="<?=$data['orders'][$i]['time']?>">
					</div>
					<div class='field'>
						<label for='Lemail'>Телефон</label><br>
						<input type="text" name="phone" id="phone"  minlength="4" maxlength="12" placeholder="Введите телефон" required value="<?=$data['orders'][$i]['phone']?>">
					</div>
					<div class='field'>
						<label for='Lemail'>Тур</label><br>
						<input type="text" name="tur" id="tur"  minlength="4" maxlength="30" placeholder="Введите логин" required value="<?=$data['orders'][$i]['tur']?>">
					</div>
					<div class='field'>
						<label for='Lemail'>Отель</label><br>
						<input type="text" name="hotel" id="hotel"  minlength="4" maxlength="30" placeholder="Введите логин" required value="<?=$data['orders'][$i]['hotel']?>">
					</div>
					<div class='field'>
						<label for='Lemail'>Описание</label><br>
						<input type="text" name="desc" id="desc"  minlength="4" maxlength="30" placeholder="Введите логин" required value="<?=$data['orders'][$i]['desc']?>">
					</div>

					<div class='field'>
					<button type="submit" name="do_signup" class="css-modal-open">Изменить данные</button>
        

        </div>
				</form>
			</div>
			  
			 
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

  <? for($i = 1; $i < count($data['clients']); $i++){ ?> 

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
                
				<form action="/app/manager.php" method="POST">
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
        

        </div>
				</form>
			</div>
			  
			 
            </div>
        </div>
    </div>
</div>










<style type="text/css">
.table {
	width: 100%;
	border: none;
	margin-bottom: 20px;
}
.table thead th {
	padding: 10px;
	font-weight: 500;
	font-size: 16px;
	line-height: 20px;
	text-align: left;
	color: #444441;
	border-top: 2px solid #716561;
	border-bottom: 2px solid #716561;
}
.table tbody td {
	padding: 10px;
	font-size: 14px;
	line-height: 20px;
	color: #444441;
	border-top: 1px solid #716561;
}
</style>





<? } ?>
















			



















		
	
  
	<div class='overlay'></div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <script  src="/assets/js/index.js"></script>
		
 	<? require_once 'includes/navbarf.php' ?>

</body>
</html>