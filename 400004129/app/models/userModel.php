<?php
class UserModel
{
    private $username;
    private $password;
    private $email;
    private $role;

    public function getRole()
    {
        $conn = new dbConn();
        // Check connection
        if ($conn->connectErr()) {
            die("Connection failed: " . $conn->connectErr());
        }


        $sql = "SELECT role FROM users WHERE email = '$this->email'";
        $result = $conn->queryDb($sql);


        //checking if hashed password in database matches with passowrd inputted in login view
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $role = $row['role'];
                return $role;
            }
        }
        $conn->closeConn();
    }

    public function getEmail()
    {
        $conn = new dbConn();
        // Check connection
        if ($conn->connectErr()) {
            die("Connection failed: " . $conn->connectErr());
        }


        $sql = "SELECT email FROM users WHERE email = '$this->email'";
        $result = $conn->queryDb($sql);


        //checking if hashed password in database matches with passowrd inputted in login view
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $email = $row['email'];
                return $email;
            }
        }
        $conn->closeConn();
    }

    public function getUserName()
    {
        $conn = new dbConn();
        // Check connection
        if ($conn->connectErr()) {
            die("Connection failed: " . $conn->connectErr());
        }


        $sql = "SELECT username FROM users WHERE email = '$this->email'";
        $result = $conn->queryDb($sql);


        //checking if hashed password in database matches with passowrd inputted in login view
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $username = $row['username'];
                return $username;
            }
        }
        $conn->closeConn();
    }

    public function create($username, $password, $email, $role)
    {
        $conn = new dbConn();
        // Check connection
        if ($conn->connectErr()) {
            die("Connection failed: " . $conn->connectErr());
        }

        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->role = $role;

        $sql = "INSERT INTO users (username, password, email, role)
        VALUES ('$this->username','$this->password', '$this->email','$this->role')";

        if ($conn->queryDb($sql) === TRUE) {
            echo "User created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->err();
        }

        $conn->closeConn();
    }
    public function getUserAndPassword(string $email, string $password)
    {

        $conn = new dbConn();
        // Check connection
        if ($conn->connectErr()) {
            die("Connection failed: " . $conn->connectErr());
        }

        $this->email = $email;
        $this->password = $password;

        $sql = "SELECT email, password FROM users WHERE email = '$this->email'";
        $result = $conn->queryDb($sql);


        //checking if hashed password in database matches with password entered in login view
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dbPassword = $row['password'];
                if (password_verify($this->password, $dbPassword)) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }

        $conn->closeConn();
    }
}
