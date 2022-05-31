<?php
echo 'You have entered the following information:'.'<br>'; 
echo"<b>Pseudonym:</b>".$_GET['nik']."<br>"; 
echo"<b>Password:</b>".$_GET['password']."<br>";
echo "<b>Password confirmation:</b>".$_GET['password']."<br>";
echo "<b>Name:</b>".$_GET['name']."<br>";
echo "<b>Surname:</b>".$_GET['surname']."<br>";
echo "<b>E-mail:</b>".$_GET['mail']."<br>";
echo "<b>Country:</b>".$_GET['country']."<br>";
echo "<b>Region:</b>".$_GET['region']."<br>";
echo "<b>City(village):</b>".$_GET['city']."<br>";
echo "<b>Street:</b>".$_GET['street']."<br>";
?>
