<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    //make middleware in controller
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $authors = Author::orderBy('id','desc')->paginate(5);
        return view('author.index',compact('authors'));
    }


    public function create()
    {
            return view('author.create');
    }


    public function store(Request $request)
    {
        $validataData = $request->validate([
                "name" => "required|min:4|max:220"
            ]);

        Author::create($validataData);
        return redirect('authors');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
