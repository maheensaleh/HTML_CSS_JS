<?php

$file = "folder1/file1.txt";

echo basename($file)."<br>"; //returns filename with extension
echo basename($file,".txt")."<br>"; //returns filename without extension

echo is_file($file)."<br>"; //checks if the path is of a file or not
echo is_file("folder1")."<br>"; //returns no

echo file_exists($file)."<br>";//checks if the given path exits
echo file_exists("folder1")."<br>";

echo dirname($file)."<br>"; // name of directory

echo realpath($file)."<br>"; //abs path

echo is_writable($file)."<br>";//checks is writabel
echo is_readable($file)."<br>";//checks id readable
echo filesize($file)."<br>";//gets file size
// mkdir ("hellofolder");//creates a direcctory
//remove a direvtory
// rmdir ("hellofolder");

// copy ('folder1/file1.txt','file1_copy.txt');

// rename ("sample","sample_renamed");

//delete file by unlink command
// unlink("file1_copy.txt");

//get content from file
echo file_get_contents("folder1/file1.txt");
 
//write to file
$prev = file_get_contents("folder1/file1.txt");
file_put_contents("folder1/file1.txt",$prev."\n"."new edition");
echo file_get_contents("folder1/file1.txt");



?>
