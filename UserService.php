<?php
require 'User.php';

class UserService {
    private $users = [];

    // Register a new user
    public function registerUser($username, $password, $email) {
        if (isset($this->users[$username])) {
            return false; // Username already exists
        }

        $newUser = new User($username, $password, $email);
        $this->users[$username] = $newUser;
        return true;
    }

    // Authenticate user
    public function authenticateUser($username, $password) {
        if (isset($this->users[$username]) && $this->users[$username]->getPassword() === $password) {
            return true; // Authentication successful
        }

        return false; // Authentication failed
    }
}
?>
