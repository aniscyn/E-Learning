<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Absen;
use App\Models\User;

class DataAbsenController extends Controller
{
    public function viewAbsen()
    {
        $dataAbsen = Absen::query()
        ->orderBy('nm_lengkap', 'asc')
        ->Paginate(5);

        return view('admin/data-absen', [
            'data' => $dataAbsen,
        ]);
    }
}
