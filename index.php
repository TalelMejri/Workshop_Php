<?php 

    /*

      $db=new Mysqli("localhost","root","","dsi22todo"); 
      //Crud OPERATION (create,read,update,delete)
      $res=$db->query("select * from todos");
      var_dump($res->fetch_array());

     */

     

     $db=new PDO("mysql:host=localhost;dbname=dsi22todo",'root','');

     // TypeSgbd
     // host
     // dbname :database Name
     // username
     // password (empty)

    /* 
         $res=$db->query("select * from todos");//sql injection
         $todos=$res->fetchAll();
         var_dump($todos); 
     */

     // prepare : Boite Noir
     // execute : execution

     $res=$db->prepare("select * from todos");
     $res->execute();
     $todos=$res->fetchAll();
     var_dump($todos)
     

?>