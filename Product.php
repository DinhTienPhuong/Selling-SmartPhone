<?php
class Product {
    var $proid=null;
    var $proname = null;
    var $procode = null;
    var $proprice = null;
    var $proimage = null;

    function __construct($proid, $proname, $procode, $proprice, $proimage) {
        $this->proid = $proid;
        $this->proname = $proname;
        $this->procode = $procode;
        $this->proprice = $proprice;
        $this->proimage = $proimage;
    }

//    public    function __construct() {
//        if(func_num_args()==4){
//            $this->proid = func_get_args(0);
//            $this->proname = func_get_args(1);
//            $this->proprice = func_get_args(2);
//            $this->proimage = func_get_args(3);
//        }
//    }
    static function getList(){
        $db = new connect();
        $query = "select * from products";
        return $db->getList($query);
    }
    static function getProductById($id) {
        $db = new connect();
        $query = "select * from products where proid= $id";
        return $db->getInstance($query);
    }
    function insert(){
        $db = new connect();
        // $query = "insert into product values(NULL,'".$this->proname."',";
        // $query .= $this->proprice.",'".$this->proimage."')";
        $query = "INSERT INTO products VALUES(Null,'".$this->proname."','".$this->procode."',".$this->proprice.",'".$this->proimage."')";
        //$query .= $this->proprice.",'".$this->proimage."')";
        $db->execute($query);
    }
    function update(){
        $db = new connect();
        $query = "update products set proname = '".$this->proname."', procode='".$this->proicode."',proprice=";
        $query .= $this->proprice.", proimage='".$this->proimage;
        $query .= "' where proid=".$this->proid;
        $db->execute($query);
    }
    function delete(){
        $db = new connect();
        $query = "delete from products where proid = ".$this->proid;
        $db->execute($query);
    }
}