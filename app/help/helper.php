<?php

function getSetting($settingName = 'side_name'){
    return \App\SiteSetting::where('name_setting', $settingName)->get()[0]->value;
}

function getMassageType($type = 'Success'){
    return $type;
}

function selectPalce(){
    return [
        '1' => 'bahry',
        '2' => 'khartoum',
        '3' => 'omdrman',
    ];
}
function selectType(){
    return [
        '1' => 'Market',
        '2' => 'Department',
        '3' => 'villa',
        '4' => 'build',
        '5' => 'Normal Home',
        '6' => 'office',
    ];
}
function isForRent(){
    return [
        '0' => 'For Rent',
        '1' => 'For Sell',
    ];
}
function getDefaultImage($imageName){
    return $imageName == null ? "default_build_image.png" : "$imageName";
}

function searchNameFiled(){
    return [
        'bu_rent'   => 'For Rent Or Sell ',
        'bu_square' => 'The Square',
        'bu_type'   => 'Type',
        'bu_rooms'  => 'Rooms Number',
    ];
}