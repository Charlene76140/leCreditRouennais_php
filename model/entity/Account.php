<?php
    class Account{
        protected int $id;
        protected string $account_type;
        protected string $account_number;
        protected int $account_amount;
        protected int $customer_id;

        public function __construct(?array $data=null){
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

        public function setAccount_type(string $account_type){
            $this->account_type= $account_type;
        }

        public function getAccount_type(){
            return $this->account_type;
        }

        public function setAccount_number(string $account_number){
            $this->account_number= $account_number;
        }

        public function getAccount_number(){
            return $this->account_number;
        }

        public function setAccount_amount(string $account_amount){
            $this->account_amount= $account_amount;
        }

        public function getAccount_amount(){
            return $this->account_amount;
        }

        public function setCustomer_id(string $customer_id){
            $this->customer_id= $customer_id;
        }

        public function getCustomer_id(){
            return $this->customer_id;
        }

    }
?>