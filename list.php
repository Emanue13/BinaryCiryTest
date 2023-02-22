<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/btn.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Client List</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5">Client List</h2>

      <button>
        <a href="index.php"><span class="material-symbols-outlined">
          home
          </span></a>
        
      </button>
      <button>
        <a href="search.php"><span class="material-symbols-outlined">
          search
          </span></a>
        
      </button>
      <button>
        <a href="newclient.php"><span class="material-symbols-outlined">
          add_circle
          </span></a>
        
      </button>

      <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>
              
              <th scope="col">Client ID</th>
              <th scope="col">Full Name</th>
              <th scope="col">Email</th>
              <th scope="col">Contact</th>
            </tr>
          </thead>
          <tbody>
<!--=============== Php connection and data input  ===============-->
          <?php
          include "connection.php";
          $sql="select * from users";
          $results=$conn->query($sql);
          if(!$results){
            die("Invalid Database");
          }
          while($row=$results->fetch_assoc()){
            echo"
                      <tr>

                      <td>$row[user_id]</td>
                      <td>$row[first_name] $row[middle_name] $row[last_name] </td>
                      <td>$row[email]</td>
                      <td>$row[phone_number]</td>
            
            </tr>
            ";
          }
          ?> <a href=""></a>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
    <script src="js/main.js"></script>
  </body>
</html>