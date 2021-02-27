# Conceptos basicos

## Sintaxis
- Reglas de sintaxis
    - {} Llaves define bloques de codigo
    - Para definir que una expresion de codigo termino.
    
```injectablephp
<?php
    $name = 'Sergio';
    echo 'Hola' . $name;
?>
```
[ejemplo1](../examples/2-basic/ejemplo1/index.php)

## Tipos de datos
- Desde PHP 7.4 existen tipado:
    - **Explicito**: Define una sintaxis para la creación de variables
      con tipo de dato.
    - **Inferido**: PHP tiene la habilidad de deducir el tipo en función de un valor.
  > **Nota**: Es tipo de datos Explicito solo se puede utilizar
  > en los atributos de una clase, parametros de una función
  > y tipo de retorno de una función.
  > 
- Tipos de datos
    - int: [Documentación](https://www.php.net/manual/es/language.types.integer.php)
    - double o float: [Documentación](https://www.php.net/manual/es/language.types.float.php)
    - bool: [Documentación](https://www.php.net/manual/es/language.types.boolean.php)
    - string: [Documentación](https://www.php.net/manual/es/language.types.string.php)
        - Usar comillas dobles `""` o comillas simples `''`.
          - Usando comillas simples donde el texto será exactamente como se escribe-
          - Usando comillas dobles permite usar caracteres de escape y reconoce las variables,
            es decir sustituye el valor de las variables dentro de las cadenas.
        - Cadenas de multiples lineas
          - Heredoc
          - Nowdoc
    - Arreglos: [Documentación](https://www.php.net/manual/es/language.types.array.php)
      - Un array es en realidad un mapa ordenado. Un mapa es un tipo de datos
        de clave y valor.
      - Se puede utilizar de varias formas 
        - Array
        - Lista
        - Tabla Asosiativas
        - Diccionario
        - colección
        - Pila
        - Cola
      - Se utiliza para arreglos multi dimensionales
      - Se utiliza para crear arboles.
- [Ejemplo2](../examples/2-basic/ejemplo2/README.md)

## Variables
- En PHP las variables se representan con un signo de dólar `$` seguido por el nombre de la variable
- Las variables son sensibles a minúsculas y mayúsculas.
- Las variables tienen que tener nombres significativos
- Una variable no puedo comenzar con numeros
- una variable no puedo contener espacios y simbolos especiales
- [ejemplo3](../examples/2-basic/ejemplo3/README.md)

## Constantes
- Una constante es una expresion cuyo valor no puede ser modificado.
- Las constantes siempre deben ser en mayuscula siguiendo el formato snake.
  Utilizar guión bajo `_` para separar las palabras. 
- Una constante es mas utilizada para definir ubicacion, datos de conexion
a na base de datos.
- Una constante en PHP se puede declarar de dos formas
    - `define('PI', 3.1416)`
      - Define constantes en tiempo de ejecución
    - `const PI = 3.1416` disponible desde PHP 5.3
      - Define constantes en tiempo de compilación
- [ejemplo4](../examples/2-basic/ejemplo4/README.md)