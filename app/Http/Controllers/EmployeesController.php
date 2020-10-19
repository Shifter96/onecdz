<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeesController extends Controller
{
    public function index(){
        $employees = [];
        $users = User::all();
        foreach($users as $user){
            if($user->hasRole('employe')){
                array_push($employees, $user);
            }
        }
        return view('employees.index',['employees' => $employees]);

    }
    public function delete(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/employees');
    }
    public function store(Request $request){

        if(User::where('email',$request->input('email'))->first() != null){
            return response()->json(['message' => 'email already used']);
        }else{
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            if($user->save()){
                $user_a = User::where('email',$request->input('email'))->first();
                $user_a->roles()->attach(2);
                return redirect('/employees');
            }else{
                return response()->json(['message' => 'problem when adding!!'],500);
            }
        }
    }
}
