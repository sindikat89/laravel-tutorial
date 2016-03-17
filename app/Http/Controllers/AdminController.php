<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\Admin\AdminRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function __construct(
        AdminRepositoryInterface $admin
    ) {
        $this->admin = $admin;
    }

    public function getIndex()
    {
        // Fetch the data
        $admins = $this->admin->all();

        // Return the view with the admins collection
        return view('welcome', ['admins' => $admins]);
    }

    public function postCreateAdmin(Request $request)
    {
        // Save the data
        $created = $this->admin->createAdmin($request->all());

        // Check if storing went through
        if ($created) {
            // If the admin was created, redirect with a success message
            return Redirect::route('get-index')->with('success', 'The admin has been saved successfully');
        } else {
            // Else redirect with an error message
            return Redirect::route('get-index')->with('error', 'There was an error while saving the admin');
        }
    }

    public function adminLogin()
    {
        return view('login');
    }

    public function postSignIn(Request $request)
    {
        // Attempt to login
        $authAdmin = Auth::administrator()->attempt(array('email' => trim($request->get('email')), 'password' => trim($request->get('password'))));

        if ($authAdmin) {
            // If the administrator exists, redirect to dashboard
            return Redirect::route('admin-dashboard');
        } else {
            // Else return error
            return Redirect::back()->with('error', 'Wrong login details');
        }
    }

    public function getDashboard()
    {
        return view('dashboard');
    }

    public function adminLogout()
    {
        Auth::administrator()->logout();

        return Redirect::route('cms');
    }

}
