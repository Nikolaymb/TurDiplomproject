



<? if(empty($_SESSION['login'])){ ?>

	
 	<!--header-->
<header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <h1><a class="navbar-brand mr-lg-5" href="/">
            Logotype
          </a></h1>
        
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/maptur.php">Туры</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="/hotel.php">Отели</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="/appoinment.php">Заказ</a>
            </li> 
       
           
    
           

          </ul>
        </div>
        <div class="d-lg-block d-none">
          <a href="#" class="modal-btn">Вход</a>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>

  <div class='modal'>
	<div class='close'>
		<span></span>
		<span></span>
	</div>
	<div class='options'>
		<a href='#' class='active'>Вход</a>
		<a href='#'>Регистрация</a>
	</div>
	<div class='wrapper'>
		<div class='content'>
			<div class='inner'>
				<div class='side'>
					<form action="/app/auth.php" method="POST">
						<p>Уже зарегистрировался?</p>
						<div class='field'>
							<label for='Lemail'>Login</label>
							<input type="text" name="login" id="login" required minlength="4" maxlength="30" placeholder="Введите логин" />
						</div>
						<div class='field'>
							<label for='Lpass'>Password</label>
							<input type="password" name="password" id="password" required minlength="4" maxlength="30" placeholder="Введите пароль" />
						</div>
						<div class='field'>
							<input type='submit' value='Вход' />
						</div>
					</form>
				</div>
				<div class='side'>
					<form action="/app/register.php" method="POST" >
						<p>Новенький здесь?</p>
						<div class='field'>
							<label for='Sname'>Login</label>
							<input type='text' name="login" id="login"  minlength="4" maxlength="30" placeholder="Введите логин" required />
						</div>
						<div class='field'>
							<label for='Semail'>Ф.И.О</label>
							<input type='text' name="name" id="name" required minlength="4" maxlength="30" placeholder="Введите Ф.И.О" />
						</div>
						<div class='field'>
							<label for='Spass'>Пароль</label>
							<input type='password' name="password" id="password" required minlength="4" maxlength="30" placeholder="Введите пароль"/>
						</div>
						<div class='field'>
							<label for='Spass2'>Аватар</label>
						<input type="file" name="img" id="img" required minlength="4" maxlength="100" >
						</div>
						<div class='field'>
							<input type='submit' value='Регистрация' />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class='overlay'></div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <script  src="./assets/js/index.js"></script>



<!--  окно Вход  -->

<? }else{ ?>


	<header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <h1><a class="navbar-brand mr-lg-5" href="/">
        Logotype
          </a></h1>
        
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/maptur.php">Туры</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="/hotel.php">Отели</a>
            </li> 

            <li class="nav-item">
              <a class="nav-link" href="/appoinment.php">Заказ</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="/profile.php">Профиль</a>
            </li> 


            <li class="nav-item">
			<? echo $_SESSION['admin']?'<a class="nav-link" href="/page/admin.php">Админ - панель</a>':''?>
            </li>
            <li class="nav-item">
			<? echo $_SESSION['manager']?'<a class="nav-link" href="/page/manager.php">Панель - Менеджера</a>':''?>
            </li>
           

          </ul>
        </div>
        <div class="d-lg-block d-none">
          <a href="/app/logout.php" class="btn btn-style btn-secondary">Выход</a>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>












 
	


<? } ?>

