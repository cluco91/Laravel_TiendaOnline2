@extends('admin.layout.admin')
@section('content')
    <h3>Ordenes</h3>
    <hr>

    <ul>
        @foreach($orders as $order)
            <li>
                <h4>Orden por {{$order->user->name}} <br> Precio Total {{$order->total}}</h4>

                <form action="{{route('toggle.deliver',$order->id)}}" method="POST" class="pull-right" id="deliver-toggle">
                    {{csrf_field()}}
                    <label for="delivered">Despachado</label>
                    <input type="checkbox" value="1" name="delivered"  {{$order->delivered==1?"checked":"" }}>
                    <input type="submit" value="Submit">
                </form>

                <div class="clearfix"></div>
                <hr>
                <h5>Items</h5>
                <table class="table table-bordered">
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    </tr>
                    @foreach($order->orderItems as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->pivot->qty}}</td>
                            <td>{{$item->pivot->total}}</td>
                        </tr>

                    @endforeach
                </table>
            </li>

        @endforeach

    </ul>
@endsection

