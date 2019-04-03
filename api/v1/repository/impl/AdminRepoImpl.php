<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/2/19
 * Time: 12:04 AM
 */

class AdminRepoImpl implements AdminRepo
{

    private $conn;

    // public function __construct()
    // {
    //     $this->conn = new mysqli("cdcd", "cdscd", "ccdc", "scc", "csc");
    // }

    public function setConnection(mysqli $conn)
    {
        $this->conn = $conn;
    }

    public function create($ID, $username, $password)
    {
        $pstm = $this->conn->prepare("insert into Admin (ID,username,password) values (?,?,?)");
        $pstm->bind_param("iss", $param1, $param2, $param3);

        $param1 = $ID;
        $param2 = $username;
        $param3 = $password;
        

        $result = $pstm->execute();

        if ($result) {
            return $pstm->insert_id;
        } else {
            return -1;
        }
    }

    public function delete($ID)
    {
        $result = $this->conn->query("delete from Admin where ID= $ID");

        return $result;
    }

    public function update($ID, $username, $password)
    {
        $pstm = $this->conn->prepare("update Admin set username= ? ,password= ? where ID = ?");
        $pstm->bind_param("iss", $param2, $param3, $param1);

        $param1 = $ID;
        $param2 = $username;
        $param3 = $password;
        

        $result = $pstm->execute();

        if ($result) {
            return $pstm->affected_rows;
        } else {
            return -1;
        }
    }

    public function findAll()
    {
        $result = $this->conn->query("select * from Admin");

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function find($ID)
    {
        $result = $this->conn->query("select * from Admin where ID= $ID");

        return $result->fetch_assoc();
    }
}