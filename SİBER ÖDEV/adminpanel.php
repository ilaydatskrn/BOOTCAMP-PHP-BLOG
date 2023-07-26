<?php
include("baglanti.php");

$db = new Database();

$baglan = $db->database.db();

$sorgu = $baglan->query("SELECT * FROM contact");
while ($row = $sorgu->fetch_assoc()) {
   
    echo "Full Name: " . $row["fullname"] . "<br>";
    echo "Email Address: " . $row["email"] . "<br>";
    echo "Subject: " . $row["subject"] . "<br>";
    echo "Message: " . $row["message"] . "<br>";
}
?>



<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Contact Form Messages</h1>

<table id="customers">
  <tr>
    <th>Full Name</th>
    <th>Email Address</th>
    <th>Subject</th>
    <th>Message</th>
  </tr>
  
  <?php

  include("baglanti.php");

  $sorgu = $baglan->prepare("SELECT fullname, email, subject, message FROM contact");
  $sorgu->execute();

  $sonuclar = $sorgu->get_result();
  while ($row = $sonuclar->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . htmlspecialchars($row['fullname']) . "</td>";
      echo "<td>" . htmlspecialchars($row['email']) . "</td>";
      echo "<td>" . htmlspecialchars($row['subject']) . "</td>";
      echo "<td>" . htmlspecialchars($row['message']) . "</td>";
      echo "</tr>";
  }

  $sorgu->close();
  ?>
</table>

</body>
</html>
