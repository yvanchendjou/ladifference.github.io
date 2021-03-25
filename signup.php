<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>REGISTRATION FORM</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>child Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="child Name"><br>
          <?php }?>

          <label>user Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>



          <label>age</label>
          <?php if (isset($_GET['uage'])) { ?>
               <input type="number" 
                      name="uage" 
                      placeholder="Age"
                      value="<?php echo $_GET['uage']; ?>"><br>
          <?php }else{ ?>
               <input type="number" 
                      name="uage" 
                      placeholder="Age"><br>
          <?php }?>

          <label>class</label>
          <?php if (isset($_GET['class'])) { ?>
               <input type="text" 
                      name="class" 
                      placeholder="class"
                      value="<?php echo $_GET['class']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="class" 
                      placeholder="class"><br>
          <?php }?>


        

     

     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>


                 
          <button type="submit">REGISTER</button> 

          
          <a href="index.php" class="ca">Already have an account?</a>
          
     </form>
</body>
</html>