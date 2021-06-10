<?php
    class Customer{
        protected int $id;
        protected string $email;
        protected string $user_password;
        protected string $firstname;
        protected string $lastname;
        protected string $street_number;
        protected string $street_address;
        protected string $area_code;
        protected string $city;

        public function __construct(?array $data=null) {
            if($data){
                foreach($data as $key=>$value){
                    $setter= "set". ucfirst($key);
                    if(method_exists($this,$setter)){
                        $this->$setter(htmlspecialchars($value));
                    }
                }
            }
        }

        public function setId(int $id){
            $this->id= $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setEmail(string $email){
            $this->email = $email;
        }
        public function getEmail(){
            return $this->email;
        }

        public function setUser_password(string $user_password){
            $this->user_password = $user_password;
        }

        public function getUser_password(){
            return $this->user_password;
        }

        public function setFirstname(string $firstname) {
            $this->firstname = $firstname;
        }

        public function getFirstname() {
            return $this->firstname;
        }

        public function setLastname(string $lastname) {
            $this->lastname = $lastname;
        }

        public function getLastname() {
            return $this->lastname;
        }

        public function setStreet_number(string $street_number) {
            $this->street_number = $street_number;
        }

        public function getStreet_number() {
            return $this->street_number;
        }

        public function setStreet_address(string $street_address) {
            $this->street_address = $street_address;
        }

        public function getStreet_address() {
            return $this->street_address;
        }

        public function setArea_code(string $area_code) {
            $this->area_code = $area_code;
        }

        public function getArea_code() {
            return $this->area_code;
        }

        public function setCity(string $city) {
            $this->city = $city;
        }

        public function getCity() {
            return $this->city;
        }
    }
?>