<?php

class database{
    public function connect()
    {
        $string = "mysql:hostname=localhost;dbname=work_flow";
        $con = new PDO($string,'root','');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    }
    public function query($query, $data= [])
    {
        $con = $this->connect();
        $statement = $con->prepare($query);
        $check = $statement->execute($data);
        if($check){
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        }
        if(is_array($result) && count($result)){
            return $result;

        }
        return false;
    }
    public function get_row($query, $data= [])
    {
        $con = $this->connect();
        $statement = $con->prepare($query);
        $check = $statement->execute($data);
        if($check){
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        }
        if(is_array($result) && count($result)){
            return $result[0];

        }
        return false;
    }
}