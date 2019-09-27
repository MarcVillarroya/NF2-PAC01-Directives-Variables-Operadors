<?php
session_start();
echo " <br/>";
echo "Welcome to my kitchen ";
echo " <br/>";
echo $_SESSION["ingredientes"];
echo " <br/>";
echo $_SESSION["picante"];
echo " <br/>";
echo $_SESSION["chef"];
echo " <br/>";
?>
<html>


 <head>
  <title>My favourite food<?php echo $_GET['favfood'];?></title>
 </head>
 <body>
 
<?php
echo "Esto va a volar";
echo $_COOKIE["username"];
echo "<br>"
?>

<?php
echo "My favorite food is ";
echo $_GET['favfood'];
?>
 </body>
</html>


<p>el logeado: </p>
<?php
echo $_POST["user"];
echo "<br>";
echo $_POST["pass"];
echo "<br>";
echo $_POST["age"];
?>
<?php
$Abarth = urlencode("Abarth y ferrari");
echo "<a href='SecondaryPage.php?Abarth=$Abarth'>";
echo "Click here to see information about my favoutite car!";
echo"</a>";
?>

<?php
$no_existe = $_GET['monstruo'] ?? 'dracula';
echo $no_existe;
?>

<?php
echo date('l \t\h\e jS');
?>



