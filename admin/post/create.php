<?php
  if(isset($_POST['submit'])) {
    require("../libs/connectdb.php");

    try {
      $con = connectDb();

      extract($_POST);

      // image
      $image_filename = $_FILES['image']['name'];

      $des = $_SERVER['DOCUMENT_ROOT'] . "/images/$image_filename";
      move_uploaded_file($_FILES['image']['tmp_name'], $des);

      $sql = "INSERT INTO posts(title, description, content, image, published_at, hot, active) VALUES ('$title', '$description', '$content', '$image_filename', NOW(), $hot, $active)";

      $con->exec($sql);
    }
    catch (PDOException $ex) {
      echo $ex->getMessage();
    }

  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Danh sách bài viết</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/admin/assets/css/dashboard.css" />
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <?php
          require("../components/sidebar-left.php");
        ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Tạo bài viết mới</h1>
          <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
            <div class="form-group">
              <label >Tiêu đề</label>
              <input type="text" name="title" class="form-control" />
            </div>

            <div class="form-group">
              <label >Mô tả</label>
              <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
              <label >Nội dung</label>
              <textarea name="content" id="content" class="form-control"></textarea>
              
            </div>

            <div class="form-group">
              <label>Hình ảnh</label>
              <input type="file" name="image">
            </div>

            <div class="radio">
              <label style="font-weight: bold">Bài viết hot:</label>
              <label>
                <input type="radio" name="hot" value="1">Bật
              </label>
              <label>
                <input type="radio" name="hot" value="0" checked="checked">Tắt
              </label>
            </div>

            <div class="radio">
            <label style="font-weight: bold">Kích hoạt bài viết: </label>
              <label>
                <input type="radio" name="active" value="1" checked="checked">Bật
              </label>
              <label>
                <input type="radio" name="active" value="0">Tắt
              </label>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox"> Check me out
              </label>
            </div>

            <button type="submit" name="submit" value="submit" class="btn btn-primary">Thêm</button>
          </form>
        </div>
      </div>
    </div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script type="text/javascript" src="/admin/assets/plugins/ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('content');
  </script>
</body>
</html>