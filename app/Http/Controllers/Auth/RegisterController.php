<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create()
		{
				return Inertia::render ('Auth/Register');
		}

		public function store(Request $request)
		{	
			// dd($request->all());
			$credentials = $request->validate([
				'first_name' => 'required|string|max:255',
				'last_name' =>  'required|string|max:255',
				'email' => 'required|email:dns,spoof|unique:users,email',
				'password' => ['required', 'confirmed', 'string', Password::min(8)->mixedCase()->numbers()]
			]);

			$credentials['password'] = bcrypt($credentials['password']);
			$user = User::create($credentials);

			//Verify email

			Auth::login($user);
			return redirect()->route('home');
		}
}
