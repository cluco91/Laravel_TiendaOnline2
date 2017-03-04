@extends('layouts.main')

@section('content')
    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2>
            <strong>
                Hey bienvenido a la tienda de LucoDeveloper!
            </strong>
        </h2>
        <br>
        <a href="{{url('/shirts')}}">
            <button class="button large">Mira Mis Productos</button>
        </a>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
            Mis Ultimos Productos
        </h2>
    </div>

    <!-- Latest SHirts -->
    <div class="row">
        @forelse($shirts->chunk(4) as $chunk)
            @foreach($chunk as $shirt)
            <div class="small-3 medium-3 large-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="{{route('cart.addItem',$shirt->id)}}" class="button expanded add-to-cart">
                            Agregar al Carrito
                        </a>
                        <a href="#">
                            <img src="{{url('images',$shirt->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('shirt')}}">
                        <h3>
                            {{$shirt->name}}
                        </h3>
                    </a>
                    <h5>
                        ${{$shirt->price}}

                    </h5>
                    <p>
                        {{$shirt->description}}
                    </p>
                </div>
            </div>
            @endforeach
        @empty
            <h3>No hay productos</h3>
        @endforelse
    </div>
    <br>
@endsection