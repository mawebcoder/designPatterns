<?php

namespace App;

class Payping implements BankInterface
{

    public function connectToBank()
    {
        dd('connected to payping');
    }
}
