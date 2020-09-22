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
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New Categories</h3>
    <hr>
        <form action="index.php?c=category&mod=admin&act=store" method="POST" role="form" enctype="multipart/form-data">
            <a href="index.php?c=category&mod=admin&act=index" class="btn btn-primary">BACK-TO-HOME</a>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Tác Giả</label>
                <input type="text" class="form-control" id="" placeholder="" name="tacGia">
            </div>
            <div class="form-group">
                <label for="">Parent_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="parent_id">
            </div>
            <div class="form-group">
                <label for='tf6'>Content</label>
                <textarea class="form-control" id="summernote" name="thumbnail"></textarea>
                
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">Created_at</label>
                <input type="date" class="form-control" id="" placeholder="" name="created_at">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control" id="" placeholder="" name="file">
            </div>
            <div class="form-group">
                <label for="">Image2</label>
                <input type="file" class="form-control" id="" placeholder="" name="file2">
            </div>
            <div class="form-group">
                <label for="">Image3</label>
                <input type="file" class="form-control" id="" placeholder="" name="file3">
            </div>
            <div class="form-group">
                <label for="">Image4</label>
                <input type="file" class="form-control" id="" placeholder="" name="file4">
            </div>
            <div class="form-group">
                <label for="">Image5</label>
                <input type="file" class="form-control" id="" placeholder="" name="file5">
            </div>
            <button class="btn btn-primary">ADD</button>
            <a href="index.php?c=auth&mod=admin&act=logout">Logout</a>
        </form>
    </div>
   <!--  text summer -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>

    $(document).ready(function() {
      $('#summernote').summernote();
    });
</script>
<!-- end text summer -->
</body>
</html>