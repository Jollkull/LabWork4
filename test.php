<form action = "?php $_PHP_SELF ?" method = "POST">
      Name: <input type = "text" name = "name" />
      Age: <input type = "text" name = "age" />
      <input type = "submit" />
   </form>

<?php
if( $_POST["name"] || $_POST["age"] ) {
   echo " Welcome ". $_POST['name'];
   echo " You are ". $_POST['age']. " years old.";
   exit();
}
?>

<?php
$name = "123";
$age = "UNDEFINED";
if(isset($_GET["name"])){

   $name = $_GET["name"];
}
if(isset($_GET["age"])){

   $age = $_GET["age"];
}
echo "Имя: $name <br> Возраст: $age";
?>
