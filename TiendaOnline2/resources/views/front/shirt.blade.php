@extends('layouts.main')

@section('title','shirt')

@section('content')

    <div class="row">
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                        <img src="http://i.imgur.com/Mcw06Yt.png"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader">
                    <span class="price-tag">$20</span> Producto Camiseta
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                        <label>
                            Seleccionar Tamaño
                            <select>
                                <option value="small">
                                    Pequeño
                                </option>
                                <option value="medium">
                                    Mediano
                                </option>
                                <option value="large">
                                    Largo
                                </option>

                            </select>
                        </label>
                        <a href="#" class="button  expanded">Agregar al Carrito</a>
                    </div>
                </div>
                <p class="text-left subheader">
                    <small>* Diseñado por <a href="http://lucodeveloper.com/">lucodeveloper</a></small>
                </p>
            </div>
        </div>
    </div>

@endsection