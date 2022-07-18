<?php

namespace App\Http\Controllers;

use App\Models\branch;
use App\Models\staff;
use DB;

class companyController extends Controller
{
    public function company()
    {
        // SElECT * FROM post;
        $staff = staff::all();
        $branch = branch::all();
        $company = DB::table('branch')
            ->join('staff', 'staff.branchNo', '=', 'branch.branchNo')
            ->get();
        return view('latihan2.index', compact('staff', 'branch', 'company'));

    }
}