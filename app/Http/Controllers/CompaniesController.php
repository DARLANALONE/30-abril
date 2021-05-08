<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;

class CompaniesController extends Controller
{
    //view html
    public function index()
    {
        //select + companies
        //$companies = Companies::all();
        $companies = Companies::orderBy('id','desc')->paginate(3);
       return view('companies.index', compact('companies'));

    }
    //formulario view thml
    public function create()
    {
        return view('companies.create');
    }
    public function store(Request $request)
    {
        $companies = Companies::create($request->all());

        return redirect('companies');
    }
}
