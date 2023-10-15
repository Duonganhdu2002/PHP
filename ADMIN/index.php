<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Login</title>
	<style>
		*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}

body{
	display: flex;
	align-items: center;
	justify-content: flex-start;
	min-height: 100vh;
	background: url(images/b1.png);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}


.Wrapper{
	width: 500px;
	margin-left: 15%;
	background: rgba(220,220,220,0.2);
	border: 2px solid rgba(255,255,255,0.1);
	box-shadow: 0 0 10px rgba(0,0,0,0.2);
	color: #fff;
	border-radius: 10px;
	padding: 80px 40px;
	z-index: 0;
}


.Wrapper h1{
	font-size: 36px;
	text-align: center;
	

}

.Wrapper .inpux-box {
	position: relative;
	width: 100%;
	height: 50px;
	margin: 30px 0;
}

.inpux-box input{
	width: 100%;
	height: 100%;
	background: transparent;
	border: none;
	outline: none;
	border-radius: 30px;
	border: 1px solid #fff;
	font-size: 16px;
	color: #fff;
	padding: 20px;
}

.inpux-box input::placeholder{
	color: #fff;
}

.inpux-box i{
	position: absolute;
	right: 20px;
	top: 50%;
	transform: translateY(-50%);
	font-size: 20px;
}

.Wrapper .btn{
	width: 100%;
	height: 45px;
	border: none;
	outline: none;
	border-radius: 30px;
	box-shadow: 0 0 10px rgba(0,0,0,0.1);
	cursor: pointer;
	font-size: 16px;
	color: #333;
	font-weight: 600;
}

.Wrapper .btn:hover{
	color: #fff;
	border: 1px solid #000;
	background: rgba(220,220,220,0.2);
	transition: 0.4s ease;
}


.Wrapper .register-link{
	font-size: 15px;
	text-align: center;
	margin-top: 20px;
}

.Wrapper .register-link p a{
	color: #fff;
	text-decoration: none;
	font-weight: 600;
}

.Wrapper .register-link p a:hover{
	text-decoration: underline;
}
	</style>
</head>
<body>
	<div class="Wrapper">
		<form action="">
			<h1>Login</h1>
			<div class="inpux-box">
				<input type="text" placeholder="Username" required="">
				<i class='bx bx-user'></i>
			</div>
			<div class="inpux-box">
				<input type="password" placeholder="Password" required="">
				<i class='bx bx-lock-alt'></i>
			</div>
			<button type="submit" class="btn">Sign in</button>
			<div class="register-link">
				<p>Don't have an account ?<a href="#"> Register</a></p>
			</div>
		</form>
	</div>
</body>
</html>