<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Validator;

class Upload extends Controller
{
    public static function upload($files){
        $i = 0;
        foreach ($files as $file) {
            $niceName['file'.$i] = 'The File ['.($i+1).']';
            $i++;
        }

        $this->validate($files, ['file' => 'required|image|jpg,jpeg,png'],[], $niceName);

        foreach ($files as $file) {
            $name = $file->getClientOriginalName(); 
            $exte = $file->getClientOriginalExtension(); 
            $size = $file->getSize(); 
            $mime = $file->getMimeType(); 
            $temp = $file->getRealPath(); 

            $newName = 'image_'.time().'.'.$exte;
            $file->move(public_path('uploads'), $newName);

           // $file->move(public_path('uploads', 'image_'.time().'_'.$name.$exte), $temp);
        }
    }


    # For New Upload
        $newName = null; # For If Not Have Image Set Null
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newName = time().'_'.$file->getClientOriginalName();
            $file->storeAs('public/images/customers', $newName);
        }


    # For Update Single Upload
         $newName = null; # For If Not Have Image Set Null
        if ($request->has('delete_image')) {
            \Storage::delete($customerInfo->image);
        }
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newName = time().'_'.$file->getClientOriginalName();
            $file->storeAs('public/images/customers', $newName);
            \Storage::delete($customerInfo->image);
        }




        $newName = null; # For If Not Have Image Set Null
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newName = time().'_'.$file->getClientOriginalName();
            return  $file->storeAs('public/images/customers', $newName);

            # return  $file->store('Path'); # => Return File Name
            # return  $file->path(); # => Return File Temp Path
            # return  $file->extension(); # => Return File Extension

            # For Save File In Dir All So 
            # \Storage::put(filePath, $contents);
            # \Storage::putFile('filePath', $file);

            # For Get File From The Dir
            # return \Storage::allFiles('filePath'); # Get All Files With In Sub Dir
            # return \Storage::files('filePath');
            

            /* $name = $file->getClientOriginalName(); 
            $exte = $file->getClientOriginalExtension(); 
            $size = $file->getSize(); 
            $mime = $file->getMimeType(); 
            $temp = $file->getRealPath(); 
            
            $newName = 'image_'.time().'.'.$exte;
            $file->move(public_path('uploads'), $newName); */
        }
}
