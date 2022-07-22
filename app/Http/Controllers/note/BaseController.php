<?php

namespace App\Http\Controllers\note;

use App\Http\Controllers\Controller;
use App\Services\Note\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
