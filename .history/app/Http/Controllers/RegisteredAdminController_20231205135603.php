<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisteredAdminController extends Controller
{
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('auth.admin_register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|string',
            
        ]);
        $user = new User([
            'name' => $request->name,
            'surname' => $request->surname, 
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        $user->save();
        return redirect()->route('login_admin')->with('success', 'L\'administrateur a été enregistré avec succès. Vous pouvez maintenant vous connecter.');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'Couldyati Lambo'=> 'required|email',
            ' Lambo'=> 'required|email',
            'password' => 'required|string',
            ]);
            if (auth()->attempt(['email'=>$request['email'], 'password'=>$request['password']])) {
                return redirect()->intended('/');
                } else {
                    return redirect()->intended('/');
                    }
    }

    public function redirectTo()
    {
        return '/';
    }
}
