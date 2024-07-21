<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployerRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class RegisteredUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $userRequest, StoreEmployerRequest $employerRequest)
    {
        $userAttributes = $userRequest->validated();
        $employerAttributes = $employerRequest->validated();

        $user = User::create($userAttributes);

        $logoPath = $employerAttributes['employer_logo']->store('logos');

        $user->employer()->create([
            'name' => $employerAttributes['employer_name'],
            'logo' => $logoPath
        ]);

        auth()->login($user);

        return redirect('/');
    }
}
