<?php
  $data = json_decode(file_get_contents('php://input'), true);
  $uniqueCode = $data['uniqueCode'];
  $moduleData = $data['moduleData'];

  $filePath = "modules_data/{$uniqueCode}.json";
  $result = file_put_contents($filePath, json_encode($moduleData));

  if ($result === false) {
    http_response_code(500);
    echo 'Failed to save modules to file.';
  } else {
    echo 'Modules saved successfully.';
  }
?>
