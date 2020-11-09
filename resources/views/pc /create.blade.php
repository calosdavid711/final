<h1>Ingrese su Computadora</h1>

<form method="POST" action="{{route('pc.store')}}">
@csrf

<label for="marca">marca </label>
<input type="text" name="marca" >   

<label for="modelo">modelo</label>
<input type="text" name="modelo" >   


<button >Guardar</button>
</form>