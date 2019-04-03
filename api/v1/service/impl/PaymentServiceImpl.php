<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/3/19
 * Time: 3:05 PM
 */

class PaymentServiceImpl implements PaymentService
{


    private $paymentRepo;

    /**
     * PaymentServiceImpl constructor.
     */
    public function __construct()
    {
        $this->paymentRepo = new PaymentRepoImpl();
    }

    public function getUserPayments($member_id)
    {
        $this->paymentRepo->setConnection((new DBConnection())->getConnection());
        $resultSet = $this->paymentRepo->findPaymentsByUser($member_id);

        return $resultSet;

    }

    public function addPayment($payment_id, $ref, $amount, $method, $date, $member_id)
    {
        $this->paymentRepo->setConnection((new DBConnection())->getConnection());
        $result = $this->paymentRepo->save($payment_id, $ref, $amount, $method, $date, $member_id);

        if ($result > 0) {
            return true;
        }

        return false;
    }
}