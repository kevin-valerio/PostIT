<?php



$servername = "mysql-kevinv.alwaysdata.net";
$username = "kevinv";
$password = "kevinv";
$dbname = "kevinv_postit";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
$result = $conn->query("SELECT * FROM post");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row['date'] ==  date('d/m/Y')){
            $parts = explode("@", $row['mail']);
            $to      = $row['mail'];
            $subject = 'Bonjour ' . $parts[0] . ', vous avez une nouvelle tâche à accomplir aujourd\'hui ! ';
            $message = '
            <html>
                <h1>Bonjour ' . $parts[0] . '  vous avez une nouvelle tâche aujourd\'hui !</h1>
                <hr>
                <p>Votre tâche est prévue pour <b>' . $row['heure'] . '</b></p>
                <br>
                <p>Pour rappel, voici la tâche prévue : <pre>' . $row['contenu' ] . '</pre></p>
            </html>
             ';
            echo "Maiel envoyé à " . $to . "<br> <br> " . $message . '<br><br>' . $subject;
        }
    }
}
$conn->close();


?>