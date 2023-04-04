<?php //configura los datos de tu cuenta
include "functions.php";
include "config.php";


$conexion=conectarBD($dbhost,$dbuser,$dbpass);

$sentencia=$conexion->prepare("DROP DATABASE IF EXISTS $dbname");
$sentencia->execute();
echo "Base de datos anterior borrada<br>-------------------------<br>";

$sentencia=$conexion->prepare("CREATE DATABASE IF NOT EXISTS $dbname");
$sentencia->execute();
echo "Base de datos nueva creada<br>-------------------------<br>";

$conexion->select_db($dbname);

echo "Base de datos seleccionada <br>-------------------------<br>";

$sentencia=$conexion->prepare("CREATE TABLE IF NOT EXISTS $dbtable(
                            id VARCHAR(20),
                            title VARCHAR(50),
                            company VARCHAR(50),
                            image VARCHAR(500),
                            price DECIMAL(6,2),
                            PRIMARY KEY(id));");
$sentencia->execute();
echo "Tabla creada correctamente<br>-----------------------------------------<br>";


$sentencia=$conexion->prepare("INSERT INTO $dbtable VALUES 
                     ('rec43w3ipXvP28vog',
                      'high-back bench',
                      'ikea',
                      'https://dl.airtable.com/.attachments/14ac9e946e1a02eb9ce7d632c83f742f/4fd98e64/product-1.jpeg',
                      9.99),
                     ('rec4f2RIftFCb7aHh','albany table',
                     'marcos',
                     'https://dl.airtable.com/.attachments/f3450755e165557344f7d6433242431e/93533098/product-1.jpeg',
                      79.99),
                      ('rec8kkCmSiMkbkiko'
                      ,'accent chair'
                      ,'caressa',
                      'https://dl.airtable.com/.attachments/f292eaec4fea8a791b037c759ae559c9/2d5e34d5/product-4.jpeg',
                      25.99),
                      ('recBohCqQsot4Q4II',
                      'wooden table',
                      'caressa',
                      'https://dl.airtable.com/.attachments/5b3ad76dfd6ca5e31810cb99141c7ede/69829b2f/pexels-dominika-roseclay-1139785.jpg',
                      45.99),
                      ('recDG1JRZnbpRHpoy',
                      'dining table',
                      'caressa',
                      'https://dl.airtable.com/.attachments/06bbede65bd09196b4a81a8e7b59e683/8af0aeb5/product-8.jpg',
                      6.99),
                      ('recNWGyP7kjFhSqw3',
                      'sofa set',
                      'liddy',
                      'https://dl.airtable.com/.attachments/443aa7884207dae7c3cc127262a2f993/d4f33110/product-1.jpeg',
                      69.99),
                      ('recZEougL5bbY4AEx',
                      'modern bookshelf',
                      'marcos',
                      'https://dl.airtable.com/.attachments/a889b1928b134c2ca0b5bbca32ea9abf/65c8a9a6/product-7.jpg',
                      8.99),
                      ('recjMK1jgTb2ld7sv',
                      'emperor bed',
                      'liddy',
                      'https://dl.airtable.com/.attachments/10fdf29ae17f2d1f98770ae42584d021/82b9403f/product-6.jpg',
                      21.99),
                      ('recmg2a1ctaEJNZhu',
                      'utopia sofa',
                      'marcos',
                      'https://dl.airtable.com/.attachments/6ac7f7b55d505057317534722e5a9f03/9183491e/product-3.jpg',
                      39.95),
                      ('recvKMNR3YFw0bEt3',
                      'entertainment center',
                      'liddy',
                      'https://dl.airtable.com/.attachments/da5e17fd71f50578d525dd5f596e407e/d5e88ac8/product-2.jpg',
                      29.98),
                      ('recxaXFy5IW539sgM',
                      'albany sectional',
                      'ikea',
                      'https://dl.airtable.com/.attachments/05ecddf7ac8d581ecc3f7922415e7907/a4242abc/product-1.jpeg',
                      10.99),
                      ('recyqtRglGNGtO4Q5',
                      'leather sofa',
                      'liddy',
                      'https://dl.airtable.com/.attachments/3245c726ee77d73702ba8c3310639727/f000842b/product-5.jpg',
                      9.99)
                     ,
                      ('recyAtRglGNGtO4Q5',
                      'Midnight Sand and Blue SideBoard',
                      'Tylko',
                      'https://res.cloudinary.com/cstm/image/upload/w_0.5/v1/pdp/gallery/sideboard/cplus/02/02-sand/grid/2/D.avif',
                      499.99)
                      ,
                      ('recyYtRglGNGtO4Q5',
                      'Slim White Pywood Wall Storage',
                      'Tylko',
                      'https://res.cloudinary.com/cstm/image/upload/v1/pdp/gallery/wallstorage/01p/01p-white/1/D.avif',
                      899.99)
                      ,
                      ('recyqHRglGNGtO4Q5',
                      'Large Oak Veneer Tv Stand',
                      'Tylko',
                      'https://res.cloudinary.com/cstm/image/upload/v1/pdp/gallery/tvstand/01v/01v-oak/1/D.avif',
                      1499.99)

                      ,
                      ('recyqRRglGNGtO4Q5',
                      'TV Stand Uain wood',
                      'Sklum',
                      'https://cdn.sklum.com/es/wk/996304/mueble-tv-en-madera-de-mango-uain.jpg?cf-resize=gallery',
                      299.99)

                      ,
                      ('recyqJRglGNGtO4Q5',
                      'Library in Recycled Wood Unain',
                      'Sklum',
                      'https://cdn.sklum.com/es/wk/855413/libreria-con-escalera-en-madera-uain.jpg?_gl=1*1dav07m*_up*MQ..&gclid=EAIaIQobChMI1u-V0YPZ-wIVlKjVCh3xbQr6EAQYAyABEgJrePD_BwE',
                      639.95)

                      ,
                      ('recyqLRglGNGtO4Q5',
                      'bottle rack in Recycled Wood Unain',
                      'Sklum',
                      'https://cdn.sklum.com/es/wk/881769/botellero-en-madera-reciclada-gureh.jpg?cf-resize=gallery',
                      149.95)

                      ,
                      ('recyqORglGNGtO4Q5',
                      'Tarraco',
                      'comifor',
                      'https://cdn.shopify.com/s/files/1/0310/5023/6043/products/2_efaf108d-b4a7-476f-b218-27c4e650ab3f_3000x.jpg?v=1653986287',
                      370.90)

                      ,
                      ('recyqQRglGNGtO4Q5',
                      'Genua',
                      'comifor',
                      'https://cdn.shopify.com/s/files/1/0310/5023/6043/products/onsol_Dorado_1_66c1a05b-26cc-409a-b93d-4ca4ccf8f9d1_3000x.jpg?v=1650363850',
                      503.90)

                      ,
                      ('recyqSRglGNGtO4Q5',
                      'Saona',
                      'Comifor',
                      'https://cdn.shopify.com/s/files/1/0310/5023/6043/products/61P2Sf8N2OL._AC_SL1200_19637ccf-364a-40aa-acc9-2f77db09bcb3_3000x.jpg?v=1650361972',
                      82.90)
                      ,
                      ('recyqOKglGNGtO4Q5',
                      'Sofá Cama Chaise Longue',
                      'Sklum España',
                      'https://cdn.sklum.com/es/wk/993820/sofa-cama-chaise-longue-3-plazas-en-tela-calvin.jpg?cf-resize=gallery',
                      599.95)

                      ,
                      ('recyqQIglGNGtO4Q5',
                      'Sillón Tapizado en Terciopelo Morris Edition',
                      'Sklum España',
                      'https://cdn.sklum.com/es/wk/1649156/sillon-tapizado-en-terciopelo-morris-edition.jpg?cf-resize=gallery',
                      199.95)

                      ,
                      ('recyqSXglGNGtO4Q5',
                      'Sofá Cama de 3 Plazas Brion',
                      'Sklum España',
                      'https://cdn.sklum.com/es/wk/1274441/sofa-cama-de-3-plazas-en-lino-brion.jpg?cf-resize=gallery',
                      329.95)
                      ;");
$sentencia->execute();

echo "Datos insertados correctamente<br>--------------------------------------<br>";

header( "refresh:3;url=index.html" );
?>