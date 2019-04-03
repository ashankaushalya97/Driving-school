<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/2/19
 * Time: 12:04 AM
 */

class InstructorRepoImpl implements InstructorRepo
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

    public function create($Instructor_ID, $Name, $Email, $Phone, $Address, $Start_date, $Resign_date)
    {
        $pstm = $this->conn->prepare("insert into Instructor (Instructor_ID,Name,Email,Phone,Address,Start_date,Resign_date) values (?,?,?,?,?,?,?)");       
        $pstm->bind_param("ississs", $param1, $param2, $param3, $param4, $param5, $param6, $param7);

        $param1 = $Instructor_ID;
        $param2 = $Name;
        $param3 = $Email;
        $param4 = $Phone;
        $param5 = $Address;
        $param6 = $Start_date;
        $param7 = $Resign_date;
        

        $result = $pstm->execute();

        if ($result) {
            return $pstm->insert_id;
        } else {
            return -1;
        }
    }

    public function delete($Instructor_ID)
    {
        $result = $this->conn->query("delete from Instructor where Instructor_ID= $Instructor_ID");

        return $result;
    }

    public function update($Instructor_ID, $Name, $Email, $Phone, $Address, $Start_date, $Resign_date)
    {
        $pstm = $this->conn->prepare("update Instructor set Name= ? ,Email= ? ,Phone= ? ,Address= ? ,Started_date= ? ,Resign_date= ? where Instructor_ID = ?");
        $pstm->bind_param("ississs", $param2, $param3, $param4, $param5, $param6, $param7, $param1);

        $param1 = $Instructor_ID;
        $param2 = $Name;
        $param3 = $Email;
        $param4 = $Phone;
        $param5 = $Address;
        $param6 = $Started_date;
        $param7 = $Resign_date;
        

        $result = $pstm->execute();

        if ($result) {
            return $pstm->affected_rows;
        } else {
            return -1;
        }
    }

    public function findAll()
    {
        $result = $this->conn->query("select * from Instructor");

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function find($Instructor_ID)
    {
        $result = $this->conn->query("select * from Instructor where Instructor_ID= $Instructor_ID");

        return $result->fetch_assoc();
    }
}