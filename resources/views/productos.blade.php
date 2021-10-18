<h1>Productos</h1>

<hr>
Producto: {{ $producto }}<br>
Precio: 


{{ isset ($precio) && !is_null($precio) ? $precio:'0'}}
<!-- comentario ctrl + k + c -->
<hr>

@if(is_null($precio))
no existe el precio
@else
{($precio)}
@endif
<hr>

@for($i=1; $i<=10; $i++)
    {{$i. 'x2='. ($i*2)}}<br>
    @endfor

    <hr>
    <?php $a=1; ?>
    @while($a<=7)
    {{'numeros: '.$a}}
    <?php $a++ ?>
    <br>
    @endwhile