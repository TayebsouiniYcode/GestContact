<?php 
    require 'Database.php';
    require 'contact.php';

class User extends Database {
    private $id;
    private $username;
    private $password;
    private $signUpDate;
    private $lastLoginDate;

    public $contactList = array();

    public function __construct(?int $_id, $_username, $_password, ?string $_signUpDate)
    {
        parent::__construct();

        $now = new DateTime();
        $this->id = $_id;
        $this->username = $_username;
        $this->password = $_password;
        $this->signUpDate = $_signUpDate;
        $this->lastLoginDate = $now->format('Y-m-d H:i:s');
    }

    //getters and setters 
    public function getId(): int {
        if ($this->id != null){
            return $this->id;
        } else {
            return -1;
        }
    }
    public function getUsername(): string {
        return $this->username;
    }
    public function getPassword(): string {
        return $this->password;
    }
    public function getSignUpDate(): string {
        return $this->signUpDate;
    }
    public function getLastLoginDate(): string {
        return $this->lastLoginDate;
    }
    public function getContactList(): array{
        return $this->contactList;
    }

    public function setId(int $id) {
        if ($id > 0){
            $this->id = $id;
        } else {
            echo 'Id invalid';
        }
    }
    public function setUsername(string $username){
        $this->username = $username;
    }
    public function setPassword(string $password){
        $this->password = $password;
    }
    public function setSignUpDate(string $date){
        $this->signUpDate = $date;
    }
    public function setLastLoginDate(string $date){
        $this->lastLoginDate = $date;
    }
    public function setContact(Contact $c){
        $this->contactList[] = $c;
    }

    public function login(string $username, string $password): User{
        $where = "Username = '$username'";
        $checkUsername = $this->select("User", "Username", $where);
        if($checkUsername){
            $where = "Username = '$username' and Password = '$password'";
            $checkAccount = $this->select("User", "Id, Username, Password, SignUpDate", $where);
            if ($checkAccount) {
                echo "welcome!";
                // $date = strtotime($checkAccount[0]['SignUpDate']); 
                // $date = date("Y-m-d H:i:s", $date);
                // var_dump($date);

                $u = new User($checkAccount[0]['Id'], $checkAccount[0]['Username'], $checkAccount[0]['Password'], $checkAccount[0]['SignUpDate'] );
                return $u;
            } else {
                echo "password incorrect";
                return new User(null, $username, $password, null);
            }
        } else {
            echo "not exist";
            return new User(null, $username, $password, null);;
        }
    }

    public function signUp(string $username, string $password): User{
        $where = "Username = '$username'";
        $checkUsername = $this->select("User", "Username", $where);
        if(!$checkUsername){
            try {
                $currentDate = new DateTime();
                $idu = $this->insert("user", ['Username'=>$username,'Password'=>$password,'SignUpDate'=>$currentDate->format('Y-m-d H:i:s') ]);
                $u = new User($idu, $username, $password, $currentDate->format('Y-m-d H:i:s'), $currentDate->format('Y-m-d H:i:s'));
                // echo "success";
            } catch (PDOException $e){
                echo $e->getMessage();
            }
        } else {
            echo "already exist";
        }
        return $u;
    }

    public function selectContact(){
        $this->contactList = $this->select("contact", "*", "Id_User = " . $this->id);
    }

    public function toString(){
        echo "Id : " . $this->id .  " username : ". $this->username . " password : " . $this->password . " Signup date : " . $this->signUpDate . " Last login date : " . $this->lastLoginDate; 
    }
}

// $user = new User(1, "Tayebsouini", "2423124", "14/01/2022");
// $user->toString();
// echo "<br>";
// $user = clone $user->login('Ahmed', "232323");
// echo "<br>";
// echo "user final";
// var_dump($user);
// $u = clone $user->signUp('KT', "12345");
// var_dump($u);

