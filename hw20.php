<?php

abstract class Contact
{
  protected $phone;
  protected $email;

  public function __construct($phone, $email)
  {
    $this->phone = $phone;
    $this->email = $email;
  }
  private function setValues($phone, $email)
  {
    $this->phone = $phone;
    $this->email = $email;
  }
  public function getValues()
  {
    return $this->phone;
    return $this->email;
  }
  public function displayMe()
  {
    echo $this->phone;
    echo $this->email;
  }
}

class CustomerContact extends Contact
{
  protected $firstName;
  protected $lastName;

  public function __construct($firstName, $lastName, $phone, $email)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    parent::__construct($phone, $email);
  }

  public function displayMe()
  {
    echo $this->phone;
    echo $this->email;
    echo $this->firstName;
    echo $this->lastName;
  }
}

class BusinessContact extends Contact
{
  protected $address;
  protected $companyName;

  public function __construct($address, $companyName, $phone, $email)
  {
    $this->address = $address;
    $this->companyName = $companyName;
    parent::__construct($phone, $email);
  }

  public function displayMe()
  {
    echo $this->phone;
    echo $this->email;
    echo $this->address;
    echo $this->companyName;
  }
}

$customerContact1 = new CustomerContact('Jelena', 'Simonovic', '0606565236', 'jelena.v412@gmail.com');
$customerContact2 = new CustomerContact('Simona', 'Jelenkovic', '0654311976', 'jelena.v412412@gmail.com');
$businessContact1 = new BusinessContact('Prva proleterska', 'COING', '0645631500', 'archecynosure@gmail.com');
$businessContact2 = new BusinessContact('Ravanicka', 'Livingston', '0606060606', 'lalala@gmail.com');

class ContactList extends Contact
{
  protected $contacts = [];

  public function setValue($contacts, $phone, $email)
  {
    $this->contacts = $contacts;
  }
  public function getValue()
  {
    return $this->contacts;
  }
  public function addContact($customerContact1, $customerContact2, $businessContact1, $businessContact2)
  {
    if ($customerContact1 instanceof Contact) {
      array_push($this->contacts, $customerContact1);
    }
    if ($customerContact2 instanceof Contact) {
      array_push($this->contacts, $customerContact2);
    }
    if ($businessContact1 instanceof Contact) {
      array_push($this->contacts, $businessContact1);
    }
    if ($businessContact2 instanceof Contact) {
      array_push($this->contacts, $businessContact2);
    }
    return $this->contacts;
  }
  public function displayMe()
  {
    parent::displayMe();
  }
  public function listAllContacts()
  {
    foreach ($this->contacts as $contact) {
      echo $contact->displayMe() . "<br>";
    }
  }
}

$contactList = new ContactList("", "");

$contactList->addContact($customerContact1, $customerContact2, $businessContact1, $businessContact2);

$contactList->listAllContacts();
