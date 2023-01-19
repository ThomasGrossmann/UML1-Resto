<?php

use Bill;
use Table;

class Customer
{
    public function book(Table $table)
    {
        throw new RuntimeException();
    }

    public function pay(Bill $bill)
    {
        throw new RuntimeException();
    }

    public function evaluate()
    {
        throw new RuntimeException();
    }
}
