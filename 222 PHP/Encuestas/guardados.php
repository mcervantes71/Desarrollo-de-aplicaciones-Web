<!DOCTYPE html>
<html>
    <head>
        <title>Encuestas Guardadas</title>

        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <h1>Cuestionario 1</h1>

        <?php
            require_once "conexion.php";

            $comando = "SELECT *
                        FROM cuestionario
                        ORDER BY carrera ASC";

            $resultado = $conexion->query($comando);

            if($resultado->num_rows > 0)
			{
                echo  '<table border="1">
                          <thead>
					      <tr>
                              <th><div class="redes">carrera</div></th>
                              <th><div class="redes">cuatrimestre</div></th>
                              <th><div class="redes">grupo</div></th>
                              <th><div class="redes">edad</div></th>
                              <th><div class="redes">sexo</div></th>

                              <th><div class="redes">computadora</div></th>
                              <th><div class="redes">laptop</div></th>
                              <th><div class="redes">tablet</div></th>
                              <th><div class="redes">smart</div></th>
                              <th><div class="redes">noTengo</div></th>

                              <th><div class="redes">Facebook1</div></th>
                              <th><div class="redes">YouTube1</div></th>
                              <th><div class="redes">Instagram1</div></th>
                              <th><div class="redes">LinkedIn1</div></th>
                              <th><div class="redes">Google1</div></th>
                              <th><div class="redes">Twitter1</div></th>
                              <th><div class="redes">WhatsApp1</div></th>
                              <th><div class="redes">Messenger1</div></th>
                              <th><div class="redes">SnapChat1</div></th>
                              <th><div class="redes">Classmates1</div></th>
                              <th><div class="redes">Academia1</div></th>
                              <th><div class="redes">StudiVZ1</div></th>
                              <th><div class="redes">EducaNetwork1</div></th>
                              <th><div class="redes">Edmodo1</div></th>
                              <th><div class="redes">Schoology1</div></th>
                              <th><div class="redes">Brainly1</div></th>
                              <th><div class="redes">Eduredes1</div></th>
                              <th><div class="redes">Docsity1</div></th>
                              <th><div class="redes">OtraEducacion1</div></th>
                              <th><div class="redes">RedAlumnos1</div></th>
                              <th><div class="redes">Educared1</div></th>
                              <th><div class="redes">Eduteka1</div></th>
                              <th><div class="redes">Skype1</div></th>
                              <th><div class="redes">Badoo1</div></th>
                              <th><div class="redes">total1</div></th>

                              <th><div class="redes">Facebook2</div></th>
                              <th><div class="redes">YouTube2</div></th>
                              <th><div class="redes">Instagram2</div></th>
                              <th><div class="redes">LinkedIn2</div></th>
                              <th><div class="redes">Google2</div></th>
                              <th><div class="redes">Twitter2</div></th>
                              <th><div class="redes">WhatsApp2</div></th>
                              <th><div class="redes">Messenger2</div></th>
                              <th><div class="redes">SnapChat2</div></th>
                              <th><div class="redes">Classmates2</div></th>
                              <th><div class="redes">Academia2</div></th>
                              <th><div class="redes">StudiVZ2</div></th>
                              <th><div class="redes">EducaNetwork2</div></th>
                              <th><div class="redes">Edmodo2</div></th>
                              <th><div class="redes">Schoology2</div></th>
                              <th><div class="redes">Brainly2</div></th>
                              <th><div class="redes">Eduredes2</div></th>
                              <th><div class="redes">Docsity2</div></th>
                              <th><div class="redes">OtraEducacion2</div></th>
                              <th><div class="redes">RedAlumnos2</div></th>
                              <th><div class="redes">Educared2</div></th>
                              <th><div class="redes">Eduteka2</div></th>
                              <th><div class="redes">Skype2</div></th>
                              <th><div class="redes">Badoo2</div></th>
                              <th><div class="redes">total2</div></th>

                              <th><div class="redes">Facebook3</div></th>
                              <th><div class="redes">YouTube3</div></th>
                              <th><div class="redes">Instagram3</div></th>
                              <th><div class="redes">LinkedIn3</div></th>
                              <th><div class="redes">Google3</div></th>
                              <th><div class="redes">Twitter3</div></th>
                              <th><div class="redes">WhatsApp3</div></th>
                              <th><div class="redes">Messenger3</div></th>
                              <th><div class="redes">SnapChat3</div></th>
                              <th><div class="redes">Classmates3</div></th>
                              <th><div class="redes">Academia3</div></th>
                              <th><div class="redes">StudiVZ3</div></th>
                              <th><div class="redes">EducaNetwork3</div></th>
                              <th><div class="redes">Edmodo3</div></th>
                              <th><div class="redes">Schoology3</div></th>
                              <th><div class="redes">Brainly3</div></th>
                              <th><div class="redes">Eduredes3</div></th>
                              <th><div class="redes">Docsity3</div></th>
                              <th><div class="redes">OtraEducacion3</div></th>
                              <th><div class="redes">RedAlumnos3</div></th>
                              <th><div class="redes">Educared3</div></th>
                              <th><div class="redes">Eduteka3</div></th>
                              <th><div class="redes">Skype3</div></th>
                              <th><div class="redes">Badoo3</div></th>
                              <th><div class="redes">total3</div></th>

                              <th><div class="redes">Facebook4</div></th>
                              <th><div class="redes">YouTube4</div></th>
                              <th><div class="redes">Instagram4</div></th>
                              <th><div class="redes">LinkedIn4</div></th>
                              <th><div class="redes">Google4</div></th>
                              <th><div class="redes">Twitter4</div></th>
                              <th><div class="redes">WhatsApp4</div></th>
                              <th><div class="redes">Messenger4</div></th>
                              <th><div class="redes">SnapChat4</div></th>
                              <th><div class="redes">Classmates4</div></th>
                              <th><div class="redes">Academia4</div></th>
                              <th><div class="redes">StudiVZ4</div></th>
                              <th><div class="redes">EducaNetwork4</div></th>
                              <th><div class="redes">Edmodo4</div></th>
                              <th><div class="redes">Schoology4</div></th>
                              <th><div class="redes">Brainly4</div></th>
                              <th><div class="redes">Eduredes4</div></th>
                              <th><div class="redes">Docsity4</div></th>
                              <th><div class="redes">OtraEducacion4</div></th>
                              <th><div class="redes">RedAlumnos4</div></th>
                              <th><div class="redes">Educared4</div></th>
                              <th><div class="redes">Eduteka4</div></th>
                              <th><div class="redes">Skype4</div></th>
                              <th><div class="redes">Badoo4</div></th>
                              <th><div class="redes">total4</div></th>

                              <th><div class="redes">Facebook5</div></th>
                              <th><div class="redes">YouTube5</div></th>
                              <th><div class="redes">Instagram5</div></th>
                              <th><div class="redes">LinkedIn5</div></th>
                              <th><div class="redes">Google5</div></th>
                              <th><div class="redes">Twitter5</div></th>
                              <th><div class="redes">WhatsApp5</div></th>
                              <th><div class="redes">Messenger5</div></th>
                              <th><div class="redes">SnapChat5</div></th>
                              <th><div class="redes">Classmates5</div></th>
                              <th><div class="redes">Academia5</div></th>
                              <th><div class="redes">StudiVZ5</div></th>
                              <th><div class="redes">EducaNetwork5</div></th>
                              <th><div class="redes">Edmodo5</div></th>
                              <th><div class="redes">Schoology5</div></th>
                              <th><div class="redes">Brainly5</div></th>
                              <th><div class="redes">Eduredes5</div></th>
                              <th><div class="redes">Docsity5</div></th>
                              <th><div class="redes">OtraEducacion5</div></th>
                              <th><div class="redes">RedAlumnos5</div></th>
                              <th><div class="redes">Educared5</div></th>
                              <th><div class="redes">Eduteka5</div></th>
                              <th><div class="redes">Skype5</div></th>
                              <th><div class="redes">Badoo5</div></th>
                              <th><div class="redes">total5</div></th>

                              <th><div class="redes">Facebook6</div></th>
                              <th><div class="redes">YouTube6</div></th>
                              <th><div class="redes">Instagram6</div></th>
                              <th><div class="redes">LinkedIn6</div></th>
                              <th><div class="redes">Google6</div></th>
                              <th><div class="redes">Twitter6</div></th>
                              <th><div class="redes">WhatsApp6</div></th>
                              <th><div class="redes">Messenger6</div></th>
                              <th><div class="redes">SnapChat6</div></th>
                              <th><div class="redes">Classmates6</div></th>
                              <th><div class="redes">Academia6</div></th>
                              <th><div class="redes">StudiVZ6</div></th>
                              <th><div class="redes">EducaNetwork6</div></th>
                              <th><div class="redes">Edmodo6</div></th>
                              <th><div class="redes">Schoology6</div></th>
                              <th><div class="redes">Brainly6</div></th>
                              <th><div class="redes">Eduredes6</div></th>
                              <th><div class="redes">Docsity6</div></th>
                              <th><div class="redes">OtraEducacion6</div></th>
                              <th><div class="redes">RedAlumnos6</div></th>
                              <th><div class="redes">Educared6</div></th>
                              <th><div class="redes">Eduteka6</div></th>
                              <th><div class="redes">Skype6</div></th>
                              <th><div class="redes">Badoo6</div></th>
                              <th><div class="redes">total6</div></th>

                              <th><div class="redes">Facebook7</div></th>
                              <th><div class="redes">YouTube7</div></th>
                              <th><div class="redes">Instagram7</div></th>
                              <th><div class="redes">LinkedIn7</div></th>
                              <th><div class="redes">Google7</div></th>
                              <th><div class="redes">Twitter7</div></th>
                              <th><div class="redes">WhatsApp7</div></th>
                              <th><div class="redes">Messenger7</div></th>
                              <th><div class="redes">SnapChat7</div></th>
                              <th><div class="redes">Classmates7</div></th>
                              <th><div class="redes">Academia7</div></th>
                              <th><div class="redes">StudiVZ7</div></th>
                              <th><div class="redes">EducaNetwork7</div></th>
                              <th><div class="redes">Edmodo7</div></th>
                              <th><div class="redes">Schoology7</div></th>
                              <th><div class="redes">Brainly7</div></th>
                              <th><div class="redes">Eduredes7</div></th>
                              <th><div class="redes">Docsity7</div></th>
                              <th><div class="redes">OtraEducacion7</div></th>
                              <th><div class="redes">RedAlumnos7</div></th>
                              <th><div class="redes">Educared7</div></th>
                              <th><div class="redes">Eduteka7</div></th>
                              <th><div class="redes">Skype7</div></th>
                              <th><div class="redes">Badoo7</div></th>
                              <th><div class="redes">total7</div></th>

                              <th><div class="redes">Facebook8</div></th>
                              <th><div class="redes">YouTube8</div></th>
                              <th><div class="redes">Instagram8</div></th>
                              <th><div class="redes">LinkedIn8</div></th>
                              <th><div class="redes">Google8</div></th>
                              <th><div class="redes">Twitter8</div></th>
                              <th><div class="redes">WhatsApp8</div></th>
                              <th><div class="redes">Messenger8</div></th>
                              <th><div class="redes">SnapChat8</div></th>
                              <th><div class="redes">Classmates8</div></th>
                              <th><div class="redes">Academia8</div></th>
                              <th><div class="redes">StudiVZ8</div></th>
                              <th><div class="redes">EducaNetwork8</div></th>
                              <th><div class="redes">Edmodo8</div></th>
                              <th><div class="redes">Schoology8</div></th>
                              <th><div class="redes">Brainly8</div></th>
                              <th><div class="redes">Eduredes8</div></th>
                              <th><div class="redes">Docsity8</div></th>
                              <th><div class="redes">OtraEducacion8</div></th>
                              <th><div class="redes">RedAlumnos8</div></th>
                              <th><div class="redes">Educared8</div></th>
                              <th><div class="redes">Eduteka8</div></th>
                              <th><div class="redes">Skype8</div></th>
                              <th><div class="redes">Badoo8</div></th>
                              <th><div class="redes">total8</div></th>

                              <th><div class="redes">Facebook9</div></th>
                              <th><div class="redes">YouTube9</div></th>
                              <th><div class="redes">Instagram9</div></th>
                              <th><div class="redes">LinkedIn9</div></th>
                              <th><div class="redes">Google9</div></th>
                              <th><div class="redes">Twitter9</div></th>
                              <th><div class="redes">WhatsApp9</div></th>
                              <th><div class="redes">Messenger9</div></th>
                              <th><div class="redes">SnapChat9</div></th>
                              <th><div class="redes">Classmates9</div></th>
                              <th><div class="redes">Academia9</div></th>
                              <th><div class="redes">StudiVZ9</div></th>
                              <th><div class="redes">EducaNetwork9</div></th>
                              <th><div class="redes">Edmodo9</div></th>
                              <th><div class="redes">Schoology9</div></th>
                              <th><div class="redes">Brainly9</div></th>
                              <th><div class="redes">Eduredes9</div></th>
                              <th><div class="redes">Docsity9</div></th>
                              <th><div class="redes">OtraEducacion9</div></th>
                              <th><div class="redes">RedAlumnos9</div></th>
                              <th><div class="redes">Educared9</div></th>
                              <th><div class="redes">Eduteka9</div></th>
                              <th><div class="redes">Skype9</div></th>
                              <th><div class="redes">Badoo9</div></th>
                              <th><div class="redes">total9</div></th>

                              <th><div class="redes">Facebook10</div></th>
                              <th><div class="redes">YouTube10</div></th>
                              <th><div class="redes">Instagram10</div></th>
                              <th><div class="redes">LinkedIn10</div></th>
                              <th><div class="redes">Google10</div></th>
                              <th><div class="redes">Twitter10</div></th>
                              <th><div class="redes">WhatsApp10</div></th>
                              <th><div class="redes">Messenger10</div></th>
                              <th><div class="redes">SnapChat10</div></th>
                              <th><div class="redes">Classmates10</div></th>
                              <th><div class="redes">Academia10</div></th>
                              <th><div class="redes">StudiVZ10</div></th>
                              <th><div class="redes">EducaNetwork10</div></th>
                              <th><div class="redes">Edmodo10</div></th>
                              <th><div class="redes">Schoology10</div></th>
                              <th><div class="redes">Brainly10</div></th>
                              <th><div class="redes">Eduredes10</div></th>
                              <th><div class="redes">Docsity10</div></th>
                              <th><div class="redes">OtraEducacion10</div></th>
                              <th><div class="redes">RedAlumnos10</div></th>
                              <th><div class="redes">Educared10</div></th>
                              <th><div class="redes">Eduteka10</div></th>
                              <th><div class="redes">Skype10</div></th>
                              <th><div class="redes">Badoo10</div></th>
                              <th><div class="redes">total10</div></th>

                              <th><div class="redes">Facebook11</div></th>
                              <th><div class="redes">YouTube11</div></th>
                              <th><div class="redes">Instagram11</div></th>
                              <th><div class="redes">LinkedIn11</div></th>
                              <th><div class="redes">Google11</div></th>
                              <th><div class="redes">Twitter11</div></th>
                              <th><div class="redes">WhatsApp11</div></th>
                              <th><div class="redes">Messenger11</div></th>
                              <th><div class="redes">SnapChat11</div></th>
                              <th><div class="redes">Classmates11</div></th>
                              <th><div class="redes">Academia11</div></th>
                              <th><div class="redes">StudiVZ11</div></th>
                              <th><div class="redes">EducaNetwork11</div></th>
                              <th><div class="redes">Edmodo11</div></th>
                              <th><div class="redes">Schoology11</div></th>
                              <th><div class="redes">Brainly11</div></th>
                              <th><div class="redes">Eduredes11</div></th>
                              <th><div class="redes">Docsity11</div></th>
                              <th><div class="redes">OtraEducacion11</div></th>
                              <th><div class="redes">RedAlumnos11</div></th>
                              <th><div class="redes">Educared11</div></th>
                              <th><div class="redes">Eduteka11</div></th>
                              <th><div class="redes">Skype11</div></th>
                              <th><div class="redes">Badoo11</div></th>
                              <th><div class="redes">total11</div></th>

                              <th><div class="redes">Facebook12</div></th>
                              <th><div class="redes">YouTube12</div></th>
                              <th><div class="redes">Instagram12</div></th>
                              <th><div class="redes">LinkedIn12</div></th>
                              <th><div class="redes">Google12</div></th>
                              <th><div class="redes">Twitter12</div></th>
                              <th><div class="redes">WhatsApp12</div></th>
                              <th><div class="redes">Messenger12</div></th>
                              <th><div class="redes">SnapChat12</div></th>
                              <th><div class="redes">Classmates12</div></th>
                              <th><div class="redes">Academia12</div></th>
                              <th><div class="redes">StudiVZ12</div></th>
                              <th><div class="redes">EducaNetwork12</div></th>
                              <th><div class="redes">Edmodo12</div></th>
                              <th><div class="redes">Schoology12</div></th>
                              <th><div class="redes">Brainly12</div></th>
                              <th><div class="redes">Eduredes12</div></th>
                              <th><div class="redes">Docsity12</div></th>
                              <th><div class="redes">OtraEducacion12</div></th>
                              <th><div class="redes">RedAlumnos12</div></th>
                              <th><div class="redes">Educared12</div></th>
                              <th><div class="redes">Eduteka12</div></th>
                              <th><div class="redes">Skype12</div></th>
                              <th><div class="redes">Badoo12</div></th>
                              <th><div class="redes">total12</div></th>

                              <th><div class="redes">Facebook13</div></th>
                              <th><div class="redes">YouTube13</div></th>
                              <th><div class="redes">Instagram13</div></th>
                              <th><div class="redes">LinkedIn13</div></th>
                              <th><div class="redes">Google13</div></th>
                              <th><div class="redes">Twitter13</div></th>
                              <th><div class="redes">WhatsApp13</div></th>
                              <th><div class="redes">Messenger13</div></th>
                              <th><div class="redes">SnapChat13</div></th>
                              <th><div class="redes">Classmates13</div></th>
                              <th><div class="redes">Academia13</div></th>
                              <th><div class="redes">StudiVZ13</div></th>
                              <th><div class="redes">EducaNetwork13</div></th>
                              <th><div class="redes">Edmodo13</div></th>
                              <th><div class="redes">Schoology13</div></th>
                              <th><div class="redes">Brainly13</div></th>
                              <th><div class="redes">Eduredes13</div></th>
                              <th><div class="redes">Docsity13</div></th>
                              <th><div class="redes">OtraEducacion13</div></th>
                              <th><div class="redes">RedAlumnos13</div></th>
                              <th><div class="redes">Educared13</div></th>
                              <th><div class="redes">Eduteka13</div></th>
                              <th><div class="redes">Skype13</div></th>
                              <th><div class="redes">Badoo13</div></th>
                              <th><div class="redes">total13</div></th>

                              <th><div class="redes">Facebook14</div></th>
                              <th><div class="redes">YouTube14</div></th>
                              <th><div class="redes">Instagram14</div></th>
                              <th><div class="redes">LinkedIn14</div></th>
                              <th><div class="redes">Google14</div></th>
                              <th><div class="redes">Twitter14</div></th>
                              <th><div class="redes">WhatsApp14</div></th>
                              <th><div class="redes">Messenger14</div></th>
                              <th><div class="redes">SnapChat14</div></th>
                              <th><div class="redes">Classmates14</div></th>
                              <th><div class="redes">Academia14</div></th>
                              <th><div class="redes">StudiVZ14</div></th>
                              <th><div class="redes">EducaNetwork14</div></th>
                              <th><div class="redes">Edmodo14</div></th>
                              <th><div class="redes">Schoology14</div></th>
                              <th><div class="redes">Brainly14</div></th>
                              <th><div class="redes">Eduredes14</div></th>
                              <th><div class="redes">Docsity14</div></th>
                              <th><div class="redes">OtraEducacion14</div></th>
                              <th><div class="redes">RedAlumnos14</div></th>
                              <th><div class="redes">Educared14</div></th>
                              <th><div class="redes">Eduteka14</div></th>
                              <th><div class="redes">Skype14</div></th>
                              <th><div class="redes">Badoo14</div></th>
                              <th><div class="redes">total14</div></th>

                              <th><div class="redes">Facebook15</div></th>
                              <th><div class="redes">YouTube15</div></th>
                              <th><div class="redes">Instagram15</div></th>
                              <th><div class="redes">LinkedIn15</div></th>
                              <th><div class="redes">Google15</div></th>
                              <th><div class="redes">Twitter15</div></th>
                              <th><div class="redes">WhatsApp15</div></th>
                              <th><div class="redes">Messenger15</div></th>
                              <th><div class="redes">SnapChat15</div></th>
                              <th><div class="redes">Classmates15</div></th>
                              <th><div class="redes">Academia15</div></th>
                              <th><div class="redes">StudiVZ15</div></th>
                              <th><div class="redes">EducaNetwork15</div></th>
                              <th><div class="redes">Edmodo15</div></th>
                              <th><div class="redes">Schoology15</div></th>
                              <th><div class="redes">Brainly15</div></th>
                              <th><div class="redes">Eduredes15</div></th>
                              <th><div class="redes">Docsity15</div></th>
                              <th><div class="redes">OtraEducacion15</div></th>
                              <th><div class="redes">RedAlumnos15</div></th>
                              <th><div class="redes">Educared15</div></th>
                              <th><div class="redes">Eduteka15</div></th>
                              <th><div class="redes">Skype15</div></th>
                              <th><div class="redes">Badoo15</div></th>
                              <th><div class="redes">total15</div></th>

                              <th><div class="redes">Facebook16</div></th>
                              <th><div class="redes">YouTube16</div></th>
                              <th><div class="redes">Instagram16</div></th>
                              <th><div class="redes">LinkedIn16</div></th>
                              <th><div class="redes">Google16</div></th>
                              <th><div class="redes">Twitter16</div></th>
                              <th><div class="redes">WhatsApp16</div></th>
                              <th><div class="redes">Messenger16</div></th>
                              <th><div class="redes">SnapChat16</div></th>
                              <th><div class="redes">Classmates16</div></th>
                              <th><div class="redes">Academia16</div></th>
                              <th><div class="redes">StudiVZ16</div></th>
                              <th><div class="redes">EducaNetwork16</div></th>
                              <th><div class="redes">Edmodo16</div></th>
                              <th><div class="redes">Schoology16</div></th>
                              <th><div class="redes">Brainly16</div></th>
                              <th><div class="redes">Eduredes16</div></th>
                              <th><div class="redes">Docsity16</div></th>
                              <th><div class="redes">OtraEducacion16</div></th>
                              <th><div class="redes">RedAlumnos16</div></th>
                              <th><div class="redes">Educared16</div></th>
                              <th><div class="redes">Eduteka16</div></th>
                              <th><div class="redes">Skype16</div></th>
                              <th><div class="redes">Badoo16</div></th>
                              <th><div class="redes">total16</div></th>

                              <th><div class="redes">Facebook17</div></th>
                              <th><div class="redes">YouTube17</div></th>
                              <th><div class="redes">Instagram17</div></th>
                              <th><div class="redes">LinkedIn17</div></th>
                              <th><div class="redes">Google17</div></th>
                              <th><div class="redes">Twitter17</div></th>
                              <th><div class="redes">WhatsApp17</div></th>
                              <th><div class="redes">Messenger17</div></th>
                              <th><div class="redes">SnapChat17</div></th>
                              <th><div class="redes">Classmates17</div></th>
                              <th><div class="redes">Academia17</div></th>
                              <th><div class="redes">StudiVZ17</div></th>
                              <th><div class="redes">EducaNetwork17</div></th>
                              <th><div class="redes">Edmodo17</div></th>
                              <th><div class="redes">Schoology17</div></th>
                              <th><div class="redes">Brainly17</div></th>
                              <th><div class="redes">Eduredes17</div></th>
                              <th><div class="redes">Docsity17</div></th>
                              <th><div class="redes">OtraEducacion17</div></th>
                              <th><div class="redes">RedAlumnos17</div></th>
                              <th><div class="redes">Educared17</div></th>
                              <th><div class="redes">Eduteka17</div></th>
                              <th><div class="redes">Skype17</div></th>
                              <th><div class="redes">Badoo17</div></th>
                              <th><div class="redes">total17</div></th>

                              <th><div class="redes">otro</div></th>
                              <th><div class="redes">total18</div></th>
						  </tr>
                          </thead>
                          <tbody>';
                while($row = $resultado->fetch_assoc())
                {
					echo '<tr>';

                    foreach ($row as $col)
                    {
                        echo "<td>$col</td>";
                    }
				    echo '</tr>';
				}

				echo '</tbody></table>';

                $carrera = array("Energ&iacute;as Renobables",
                                   "Log&iacute;stica Internacional",
                    			   "Mantenimiento Industrial",
                    			   "Nanotecnolog&iacute;a",
                                   "Negocios e Inovacion Empresarial",
                                   "Mecatr&oacute;nica",
                                   "Procesos y Operaciones Industriales",
                    		       "Tecnolog&iacute;as de la Informaci&oacute;n",
                                   "Financiera y Fiscal",
                                   "Protecci&oacute;n Civil y Emergencias",
                                   "Terapia F&iacute;sica");

                echo "<table border='1'>
                          <tr id='resultados'>
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

        ?>

        <h1>Cuestionario 2</h1>

        <?php

            $comando = "SELECT *
                        FROM cuestionario2
                        ORDER BY carrera ASC";

            $resultado = $conexion->query($comando);

            if($resultado->num_rows > 0)
			{
                echo  '<table border="1">
                          <thead>
					      <tr>
                              <th><div class="redes">grupo</div></th>
                              <th><div class="redes">matricula</div></th>
                              <th><div class="redes">cuatrimestre</div></th>
                              <th><div class="redes">edad</div></th>
                              <th><div class="redes">sexo</div></th>
                              <th><div class="redes">carrera</div></th>

                              <th><div class="redes">computadora</div></th>
                              <th><div class="redes">laptop</div></th>
                              <th><div class="redes">tablet</div></th>
                              <th><div class="redes">smart</div></th>
                              <th><div class="redes">noTengo</div></th>

                              <th><div class="redes">Facebook1</div></th>
                              <th><div class="redes">Badoo1</div></th>
                              <th><div class="redes">Instagram1</div></th>
                              <th><div class="redes">GoogleMas1</div></th>
                              <th><div class="redes">Twitter1</div></th>
                              <th><div class="redes">Schoology1</div></th>
                              <th><div class="redes">Eduteka1</div></th>
                              <th><div class="redes">Moodle1</div></th>
                              <th><div class="redes">Claroline1</div></th>
                              <th><div class="redes">Edmodo1</div></th>
                              <th><div class="redes">WhatsApp1</div></th>
                              <th><div class="redes">Spotify1</div></th>
                              <th><div class="redes">Messenger1</div></th>
                              <th><div class="redes">Softonic1</div></th>
                              <th><div class="redes">Pandora1</div></th>
                              <th><div class="redes">Web2_01</div></th>
                              <th><div class="redes">Wikipedia1</div></th>
                              <th><div class="redes">Google1</div></th>
                              <th><div class="redes"> Windows1</div></th>
                              <th><div class="redes">YouTube1</div></th>
                              <th><div class="redes">MSN1</div></th>
                              <th><div class="redes">Yahoo1</div></th>

                              <th><div class="redes">Facebook2</div></th>
                              <th><div class="redes">Badoo2</div></th>
                              <th><div class="redes">Instagram2</div></th>
                              <th><div class="redes">GoogleMas2</div></th>
                              <th><div class="redes">Twitter2</div></th>
                              <th><div class="redes">Schoology2</div></th>
                              <th><div class="redes">Eduteka2</div></th>
                              <th><div class="redes">Moodle2</div></th>
                              <th><div class="redes">Claroline2</div></th>
                              <th><div class="redes">Edmodo2</div></th>
                              <th><div class="redes">WhatsApp2</div></th>
                              <th><div class="redes">Spotify2</div></th>
                              <th><div class="redes">Messenger2</div></th>
                              <th><div class="redes">Softonic2</div></th>
                              <th><div class="redes">Pandora2</div></th>
                              <th><div class="redes">Web2_02</div></th>
                              <th><div class="redes">Wikipedia2</div></th>
                              <th><div class="redes">Google2</div></th>
                              <th><div class="redes">Windows2</div></th>
                              <th><div class="redes">YouTube2</div></th>
                              <th><div class="redes">MSN2</div></th>
                              <th><div class="redes">Yahoo2</div></th>

                              <th><div class="redes">Facebook3</div></th>
                              <th><div class="redes">Badoo3</div></th>
                              <th><div class="redes">Instagram3</div></th>
                              <th><div class="redes">GoogleMas3</div></th>
                              <th><div class="redes">Twitter3</div></th>
                              <th><div class="redes">Schoology3</div></th>
                              <th><div class="redes">Eduteka3</div></th>
                              <th><div class="redes">Moodle3</div></th>
                              <th><div class="redes">Claroline3</div></th>
                              <th><div class="redes">Edmodo3</div></th>
                              <th><div class="redes">WhatsApp3</div></th>
                              <th><div class="redes">Spotify3</div></th>
                              <th><div class="redes">Messenger3</div></th>
                              <th><div class="redes">Softonic3</div></th>
                              <th><div class="redes">Pandora3</div></th>
                              <th><div class="redes">Web2_03</div></th>
                              <th><div class="redes">Wikipedia3</div></th>
                              <th><div class="redes">Google3</div></th>
                              <th><div class="redes">Windows3</div></th>
                              <th><div class="redes">YouTube3</div></th>
                              <th><div class="redes">MSN3</div></th>
                              <th><div class="redes">Yahoo3</div></th>

                              <th><div class="redes">Facebook4</div></th>
                              <th><div class="redes">Badoo4</div></th>
                              <th><div class="redes">Instagram4</div></th>
                              <th><div class="redes">GoogleMas4</div></th>
                              <th><div class="redes">Twitter4</div></th>
                              <th><div class="redes">Schoology4</div></th>
                              <th><div class="redes">Eduteka4</div></th>
                              <th><div class="redes">Moodle4</div></th>
                              <th><div class="redes">Claroline4</div></th>
                              <th><div class="redes">Edmodo4</div></th>
                              <th><div class="redes">WhatsApp4</div></th>
                              <th><div class="redes">Spotify4</div></th>
                              <th><div class="redes">Messenger4</div></th>
                              <th><div class="redes">Softonic4</div></th>
                              <th><div class="redes">Pandora4</div></th>
                              <th><div class="redes">Web2_04</div></th>
                              <th><div class="redes">Wikipedia4</div></th>
                              <th><div class="redes">Google4</div></th>
                              <th><div class="redes">Windows4</div></th>
                              <th><div class="redes">YouTube4</div></th>
                              <th><div class="redes">MSN4</div></th>
                              <th><div class="redes">Yahoo4</div></th>

                              <th><div class="redes">Facebook5</div></th>
                              <th><div class="redes">Badoo5</div></th>
                              <th><div class="redes">Instagram5</div></th>
                              <th><div class="redes">GoogleMas5</div></th>
                              <th><div class="redes">Twitter5</div></th>
                              <th><div class="redes">Schoology5</div></th>
                              <th><div class="redes">Eduteka5</div></th>
                              <th><div class="redes">Moodle5</div></th>
                              <th><div class="redes">Claroline5</div></th>
                              <th><div class="redes">Edmodo5</div></th>
                              <th><div class="redes">WhatsApp5</div></th>
                              <th><div class="redes">Spotify5</div></th>
                              <th><div class="redes">Messenger5</div></th>
                              <th><div class="redes">Softonic5</div></th>
                              <th><div class="redes">Pandora5</div></th>
                              <th><div class="redes">Web2_05</div></th>
                              <th><div class="redes">Wikipedia5</div></th>
                              <th><div class="redes">Google5</div></th>
                              <th><div class="redes">Windows5</div></th>
                              <th><div class="redes">YouTube5</div></th>
                              <th><div class="redes">MSN5</div></th>
                              <th><div class="redes">Yahoo5</div></th>

                              <th><div class="redes">Facebook6</div></th>
                              <th><div class="redes">Badoo6</div></th>
                              <th><div class="redes">Instagram6</div></th>
                              <th><div class="redes">GoogleMas6</div></th>
                              <th><div class="redes">Twitter6</div></th>
                              <th><div class="redes">Schoology6</div></th>
                              <th><div class="redes">Eduteka6</div></th>
                              <th><div class="redes">Moodle6</div></th>
                              <th><div class="redes">Claroline6</div></th>
                              <th><div class="redes">Edmodo6</div></th>
                              <th><div class="redes">WhatsApp6</div></th>
                              <th><div class="redes">Spotify6</div></th>
                              <th><div class="redes">Messenger6</div></th>
                              <th><div class="redes">Softonic6</div></th>
                              <th><div class="redes">Pandora6</div></th>
                              <th><div class="redes">Web2_06</div></th>
                              <th><div class="redes">Wikipedia6</div></th>
                              <th><div class="redes">Google6</div></th>
                              <th><div class="redes">Windows6</div></th>
                              <th><div class="redes">YouTube6</div></th>
                              <th><div class="redes">MSN6</div></th>
                              <th><div class="redes">Yahoo6</div></th>

                              <th><div class="redes">Facebook7</div></th>
                              <th><div class="redes">Badoo7</div></th>
                              <th><div class="redes">Instagram7</div></th>
                              <th><div class="redes">GoogleMas7</div></th>
                              <th><div class="redes">Twitter7</div></th>
                              <th><div class="redes">Schoology7</div></th>
                              <th><div class="redes">Eduteka7</div></th>
                              <th><div class="redes">Moodle7</div></th>
                              <th><div class="redes">Claroline7</div></th>
                              <th><div class="redes">Edmodo7</div></th>
                              <th><div class="redes">WhatsApp7</div></th>
                              <th><div class="redes">Spotify7</div></th>
                              <th><div class="redes">Messenger7</div></th>
                              <th><div class="redes">Softonic7</div></th>
                              <th><div class="redes">Pandora7</div></th>
                              <th><div class="redes">Web2_07</div></th>
                              <th><div class="redes">Wikipedia7</div></th>
                              <th><div class="redes">Google7</div></th>
                              <th><div class="redes">Windows7</div></th>
                              <th><div class="redes">YouTube7</div></th>
                              <th><div class="redes">MSN7</div></th>
                              <th><div class="redes">Yahoo7</div></th>

                              <th><div class="redes">Facebook8</div></th>
                              <th><div class="redes">Badoo8</div></th>
                              <th><div class="redes">Instagram8</div></th>
                              <th><div class="redes">GoogleMas8</div></th>
                              <th><div class="redes">Twitter8</div></th>
                              <th><div class="redes">Schoology8</div></th>
                              <th><div class="redes">Eduteka8</div></th>
                              <th><div class="redes">Moodle8</div></th>
                              <th><div class="redes">Claroline8</div></th>
                              <th><div class="redes">Edmodo8</div></th>
                              <th><div class="redes">WhatsApp8</div></th>
                              <th><div class="redes">Spotify8</div></th>
                              <th><div class="redes">Messenger8</div></th>
                              <th><div class="redes">Softonic8</div></th>
                              <th><div class="redes">Pandora8</div></th>
                              <th><div class="redes">Web2_08</div></th>
                              <th><div class="redes">Wikipedia8</div></th>
                              <th><div class="redes">Google8</div></th>
                              <th><div class="redes">Windows8</div></th>
                              <th><div class="redes">YouTube8</div></th>
                              <th><div class="redes">MSN8</div></th>
                              <th><div class="redes">Yahoo8</div></th>

                              <th><div class="redes">Facebook9</div></th>
                              <th><div class="redes">Badoo9</div></th>
                              <th><div class="redes">Instagram9</div></th>
                              <th><div class="redes">GoogleMas9</div></th>
                              <th><div class="redes">Twitter9</div></th>
                              <th><div class="redes">Schoology9</div></th>
                              <th><div class="redes">Eduteka9</div></th>
                              <th><div class="redes">Moodle9</div></th>
                              <th><div class="redes">Claroline9</div></th>
                              <th><div class="redes">Edmodo9</div></th>
                              <th><div class="redes">WhatsApp9</div></th>
                              <th><div class="redes">Spotify9</div></th>
                              <th><div class="redes">Messenger9</div></th>
                              <th><div class="redes">Softonic9</div></th>
                              <th><div class="redes">Pandora9</div></th>
                              <th><div class="redes">Web2_09</div></th>
                              <th><div class="redes">Wikipedia9</div></th>
                              <th><div class="redes">Google9</div></th>
                              <th><div class="redes">Windows9</div></th>
                              <th><div class="redes">YouTube9</div></th>
                              <th><div class="redes">MSN9</div></th>
                              <th><div class="redes">Yahoo9</div></th>

                              <th><div class="redes">Facebook10</div></th>
                              <th><div class="redes">Badoo10</div></th>
                              <th><div class="redes">Instagram10</div></th>
                              <th><div class="redes">GoogleMas10</div></th>
                              <th><div class="redes">Twitter10</div></th>
                              <th><div class="redes">Schoology10</div></th>
                              <th><div class="redes">Eduteka10</div></th>
                              <th><div class="redes">Moodle10</div></th>
                              <th><div class="redes">Claroline10</div></th>
                              <th><div class="redes">Edmodo10</div></th>
                              <th><div class="redes">WhatsApp10</div></th>
                              <th><div class="redes">Spotify10</div></th>
                              <th><div class="redes">Messenger10</div></th>
                              <th><div class="redes">Softonic10</div></th>
                              <th><div class="redes">Pandora10</div></th>
                              <th><div class="redes">Web2_010</div></th>
                              <th><div class="redes">Wikipedia10</div></th>
                              <th><div class="redes">Google10</div></th>
                              <th><div class="redes">Windows10</div></th>
                              <th><div class="redes">YouTube10</div></th>
                              <th><div class="redes">MSN10</div></th>
                              <th><div class="redes">Yahoo10</div></th>

                              <th><div class="redes">Facebook11</div></th>
                              <th><div class="redes">Badoo11</div></th>
                              <th><div class="redes">Instagram11</div></th>
                              <th><div class="redes">GoogleMas11</div></th>
                              <th><div class="redes">Twitter11</div></th>
                              <th><div class="redes">Schoology11</div></th>
                              <th><div class="redes">Eduteka11</div></th>
                              <th><div class="redes">Moodle11</div></th>
                              <th><div class="redes">Claroline11</div></th>
                              <th><div class="redes">Edmodo11</div></th>
                              <th><div class="redes">WhatsApp11</div></th>
                              <th><div class="redes">Spotify11</div></th>
                              <th><div class="redes">Messenger11</div></th>
                              <th><div class="redes">Softonic11</div></th>
                              <th><div class="redes">Pandora11</div></th>
                              <th><div class="redes">Web2_011</div></th>
                              <th><div class="redes">Wikipedia11</div></th>
                              <th><div class="redes">Google11</div></th>
                              <th><div class="redes">Windows11</div></th>
                              <th><div class="redes">YouTube11</div></th>
                              <th><div class="redes">MSN11</div></th>
                              <th><div class="redes">Yahoo11</div></th>

                              <th><div class="redes">Facebook12</div></th>
                              <th><div class="redes">Badoo12</div></th>
                              <th><div class="redes">Instagram12</div></th>
                              <th><div class="redes">GoogleMas12</div></th>
                              <th><div class="redes">Twitter12</div></th>
                              <th><div class="redes">Schoology12</div></th>
                              <th><div class="redes">Eduteka12</div></th>
                              <th><div class="redes">Moodle12</div></th>
                              <th><div class="redes">Claroline12</div></th>
                              <th><div class="redes">Edmodo12</div></th>
                              <th><div class="redes">WhatsApp12</div></th>
                              <th><div class="redes">Spotify12</div></th>
                              <th><div class="redes">Messenger12</div></th>
                              <th><div class="redes">Softonic12</div></th>
                              <th><div class="redes">Pandora12</div></th>
                              <th><div class="redes">Web2_012</div></th>
                              <th><div class="redes">Wikipedia12</div></th>
                              <th><div class="redes">Google12</div></th>
                              <th><div class="redes">Windows12</div></th>
                              <th><div class="redes">YouTube12</div></th>
                              <th><div class="redes">MSN12</div></th>
                              <th><div class="redes">Yahoo12</div></th>

                              <th><div class="redes">Facebook13</div></th>
                              <th><div class="redes">Badoo13</div></th>
                              <th><div class="redes">Instagram13</div></th>
                              <th><div class="redes">GoogleMas13</div></th>
                              <th><div class="redes">Twitter13</div></th>
                              <th><div class="redes">Schoology13</div></th>
                              <th><div class="redes">Eduteka13</div></th>
                              <th><div class="redes">Moodle13</div></th>
                              <th><div class="redes">Claroline13</div></th>
                              <th><div class="redes">Edmodo13</div></th>
                              <th><div class="redes">WhatsApp13</div></th>
                              <th><div class="redes">Spotify13</div></th>
                              <th><div class="redes">Messenger13</div></th>
                              <th><div class="redes">Softonic13</div></th>
                              <th><div class="redes">Pandora13</div></th>
                              <th><div class="redes">Web2_013</div></th>
                              <th><div class="redes">Wikipedia13</div></th>
                              <th><div class="redes">Google13</div></th>
                              <th><div class="redes">Windows13</div></th>
                              <th><div class="redes">YouTube13</div></th>
                              <th><div class="redes">MSN13</div></th>
                              <th><div class="redes">Yahoo13</div></th>

                              <th><div class="redes">Facebook14</div></th>
                              <th><div class="redes">Badoo14</div></th>
                              <th><div class="redes">Instagram14</div></th>
                              <th><div class="redes">GoogleMas14</div></th>
                              <th><div class="redes">Twitter14</div></th>
                              <th><div class="redes">Schoology14</div></th>
                              <th><div class="redes">Eduteka14</div></th>
                              <th><div class="redes">Moodle14</div></th>
                              <th><div class="redes">Claroline14</div></th>
                              <th><div class="redes">Edmodo14</div></th>
                              <th><div class="redes">WhatsApp14</div></th>
                              <th><div class="redes">Spotify14</div></th>
                              <th><div class="redes">Messenger14</div></th>
                              <th><div class="redes">Softonic14</div></th>
                              <th><div class="redes">Pandora14</div></th>
                              <th><div class="redes">Web2_014</div></th>
                              <th><div class="redes">Wikipedia14</div></th>
                              <th><div class="redes">Google14</div></th>
                              <th><div class="redes">Windows14</div></th>
                              <th><div class="redes">YouTube14</div></th>
                              <th><div class="redes">MSN14</div></th>
                              <th><div class="redes">Yahoo14</div></th>
                              
                              <th><div class="redes">Facebook15</div></th>
                              <th><div class="redes">Badoo15</div></th>
                              <th><div class="redes">Instagram15</div></th>
                              <th><div class="redes">GoogleMas15</div></th>
                              <th><div class="redes">Twitter15</div></th>
                              <th><div class="redes">Schoology15</div></th>
                              <th><div class="redes">Eduteka15</div></th>
                              <th><div class="redes">Moodle15</div></th>
                              <th><div class="redes">Claroline15</div></th>
                              <th><div class="redes">Edmodo15</div></th>
                              <th><div class="redes">WhatsApp15</div></th>
                              <th><div class="redes">Spotify15</div></th>
                              <th><div class="redes">Messenger15</div></th>
                              <th><div class="redes">Softonic15</div></th>
                              <th><div class="redes">Pandora15</div></th>
                              <th><div class="redes">Web2_015</div></th>
                              <th><div class="redes">Wikipedia15</div></th>
                              <th><div class="redes">Google15</div></th>
                              <th><div class="redes">Windows15</div></th>
                              <th><div class="redes">YouTube15</div></th>
                              <th><div class="redes">MSN15</div></th>
                              <th><div class="redes">Yahoo15</div></th>

                              <th><div class="redes">otro</div></th>
                              <th><div class="redes">total_redes</div></th>
                              <th><div class="redes">total_plataformas</div></th>
                              <th><div class="redes">total_apps</div></th>
                              <th><div class="redes">total_comunidades</div></th>
                              <th><div class="redes">total_internet</div></th>
						  </tr>
                          </thead>
                          <tbody>';
                while($row = $resultado->fetch_assoc())
                {
					echo '<tr>';

                    foreach ($row as $col)
                    {
                        echo "<td>$col</td>";
                    }
				    echo '</tr>';
				}

				echo '</tbody></table>';

                $carrera = array("Energ&iacute;as Renobables",
                                   "Log&iacute;stica Internacional",
                    			   "Mantenimiento Industrial",
                    			   "Nanotecnolog&iacute;a",
                                   "Negocios e Inovacion Empresarial",
                                   "Mecatr&oacute;nica",
                                   "Procesos y Operaciones Industriales",
                    		       "Tecnolog&iacute;as de la Informaci&oacute;n",
                                   "Financiera y Fiscal",
                                   "Protecci&oacute;n Civil y Emergencias",
                                   "Terapia F&iacute;sica");

                echo "<table border='1'>
                          <tr id='resultados'>
                              <th>Carrera</th>
                              <th>Total</th>
                          </tr>";
                for($i=1; $i<=11; $i++)
                {
                    $comando = "SELECT COUNT( carrera ) AS total
                                FROM cuestionario2
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

            $conexion = null;
        ?>
    </body>
</html>
