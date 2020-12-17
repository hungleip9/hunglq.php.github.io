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
    <h3 align="center">UPDATE Category</h3>
    <hr>
        <form action="index.php?c=category&mod=admin&act=update" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $category['id'] ?>">
            <a href="index.php?c=category&mod=admin&act=index" class="btn btn-primary">BACK-TO-HOME</a>
            
            <div class="form-group">
                <label for="">Ý Nghĩa</label>
                <input type="text" class="form-control" id="" placeholder="" name="ynghia1" value="<?php echo $category['ynghia1'] ?>">
            </div>
            <div class="form-group">
                <label for="">Bối Cảnh</label>
                <input type="text" class="form-control" id="" placeholder="" name="ynghia2" value="<?php echo $category['ynghia2'] ?>">
            </div>
            <div class="form-group">
                <label for="">Diễn Biến</label>
                <input type="text" class="form-control" id="" placeholder="" name="ynghia3" value="<?php echo $category['ynghia3'] ?>">
            </div>
            <div class="form-group">
                <label for="">Nhân Vật</label>
                <input type="text" class="form-control" id="" placeholder="" name="ynghia4" value="<?php echo $category['ynghia4'] ?>">
            </div>
            
           <button class="btn btn-primary">Create</button>
           <a href="index.php?c=auth&mod=admin&act=logout">Logout</a>
            
        </form>
    </div>
</body>
</html>