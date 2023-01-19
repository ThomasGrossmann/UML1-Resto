<?php

// use Bill;
// use Table;

class Customer
{
    private Table $table;

    public function book(Table $table)
    {
        echo "The customer is booking a table.\n";
    }

    public function pay(Bill $bill)
    {
        echo "The customer is paying the bill.\n";
    }

    public function evaluate()
    {
        echo "The customer liked the meal. He gave 5/5.\n";
    }
}
