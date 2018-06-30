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