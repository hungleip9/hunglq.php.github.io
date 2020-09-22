<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .input_content input{
            height: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">UPDATE post</h3>
    <hr>
        <form action="index.php?c=post&mod=admin&act=update" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $post['id'] ?>">
            <a href="index.php?c=post&mod=admin&act=index" class="btn btn-primary">BACK-TO-HOME</a>
            <div class="form-group">
                <label for="">Tên Phim</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?php echo $post['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">Tác Giả</label>
                <input type="text" class="form-control" id="" placeholder="" name="tacGia" value="<?php echo $post['tacGia'] ?>">
            </div>
            <div class="form-group">
                <label for="">Parent_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="parent_id" value="<?php echo $post['parent_id'] ?>">
            </div>
            <div class="form-group input_content">
                <label for="">Nội Dung</label>
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail" value="<?php echo $post['thumbnail'] ?>">
            </div>
            <div class="form-group input_content">
                <label for="">Cái kết</label>
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail2" value="<?php echo $post['thumbnail2'] ?>">
            </div>
            <div class="form-group">
                <label for="">Tên Đạo Diễn</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?php echo $post['slug'] ?>">
            </div>
            
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?php echo $post['description'] ?>">
            </div>
            <div class="form-group">
                <label for="">Created_at</label>
                <input type="date" class="form-control" id="" placeholder="" name="created_at" value="<?php echo $post['created_at'] ?>">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control" id="" placeholder="" name="file" value="<?php echo $post['file'] ?>">
            </div>
            <div class="form-group">
                <label for="">Image2</label>
                <input type="file" class="form-control" id="" placeholder="" name="file2" value="<?php echo $post['file2'] ?>">
            </div>
            <div class="form-group">
                <label for="">Image3</label>
                <input type="file" class="form-control" id="" placeholder="" name="file3" value="<?php echo $post['file3'] ?>">
            </div>
            <div class="form-group">
                <label for="">Image4</label>
                <input type="file" class="form-control" id="" placeholder="" name="file4" value="<?php echo $post['file4'] ?>">
            </div>
            <div class="form-group">
                <label for="">Image5</label>
                <input type="file" class="form-control" id="" placeholder="" name="file5" value="<?php echo $post['file5'] ?>">
            </div>
            <div class="form-group">
                <label for="">Ý Nghĩa</label>
                <input type="text" class="form-control" id="" placeholder="" name="ynghia1" value="<?php echo $post['ynghia1'] ?>">
            </div>
            <div class="form-group">
                <label for="">Bối Cảnh</label>
                <input type="text" class="form-control" id="" placeholder="" name="ynghia2" value="<?php echo $post['ynghia2'] ?>">
            </div>
            <div class="form-group">
                <label for="">Diễn Biến</label>
                <input type="text" class="form-control" id="" placeholder="" name="ynghia3" value="<?php echo $post['ynghia3'] ?>">
            </div>
            <div class="form-group">
                <label for="">Nhân Vật</label>
                <input type="text" class="form-control" id="" placeholder="" name="ynghia4" value="<?php echo $post['ynghia4'] ?>">
            </div>
            
           <button class="btn btn-primary">Create</button>
           <a href="index.php?c=auth&mod=admin&act=logout">Logout</a>
            
        </form>
    </div>
</body>
</html>