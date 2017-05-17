<?php
	require('admin/libs/connectdb.php');

	try {
  	  $con = connectDb();
  	  $sql = "SELECT * FROM posts WHERE active = 1 AND hot = 1 ORDER BY published_at desc";

  	  $stmt = $con->prepare($sql);
  	  $stmt->execute();

  	  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  	  $hot_news = $stmt->fetchAll();

  	  print_r($hot_news);
  	  die();
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
				<div class="col col-8">
					<div id="hot-news" class="clearfix">

						<?php for($i = 0; $i <= 1; $i++): ?>
							<div class="news">
								<div class="news-image cover-image">
									<img src="images/<?= $hot_news[$i]['image'] ?>">
								</div>
								<div class="info">
									<h2><a href=""><?= $hot_news[$i]['title'] ?></a></h2>
									<p class="brief"><?= $hot_news[$i]['description'] ?></p>
								</div>
							</div>
						<?php endfor; ?>

					</div><!-- end hot news -->

					<div class="row">
						<div class="col col-12">
							<div class="owl-carousel owl-theme">
								<div>
									<img src="images/hot2.jpg">
									<h3><a href="">MC Thành Trung dùng siêu xe 21 tỷ để rước dâu</a></h3>
								</div>
								<div>
									<img src="images/hot2.jpg">
									<h3><a href="">MC Thành Trung dùng siêu xe 21 tỷ để rước dâu</a></h3>
								</div>
								<div>
									<img src="images/hot2.jpg">
									<h3><a href="">MC Thành Trung dùng siêu xe 21 tỷ để rước dâu</a></h3>
								</div>
								<div>
									<img src="images/hot2.jpg">
									<h3><a href="">MC Thành Trung dùng siêu xe 21 tỷ để rước dâu</a></h3>
								</div>
								<div>
									<img src="images/hot2.jpg">
									<h3><a href="">MC Thành Trung dùng siêu xe 21 tỷ để rước dâu</a></h3>
								</div>
								<div>
									<img src="images/hot2.jpg">
									<h3><a href="">MC Thành Trung dùng siêu xe 21 tỷ để rước dâu</a></h3>
								</div>
							</div>	
						</div>
					</div>

					<div id="news-list">

						<div class="news">
							<div class="row">
								<div class="col col-4">
									<div class="cover-image">
										<img src="images/news1.jpg">
									</div>
								</div>
								<div class="col col-8">
									<div class="info">
										<h3><a href="">Quận 1 dỡ mái hiên, xử phạt tòa nhà Saigon Centre 58 triệu đồng phí cưỡng chế</a></h3>
										<p><a href="">Xã Hội</a> - <span>41 phút trước</span></p>
										<p class="brief">Lực lượng chức năng quận 1 TP HCM đã xử phạt chủ tòa nhà Saigon Centre - Trung tâm thương mại cao cấp tại TP HCM</p>
									</div>
								</div>
							</div>
						</div>

						<div class="news">
							<div class="row">
								<div class="col col-4">
									<div class="cover-image">
										<img src="images/news1.jpg">
									</div>
								</div>
								<div class="col col-8">
									<div class="info">
										<h3><a href="">Quận 1 dỡ mái hiên, xử phạt tòa nhà Saigon Centre 58 triệu đồng phí cưỡng chế</a></h3>
										<p><a href="">Xã Hội</a> - <span>41 phút trước</span></p>
										<p class="brief">Lực lượng chức năng quận 1 TP HCM đã xử phạt chủ tòa nhà Saigon Centre - Trung tâm thương mại cao cấp tại TP HCM</p>
									</div>
								</div>
							</div>
						</div>

						<div class="news">
							<div class="row">
								<div class="col col-4">
									<div class="cover-image">
										<img src="images/news1.jpg">
									</div>
								</div>
								<div class="col col-8">
									<div class="info">
										<h3><a href="">Quận 1 dỡ mái hiên, xử phạt tòa nhà Saigon Centre 58 triệu đồng phí cưỡng chế</a></h3>
										<p><a href="">Xã Hội</a> - <span>41 phút trước</span></p>
										<p class="brief">Lực lượng chức năng quận 1 TP HCM đã xử phạt chủ tòa nhà Saigon Centre - Trung tâm thương mại cao cấp tại TP HCM</p>
									</div>
								</div>
							</div>
						</div>

						<div class="trend-list">

							<div class="header">
								<p>Đáng chú ý</p>
							</div>

							<div class="body">
								<div class="news">
									<div class="row">
										<div class="col col-4">
											<div class="cover-image">
												<img src="images/news1.jpg">
											</div>
										</div>
										<div class="col col-8">
											<div class="info">
												<h3><a href="">Quận 1 dỡ mái hiên, xử phạt tòa nhà Saigon Centre 58 triệu đồng phí cưỡng chế	</a>	</h3>
												<p>
													<span>135k</span>
													<span>31k</span>
												</p>
												<p class="brief">Lực lượng chức năng quận 1 TP HCM đã xử phạt chủ tòa nhà Saigon Centre - 	Trung 	tâm thương mại cao cấp tại TP HCM</p>
											</div>
										</div>
									</div>
								</div>
	
								<div class="news">
									<div class="row">
										<div class="col col-4">
											<div class="cover-image">
												<img src="images/news1.jpg">
											</div>
										</div>
										<div class="col col-8">
											<div class="info">
												<h3><a href="">Quận 1 dỡ mái hiên, xử phạt tòa nhà Saigon Centre 58 triệu đồng phí cưỡng chế	</a>	</h3>
												<p>
													<span>135k</span>
													<span>31k</span>
												</p>
												<p class="brief">Lực lượng chức năng quận 1 TP HCM đã xử phạt chủ tòa nhà Saigon Centre - 	Trung 	tâm thương mại cao cấp tại TP HCM</p>
											</div>
										</div>
									</div>
								</div>
								<div class="news">
									<div class="row">
										<div class="col col-4">
											<div class="cover-image">
												<img src="images/news1.jpg">
											</div>
										</div>
										<div class="col col-8">
											<div class="info">
												<h3><a href="">Quận 1 dỡ mái hiên, xử phạt tòa nhà Saigon Centre 58 triệu đồng phí cưỡng chế	</a>	</h3>
												<p>
													<span>135k</span>
													<span>31k</span>
												</p>
												<p class="brief">Lực lượng chức năng quận 1 TP HCM đã xử phạt chủ tòa nhà Saigon Centre - 	Trung 	tâm thương mại cao cấp tại TP HCM</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
				<div class="col col-4">

				</div>
			</div>
		</div>

		<div class="hot-categories">
			<div class="container">
				<div class="row">
					<div class="col col-7">
						<div class="col col-6">
							<ul>
								<li>
									<a href="">
										<img src="images/news1.jpg">
										<h3>Chánh VP UBND Nam Từ Liêm: Lỗi chính tả là do đơn vị in ấn và quảng cáo</h3>
									</a>
								</li>
								<li>
									<a href="">
										<img src="images/news1.jpg">
										<h3>Chánh VP UBND Nam Từ Liêm: Lỗi chính tả là do đơn vị in ấn và quảng cáo</h3>
									</a>
								</li>
								<li>
									<a href="">
										<img src="images/news1.jpg">
										<h3>Chánh VP UBND Nam Từ Liêm: Lỗi chính tả là do đơn vị in ấn và quảng cáo</h3>
									</a>
								</li>
								
							</ul>
						</div>
						<div class="col col-6">
							<ul>
								<li>
									<a href="">
										<img src="images/news1.jpg">
										<h3>Chánh VP UBND Nam Từ Liêm: Lỗi chính tả là do đơn vị in ấn và quảng cáo</h3>
									</a>
								</li>
								<li>
									<a href="">
										<img src="images/news1.jpg">
										<h3>Chánh VP UBND Nam Từ Liêm: Lỗi chính tả là do đơn vị in ấn và quảng cáo</h3>
									</a>
								</li>
								<li>
									<a href="">
										<img src="images/news1.jpg">
										<h3>Chánh VP UBND Nam Từ Liêm: Lỗi chính tả là do đơn vị in ấn và quảng cáo</h3>
									</a>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="col col-5">
						
					</div>
				</div>
			</div>
		</div>


		<div class="video">
			<div class="container">
				<div class="row">
					<div class="col col-7">
						<iframe width="100%" height="100%" src="https://www.youtube.com/embed/1P4DaXgzVnE" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="col col-5">
						<div class="videos-list">
							<div class="video-item">
								<div class="row">
									<ul>
										<li>
											<a href="">
												<img src="images/video1.jpg">
												<h3>Gã ăn xin “xuyên lục địa” đang làm gì ở Sài Gòn?</h3>
											</a>
										</li>
										<li>
											<a href="">
												<img src="images/video1.jpg">
												<h3>Gã ăn xin “xuyên lục địa” đang làm gì ở Sài Gòn?</h3>
											</a>
										</li>
										<li>
											<a href="">
												<img src="images/video1.jpg">
												<h3>Gã ăn xin “xuyên lục địa” đang làm gì ở Sài Gòn?</h3>
											</a>
										</li>
										<li>
											<a href="">
												<img src="images/video1.jpg">
												<h3>Gã ăn xin “xuyên lục địa” đang làm gì ở Sài Gòn?</h3>
											</a>
										</li>
										<li>
											<a href="">
												<img src="images/video1.jpg">
												<h3>Gã ăn xin “xuyên lục địa” đang làm gì ở Sài Gòn?</h3>
											</a>
										</li>
										<li>
											<a href="">
												<img src="images/video1.jpg">
												<h3>Gã ăn xin “xuyên lục địa” đang làm gì ở Sài Gòn?</h3>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>

		
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>