<?php
    class Operation {
        protected int $id;
        protected string $type_of_operation;
        protected string $label; 
        protected $operation_date;
        protected float $amount; 
        protected int $account_id;

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

        public function setType_of_operation(string $type_of_operation){
            $this->type_of_operation= $type_of_operation;
        }

        public function getType_of_operation(){
            return htmlspecialchars($this->type_of_operation);
        }

        public function setLabel(string $label){
            $this->label= $label;
        }

        public function getLabel(){
            return htmlspecialchars($this->label);
        }

        public function setOperation_date(string $operation_date){
            $this->operation_date= $operation_date;
        }

        public function getOperation_date(){
            return htmlspecialchars($this->operation_date);
        }

        public function setAmount(float $amount){
            $this->amount= $amount;
        }

        public function getAmount(){
            return htmlspecialchars($this->amount);
        }

        public function setAccount_id(int $account_id){
            $this->account_id= $account_id;
        }

        public function getAccount_id(){
            return htmlspecialchars($this->account_id);
        }
    }
?>