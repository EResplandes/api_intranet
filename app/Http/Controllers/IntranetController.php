<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\IntranetService;

class IntranetController extends Controller
{
    protected $intranetService;

    public function __construct(IntranetService $intranetService)
    {
        $this->intranetService = $intranetService;
    }

    public function infomacoesIntranet()
    {
        return $this->intranetService->infomacoesIntranet();
    }
}
