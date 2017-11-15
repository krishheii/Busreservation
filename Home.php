<!DOCTYPE html>



<?php

   
 
 if (array_key_exists("submit",$_POST)){
     
 $link= mysqli_connect("localhost","id3287709_bus","12345","id3287709_bus");
 if (mysqli_connect_errno())
  {
  echo"not connected";
  }
  
  
  $query= "INSERT INTO bus2 (name,adminno,branch,Dfrom) VALUES ('".mysqli_real_escape_string($link, $_POST['name'])."','".mysqli_real_escape_string($link, $_POST['adminno'])."','".mysqli_real_escape_string($link, $_POST['branch'])."','".mysqli_real_escape_string($link, $_POST['from'])."')";
  if(!mysqli_query($link,$query))
    {echo"could not";}
    
    
    
 }
    

?>


<html >
<head>
  <meta charset="UTF-8">
  <title>Bus Reservation System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
    
  <div class="user">
    <header class="user__header">
        <img src="rit.png" alt="" />
        <h1 class="user__title">Rajiv Gandhi Institute of Technology, Kottayam</h1>
    </header>
    
    <form class="form" method="post">
        <div class="form__group">
            <input type="text" placeholder="Name" class="form__input"  name="name" />
        </div>
        <div class="form__group">
            <input type="text" placeholder="Admission No" class="form__input" name="adminno" />
        </div>
        <div class="form__group">
            <input type="text" placeholder="Branch" class="form__input" name="branch" />
        </div>
        <div class="form__group">
            <input type="text" placeholder="From" class="form__input" name="from" />
        </div>
        
        
        <button class="btn" name ="submit" type="submit">Submit</button>
    </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
  <button type="button" style="width:15%;margin-top:-600px;margin-left:1090px" onclick="location.href = 'Table.php';" class="btn info user__header">Registred Students
  </button>
</body>
</html>