<?php

namespace App\Http\Controllers;

use App\bu;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\addUserRequsetAdmin;
use Illuminate\Support\Facades\Auth;
use Image;
use Yajra\DataTables\DataTables;
class userController extends Controller
{

    public function profile(){
        return view('admin.user.profile', array('user' => Auth::user()));
    }

    public function updateAvatar(Request $request){

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $avatarName = time() . "." . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('bu_image/'. $avatarName));

            $user = Auth::user();
            $user->avatar = $avatarName;
            $user->save();

        }
        return view('admin.user.profile', array('user' => Auth::user()));

    }

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
        $newUser =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'admin' =>$request->admin,
        ]);
        if($newUser){
            alert()->success('User Created', 'Successfully');
            return redirect('/adminpanel/users');
        }


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
        if($userUpdate){
            alert()->success('User Updated', 'Successfully');
            return redirect('/adminpanel/users');
        }
    }

    public function updatePassword(Request $request){
        $userUpdatepassword = User::find($request->userID);
        $password   =   bcrypt($request->Password);
        $userUpdatepassword->fill(['password' => $password])->save();
        return redirect('/adminpanel/users')->with('status', 'Password updated Successfully!');
    }

    public function destroy($id)
    {
        $user = User::find($id)->delete();
        bu::where('user_id', $id)->delete(); // To delete Bus of deleted user
        if($user){
        alert()->success('The member and its buildings have been deleted', 'Successfully');
        return redirect('/adminpanel/users');
       };

    }

    public function anyData()
    {
      //  $query = User::with('roles')->select('permissions.*')->orderBy('id','desc');

        $users = User::all();
        return DataTables::of($users)
            ->editColumn('name', function ($model){
                return \Html::link('/adminpanel/users/'.$model->id. '/edit', $model->name);
            })

            ->editColumn('admin', function ($model) {
                return $model->admin == 0 ? 'User' : 'Admin';

            })
        /*    ->editColumn('control', function ($model) {

                $all = '<a href="'.url('/adminpanel/users/'.$model->id.'/edit').'" class="btn btn-info btn-default"><i class="fa fa-edit"></i></a>';
                $all .= '<a  href="'.url('/adminpanel/users/'.$model->id.'/delete').'" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>';
                return $all;
            })*/

            ->addColumn('action', function($model){
            $all = '<a href="'.url('/adminpanel/users/'.$model->id.'/edit').'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"</i> Edit</a>';
            $all .= '<a  href="'.url('/adminpanel/users/'.$model->id.'/delete').'" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>';
            return $all;
            })
          //  ->editColumn('id', 'ID: {{$id}}')
          //  ->removeColumn('password')
            ->make(true);
     }
}


