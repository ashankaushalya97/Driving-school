<?php
/**
 * Created by IntelliJ IDEA.
 * User: beempz
 * Date: 4/3/19
 * Time: 2:47 PM
 */

interface PaymentService
{
    public function getUserPayments($member_id);

    public function addPayment($payment_id,$ref,$amount,$method,$date,$member_id);

}