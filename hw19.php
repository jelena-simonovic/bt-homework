<?php

class Contact
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
}


$contact1 = new Contact('0606565236', 'jelena.v412@gmail.com');
$contact2 = new Contact('0654311976', 'jelena.v412412@gmail.com');
$contact3 = new Contact('0645631500', 'archecynosure@gmail.com');

echo $contact1->contains("jelena");
echo $contact1->contains("8");
echo $contact2->contains("412");


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


$contactList = new ContactList('', '');

$contactList->addContact($contact1, $contact2, $contact3);

$contactList->listAllContacts();
