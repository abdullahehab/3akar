<?php

namespace App\Http\Controllers;

use App\bu;
use App\Http\Requests\buRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\DataTables;
class buController extends Controller
{
    public function index(){
        return view('admin.bu.index');
    }

    public function create(){
        return view('admin.bu.add');
    }

    public function store(buRequest $burequest, bu $bu){
        $data = [
            'bu_name'       =>  $burequest  ->  bu_name,
            'bu_price'      =>  $burequest  ->  bu_price,
            'bu_rent'       =>  $burequest  ->  bu_rent,
            'bu_square'     =>  $burequest  ->  bu_square,
            'bu_type'       =>  $burequest  ->  bu_type,
            'bu_small_des'  =>  $burequest  ->  bu_small_des,
            'bu_meta'       =>  $burequest  ->  bu_meta,
            'bu_langtuide'  =>  $burequest  -> bu_langtuide,
            'bu_latitude'   =>  $burequest  ->  bu_latitude,
            'bu_large_dis'  =>  $burequest  ->  bu_large_dis,
            'bu_status'     =>  $burequest  ->  bu_status,
            'user_id'       => Auth::id(),
            'bu_rooms'      => $burequest   -> bu_rooms,
        ];
        $bu->create($data);
        return redirect('adminpanel/bu');
    }

    public function edit($id){
        $bu = bu::find($id);
        return view('admin.bu.edit' , compact('bu'));
    }

    public function update($id, buRequest $request){
        $updatedbu = bu::find($id);
        $updatedbu->fill($request->all())->save();
        return Redirect::back();
    }

    public function destroy($id){
        bu::find($id)->delete();
        return redirect('adminpanel/bu');

    }


    public function anyData()
    {

        return DataTables::of(bu::all())
            ->editColumn('bu_name', function ($model){
                return $model->bu_name;
            })

            ->editColumn('bu_status', function ($model) {
                return $model->bu_status == 0 ? 'مٌفعل' : 'غير مٌفعل';

            })

            ->editColumn('bu_type', function ($model) {
                $type = buType();
                return $type[$model->bu_type];

            })

            ->editColumn('control', function ($model) {

                $all = '<a href="'.url('/adminpanel/bu/'.$model->id.'/edit').'" class="btn btn-info btn-default"><i class="fa fa-edit"></i></a>';
                $all .= '<a  href="'.url('/adminpanel/bu/'.$model->id.'/delete').'" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>';
                return $all;
            })
            ->make(true);
    }

    // Return all bu that is available
    public function showAllEnable(bu $bu){
        $buAll = $bu->where('bu_status', 1)->orderBy('id', 'desc')->get()->toArray();
        return view('admin.website.bu.all' , compact('buAll'));

    }
}
