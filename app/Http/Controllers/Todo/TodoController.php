<?php

namespace App\Http\Controllers\Todo;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()    
    {
        $data = Todo::orderBy("task", "asc")->get();
        return view("todo.app", compact("data"));
    }

    /**
     * Show the form for creating a new resource.// untuk menamoilkan formnya
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.// untuk penyimpanan data
     */
    public function store(Request $request)
    {
        $request->validate([
            "task" => "required|min:3|max:25"
        ],[
            "task.required" => "input harus diisi",
            "task.min" => "Minimal 3 karakter",
            "task.max" => "maksimal 25 karakter"
        ]);

        $data = [
            "task" =>$request->input("task"),
        ];

        Todo::create($data);
        return redirect()->route("todo")->with("success","berhasil menyimpan data");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "task" => "required|min:3|max:25"
        ],[
            "task.required" => "input harus diisi",
            "task.min" => "Minimal 3 karakter",
            "task.max" => "maksimal 25 karakter"
        ]);

        $data = [
            "task" =>$request->input("task"),
            "is_done"=>$request->input("is_done")
        ];

        Todo::where("id", $id)->update($data);
        return redirect("/todo")->with("succes", "berhasil update data");
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
