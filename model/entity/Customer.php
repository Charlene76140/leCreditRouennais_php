<?php
    class Customer{
        protected int $id;
        protected string $email;
        protected string $user_password;
        protected string $firstname;
        protected string $lastname;
        protected string $street_number;
        protected string $street_adress;
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

        public function setEmail(string $email){
            $this->email = $email;
        }
        public function getEmail(){
            return $this->email;
        }

        public function setUser_Password(string $user_password){
            $this->user_password = $user_password;
        }

        public function getUser_Password(){
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
    }
?>