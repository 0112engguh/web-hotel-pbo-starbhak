<?php

namespace App\Http\Controllers\Api;

use App\Models\Userr;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserrResource;
use Illuminate\Support\Facades\Validator;

class UserrController extends Controller
{
    public function index()
    {
        //get posts
        $users = Userr::latest()->paginate(5);

        //return collection of users as a resource
        return new UserrResource(true, 'List Data User', $users);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'username'     => 'required',
            'password'   => 'required',
            'email'   => 'required',
            'level'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        

        //create post
        $datauserr = Userr::create([
            'username'     => $request->username,
            'password'   => $request->password,
            'email'     => $request->email,
            'level'     => $request->level,
        ]);

        //return response
        return new UserrResource(true, 'Data User Berhasil Ditambahkan!', $datauserr);
    }

    public function show(Userr $userr)
    {
        //return single post as a resource
        return new UserrResource(true, 'Data User Ditemukan!', $userr);
    }

    

    public function update(Request $request, Userr $userr)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'username'     => 'required',
            'password'   => 'required',
            'email'   => 'required',
            'level'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $userr->update([
            'username'     => $request->username,
            'password'   => $request->password,
            'email'   => $request->email,
            'level'   => $request->level,
        ]);

        //return response
        return new UserrResource(true, 'Data User Berhasil Diubah!', $userr);
    }

    public function destroy(Userr $userr)
    {
       

        //delete post
        $userr->delete();

        //return response
        return new UserrResource(true, 'Data User Berhasil Dihapus!', null);
    }
}


