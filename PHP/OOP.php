<?php
    class User
    {
        protected $name;
        private $age;

        public function __construct($name, $age)
        {
            echo "<br />constructor ran...";
            echo "<br />Class: " . __CLASS__ . " **instantiated**";
            $this->name = $name;
            $this->age = $age;
        }

        public function __destruct()
        {
            echo "<br />destructor ran...";
        }

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function __get($property)
        {
            if(property_exists($this, $property))
                return $this->$property;
        }

        public function __set($property, $value)
        {
            if(property_exists($this, $property))
                $this->$property = $value;

            return $this;
        }

        public function sayHello()
        {
            return $this->name . " says Hello";
        }
    }

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

    $user1 = new User("Martin", 30);

    $user1->setName("Mario");

    echo "<br />" . $user1->getName() . " is " . $user1->__get("age") . " years old";

    $user1->__set("name", "Martin");

    echo "<br />" . $user1->sayHello();

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

    class Customer extends User
    {
        private $balance;

        function __construct($name, $age, $balance)
        {
            echo "<br />Class: " . __CLASS__ . " **instantiated**";
            parent::__construct($name, $age);
            $this->balance = $balance;
        }

        public function getBalance()
        {
            return $this->balance;
        }

        public function pay($amount)
        {
            echo "<br />" . $this->name . " paid $" . $amount;

            $this->balance -= $amount;
        }
    }

    $customer1 = new Customer("Melissa", 27, 500);

    $customer1->pay(100);

    echo "<br />" . $customer1->getBalance();
