<?php
    $teamleadername = $_POST['teamleadername'];
    $teamleaderemail = $_POST['teamleaderemail'];
    $teamleaderphone = $_POST['teamleaderphone'];
    $member1name = $_POST['member1name'];
    $member1email = $_POST['member1email'];
    $member1phone = $_POST['member1phone'];
    $member2name = $_POST['member2name'];
    $member2email = $_POST['member2email'];
    $member2phone = $_POST['member2phone'];
    $member3name = $_POST['member3name'];
    $member3email = $_POST['member3email'];
    $member3phone = $_POST['member3phone'];
    //Database connection
    $conn = new mysqli('localhost','root','','test1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into testregistration(teamleadername, teamleaderemail, teamleaderphone, member1name, member1email, member1phone,member2name,member2email,member2phone,member3name,member3email,member3phone) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
		$stmt->bind_param("ssissississi", $teamleadername, $teamleaderemail, $teamleaderphone, $member1name, $member1email, $member1phone,$member2name, $member2email, $member2phone,$member3name, $member3email, $member3phone);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successful";
		$stmt->close();
		$conn->close();
	}
?>