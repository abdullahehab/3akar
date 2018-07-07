<?php

//function to return to values of SiteSetting table
function getSetting($settingName = 'name'){ // by default $sittingName equal name of namesetting col.

    return \App\SiteSetting::where('namesetting', $settingName)->get()[0]->value;
}

// Return array contain tupe of builds
function buType(){
    $array = [
      'شقه', 'فيلا', 'شاليه'
    ];
    return $array;
}


// Return array contain rent of builds and call it in form.blade.php
function buRent(){
    $array = [
        'بيع', 'إيجار'
    ];
    return $array;
}

// Return array contain Status of builds and call it in form.blade.php
function buStatus(){
    $array = [
        'غير مُفعل',
        'مُفعل'
    ];
    return $array;
}

// Return array contain Number of room and call it in form.blade.php
function roomNumber(){
    $array = [];
    for($number = 2 ; $number <=40 ; $number++){
        $array [] = $number;
    }
    return $array;
}