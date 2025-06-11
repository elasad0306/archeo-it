<?php
$host = 'localhost';
$username = 'admin_archeo-it';
$password = 'Archeo-It2025';
$database = 'archeo_it';
$charset = 'utf8mb4';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$dsn = "mysql:host=$host;dbname=$database;charset=$charset;port=3306";
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

    if(!empty($_POST['event_title']) && !empty($_POST['event_address']) && !empty($_POST['event_start']) && !empty($_POST['event_end']) && !empty($_POST['other_information'])) {
        $title = $_POST['event_title'];
        $address = $_POST['event_address'];
        $event_start = $_POST['event_start'];
        $event_end = $_POST['event_end'];
        $other_information =$_POST['other_information'];

        $savingEvent = "INSERT INTO agendas (event_name, event_location, start_date, end_date, information_event) VALUES (:event_name, :event_location, :start_date, :end_date, :information_event)";
        $prepareSave = $pdo->prepare($savingEvent);
        $prepareSave->execute([':event_name' => $title, ':event_location' => $address, ':start_date' => $event_start, ':end_date' => $event_end, ':information_event' => $other_information]);
        header("Location: add_event.php");
    }

?>