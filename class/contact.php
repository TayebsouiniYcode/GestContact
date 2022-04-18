<?php 

require_once 'Database.php';


class Contact extends Database{
    private $id;
    private $name;
    private $phone;
    private $email;
    private $address;
    private $fk_user;

    public function __construct(?int $id = null ,?string $name = null, ?string $phone = null, ?string $email = null, ?string $address = null, ?int $fk_user)
    {
        parent::__construct();

        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->fk_user = $fk_user;
    }

    //getters and setters
    public function getId(): int {
        return $this->id;
    }
    public function getName(): string {
        return $this->name;
    }
    public function getPhone(): string {
        return $this->phone;
    }
    public function getEmail(): string {
        return $this->email;
    }
    public function getAddress(): string {
        return $this->address;
    }

    public function setId(int $id){
        if ($id > 0) {
            $this->id = $id;
        }
    }
    public function setName(string $name){
        $this->name = $name;
    }
    public function setPhone(string $phone){
        $this->phone = $phone;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }
    public function setAddress(string $address){
        $this->address = $address;
    }

    public function addContact(){
        try {
            // $this->insert('contact', ['Name'=>$c->name, 'Phone'=>$c->phone, "Email" => $c->email, "Address" => $c->address]);
            $id = $this->insert('contact', ['Name'=>$this->name, 'Phone'=>$this->phone, "Email" => $this->email, "Address" => $this->address, "Id_User" => $this->fk_user]);
            if ($id) 
                echo "success id = " . $id;

            return $id;
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public function deleteContact(){
        $this->delete("contact", "Id = " . $this->id);
    }

    public function updateContact(){
        $this->update("contact", ['Name'=>$this->name, "Phone"=> $this->phone, "Email"=> $this->email, "Address" => $this->address], $this->id);
    }

    // $db->select("user","*");
    public function selectContact($cols, ?string $fk_user){
        $where = "Id_User = " . $fk_user;
        $data = $this->select("contact", $cols, $where);
        return $data;
    }
}

// $c = new Contact (null, 'Ahmed', '0607233671', "Tayebsouini.2@gmail.com", "N1 rue sebta Qu EL Mohammadi");
// $c->addContact();


// $c = new Contact();
// $constraint = "Id = " . 7;
// $c->deleteContact("contact", $constraint);