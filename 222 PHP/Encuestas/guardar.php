<?php
    $matricula = $_POST["matricula"];
    $cuatrimestre = $_POST["cuatrimestre"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $carrera = $_POST["carrera"];

    $computadora = isset($_POST["computadora"])? 1: 0;
    $laptop = isset($_POST["laptop"])? 1 :0;
    $tablet = isset($_POST["tablet"])? 1 :0;
    $smart = isset($_POST["smart"])? 1 :0;
    $noTengo = isset($_POST["noTengo"])? 1 :0;

    $Facebook1 = isset($_POST["Facebook1"])? 1: 0;
    $Badoo1 = isset($_POST["Badoo1"])? 1: 0;
    $Instagram1 = isset($_POST["Instagram1"])? 1: 0;
    $GoogleMas1 = isset($_POST["GoogleMas1"])? 1: 0;
    $Twitter1 = isset($_POST["Twitter1"])? 1: 0;
    $Schoology1 = isset($_POST["Schoology1"])? 1: 0;
    $Eduteka1 = isset($_POST["Eduteka1"])? 1: 0;
    $Moodle1 = isset($_POST["Moodle1"])? 1: 0;
    $Claroline1 = isset($_POST["Claronline1"])? 1: 0;
    $Edmodo1 = isset($_POST["Edmodo1"])? 1: 0;
    $WhatsApp1 = isset($_POST["WhatsApp1"])? 1: 0;
    $Spotify1 = isset($_POST["Spotify1"])? 1: 0;
    $Messenger1 = isset($_POST["Messenger1"])? 1: 0;
    $Softonic1 = isset($_POST["Softonic1"])? 1: 0;
    $Pandora1 = isset($_POST["Pandora1"])? 1: 0;
    $Web2_01 = isset($_POST["Web2_01"])? 1: 0;
    $Wikipedia1 = isset($_POST["Wikipedia1"])? 1: 0;
    $Google1 = isset($_POST["Google1"])? 1: 0;
    $Windows1 = isset($_POST["Windows1"])? 1: 0;
    $YouTube1 = isset($_POST["YouTube1"])? 1: 0;
    $MSN1 = isset($_POST["MSN1"])? 1: 0;
    $Yahoo1 = isset($_POST["Yahoo1"])? 1: 0;

    $Facebook2 = isset($_POST["Facebook2"])? 1: 0;
    $Badoo2 = isset($_POST["Badoo2"])? 1: 0;
    $Instagram2 = isset($_POST["Instagram2"])? 1: 0;
    $GoogleMas2 = isset($_POST["GoogleMas2"])? 1: 0;
    $Twitter2 = isset($_POST["Twitter2"])? 1: 0;
    $Schoology2 = isset($_POST["Schoology2"])? 1: 0;
    $Eduteka2 = isset($_POST["Eduteka2"])? 1: 0;
    $Moodle2 = isset($_POST["Moodle2"])? 1: 0;
    $Claroline2 = isset($_POST["Claronline2"])? 1: 0;
    $Edmodo2 = isset($_POST["Edmodo2"])? 1: 0;
    $WhatsApp2 = isset($_POST["WhatsApp2"])? 1: 0;
    $Spotify2 = isset($_POST["Spotify2"])? 1: 0;
    $Messenger2 = isset($_POST["Messenger2"])? 1: 0;
    $Softonic2 = isset($_POST["Softonic2"])? 1: 0;
    $Pandora2 = isset($_POST["Pandora2"])? 1: 0;
    $Web2_02 = isset($_POST["Web2_02"])? 1: 0;
    $Wikipedia2 = isset($_POST["Wikipedia2"])? 1: 0;
    $Google2 = isset($_POST["Google2"])? 1: 0;
    $Windows2 = isset($_POST["Windows2"])? 1: 0;
    $YouTube2 = isset($_POST["YouTube2"])? 1: 0;
    $MSN2 = isset($_POST["MSN2"])? 1: 0;
    $Yahoo2 = isset($_POST["Yahoo2"])? 1: 0;

    $Facebook3 = isset($_POST["Facebook3"])? 1: 0;
    $Badoo3 = isset($_POST["Badoo3"])? 1: 0;
    $Instagram3 = isset($_POST["Instagram3"])? 1: 0;
    $GoogleMas3 = isset($_POST["GoogleMas3"])? 1: 0;
    $Twitter3 = isset($_POST["Twitter3"])? 1: 0;
    $Schoology3 = isset($_POST["Schoology3"])? 1: 0;
    $Eduteka3 = isset($_POST["Eduteka3"])? 1: 0;
    $Moodle3 = isset($_POST["Moodle3"])? 1: 0;
    $Claroline3 = isset($_POST["Claronline3"])? 1: 0;
    $Edmodo3 = isset($_POST["Edmodo3"])? 1: 0;
    $WhatsApp3 = isset($_POST["WhatsApp3"])? 1: 0;
    $Spotify3 = isset($_POST["Spotify3"])? 1: 0;
    $Messenger3 = isset($_POST["Messenger3"])? 1: 0;
    $Softonic3 = isset($_POST["Softonic3"])? 1: 0;
    $Pandora3 = isset($_POST["Pandora3"])? 1: 0;
    $Web2_03 = isset($_POST["Web2_03"])? 1: 0;
    $Wikipedia3 = isset($_POST["Wikipedia3"])? 1: 0;
    $Google3 = isset($_POST["Google3"])? 1: 0;
    $Windows3 = isset($_POST["Windows3"])? 1: 0;
    $YouTube3 = isset($_POST["YouTube3"])? 1: 0;
    $MSN3 = isset($_POST["MSN3"])? 1: 0;
    $Yahoo3 = isset($_POST["Yahoo3"])? 1: 0;

    $Facebook4 = isset($_POST["Facebook4"])? 1: 0;
    $Badoo4 = isset($_POST["Badoo4"])? 1: 0;
    $Instagram4 = isset($_POST["Instagram4"])? 1: 0;
    $GoogleMas4 = isset($_POST["GoogleMas4"])? 1: 0;
    $Twitter4 = isset($_POST["Twitter4"])? 1: 0;
    $Schoology4 = isset($_POST["Schoology4"])? 1: 0;
    $Eduteka4 = isset($_POST["Eduteka4"])? 1: 0;
    $Moodle4 = isset($_POST["Moodle4"])? 1: 0;
    $Claroline4 = isset($_POST["Claronline4"])? 1: 0;
    $Edmodo4 = isset($_POST["Edmodo4"])? 1: 0;
    $WhatsApp4 = isset($_POST["WhatsApp4"])? 1: 0;
    $Spotify4 = isset($_POST["Spotify4"])? 1: 0;
    $Messenger4 = isset($_POST["Messenger4"])? 1: 0;
    $Softonic4 = isset($_POST["Softonic4"])? 1: 0;
    $Pandora4 = isset($_POST["Pandora4"])? 1: 0;
    $Web2_04 = isset($_POST["Web2_04"])? 1: 0;
    $Wikipedia4 = isset($_POST["Wikipedia4"])? 1: 0;
    $Google4 = isset($_POST["Google4"])? 1: 0;
    $Windows4 = isset($_POST["Windows4"])? 1: 0;
    $YouTube4 = isset($_POST["YouTube4"])? 1: 0;
    $MSN4 = isset($_POST["MSN4"])? 1: 0;
    $Yahoo4 = isset($_POST["Yahoo4"])? 1: 0;

    $Facebook5 = isset($_POST["Facebook5"])? 1: 0;
    $Badoo5 = isset($_POST["Badoo5"])? 1: 0;
    $Instagram5 = isset($_POST["Instagram5"])? 1: 0;
    $GoogleMas5 = isset($_POST["GoogleMas5"])? 1: 0;
    $Twitter5 = isset($_POST["Twitter5"])? 1: 0;
    $Schoology5 = isset($_POST["Schoology5"])? 1: 0;
    $Eduteka5 = isset($_POST["Eduteka5"])? 1: 0;
    $Moodle5 = isset($_POST["Moodle5"])? 1: 0;
    $Claroline5 = isset($_POST["Claronline5"])? 1: 0;
    $Edmodo5 = isset($_POST["Edmodo5"])? 1: 0;
    $WhatsApp5 = isset($_POST["WhatsApp5"])? 1: 0;
    $Spotify5 = isset($_POST["Spotify5"])? 1: 0;
    $Messenger5 = isset($_POST["Messenger5"])? 1: 0;
    $Softonic5 = isset($_POST["Softonic5"])? 1: 0;
    $Pandora5 = isset($_POST["Pandora5"])? 1: 0;
    $Web2_05 = isset($_POST["Web2_05"])? 1: 0;
    $Wikipedia5 = isset($_POST["Wikipedia5"])? 1: 0;
    $Google5 = isset($_POST["Google5"])? 1: 0;
    $Windows5 = isset($_POST["Windows5"])? 1: 0;
    $YouTube5 = isset($_POST["YouTube5"])? 1: 0;
    $MSN5 = isset($_POST["MSN5"])? 1: 0;
    $Yahoo5 = isset($_POST["Yahoo5"])? 1: 0;

    $Facebook6 = isset($_POST["Facebook6"])? 1: 0;
    $Badoo6 = isset($_POST["Badoo6"])? 1: 0;
    $Instagram6 = isset($_POST["Instagram6"])? 1: 0;
    $GoogleMas6 = isset($_POST["GoogleMas6"])? 1: 0;
    $Twitter6 = isset($_POST["Twitter6"])? 1: 0;
    $Schoology6 = isset($_POST["Schoology6"])? 1: 0;
    $Eduteka6 = isset($_POST["Eduteka6"])? 1: 0;
    $Moodle6 = isset($_POST["Moodle6"])? 1: 0;
    $Claroline6 = isset($_POST["Claronline6"])? 1: 0;
    $Edmodo6 = isset($_POST["Edmodo6"])? 1: 0;
    $WhatsApp6 = isset($_POST["WhatsApp6"])? 1: 0;
    $Spotify6 = isset($_POST["Spotify6"])? 1: 0;
    $Messenger6 = isset($_POST["Messenger6"])? 1: 0;
    $Softonic6 = isset($_POST["Softonic6"])? 1: 0;
    $Pandora6 = isset($_POST["Pandora6"])? 1: 0;
    $Web2_06 = isset($_POST["Web2_06"])? 1: 0;
    $Wikipedia6 = isset($_POST["Wikipedia6"])? 1: 0;
    $Google6 = isset($_POST["Google6"])? 1: 0;
    $Windows6 = isset($_POST["Windows6"])? 1: 0;
    $YouTube6 = isset($_POST["YouTube6"])? 1: 0;
    $MSN6 = isset($_POST["MSN6"])? 1: 0;
    $Yahoo6 = isset($_POST["Yahoo6"])? 1: 0;

    $Facebook7 = isset($_POST["Facebook7"])? 1: 0;
    $Badoo7 = isset($_POST["Badoo7"])? 1: 0;
    $Instagram7 = isset($_POST["Instagram7"])? 1: 0;
    $GoogleMas7 = isset($_POST["GoogleMas7"])? 1: 0;
    $Twitter7 = isset($_POST["Twitter7"])? 1: 0;
    $Schoology7 = isset($_POST["Schoology7"])? 1: 0;
    $Eduteka7 = isset($_POST["Eduteka7"])? 1: 0;
    $Moodle7 = isset($_POST["Moodle7"])? 1: 0;
    $Claroline7 = isset($_POST["Claronline7"])? 1: 0;
    $Edmodo7 = isset($_POST["Edmodo7"])? 1: 0;
    $WhatsApp7 = isset($_POST["WhatsApp7"])? 1: 0;
    $Spotify7 = isset($_POST["Spotify7"])? 1: 0;
    $Messenger7 = isset($_POST["Messenger7"])? 1: 0;
    $Softonic7 = isset($_POST["Softonic7"])? 1: 0;
    $Pandora7 = isset($_POST["Pandora7"])? 1: 0;
    $Web2_07 = isset($_POST["Web2_07"])? 1: 0;
    $Wikipedia7 = isset($_POST["Wikipedia7"])? 1: 0;
    $Google7 = isset($_POST["Google7"])? 1: 0;
    $Windows7 = isset($_POST["Windows7"])? 1: 0;
    $YouTube7 = isset($_POST["YouTube7"])? 1: 0;
    $MSN7 = isset($_POST["MSN7"])? 1: 0;
    $Yahoo7 = isset($_POST["Yahoo7"])? 1: 0;

    $Facebook8 = isset($_POST["Facebook8"])? 1: 0;
    $Badoo8 = isset($_POST["Badoo8"])? 1: 0;
    $Instagram8 = isset($_POST["Instagram8"])? 1: 0;
    $GoogleMas8 = isset($_POST["GoogleMas8"])? 1: 0;
    $Twitter8 = isset($_POST["Twitter8"])? 1: 0;
    $Schoology8 = isset($_POST["Schoology8"])? 1: 0;
    $Eduteka8 = isset($_POST["Eduteka8"])? 1: 0;
    $Moodle8 = isset($_POST["Moodle8"])? 1: 0;
    $Claroline8 = isset($_POST["Claronline8"])? 1: 0;
    $Edmodo8 = isset($_POST["Edmodo8"])? 1: 0;
    $WhatsApp8 = isset($_POST["WhatsApp8"])? 1: 0;
    $Spotify8 = isset($_POST["Spotify8"])? 1: 0;
    $Messenger8 = isset($_POST["Messenger8"])? 1: 0;
    $Softonic8 = isset($_POST["Softonic8"])? 1: 0;
    $Pandora8 = isset($_POST["Pandora8"])? 1: 0;
    $Web2_08 = isset($_POST["Web2_08"])? 1: 0;
    $Wikipedia8 = isset($_POST["Wikipedia8"])? 1: 0;
    $Google8 = isset($_POST["Google8"])? 1: 0;
    $Windows8 = isset($_POST["Windows8"])? 1: 0;
    $YouTube8 = isset($_POST["YouTube8"])? 1: 0;
    $MSN8 = isset($_POST["MSN8"])? 1: 0;
    $Yahoo8 = isset($_POST["Yahoo8"])? 1: 0;

    $Facebook9 = isset($_POST["Facebook9"])? 1: 0;
    $Badoo9 = isset($_POST["Badoo9"])? 1: 0;
    $Instagram9 = isset($_POST["Instagram9"])? 1: 0;
    $GoogleMas9 = isset($_POST["GoogleMas9"])? 1: 0;
    $Twitter9 = isset($_POST["Twitter9"])? 1: 0;
    $Schoology9 = isset($_POST["Schoology9"])? 1: 0;
    $Eduteka9 = isset($_POST["Eduteka9"])? 1: 0;
    $Moodle9 = isset($_POST["Moodle9"])? 1: 0;
    $Claroline9 = isset($_POST["Claronline9"])? 1: 0;
    $Edmodo9 = isset($_POST["Edmodo9"])? 1: 0;
    $WhatsApp9 = isset($_POST["WhatsApp9"])? 1: 0;
    $Spotify9 = isset($_POST["Spotify9"])? 1: 0;
    $Messenger9 = isset($_POST["Messenger9"])? 1: 0;
    $Softonic9 = isset($_POST["Softonic9"])? 1: 0;
    $Pandora9 = isset($_POST["Pandora9"])? 1: 0;
    $Web2_09 = isset($_POST["Web2_09"])? 1: 0;
    $Wikipedia9 = isset($_POST["Wikipedia9"])? 1: 0;
    $Google9 = isset($_POST["Google9"])? 1: 0;
    $Windows9 = isset($_POST["Windows9"])? 1: 0;
    $YouTube9 = isset($_POST["YouTube9"])? 1: 0;
    $MSN9 = isset($_POST["MSN9"])? 1: 0;
    $Yahoo9 = isset($_POST["Yahoo9"])? 1: 0;

    $Facebook10 = isset($_POST["Facebook10"])? 1: 0;
    $Badoo10 = isset($_POST["Badoo10"])? 1: 0;
    $Instagram10 = isset($_POST["Instagram10"])? 1: 0;
    $GoogleMas10 = isset($_POST["GoogleMas10"])? 1: 0;
    $Twitter10 = isset($_POST["Twitter10"])? 1: 0;
    $Schoology10 = isset($_POST["Schoology10"])? 1: 0;
    $Eduteka10 = isset($_POST["Eduteka10"])? 1: 0;
    $Moodle10 = isset($_POST["Moodle10"])? 1: 0;
    $Claroline10 = isset($_POST["Claronline10"])? 1: 0;
    $Edmodo10 = isset($_POST["Edmodo10"])? 1: 0;
    $WhatsApp10 = isset($_POST["WhatsApp10"])? 1: 0;
    $Spotify10 = isset($_POST["Spotify10"])? 1: 0;
    $Messenger10 = isset($_POST["Messenger10"])? 1: 0;
    $Softonic10 = isset($_POST["Softonic10"])? 1: 0;
    $Pandora10 = isset($_POST["Pandora10"])? 1: 0;
    $Web2_010 = isset($_POST["Web2_010"])? 1: 0;
    $Wikipedia10 = isset($_POST["Wikipedia10"])? 1: 0;
    $Google10 = isset($_POST["Google10"])? 1: 0;
    $Windows10 = isset($_POST["Windows10"])? 1: 0;
    $YouTube10 = isset($_POST["YouTube10"])? 1: 0;
    $MSN10 = isset($_POST["MSN10"])? 1: 0;
    $Yahoo10 = isset($_POST["Yahoo10"])? 1: 0;

    $Facebook11 = isset($_POST["Facebook11"])? 1: 0;
    $Badoo11 = isset($_POST["Badoo11"])? 1: 0;
    $Instagram11 = isset($_POST["Instagram11"])? 1: 0;
    $GoogleMas11 = isset($_POST["GoogleMas11"])? 1: 0;
    $Twitter11 = isset($_POST["Twitter11"])? 1: 0;
    $Schoology11 = isset($_POST["Schoology11"])? 1: 0;
    $Eduteka11 = isset($_POST["Eduteka11"])? 1: 0;
    $Moodle11 = isset($_POST["Moodle11"])? 1: 0;
    $Claroline11 = isset($_POST["Claronline11"])? 1: 0;
    $Edmodo11 = isset($_POST["Edmodo11"])? 1: 0;
    $WhatsApp11 = isset($_POST["WhatsApp11"])? 1: 0;
    $Spotify11 = isset($_POST["Spotify11"])? 1: 0;
    $Messenger11 = isset($_POST["Messenger11"])? 1: 0;
    $Softonic11 = isset($_POST["Softonic11"])? 1: 0;
    $Pandora11 = isset($_POST["Pandora11"])? 1: 0;
    $Web2_011 = isset($_POST["Web2_011"])? 1: 0;
    $Wikipedia11 = isset($_POST["Wikipedia11"])? 1: 0;
    $Google11 = isset($_POST["Google11"])? 1: 0;
    $Windows11 = isset($_POST["Windows11"])? 1: 0;
    $YouTube11 = isset($_POST["YouTube11"])? 1: 0;
    $MSN11 = isset($_POST["MSN11"])? 1: 0;
    $Yahoo11 = isset($_POST["Yahoo11"])? 1: 0;

    $Facebook12 = isset($_POST["Facebook12"])? 1: 0;
    $Badoo12 = isset($_POST["Badoo12"])? 1: 0;
    $Instagram12 = isset($_POST["Instagram12"])? 1: 0;
    $GoogleMas12 = isset($_POST["GoogleMas12"])? 1: 0;
    $Twitter12 = isset($_POST["Twitter12"])? 1: 0;
    $Schoology12 = isset($_POST["Schoology12"])? 1: 0;
    $Eduteka12 = isset($_POST["Eduteka12"])? 1: 0;
    $Moodle12 = isset($_POST["Moodle12"])? 1: 0;
    $Claroline12 = isset($_POST["Claronline12"])? 1: 0;
    $Edmodo12 = isset($_POST["Edmodo12"])? 1: 0;
    $WhatsApp12 = isset($_POST["WhatsApp12"])? 1: 0;
    $Spotify12 = isset($_POST["Spotify12"])? 1: 0;
    $Messenger12 = isset($_POST["Messenger12"])? 1: 0;
    $Softonic12 = isset($_POST["Softonic12"])? 1: 0;
    $Pandora12 = isset($_POST["Pandora12"])? 1: 0;
    $Web2_012 = isset($_POST["Web2_012"])? 1: 0;
    $Wikipedia12 = isset($_POST["Wikipedia12"])? 1: 0;
    $Google12 = isset($_POST["Google12"])? 1: 0;
    $Windows12 = isset($_POST["Windows12"])? 1: 0;
    $YouTube12 = isset($_POST["YouTube12"])? 1: 0;
    $MSN12 = isset($_POST["MSN12"])? 1: 0;
    $Yahoo12 = isset($_POST["Yahoo12"])? 1: 0;

    $Facebook13 = isset($_POST["Facebook13"])? 1: 0;
    $Badoo13 = isset($_POST["Badoo13"])? 1: 0;
    $Instagram13 = isset($_POST["Instagram13"])? 1: 0;
    $GoogleMas13 = isset($_POST["GoogleMas13"])? 1: 0;
    $Twitter13 = isset($_POST["Twitter13"])? 1: 0;
    $Schoology13 = isset($_POST["Schoology13"])? 1: 0;
    $Eduteka13 = isset($_POST["Eduteka13"])? 1: 0;
    $Moodle13 = isset($_POST["Moodle13"])? 1: 0;
    $Claroline13 = isset($_POST["Claronline13"])? 1: 0;
    $Edmodo13 = isset($_POST["Edmodo13"])? 1: 0;
    $WhatsApp13 = isset($_POST["WhatsApp13"])? 1: 0;
    $Spotify13 = isset($_POST["Spotify13"])? 1: 0;
    $Messenger13 = isset($_POST["Messenger13"])? 1: 0;
    $Softonic13 = isset($_POST["Softonic13"])? 1: 0;
    $Pandora13 = isset($_POST["Pandora13"])? 1: 0;
    $Web2_013 = isset($_POST["Web2_013"])? 1: 0;
    $Wikipedia13 = isset($_POST["Wikipedia13"])? 1: 0;
    $Google13 = isset($_POST["Google13"])? 1: 0;
    $Windows13 = isset($_POST["Windows13"])? 1: 0;
    $YouTube13 = isset($_POST["YouTube13"])? 1: 0;
    $MSN13 = isset($_POST["MSN13"])? 1: 0;
    $Yahoo13 = isset($_POST["Yahoo13"])? 1: 0;

    $Facebook14 = isset($_POST["Facebook14"])? 1: 0;
    $Badoo14 = isset($_POST["Badoo14"])? 1: 0;
    $Instagram14 = isset($_POST["Instagram14"])? 1: 0;
    $GoogleMas14 = isset($_POST["GoogleMas14"])? 1: 0;
    $Twitter14 = isset($_POST["Twitter14"])? 1: 0;
    $Schoology14 = isset($_POST["Schoology14"])? 1: 0;
    $Eduteka14 = isset($_POST["Eduteka14"])? 1: 0;
    $Moodle14 = isset($_POST["Moodle14"])? 1: 0;
    $Claroline14 = isset($_POST["Claronline14"])? 1: 0;
    $Edmodo14 = isset($_POST["Edmodo14"])? 1: 0;
    $WhatsApp14 = isset($_POST["WhatsApp14"])? 1: 0;
    $Spotify14 = isset($_POST["Spotify14"])? 1: 0;
    $Messenger14 = isset($_POST["Messenger14"])? 1: 0;
    $Softonic14 = isset($_POST["Softonic14"])? 1: 0;
    $Pandora14 = isset($_POST["Pandora14"])? 1: 0;
    $Web2_014 = isset($_POST["Web2_014"])? 1: 0;
    $Wikipedia14 = isset($_POST["Wikipedia14"])? 1: 0;
    $Google14 = isset($_POST["Google14"])? 1: 0;
    $Windows14 = isset($_POST["Windows14"])? 1: 0;
    $YouTube14 = isset($_POST["YouTube14"])? 1: 0;
    $MSN14 = isset($_POST["MSN14"])? 1: 0;
    $Yahoo14 = isset($_POST["Yahoo14"])? 1: 0;

    $Facebook15 = isset($_POST["Facebook15"])? 1: 0;
    $Badoo15 = isset($_POST["Badoo15"])? 1: 0;
    $Instagram15 = isset($_POST["Instagram15"])? 1: 0;
    $GoogleMas15 = isset($_POST["GoogleMas15"])? 1: 0;
    $Twitter15 = isset($_POST["Twitter15"])? 1: 0;
    $Schoology15 = isset($_POST["Schoology15"])? 1: 0;
    $Eduteka15 = isset($_POST["Eduteka15"])? 1: 0;
    $Moodle15 = isset($_POST["Moodle15"])? 1: 0;
    $Claroline15 = isset($_POST["Claronline15"])? 1: 0;
    $Edmodo15 = isset($_POST["Edmodo15"])? 1: 0;
    $WhatsApp15 = isset($_POST["WhatsApp15"])? 1: 0;
    $Spotify15 = isset($_POST["Spotify15"])? 1: 0;
    $Messenger15 = isset($_POST["Messenger15"])? 1: 0;
    $Softonic15 = isset($_POST["Softonic15"])? 1: 0;
    $Pandora15 = isset($_POST["Pandora15"])? 1: 0;
    $Web2_015 = isset($_POST["Web2_015"])? 1: 0;
    $Wikipedia15 = isset($_POST["Wikipedia15"])? 1: 0;
    $Google15 = isset($_POST["Google15"])? 1: 0;
    $Windows15 = isset($_POST["Windows15"])? 1: 0;
    $YouTube15 = isset($_POST["YouTube15"])? 1: 0;
    $MSN15 = isset($_POST["MSN15"])? 1: 0;
    $Yahoo15 = isset($_POST["Yahoo15"])? 1: 0;

    $otro = $_POST["otro"];

    $total_redes = $_POST["total_redes"];
    $total_plataformas = $_POST["total_plataformas"];
    $total_apps = $_POST["total_apps"];
    $total_comunidades = $_POST["total_comunidades"];
    $total_internet = $_POST["total_internet"];

    require_once "conexion.php";

    $query = "INSERT INTO cuestionario2
                VALUES($matricula, $cuatrimestre, $edad, $sexo, $carrera,
                $computadora, $laptop, $tablet, $smart, $noTengo,
                $Facebook1, $Badoo1, $Instagram1, $GoogleMas1, $Twitter1, $Schoology1, $Eduteka1, $Moodle1, $Claroline1,
                $Edmodo1, $WhatsApp1, $Spotify1, $Messenger1, $Softonic1, $Pandora1, $Web2_01, $Wikipedia1, $Google1,
                $Windows1, $YouTube1, $MSN1, $Yahoo1,
                $Facebook2, $Badoo2, $Instagram2, $GoogleMas2, $Twitter2, $Schoology2, $Eduteka2, $Moodle2, $Claroline2,
                $Edmodo2, $WhatsApp2, $Spotify2, $Messenger2, $Softonic2, $Pandora2, $Web2_02, $Wikipedia2, $Google2,
                $Windows2, $YouTube2, $MSN2, $Yahoo2,
                $Facebook3, $Badoo3, $Instagram3, $GoogleMas3, $Twitter3, $Schoology3, $Eduteka3, $Moodle3, $Claroline3,
                $Edmodo3, $WhatsApp3, $Spotify3, $Messenger3, $Softonic3, $Pandora3, $Web2_03, $Wikipedia3, $Google3,
                $Windows3, $YouTube3, $MSN3, $Yahoo3,
                $Facebook4, $Badoo4, $Instagram4, $GoogleMas4, $Twitter4, $Schoology4, $Eduteka4, $Moodle4, $Claroline4,
                $Edmodo4, $WhatsApp4, $Spotify4, $Messenger4, $Softonic4, $Pandora4, $Web2_04, $Wikipedia4, $Google4,
                $Windows4, $YouTube4, $MSN4, $Yahoo4,
                $Facebook5, $Badoo5, $Instagram5, $GoogleMas5, $Twitter5, $Schoology5, $Eduteka5, $Moodle5, $Claroline5,
                $Edmodo5, $WhatsApp5, $Spotify5, $Messenger5, $Softonic5, $Pandora5, $Web2_05, $Wikipedia5, $Google5,
                $Windows5, $YouTube5, $MSN5, $Yahoo5,
                $Facebook6, $Badoo6, $Instagram6, $GoogleMas6, $Twitter6, $Schoology6, $Eduteka6, $Moodle6, $Claroline6,
                $Edmodo6, $WhatsApp6, $Spotify6, $Messenger6, $Softonic6, $Pandora6, $Web2_06, $Wikipedia6, $Google6,
                $Windows6, $YouTube6, $MSN6, $Yahoo6,
                $Facebook7, $Badoo7, $Instagram7, $GoogleMas7, $Twitter7, $Schoology7, $Eduteka7, $Moodle7, $Claroline7,
                $Edmodo7, $WhatsApp7, $Spotify7, $Messenger7, $Softonic7, $Pandora7, $Web2_07, $Wikipedia7, $Google7,
                $Windows7, $YouTube7, $MSN7, $Yahoo7,
                $Facebook8, $Badoo8, $Instagram8, $GoogleMas8, $Twitter8, $Schoology8, $Eduteka8, $Moodle8, $Claroline8,
                $Edmodo8, $WhatsApp8, $Spotify8, $Messenger8, $Softonic8, $Pandora8, $Web2_08, $Wikipedia8, $Google8,
                $Windows8, $YouTube8, $MSN8, $Yahoo8,
                $Facebook9, $Badoo9, $Instagram9, $GoogleMas9, $Twitter9, $Schoology9, $Eduteka9, $Moodle9, $Claroline9,
                $Edmodo9, $WhatsApp9, $Spotify9, $Messenger9, $Softonic9, $Pandora9, $Web2_09, $Wikipedia9, $Google9,
                $Windows9, $YouTube9, $MSN9, $Yahoo9,
                $Facebook10, $Badoo10, $Instagram10, $GoogleMas10, $Twitter10, $Schoology10, $Eduteka10, $Moodle10, $Claroline10,
                $Edmodo10, $WhatsApp10, $Spotify10, $Messenger10, $Softonic10, $Pandora10, $Web2_010, $Wikipedia10, $Google10,
                $Windows10, $YouTube10, $MSN10, $Yahoo10,
                $Facebook11, $Badoo11, $Instagram11, $GoogleMas11, $Twitter11, $Schoology11, $Eduteka11, $Moodle11, $Claroline11,
                $Edmodo11, $WhatsApp11, $Spotify11, $Messenger11, $Softonic11, $Pandora11, $Web2_011, $Wikipedia11, $Google11,
                $Windows11, $YouTube11, $MSN11, $Yahoo11,
                $Facebook12, $Badoo12, $Instagram12, $GoogleMas12, $Twitter12, $Schoology12, $Eduteka12, $Moodle12, $Claroline12,
                $Edmodo12, $WhatsApp12, $Spotify12, $Messenger12, $Softonic12, $Pandora12, $Web2_012, $Wikipedia12, $Google12,
                $Windows12, $YouTube12, $MSN12, $Yahoo12,
                $Facebook13, $Badoo13, $Instagram13, $GoogleMas13, $Twitter13, $Schoology13, $Eduteka13, $Moodle13, $Claroline13,
                $Edmodo13, $WhatsApp13, $Spotify13, $Messenger13, $Softonic13, $Pandora13, $Web2_013, $Wikipedia13, $Google13,
                $Windows13, $YouTube13, $MSN13, $Yahoo13,
                $Facebook14, $Badoo14, $Instagram14, $GoogleMas14, $Twitter14, $Schoology14, $Eduteka14, $Moodle14, $Claroline14,
                $Edmodo14, $WhatsApp14, $Spotify14, $Messenger14, $Softonic14, $Pandora14, $Web2_014, $Wikipedia14, $Google14,
                $Windows14, $YouTube14, $MSN14, $Yahoo14,
                $Facebook15, $Badoo15, $Instagram15, $GoogleMas15, $Twitter15, $Schoology15, $Eduteka15, $Moodle15, $Claroline15,
                $Edmodo15, $WhatsApp15, $Spotify15, $Messenger15, $Softonic15, $Pandora15, $Web2_015, $Wikipedia15, $Google15,
                $Windows15, $YouTube15, $MSN15, $Yahoo15,
                '$otro',
                $total_redes, $total_plataformas, $total_apps, $total_comunidades, $total_internet)";
//echo $query."<br /><br />";
    if($conexion->query($query) === TRUE)
        echo "Registro Guardado<h1>Muchas Gracias, La encuesta ha terminado</h1><a href='index.html'>Volver a capturar cuestionario</a>";
    else
        die("Error: ".$conexion->error);

    $conexion->close();

    $conexion = null;


?>
