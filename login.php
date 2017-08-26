
<head>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">
<link href="color/default.css" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.ico">

  </head>
<?php include 'navbar.php'; ?>

<div class="" style="margin-top:40px;margin-bottom:40px;">

    <div class="login-wrapper">
      
      <h2 >Login Here </h2>
      
      <form action="" method="post">
        
        <div class="row">
          <input type="email" name="email" class="login-input" placeholder="Email" required />
        </div>
        
        <div class="row">
          <input type="password" name="password" class="login-input" placeholder="Password" required />
          
        </div>
    
        <div class="row">
          <button type="submit" class="submit-btn" name="submit" >Login </button>
        
        </div>
      
      </form>
    
    </div>

</div>
<?php include 'footer.php'; ?>