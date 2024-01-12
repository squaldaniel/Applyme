<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RecruiterRequest;
use App\Models\RecruitersModel;

class RecruiterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recruiters = RecruitersModel::paginate(10);
        return view('recruiters')->with(['recruiters' => $recruiters]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(RecruiterRequest $request)
    public function store(RecruiterRequest $request)
    {
        $request = (object) $request->except(['_token']);
        try {
           RecruitersModel::create([
                "email" => $request->email,
                "namerecruiter" =>$request->namerecruiter,
                "surname" =>$request->surname,
                "phone" =>$request->phone,
           ]);

        } catch (\Throwable $th) {
            // throw $th;
        }
        return redirect()->back();
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
