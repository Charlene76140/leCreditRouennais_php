<?php
    class Account{
        protected int $id;
        protected string $account_type;
        protected string $account_number;
        protected float $account_amount;
        protected int $account_fees;
        protected $creation_date;
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
            return htmlspecialchars($this->id);
        }

        public function setAccount_type(string $account_type){
            $this->account_type= $account_type;
        }

        public function getAccount_type(){
            return htmlspecialchars($this->account_type);
        }

        public function setAccount_number(string $account_number){
            $this->account_number= $account_number;
        }

        public function getAccount_number(){
            return htmlspecialchars($this->account_number);
        }

        public function setAccount_amount(float $account_amount){
            $this->account_amount= $account_amount;
        }

        public function getAccount_amount(){
            return htmlspecialchars($this->account_amount);
        }

        public function setAccount_fees(string $account_fees){
            $this->account_fees= $account_fees;
        }

        public function getAccount_fees(){
            return htmlspecialchars($this->account_fees);
        }

        public function setCreation_date(string $creation_date){
            $this->creation_date= $creation_date;
        }

        public function getCreation_date(){
            return htmlspecialchars($this->creation_date);
        }

        public function setCustomer_id(string $customer_id){
            $this->customer_id= $customer_id;
        }

        public function getCustomer_id(){
            return htmlspecialchars($this->customer_id);
        }

    }
?>