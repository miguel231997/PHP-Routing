<?php

declare(strict_types=1);

namespace App\Classes;

class Invoices
{
    public function index(): string 
    {
        return 'Invoices';
    }

    public function create(): string
    {
        return '<form action="/invoices/create" method="post">
                    <label>Amount</label>
                    <input type="text" name="amount">
                    <input type="submit" value="Submit">
                </form>';
    }

    public function store()
    {
        $amount = $_POST['amount'];
    }
}