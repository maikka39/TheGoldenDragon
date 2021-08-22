<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DailyReportCollection;
use App\Models\DailyReport;

class DailyReportsController extends Controller
{

    public function items()
    {
        return new DailyReportCollection(DailyReport::all());
    }
}
