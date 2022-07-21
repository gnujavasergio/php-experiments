<?php
// string
// Comillas simples
$firstName = 'Sergio Antonio';
$lastName = 'Ochoa Martinez';
$full = $firstName . ' ' . $lastName; // concatenacion
$profession = 'Developer in \'OpenKM\'';

// Comillas dobles
$fullName = "$firstName $lastName";

// variables dinamicas
$teacher = 'sergio';
$sergio = 'desarrollador fullstack';
echo "$teacher es ${teacher}";

// Cadenas Nowdoc
$description = <<<'EOT'
Me gusta hacer crossfit y strong
Me gusta programar
Me gusta aprender, enseñar y compartir.
EOT;
echo $description;

// Cadenas Heredoc
$bio = <<<EOT
$fullName es desarrollador FullStack, desarrollador freelancer,
experiencia en lenguajes de programación como java, php, javascript,
dart, kotlin. \n
EOT;
echo $bio;

// Para detectar el tipo de Dato
var_dump($fullName);

// Extraer un parte de un String
// Si pones mos un numero negativo empezara a cortar desde el final
$extract = substr($fullName, 0, 36);
echo "$extract... [ver mas] \n";

// explode - Divide un string en varios strings
// https://www.php.net/manual/es/function.explode.php
$tags = 'Java, JavaScript, PHP, Python';
$languages = explode(', ', $tags);
echo '<pre>';
var_dump($languages);

// implode - crea un string apartir de un array
// https://www.php.net/manual/es/function.explode.php
$courses = ['Java', 'Javascript', 'PHP', 'Python'];
echo implode(', ', $courses) . "\n";

// trim, ltrim, rtrim - Para quitar los espacios de una cadena.
// https://www.php.net/manual/es/function.trim
$titleCourse = "    curso de PHP    ";
echo "Quiero aprender un $titleCourse y un curso de Java \n";
$trim = trim($titleCourse); // Quitar los espacios en los dos lados
$rtrim = rtrim($titleCourse);
$ltrim = ltrim($titleCourse);
echo "Quiero aprender un $trim y un curso de Java \n";
echo "Quiero aprender un $rtrim y un curso de Java \n";
echo "Quiero aprender un $ltrim y un curso de Java \n";

// Alterar cadenas
// strtoupper - Convertir todo la cadena a mayusculas
$fullNameUpper = strtoupper($fullName);
var_dump($fullNameUpper);

// strtolower - Convertir todo la cadena a minusculas
$fullNameLower = strtolower($fullName);
var_dump($fullNameLower);

// ucfirst, lcfirst - convertir la primera letra a mayuscula y minuscula
echo ucfirst("bolivia \n");
echo lcfirst("Ciudad \n");

// Remplazar
// str_replace - Remplaza todas las concidencias del string buscado con el string de remplazo
// https://www.php.net/manual/es/function.str-replace
$slug = str_replace(' ', '-', $fullNameLower);
echo "$slug \n";

// Buscar
$position = strpos($fullName, 'o');
echo $position . '\n';

// Mofificación
// str_pad - formatear texto
$code = 2;
echo str_pad($code, 8, 0, STR_PAD_LEFT) . "\n";
echo str_pad($code, 8, 0, STR_PAD_RIGHT) . "\n";
echo str_pad($code, 8, 0, STR_PAD_BOTH) . "\n";

// strip_tags - Quitar los tags de html
$html = "<h1>Developer OpenKM</h1>";
echo strip_tags("$html \n");

// nonobyte y multibyte - Para manejar caracteres especiales
echo strtoupper($description . "\n"); // monobyte
echo mb_strtoupper($description . "\n"); // multibyte - convierte caracteres especiales

// Formatear un texto
// https://www.php.net/manual/es/function.sprintf.php
$year = 1994;
$php = 'PHP';
$message = 'en %d fue creado %s';
echo sprintf($message, $year, $php) . "\n";

// Con posision
$message = 'en %2d fue creado %1s';
echo sprintf($message, $php, $year) . "\n";
