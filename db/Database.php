<?php

class Database
{
    private $servername;
    private $username;
    private $password;
    private $database;

    private $connection;

    public function __construct()
    {
        $config = require __DIR__ . '/../config.php';
        $this->servername = $config['host'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->database = $config['database'];
        $this->connection = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
        // set the PDO error mode to exception
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * @return PDO
     */
    public function getConnection()
    {
        return $this->connection;
    }

    public function loginUser($email, $password)
    {
        $stmt = $this->getConnection()
            ->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();
        if (!$user || !password_verify($password, $user['password'])){
            return false;
        }
        $_SESSION['currentUser'] = $user;
        return true;
    }

    public function signupUser($email){
        $stmt = $this->getConnection()
            ->prepare("SELECT COUNT(email) FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();
        return $user ["COUNT(email)"];
    }

    public function createRecord($fullname,$email,$password){
        $sql = "INSERT INTO users (full_name, email, password,reg_date)
                VALUES ('$fullname', '$email', '" . password_hash($password, PASSWORD_BCRYPT) . "',(now()))";
        $this->connection->exec($sql);
    }

    public function setPost($user_id,$cname,$company,$category,$city,$ganakveti,$pirobebi)
    {
        $conn = $this->getConnection();
        $sql = "INSERT INTO jobs (user_id,cname,company,category,city,ganakveti,pirobebi,public_date)
        VALUES ('$user_id','$cname','$company','$category','$city','$ganakveti','$pirobebi',(now()))";
        $conn->exec($sql);
    }
    public function getAllPost()
    {
        $conn = $this->getConnection();
        $sql="SELECT cname, company, public_date from jobs";
        $result=$conn->query($sql );
        if($result->num_rows>0){
            while($row=$result-> fetch_assoc()){
                var_dump($row['id']);
            }
        }
    }










}
