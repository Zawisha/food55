<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;


class UsersChangeController extends Controller
{



    public function execute(Request $request, User $user)
    {

        if(Gate::denies('VIEW_ADMIN',Auth::user()))
        {
            abort(403);
        };

        if($request ->isMethod('post')) {
            $input = $request->except('_token');
            $user = new User;
            $user ->unguard();

            foreach( $input as $key => $value){

            $update_role = DB::table('user_role')
                ->where('user_id', $key)
                ->update(['role_id' => $value]);
        }
            return redirect()->route('adminka');


        }


        if($request ->isMethod('get')){
        $users = User::with('roles') ->paginate(8);
        return view('site.users')->with(['users'=> $users]);
            }
    }

}
