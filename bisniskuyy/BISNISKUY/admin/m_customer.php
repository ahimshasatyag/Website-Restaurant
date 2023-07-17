<?php 
include 'header.php';

if(isset($_GET['page'])){
	$kode = $_GET['kode'];
	$result = mysqli_query($conn, "DELETE FROM customer WHERE kode_customer = '$kode'");

	if($result){
		echo "
		<script>
		alert('DATA BERHASIL DIHAPUS');
		window.location = 'm_customer.php';
		</script>
		";
	}
}

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
</style>

<div class="container">
	<h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Data Customer</b></h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Kode Customer</th>
				<th scope="col">Nama</th>
				<th scope="col">Email</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$result = mysqli_query($conn, "SELECT * FROM customer order by kode_customer asc");
			$no =1;
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<tr>

					<th scope="row"><?php echo $no; ?></th>
					<td><?= $row['kode_customer'];  ?></td>
					<td><?= $row['nama'];  ?></td>
					<td><?= $row['email'];  ?></td>
					<td><a href="m_customer.php?kode=<?php echo $row['kode_customer'];?>&page=del" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data ?')"><i class="glyphicon glyphicon-trash"></i> </a></td>
				</tr>
				<?php 
				$no++;
			}
			?>
		</tbody>
	</table>

</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php 
include 'footer.php';
?>
