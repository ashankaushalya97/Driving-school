<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/2/19
 * Time: 12:04 AM
 */

class SchedulerRepoImpl implements SchedulerRepo
{

    private $conn;

    /*public function __construct()
    {
        $this->conn = new mysqli("cdcd", "cdscd", "ccdc", "scc", "csc");
    }*/

    public function setConnection(mysqli $conn)
    {
        $this->conn = $conn;
    }

    public function create($Schedule_time, $Course_ID, $description)
    {
        $pstm = $this->conn->prepare("insert into schedule (Schedule_time,Course_ID,description) values (?,?,?)");
        $pstm->bind_param("sis", $param1, $param2, $param3);

        $param1 = $Schedule_time;
        $param2 = $Course_ID;
        $param3 = $description;

        $result = $pstm->execute();

        if ($result) {
            return $pstm->insert_id;
        } else {
            return -1;
        }
    }

    public function delete($Schedule_time)
    {
        $result = $this->conn->query("delete from schedule where Schedule_time= $Schedule_time");

        return $result;
    }

    public function update($Schedule_time, $Course_ID, $Session_type)
    {
        $pstm = $this->conn->prepare("update schedule set Course_ID= $Course_ID ,Session_type= $Session_type where Schedule_time = $Schedule_time");
        $pstm->bind_param("iss", $param2, $param3, $param1);

        $param1 = $Schedule_time;
        $param2 = $Course_ID;
        $param3 = $Session_type;

        $result = $pstm->execute();

        if ($result) {
            return $pstm->affected_rows;
        } else {
            return -1;
        }
    }

    public function findAll()
    {
        $result = $this->conn->query("select * from schedule");

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function find($Schedule_time)
    {
        $result = $this->conn->query("select * from schedule where Schedule_time= $Schedule_time");

        return $result->fetch_assoc();
    }
}