<?php
$userData_1 =[
    'name' => 'Ahmed Hamdy',
    'jop'  => 'front-end',
    'Experiance'=> '3 Years of Exeperiance'
];
$userData_2 =[
    'name' => 'Mohamed shaker',
    'jop'  => 'back-end',
    'Experiance'=> '2 Years of Exeperiance'
];
$userData_3 =[
    'name' => 'Ali  hassan',
    'jop'  => 'full-stack',
    'Experiance'=> '4 Years of Exeperiance'
];



?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="card w-25 m-5" >
  <div class="card-body">
    <?php
       foreach($userData_1 as $elm_1)
       {
           echo "<strong>$elm_1 </strong><br>";
       }
    ?>
  </div>
</div>


<div class="card w-25 m-5" >
  <div class="card-body">
    <?php
       foreach($userData_2 as $elm_2)
       {
           echo "<strong>$elm_2</strong> <br>";
       }
    ?>
  </div>
</div>


<div class="card w-25 m-5" >
  <div class="card-body">
    <?php
       foreach($userData_3 as $elm_3)
       {
           echo "<strong>$elm_3 </strong><br>";
       }
    ?>
  </div>
</div>
    
</body>
</html>