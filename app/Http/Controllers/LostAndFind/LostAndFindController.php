<?php

namespace App\Http\Controllers\LostAndFind;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\LostAndFind\LostAndFindModel;

class LostAndFindController extends Controller
{

    public function store(Request $request)
    {
      
        $create = LostAndFindModel::create($request->all());
        return response()->json(array('success' => true, 200));
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
