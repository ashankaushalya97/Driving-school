<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/2/19
 * Time: 12:04 AM
 */

class CourseRepoImpl implements CourseRepo
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

    public function create($Course_ID, $C_Name, $Fee)
    {
        $pstm = $this->conn->prepare("insert into Course (Course_ID,C_Name,Fee) values (?,?,?)");
        $pstm->bind_param("isd", $param1, $param2, $param3);

        $param1 = $Course_ID;
        $param2 = $C_Name;
        $param3 = $Fee;
        

        $result = $pstm->execute();

        if ($result) {
            return $pstm->insert_id;
        } else {
            return -1;
        }
    }

    public function delete($Course_ID)
    {
        $result = $this->conn->query("delete from Course where Course_ID= $Course_ID");

        return $result;
    }

    public function update($Course_ID, $C_Name, $Fee)
    {
        $pstm = $this->conn->prepare("update Course set C_Name= ? ,Fee= ? where Course_ID = ?");
        $pstm->bind_param("isd", $param2, $param3, $param1);

        $param1 = $Course_ID;
        $param2 = $C_Name;
        $param3 = $Fee;
        

        $result = $pstm->execute();

        if ($result) {
            return $pstm->affected_rows;
        } else {
            return -1;
        }
    }

    public function findAll()
    {
        $result = $this->conn->query("select * from Course");

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function find($Course_ID)
    {
        $result = $this->conn->query("select * from Course where Course_ID= $Course_ID");

        return $result->fetch_assoc();
    }
}