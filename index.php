<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todos</title>
</head>
<body>
  <div class="container mt-5">
  <table class="table table-primary ">
       <thead>
           <tr>
              <th>id</th>
              <th>title</th>
              <th>desc</th>
              <th>complete</th>
              <th>date</th>
           </tr>
       </thead>
       <tbody>
        <?php 
              require "./dbConnect.php";
              $res=$db->prepare("select * from todos");
              $res->execute();
              $todos=$res->fetchAll();
              foreach($todos as $todo):
          ?>
           <tr>
             <td><?php echo $todo['id'] ?></td>
             <td><?php echo $todo['title'] ?></td>
             <td><?php echo $todo['description'] ?></td>
             <td><?php echo $todo['complete'] ?></td>
             <td><?php echo $todo['date'] ?></td>
          </tr>
        <?php endforeach; ?>
       </tbody>
   </table>
  </div>
</body>
</html>