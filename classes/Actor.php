<?php

class Actor {
    public $name;
    public $surname;
    public $dateOfBirth;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_surname
     * @param  string $_date_of_birth
     * @return void
     */
    public function __construct(string $_name, string $_surname, string $_date_of_birth)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->dateOfBirth = $_date_of_birth;
    }
    
    /**
     * getFullName - return the full name
     *
     * @return string
     */
    public function getFullName(): string
    {
        return "{$this->name} {$this->surname}";
    }
}