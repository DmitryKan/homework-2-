<?php
 $name= null;
 $password = null;
 $age = null;

 if (!empty($_POST)) {
     $name = isset($_POST['login']) ? $_POST['login'] : null;
     $password = isset($_POST['password']) ? $_POST['password'] : null;
     $age = isset($_POST['age']) ? $_POST['age'] : null;
 }
  
 if (!empty($_GET)) {
     $name = isset($_GET['login']) ? $_GET['login'] : null;
     $password = isset($_GET['password']) ? $_GET['password'] : null;
     $age = isset($_GET['age']) ? $_GET['age'] : null;
 }
   
?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<form method="post">
    <div class="mb-3">
        <label for="exampleInputlogin" class="form-label">Login</label>
        <input required type="text" name="login" class="form-control">
        <div class="form-text">Введите логин.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        <div class="form-text">Введите пароль.</div>
    </div class="mb-3">
        <label for="exampleInputAge" class="form-label">Age</label>
        <input required type="text" name="age" class="form-control" id="exampleInputAge1">
        <div class="form-text">Введите ваш возраст.</div>
    </div>


    <button type="submit" class="btn btn-primary">Отправить</button>
    </style> 

    <body>

 
<h1><?= $_GET['test']; ?></h1>

<div>
    <p> <strong>Name: </strong><?= $name ?></p>
    <p><strong>Password: </strong><?= $password ?></p>
    <p><strong>Age: </strong><?= $age ?></p>
</div>
    
    </form>
 
</body>
</html>