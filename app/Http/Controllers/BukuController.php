<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = M_Buku::paginate(6);
        return view('index')->with([
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    
    /**
    * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate ([
            'judul_buku'=> 'required|max:85',
            'pengarang'=> 'required',
            'penerbit'=> 'required',
            'harga' => 'required',
            'isbn'=> 'required|max:13',
            'thterbit'=>'required']

        );

        $data = $request->except(['_token']);
        M_Buku::insert($data);
        return redirect('/');
    }

    /**
     * Store2 a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        
        
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $data = M_Buku::findOrFail($id);
        return view('show')->with([
            'data'=>$data
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      //  dd($request->all());
        $request->validate ([
            'judul_buku'=> 'required|max:85',
            'pengarang'=> 'required',
            'penerbit'=> 'required',
            'harga' => 'required|max:7',
            'isbn'=> 'required|max:13',
            'thterbit'=>'required'
        ]);

        $data = $request->except(['_token']);
        $item = M_Buku::findOrFail($id);
        $item->update($data);
        return redirect('/');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     
    public function destroy($id)
    {
        $item = M_Buku::findOrFail($id);
        $item->delete();
        return redirect('/');
    }
}
