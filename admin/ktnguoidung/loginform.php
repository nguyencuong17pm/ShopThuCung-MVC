<!DOCTYPE html>
<head>
<title>ABC Shop - Đăng nhập</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<div style="position:absolute;"><img src="../images/login.png" width="100%" ></div>
<div class="container">
<div class="row" style="margin-top:20%;">
	<?php if ($tb != ""){ ?>
	<div class="alert alert-warning alert-dismissible fade in">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php echo "<p>$tb</p>"; ?>
	</div>
	<?php } ?>
	<div class="col-sm-4"></div>
	<div class="col-sm-4" style="text-align:center;">
	<h2 style="color:white; font-family:tahoma;"><span class="label label-danger">ĐĂNG NHẬP</span></h2>
<form method="post" action="index.php">
<fieldset>
	<input class="form-control"  type="text" name="txtemail" placeholder="Tên" required><br>
	<input class="form-control"  type="password" name="txtmatkhau" placeholder="Mật khẩu" required><br>

	<input type="hidden" name="action" value="xldangnhap" >
	<input class="btn btn-success" type="submit" value="Đăng nhập">
	<input class="btn btn-primary" type="reset" value="Làm lại">
</fieldset></form>
	</div>
	<div class="col-sm-4"></div>
</div>
</div>
</body>
</html>