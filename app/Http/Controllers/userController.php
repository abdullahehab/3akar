<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\addUserRequsetAdmin;
class userController extends Controller
{

    public function index()
    {

        return view('admin.user.index');

    }


    public function create()
    {
        return view('admin.user.add');
    }


    public function store(addUserRequsetAdmin $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
         return redirect('/adminpanel/users')->with('status', 'User Added Successfully!');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $userEdit = User::find($id);
        return view('admin.user.edit' , compact('userEdit'));
    }


    public function update(Request $request, $id)
    {
        $userUpdate = User::find($id);
        $userUpdate->fill($request->all())->save();
        return redirect()->back()->with('success','User updated Successfully!');
    }

    public function updatePassword(Request $request){
        $userUpdatepassword = User::find($request->userID);
        $password   =   bcrypt($request->Password);
        $userUpdatepassword->fill(['password' => $password])->save();
        return redirect('/adminpanel/users')->with('status', 'Password updated Successfully!');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/adminpanel/users')->with('User Deleted successfully');

    }
}
