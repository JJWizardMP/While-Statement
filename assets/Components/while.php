<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/styles/table.css">
</head>
<body>
<p class="ShadowFont text-justify">
Los bucles <strong>while</strong> son el tipo más sencillo de bucle en PHP. Se comportan igual 
que su contrapartida en C.
</p>
<p class="ShadowFont text-justify">
El significado de una sentencia <i>while</i> es simple. Le dice a PHP que ejecute las
sentencias anidadas, tanto como la expresión <i>while</i> se evalúe como 
<strong><i>true</i></strong>. El valor de la expresión es verificado cada vez al 
inicio del bucle, por lo que incluso si este valor cambia durante la ejecución de las
sentencias anidadas, la ejecución no se detendrá hasta el final de la iteración 
A veces, si la expresión while se evalúa como false desde el principio, las sentencias
anidadas no se ejecutarán ni siquiera una vez.
<br><br>
Al igual que con la sentencia if, se pueden agrupar varias instrucciones dentro del mismo
bucle while rodeando un grupo de sentencias con corchetes. La forma básica de una sentencia 
while es utilizando la sintaxis básica de C o la alternativa: 
</p>
<pre > <code>
    &lt;?php
        # Basic C
        while (expr)
        sentencia

        # Alternative
        while (expr):
            sentencias
            ...
        endwhile;
    ?&gt;
</code> </pre>
<br>
<h3 class="ShadowFont">Do While</h3><br>
<p class="ShadowFont text-justify">
Los bucles do-while son muy similares a los bucles while, excepto que la expresión 
verdadera es verificada al final de cada iteración en lugar que al principio. 
La diferencia principal con los bucles while es que está garantizado que corra
la primera iteración de un bucle do-while.
<br>
Hay una sola sintaxis para bucles do-while:
</p>
<pre width=65% > <code>
    &lt;?php
        $i = 0;
        do {
            echo $i;
        } while ($i > 0);
    ?&gt;
</code> </pre>
</body>
</html>