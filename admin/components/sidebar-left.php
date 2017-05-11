<div class="col-sm-3 col-md-2 sidebar">
	<ul class="nav nav-sidebar">
		<li><a href="#">Overview <span class="sr-only">(current)</span></a></li>
	</ul>
	<ul class="nav nav-sidebar">
		<li <?= $_SERVER['REQUEST_URI'] == '/admin/post/index.php' ? 'class="active"' : '' ?> ><a href="/admin/post/index.php">Danh sách bài viết</a></li>
		<li <?= $_SERVER['REQUEST_URI'] == '/admin/post/create.php' ? 'class="active"' : '' ?> ><a href="/admin/post/create.php">Thêm bài viết mới</a></li>
	</ul>     
</div>