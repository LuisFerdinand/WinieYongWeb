<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display the user management view with all users.
     */
    public function index()
    {
        // Ensure the user is an admin (additional security layer)
        if (Auth::user()->role !== 'admin') {
            return redirect('/dashboard')->with('error', 'Unauthorized access');
        }

        // Fetch all users
        $users = User::all();

        return view('dashboard.users.index', compact('users'));
    }

    /**
     * Update the role of a specific user.
     */
    public function updateRole(Request $request, $id)
    {
        // Ensure the user is an admin
        if (Auth::user()->role !== 'admin') {
            return redirect('/dashboard')->with('error', 'Unauthorized access');
        }

        // Find the user by ID
        $user = User::findOrFail($id);

        // Prevent admins from changing their own role
        if ($user->id === Auth::id()) {
            return redirect()->back()->with('error', 'You cannot change your own role.');
        }

        // Validate the incoming request
        $request->validate([
            'role' => ['required', 'in:admin,user'],
        ]);

        // Update the user's role
        $user->role = $request->role;
        $user->save();

        return redirect()->back()->with('success', 'User role updated successfully.');
    }

    /**
     * Delete a specific user.
     */
    public function destroy($id)
    {
        // Ensure the user is an admin
        if (Auth::user()->role !== 'admin') {
            return redirect('/dashboard')->with('error', 'Unauthorized access');
        }

        // Find the user by ID
        $user = User::findOrFail($id);

        // Prevent admins from deleting themselves
        if ($user->id === Auth::id()) {
            return redirect()->back()->with('error', 'You cannot delete your own account.');
        }

        // Delete the user
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }
}
