<?php
echo 'You have entered the following information:'.'<br>'; 
echo"<b>Author:</b>".$_GET['author_book']."<br>"; 
echo"<b>Name of the book:</b>".$_GET['name_book']."<br>";
echo "<b>Publishing house</b>".$_GET['publishing_house']."<br>";
echo "<b>Number of pages:</b>".$_GET['number_pages']."<br>";
echo "<b>File format:</b>".$_GET['format_file']."<br>";
echo "<b>File path:</b>".$_GET['file_path']."<br>";
?>
