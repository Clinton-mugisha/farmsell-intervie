<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;



class adminInfo extends Controller
{
    public function getadminrInfo($id)
    {
        $admin = admin::find($id);
        
        // Do something with the admin information
        return $admin;
    }
}
