<?php

use Order;

class Chef
{
    public function confirm(Order $order)
    {
        throw new RuntimeException();
    }

    public function announceReady(Order $order)
    {
        throw new RuntimeException();
    }
}
