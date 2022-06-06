<?php

abstract class Contact {
    protected $phone;
    protected $email;

    public function __construct($phone, $email)
    {
        $this->phone = $phone;
        $this->email = $email;
    }

    public function getPhone() {
        return $this->phone;
    }
    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function contains($text = "") {
        if(str_contains($this->phone, $text) || str_contains($this->email, $text)) {
            return true;
        }
        return false;
    }

    public function displayMe() {
        echo "Email: " . $this->getEmail() . ", Phone: " . $this->getPhone() . ".<br>";
    }
}

class CustomerContact extends Contact {
    protected $first_name;
    protected $last_name;

    public function __construct($first_name, $last_name, $phone, $email)
    {
        parent::__construct($phone, $email);
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function displayMe()
    {
        echo "First name: " . $this->first_name . ", Last name: " . $this->last_name . ".<br>";
        parent::displayMe();
    }
}

class BusinessContact extends Contact {
    protected $company_name = "";
    protected $address;

    public function __construct($company_name, $address, $phone, $email)
    {
        parent::__construct($phone, $email);
        $this->company_name = $company_name;
        $this->address = $address;
    }

    public function displayMe()
    {
        echo "Company name: " . $this->company_name . ", Address: " . $this->address . ".<br>";
        parent::displayMe();
    }
}


class ContactList {
    private $contacts = [];

    public function addContact($contact): ContactList {
        if($contact instanceof Contact) {
            $this->contacts[] = $contact;
        }
        return $this;
    }

    public function listAllContacts() {
        foreach ($this->contacts as $contact) {
            echo $contact->displayMe();
        }
    }
} 


$contactList = new ContactList();

$customerContact1 = new CustomerContact("Petar", "Jurisic", "0641234565", "petar.jurisic@gmail.com");
$customerContact2 = new CustomerContact("Jovan", "Jovanovic", "0641789987", "jovan.jovanovic@gmail.com");
$bussinesContact1 = new BusinessContact("Milka", "Nemacka", "0641789987", "milka.cokolada@gmail.com");
$bussinesContact2 = new BusinessContact("Stark", "Srbija", "0641789987", "stark.arena@gmail.com");

$contactList->addContact($customerContact1);
$contactList->addContact($customerContact2);
$contactList->addContact($bussinesContact1);
$contactList->addContact("NEsto drugo");
$contactList->addContact($bussinesContact2);

$contactList->listAllContacts();
