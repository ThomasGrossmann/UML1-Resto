<?php

use Order;

class Waiter
{
    private Order $orders;

    public function take(Order $order)
    {
        throw new RuntimeException();
    }

    public function send(Order $order)
    {
        throw new RuntimeException();
    }
}
