<?php


class FleetServiceImpl implements FleetService
{

    private $courseRepo;

    /**
     * CourseServiceImpl constructor.
     */
    public function __construct()
    {
        $this->FleetRepo = new FleetRepoImpl();
    }


    function addVehicle($Vehicle_ID,$Reg_No,$Car_type)
    {
        $this->FleetRepo->setConnection((new DBConnection())->getConnection());
        $result = $this->FleetRepo->save($Vehicle_ID,$Reg_No,$Car_type);

        if ($result > 0) {
            return true;
        }

        return false;
    }