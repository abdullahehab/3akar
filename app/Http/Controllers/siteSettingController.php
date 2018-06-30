<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class siteSettingController extends Controller
{
    public function index(SiteSetting $siteSetting){

        $siteSetting = SiteSetting::all();
        return view('admin.siteSetting.index', compact('siteSetting'));
    }

    public function store(Request $request){

        foreach (array_except($request->toArray(), ['_token', 'submit']) as $key => $req) {

             DB::table('siteSetting')
                ->where('namesetting', $key)
                ->update(['value' => $req ]);
        }
         return Redirect::back();
    }

}
