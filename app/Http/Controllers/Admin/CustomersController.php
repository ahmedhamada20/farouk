<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomersController extends Controller
{
    public function waiting()
    {
        $data = [
            'data' => Customer::orderByDesc('id')->where('type', 'waiting')->when(\request()->keyword != null, function ($query) {
                $query->search(\request()->keyword);
            })
                ->paginate(\request()->paginate ?? 10),
        ];
        return view('admin.customer.waiting', $data);
    }


    public function index()
    {
        $data = [
            'data' => Customer::orderByDesc('id')->when(\request()->keyword != null, function ($query) {
                $query->search(\request()->keyword);
            })
                ->paginate(\request()->paginate ?? 10),
        ];
        return view('admin.customer.index', $data);
    }


    public function customersChange(Request $request)
    {

        Customer::findorfail($request->id)->update([
            'type' => $request->type,
        ]);
        toastr()->success('تم تغير الحاله بنجاح');
        return redirect()->back();
    }


    public function store(Request $request)
    {
        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'type' => 'active',
        ]);
        toastr()->success('تم الحفظ بنجاح');
        return redirect()->back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {

        Customer::findorfail($request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        toastr()->success('تم التعديل بنجاح');
        return redirect()->back();
    }


    public function destroy(Request $request)
    {
        Customer::destroy($request->id);
        toastr()->success('تم الحذف بنجاح');
        return redirect()->back();
    }
}
