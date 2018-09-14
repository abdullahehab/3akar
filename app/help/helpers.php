<?php

//function to return to values of SiteSetting table
function getSetting($settingName = 'name'){ // by default $sittingName equal name of namesetting col.

    return \App\SiteSetting::where('namesetting', $settingName)->get()[0]->value;
}

// Return array contain tupe of builds
function buType(){
    $array = [
      'شقه',
      'فيلا',
      'شاليه'
    ];
    return $array;
}


// Return array contain rent of builds and call it in form.blade.php
function buRent(){
    $array = [
        'بيع',
        'إيجار'
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
    for($number = 1 ; $number <=40 ; $number++){
        $array [] = $number;
    }
    return $array;
}

// Return array contain All Countries and call it in form.blade.php
function buCountry(){
    $array = [
"1"=> "الاسكندرية",
"2"=> "الاسماعيلية",
"3"=> "اسوان",
"4"=> "اسيوط",
"5"=> "الاقصر",
"6"=> "البحر الاحمر",
"7"=> "البحيرة",
"8"=> "بني سويف",
"9"=> "بورسعيد",
"10"=> "جنوب سيناء",
"11"=> "الجيزة",
"12"=> "الدقهلية",
"13"=> "دمياط",
"14"=> "سوهاج",
"15"=> "السويس",
"16"=> "الشرقية",
"17"=> "شمال سيناء",
"18"=> "الغربية",
"19"=> "الفيوم",
"20"=> "القاهرة",
"21"=> "القليوبية",
"22"=> "قنا",
"23"=> "كفر الشيخ",
"24"=> "مطروح",
"25"=> "المنوفية",
"26"=> "المنيا",
"27"=> "الوادي الجديد",

    ];
    return $array;

}

// Rename filed to pass result of search
function searchNameFiled(){
    $array =[
    "bu_price"=>"Price",
    'bu_rooms'=>'Room number',
    'bu_place'=>'Place',
    'bu_type'=>'Type',
    'bu_rent'=>'Operation',
    'bu_square'=>'square',
    'bu_price_to' => 'Price To',
    'bu_price_from' => 'Price From'
    ];
    return $array;
}

function uploadImage($request, $path = '/bu_image/'){
    $imgName = time() . "." . $request->getClientOriginalName();
    Image::make($request)->resize('500','362')->save(public_path($path. $imgName));
    return $imgName;
}

function contact(){
    $array = [
        "1" =>  "Impress",
        "2" =>  "Problem",
        "3" =>  'Suggestions',
        "4" =>  "Enquiry"
    ];
    return $array;
}

function unReadMessage(){
    return \App\CONTACTUS::where('view', 0)->get();
}


