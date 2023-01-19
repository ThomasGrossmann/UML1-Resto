<?php

// use Order;

class Waiter
{
    private Order $orders;

    public function take(Order $order)
    {
        echo "The waiter is taking the order.\n";
    }

    public function send(Order $order)
    {
        echo "The waiter sent the order to the headwaiter for validation.\n";
    }
}
