<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index()
    {
        $donors = Donor::with(['upazila','blood'])->latest()->get();
        return view('backend.donor.index',compact('donors'));
    }
}
