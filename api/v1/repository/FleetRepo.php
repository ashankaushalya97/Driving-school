<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/1/19
 * Time: 11:49 PM
 */

interface FleetRepo
{
    public function setConnection(mysqli $conn);

    public function create($vehicle_ID, $reg_no, $car_type, $YOM, $started_date, $remove_date, $course_date,$imagePath);

    public function delete($vehicle_ID);

    public function update($vehicle_ID, $reg_no, $car_type, $YOM, $started_date, $remove_date, $course_date);

    public function findAll();

    public function find($vehicle_ID);
}