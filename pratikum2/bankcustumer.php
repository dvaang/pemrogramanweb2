<?php

class BankCustumer{
    private string $custumerName;
    private string $address;
    private string $email;
    private string $card;
    protected string $acc;

    //constructor
    public function __construct()
    {
        // $this->email = "Ini email_default_@gmail.com";
    }

    // destruct
    public function __destruct()
    {
        echo "koneksi sudah selesai";
    }

    public function setCustumerName($custumerName){
        $this->custumerName = $custumerName;
    }

    public function setAddress($address){
        $this->address = $address;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setCard($card)
    {
        $this->card = $card;
    }

    public function setAcc($acc)
    {
        $this->acc = $acc;
    }

    public function insertCard(){
       echo "Kartu dimasukan : <br>";
       echo "nama custumer:". $this->custumerName . '<br>';
       echo "alamat:". $this->address . '<br>';
       echo "email:". $this->email . '<br>';
       echo "card:". $this->card . '<br>';
       echo "acc:". $this->acc . '<br>';
    }
     
    public function selectTransaction(){

    }

    public function enterPIN(int $number){
        echo "PIN telah di enter:". $number;
    }

    public function changePIN(){

    }

    public function withDrawCash(){

    }

    public function requestTransactionSummary(){

    }

    public function acceptAmount(){

    }
}
?>
