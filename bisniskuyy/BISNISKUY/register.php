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
.container_regist{
	width: 750px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
	height: 35em;
	border-radius: 4px;
	box-shadow: 0px 0px 10px rgba(0,0,0,.5);
}
.btn_regist{
	margin-top: 10px;
  width: 15%;
  background-color: #f5760f;
  color: white;
  padding: 7px;
  box-shadow: 4px;
  border-radius: 4px;
}
.btn_regist:hover{
	background-color: #f28a5e;
}
</style>

<div class="container_regist" style="padding-bottom: 250px;">
	<h2 style="text-align: center;"><b>Register</b></h2><br><br>
	<form action="proses/register.php" method="POST">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Nama</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama" name="nama" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Email</label>
					<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" required>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">username</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Username" name="username" required >
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">No Tepl</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="+62" name="telp" required >
				</div>
			</div>

		</div>


		<div class="row">
			
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Konfirmasi Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Konfirmasi Password" name="konfirmasi" required>
				</div>
			</div>
		</div>

		<button type="submit" class="btn_regist">Register</button>
	</form>
</div>

<?php 
include 'footer.php';
?>