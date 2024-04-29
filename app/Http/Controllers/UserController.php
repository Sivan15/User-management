<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OTPVerificationMail;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Create the user
        $user = User::create($request->all());
    
           // Redirect the user
           return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Find the user
        $user = User::findOrFail($id);

        // Update the user
        $data = $request->only(['name', 'email', 'mobile']);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);

        // Redirect the user
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function delete(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }

    public function user()
{
    $users = User::all();
    return view('userdashboard', compact('users'));
}

public function sendOTP(Request $request)
    {
        // Generate OTP
        $otp = mt_rand(100000, 999999);

        // Send OTP via Email
        Mail::to($request->user()->email)->send(new OTPVerificationMail($otp));

        // Return success message
        return 'OTP sent successfully!';
    }

    public function verifyOTP(Request $request)
    {
        // Get the user input OTP
        $inputOTP = $request->otp;

        // Get the expected OTP from the session or database (if you stored it somewhere)
        $expectedOTP = $request->session()->get('otp'); // Example: Retrieve from session

        // Verify OTP
        if ($inputOTP == $expectedOTP) {
            // OTP verified successfully
            return 'OTP verified successfully!';
        } else {
            // OTP verification failed
            return 'Invalid OTP. Please try again.';
        }
    }


}
