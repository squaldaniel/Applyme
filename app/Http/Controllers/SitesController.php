<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SitesRequest;
use App\Models\SitesModel;

class SitesController extends Controller
{
    public function index()
    {
        $sites = SitesModel::all();
        return view('profile.sites')->with([
                                    'sites'=>$sites,
                                    'count'=>$sites->count()
                                    ]);
    }
    public function store(SitesRequest $request)
    {

        SitesModel::create($request->all());
        return redirect()->back();
    }
}
