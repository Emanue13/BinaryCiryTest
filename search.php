<!--=============== CONECTION ===============-->
<?php
include 'connection.php'
?>

<!--===========================================-->

<!DOCTYPE html>
<html>
<head>
	<title>Search Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="maiss/main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	

</head>
<body>

<!--=============== SEARCH BUTTOM ===============-->
	<div class="container">
		<h1>Find Client</h1>
		<form method="POST" action="search.php">
			<input type="text" placeholder="Enter search term" name="search_term" required>
			<button type="submit" name="submt">Search</button>

<!--==============================================-->
		</form>
    <div class="row">
		<div class="col-md-12">
    <div class="table-wrap">
    <table class="table table-bordered table-dark table-hover">
        <!--=============== search Conditiom ===============-->
			<?php
        if(isset($_POST['submt'])){
					$search_term = $_POST['search_term'];

					$sql = "SELECT * FROM users WHERE user_id='$search_term' OR first_name LIKE '%$search_term%' OR middle_name LIKE '%$search_term%'OR last_name LIKE '%$search_term%'";

					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {

            echo "<thead>
              <tr>
                <th>Client ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
              </tr>
            </thead>";
						$row = mysqli_fetch_assoc($result);

            echo " <tbody>
            <tr>
              <td>$row[user_id]</td>
              <td>$row[first_name] $row[middle_name] $row[last_name] </td>
              <td>$row[email]</td>
              <td>$row[phone_number]</td>
            </tr>
           
          </tbody>";     
					} 
          else {
						echo "<p>No client(s) found.</p>";
					mysqli_close($conn);
				}}
			?>
      </table>
					</div>
				</div>
			</div>
		</div>
    <!--=============== CREATE NEW CONTACT OPTION ===============-->
    <button class="home-btn"><a href="newclient.php">Create Contact</a></button>
	</div>
</body>
</html>
