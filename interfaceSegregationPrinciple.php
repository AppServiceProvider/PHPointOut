<?php 

interface fileinterface{
    function display();
}

class imageFile implements fileinterface{
    function display(){
    }
}

class videoFile implements fileinterface{
    function display(){
    }
}
class audioFile implements fileinterface{
    function display(){
    }
}
class fileDisplay{
    function display(fileinterface $file){
        $file->display();
    }
}

$img= new imageFile();
$video= new imageFile();
$audio= new audioFile();

$obj1 = new fileDisplay();
$obj1->display($img);
$obj1->display($video);
$obj1->display($audio);