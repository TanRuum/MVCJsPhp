<?php
class database{
    const HOST = '127.0.0.1';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DB_NAME='phpclass';
    private $connect;
    public function connect(){
        $this->connect=mysqli_connect(self::HOST,self::USERNAME,self::PASSWORD,self::DB_NAME);
        mysqli_set_charset($this->connect, 'utf8');
        if(mysqli_connect_errno()===0){
            return $this->connect;
        }
        return false;
    }

}
?>