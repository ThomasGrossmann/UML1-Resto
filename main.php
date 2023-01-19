<?php

require_once 'Bill.php';
require_once 'Chef.php';
require_once 'Customer.php';
require_once 'HeadWaiter.php';
require_once 'Order.php';
require_once 'Table.php';
require_once 'Waiter.php';

$table = new Table();
$customer = new Customer();
$customer->book($table);
sleep(2);
$waiter = new Waiter();
$order = new Order();
$waiter->take($order);
sleep(2);
$chef = new Chef();
$headwaiter = new HeadWaiter();
$waiter->send($order);
sleep(2);
$headwaiter->validate($order);
sleep(2);
$chef->confirm($order);
sleep(2);
$chef->announceReady($order);
sleep(2);
$bill = new Bill();
$customer->pay($bill);
sleep(2);
$customer->evaluate();
