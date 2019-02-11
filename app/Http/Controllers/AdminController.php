<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(\App\Build $build, \App\User $user){
        $allBuild = $build->all();
        $panddingBuild = $build->where('bu_status', 1)->get();
        $unpanddingBuild = $build->where('bu_status', 0)->get();
        $users = $user->all();
        return view('admin.home.index', ['allBuild' =>  $allBuild, 'panddingBuild' => $panddingBuild, 'unpanddingBuild' => $unpanddingBuild, 'users' => $users]);
    }
}
