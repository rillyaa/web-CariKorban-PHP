<?php
include '..\connection.php';

class Auth extends Connection
{
    protected $conn;
    public function __construct()
    {
        $this->conn = $this->get_connection();

        session_start();
    }

    public function login($username, $password)
    {
        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $bind = $this->conn->query($sql);
        $baris = $bind->fetch_object();
        if ($baris != null) {
            $_SESSION['username'] = $username;
            header('location:..\views\datahilang.php');
        } else {
            header('location:..\views\login.php?msg=error');
        }
    }

    public function logout()
    {

        // Hapus session 

        session_destroy();

        // Hapus user_session 

        unset($_SESSION['username']);
    }
}