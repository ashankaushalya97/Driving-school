<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/2/19
 * Time: 12:04 AM
 */

class PaymentRepoImpl implements PaymentRepo
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

    public function create($Payment_ID, $Ref, $Amount, $Method, $Date, $Member_ID)
    {
        $pstm = $this->conn->prepare("insert into Payment (Payment_ID,Ref,Amount,Method,Date,Member_ID) values (?,?,?,?,?,?)");
        $pstm->bind_param("isdssi", $param1, $param2, $param3, $param4, $param5, $param6);

        $param1 = $Payment_ID;
        $param2 = $Ref;
        $param3 = $Amount;
        $param4 = $Method;
        $param5 = $Date;
        $param6 = $Member_ID;

        $result = $pstm->execute();

        if ($result) {
            return $pstm->insert_id;
        } else {
            return -1;
        }
    }

    public function delete($Payment_ID)
    {
        $result = $this->conn->query("delete from payment where Payment_ID= $Payment_ID");

        return $result;
    }

    public function update($Payment_ID, $Ref, $Amount, $Method, $Date, $Member_ID)
    {
        $pstm = $this->conn->prepare("update Payment set Ref= ? ,Amount= ? ,Method= ? ,Date= ? ,Member_ID= ? where Payment_ID = ?");
        $pstm->bind_param("sdssii", $param2, $param3, $param4, $param5, $param6, $param1);

        $param1 = $Payment_ID;
        $param2 = $Ref;
        $param3 = $Amount;
        $param4 = $Method;
        $param5 = $Date;
        $param6 = $Member_ID;

        $result = $pstm->execute();

        if ($result) {
            return $pstm->affected_rows;
        } else {
            return -1;
        }
    }

    public function findAll()
    {
        $result = $this->conn->query("select * from vehicle");

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function findPaymentsByUser($member_id)
    {
        $result = $this->conn->query("select * from payment where member_id= $member_id");

        return $result->fetch_all(MYSQLI_ASSOC);

    }

    public function find($vehicle_ID)
    {
        $result = $this->conn->query("select * from vehicle where vehicle_ID= $vehicle_ID");

        return $result->fetch_assoc();
    }
}