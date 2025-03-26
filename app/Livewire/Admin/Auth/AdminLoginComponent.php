<?php

namespace App\Livewire\Admin\Auth;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AdminLoginComponent extends Component
{

    #[Rule('required|string|email|max:255')]
    public $email;

    #[Rule('required')]
    public $password;

    #[Rule('nullable')]
    public $remember;

// we can import rules from separate file or class
//    public function rules()
//    {
//        return (new LoginRequest())->rules();
//    }

//    public function rules()
//    {
//        return [
//            'email' => 'required|string|email',
//            'password' => 'required',
//            'remember' => 'nullable',
//        ];
//    }

    public function submit()
    {
        $this->validate();

        if (!Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
        return to_route('admin.index')->with('success', trans('auth.login_success'));
    }
    public function render()
    {
        return view('admin.auth.admin-login-component');
    }
}
