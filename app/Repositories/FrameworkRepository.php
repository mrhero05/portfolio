<?php

namespace App\Repositories;
use App\Models\Framework;

class FrameworkRepository
{
    public function getAllFramework()
    {
        return Framework::orderBy('order_weight', 'asc')->get();
    }
}
