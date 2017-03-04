@extends('admin.layout.admin')

@section('content')

    <h3>Productos</h3>

<ul>
    @forelse($products as $product)
    <li>
        <h4>Nombre del producto:{{$product->name}}</h4>
        <h4>Categoria:{{count($product->category)?$product->category->name:"N/A"}}</h4>
        <form action="{{route('product.destroy',$product->id)}}"  method="POST">
           {{csrf_field()}}
           {{method_field('DELETE')}}
           <input class="btn btn-sm btn-danger" type="submit" value="Borrar">
         </form>

    </li>

        @empty

        <h3>No hay Productos</h3>

    @endforelse
</ul>


@endsection