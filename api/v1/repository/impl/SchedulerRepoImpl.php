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

    public function __construct()
    {
        $this->conn = new mysqli("cdcd", "cdscd", "ccdc", "scc", "csc");
    }

    public function setConnection(mysqli $conn)
    {
        $this->conn = $conn;
    }

    public function create($time, $course, $description)
    {
        $pstm = $this->conn->prepare("insert into schedule (schedule_date,course,description) values (?,?,?)");
        $pstm->bind_param("sss", $param1, $param2, $param3);

        $param1 = $time;
        $param2 = $course;
        $param3 = $description;

        $result = $pstm->execute();

        if ($result) {
            return $pstm->insert_id;
        } else {
            return -1;
        }
    }

    public function delete($time)
    {
        $result = $this->conn->query("delete from schedule where time=$time");

        return $result;
    }

    public function update($time, $course, $description)
    {
        $pstm = $this->conn->prepare("update schedule set course= $course ,description= $description where schedule_date = $time");
        $pstm->bind_param("sss", $param2, $param3, $param1);

        $param1 = $time;
        $param2 = $course;
        $param3 = $description;

        $result = $pstm->execute();

        if ($result) {
            return $pstm->insert_id;
        } else {
            return -1;
        }
    }

    public function findAll()
    {
        
    }

    public function find($time)
    {
        // TODO: Implement find() method.
    }
}