<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/1/19
 * Time: 11:49 PM
 */

interface PaymentRepo
{
    public function setConnection(mysqli $conn);

    public function create($Payment_ID, $Ref, $Amount, $Method, $Date, $Member_ID);

    public function delete($Payment_ID);

    public function update($Payment_ID, $Ref, $Amount, $Method, $Date, $Member_ID);

    public function findAll();

    public function findPaymentsByUser($member_id);

    public function find($Payment_ID);
}