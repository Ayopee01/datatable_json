<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=data_db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // ดึงข้อมูลจากฐานข้อมูล
    $stmt = $conn->query("SELECT employee_id, CONCAT(firstname, ' ', lastname) AS employee_title, department_name
    FROM department 
    LEFT JOIN employee
    ON employee.department_id = department.department_id");
    
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // แปลงข้อมูลเป็น JSON
    $json_data = json_encode($users, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    
    // แสดงผล JSON
    header('Content-Type: application/json');
    echo $json_data;
    
} catch(PDOException $e) {
    // แสดงข้อผิดพลาดเป็น JSON
    header('Content-Type: application/json');
    echo json_encode(["error" => "Connection failed: " . $e->getMessage()], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}
?>
