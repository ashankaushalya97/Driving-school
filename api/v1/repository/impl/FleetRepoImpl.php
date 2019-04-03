<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/2/19
 * Time: 12:04 AM
 */

class FleetRepoImpl implements FleetRepo
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

    public function create($vehicle_ID, $reg_no, $car_type, $yom, $started_date, $remove_date, $course_ID)
    {
        $pstm = $this->conn->prepare("insert into vehicle (vehicle_ID,reg_no,car_type,yom,started_date,remove_date,course_ID) values (?,?,?,?,?,?,?)");
        $pstm->bind_param("iisissi", $param1, $param2, $param3, $param4, $param5, $param6, $param7);

        $param1 = $vehicle_ID;
        $param2 = $reg_no;
        $param3 = $car_type;
        $param4 = $yom;
        $param5 = $started_date;
        $param6 = $remove_date;
        $param7 = $course_ID;

        $result = $pstm->execute();

        if ($result) {
            return $pstm->insert_id;
        } else {
            return -1;
        }
    }

    public function delete($vehicle_ID)
    {
        $result = $this->conn->query("delete from vehicle where vehicle_ID= $vehicle_ID");

        return $result;
    }

    public function update($vehicle_ID, $reg_no, $car_type, $YOM, $started_date, $remove_date, $course_date)
    {
        $pstm = $this->conn->prepare("update vehicle set reg_no= ? ,car_type= ? ,yom= ? ,started_date= ? ,remove_date= ? ,course_ID= ? where vehicle_ID = ?");
        $pstm->bind_param("iisissi", $param2, $param3, $param4, $param5, $param6, $param7, $param1);

        $param1 = $vehicle_ID;
        $param2 = $reg_no;
        $param3 = $car_type;
        $param4 = $yom;
        $param5 = $started_date;
        $param6 = $remove_date;
        $param7 = $course_ID;

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

    public function find($vehicle_ID)
    {
        $result = $this->conn->query("select * from vehicle where vehicle_ID= $vehicle_ID");

        return $result->fetch_assoc();
    }
}