<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';
$test = 'root';

//database user password
$pass = 'MYSQL_PASSWORD';

// database name
$mydatabase = 'MYSQL_DATABASE';
// check the mysql connection status

$conn = new mysqli($host, $user, $pass, $mydatabase);

// select query
$sql = 'SELECT * FROM users';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->username . " " . $user->password;
    echo "<br>";
}
$sql = 'SELECT * FROM Sport';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $Sport[] = $data;
    }
}
$sporttext = "<h1>toll</h1>";
echo $sporttext;

foreach ($Sport as $user) {
    echo "<br>";
    echo $user->sportart . "<b> | </b>" . $user->name;
    echo "<br>";
}

?>
