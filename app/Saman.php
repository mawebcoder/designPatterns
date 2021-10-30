<?php

namespace App;

class Saman implements BankInterface
{

    public function connectToBank()
    {
        dd('connected to saman');
    }
}
