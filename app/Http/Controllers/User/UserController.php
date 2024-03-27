<?php

namespace App\Http\Controllers\User;

use App\Constants\RoleConstants;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateSeekerRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function registerSeeker()
    {
        return view('user.register-seeker');
    }

    public function storeSeeker(CreateSeekerRequest $request)
    {
        try {
            DB::beginTransaction();
            User::create([
                'name' => request('name'),
                'email' => request('email'),
                'password' => bcrypt(request('password')),
                'user_type' => RoleConstants::SEEKER,
            ]);

            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with($e->getMessage());
        }
        return redirect()->route('login');
    }
}
