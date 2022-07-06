<?php 

class Bank
{
    public $bankName;
    public $bankType;

    function __construct($name,$type)
    {
      $this->bankName = $name;
      $this->bankType = $type;
    }
}


class BackAccount extends Bank{
    public $accountHolderName;
    public $accountHolderPhone;
    public $accountHolderEmail;
    public $accountNo;
    public $accountType;
    private $pin;
    private $balance;
    function __construct($actNo,$actType, $bankName, $bankType)
    {
        parent::__construct($bankName, $bankType);
        $this->accountNo = $actNo;
        $this->accountType = $actType;
        
    }

    function get_pin()
    {
        return $this->pin;
    }

    function set_accountHolder($name,$email,$phone,$pin,$balance)
    {
        $this->accountHolderName = $name;
        $this->accountHolderEmail = $email;
        $this->accountHolderPhone = $phone;
        $this->pin = $pin;
        $this->balance = $balance;
    }

}

interface AccountPermission {
    public function getAccountPermission();
  }


//creating a bankAccount Object
$accountRabbi = new BackAccount("122422551231665","SAVINGS","Uttara Bank", "Private");

//seting the account holder information
$accountRabbi->set_accountHolder("Rabbi", "yeamin@gmail.com", "0176800272","AT4578","50000");



// print_r($accountRabbi->accountHolderName);
// print_r($accountRabbi->accountHolderEmail);
// print_r($accountRabbi->accountHolderPhone);
// print_r($accountRabbi->get_pin());

echo '<pre>';
print_r($accountRabbi);
echo '</pre>';





interface Animal {
    public function makeSound();
  }
  
  // Class definitions
  class Cat implements Animal {
    public function makeSound() {
      echo " Meow ";
    }
  }
  
  class Dog implements Animal {
    public function makeSound() {
      echo " Bark ";
    }
  }
  
  class Mouse implements Animal {
    public function makeSound() {
      echo " Squeak ";
    }
  }
  
  // Create a list of animals
  $cat = new Cat();
  $dog = new Dog();
  $mouse = new Mouse();
  $animals = array($cat, $dog, $mouse);
  
  // Tell the animals to make a sound
  foreach($animals as $animal) {
    $animal->makeSound();
  }

?>