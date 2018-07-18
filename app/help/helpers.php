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
"AF"=> "Afghanistan",
"AL"=> "Albania",
"DZ"=> "Algeria",
"AS"=> "American Samoa",
"AD"=> "Andorra",
"AG"=> "Angola",
"AI"=> "Anguilla",
"AG"=> "Antigua &amp; Barbuda",
"AR"=> "Argentina",
"AA"=> "Armenia",
"AW"=> "Aruba",
"AU"=> "Australia",
"AT"=> "Austria",
"AZ"=> "Azerbaijan",
"BS"=> "Bahamas",
"BH"=> "Bahrain",
"BD"=> "Bangladesh",
"BB"=> "Barbados",
"BY"=> "Belarus",
"BE"=> "Belgium",
"BZ"=> "Belize",
"BJ"=> "Benin",
"BM"=> "Bermuda",
"BT"=> "Bhutan",
"BO"=> "Bolivia",
"BL"=> "Bonaire",
"BA"=> "Bosnia &amp; Herzegovina",
"BW"=> "Botswana",
"BR"=> "Brazil",
"BC"=> "British Indian Ocean Ter",
"BN"=> "Brunei",
"BG"=> "Bulgaria",
"BF"=> "Burkina Faso",
"BI"=> "Burundi",
"KH"=> "Cambodia",
"CM"=> "Cameroon",
"CA"=> "Canada",
"IC"=> "Canary Islands",
"CV"=> "Cape Verde",
"KY"=> "Cayman Islands",
"CF"=> "Central African Republic",
"TD"=> "Chad",
"CD"=> "Channel Islands",
"CL"=> "Chile",
"CN"=> "China",
"CI"=> "Christmas Island",
"CS"=> "Cocos Island",
"CO"=> "Colombia",
"CC"=> "Comoros",
"CG"=> "Congo",
"CK"=> "Cook Islands",
"CR"=> "Costa Rica",
"CT"=> "Cote D'Ivoire",
"HR"=> "Croatia",
"CU"=> "Cuba",
"CB"=> "Curacao",
"CY"=> "Cyprus",
"CZ"=> "Czech Republic",
"DK"=> "Denmark",
"DJ"=> "Djibouti",
"DM"=> "Dominica",
"DO"=> "Dominican Republic",
"TM"=> "East Timor",
"EC"=> "Ecuador",
"EG"=> "Egypt",
"SV"=> "El Salvador",
"GQ"=> "Equatorial Guinea",
"ER"=> "Eritrea",
"EE"=> "Estonia",
"ET"=> "Ethiopia",
"FA"=> "Falkland Islands",
"FO"=> "Faroe Islands",
"FJ"=> "Fiji",
"FI"=> "Finland",
"FR"=> "France",
"F"=> "French Guiana",
"PF"=> "French Polynesia",
"FS"=> "French Southern Ter",
"GA"=> "Gabon",
"GM"=> "Gambia",
"GE"=> "Georgia",
"DE"=> "Germany",
"H"=> "Ghana",
"GI"=> "Gibraltar",
"GB"=> "Great Britain",
"GR"=> "Greece",
"GL"=> "Greenland",
"GD"=> "Grenada",

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