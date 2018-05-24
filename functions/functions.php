<?php
$conn=mysqli_connect("localhost","root","","bookBucket");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//getting branches
function getBranch(){
	global $conn;

	$getBranch="SELECT * FROM branch";
	$runBranch=mysqli_query($conn, $getBranch);

	while ($rowBranch=mysqli_fetch_array($runBranch)) {
		$branchId=$rowBranch['branchId'];
		$branchName=$rowBranch['branchName'];
		
		echo "<li><a href='#' style='text-decoration: none;'>$branchName</a></li>";
	}
}
//getting semesters
function getSemester(){
	global $conn;

	$getSemester="SELECT * FROM semester";
	$runSemester=mysqli_query($conn, $getSemester);

	while ($rowSemester=mysqli_fetch_array($runSemester)) {
		$semesterId=$rowSemester['semesterId'];
		$semesterName=$rowSemester['semesterName'];
		
		echo "<li><a href='#' style='text-decoration: none;'>$semesterName</a></li>";
	}
}








?>