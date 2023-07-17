<?php 
include 'header.php';
$date = date('yy-m-d');

if(isset($_POST['submit'])){
	$date1 = $_POST['date1'];
	$date2 = $_POST['date2'];
}
?>
<style type="text/css">
	@media print{
		.print{
			display: none;
		}
	}

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
</style>
<div class="container">
	<h2 style=" width: 100%; border-bottom: 4px solid gray; padding-bottom: 5px;"><b>Laporan Inventory</b></h2>
	<div class="row print">
		<div class="col-md-9">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<table>
					<tr>
						<td><input type="date" name="date1" class="form-control" value="<?= $date; ?>"></td>
						<td>&nbsp; - &nbsp;</td>
						<td><input type="date" name="date2" class="form-control" value="<?= $date; ?>"></td>
						<td> &nbsp;</td>
						<td><input type="submit" name="submit" class="btn btn-primary" value="Tampilkan"></td>
					</tr>
				</table>
			</form>
			
		</div>
		<div class="col-md-3">
			<form action="exp_pembatalan.php" method="POST">
				<table>
					<tr>
						<td><input type="hidden" name="date1" class="form-control" value="<?= $date1; ?>"></td>
						<td><input type="hidden" name="date2" class="form-control" value="<?= $date2; ?>"></td>
						<td><a href="" onclick="window.print()" class="btn btn-default"><i class="glyphicon glyphicon-print"></i> Cetak</a></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<br>
	<br>
	<table class="table table-striped">
		<tr>
			<th>No</th>
			<th>Nama Bahan Baku</th>
			<th>qty</th>
			<th>Satuan</th>
			<th>tanggal</th>
		</tr>
		<?php 
		if(isset($_POST['submit'])){
		$result = mysqli_query($conn, "SELECT * FROM inventory WHERE tanggal between '$date1' and '$date2'");
		$no=1;
		$total = 0;
		while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $row['nama']; ?></td>
				<td><?= $row['qty']; ?></td>
				<td><?= $row['satuan']; ?></td>
				<td><?= $row['tanggal']; ?></td>
			</tr>
			<?php 
			$total += $row['qty'];
			$no++;
		}

		?>
		<tr>
			<td colspan="5" class="text-right"><b>Jumlah semua bahan baku = <?= $total; ?></b></td>
		</tr>
<?php 	} ?>
	</table>
</div>

<br>
<br>
<br>
<br>
<br>


<?php 
include 'footer.php';
?>