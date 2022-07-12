<?php
  include('includes/config.php');

  
  function loadSem() {
  	$db = new DbConnect;
  	$conn = $db->connect();

  	$stmt = $conn->prepare("SELECT * FROM semester");
  	$stmt->execute();
  	$semester = $stmt->fetchAll(PDO::FETCH_ASSOC);
  	return $semester;
  }

 ?>