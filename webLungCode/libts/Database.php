<?php
class Database{
    protected $conn;
    protected $table;
    protected $join_table;
    protected $sql;
    protected $limit = 0;

    public function __construct() {
        $this->conn = new mysqli(HOST, USER, PASSWORD, DB);
    }

    public static function select($field = "*") {
        $_this = new static;
        $_this->sql = "SELECT $field FROM $_this->table";
        return $_this;
    }

    public static function join($field = "*",$fk ,$joinString) {
        $_this = new static;
        $mangKey = explode(', ', $field);
        $fieldString = '';
        
        foreach ($mangKey as $val) {
            $fieldString .= "$_this->table.$val, ";
        }

        $fieldString .= $joinString;
        $_this->sql = "SELECT $fieldString FROM $_this->table JOIN 
        $_this->join_table ON $_this->table.$fk = $_this->join_table.id";

        return $_this;
    }

    public static function leftJoin($field = "*", $fk, $joinString) {
        $_this = new static;
        $mangKey = explode(', ', $field);
        $fieldString = '';

        foreach ($mangKey as $val) {
            $fieldString .= "$_this->table.$val, ";
        }

        $fieldString .= $joinString;
        $_this->sql = "SELECT $fieldString FROM $_this->table LEFT JOIN 
        $_this->join_table ON $_this->table.$fk = $_this->join_table.$fk";
        return $_this;
    }

    public static function rightJoin($field = "*", $fk, $joinString) {
        $_this = new static;
        $mangKey = explode(', ', $field);
        $fieldString = '';

        foreach ($mangKey as $val) {
            $fieldString .= "$_this->table.$val, ";
        }

        $fieldString .= $joinString;
        $_this->sql = "SELECT $fieldString FROM $_this->table RIGHT JOIN 
        $_this->join_table ON $_this->table.$fk = $_this->join_table.$fk";

        return $_this;
    }

    public function limit($limit = 25) {
        $this->limit = $limit;
        return $this;
    }

    public function orderBy($field, $order) {
        $this->sql .= " Order By $field $order";
        return $this;
    }

    public function get() {
        $result = [];
        if($this->limit > 0){
            $this->sql .= " LIMIT $this->limit";
        }
        $query = $this->conn->query($this->sql);

        while($row = $query->fetch_object()) {
            $result[] = $row;
        }

        return $result; //array row object
    }
    
    public function where() {
        $args = func_get_args();
        $n = count($args);
        if($n > 0){
            if($n == 3){
                $field = $args[0];
                $op = $args[1];
                $val = $args[2];
                $this->sql .= " WHERE $this->table.$field $op '".mysqli_real_escape_string($this->conn, $val)."'";
            }else if( $n == 2){
                $field = $args[0];
                $val = $args[1];
                $this->sql .= " WHERE $this->table.$field = '".mysqli_real_escape_string($this->conn, $val)."'";
            }
            return $this;
        } 
    }

    public function andWhere() {
        $args = func_get_args();
        $n = count($args);
        if($n > 0){
            if($n==3){
                $field = $args[0];
                $op = $args[1];
                $val = $args[2];
                $this->sql .= " AND $this->table.$field $op '".mysqli_real_escape_string($this->conn, $val)."'";
            }else if( $n== 2){
                $field = $args[0];
                $val = $args[1];
                $this->sql .= " AND $this->table.$field = '".mysqli_real_escape_string($this->conn, $val)."'";
            }
            return $this;
        } 
    }
    

    public function whereIn() {
        $args = func_get_args();
        $field = $args[0];
        $val = $args[1];
        $vals = '';
        foreach($val as $v) {
            $vals .= "'".mysqli_real_escape_string($this->conn, $v)."', ";
        }
        $vals = rtrim($vals,', ');
        $this->sql .=" WHERE $this->table.$field IN ($vals) "; 
        return $this;
    }

    public function whereNotIn() {
        $args = func_get_args();
        $field = $args[0];
        $val = $args[1];
        $vals = '';
        foreach($val as $v) {
            $vals .= "'".mysqli_real_escape_string($this->conn, $v)."', ";
        }
        $vals = rtrim($vals,', ');
        $this->sql .=" WHERE $this->table.$field NOT IN ($vals) "; 
        return $this;
    }

    public function groupBy($field){
        $mangKey = explode(',', $field);
        $fieldGroupBy = '';
        foreach ($mangKey as $val) {
            $fieldGroupBy .= "$this->table.$val, ";
        }
        $fieldGroup = rtrim($fieldGroupBy, ', ');
        $this->sql .= "GROUP By $fieldGroupBy";
        return $this;
    }

    public function find() {        
        $query = $this->conn->query($this->sql);
        return $query->fetch_object(); //row object
    }

    public static function delete($id){
        $_this = new static();
        $query = "DELETE FROM $_this->table WHERE id = $id";
        return $_this->conn->query($query);  //tue | false
    }

    public static function create($data){
        $_this = new static;
        $keys = array_keys( $data );
        $keys = implode(',', $keys );
        $values = array_values( $data );
        $values = "'".implode("','", array_map(array($_this->conn, 'real_escape_string'), $values))."'";
        $sql = "INSERT INTO $_this->table($keys) VALUES ($values)";
        return $_this->conn->query($sql);  //tue/false
    }

    public static function update($id,$data){
        $_this = new static;
        $sql = "UPDATE $_this->table SET";
        foreach($data as $key => $value){
            $sql .= "$key = '".mysqli_real_escape_string($_this->conn, $value)."', ";
        }
        $sql = rtrim($sql, ', ');
        $sql .="WHERE id = $id";
        
        return $_this->conn->query($sql);  //tue/false
    }
}