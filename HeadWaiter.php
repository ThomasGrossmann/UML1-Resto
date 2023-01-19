<?php

require_once 'Waiter.php';
// use Order;
// use Bill;

class HeadWaiter extends Waiter
{
    public function validate(Order $order)
    {
        echo "The headwaiter validated the order.\n";
    }

    public function makeDiscount(Bill $bill)
    {
        throw new RuntimeException();
    }
}
