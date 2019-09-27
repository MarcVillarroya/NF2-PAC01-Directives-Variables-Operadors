<?php
session_start();
setcookie("username","BOOOM",time()+8);
$_SESSION['ingredientes'] = "tomate";
$_SESSION['picante'] = 0;
$_SESSION['chef'] = "manolo";

?>

<?php
echo "<a href='primarypage.php?favfood=pizza'>";
echo "Click here to see information about my food!"; 
echo "</a>";
?>

<html>
 <head>
  <title>Find my Favorite Food!</title>
 </head>
 <body>
 <form method="post" action="primarypage.php">
   <p>Enter your username: 
    <input type="text" name="user"/>
   </p>
   <p>Enter your password: 
    <input type="password" name="pass"/>
   </p>
   <p>Enter your age: 
    <input type="text" name="age"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
</body>
</html>

<?php
echo "Mi coche favorito es ";
echo $_GET["Abarth"];
?>

