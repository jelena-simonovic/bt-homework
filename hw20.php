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
  public function contains($text = "")
  {
    if (str_contains($this->phone, $text) || str_contains($this->email, $text)) {
      return $this->phone . " " . $this->email . "<br>";
    }
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

  public function displayMe()
  {
    //override + ispisi sve atribute ove klase
  }
}

class BusinessContact extends Contact
{
  protected $address;
  protected $companyName;

  public function displayMe()
  {
    //override + ispisi sve atribute ove klase
  }
}


class ContactList extends Contact
{
  protected $contacts = [];

  public function setValue($contacts, $phone, $email)
  {
    $this->contacts = $contacts;
    $this->phone = $phone;
    $this->email = $email;
  }
  public function getValue()
  {
    return $this->contacts;
    return $this->phone;
    return $this->email;
  }
  public function addContact($contact1, $contact2, $contact3)
  {
    if ($contact1 instanceof Contact) {
      array_push($this->contacts, $contact1);
    }
    if ($contact2 instanceof Contact) {
      array_push($this->contacts, $contact2);
    }
    if ($contact3 instanceof Contact) {
      array_push($this->contacts, $contact3);
    }
    return $this->contacts;
  }
  public function listAllContacts()
  {
    foreach ($this->contacts as $contact) {
      foreach ($contact as $contactListed) {
        echo $contactListed . "<br>";
      }
    }
  }
}

/*
  Postaviti da ne moze da se kreira objekat klase Contact, 
  vec samo klase CustomerContact i BusinessContact.

Na kraju kreirati po 2 objekta CustomerContact i 
BusinessContact klasa. Dodati ih u objekat ContactList i 
ispisati sve kontakte.

foreach($this->contacts as $contact) {
	echo $contact->displayMe();
}
*/