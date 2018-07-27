<?php

namespace App\Http\Controllers;

use App\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domains = Domain::all();
        
        return view('tosee.body', compact('domains'));

            }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('tosee.form');

             }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
            
            $this->validate(request(),[

                'name'=> 'required',

                'language'=>'required',

                'url'=>'required'

            ]);

            Domain::Create([

                'name'=>request('name'),

                'language'=>request('language'),

                'url'=>request('url'),
                
                
            ]);

            return "";



            }



    /**
     * Display the specified resource.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    
    {

        $domain = Domain::find($id);

        return view('tosee.singledomain',compact('domain'));
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function edit($domain)
    {

        $domain = Domain::find($domain);
        return view('tosee.dom',compact('domain'));
            }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function update()
    {

        $data = request()->all();

                 
            $dom = Domain::find($data['domainid']);
            
                $dom-> name = $data['name'];

                $dom-> language = $data['language'];

                $dom-> url = $data['url'];

                $dom->save();
            

           
                
                
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $dom = Domain::find($id);

            $dom-> delete();

            return redirect('/');

            }

    public function selectdom(Request $request)
    {
        $columns =['name', 'language', 'url','id'];

        $length = $request->input('length');
        $column = $request->input('column'); //Index
        $dir = $request->input('dir');
        $searchValue = $request->input('search');
        
        $query = Domain::select('name', 'language', 'url','id')->orderBy($columns[$column], $dir);
        if ($searchValue) {
            $query->where(function($query) use ($searchValue) {
                $query->where('name', 'like', '%' . $searchValue . '%')
                ->orWhere('language', 'like', '%' . $searchValue . '%');
            });
        }
        $projects = $query->paginate($length);
        return ['data' => $projects, 'draw' => $request->input('draw')];
    } 

}

