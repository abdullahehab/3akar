<?php

namespace App\Http\Controllers;

use App\bu;
use App\Http\Requests\buRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
            'bu_place'      => $burequest   ->bu_place,
        ];
        $bu->create($data);
        if($bu){
            alert()->success('Build Created', 'Successfully');
            return redirect('adminpanel/bu');
        }

    }

    public function edit($id){
        $bu = bu::find($id);
        return view('admin.bu.edit' , compact('bu'));
    }

    public function update($id, buRequest $request){
        $updatedbu = bu::find($id);
        $updatedbu->fill($request->all())->save();
        if($updatedbu){
            alert()->success('Build Updated', 'Successfully');
            return redirect('adminpanel/bu');
        }
    }

    public function destroy($id){
         $buDeleted = bu::find($id)->delete();
         if($buDeleted){
             alert()->success('Build Deleted','Successfully');
             return redirect('adminpanel/bu');
         }
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



            ->addColumn('action', function($model){
                $all = '<a href="'.url('/adminpanel/bu/'.$model->id.'/edit').'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"</i> Edit</a>';
                $all .= '<a  href="'.url('/adminpanel/bu/'.$model->id.'/delete').'" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>';
                return $all;
            })
            ->make(true);
    }

    // Return all bu that is available
    public function showAllEnable(bu $bu){
        $buAll = $bu->where('bu_status', 1)->paginate(15);
        return view('admin.website.bu.all' , compact('buAll'));

    }

    // Return building for rent or sale
    public function forRentOrSale($type, bu $bu){
        if(in_array($type, ['1','0'])){ // to check opetation rent or sale such whereas sale = 1 & rent = 0
            $buAll = $bu->where('bu_status', 1)->where('bu_rent',$type)->paginate(15); ;
            return view('admin.website.bu.all' , compact('buAll'));
        }else
            return Redirect::back();

    }

    // Return type of build
    public function type($type, bu $bu){
        if(in_array($type, ['1','0','2'])){ // to check builds flats or chalets and  Villa such whereas Villa = 1 , flats = 0 & chalets = 2
            $buAll = $bu->where('bu_status', 1)->where('bu_type',$type)->paginate(15);
            return view('admin.website.bu.all' , compact('buAll'));
        }else
            return Redirect::back();
    }

    public function search(Request $request){

        $requestAll = array_except($request->toArray(),['submit' , '_token', 'page']);
        $query = DB::table('BU')->select('*');
        $array = [];
        $count = count($requestAll);
        $i = 0;

        foreach ($requestAll as $key => $req){
            $i++;
            if($req != ''){

                /* this condition to check the user enter ( Price Prom ) value and return the builds
                 than equal or more than the price*/
                if($key == 'bu_price_from' && $request->bu_price_to == ''){
                    $query->where('bu_price', '>=' , $req);

                /* this condition to check the user enter ( Price Prom ) value and return the builds
                 than equal or less than the price*/
                }elseif($key == 'bu_price_to' && $request->bu_price_from == ''){
                    $query->where('bu_price', '<=' , $req);
                }else{
                    // this condition to check the user does not  enter any Price
                    if($key != 'bu_price_to' && $key != 'bu_price_from'){
                        $query->where($key , $req);
                    }
                }
                $array[$key] = $req;

            /*This Condition To Check If User enter both ( Price To ) & ( Price From ) Values And Return
              That Build Between Them*/
            }elseif($i == $count && $request->bu_price_to != '' && $request->bu_price_from != ''){
                $query->whereBetween('bu_price' , [$request->bu_price_from, $request->bu_price_to]);
               // $array[$key] = $req;
            }

        }
        $buAll = $query->paginate(1);
        return view('admin.website.bu.all' , compact('buAll','array'));

    }

    public function showSingle($id){
        $buInfo = bu::findOrFail($id);
        return view('admin.website.bu.buInfo', compact('buInfo'));
    }
}
