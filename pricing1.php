<?php 
 try 
{ 

$db = new PDO('sqlite:kyrc.db'); 


$name = $_POST["name"]; 
$num = $_POST["num"]; 
$byc = $_POST["byc"]; 
$mes = $_POST["mes"]; 

$db->exec("INSERT INTO zakaz (name, num, byc, mes) VALUES ('$name', '$num', '$byc', '$mes');"); 

$db = NULL;
}
catch(PDOException $e) 
{ 
print 'Exception : ' .$e->getMessage(); 
} 
?>
<link href="css/reg.css" rel="stylesheet">
<form method="POST" class="decor">
  <div class="form-left-decoration"></div>
  <div class="form-right-decoration"></div>
  <div class="circle"></div>
  <div class="form-inner">
    <h3>Заявка на диагностику</h3>
    <input type="text" id="name" name="name" placeholder="Имя">
    <input type="text"  id="num" name="num" placeholder="Телефон (7xxxxxxxxxx)">
    <input type="text"  id="byc" name="byc" placeholder="Велосипед">
    <input type="text" id="mes" name="mes" placeholder="Сообщение">
    <input type="submit" value="Отправить">
  </div>
</form>
