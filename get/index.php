<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script ></script>
</head>
<body>
<div class="container">
    <form action="get.php" method="GET" role="form">
        <legend>Get files</legend>

        <div class="form-group">
            <label for="">Tên</label>
            <input type="text" class="form-control" id="" placeholder="Nhập vào tên" name="name">
        </div>

        <div class="form-group">
            <label for="">Tuổi</label>
            <input type="number" class="form-control" id="" placeholder="Nhập vào tuổi" name="age">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
