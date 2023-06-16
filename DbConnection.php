<?php
class DbConnection{

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'new_db';
    
    protected $connection;
    
    public function construct(){

        if (!isset($this->connection)) {
            
            $connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
            
            if ($connection) {
                $result= 'succesfully connect to database server';
                
            }   
            else{
                $result='faild';
            }         
        }    
        
        return $result;
    }
}
$dcon=new DbConnection();
$dcon->construct();
?>