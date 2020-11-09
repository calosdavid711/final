@forelse($computadoras as $pc)

    <li> <a href="{{route('pcs.show',$pc['id'])}}">
    {{$pc->marca}}</li>
    
    @empty<li>No hay para mostrar</li>

@endforelse    
