<?php
    $carrera = $_POST["carrera"];
    $cuatrimestre = $_POST["cuatrimestre"];
    $grupo = $_POST["grupo"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];

    $computadora = isset($_POST[computadora])? 1: 0;
    $laptop = isset($_POST["laptop"])? 1 :0;
    $tablet = isset($_POST["tablet"])? 1 :0;
    $smart = isset($_POST["smart"])? 1 :0;
    $noTengo = isset($_POST["noTengo"])? 1 :0;

    $Facebook1 = isset($_POST["Facebook1"])? 1: 0;
    $YouTube1 = isset($_POST["YouTube1"])? 1: 0;
    $Instagram1 = isset($_POST["Instagram1"])? 1: 0;
    $LinkedIn1 = isset($_POST["LinkedIn1"])? 1: 0;
    $Google1 = isset($_POST["Google1"])? 1: 0;
    $Twitter1 = isset($_POST["Twitter1"])? 1: 0;
    $WhatsApp1 = isset($_POST["WhatsApp1"])? 1: 0;
    $Messenger1 = isset($_POST["Messenger1"])? 1: 0;
    $SnapChat1 = isset($_POST["SnapChat1"])? 1: 0;
    $Classmates1 = isset($_POST["Classmates1"])? 1: 0;
    $Academia1 = isset($_POST["Academia1"])? 1: 0;
    $StudiVZ1 = isset($_POST["tudiVZ1"])? 1: 0;
    $EducaNetwork1 = isset($_POST["EducaNetwork1"])? 1: 0;
    $Edmodo1 = isset($_POST["Edmodo1"])? 1: 0;
    $Schoology1 = isset($_POST["Schoology1"])? 1: 0;
    $Brainly1 = isset($_POST["Brainly1"])? 1: 0;
    $Eduredes1 = isset($_POST["Eduredes1"])? 1: 0;
    $Docsity1 = isset($_POST["Docsity1"])? 1: 0;
    $OtraEducacion1 = isset($_POST["Otraducacion1"])? 1: 0;
    $RedAlumnos1 = isset($_POST["RedAlumnos1"])? 1: 0;
    $Educared1 = isset($_POST["Educared1"])? 1: 0;
    $Eduteka1 = isset($_POST["Eduteka1"])? 1: 0;
    $Skype1 = isset($_POST["Skype1"])? 1: 0;
    $Badoo1 = isset($_POST["Badoo1"])? 1: 0;
    $total1 = $_POST["total1"];

    $Facebook2 = isset($_POST["Facebook2"])? 1: 0;
    $YouTube2 = isset($_POST["YouTube2"])? 1: 0;
    $Instagram2 = isset($_POST["Instagram2"])? 1: 0;
    $LinkedIn2 = isset($_POST["LinkedIn2"])? 1: 0;
    $Google2 = isset($_POST["Google2"])? 1: 0;
    $Twitter2 = isset($_POST["Twitter2"])? 1: 0;
    $WhatsApp2 = isset($_POST["WhatsApp2"])? 1: 0;
    $Messenger2 = isset($_POST["Messenger2"])? 1: 0;
    $SnapChat2 = isset($_POST["SnapChat2"])? 1: 0;
    $Classmates2 = isset($_POST["Classmates2"])? 1: 0;
    $Academia2 = isset($_POST["Academia2"])? 1: 0;
    $StudiVZ2 = isset($_POST["tudiVZ2"])? 1: 0;
    $EducaNetwork2 = isset($_POST["EducaNetwork2"])? 1: 0;
    $Edmodo2 = isset($_POST["Edmodo2"])? 1: 0;
    $Schoology2 = isset($_POST["Schoology2"])? 1: 0;
    $Brainly2 = isset($_POST["Brainly2"])? 1: 0;
    $Eduredes2 = isset($_POST["Eduredes2"])? 1: 0;
    $Docsity2 = isset($_POST["Docsity2"])? 1: 0;
    $OtraEducacion2 = isset($_POST["Otraducacion2"])? 1: 0;
    $RedAlumnos2 = isset($_POST["RedAlumnos2"])? 1: 0;
    $Educared2 = isset($_POST["Educared2"])? 1: 0;
    $Eduteka2 = isset($_POST["Eduteka2"])? 1: 0;
    $Skype2 = isset($_POST["Skype2"])? 1: 0;
    $Badoo2 = isset($_POST["Badoo2"])? 1: 0;
    $total2 = $_POST["total2"];

    $Facebook3 = isset($_POST["Facebook3"])? 1: 0;
    $YouTube3 = isset($_POST["YouTube3"])? 1: 0;
    $Instagram3 = isset($_POST["Instagram3"])? 1: 0;
    $LinkedIn3 = isset($_POST["LinkedIn3"])? 1: 0;
    $Google3 = isset($_POST["Google3"])? 1: 0;
    $Twitter3 = isset($_POST["Twitter3"])? 1: 0;
    $WhatsApp3 = isset($_POST["WhatsApp3"])? 1: 0;
    $Messenger3 = isset($_POST["Messenger3"])? 1: 0;
    $SnapChat3 = isset($_POST["SnapChat3"])? 1: 0;
    $Classmates3 = isset($_POST["Classmates"])? 1: 0;
    $Academia3 = isset($_POST["Academia3"])? 1: 0;
    $StudiVZ3 = isset($_POST["tudiVZ3"])? 1: 0;
    $EducaNetwork3 = isset($_POST["EducaNetwork3"])? 1: 0;
    $Edmodo3 = isset($_POST["Edmodo3"])? 1: 0;
    $Schoology3 = isset($_POST["Schoology3"])? 1: 0;
    $Brainly3 = isset($_POST["Brainly3"])? 1: 0;
    $Eduredes3 = isset($_POST["Eduredes3"])? 1: 0;
    $Docsity3 = isset($_POST["Docsity3"])? 1: 0;
    $OtraEducacion3 = isset($_POST["Otraducacion3"])? 1: 0;
    $RedAlumnos3 = isset($_POST["RedAlumnos3"])? 1: 0;
    $Educared3 = isset($_POST["Educared3"])? 1: 0;
    $Eduteka3 = isset($_POST["Eduteka3"])? 1: 0;
    $Skype3 = isset($_POST["Skype3"])? 1: 0;
    $Badoo3 = isset($_POST["Badoo3"])? 1: 0;
    $total3 = $_POST["total3"];

    $Facebook4 = isset($_POST["Facebook4"])? 1: 0;
    $YouTube4 = isset($_POST["YouTube4"])? 1: 0;
    $Instagram4 = isset($_POST["Instagram4"])? 1: 0;
    $LinkedIn4 = isset($_POST["LinkedIn4"])? 1: 0;
    $Google4 = isset($_POST["Google4"])? 1: 0;
    $Twitter4 = isset($_POST["Twitter4"])? 1: 0;
    $WhatsApp4 = isset($_POST["WhatsApp4"])? 1: 0;
    $Messenger4 = isset($_POST["Messenger4"])? 1: 0;
    $SnapChat4 = isset($_POST["SnapChat4"])? 1: 0;
    $Classmates4 = isset($_POST["Classmates4"])? 1: 0;
    $Academia4 = isset($_POST["Academia4"])? 1: 0;
    $StudiVZ4 = isset($_POST["tudiVZ4"])? 1: 0;
    $EducaNetwork4 = isset($_POST["EducaNetwork4"])? 1: 0;
    $Edmodo4 = isset($_POST["Edmodo4"])? 1: 0;
    $Schoology4 = isset($_POST["Schoology4"])? 1: 0;
    $Brainly4 = isset($_POST["Brainly4"])? 1: 0;
    $Eduredes4 = isset($_POST["Eduredes4"])? 1: 0;
    $Docsity4 = isset($_POST["Docsity4"])? 1: 0;
    $OtraEducacion4 = isset($_POST["Otraducacion4"])? 1: 0;
    $RedAlumnos4 = isset($_POST["RedAlumnos4"])? 1: 0;
    $Educared4 = isset($_POST["Educared4"])? 1: 0;
    $Eduteka4 = isset($_POST["Eduteka4"])? 1: 0;
    $Skype4 = isset($_POST["Skype4"])? 1: 0;
    $Badoo4 = isset($_POST["Badoo4"])? 1: 0;
    $total4 = $_POST["total4"];

    $Facebook5 = isset($_POST["Facebook5"])? 1: 0;
    $YouTube5 = isset($_POST["YouTube5"])? 1: 0;
    $Instagram5 = isset($_POST["Instagram5"])? 1: 0;
    $LinkedIn5 = isset($_POST["LinkedIn5"])? 1: 0;
    $Google5 = isset($_POST["Google5"])? 1: 0;
    $Twitter5 = isset($_POST["Twitter5"])? 1: 0;
    $WhatsApp5 = isset($_POST["WhatsApp5"])? 1: 0;
    $Messenger5 = isset($_POST["Messenger5"])? 1: 0;
    $SnapChat5 = isset($_POST["SnapChat5"])? 1: 0;
    $Classmates5 = isset($_POST["Classmates5"])? 1: 0;
    $Academia5 = isset($_POST["Academia5"])? 1: 0;
    $StudiVZ5 = isset($_POST["tudiVZ5"])? 1: 0;
    $EducaNetwork5 = isset($_POST["EducaNetwork5"])? 1: 0;
    $Edmodo5 = isset($_POST["Edmodo5"])? 1: 0;
    $Schoology5 = isset($_POST["Schoology5"])? 1: 0;
    $Brainly5 = isset($_POST["Brainly5"])? 1: 0;
    $Eduredes5 = isset($_POST["Eduredes5"])? 1: 0;
    $Docsity5 = isset($_POST["Docsity5"])? 1: 0;
    $OtraEducacion5 = isset($_POST["Otraducacion5"])? 1: 0;
    $RedAlumnos5 = isset($_POST["RedAlumnos5"])? 1: 0;
    $Educared5 = isset($_POST["Educared5"])? 1: 0;
    $Eduteka5 = isset($_POST["Eduteka5"])? 1: 0;
    $Skype5 = isset($_POST["Skype5"])? 1: 0;
    $Badoo5 = isset($_POST["Badoo5"])? 1: 0;
    $total5 = $_POST["total5"];

    $Facebook6 = isset($_POST["Facebook6"])? 1: 0;
    $YouTube6 = isset($_POST["YouTube6"])? 1: 0;
    $Instagram6 = isset($_POST["Instagram6"])? 1: 0;
    $LinkedIn6 = isset($_POST["LinkedIn6"])? 1: 0;
    $Google6 = isset($_POST["Google6"])? 1: 0;
    $Twitter6 = isset($_POST["Twitter6"])? 1: 0;
    $WhatsApp6 = isset($_POST["WhatsApp6"])? 1: 0;
    $Messenger6 = isset($_POST["Messenger6"])? 1: 0;
    $SnapChat6 = isset($_POST["SnapChat6"])? 1: 0;
    $Classmates6 = isset($_POST["Classmates6"])? 1: 0;
    $Academia6 = isset($_POST["Academia6"])? 1: 0;
    $StudiVZ6 = isset($_POST["tudiVZ6"])? 1: 0;
    $EducaNetwork6 = isset($_POST["EducaNetwork6"])? 1: 0;
    $Edmodo6 = isset($_POST["Edmodo6"])? 1: 0;
    $Schoology6 = isset($_POST["Schoology6"])? 1: 0;
    $Brainly6 = isset($_POST["Brainly6"])? 1: 0;
    $Eduredes6 = isset($_POST["Eduredes6"])? 1: 0;
    $Docsity6 = isset($_POST["Docsity6"])? 1: 0;
    $OtraEducacion6 = isset($_POST["Otraducacion6"])? 1: 0;
    $RedAlumnos6 = isset($_POST["RedAlumnos6"])? 1: 0;
    $Educared6 = isset($_POST["Educared6"])? 1: 0;
    $Eduteka6 = isset($_POST["Eduteka6"])? 1: 0;
    $Skype6 = isset($_POST["Skype6"])? 1: 0;
    $Badoo6 = isset($_POST["Badoo6"])? 1: 0;
    $total6 = $_POST["total6"];

    $Facebook7 = isset($_POST["Facebook7"])? 1: 0;
    $YouTube7 = isset($_POST["YouTube7"])? 1: 0;
    $Instagram7 = isset($_POST["Instagram7"])? 1: 0;
    $LinkedIn7 = isset($_POST["LinkedIn7"])? 1: 0;
    $Google7 = isset($_POST["Google7"])? 1: 0;
    $Twitter7 = isset($_POST["Twitter7"])? 1: 0;
    $WhatsApp7 = isset($_POST["WhatsApp7"])? 1: 0;
    $Messenger7 = isset($_POST["Messenger7"])? 1: 0;
    $SnapChat7 = isset($_POST["SnapChat7"])? 1: 0;
    $Classmates7 = isset($_POST["Classmates7"])? 1: 0;
    $Academia7 = isset($_POST["Academia7"])? 1: 0;
    $StudiVZ7 = isset($_POST["tudiVZ7"])? 1: 0;
    $EducaNetwork7 = isset($_POST["EducaNetwork7"])? 1: 0;
    $Edmodo7 = isset($_POST["Edmodo7"])? 1: 0;
    $Schoology7 = isset($_POST["Schoology7"])? 1: 0;
    $Brainly7 = isset($_POST["Brainly7"])? 1: 0;
    $Eduredes7 = isset($_POST["Eduredes7"])? 1: 0;
    $Docsity7 = isset($_POST["Docsity7"])? 1: 0;
    $OtraEducacion7 = isset($_POST["Otraducacion7"])? 1: 0;
    $RedAlumnos7 = isset($_POST["RedAlumnos7"])? 1: 0;
    $Educared7 = isset($_POST["Educared7"])? 1: 0;
    $Eduteka7 = isset($_POST["Eduteka7"])? 1: 0;
    $Skype7 = isset($_POST["Skype7"])? 1: 0;
    $Badoo7 = isset($_POST["Badoo7"])? 1: 0;
    $total7 = $_POST["total7"];

    $Facebook8 = isset($_POST["Facebook8"])? 1: 0;
    $YouTube8 = isset($_POST["YouTube8"])? 1: 0;
    $Instagram8 = isset($_POST["Instagram8"])? 1: 0;
    $LinkedIn8 = isset($_POST["LinkedIn8"])? 1: 0;
    $Google8 = isset($_POST["Google8"])? 1: 0;
    $Twitter8 = isset($_POST["Twitter8"])? 1: 0;
    $WhatsApp8 = isset($_POST["WhatsApp8"])? 1: 0;
    $Messenger8 = isset($_POST["Messenger8"])? 1: 0;
    $SnapChat8 = isset($_POST["SnapChat8"])? 1: 0;
    $Classmates8 = isset($_POST["Classmates8"])? 1: 0;
    $Academia8 = isset($_POST["Academia8"])? 1: 0;
    $StudiVZ8 = isset($_POST["tudiVZ8"])? 1: 0;
    $EducaNetwork8 = isset($_POST["EducaNetwork8"])? 1: 0;
    $Edmodo8 = isset($_POST["Edmodo8"])? 1: 0;
    $Schoology8 = isset($_POST["Schoology8"])? 1: 0;
    $Brainly8 = isset($_POST["Brainly8"])? 1: 0;
    $Eduredes8 = isset($_POST["Eduredes8"])? 1: 0;
    $Docsity8 = isset($_POST["Docsity8"])? 1: 0;
    $OtraEducacion8 = isset($_POST["Otraducacion8"])? 1: 0;
    $RedAlumnos8 = isset($_POST["RedAlumnos8"])? 1: 0;
    $Educared8 = isset($_POST["Educared8"])? 1: 0;
    $Eduteka8 = isset($_POST["Eduteka8"])? 1: 0;
    $Skype8 = isset($_POST["Skype8"])? 1: 0;
    $Badoo8 = isset($_POST["Badoo8"])? 1: 0;
    $total8 = $_POST["total8"];

    $Facebook9 = isset($_POST["Facebook9"])? 1: 0;
    $YouTube9 = isset($_POST["YouTube9"])? 1: 0;
    $Instagram9 = isset($_POST["Instagram9"])? 1: 0;
    $LinkedIn9 = isset($_POST["LinkedIn9"])? 1: 0;
    $Google9 = isset($_POST["Google9"])? 1: 0;
    $Twitter9 = isset($_POST["Twitter9"])? 1: 0;
    $WhatsApp9 = isset($_POST["WhatsApp9"])? 1: 0;
    $Messenger9 = isset($_POST["Messenger9"])? 1: 0;
    $SnapChat9 = isset($_POST["SnapChat9"])? 1: 0;
    $Classmates9 = isset($_POST["Classmates9"])? 1: 0;
    $Academia9 = isset($_POST["Academia9"])? 1: 0;
    $StudiVZ9 = isset($_POST["tudiVZ9"])? 1: 0;
    $EducaNetwork9 = isset($_POST["EducaNetwork9"])? 1: 0;
    $Edmodo9 = isset($_POST["Edmodo9"])? 1: 0;
    $Schoology9 = isset($_POST["Schoology9"])? 1: 0;
    $Brainly9 = isset($_POST["Brainly9"])? 1: 0;
    $Eduredes9 = isset($_POST["Eduredes9"])? 1: 0;
    $Docsity9 = isset($_POST["Docsity9"])? 1: 0;
    $OtraEducacion9 = isset($_POST["Otraducacion9"])? 1: 0;
    $RedAlumnos9 = isset($_POST["RedAlumnos9"])? 1: 0;
    $Educared9 = isset($_POST["Educared9"])? 1: 0;
    $Eduteka9 = isset($_POST["Eduteka9"])? 1: 0;
    $Skype9 = isset($_POST["Skype9"])? 1: 0;
    $Badoo9 = isset($_POST["Badoo9"])? 1: 0;
    $total9 = $_POST["total9"];

    $Facebook10 = isset($_POST["Facebook10"])? 1: 0;
    $YouTube10 = isset($_POST["YouTube10"])? 1: 0;
    $Instagram10 = isset($_POST["Instagram10"])? 1: 0;
    $LinkedIn10 = isset($_POST["LinkedIn10"])? 1: 0;
    $Google10 = isset($_POST["Google10"])? 1: 0;
    $Twitter10 = isset($_POST["Twitter10"])? 1: 0;
    $WhatsApp10 = isset($_POST["WhatsApp10"])? 1: 0;
    $Messenger10 = isset($_POST["Messenger10"])? 1: 0;
    $SnapChat10 = isset($_POST["SnapChat10"])? 1: 0;
    $Classmates10 = isset($_POST["Classmates10"])? 1: 0;
    $Academia10 = isset($_POST["Academia10"])? 1: 0;
    $StudiVZ10 = isset($_POST["tudiVZ10"])? 1: 0;
    $EducaNetwork10 = isset($_POST["EducaNetwork10"])? 1: 0;
    $Edmodo10 = isset($_POST["Edmodo10"])? 1: 0;
    $Schoology10 = isset($_POST["Schoology10"])? 1: 0;
    $Brainly10 = isset($_POST["Brainly10"])? 1: 0;
    $Eduredes10 = isset($_POST["Eduredes10"])? 1: 0;
    $Docsity10 = isset($_POST["Docsity10"])? 1: 0;
    $OtraEducacion10 = isset($_POST["Otraducacion10"])? 1: 0;
    $RedAlumnos10 = isset($_POST["RedAlumnos10"])? 1: 0;
    $Educared10 = isset($_POST["Educared10"])? 1: 0;
    $Eduteka10 = isset($_POST["Eduteka10"])? 1: 0;
    $Skype10 = isset($_POST["Skype10"])? 1: 0;
    $Badoo10 = isset($_POST["Badoo10"])? 1: 0;
    $total10 = $_POST["total10"];

    $Facebook11 = isset($_POST["Facebook11"])? 1: 0;
    $YouTube11 = isset($_POST["YouTube11"])? 1: 0;
    $Instagram11 = isset($_POST["Instagram11"])? 1: 0;
    $LinkedIn11 = isset($_POST["LinkedIn11"])? 1: 0;
    $Google11 = isset($_POST["Google11"])? 1: 0;
    $Twitter11 = isset($_POST["Twitter11"])? 1: 0;
    $WhatsApp11 = isset($_POST["WhatsApp11"])? 1: 0;
    $Messenger11 = isset($_POST["Messenger11"])? 1: 0;
    $SnapChat11 = isset($_POST["SnapChat11"])? 1: 0;
    $Classmates11 = isset($_POST["Classmates11"])? 1: 0;
    $Academia11 = isset($_POST["Academia11"])? 1: 0;
    $StudiVZ11 = isset($_POST["tudiVZ11"])? 1: 0;
    $EducaNetwork11 = isset($_POST["EducaNetwork11"])? 1: 0;
    $Edmodo11 = isset($_POST["Edmodo11"])? 1: 0;
    $Schoology11 = isset($_POST["Schoology11"])? 1: 0;
    $Brainly11 = isset($_POST["Brainly11"])? 1: 0;
    $Eduredes11 = isset($_POST["Eduredes11"])? 1: 0;
    $Docsity11 = isset($_POST["Docsity11"])? 1: 0;
    $OtraEducacion11 = isset($_POST["Otraducacion11"])? 1: 0;
    $RedAlumnos11 = isset($_POST["RedAlumnos11"])? 1: 0;
    $Educared11 = isset($_POST["Educared11"])? 1: 0;
    $Eduteka11 = isset($_POST["Eduteka11"])? 1: 0;
    $Skype11 = isset($_POST["Skype11"])? 1: 0;
    $Badoo11 = isset($_POST["Badoo11"])? 1: 0;
    $total11 = $_POST["total11"];

    $Facebook12 = isset($_POST["Facebook12"])? 1: 0;
    $YouTube12 = isset($_POST["YouTube12"])? 1: 0;
    $Instagram12 = isset($_POST["Instagram12"])? 1: 0;
    $LinkedIn12 = isset($_POST["LinkedIn12"])? 1: 0;
    $Google12 = isset($_POST["Google12"])? 1: 0;
    $Twitter12 = isset($_POST["Twitter12"])? 1: 0;
    $WhatsApp12 = isset($_POST["WhatsApp12"])? 1: 0;
    $Messenger12 = isset($_POST["Messenger12"])? 1: 0;
    $SnapChat12 = isset($_POST["SnapChat12"])? 1: 0;
    $Classmates12 = isset($_POST["Classmates12"])? 1: 0;
    $Academia12 = isset($_POST["Academia12"])? 1: 0;
    $StudiVZ12 = isset($_POST["tudiVZ12"])? 1: 0;
    $EducaNetwork12 = isset($_POST["EducaNetwork12"])? 1: 0;
    $Edmodo12 = isset($_POST["Edmodo12"])? 1: 0;
    $Schoology12 = isset($_POST["Schoology12"])? 1: 0;
    $Brainly12 = isset($_POST["Brainly12"])? 1: 0;
    $Eduredes12 = isset($_POST["Eduredes12"])? 1: 0;
    $Docsity12 = isset($_POST["Docsity12"])? 1: 0;
    $OtraEducacion12 = isset($_POST["Otraducacion12"])? 1: 0;
    $RedAlumnos12 = isset($_POST["RedAlumnos12"])? 1: 0;
    $Educared12 = isset($_POST["Educared12"])? 1: 0;
    $Eduteka12 = isset($_POST["Eduteka12"])? 1: 0;
    $Skype12 = isset($_POST["Skype12"])? 1: 0;
    $Badoo12 = isset($_POST["Badoo12"])? 1: 0;
    $total12 = $_POST["total12"];

    $Facebook13 = isset($_POST["Facebook13"])? 1: 0;
    $YouTube13 = isset($_POST["YouTube13"])? 1: 0;
    $Instagram13 = isset($_POST["Instagram13"])? 1: 0;
    $LinkedIn13 = isset($_POST["LinkedIn13"])? 1: 0;
    $Google13 = isset($_POST["Google13"])? 1: 0;
    $Twitter13 = isset($_POST["Twitter13"])? 1: 0;
    $WhatsApp13 = isset($_POST["WhatsApp13"])? 1: 0;
    $Messenger13 = isset($_POST["Messenger13"])? 1: 0;
    $SnapChat13 = isset($_POST["SnapChat13"])? 1: 0;
    $Classmates13 = isset($_POST["Classmates13"])? 1: 0;
    $Academia13 = isset($_POST["Academia13"])? 1: 0;
    $StudiVZ13 = isset($_POST["tudiVZ13"])? 1: 0;
    $EducaNetwork13 = isset($_POST["EducaNetwork13"])? 1: 0;
    $Edmodo13 = isset($_POST["Edmodo13"])? 1: 0;
    $Schoology13 = isset($_POST["Schoology13"])? 1: 0;
    $Brainly13 = isset($_POST["Brainly13"])? 1: 0;
    $Eduredes13 = isset($_POST["Eduredes13"])? 1: 0;
    $Docsity13 = isset($_POST["Docsity13"])? 1: 0;
    $OtraEducacion13 = isset($_POST["Otraducacion13"])? 1: 0;
    $RedAlumnos13 = isset($_POST["RedAlumnos13"])? 1: 0;
    $Educared13 = isset($_POST["Educared13"])? 1: 0;
    $Eduteka13 = isset($_POST["Eduteka13"])? 1: 0;
    $Skype13 = isset($_POST["Skype13"])? 1: 0;
    $Badoo13 = isset($_POST["Badoo13"])? 1: 0;
    $total13 = $_POST["total13"];

    $Facebook14 = isset($_POST["Facebook14"])? 1: 0;
    $YouTube14 = isset($_POST["YouTube14"])? 1: 0;
    $Instagram14 = isset($_POST["Instagram14"])? 1: 0;
    $LinkedIn14 = isset($_POST["LinkedIn14"])? 1: 0;
    $Google14 = isset($_POST["Google14"])? 1: 0;
    $Twitter14 = isset($_POST["Twitter14"])? 1: 0;
    $WhatsApp14 = isset($_POST["WhatsApp14"])? 1: 0;
    $Messenger14 = isset($_POST["Messenger14"])? 1: 0;
    $SnapChat14 = isset($_POST["SnapChat14"])? 1: 0;
    $Classmates14 = isset($_POST["Classmates14"])? 1: 0;
    $Academia14 = isset($_POST["Academia14"])? 1: 0;
    $StudiVZ14 = isset($_POST["tudiVZ14"])? 1: 0;
    $EducaNetwork14 = isset($_POST["EducaNetwork14"])? 1: 0;
    $Edmodo14 = isset($_POST["Edmodo14"])? 1: 0;
    $Schoology14 = isset($_POST["Schoology14"])? 1: 0;
    $Brainly14 = isset($_POST["Brainly14"])? 1: 0;
    $Eduredes14 = isset($_POST["Eduredes14"])? 1: 0;
    $Docsity14 = isset($_POST["Docsity14"])? 1: 0;
    $OtraEducacion14 = isset($_POST["Otraducacion14"])? 1: 0;
    $RedAlumnos14 = isset($_POST["RedAlumnos14"])? 1: 0;
    $Educared14 = isset($_POST["Educared14"])? 1: 0;
    $Eduteka14 = isset($_POST["Eduteka14"])? 1: 0;
    $Skype14 = isset($_POST["Skype14"])? 1: 0;
    $Badoo14 = isset($_POST["Badoo14"])? 1: 0;
    $total14 = $_POST["total14"];

    $Facebook15 = isset($_POST["Facebook15"])? 1: 0;
    $YouTube15 = isset($_POST["YouTube15"])? 1: 0;
    $Instagram15 = isset($_POST["Instagram15"])? 1: 0;
    $LinkedIn15 = isset($_POST["LinkedIn15"])? 1: 0;
    $Google15 = isset($_POST["Google15"])? 1: 0;
    $Twitter15 = isset($_POST["Twitter15"])? 1: 0;
    $WhatsApp15 = isset($_POST["WhatsApp15"])? 1: 0;
    $Messenger15 = isset($_POST["Messenger15"])? 1: 0;
    $SnapChat15 = isset($_POST["SnapChat15"])? 1: 0;
    $Classmates15 = isset($_POST["Classmates15"])? 1: 0;
    $Academia15 = isset($_POST["Academia15"])? 1: 0;
    $StudiVZ15 = isset($_POST["tudiVZ15"])? 1: 0;
    $EducaNetwork15 = isset($_POST["EducaNetwork15"])? 1: 0;
    $Edmodo15 = isset($_POST["Edmodo15"])? 1: 0;
    $Schoology15 = isset($_POST["Schoology15"])? 1: 0;
    $Brainly15 = isset($_POST["Brainly15"])? 1: 0;
    $Eduredes15 = isset($_POST["Eduredes15"])? 1: 0;
    $Docsity15 = isset($_POST["Docsity15"])? 1: 0;
    $OtraEducacion15 = isset($_POST["Otraducacion15"])? 1: 0;
    $RedAlumnos15 = isset($_POST["RedAlumnos15"])? 1: 0;
    $Educared15 = isset($_POST["Educared15"])? 1: 0;
    $Eduteka15 = isset($_POST["Eduteka15"])? 1: 0;
    $Skype15 = isset($_POST["Skype15"])? 1: 0;
    $Badoo15 = isset($_POST["Badoo15"])? 1: 0;
    $total15 = $_POST["total15"];

    $Facebook16 = isset($_POST["Facebook16"])? 1: 0;
    $YouTube16 = isset($_POST["YouTube16"])? 1: 0;
    $Instagram16 = isset($_POST["Instagram16"])? 1: 0;
    $LinkedIn16 = isset($_POST["LinkedIn16"])? 1: 0;
    $Google16 = isset($_POST["Google16"])? 1: 0;
    $Twitter16 = isset($_POST["Twitter16"])? 1: 0;
    $WhatsApp16 = isset($_POST["WhatsApp16"])? 1: 0;
    $Messenger16 = isset($_POST["Messenger16"])? 1: 0;
    $SnapChat16 = isset($_POST["SnapChat16"])? 1: 0;
    $Classmates16 = isset($_POST["Classmates16"])? 1: 0;
    $Academia16 = isset($_POST["Academia16"])? 1: 0;
    $StudiVZ16 = isset($_POST["tudiVZ16"])? 1: 0;
    $EducaNetwork16 = isset($_POST["EducaNetwork16"])? 1: 0;
    $Edmodo16 = isset($_POST["Edmodo16"])? 1: 0;
    $Schoology16 = isset($_POST["Schoology16"])? 1: 0;
    $Brainly16 = isset($_POST["Brainly16"])? 1: 0;
    $Eduredes16 = isset($_POST["Eduredes16"])? 1: 0;
    $Docsity16 = isset($_POST["Docsity16"])? 1: 0;
    $OtraEducacion16 = isset($_POST["Otraducacion16"])? 1: 0;
    $RedAlumnos16 = isset($_POST["RedAlumnos16"])? 1: 0;
    $Educared16 = isset($_POST["Educared16"])? 1: 0;
    $Eduteka16 = isset($_POST["Eduteka16"])? 1: 0;
    $Skype16 = isset($_POST["Skype16"])? 1: 0;
    $Badoo16 = isset($_POST["Badoo16"])? 1: 0;
    $total16 = $_POST["total16"];

    $Facebook17 = isset($_POST["Facebook17"])? 1: 0;
    $YouTube17 = isset($_POST["YouTube17"])? 1: 0;
    $Instagram17 = isset($_POST["Instagram17"])? 1: 0;
    $LinkedIn17 = isset($_POST["LinkedIn17"])? 1: 0;
    $Google17 = isset($_POST["Google17"])? 1: 0;
    $Twitter17 = isset($_POST["Twitter17"])? 1: 0;
    $WhatsApp17 = isset($_POST["WhatsApp17"])? 1: 0;
    $Messenger17 = isset($_POST["Messenger17"])? 1: 0;
    $SnapChat17 = isset($_POST["SnapChat17"])? 1: 0;
    $Classmates17 = isset($_POST["Classmates17"])? 1: 0;
    $Academia17 = isset($_POST["Academia17"])? 1: 0;
    $StudiVZ17 = isset($_POST["tudiVZ17"])? 1: 0;
    $EducaNetwork17 = isset($_POST["EducaNetwork17"])? 1: 0;
    $Edmodo17 = isset($_POST["Edmodo17"])? 1: 0;
    $Schoology17 = isset($_POST["Schoology17"])? 1: 0;
    $Brainly17 = isset($_POST["Brainly17"])? 1: 0;
    $Eduredes17 = isset($_POST["Eduredes17"])? 1: 0;
    $Docsity17 = isset($_POST["Docsity17"])? 1: 0;
    $OtraEducacion17 = isset($_POST["Otraducacion17"])? 1: 0;
    $RedAlumnos17 = isset($_POST["RedAlumnos17"])? 1: 0;
    $Educared17 = isset($_POST["Educared17"])? 1: 0;
    $Eduteka17 = isset($_POST["Eduteka17"])? 1: 0;
    $Skype17 = isset($_POST["Skype17"])? 1: 0;
    $Badoo17 = isset($_POST["Badoo17"])? 1: 0;
    $total17 = $_POST["total17"];

    $otro = $_POST["otro"];
    $total18 = $_POST["total18"];


    $server = "mysql.hostinger.mx";
    $user = "u752252448_admin";
    $password = "dificil123";
    $dbname = "u752252448_preg";

    $conexion = new mysqli($server, $user, $password, $dbname);

    if($conexion->error)
    {
        die("Error: ".$conexion->connect_error);
    }
    else
    {
        $comando = "INSERT INTO cuestionario
                    VALUES($carrera, $cuatrimestre, '".$grupo."', $edad, $sexo,
                    $computadora, $laptop, $tablet, $smart, $noTengo,
                    $Facebook1, $YouTube1, $Instagram1, $LinkedIn1, $Google1, $Twitter1, $WhatsApp1, $Messenger1,
                    $SnapChat1, $Classmates1, $Academia1, $StudiVZ1, $EducaNetwork1, $Edmodo1, $Schoology1, $Brainly1,
                    $Eduredes1, $Docsity1, $OtraEducacion1, $RedAlumnos1, $Educared1, $Eduteka1, $Skype1, $Badoo1, $total1,
                    $Facebook2, $YouTube2, $Instagram2, $LinkedIn2, $Google2, $Twitter2, $WhatsApp2, $Messenger2,
                    $SnapChat2, $Classmates2, $Academia2, $StudiVZ2, $EducaNetwork2, $Edmodo2, $Schoology2, $Brainly2,
                    $Eduredes2, $Docsity2, $OtraEducacion2, $RedAlumnos2, $Educared2, $Eduteka2, $Skype2, $Badoo2, $total2,
                    $Facebook3, $YouTube3, $Instagram3, $LinkedIn3, $Google3, $Twitter3, $WhatsApp3, $Messenger3,
                    $SnapChat3, $Classmates3, $Academia3, $StudiVZ3, $EducaNetwork3, $Edmodo3, $Schoology3, $Brainly3,
                    $Eduredes3, $Docsity3, $OtraEducacion3, $RedAlumnos3, $Educared3, $Eduteka3, $Skype3, $Badoo3, $total3,
                    $Facebook4, $YouTube4, $Instagram4, $LinkedIn4, $Google4, $Twitter4, $WhatsApp4, $Messenger4,
                    $SnapChat4, $Classmates4, $Academia4, $StudiVZ4, $EducaNetwork4, $Edmodo4, $Schoology4, $Brainly4,
                    $Eduredes4, $Docsity4, $OtraEducacion4, $RedAlumnos4, $Educared4, $Eduteka4, $Skype4, $Badoo4, $total4,
                    $Facebook5, $YouTube5, $Instagram5, $LinkedIn5, $Google5, $Twitter5, $WhatsApp5, $Messenger5,
                    $SnapChat5, $Classmates5, $Academia5, $StudiVZ5, $EducaNetwork5, $Edmodo5, $Schoology5, $Brainly5,
                    $Eduredes5, $Docsity5, $OtraEducacion5, $RedAlumnos5, $Educared5, $Eduteka5, $Skype5, $Badoo5, $total5,
                    $Facebook6, $YouTube6, $Instagram6, $LinkedIn6, $Google6, $Twitter6, $WhatsApp6, $Messenger6,
                    $SnapChat6, $Classmates6, $Academia6, $StudiVZ6, $EducaNetwork6, $Edmodo6, $Schoology6, $Brainly6,
                    $Eduredes6, $Docsity6, $OtraEducacion6, $RedAlumnos6, $Educared6, $Eduteka6, $Skype6, $Badoo6, $total6,
                    $Facebook7, $YouTube7, $Instagram7, $LinkedIn7, $Google7, $Twitter7, $WhatsApp7, $Messenger7,
                    $SnapChat7, $Classmates7, $Academia7, $StudiVZ7, $EducaNetwork7, $Edmodo7, $Schoology7, $Brainly7,
                    $Eduredes7, $Docsity7, $OtraEducacion7, $RedAlumnos7, $Educared7, $Eduteka7, $Skype7, $Badoo7, $total7,
                    $Facebook8, $YouTube8, $Instagram8, $LinkedIn8, $Google8, $Twitter8, $WhatsApp8, $Messenger8,
                    $SnapChat8, $Classmates8, $Academia8, $StudiVZ8, $EducaNetwork8, $Edmodo8, $Schoology8, $Brainly8,
                    $Eduredes8, $Docsity8, $OtraEducacion8, $RedAlumnos8, $Educared8, $Eduteka8, $Skype8, $Badoo8, $total8,
                    $Facebook9, $YouTube9, $Instagram9, $LinkedIn9, $Google9, $Twitter9, $WhatsApp9, $Messenger9,
                    $SnapChat9, $Classmates9, $Academia9, $StudiVZ9, $EducaNetwork9, $Edmodo9, $Schoology9, $Brainly9,
                    $Eduredes9, $Docsity9, $OtraEducacion9, $RedAlumnos9, $Educared9, $Eduteka9, $Skype9, $Badoo9, $total9,
                    $Facebook10, $YouTube10, $Instagram10, $LinkedIn10, $Google10, $Twitter10, $WhatsApp10, $Messenger10,
                    $SnapChat10, $Classmates10, $Academia10, $StudiVZ10, $EducaNetwork10, $Edmodo10, $Schoology10, $Brainly10,
                    $Eduredes10, $Docsity10, $OtraEducacion10, $RedAlumnos10, $Educared10, $Eduteka10, $Skype10, $Badoo10, $total10,
                    $Facebook11, $YouTube11, $Instagram11, $LinkedIn11, $Google11, $Twitter11, $WhatsApp11, $Messenger11,
                    $SnapChat11, $Classmates11, $Academia11, $StudiVZ11, $EducaNetwork11, $Edmodo11, $Schoology11, $Brainly11,
                    $Eduredes11, $Docsity11, $OtraEducacion11, $RedAlumnos11, $Educared11, $Eduteka11, $Skype11, $Badoo11, $total11,
                    $Facebook12, $YouTube12, $Instagram12, $LinkedIn12, $Google12, $Twitter12, $WhatsApp12, $Messenger12,
                    $SnapChat12, $Classmates12, $Academia12, $StudiVZ12, $EducaNetwork12, $Edmodo12, $Schoology12, $Brainly12,
                    $Eduredes12, $Docsity12, $OtraEducacion12, $RedAlumnos12, $Educared12, $Eduteka12, $Skype12, $Badoo12, $total12,
                    $Facebook13, $YouTube13, $Instagram13, $LinkedIn13, $Google13, $Twitter13, $WhatsApp13, $Messenger13,
                    $SnapChat13, $Classmates13, $Academia13, $StudiVZ13, $EducaNetwork13, $Edmodo13, $Schoology13, $Brainly13,
                    $Eduredes13, $Docsity13, $OtraEducacion13, $RedAlumnos13, $Educared13, $Eduteka13, $Skype13, $Badoo13, $total13,
                    $Facebook14, $YouTube14, $Instagram14, $LinkedIn14, $Google14, $Twitter14, $WhatsApp14, $Messenger14,
                    $SnapChat14, $Classmates14, $Academia14, $StudiVZ14, $EducaNetwork14, $Edmodo14, $Schoology14, $Brainly14,
                    $Eduredes14, $Docsity14, $OtraEducacion14, $RedAlumnos14, $Educared14, $Eduteka14, $Skype14, $Badoo14, $total14,
                    $Facebook15, $YouTube15, $Instagram15, $LinkedIn15, $Google15, $Twitter15, $WhatsApp15, $Messenger15,
                    $SnapChat15, $Classmates15, $Academia15, $StudiVZ15, $EducaNetwork15, $Edmodo15, $Schoology15, $Brainly15,
                    $Eduredes15, $Docsity15, $OtraEducacion15, $RedAlumnos15, $Educared15, $Eduteka15, $Skype15, $Badoo15, $total15,
                    $Facebook16, $YouTube16, $Instagram16, $LinkedIn16, $Google16, $Twitter16, $WhatsApp16, $Messenger16,
                    $SnapChat16, $Classmates16, $Academia16, $StudiVZ16, $EducaNetwork16, $Edmodo16, $Schoology16, $Brainly16,
                    $Eduredes16, $Docsity16, $OtraEducacion16, $RedAlumnos16, $Educared16, $Eduteka16, $Skype16, $Badoo16, $total16,
                    $Facebook17, $YouTube17, $Instagram17, $LinkedIn17, $Google17, $Twitter17, $WhatsApp17, $Messenger17,
                    $SnapChat17, $Classmates17, $Academia17, $StudiVZ17, $EducaNetwork17, $Edmodo17, $Schoology17, $Brainly17,
                    $Eduredes17, $Docsity17, $OtraEducacion17, $RedAlumnos17, $Educared17, $Eduteka17, $Skype17, $Badoo17, $total17,
                    '".$otro."',$total18)";
echo $comando."<br /><br />";
        if($conexion->query($comando) === TRUE)
            echo "Registro Guardado";
        else
            die("Error: ".$conexion->error);

        $conexion->close();
    }

    $conexion = null;

    header("Location:index.html");
?>
