<!DOCTYPE html>
<html>
<head>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">


<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.12.4.js">
	</script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">
	</script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js">
	</script>
<script type="text/javascript" class="init">
$(document).ready(function() {
	$('#employeetable').DataTable();
} );
</script>
</head>
<body>
<?php
include ("navbar1.php");
$nn = new navb();
echo $nn->Anavbar();
?>
<p>Employee Roster</p>
<table id="employeetable" class="display" cellspacing="0" width="100%">

<thead>
	<tr>
	<th>User Name</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Access Level</th>
	<th>Email</th>
	</tr>
</thead>
<tbody>
	<?php 
	require_once('/home/ubuntu/awscredentials.php');

	try 
	{
		$dbc = new PDO($dsn, $username, $password);
		$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$STH = $dbc->prepare('SELECT * FROM Employee');
		 
		//set the fetch mode
		$STH->setFetchMode(PDO::FETCH_ASSOC);
		$STH->execute();

		while($row = $STH->fetch()) {
			echo "<tr><td>".
			$row['Username']."</td><td>".
			$row['First_Name']."</td><td>".
			$row['Last_Name']."</td>";
			If ($row['FinancilProfessional_1'] == true){
				echo "<td>Client</td>";
			}
			elseif ($row['FinancilProfessional_2'] == true){
				echo "<td>Employee</td>";
			}
			elseif ($row['FinancilProfessional_3'] == true){
				echo "<td>Admin</td>";
			}
			echo "<td>".$row['Email']."</td></tr>";
		}
	}
	catch(PDOException $e)
		{
		echo "Database Operations Failed: " . $e->getMessage();
		}
	?>
</tbody>
</table>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>
</html>