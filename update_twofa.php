<?php
// Path to the JSON file
$jsonFile = "data.json";

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? null;
    $newTwofaCode = $_POST['new_twofacode'] ?? null;

    if (!$email || !$newTwofaCode) {
        die("Error: Missing email or new two-factor code.");
    }

    // Read existing JSON file
    if (!file_exists($jsonFile) || filesize($jsonFile) == 0) {
        die("Error: JSON file missing or empty.");
    }

    $jsonData = file_get_contents($jsonFile);
    $records = json_decode($jsonData, true);

    // Validate JSON format
    if (!is_array($records)) {
        die("Error: Invalid JSON format.");
    }

    // Find and update the record
    $updated = false;
    foreach ($records as &$record) {
        if ($record['email'] === $email) {
            $record['twofacode'] = $newTwofaCode;
            $updated = true;
            break;
        }
    }

    // Save back to JSON file
    if ($updated) {
        file_put_contents($jsonFile, json_encode($records, JSON_PRETTY_PRINT));
        echo "Success: Two-factor code updated!";
    } else {
        echo "Error: Email not found.";
    }
}
?>
