<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Hardcoded users for demonstration
    private $users = [
        'adele' => 'password123',
        'bob' => 'securepass',
    ];

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Intentionally flawed logic
        if (array_key_exists($username, $this->users)) {
            if ($this->users[$username] === $password) {
                // Simulate login
                Session::put('user', $username);
                return redirect()->route('home');
            } else {
                // Username exists but password is wrong
                return redirect()->back()->with('error', "Invalid password for user");
            }
        } else {
            // Username does not exist
            return redirect()->back()->with('error', "Invalid credentials");
        }
    }

    public function home()
    {
        if (!Session::has('user')) {
            return redirect()->route('login');
        }
        return view('home');
    }
}

