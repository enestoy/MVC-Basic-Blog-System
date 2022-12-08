<?php
class Load{
    public function __construct(){
        
    }

    public function view($fileName,$data=null){
        if($data==true):
           extract($data);
        endif;
        include "app/views/".$fileName."_view.php";

    }
    public function model($fileName){
        include "app/models/".$fileName.".php";
        return new $fileName();

    }

    public function otherClasses($fileName){
        include "app/otherClasses/" . $fileName . ".php";
        return new $fileName();
    }
}

?>