<?php
require 'UserService.php';

$userService = new UserService();

// Registering users
if ($userService->registerUser('john_doe', 'password123', 'john@example.com')) {
    echo "User registered successfully!";
} else {
    echo "Username already exists.";
}

// Authenticating users
if ($userService->authenticateUser('john_doe', 'password123')) {
    echo "Authentication successful!";
} else {
    echo "Authentication failed.";
}
?>
