<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Mail\RegisterMail;
use Mail;

class CustomerRegisterController extends Controller
{

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('front.user.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric'],
            'code' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
//            'g-recaptcha-response' => 'required|captcha',
        ], [
            'name.required' => 'هذا الحقل مطلوب',
            'name.string' => 'يجب ان يكون الاسم صحيح',
            'address.required' => 'هذا الحقل مطلوب',
            'address.string' => 'يجب ان يكون العنوان صحيح',
            'address.max' => 'لقد وصل عدد الحروف الي الحد الاقصي',
            'phone.required' => 'هذا الحقل مطلوب',
            'phone.numeric' => 'يجب ان يكون ارقام فقط',
            'email.required' => 'هذا الحقل مطلوب',
            'email.string' => 'يجب ان يكون البريد الالكتروني صحيح',
            'email.email' => 'يجب ان يكون البريد الالكتروني صحيح',
            'email.max' => 'لقد وصل عدد الحروف الي الحد الاقصي',
            'email.unique' => 'هذا البريد مكرر من قبل على النظام',
            'password.required' => 'هذا الحقل مطلوب',
            'password.confirmed' => 'يجب تأكيد كلمه المرور بشكل صحيح',
        ]);


        $data = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'type' => 'waiting',
            'code' => $request->country,
        ]);

//        if ($data) {
//            \Mail::to($data->email)->send(new \App\Mail\RegisterMail($data));
//
//        }else{
//            return redirect()->route('home')->with(['success' => ' تم تسجيل عضويتك بنجاح في انتظار موافقه المسئول']);
//
//        }

        return redirect()->route('home')->with(['success' => 'لقد تم تسجيل عضويتك بنجاح في انتظار موافقه المسئول']);


    }
}
