<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Companies;

class CompaniesController extends Controller
{

    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index()
    {
        $companies = DB::table('companies')->get();
        return view('companies.index', ['companies' => $companies]);        
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create()
    {
        return view('companies.create');
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @return Response
    * @param Request
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'website' => 'required'
        ]);
      
        Companies::create($request->all());

        return redirect()->route('companies.index')->with('success', 'Company creacted successfully');
        

    }
    
    /**
    * Display the specified resource.
    *
    * @param  Companies  $company
    * @return Response
    */
    public function show(Companies $company)
    {
        return view('companies.show', ['company' => $company]);
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  Companies  $company
    * @return Response
    */
    public function edit(Companies $company)
    {
        return view('companies.edit', ['company' => $company]);
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  Companies  $company
    * @param Request $request
    * @return Response
    */
    public function update(Request $request, $id)
    {
        $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'website' => 'required'
        ]);

        Companies::where('id', '=', $id)->first()->update($request->all());
    
        return redirect()->route('companies.index')->with('success', 'Company updated successfully');
    }
    
        /**
            * Remove the specified resource from storage.
            *
            * @param  Companies $company
            * @return Response
            */
        public function destroy($id)
        {
            Companies::where('id', '=', $id)->first()->delete();

            return redirect()->route('companies.index')->with('success', 'Company deleted successfully');
        }
}
