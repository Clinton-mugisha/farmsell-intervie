<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('users');
    }

    /**
     * Handle the login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function User(Request $request)
    // {
    //     // Validate the login request
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     // Attempt to authenticate the user
    //     if (Auth::attempt($request->only('email', 'password'))) {
    //         // Authentication passed...
    //         return redirect()->intended('/dashboard');
    //     }

    //     // Authentication failed...
    //     return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials.']);
    // }

    /**
     * Logout the user.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
{
    Auth::logout();
    return redirect()->route('login');
}
    public function showUsers() {
        $users = User::all(); // Fetch all users from the database
        return view('users', compact('users')); // Pass users to the view
    }
    
    public function editUser($id)
    {
        $user = User::find($id);
        return view('editUser', ['user' => $user]);
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('user');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user');
    }

    public function addUser()
    {
        return view('addUser');
    }

    public function storeUser(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('user');
    }
    
}
