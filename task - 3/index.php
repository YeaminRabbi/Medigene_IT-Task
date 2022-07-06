.<?php 

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



interface VerifiedVisa{
  public function V_visa($id);
}

interface VerifiedPassport{
  public function V_passport($id);
}

class Ticket implements VerifiedVisa,VerifiedPassport{
   public $name;
   public $email;
   public $phone;
   public $gender;
   public $age;

   public $passportStatus = 0;
   public $visaStatus = 0;

   function __construct($name,$email,$age,$phone,$gender)
   {
      $this->name = $name;
      $this->email = $email;
      $this->age = $age;
      $this->phone = $phone;
      $this->gender = $gender;
   }

   function V_passport($id)
   {
      if(isset($id))
      {
        $this->passportStatus = 1;
      }
   }

   function V_visa($id)
   {
      if(isset($id))
      {
        $this->visaStatus = 1;
      }
   }

}


$MyTicket = new Ticket("JellyFish","jelly@gmail.com", "28", "01768002727", "MALE");

echo '<pre>';
print_r($MyTicket);
echo '</pre>';

$MyTicket->V_passport(12312312);
echo '<pre>';
print_r($MyTicket);
echo '</pre>';


$MyTicket->V_visa(12312);
echo '<pre>';
print_r($MyTicket);
echo '</pre>';



?>