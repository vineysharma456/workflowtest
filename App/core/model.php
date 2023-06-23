<?php

class model extends database{



    public $table = 'admin';
    protected $limit = 10;
    protected $offset = 0;
    protected $order_type 	= "desc";
	protected $order_column = "id";
    public function where($data,$data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select * from $this->table where ";
        foreach($keys as $key){
            $query .= $key." = :".$key . " && ";
        }
        foreach($keys_not as $key){
            $query .= $key . "!= :". $key . "&&";
        }
        $query = trim($query," && ");
        $query .= " limit $this->limit offset $this->offset";
    //    echo $query;
        // $this->query($query,[]);
        $data = array_merge($data,$data_not);
        return $this->query($query,$data);

    }
    public function first($columns){

      
        $query = "select $columns from $this->table ";
        
        $result = $this->query($query);
      return $result;
    
    }
    public function third(){

      
        $query = "select * from $this->table ";
        
        $result = $this->query($query);
      return $result;
    
    }
    public function second($id,$give){

      
        $query = "select `$id` from $this->table where emp_id ='$give' ";
        
        $result = $this->query($query);
      return $result;
    
    }

    public function insert($data){
        $keys = array_keys($data);
        $query = "insert into $this->table (".implode(",",$keys).")  values (:".implode(",:",$keys).") ";

     
   
     return $this->query($query,$data);
    }



 public function update($data,$id_column)
{
    $keys = array_keys($data);
    $values = array_values($data);
    $query = "UPDATE `$this->table` SET ";
    $bindings = array();

    for ($i = 0; $i < count($keys); $i++) {
        $query .= $keys[$i] . ' = :' . $keys[$i] . ', ';
        $bindings[':' . $keys[$i]] = $values[$i];
    }

    $query = trim($query, ", ");
    $query .= " WHERE `id` = :id";
    $bindings[':id'] = $id_column;
    return $this->query($query,$data);
}
public function update3($data,$id_column)
{
    $keys = array_keys($data);
    $values = array_values($data);
    $query = "UPDATE `$this->table` SET ";
    $bindings = array();

    for ($i = 0; $i < count($keys); $i++) {
        $query .= $keys[$i] . ' = :' . $keys[$i] . ', ';
        $bindings[':' . $keys[$i]] = $values[$i];
    }
    
    $query = trim($query, ", ");
    $query .= " WHERE `emp_id` = :emp_id";
    $bindings[':emp_id'] = $id_column;
    
    
    return  $this->query($query, $bindings);
   
}
public function update2($data,$id_column)
{
    $keys = array_keys($data);
    $values = array_values($data);
    $query = "UPDATE `$this->table` SET ";
    $bindings = array();

    for ($i = 0; $i < count($keys); $i++) {
        $query .= $keys[$i] . ' = :' . $keys[$i] . ', ';
        $bindings[':' . $keys[$i]] = $values[$i];
    }
    
    $query = trim($query, ", ");
    $query .= " WHERE `task_no` = :task_no";
    $bindings[':task_no'] = $id_column;
    
    //   echo $query;
    return  $this->query($query, $bindings);
   
}

    public function delete($id,$id_column='status'){
        $data[$id_column]= $id;
        $query = "delete from $this->table where $id_column = :$id_column";
        echo $query;
        // $this->query($query,$data);
        // return false;
        
    }
    
}