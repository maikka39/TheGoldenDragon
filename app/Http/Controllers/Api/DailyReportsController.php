<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class DailyReportsController extends Controller
{

    public function items()
    {
        return '{"data":[{"id": 1, "date": "Date test", "download": "http://example.com"}]}';
    }
}
