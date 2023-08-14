<? 	session_start(); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Авторизация</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="assets/css/style.css">

  
</head>

<body>
  <a href='#' class='modal-btn'>Авторизация</a>

<div class='modal'>
	<div class='close'>
		<span></span>
		<span></span>
	</div>
	<div class='options'>
		<a href='#' class='active'>Log In</a>
		<a href='#'>Sign Up</a>
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
							<input type='submit' value='Log In' />
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
							<label for='Semail'>Имя</label>
							<input type='text' name="name" id="name" required minlength="4" maxlength="30" placeholder="Введите почту" />
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
							<input type='submit' value='Sign Up' />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class='overlay'></div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
