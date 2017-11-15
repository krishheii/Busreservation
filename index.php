<html >
<head>
    
  <meta charset="UTF-8">
  <title>Rit Bus Reservation</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  
  
      <link rel="stylesheet" href="css/style.css">
      
       <style> .po{margin-top: -50px;}</style>   

  
</head>

<body>
  <div class="user">
    <header class="user__header">
        <img src="rit.png" alt="" />
        <h1 class="user__title">Rajiv Gandhi Institute of Technology, Kottayam</h1>
    </header>
    
    <form class="form" method="POST" >
        <div class="form__group">
            <input type="text" placeholder="Username" class="form__input" name="username" />
        </div>
        
        
        
        <div class="form__group">
            <input type="password" placeholder="Password" class="form__input" name="pass" />
        </div>
        
        <button class="btn" type="submit">Login</button>
    </form>
     
    
</div>
    
      
                
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>

<?php
  ob_start();
 $error="";
 if($_POST){
    if($_POST['username']=='neha'&&$_POST['pass']=='krish'){
        echo "<script type='text/javascript'>window.top.location='Home.php';</script>"; exit;
     }
     else
    {
    echo '<div class="user"><div class="alert alert-danger po" role="alert" ><strong>Oh Wrong Information!</strong>CouldYou Please Try Again</div>';
    }
    }
    ?>


