<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/2/19
 * Time: 12:04 AM
 */

class MemberRepoImpl implements MmeberRepo
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

    public function create($Member_ID, $Name, $Address, $DOB, $Contact_No, $Register_date, $Completed_date)
    {
        $pstm = $this->conn->prepare("insert into Member (Member_ID,Name,Address,DOB,Contact_No,Register_date,Completed_date) values (?,?,?,?,?,?,?)");
        $pstm->bind_param("isssiss", $param1, $param2, $param3, $param4, $param5, $param6, $param7);

        $param1 = $Member_ID;
        $param2 = $Name;
        $param3 = $Address;
        $param4 = $DOB;
        $param5 = $Contact_no;
        $param6 = $Register_date;
        $param7 = $Completed_date;
        

        $result = $pstm->execute();

        if ($result) {
            return $pstm->insert_id;
        } else {
            return -1;
        }
    }

    public function delete($ID)
    {
        $result = $this->conn->query("delete from Member where Member_ID= $member_ID");

        return $result;
    }

    public function update($Member_ID, $Name, $Address, $DOB, $Contact_No, $Register_date, $Completed_date)
    {
        $pstm = $this->conn->prepare("update Member set Name= ? ,Address= ? ,DOB= ? ,Contact_No= ? ,Register_date= ? ,Completed_date= ? where member_ID = ?");
        $pstm->bind_param("isssiss", $param2, $param3, $param4, $param5, $param6, $param7, $param1);

        $param1 = $member_ID;
        $param2 = $Name;
        $param3 = $Address;
        $param4 = $DOB;
        $param5 = $Contact_No;
        $param6 = $Register_date;
        $param7 = $Completed_date;
        

        $result = $pstm->execute();

        if ($result) {
            return $pstm->affected_rows;
        } else {
            return -1;
        }
    }

    public function findAll()
    {
        $result = $this->conn->query("select * from Member");

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function find($member_ID)
    {
        $result = $this->conn->query("select * from Member where member_ID= $member_ID");

        return $result->fetch_assoc();
    }
}