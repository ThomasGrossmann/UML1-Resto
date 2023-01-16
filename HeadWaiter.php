<?php

use Waiter;
use Order;
use Bill;

class HeadWaiter extends Waiter
{
    public function validate(Order $order)
    {
    }

    public function makeDiscount(Bill $bill)
    {
    }
}
