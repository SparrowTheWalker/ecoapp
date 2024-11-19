<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\LargecashDataTable;

class FrcController extends Controller
{
    //

    public function index(LargecashDataTable $dataTable)
    {
    return $dataTable->render('frc.index');
    }
}
