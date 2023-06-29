<?php
// basemode ke thua database
class BaseModel extends database{
    protected $connect;
    function __construct(){
        $this->connect = $this->connect();
    }
    public function query($sql){
        return mysqli_query($this->connect, $sql);
    }
    public function all($table, $select=['*'],$orderBy=[]){
        $sql = "select * from ${table}";
        $res = $this->query($sql);
        $data = [];
        while($row = mysqli_fetch_array($res)){
            array_push($data,$row);
        }
        return $data;
    }
    public function create($table, $data=[])
    {
        $columns=implode(',',array_keys($data));
        $valuesList=array_map(function($v){
            return "'".$v."'";
        },array_values($data));
        $value = implode(",", $valuesList);
        $sql = "insert into ${table} (${columns}) values (${value})";
        $query=$this->query($sql);
    }
    public function delete($table,$id){
        $sql = "delete from ${table} where id = ${id}";
        $this->query($sql);
    }
    public function find($table, $id){
        $sql="Select * from ${table} where id =${id}";
        $res=$this->query($sql);
        //echo <pre>
        //print_r(mysqli_fetch_assoc($res));
        //die():
        return mysqli_fetch_assoc($res);
    }
    public function updateNew($table,$data,$id){
       $list = [];
        foreach($data as $key=>$val){
            array_push($list,"${key} ='".$val."'");
        }
        $listData = implode(',', $list);
        $sql="update ${table} set ${listData} where id =${id}";
        $res=$this->query($sql);
    }
    public function search($table,$field,$search_temp){
        $sql = "SELECT * FROM ${table} WHERE ${field} LIKE '%$search_temp%'";
        $result = $this->query($sql);
        if(mysqli_num_rows($result) > 0){
            $data=array();
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } 
    }
}
?>