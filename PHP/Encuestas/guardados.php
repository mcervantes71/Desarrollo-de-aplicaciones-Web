<!DOCTYPE html>
<html>
    <head>
        <title>Encuestas Guardadas</title>
		<style>
			 table{
                empty-cells:hide;
                margin:20px 0px;
                border-collapse: collapse;
            }

            th{
                height:150px;
                vertical-align:bottom;
            }

            .redes{
                -webkit-transform:rotate(-90deg);
                -moz-transform:rotate(-90deg);
                -o-transform:rotate(-90deg);
                transform:rotate(-90deg);
                margin:0 auto;
                max-width: 20px;
            }

            #number{
                text-align: center;
            }

            #resultados th{
                height:auto;
                vertical-align:middle;
            }
		</style>
    </head>
    <body>
        <?php
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
                $comando = "SELECT *
                            FROM cuestionario
                            ORDER BY carrera ASC";

                $resultado = $conexion->query($comando);

                if($resultado->num_rows > 0)
				{
                    echo '<table border="1">
                              <thead>
						      <tr>
							      <th><div class="redes">carrera</div></th><th><div class="redes">cuatrimestre</div></th><th><div class="redes">grupo</div></th><th><div class="redes">edad</div></th><th><div class="redes">sexo</div></th><th><div class="redes">
                    computadora</div></th><th><div class="redes">laptop</div></th><th><div class="redes"> tablet </div></th><th><div class="redes"> smart </div></th><th><div class="redes"> noTengo </div></th><th><div class="redes">
                    Facebook1 </div></th><th><div class="redes"> YouTube1 </div></th><th><div class="redes"> Instagram1 </div></th><th><div class="redes"> LinkedIn1 </div></th><th><div class="redes"> Google1 </div></th><th><div class="redes"> Twitter1 </div></th><th><div class="redes"> WhatsApp1 </div></th><th><div class="redes"> Messenger1 </div></th><th><div class="redes">
                    SnapChat1 </div></th><th><div class="redes"> Classmates1 </div></th><th><div class="redes"> Academia1 </div></th><th><div class="redes"> StudiVZ1 </div></th><th><div class="redes"> EducaNetwork1 </div></th><th><div class="redes"> Edmodo1 </div></th><th><div class="redes"> Schoology1 </div></th><th><div class="redes"> Brainly1 </div></th><th><div class="redes">
                    Eduredes1 </div></th><th><div class="redes"> Docsity1 </div></th><th><div class="redes"> OtraEducacion1 </div></th><th><div class="redes"> RedAlumnos1 </div></th><th><div class="redes"> Educared1 </div></th><th><div class="redes"> Eduteka1 </div></th><th><div class="redes"> Skype1 </div></th><th><div class="redes"> Badoo1 </div></th><th><div class="redes"> total1 </div></th><th><div class="redes">
                    Facebook2 </div></th><th><div class="redes"> YouTube2 </div></th><th><div class="redes"> Instagram2 </div></th><th><div class="redes"> LinkedIn2 </div></th><th><div class="redes"> Google2 </div></th><th><div class="redes"> Twitter2 </div></th><th><div class="redes"> WhatsApp2 </div></th><th><div class="redes"> Messenger2 </div></th><th><div class="redes">
                    SnapChat2 </div></th><th><div class="redes"> Classmates2 </div></th><th><div class="redes"> Academia2 </div></th><th><div class="redes"> StudiVZ2 </div></th><th><div class="redes"> EducaNetwork2 </div></th><th><div class="redes"> Edmodo2 </div></th><th><div class="redes"> Schoology2 </div></th><th><div class="redes"> Brainly2 </div></th><th><div class="redes">
                    Eduredes2 </div></th><th><div class="redes"> Docsity2 </div></th><th><div class="redes"> OtraEducacion2 </div></th><th><div class="redes"> RedAlumnos2 </div></th><th><div class="redes"> Educared2 </div></th><th><div class="redes"> Eduteka2 </div></th><th><div class="redes"> Skype2 </div></th><th><div class="redes"> Badoo2 </div></th><th><div class="redes"> total2 </div></th><th><div class="redes">
                    Facebook3 </div></th><th><div class="redes"> YouTube3 </div></th><th><div class="redes"> Instagram3 </div></th><th><div class="redes"> LinkedIn3 </div></th><th><div class="redes"> Google3 </div></th><th><div class="redes"> Twitter3 </div></th><th><div class="redes"> WhatsApp3 </div></th><th><div class="redes"> Messenger3 </div></th><th><div class="redes">
                    SnapChat3 </div></th><th><div class="redes"> Classmates3 </div></th><th><div class="redes"> Academia3 </div></th><th><div class="redes"> StudiVZ3 </div></th><th><div class="redes"> EducaNetwork3 </div></th><th><div class="redes"> Edmodo3 </div></th><th><div class="redes"> Schoology3 </div></th><th><div class="redes"> Brainly3 </div></th><th><div class="redes">
                    Eduredes3 </div></th><th><div class="redes"> Docsity3 </div></th><th><div class="redes"> OtraEducacion3 </div></th><th><div class="redes"> RedAlumnos3 </div></th><th><div class="redes"> Educared3 </div></th><th><div class="redes"> Eduteka3 </div></th><th><div class="redes"> Skype3 </div></th><th><div class="redes"> Badoo3 </div></th><th><div class="redes"> total3 </div></th><th><div class="redes">
                    Facebook4 </div></th><th><div class="redes"> YouTube4 </div></th><th><div class="redes"> Instagram4 </div></th><th><div class="redes"> LinkedIn4 </div></th><th><div class="redes"> Google4 </div></th><th><div class="redes"> Twitter4 </div></th><th><div class="redes"> WhatsApp4 </div></th><th><div class="redes"> Messenger4 </div></th><th><div class="redes">
                    SnapChat4 </div></th><th><div class="redes"> Classmates4 </div></th><th><div class="redes"> Academia4 </div></th><th><div class="redes"> StudiVZ4 </div></th><th><div class="redes"> EducaNetwork4 </div></th><th><div class="redes"> Edmodo4 </div></th><th><div class="redes"> Schoology4 </div></th><th><div class="redes"> Brainly4 </div></th><th><div class="redes">
                    Eduredes4 </div></th><th><div class="redes"> Docsity4 </div></th><th><div class="redes"> OtraEducacion4 </div></th><th><div class="redes"> RedAlumnos4 </div></th><th><div class="redes"> Educared4 </div></th><th><div class="redes"> Eduteka4 </div></th><th><div class="redes"> Skype4 </div></th><th><div class="redes"> Badoo4 </div></th><th><div class="redes"> total4 </div></th><th><div class="redes">
                    Facebook5 </div></th><th><div class="redes"> YouTube5 </div></th><th><div class="redes"> Instagram5 </div></th><th><div class="redes"> LinkedIn5 </div></th><th><div class="redes"> Google5 </div></th><th><div class="redes"> Twitter5 </div></th><th><div class="redes"> WhatsApp5 </div></th><th><div class="redes"> Messenger5 </div></th><th><div class="redes">
                    SnapChat5 </div></th><th><div class="redes"> Classmates5 </div></th><th><div class="redes"> Academia5 </div></th><th><div class="redes"> StudiVZ5 </div></th><th><div class="redes"> EducaNetwork5 </div></th><th><div class="redes"> Edmodo5 </div></th><th><div class="redes"> Schoology5 </div></th><th><div class="redes"> Brainly5 </div></th><th><div class="redes">
                    Eduredes5 </div></th><th><div class="redes"> Docsity5 </div></th><th><div class="redes"> OtraEducacion5 </div></th><th><div class="redes"> RedAlumnos5 </div></th><th><div class="redes"> Educared5 </div></th><th><div class="redes"> Eduteka5 </div></th><th><div class="redes"> Skype5 </div></th><th><div class="redes"> Badoo5 </div></th><th><div class="redes"> total5 </div></th><th><div class="redes">
                    Facebook6 </div></th><th><div class="redes"> YouTube6 </div></th><th><div class="redes"> Instagram6 </div></th><th><div class="redes"> LinkedIn6 </div></th><th><div class="redes"> Google6 </div></th><th><div class="redes"> Twitter6 </div></th><th><div class="redes"> WhatsApp6 </div></th><th><div class="redes"> Messenger6 </div></th><th><div class="redes">
                    SnapChat6 </div></th><th><div class="redes"> Classmates6 </div></th><th><div class="redes"> Academia6 </div></th><th><div class="redes"> StudiVZ6 </div></th><th><div class="redes"> EducaNetwork6 </div></th><th><div class="redes"> Edmodo6 </div></th><th><div class="redes"> Schoology6 </div></th><th><div class="redes"> Brainly6 </div></th><th><div class="redes">
                    Eduredes6 </div></th><th><div class="redes"> Docsity6 </div></th><th><div class="redes"> OtraEducacion6 </div></th><th><div class="redes"> RedAlumnos6 </div></th><th><div class="redes"> Educared6 </div></th><th><div class="redes"> Eduteka6 </div></th><th><div class="redes"> Skype6 </div></th><th><div class="redes"> Badoo6 </div></th><th><div class="redes"> total6 </div></th><th><div class="redes">
                    Facebook7 </div></th><th><div class="redes"> YouTube7 </div></th><th><div class="redes"> Instagram7 </div></th><th><div class="redes"> LinkedIn7 </div></th><th><div class="redes"> Google7 </div></th><th><div class="redes"> Twitter7 </div></th><th><div class="redes"> WhatsApp7 </div></th><th><div class="redes"> Messenger7 </div></th><th><div class="redes">
                    SnapChat7 </div></th><th><div class="redes"> Classmates7 </div></th><th><div class="redes"> Academia7 </div></th><th><div class="redes"> StudiVZ7 </div></th><th><div class="redes"> EducaNetwork7 </div></th><th><div class="redes"> Edmodo7 </div></th><th><div class="redes"> Schoology7 </div></th><th><div class="redes"> Brainly7 </div></th><th><div class="redes">
                    Eduredes7 </div></th><th><div class="redes"> Docsity7 </div></th><th><div class="redes"> OtraEducacion7 </div></th><th><div class="redes"> RedAlumnos7 </div></th><th><div class="redes"> Educared7 </div></th><th><div class="redes"> Eduteka7 </div></th><th><div class="redes"> Skype7 </div></th><th><div class="redes"> Badoo7 </div></th><th><div class="redes"> total7 </div></th><th><div class="redes">
                    Facebook8 </div></th><th><div class="redes"> YouTube8 </div></th><th><div class="redes"> Instagram8 </div></th><th><div class="redes"> LinkedIn8 </div></th><th><div class="redes"> Google8 </div></th><th><div class="redes"> Twitter8 </div></th><th><div class="redes"> WhatsApp8 </div></th><th><div class="redes"> Messenger8 </div></th><th><div class="redes">
                    SnapChat8 </div></th><th><div class="redes"> Classmates8 </div></th><th><div class="redes"> Academia8 </div></th><th><div class="redes"> StudiVZ8 </div></th><th><div class="redes"> EducaNetwork8 </div></th><th><div class="redes"> Edmodo8 </div></th><th><div class="redes"> Schoology8 </div></th><th><div class="redes"> Brainly8 </div></th><th><div class="redes">
                    Eduredes8 </div></th><th><div class="redes"> Docsity8 </div></th><th><div class="redes"> OtraEducacion8 </div></th><th><div class="redes"> RedAlumnos8 </div></th><th><div class="redes"> Educared8 </div></th><th><div class="redes"> Eduteka8 </div></th><th><div class="redes"> Skype8 </div></th><th><div class="redes"> Badoo8 </div></th><th><div class="redes"> total8 </div></th><th><div class="redes">
                    Facebook9 </div></th><th><div class="redes"> YouTube9 </div></th><th><div class="redes"> Instagram9 </div></th><th><div class="redes"> LinkedIn9 </div></th><th><div class="redes"> Google9 </div></th><th><div class="redes"> Twitter9 </div></th><th><div class="redes"> WhatsApp9 </div></th><th><div class="redes"> Messenger9 </div></th><th><div class="redes">
                    SnapChat9 </div></th><th><div class="redes"> Classmates9 </div></th><th><div class="redes"> Academia9 </div></th><th><div class="redes"> StudiVZ9 </div></th><th><div class="redes"> EducaNetwork9 </div></th><th><div class="redes"> Edmodo9 </div></th><th><div class="redes"> Schoology9 </div></th><th><div class="redes"> Brainly9 </div></th><th><div class="redes">
                    Eduredes9 </div></th><th><div class="redes"> Docsity9 </div></th><th><div class="redes"> OtraEducacion9 </div></th><th><div class="redes"> RedAlumnos9 </div></th><th><div class="redes"> Educared9 </div></th><th><div class="redes"> Eduteka9 </div></th><th><div class="redes"> Skype9 </div></th><th><div class="redes"> Badoo9 </div></th><th><div class="redes"> total9 </div></th><th><div class="redes">
                    Facebook10 </div></th><th><div class="redes"> YouTube10 </div></th><th><div class="redes"> Instagram10 </div></th><th><div class="redes"> LinkedIn10 </div></th><th><div class="redes"> Google10 </div></th><th><div class="redes"> Twitter10 </div></th><th><div class="redes"> WhatsApp10 </div></th><th><div class="redes"> Messenger10 </div></th><th><div class="redes">
                    SnapChat10 </div></th><th><div class="redes"> Classmates10 </div></th><th><div class="redes"> Academia10 </div></th><th><div class="redes"> StudiVZ10 </div></th><th><div class="redes"> EducaNetwork10 </div></th><th><div class="redes"> Edmodo10 </div></th><th><div class="redes"> Schoology10 </div></th><th><div class="redes"> Brainly10 </div></th><th><div class="redes">
                    Eduredes10 </div></th><th><div class="redes"> Docsity10 </div></th><th><div class="redes"> OtraEducacion10 </div></th><th><div class="redes"> RedAlumnos10 </div></th><th><div class="redes"> Educared10 </div></th><th><div class="redes"> Eduteka10 </div></th><th><div class="redes"> Skype10 </div></th><th><div class="redes"> Badoo10 </div></th><th><div class="redes"> total10 </div></th><th><div class="redes">
                    Facebook11 </div></th><th><div class="redes"> YouTube11 </div></th><th><div class="redes"> Instagram11 </div></th><th><div class="redes"> LinkedIn11 </div></th><th><div class="redes"> Google11 </div></th><th><div class="redes"> Twitter11 </div></th><th><div class="redes"> WhatsApp11 </div></th><th><div class="redes"> Messenger11 </div></th><th><div class="redes">
                    SnapChat11 </div></th><th><div class="redes"> Classmates11 </div></th><th><div class="redes"> Academia11 </div></th><th><div class="redes"> StudiVZ11 </div></th><th><div class="redes"> EducaNetwork11 </div></th><th><div class="redes"> Edmodo11 </div></th><th><div class="redes"> Schoology11 </div></th><th><div class="redes"> Brainly11 </div></th><th><div class="redes">
                    Eduredes11 </div></th><th><div class="redes"> Docsity11 </div></th><th><div class="redes"> OtraEducacion11 </div></th><th><div class="redes"> RedAlumnos11 </div></th><th><div class="redes"> Educared11 </div></th><th><div class="redes"> Eduteka11 </div></th><th><div class="redes"> Skype11 </div></th><th><div class="redes"> Badoo11 </div></th><th><div class="redes"> total11 </div></th><th><div class="redes">
                    Facebook12 </div></th><th><div class="redes"> YouTube12 </div></th><th><div class="redes"> Instagram12 </div></th><th><div class="redes"> LinkedIn12 </div></th><th><div class="redes"> Google12 </div></th><th><div class="redes"> Twitter12 </div></th><th><div class="redes"> WhatsApp12 </div></th><th><div class="redes"> Messenger12 </div></th><th><div class="redes">
                    SnapChat12 </div></th><th><div class="redes"> Classmates12 </div></th><th><div class="redes"> Academia12 </div></th><th><div class="redes"> StudiVZ12 </div></th><th><div class="redes"> EducaNetwork12 </div></th><th><div class="redes"> Edmodo12 </div></th><th><div class="redes"> Schoology12 </div></th><th><div class="redes"> Brainly12 </div></th><th><div class="redes">
                    Eduredes12 </div></th><th><div class="redes"> Docsity12 </div></th><th><div class="redes"> OtraEducacion12 </div></th><th><div class="redes"> RedAlumnos12 </div></th><th><div class="redes"> Educared12 </div></th><th><div class="redes"> Eduteka12 </div></th><th><div class="redes"> Skype12 </div></th><th><div class="redes"> Badoo12 </div></th><th><div class="redes"> total12 </div></th><th><div class="redes">
                    Facebook13 </div></th><th><div class="redes"> YouTube13 </div></th><th><div class="redes"> Instagram13 </div></th><th><div class="redes"> LinkedIn13 </div></th><th><div class="redes"> Google13 </div></th><th><div class="redes"> Twitter13 </div></th><th><div class="redes"> WhatsApp13 </div></th><th><div class="redes"> Messenger13 </div></th><th><div class="redes">
                    SnapChat13 </div></th><th><div class="redes"> Classmates13 </div></th><th><div class="redes"> Academia13 </div></th><th><div class="redes"> StudiVZ13 </div></th><th><div class="redes"> EducaNetwork13 </div></th><th><div class="redes"> Edmodo13 </div></th><th><div class="redes"> Schoology13 </div></th><th><div class="redes"> Brainly13 </div></th><th><div class="redes">
                    Eduredes13 </div></th><th><div class="redes"> Docsity13 </div></th><th><div class="redes"> OtraEducacion13 </div></th><th><div class="redes"> RedAlumnos13 </div></th><th><div class="redes"> Educared13 </div></th><th><div class="redes"> Eduteka13 </div></th><th><div class="redes"> Skype13 </div></th><th><div class="redes"> Badoo13 </div></th><th><div class="redes"> total13 </div></th><th><div class="redes">
                    Facebook14 </div></th><th><div class="redes"> YouTube14 </div></th><th><div class="redes"> Instagram14 </div></th><th><div class="redes"> LinkedIn14 </div></th><th><div class="redes"> Google14 </div></th><th><div class="redes"> Twitter14 </div></th><th><div class="redes"> WhatsApp14 </div></th><th><div class="redes"> Messenger14 </div></th><th><div class="redes">
                    SnapChat14 </div></th><th><div class="redes"> Classmates14 </div></th><th><div class="redes"> Academia14 </div></th><th><div class="redes"> StudiVZ14 </div></th><th><div class="redes"> EducaNetwork14 </div></th><th><div class="redes"> Edmodo14 </div></th><th><div class="redes"> Schoology14 </div></th><th><div class="redes"> Brainly14 </div></th><th><div class="redes">
                    Eduredes14 </div></th><th><div class="redes"> Docsity14 </div></th><th><div class="redes"> OtraEducacion14 </div></th><th><div class="redes"> RedAlumnos14 </div></th><th><div class="redes"> Educared14 </div></th><th><div class="redes"> Eduteka14 </div></th><th><div class="redes"> Skype14 </div></th><th><div class="redes"> Badoo14 </div></th><th><div class="redes"> total14 </div></th><th><div class="redes">
                    Facebook15 </div></th><th><div class="redes"> YouTube15 </div></th><th><div class="redes"> Instagram15 </div></th><th><div class="redes"> LinkedIn15 </div></th><th><div class="redes"> Google15 </div></th><th><div class="redes"> Twitter15 </div></th><th><div class="redes"> WhatsApp15 </div></th><th><div class="redes"> Messenger15 </div></th><th><div class="redes">
                    SnapChat15 </div></th><th><div class="redes"> Classmates15 </div></th><th><div class="redes"> Academia15 </div></th><th><div class="redes"> StudiVZ15 </div></th><th><div class="redes"> EducaNetwork15 </div></th><th><div class="redes"> Edmodo15 </div></th><th><div class="redes"> Schoology15 </div></th><th><div class="redes"> Brainly15 </div></th><th><div class="redes">
                    Eduredes15 </div></th><th><div class="redes"> Docsity15 </div></th><th><div class="redes"> OtraEducacion15 </div></th><th><div class="redes"> RedAlumnos15 </div></th><th><div class="redes"> Educared15 </div></th><th><div class="redes"> Eduteka15 </div></th><th><div class="redes"> Skype15 </div></th><th><div class="redes"> Badoo15 </div></th><th><div class="redes"> total15 </div></th><th><div class="redes">
                    Facebook16 </div></th><th><div class="redes"> YouTube16 </div></th><th><div class="redes"> Instagram16 </div></th><th><div class="redes"> LinkedIn16 </div></th><th><div class="redes"> Google16 </div></th><th><div class="redes"> Twitter16 </div></th><th><div class="redes"> WhatsApp16 </div></th><th><div class="redes"> Messenger16 </div></th><th><div class="redes">
                    SnapChat16 </div></th><th><div class="redes"> Classmates16 </div></th><th><div class="redes"> Academia16 </div></th><th><div class="redes"> StudiVZ16 </div></th><th><div class="redes"> EducaNetwork16 </div></th><th><div class="redes"> Edmodo16 </div></th><th><div class="redes"> Schoology16 </div></th><th><div class="redes"> Brainly16 </div></th><th><div class="redes">
                    Eduredes16 </div></th><th><div class="redes"> Docsity16 </div></th><th><div class="redes"> OtraEducacion16 </div></th><th><div class="redes"> RedAlumnos16 </div></th><th><div class="redes"> Educared16 </div></th><th><div class="redes"> Eduteka16 </div></th><th><div class="redes"> Skype16 </div></th><th><div class="redes"> Badoo16 </div></th><th><div class="redes"> total16 </div></th><th><div class="redes">
                    Facebook17 </div></th><th><div class="redes"> YouTube17 </div></th><th><div class="redes"> Instagram17 </div></th><th><div class="redes"> LinkedIn17 </div></th><th><div class="redes"> Google17 </div></th><th><div class="redes"> Twitter17 </div></th><th><div class="redes"> WhatsApp17 </div></th><th><div class="redes"> Messenger17 </div></th><th><div class="redes">
                    SnapChat17 </div></th><th><div class="redes"> Classmates17 </div></th><th><div class="redes"> Academia17 </div></th><th><div class="redes"> StudiVZ17 </div></th><th><div class="redes"> EducaNetwork17 </div></th><th><div class="redes"> Edmodo17 </div></th><th><div class="redes"> Schoology17 </div></th><th><div class="redes"> Brainly17 </div></th><th><div class="redes">
                    Eduredes17 </div></th><th><div class="redes"> Docsity17 </div></th><th><div class="redes"> OtraEducacion17 </div></th><th><div class="redes"> RedAlumnos17 </div></th><th><div class="redes"> Educared17 </div></th><th><div class="redes"> Eduteka17 </div></th><th><div class="redes"> Skype17 </div></th><th><div class="redes"> Badoo17 </div></th><th><div class="redes"> total17 </div></th><th><div class="redes">
                    otro</div></th><th><div class="redes">total18</div></th>
							  </tr>
                              </thead>
                              <tbody>';
					foreach($resultado as $row)
					{
						echo "<tr>
							      <td>".$row["carrera"]."</td><td>".$row["cuatrimestre"]."</td><td>".$row["grupo"]."</td><td>".$row["edad"]."</td><td>".$row["sexo"]."</td><td>".$row["computadora"]."</td>
                                  <td>".$row["laptop"]."</td><td>".$row["tablet"]."</td><td>".$row["smart"]."</td><td>".$row["noTengo"]."</td><td>".$row["Facebook1"]."</td><td>".$row["YouTube1"]."</td>
                                  <td>".$row["Instagram1"]."</td><td>".$row["LinkedIn1"]."</td><td>".$row["Google1"]."</td><td>".$row["Twitter1"]."</td><td>".$row["WhatsApp1"]."</td><td>".$row["Messenger1"]."</td>
                                  <td>".$row["SnapChat1"]."</td><td>".$row["Classmates1"]."</td><td>".$row["Academia1"]."</td><td>".$row["StudiVZ1"]."</td><td>".$row["EducaNetwork1"]."</td><td>".$row["Edmodo1"]."</td>
                                  <td>".$row["Schoology1"]."</td><td>".$row["Brainly1"]."</td><td>".$row["Eduredes1"]."</td><td>".$row["Docsity1"]."</td><td>".$row["OtraEducacion1"]."</td><td>".$row["RedAlumnos1"]."</td>
                                  <td>".$row["Educared1"]."</td><td>".$row["Eduteka1"]."</td><td>".$row["Skype1"]."</td><td>".$row["Badoo1"]."</td><td>".$row["total1"]."</td><td>".$row["Facebook2"]."</td>
                                  <td>".$row["YouTube2"]."</td><td>".$row["Instagram2"]."</td><td>".$row["LinkedIn2"]."</td><td>".$row["Google2"]."</td><td>".$row["Twitter2"]."</td><td>".$row["WhatsApp2"]."</td>
                                  <td>".$row["Messenger2"]."</td><td>".$row["SnapChat2"]."</td><td>".$row["Classmates2"]."</td><td>".$row["Academia2"]."</td><td>".$row["StudiVZ2"]."</td><td>".$row["EducaNetwork2"]."</td>
                                  <td>".$row["Edmodo2"]."</td><td>".$row["Schoology2"]."</td><td>".$row["Brainly2"]."</td><td>".$row["Eduredes2"]."</td><td>".$row["Docsity2"]."</td><td>".$row["OtraEducacion2"]."</td>
                                  <td>".$row["RedAlumnos2"]."</td><td>".$row["Educared2"]."</td><td>".$row["Eduteka2"]."</td><td>".$row["Skype2"]."</td><td>".$row["Badoo2"]."</td><td>".$row["total2"]."</td>
                                  <td>".$row["Facebook3"]."</td><td>".$row["YouTube3"]."</td><td>".$row["Instagram3"]."</td><td>".$row["LinkedIn3"]."</td><td>".$row["Google3"]."</td><td>".$row["Twitter3"]."</td>
                                  <td>".$row["WhatsApp3"]."</td><td>".$row["Messenger3"]."</td><td>".$row["SnapChat3"]."</td><td>".$row["Classmates3"]."</td><td>".$row["Academia3"]."</td><td>".$row["StudiVZ3"]."</td>
                                  <td>".$row["EducaNetwork3"]."</td><td>".$row["Edmodo3"]."</td><td>".$row["Schoology3"]."</td><td>".$row["Brainly3"]."</td><td>".$row["Eduredes3"]."</td><td>".$row["Docsity3"]."</td>
                                  <td>".$row["OtraEducacion3"]."</td><td>".$row["RedAlumnos3"]."</td><td>".$row["Educared3"]."</td><td>".$row["Eduteka3"]."</td><td>".$row["Skype3"]."</td><td>".$row["Badoo3"]."</td>
                                  <td>".$row["total3"]."</td><td>".$row["Facebook4"]."</td><td>".$row["YouTube4"]."</td><td>".$row["Instagram4"]."</td><td>".$row["LinkedIn4"]."</td><td>".$row["Google4"]."</td>
                                  <td>".$row["Twitter4"]."</td><td>".$row["WhatsApp4"]."</td><td>".$row["Messenger4"]."</td><td>".$row["SnapChat4"]."</td><td>".$row["Classmates4"]."</td><td>".$row["Academia4"]."</td>
                                  <td>".$row["StudiVZ4"]."</td><td>".$row["EducaNetwork4"]."</td><td>".$row["Edmodo4"]."</td><td>".$row["Schoology4"]."</td><td>".$row["Brainly4"]."</td><td>".$row["Eduredes4"]."</td>
                                  <td>".$row["Docsity4"]."</td><td>".$row["OtraEducacion4"]."</td><td>".$row["RedAlumnos4"]."</td><td>".$row["Educared4"]."</td><td>".$row["Eduteka4"]."</td><td>".$row["Skype4"]."</td>
                                  <td>".$row["Badoo4"]."</td><td>".$row["total4"]."</td><td>".$row["Facebook5"]."</td><td>".$row["YouTube5"]."</td><td>".$row["Instagram5"]."</td><td>".$row["LinkedIn5"]."</td>
                                  <td>".$row["Google5"]."</td><td>".$row["Twitter5"]."</td><td>".$row["WhatsApp5"]."</td><td>".$row["Messenger5"]."</td><td>".$row["SnapChat5"]."</td><td>".$row["Classmates5"]."</td>
                                  <td>".$row["Academia5"]."</td><td>".$row["StudiVZ5"]."</td><td>".$row["EducaNetwork5"]."</td><td>".$row["Edmodo5"]."</td><td>".$row["Schoology5"]."</td><td>".$row["Brainly5"]."</td>
                                  <td>".$row["Eduredes5"]."</td><td>".$row["Docsity5"]."</td><td>".$row["OtraEducacion5"]."</td><td>".$row["RedAlumnos5"]."</td><td>".$row["Educared5"]."</td><td>".$row["Eduteka5"]."</td>
                                  <td>".$row["Skype5"]."</td><td>".$row["Badoo5"]."</td><td>".$row["total5"]."</td><td>".$row["Facebook6"]."</td><td>".$row["YouTube6"]."</td><td>".$row["Instagram6"]."</td>
                                  <td>".$row["LinkedIn6"]."</td><td>".$row["Google6"]."</td><td>".$row["Twitter6"]."</td><td>".$row["WhatsApp6"]."</td><td>".$row["Messenger6"]."</td><td>".$row["SnapChat6"]."</td>
                                  <td>".$row["Classmates6"]."</td><td>".$row["Academia6"]."</td><td>".$row["StudiVZ6"]."</td><td>".$row["EducaNetwork6"]."</td><td>".$row["Edmodo6"]."</td><td>".$row["Schoology6"]."</td>
                                  <td>".$row["Brainly6"]."</td><td>".$row["Eduredes6"]."</td><td>".$row["Docsity6"]."</td><td>".$row["OtraEducacion6"]."</td><td>".$row["RedAlumnos6"]."</td><td>".$row["Educared6"]."</td>
                                  <td>".$row["Eduteka6"]."</td><td>".$row["Skype6"]."</td><td>".$row["Badoo6"]."</td><td>".$row["total6"]."</td><td>".$row["Facebook7"]."</td><td>".$row["YouTube7"]."</td>
                                  <td>".$row["Instagram7"]."</td><td>".$row["LinkedIn7"]."</td><td>".$row["Google7"]."</td><td>".$row["Twitter7"]."</td><td>".$row["WhatsApp7"]."</td><td>".$row["Messenger7"]."</td>
                                  <td>".$row["SnapChat7"]."</td><td>".$row["Classmates7"]."</td><td>".$row["Academia7"]."</td><td>".$row["StudiVZ7"]."</td><td>".$row["EducaNetwork7"]."</td><td>".$row["Edmodo7"]."</td>
                                  <td>".$row["Schoology7"]."</td><td>".$row["Brainly7"]."</td><td>".$row["Eduredes7"]."</td><td>".$row["Docsity7"]."</td><td>".$row["OtraEducacion7"]."</td><td>".$row["RedAlumnos7"]."</td>
                                  <td>".$row["Educared7"]."</td><td>".$row["Eduteka7"]."</td><td>".$row["Skype7"]."</td><td>".$row["Badoo7"]."</td><td>".$row["total7"]."</td><td>".$row["Facebook8"]."</td>
                                  <td>".$row["YouTube8"]."</td><td>".$row["Instagram8"]."</td><td>".$row["LinkedIn8"]."</td><td>".$row["Google8"]."</td><td>".$row["Twitter8"]."</td><td>".$row["WhatsApp8"]."</td>
                                  <td>".$row["Messenger8"]."</td><td>".$row["SnapChat8"]."</td><td>".$row["Classmates8"]."</td><td>".$row["Academia8"]."</td><td>".$row["StudiVZ8"]."</td><td>".$row["EducaNetwork8"]."</td>
                                  <td>".$row["Edmodo8"]."</td><td>".$row["Schoology8"]."</td><td>".$row["Brainly8"]."</td><td>".$row["Eduredes8"]."</td><td>".$row["Docsity8"]."</td><td>".$row["OtraEducacion8"]."</td>
                                  <td>".$row["RedAlumnos8"]."</td><td>".$row["Educared8"]."</td><td>".$row["Eduteka8"]."</td><td>".$row["Skype8"]."</td><td>".$row["Badoo8"]."</td><td>".$row["total8"]."</td>
                                  <td>".$row["Facebook9"]."</td><td>".$row["YouTube9"]."</td><td>".$row["Instagram9"]."</td><td>".$row["LinkedIn9"]."</td><td>".$row["Google9"]."</td><td>".$row["Twitter9"]."</td>
                                  <td>".$row["WhatsApp9"]."</td><td>".$row["Messenger9"]."</td><td>".$row["SnapChat9"]."</td><td>".$row["Classmates9"]."</td><td>".$row["Academia9"]."</td><td>".$row["StudiVZ9"]."</td>
                                  <td>".$row["EducaNetwork9"]."</td><td>".$row["Edmodo9"]."</td><td>".$row["Schoology9"]."</td><td>".$row["Brainly9"]."</td><td>".$row["Eduredes9"]."</td><td>".$row["Docsity9"]."</td>
                                  <td>".$row["OtraEducacion9"]."</td><td>".$row["RedAlumnos9"]."</td><td>".$row["Educared9"]."</td><td>".$row["Eduteka9"]."</td><td>".$row["Skype9"]."</td><td>".$row["Badoo9"]."</td>
                                  <td>".$row["total9"]."</td><td>".$row["Facebook10"]."</td><td>".$row["YouTube10"]."</td><td>".$row["Instagram10"]."</td><td>".$row["LinkedIn10"]."</td><td>".$row["Google10"]."</td>
                                  <td>".$row["Twitter10"]."</td><td>".$row["WhatsApp10"]."</td><td>".$row["Messenger10"]."</td><td>".$row["SnapChat10"]."</td><td>".$row["Classmates10"]."</td><td>".$row["Academia10"]."</td>
                                  <td>".$row["StudiVZ10"]."</td><td>".$row["EducaNetwork10"]."</td><td>".$row["Edmodo10"]."</td><td>".$row["Schoology10"]."</td><td>".$row["Brainly10"]."</td><td>".$row["Eduredes10"]."</td><td>".$row["Docsity10"]."</td>
                                  <td>".$row["OtraEducacion10"]."</td><td>".$row["RedAlumnos10"]."</td><td>".$row["Educared10"]."</td><td>".$row["Eduteka10"]."</td><td>".$row["Skype10"]."</td><td>".$row["Badoo10"]."</td><td>".$row["total10"]."</td>
                                  <td>".$row["Facebook11"]."</td><td>".$row["YouTube11"]."</td><td>".$row["Instagram11"]."</td><td>".$row["LinkedIn11"]."</td><td>".$row["Google11"]."</td><td>".$row["Twitter11"]."</td><td>".$row["WhatsApp11"]."</td>
                                  <td>".$row["Messenger11"]."</td><td>".$row["SnapChat11"]."</td><td>".$row["Classmates11"]."</td><td>".$row["Academia11"]."</td><td>".$row["StudiVZ11"]."</td><td>".$row["EducaNetwork11"]."</td><td>".$row["Edmodo11"]."</td>
                                  <td>".$row["Schoology11"]."</td><td>".$row["Brainly11"]."</td><td>".$row["Eduredes11"]."</td><td>".$row["Docsity11"]."</td><td>".$row["OtraEducacion11"]."</td><td>".$row["RedAlumnos11"]."</td><td>".$row["Educared11"]."</td>
                                  <td>".$row["Eduteka11"]."</td><td>".$row["Skype11"]."</td><td>".$row["Badoo11"]."</td><td>".$row["total11"]."</td><td>".$row["Facebook12"]."</td><td>".$row["YouTube12"]."</td><td>".$row["Instagram12"]."</td><td>".$row["LinkedIn12"]."</td>
                                  <td>".$row["Google12"]."</td><td>".$row["Twitter12"]."</td><td>".$row["WhatsApp12"]."</td><td>".$row["Messenger12"]."</td><td>".$row["SnapChat12"]."</td><td>".$row["Classmates12"]."</td><td>".$row["Academia12"]."</td>
                                  <td>".$row["StudiVZ12"]."</td><td>".$row["EducaNetwork12"]."</td><td>".$row["Edmodo12"]."</td><td>".$row["Schoology12"]."</td><td>".$row["Brainly12"]."</td><td>".$row["Eduredes12"]."</td><td>".$row["Docsity12"]."</td>
                                  <td>".$row["OtraEducacion12"]."</td><td>".$row["RedAlumnos12"]."</td><td>".$row["Educared12"]."</td><td>".$row["Eduteka12"]."</td><td>".$row["Skype12"]."</td><td>".$row["Badoo12"]."</td><td>".$row["total12"]."</td>
                                  <td>".$row["Facebook13"]."</td><td>".$row["YouTube13"]."</td><td>".$row["Instagram13"]."</td><td>".$row["LinkedIn13"]."</td><td>".$row["Google13"]."</td><td>".$row["Twitter13"]."</td><td>".$row["WhatsApp13"]."</td>
                                  <td>".$row["Messenger13"]."</td><td>".$row["SnapChat13"]."</td><td>".$row["Classmates13"]."</td><td>".$row["Academia13"]."</td><td>".$row["StudiVZ13"]."</td><td>".$row["EducaNetwork13"]."</td><td>".$row["Edmodo13"]."</td>
                                  <td>".$row["Schoology13"]."</td><td>".$row["Brainly13"]."</td><td>".$row["Eduredes13"]."</td><td>".$row["Docsity13"]."</td><td>".$row["OtraEducacion13"]."</td><td>".$row["RedAlumnos13"]."</td><td>".$row["Educared13"]."</td>
                                  <td>".$row["Eduteka13"]."</td><td>".$row["Skype13"]."</td><td>".$row["Badoo13"]."</td><td>".$row["total13"]."</td><td>".$row["Facebook14"]."</td><td>".$row["YouTube14"]."</td><td>".$row["Instagram14"]."</td><td>".$row["LinkedIn14"]."</td>
                                  <td>".$row["Google14"]."</td><td>".$row["Twitter14"]."</td><td>".$row["WhatsApp14"]."</td><td>".$row["Messenger14"]."</td><td>".$row["SnapChat14"]."</td><td>".$row["Classmates14"]."</td><td>".$row["Academia14"]."</td>
                                  <td>".$row["StudiVZ14"]."</td><td>".$row["EducaNetwork14"]."</td><td>".$row["Edmodo14"]."</td><td>".$row["Schoology14"]."</td><td>".$row["Brainly14"]."</td><td>".$row["Eduredes14"]."</td><td>".$row["Docsity14"]."</td><td>".$row["OtraEducacion14"]."</td>
                                  <td>".$row["RedAlumnos14"]."</td><td>".$row["Educared14"]."</td><td>".$row["Eduteka14"]."</td><td>".$row["Skype14"]."</td><td>".$row["Badoo14"]."</td><td>".$row["total14"]."</td><td>".$row["Facebook15"]."</td><td>".$row["YouTube15"]."</td>
                                  <td>".$row["Instagram15"]."</td><td>".$row["LinkedIn15"]."</td><td>".$row["Google15"]."</td><td>".$row["Twitter15"]."</td><td>".$row["WhatsApp15"]."</td><td>".$row["Messenger15"]."</td><td>".$row["SnapChat15"]."</td><td>".$row["Classmates15"]."</td>
                                  <td>".$row["Academia15"]."</td><td>".$row["StudiVZ15"]."</td><td>".$row["EducaNetwork15"]."</td><td>".$row["Edmodo15"]."</td><td>".$row["Schoology15"]."</td><td>".$row["Brainly15"]."</td><td>".$row["Eduredes15"]."</td><td>".$row["Docsity15"]."</td>
                                  <td>".$row["OtraEducacion15"]."</td><td>".$row["RedAlumnos15"]."</td><td>".$row["Educared15"]."</td><td>".$row["Eduteka15"]."</td><td>".$row["Skype15"]."</td><td>".$row["Badoo15"]."</td><td>".$row["total15"]."</td><td>".$row["Facebook16"]."</td>
                                  <td>".$row["YouTube16"]."</td><td>".$row["Instagram16"]."</td><td>".$row["LinkedIn16"]."</td><td>".$row["Google16"]."</td><td>".$row["Twitter16"]."</td><td>".$row["WhatsApp16"]."</td><td>".$row["Messenger16"]."</td><td>".$row["SnapChat16"]."</td>
                                  <td>".$row["Classmates16"]."</td><td>".$row["Academia16"]."</td><td>".$row["StudiVZ16"]."</td><td>".$row["EducaNetwork16"]."</td><td>".$row["Edmodo16"]."</td><td>".$row["Schoology16"]."</td><td>".$row["Brainly16"]."</td><td>".$row["Eduredes16"]."</td>
                                  <td>".$row["Docsity16"]."</td><td>".$row["OtraEducacion16"]."</td><td>".$row["RedAlumnos16"]."</td><td>".$row["Educared16"]."</td><td>".$row["Eduteka16"]."</td><td>".$row["Skype16"]."</td><td>".$row["Badoo16"]."</td><td>".$row["total16"]."</td>
                                  <td>".$row["Facebook17"]."</td><td>".$row["YouTube17"]."</td><td>".$row["Instagram17"]."</td><td>".$row["LinkedIn17"]."</td><td>".$row["Google17"]."</td><td>".$row["Twitter17"]."</td><td>".$row["WhatsApp17"]."</td><td>".$row["Messenger17"]."</td>
                                  <td>".$row["SnapChat17"]."</td><td>".$row["Classmates17"]."</td><td>".$row["Academia17"]."</td><td>".$row["StudiVZ17"]."</td><td>".$row["EducaNetwork17"]."</td><td>".$row["Edmodo17"]."</td><td>".$row["Schoology17"]."</td><td>".$row["Brainly17"]."</td>
                                  <td>".$row["Eduredes17"]."</td><td>".$row["Docsity17"]."</td><td>".$row["OtraEducacion17"]."</td><td>".$row["RedAlumnos17"]."</td><td>".$row["Educared17"]."</td><td>".$row["Eduteka17"]."</td><td>".$row["Skype17"]."</td><td>".$row["Badoo17"]."</td>
                                  <td>".$row["total17"]."</td><td>".$row["otro"]."</td><td>".$row["total18"]."</td>
							  </tr>";
					}

					echo "</tbody></table>";

                    $carrera = array("Energ&iacute;as Renobables",
                                     "Financiera y Fiscal",
                                     "Desarrollo e Inovacion Empresarial",
                                     "Log&iacute;stica Internacional",
                                     "Mantenimiento Industrial",
                                     "Mecatr&oacute;nica",
                                     "Procesos y Operaciones Industriales",
                                     "Tecnolog&iacute;as de la Informaci&oacute;n",
                                     "Nanotecnolog&iacute;a",
                                     "Terapia F&iacute;sica",
                                     "Protecci&oacute;n Civil y Emergencias");

                    echo "<table id='resultados' border='1'>
                              <tr>
                                  <th>Carrera</th>
                                  <th>Total</th>
                              </tr>";
                    for($i=1; $i<=11; $i++)
                    {
                        $comando = "SELECT COUNT( carrera ) AS total
                                    FROM cuestionario
                                    WHERE carrera = $i";

                        $resultado = $conexion->query($comando);

                        $row = $resultado->fetch_assoc();

                        echo "<tr>
                                  <td>".$carrera[($i-1)]."</td>
                                  <td id='number'>".$row[total]."</td>
                              </tr>";
                    }

                    echo "</table>";
				}
                else
                    echo "Error: ".$conexion->error;

                $conexion->close();
            }

            $conexion = null;
        ?>
    </body>
</html>
