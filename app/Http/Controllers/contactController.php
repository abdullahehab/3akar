<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CONTACTUS;
use App\Http\Requests\ContactRequest;
use Yajra\DataTables\DataTables;

class contactController extends Controller
{

    public function index()
    {
        return view('admin.contact.index');
    }


    public function create()
    {
        //
    }


    public function store(ContactRequest $request, CONTACTUS $contact)
    {
        $contact->create($request->all());

        if($contact){
            alert()->success('Message Send', 'Successfully');
            return redirect('contactUs');
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $contactUs = CONTACTUS::find($id);
        return view('admin.contact.edit', compact('contactUs'));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function anyData()
    {

        return DataTables::of(CONTACTUS::all())
            ->editColumn('contact_name', function ($model){
                return \Html::link('/adminpanel/contactUs/'.$model->id. '/edit', $model->contact_name);
            })

            ->editColumn('contact_type', function ($model) {
                return contact()[$model->contact_type];

            })

            ->editColumn('view', function ($model) {
                return $model->view == 0 ? 'New Message' : 'Read message';

            })


            ->addColumn('action', function($model){
                $all = '<a href="'.url('/adminpanel/contactUs/'.$model->id.'/edit').'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"</i> Edit</a>';
                $all .= '<a  href="'.url('/adminpanel/contactUs/'.$model->id.'/delete').'" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>';
                return $all;
            })
            ->make(true);
    }
}