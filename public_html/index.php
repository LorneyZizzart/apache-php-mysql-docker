<h1>Hello Cloudreach!sssss</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php

// phpinfo();
$host = 'mysql';
$user = 'otherUser';
$pass = 'password';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL successfully!";
}

?>