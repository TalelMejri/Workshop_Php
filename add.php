<?php

     require_once "./db_connected/index.php";

     $errors=[];
     $titel="";
     $description="";
     $due_date="";
     
     if(isset($_POST['submit'])){

          $titel=$_POST['titel'];
          $description=$_POST['description'];
          $due_date=$_POST['due_date'];
          // if(empty($titel) && empty($description) && empty($due_date)){
          //      header("location:add.php?message=All Fields Are Required&type=danger");
          //      //navigation
          // }else 
          if(empty($titel)){
               $errors['title']="Title Required";
          }else if(empty($description)){
               $errors['description']="Description Required";
          }else if(empty($due_date)){
               $errors['date']="Date Required";
          }else if(empty($errors)){
               $res=$db->prepare("INSERT INTO todos (`title`, `description`, `complete`, `date`) VALUES (:title,:desc,:comp,:dat)");
               $res->execute([
                    "title"=>$titel,
                    "desc"=>$description,
                    "comp"=>0,//ajouter par system
                    "dat"=>$due_date
               ]);
               header("location:add.php?message=All Fields Are Required&type=danger");
          }

     }


     $template="add";
     $page_titel="Add Todo";
     include "./layout.phtml";

?>