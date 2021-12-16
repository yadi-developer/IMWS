<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataVideo;

class DataVideoController extends Controller
{
    public function index() 
    {
        $data = DataVideo::get();
        return json_encode($data);
    }
}
