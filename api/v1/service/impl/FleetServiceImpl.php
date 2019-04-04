<?php

class FleetServiceImpl implements FleetService
{
    private $fleetRepo;

    public __construct(){
        $fleetRepo - new FleetRepoImpl();
    }

    public function saveFleet($vehicle_ID, $reg_no, $car_type, $YOM, $started_date, $remove_date, $course_date, $imagePath) {
        $this->fleetRepo->setConnection((new DBConnection())->getConnection());
        $result = $this->fleetRepo->create($vehicle_ID, $reg_no, $car_type, $YOM, $started_date, $remove_date, $course_date, $imagePath)

        if ($result > 0) {
            return true;
        } 

        return false;
    }
    public function findOne($vehicle_ID) {
        $this->fleetRepo->setConnection((new DBConnection())->getConnection());
        return $this->fleetRepo->find($vehicle_ID);
    }
    public function findAll() {
        $this->fleetRepo->setConnection((new DBConnection())->getConnection());
        return $this->fleetRepo->findAll()
    }
}