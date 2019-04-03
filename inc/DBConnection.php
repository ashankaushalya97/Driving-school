<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 7/23/18
 * Time: 9:29 PM
 */
class DBConnection
{
    private $dbConnection;
    public function __construct()
    {
        $this->dbConnection = new mysqli("localhost","root","","db","3306");
        if($this->dbConnection->connect_errno){
            echo $this->dbConnection->connect_error;
            die;
        }
    }
    public function getConnection(){
        return $this->dbConnection;
    }
//    public function __destruct()
//    {
//        mysqli_close($this->dbConnection);
//    }
}
