<?php

// use Order;

class Chef
{
    public function confirm(Order $order)
    {
        echo "The chef successfully got the order.\n";
    }

    public function announceReady(Order $order)
    {
        echo "The chef announced that the order is ready.\n";
    }
}
