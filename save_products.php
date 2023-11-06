<?php 
include_once ('config_products.php');

try {
    $pdo = new PDO("mysql:host=" . SERVER_NAME . ";dbname=" . DATABASE_NAME, USER_NAME, PASSWORD);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch (PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
}
$sql = " insert into `products` (`product_name`, `price`, `id_category`, `image`) VALUES ('lalalala', '120', '3', 'img/lala')";

$stmt = $pdo->prepare($sql);

 $stmt->execute();

 header('location: welcome.php');

?>

