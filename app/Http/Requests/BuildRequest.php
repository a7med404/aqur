<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuildRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'bu_name'           => 'required|min:5|max:100',
            'bu_price'          => 'required', 
            'bu_rent'           => 'required|integer', 
            'bu_square'         => 'required|min:1|max:10', 
            'bu_type'           => 'required|integer',
            'bu_rooms'          => 'required|integer', 
            'bu_small_des'      => 'min:5|max:160|nullable',
            'bu_meta'           => 'min:5|max:200|nullable', 
            'bu_longitude'      => 'required',  
            'bn_latitude'       => 'required',  
            'bu_large_des'      => 'min:5|nullable', 
            'bu_status'         => 'integer',
            'bu_place'          => 'required',
            // 'bu_image'            => 'required|mimes:png,jpg,jpeg|nullable|max:4096',
        ];
    }
}
