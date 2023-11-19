<?php 

   try{
      // connect to bd
    $db=new PDO("mysql:host=localhost;dbname=dsi22todo",'root','');
     // TypeSgbd
     // host
     // dbname : database Name
     // username
     // password (empty)
    }catch(Exception $e){
       echo 'failed connect'.  $e->getMessage();
    }

?>