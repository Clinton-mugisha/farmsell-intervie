<?php

namespace App\Http\Controllers;

use App\Models\TimeLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoggingController extends Controller
{
    public function logTimeIn(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'time_in' => 'required|date_format:H:i',
        ]);
    
        TimeLog::create([
            'date' => $request->date,
            'time_in' => $request->time_in,
            'user_id' => Auth::id(),
        ]);
    
        return redirect()->route('time-out');
    }
    
    public function logTimeOut(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'time_out' => 'required|date_format:H:i',
        ]);
    
        $updatedRows = TimeLog::where('date', $request->date)
            ->whereNull('time_out')
            ->where('user_id', Auth::id())
            ->update(['time_out' => $request->time_out]);
    
        if ($updatedRows == 0) {
            // Handle the case where no record was updated, e.g., log an error or notify the user
        }
    
        return redirect()->route('dashboard'); // Ensure this route is defined
    }
    
}
