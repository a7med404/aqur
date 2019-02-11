<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SiteSetting;
use App\Http\Requests;


class SiteSettingController extends Controller
{
    public function index(SiteSetting $siteSetting){
        $siteSetting = $siteSetting->all();
        return view('admin.siteSetting.index', ['stieSetting' => $siteSetting]);
    }
    
    public function store(Request $request, SiteSetting $siteSetting){
        dd($request->file($siteSetting->name_setting));
        foreach (array_except($request->toArray(), ['submit', '_token']) as $key => $req) {
            $updateSetting = $siteSetting->where('name_setting', $key)->get()[0];
            $updateSetting->fill(['value' => $req])->save();
        }
        return redirect()->back()->withFlashMassage('Setting Saved Successfully');
    }


}
