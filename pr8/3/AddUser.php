<?php
echo 'You have entered the following information:'.'<br>'; 
echo"<b>Author:</b>".$_GET['author_book']."<br>"; 
echo"<b>Description:</b>".$_GET['description']."<br>";
echo "<b>Journal in which the article was published</b>".$_GET['journal']."<br>";
echo "<b>Number of pages:</b>".$_GET['number_pages']."<br>";
echo "<b>Year of publication:</b>".$_GET['year']."<br>";
echo "<b>File format:</b>".$_GET['format_file']."<br>";
echo "<b>File path:</b>".$_GET['file_path']."<br>";
?>
