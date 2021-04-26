<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<!-- Google Font: Source Sans Pro -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<script src="https://kit.fontawesome.com/3e0c251e14.js" crossorigin="anonymous"></script>
		<style>
			.content{
				margin-top:90px;
			}
			tr:nth-child(odd){
				background:#efefef;
			}
			tr:nth-child(even)
			{
				background:#efefef;
			}
		</style>
	</head>
	<!-- Main content -->
	
	<body>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<?php
			$conn=mysqli_connect('localhost','root','','intern');
			$q="select * from form";
			$res=mysqli_query($conn,$q);
			if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['id']) && $_GET['id']>0){
			$type=$_GET['type'];
			$id=$_GET['id'];
			if($type=='delete')
			{
			if(mysqli_query($conn,"DELETE from form where id='$id'"))
			echo "<script>swal( 'Data deleted ','Deleted!','success' ).then(function() { window. location = 'display.php'; });;</script>";
			
			}
			}
			?>
			
			<!-- Main content -->
			<section class="content">
				<div style="padding:30px"><a href="index.html"><i class="zmdi zmdi-arrow-left"></i></a> Go to previous page</div>
				<div class="container-fluid" data-aos="flip-right">
					<div class="row">
						<div class="col-12">
							<div class="card">
								
								<!-- /.card-header -->
								<div class="card-body">
									<table id="example2" class="table table-bordered  table-hover">
										<thead>
											<tr style="background:beige">
												<th width="5%">S.no</th>
												<th>Name</th>
												<th>Email</th>
												<th width="9%">Number</th>
												<th>State</th>
												<th>City</th>
												<th>Address</th>
												
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php if(mysqli_num_rows($res)>0){
											$i=1;
											while($row=mysqli_fetch_assoc($res)){
											?>
											<tr>
												<td><?php echo $i ?></td>
												<td><?php echo $row['name'] ?>
												</td>
												<td><?php echo $row['email'] ?></td>
												<td><?php echo $row['mob'] ?></td>
												<td><?php echo $row['state'] ?></td>
												<td><?php echo $row['city'] ?></td>
												<td><?php echo $row['address'] ?></td>
												
												<td>
													<a href="edit.php?id=<?php echo $row['id']?>"><button class="btn btn-info">Edit</button></a>
													
													<a href="?id=<?php echo $row['id']?>&type=delete"><button class="btn btn-danger">Delete</button></a>
												</td>
											</tr>
											
											<?php $i++; }} else { ?>
											<tr>
												<td colspan="5">no data</td>
											</tr>
											<?php }?>
											</tfoot>
										</table>
									</div>
									<!-- /.card-body -->
								</div>
								<!-- /.card -->
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- /.content -->
			</div>
			<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
			<script>
			AOS.init({
			duration: 3000,
			once: true,
			});
			</script>
			
			
			
		</body>
	</html>