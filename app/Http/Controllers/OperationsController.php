<?php

namespace App\http\Controllers;

use App\Http\Controllers\Controller;

class OperationsController extends Controller
{
    public function addition(int $a, int $b): int
    {
        return $a + $b;
    }
}
