
<head>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">
<link href="color/default.css" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.ico">


  </head>
<?php include 'navbar.php'; ?>

 <?php 
          $query="SELECT name FROM users WHERE email='".$_SESSION["email"]."'";

          if( $query_run = mysqli_query($connection, $query) ){
            
            $row = mysqli_fetch_assoc($query_run);
            $name = $row['name'];

              echo '<h3>Welcome  Mr '.$name.'.<h3>';
            }
        ?>
<?php include 'footer.php'; ?>