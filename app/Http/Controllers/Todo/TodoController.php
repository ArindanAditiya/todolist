<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("todo.app");
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
