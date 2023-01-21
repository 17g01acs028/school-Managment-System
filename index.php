<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Vertical Form Layout</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px; 
               
    }
    .bs-example{
        width:30%;
        outline:1px solid #f1f1f1;
        padding:20px;
        background-color:#f1f1f1;
        -webkit-box-shadow: 1px 6px 16px -3px rgba(0,0,0,0.75);
-moz-box-shadow: 1px 6px 16px -3px rgba(0,0,0,0.75);
box-shadow: 1px 6px 16px -3px rgba(0,0,0,0.75);  
position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

</style>
</head>
<body>
<div class="bs-example">
    <form action="cool/config.php" method="post">
        <div class="form-group">
            <label for="inputEmail">UserName</label>
            <input type="text" class="form-control" name="name" id="inputEmail" placeholder="UserName" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" name="pass"class="form-control" id="inputPassword" placeholder="Password" required>
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
    </form>
</div>
</body>
</html>                            