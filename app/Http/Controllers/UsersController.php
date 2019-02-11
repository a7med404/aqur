<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Requests\AddUserRequestAdmin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    public function index(User $user){
        $user = $user->all();
        return view('admin.users.index', ['users' => $user]);
    }

    public function create(){
        return view('admin.users.add');
    }



    public function store(AddUserRequestAdmin $request, User $user)
    {
        $user::create([
            'name'      => $request->name,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
        ]);
        return redirect('adminpanel/users')->withFlashMassage('User Added Susscefully');
    }


    public function edit($id, User $users){
        $userInfo = $users->find($id);
        return view('admin.users.edit',['userInfo' => $userInfo]);
    }



    public function update($id, AddUserRequestAdmin $request, User $Oneuser)
    {
        $userUpdate = $Oneuser->find($id);
        //$email = $Oneuser::where('email',$request->email);
        $userUpdate->fill(['name' => $request->name,'phone' => $request->phone, 'email' => $request->email, 'admin' => $request->admin])->save();
        return redirect()->back()->withFlashMassage('User Added Susscefully');
    }


    public function destroy($id, User $Oneuser){
        $cruentUser = \Auth::user()->id;
        $userForDelete = $Oneuser->find($id);
        if ($id == 1 Or $id == $cruentUser) {
            return redirect()->back()->withFlashMassage('You Can\'t Delete This User');
        }
        $userForDelete->delete();
        return redirect()->back()->withFlashMassage('User Deleted Susscefully');
    }

    public function changePassword($id, User $Oneuser){
        $userInfo = $Oneuser->find($id);
        return view('admin.users.change-password', ['userInfo' => $userInfo]);
    }
    
    public function updatePassword($id, User $Oneuser, Request $request)
    {
        $userUpdate = $Oneuser->find($id);
        $authUser = auth()->user();
        if($request->has('old_password')){
            $adminPassword = $authUser->password;
            $oldPassword  = $request->old_password;
            if (Hash::check($oldPassword, $adminPassword)) {
                $authUser->password = Hash::make($request->password);
                $authUser->save();
                return redirect()->back()->withFlashMassage('Password Updated Susscefully');
            }else {
                return redirect()->back()->withFlashMassage('Password Not Right');
            }
        }elseif ($request->has('password')) {
            $userUpdate->password = Hash::make($request->password);
            $userUpdate->save();
            return redirect()->back()->withFlashMassage('User Deleted Susscefully');
        }
    }



    public function changeMyPassword($id, User $Oneuser){
        $userInfo = $Oneuser->find($id);
        return view('admin.users.change-my-password', ['userInfo' => $userInfo]);
    }

    // public function updateMyPassword($id, User $Oneuser, Request $request){
        
    //     $userPassword = $Oneuser->find($id)->password;
    //     $oldPassword  = $request->old_password;
    //     if (Hash::check($oldPassword, $userPassword)) {
    //         $userPassword->password->save();
    //         return redirect()->back()->withFlashMassage('Password Updated Susscefully');
    //     }else {
    //         return redirect()->back()->withFlashMassage('Password Not Right');
    //     }
    // }





    public function editLevel($id, User $Oneuser, Request $request){
        $userUpdate = $Oneuser->find($id);
        if ($userUpdate->admin == 0) {
            $userUpdate->admin = 1;
        }else {
            $userUpdate->admin = 0;
        }
        $userUpdate->save();
        return redirect()->back()->withFlashMassage('User Updated Susscefully');
    }



    /**
     * From Website
     */

    

    public function CreateNewUser(){
        return view('website.users.add');
    }

        public function storeUser(AddUserRequestAdmin $request, User $user)
    {
        $user::create([
            'name'      => $request->name,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
        ]);
        return redirect('/')->withFlashMassage('User Added Susscefully');
    }


    public function changeUserPassword(User $Oneuser, Request $request){
        return view('website/users.change-user-password');
    }
    public function updatePasswordUser(User $Oneuser, Request $request){
        $authUser = \Auth::user();
        $adminPassword = $authUser->password;
        $oldPassword  = $request->old_password;
        if (Hash::check($oldPassword, $adminPassword)) {
            $authUser->password = Hash::make($request->password);
            $authUser->save();
            return redirect()->back()->withFlashMassage('Password Updated Susscefully');
        }else {
            return redirect()->back()->withFlashMassage('The Old Password Not Right');
        }
    }

    public function Profile(User $Oneuser){
        $userInfo = \Auth::user();
        return view('website/users/profile', ['userInfo' => $userInfo]);
    }
    public function updateProfile(AddUserRequestAdmin $request, User $Oneuser){
        auth()->user()->fill(['name' => $request->name, 'phone' => $request->phone, 'email' => $request->email])->save();
        return redirect()->back()->withFlashMassage('User Update Susscefully');
    }


}