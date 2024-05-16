<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;



class UserInfo extends Controller
{
    public function getUserInfo($id)
    {
        $user = User::find($id);
        
        // Do something with the user information
        return $user;
    }
}
