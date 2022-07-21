# Estructuras de seleccion

## if-else

- Esta estructura de control es igual a java, c++, c#, dart.
- Las sintaxis basico para utilizar if-else:

```injectablephp
if(condicion){
      //Codigo al cumplir condicion
} else{
      //Codigo al No cumplirse
}
```

- If-else en escalera

```injectablephp
if (condicion1) {
    // codigo
} else if (condicion2) {
    //codigo
} else if (condicion3) {
    //codigo
} else {
    // codigo
}
```

## Switch/Case

- **switch/Case** esta una estructura de control para multiplos desiciones es un replazo al `if-else en cascada`.
- Puedes utilizar `int` y `String` para evaluar la condicion en `case`.
- La keyword `case` no puede terminar vacia, debe finalizar con `break` o puede tambien terminar con `continue`, `throw`
  o `return`.
- Si no encuentra un valor en el `switch` se utiliza el keyword `default`.
- Esta estructura de control es igual a java, c++, c#, dart.
- La sintaxis basica seria:

```injectablephp
switch (valor) {
    case expresion1:
        // code
        break;
    case expresion2:
        // code;
        break;
    default:
        // codigo por si ninguno de los casos se ejecuta
        break;
}
```

- [Ejemplo2](../examples/3-flujos-de-control/ejemplo2/README.md)

# Estructuras repetitivas

## for/for...of

- Esta estructura de control es igual o parecida a java, c++, c#, dart.
- **for** Se utiliza cuando se conoce el tamaño de la lista o arreglo.
- **for...of** Se utiliza para recorrer listas mas facilmente y no se necesita saber el tamaño.
- **foreach** solo se puede utilizar en las listas
- La estructura del ciclo **for** es:

```javascript
for (inicializador, condicion, incrementar / decrementar) {
    //codigo
}
```

- Estructura del ciclo **for...of** es:

```injectablephp
var lista = ['a', 'b', 'c', 'd'];
for (var nombreVariable of lista) {
    console.log(nombreVariable);
}
```

- [Ejemplo3](../examples/3-flujos-de-control/ejemplo3/README.md)

## while/do-while

- Se utiliza para hacer repeticiones con una condicion.
- Tener cuidado que el ciclo infinitamente.
- **while** evalua la condición sino se cumple no ejecuta el código
- **do while** ejecuta el codigo primero y luego evalúa la condición.
- La estructura del ciclo **while** es:

```injectablephp
while(condicion) {
    //codigo
}
```

- La estructura del ciclo **do while** es:

```injectablephp
do {

} while(condicion);
```

- [Ejemplo4](../examples/3-flujos-de-control/ejemplo4/README.md)
