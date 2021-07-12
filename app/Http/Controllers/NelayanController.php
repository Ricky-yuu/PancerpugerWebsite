<?php

namespace App\Http\Controllers;
use App\Models\NelayanModel;
use Illuminate\Http\Request;

class NelayanController extends Controller
{
    public function __construct()
    {
        $this->NelayanModel = new NelayanModel();
    }
    public function index()
    {
        $data = [
            'nelayan' => $this->NelayanModel->alldata(),
        ];
        return view('v_nelayan', $data);
    }
}
