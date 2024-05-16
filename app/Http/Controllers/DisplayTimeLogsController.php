<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TimeLog; 

class DisplayTimeLogsController extends Controller
{
    public function displayTimeLogs()
    {
        $user = auth()->user(); // Get the authenticated user
        $timeLogs = $user->timeLogs; // Get the time logs associated with the user

        // Pass the user and time logs data to the view
        return view('report', compact('user', 'timeLogs'));
    }
}


