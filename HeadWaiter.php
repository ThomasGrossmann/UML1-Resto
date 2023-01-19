<?php

use Waiter;
use Order;
use Bill;

class HeadWaiter extends Waiter
{
    public function validate(Order $order)
    {
        throw new RuntimeException();
    }

    public function makeDiscount(Bill $bill)
    {
        throw new RuntimeException();
    }
}
