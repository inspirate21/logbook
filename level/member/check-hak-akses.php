<?php if (!isset($user) ){
header('Location: ../../index.php');
}
$select			= "SELECT role FROM user WHERE username='$user'";
$query			= mysqli_query($con, $select);
$rows			= mysqli_num_rows($query);
$fetch			= mysqli_fetch_array($query);


if ($fetch['role'] !== "member") {
			header("Location:../../index.php");
		}
		?>