<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AskHelpController extends Controller
{
    public function help(Request $request, $table_id)
    {
        return "Help on the way!";
    }
}
