<?php
	require('admin/libs/connectdb.php');

	try {
  	  $con = connectDb();
  	  $sql = "SELECT * FROM posts WHERE id = {$_GET['id']}";
  	  $stmt = $con->prepare($sql);
  	  $stmt->execute();
  	  $stmt->setFetchMode(PDO::FETCH_ASSOC);

  	  $news = $stmt->fetch();
  	}
  	catch (PDOException $ex) {
  	  echo $ex->getMessage();
  	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kenh 14</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="plugin/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="plugin/owl-carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="plugin/owl-carousel/assets/owl.theme.default.min.css">
</head>
<body>
	<div id="top-header">
		<div class="container">
			<p>
				<a href="">Quizz</a>
				<a href="">Magazine</a>
				<a href="">Photograph</a>
				<a href="">Đọc chậm</a>
			</p>
		</div>
	</div>
	<div id="header">
		<div class="container">
		<div class="row">
			<div class="col col-2">
				<div class="logo">
					<h1><a href=""></a></h1>
				</div>
			</div>
			<div class="col col-10">
				<div class="trend">
					<ul>
						<li><a href="">nữ đại gia Thái Lan tuyển chồng</a></li>
						<li><a href="">Apple ra mắt iPhone 7 và 7 Plus đỏ rực</a></li>
					</ul>
				</div>
			</div>
		</div>
			
			
		</div>
	</div>

	<div id="menu" class="clearfix">
		<div class="container">
			<ul>
				<li><a href=""><i class="fa fa-home" aria-hidden="true"></i></a></li>
				<li>
					<a href="">Đời sống</a>
					<ul class="dropdown">
						<li><a href="">Đời sống</a></li>
						<li><a href="">Âm nhạc</a></li>
						<li><a href="">Phim ảnh</a></li>
					</ul>
				</li>
				<li>
					<a href="">Âm nhạc</a>
					<ul class="dropdown">
						<li>
							<a href="">Đời sống</a>
							<ul class="dropdown">
								<li><a href="">Đời sống</a></li>
								<li><a href="">Âm nhạc</a></li>
								<li><a href="">Phim ảnh</a></li>
							</ul>
						</li>
						<li><a href="">Âm nhạc</a></li>
						<li><a href="">Phim ảnh</a></li>
					</ul>
				</li>
				<li><a href="">Phim ảnh</a></li>
			</ul>
		</div>
	</div>

	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<!-- Tieu de -->
					<h2><?= $news['title'] ?></h2>
					<!-- Hinh anh bai viet -->
					<img style="width: 80%" src="/images/<?= $news['image'] ?>">
					<!-- Noi dung bai viet -->
					<?= $news['content'] ?>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>