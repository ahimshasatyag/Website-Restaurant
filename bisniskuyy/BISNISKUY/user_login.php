<?php 
	include 'header.php';
 ?>

<style>
	/* FOOTER */
.footer-basic {
  padding:40px 0;
  background-color:#f9f9f9;
  color: #333333;
  box-shadow: 1px 5px 4px 3px ;
}

.footer-basic ul {
  padding:0;
  list-style:none;
  text-align:center;
  font-size:18px;
  line-height:1.6;
  margin-bottom:0;
}

.footer-basic li {
  padding:0 10px;
}

.footer-basic ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer-basic ul a:hover {
  opacity:1;
}

.footer-basic .social {
  text-align:center;
  padding-bottom:25px;
}

.footer-basic .social > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #ccc;
  margin:0 8px;
  color:inherit;
  opacity:0.75;
}

.footer-basic .social > a:hover {
  opacity:0.9;
}

.footer-basic .copyright {
  margin-top:15px;
  text-align:center;
  font-size:13px;
  color:#000;
  margin-bottom:0;
}
.container_form{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
	height: 35em;
	border-radius: 4px;
	box-shadow: 0px 0px 10px rgba(0,0,0,.5);
}
label {
	font-size: 11pt;
}
.btn_login{
	display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 10px;
  width: 50%;
  background-color: #f5760f;
  color: white;
  padding: 7px;
  box-shadow: 8px;
}
.btn_login:hover {
	background-color: #f28a5e;
}
.btn_daftar{
	display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 10px;
  width: 50%;
  font-size: 12px;
  text-align: center;
}

</style>

<div class="container_form" style="padding-bottom: 250px; background-color:#f1f1f1">
		<img src="image/about/LogoBisniskuy.png" alt="LogoBISNISKUY" style="height: 35%; width: 30%; display: block; margin-left: auto; margin-right: auto;">
		<h2 style="text-align: center;"><b>Login</b></h2><br>

<form action="proses/login.php" method="POST">
		<div class="form-group">
			<label for="exampleInputEmail1">username</label>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username" >
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Password</label>
			<input type="password" class="form-control" id="exampleInputEmail1" placeholder="Password" name="pass" >
		</div><br>
		<button type="submit" class="btn_login">Login</button>
		<a href="register.php" class="btn_daftar">Belum punya akun?Daftar</a>
	</form>
</div>


 <?php 
	include 'footer.php';
 ?>