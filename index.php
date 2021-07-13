<?php
 $name= null;
 $surname = null;
 $age = null;

 if (!empty($_POST)) {
     $name = isset($_POST['Name']) ? $_POST['Name'] : null;
     $surname= isset($_POST['Surname']) ? $_POST['Surname'] : null;
     $age = isset($_POST['age']) ? $_POST['age'] : null;
 }
  
 if (!empty($_GET)) {
     $name = isset($_GET['Name']) ? $_GET['Name'] : null;
     $surname = isset($_GET['Surname']) ? $_GET['Surname'] : null;
     $age = isset($_GET['age']) ? $_GET['age'] : null;
 }
   
?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<form method="post">
    <div class="mb-3">
        <label for="exampleInputname" class="form-label"> Name</label>
        <input required type="text" name="Name" class="form-control">
        <div class="form-text">Введите ваше имя.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputSurname" class="form-label">Surname</label>
        <input type="Surname" name="Surname" class="form-control" id="exampleInputSurname">
        <div class="form-text">Введите фамилию.</div>
    </div class="mb-3">
        <label for="exampleInputAge" class="form-label">Age</label>
        <input required type="text" name="age" class="form-control" id="exampleInputAge1">
        <div class="form-text">Введите ваш возраст.</div>
    </div>


    <button type="submit" class="btn btn-primary">Отправить</button>
    
 
<h1><?= $_GET['test']; ?></h1>

<div>
    <p> <strong>Name: </strong><?= $name ?></p>
    <p><strong>Surname: </strong><?= $surname ?></p>
    <p><strong>Age: </strong><?= $age ?></p>
</div>