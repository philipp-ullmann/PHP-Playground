<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'users')]
class User
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    public int|null $id = null;

    #[ORM\Column(type: 'string')]
    public string $name;

    #[ORM\Column(type: 'string')]
    public string $username;

    #[ORM\Column(type: 'string')]
    public string $email;


    public function print() {
        echo "Id: ".$this->id;
        echo "\n";
        echo "Name: ".$this->name;
        echo "\n";
        echo "Username: ".$this->username;
        echo "\n";
        echo "Eamil: ".$this->email;
        echo "\n";
    }
}

?>