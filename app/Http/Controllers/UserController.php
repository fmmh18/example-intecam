<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $data =  new User;
        return view('user.index',['data' => $data->paginate(15)]);
    }

    public function create(Request $request )
    {
        return view('user.form');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
        }

        $user = User::create($request->all());
 
        echo $user->id;
    }

    public function show($id)
    {
        $data = User::find($id);
        return view('user.form',['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id)->update($request->all());
       echo $data;
    }

    public function delete($id)
    {
        $data = User::find($id)->delete();
        dd($data);
    }
}
