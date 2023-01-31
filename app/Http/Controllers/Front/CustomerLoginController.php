<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\CustomerLoginRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RequestSercice;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerLoginController extends Controller
{


    public function customer()
    {
        return view('front.user.index');
    }

    public function customerProduct()
    {
        $data = RequestSercice::where('customer_id',auth()->user()->id)->get();
        return view('front.user.product.index',compact('data'));
    }


    public function profile()
    {
        $customer = Customer::findorfail(\auth('customer')->user()->id);
        return view('front.user.profile.index',compact('customer'));
    }

    public function UpdateProfile(Request $request)
    {
        $customer = Customer::findorfail(\auth('customer')->user()->id);
        $customer->name = $request->name;
        $customer->address = $request->address;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/profile'), $filename);
            $customer['image']= $filename;
        }

        if (isset($request->password)){
            $customer->password = Hash::make($request->password);
            $customer->save();
            Auth::guard('customer')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/ar')->with(['success'=> 'تم تحديث بياناتك']);
        }



        $customer->save();
        return redirect()->back()->with(['success'=> 'تم تحديث بياناتك']);


    }

    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('front.user.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CustomerLoginRequest $request)
    {
        if (auth('customer')->attempt(['email' => $request->email, 'password' => $request->password, 'type' => 'active'])) {

            $request->authenticate();

            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::CUSTOMER);
        }else{
            return redirect()->back()->with(['error'=> 'هناك خطأ في البيانات برجاء التواصل مع المسئول']);
        }

    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('customer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/ar');
    }
}
