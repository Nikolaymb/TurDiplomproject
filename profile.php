<? session_start(); ?>

<? require_once 'page/includes/htmlhead.php' ?>

<body class="top">
	
<? require_once 'page/includes/navbar.php' ?>
	
			


<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
		  <h2 style="padding-top: 25px;padding-bottom: 10px;" align="center">Ваш профиль</h2>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
				  <img src="/page/img/<?=$_SESSION ['img']?>" alt="" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?=$_SESSION['login']?></h4>
                    
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Ф.И.О</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
					<?=$_SESSION['name']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      pochta@mail.ru
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Телефон</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      +7 900 000 00 00
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Адресс</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     Адресс
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
					<a  class="css-modal-open" href="#prof">Изменить</a>                    </div>
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Ваши</i>Предпочтение</h6>
                      <small>Текст 1</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Текст 2</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Текст 3</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Текст 4</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Текст 5</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              
              </div>



            </div>
          </div>

        </div>
    </div>


<div class="dm-overlay" id="prof">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">
                <a href="#close" class="close">X</a>
                <h3>Ваши данные</h3><br>
			
				<form action="/app/edit_profile.php" method="POST"> 
						<div class="container">
							<input type="text" name="login_f" id="login"  minlength="4" maxlength="30" value="<?=$_SESSION['login']?>" style="display:none"><br>
							<input type="text" name="login" id="login"  minlength="4" maxlength="30" placeholder="Введите логин" required value="<?=$_SESSION['login']?>"><br>
							<input type="text" name="name" id="name" required minlength="4" maxlength="30" placeholder="Введите имя" value="<?=$_SESSION['name']?>"><br>
					
							<input type="password" name="password" id="password" minlength="4" maxlength="30" placeholder="Введите пароль"><br>
							<input type="file" name="img" id="img"   value="<?=$_SESSION['img']?>"><br>

							<button type="submit" name="do_signup" class="registerbtn">Изменить данные</button>
						</div>
					</form>
            </div>
        </div>
    </div>
</div>




	<? require_once 'page/includes/navbarf.php' ?>
	
</body>
</html>