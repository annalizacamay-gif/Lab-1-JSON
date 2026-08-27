<?php
 $jsonInput = file_get_contents('php://input');
 $data = json_decode($jsonInput, true);

echo "Username: " . $data['username'] . "\n";
echo "Password: " . $data['password'];