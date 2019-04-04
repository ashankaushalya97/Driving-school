<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/3/19
 * Time: 2:45 PM
 */

interface FleetService
{
    public function saveFleet($vehicle_ID, $reg_no, $car_type, $YOM, $started_date, $remove_date, $course_date, $imagePath);
    public function findOne($vehicle_ID);
    public function findAll();
}