<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/1/19
 * Time: 11:49 PM
 */

interface MemberRepo
{
    public function setConnection(mysqli $conn);

    public function create($Member_ID, $Name, $Address, $DOB, $Contact_No, $Register_date, $Completed_date);

    public function delete($Member_ID);

    public function update($Member_ID, $Name, $Address, $DOB, $Contact_No, $Register_date, $Completed_date);

    public function findAll();

    public function find($Member_ID);
}