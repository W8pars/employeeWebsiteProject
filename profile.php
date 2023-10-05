<?php
	include 'master.php';

//can include option to include form to submit update queries in future deployment
?>


<div class="jumbotron">
    <h1>Welcome, <?php echo $_SESSION['email'] ?></h1>
</div>

<br>

<div class="container">
	<h2> Display Information Below <h2><br>
	<div>
		<form action="" method="post">
			<button type="submit" name="getProfile" class="btn btn-primary">Display Information</button>
		</form>
	</div>
	<br>
	<?php 
	if(isset($_POST['getProfile'])) {
		require_once "empdb_config.php";
		require "classes/dbh.classes.php";
	
		$db = new Dbmgr();
		$con = $db->connect();
		$sql = 'SELECT * FROM tbluser WHERE id = ' . $_SESSION['userid'];
		$table = $db->executeSelectQuery($con, $sql);
		echo $table;
	}
	?>
</div>
<br>

