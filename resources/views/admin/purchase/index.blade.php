@extends('layouts.admin')

@section('content')
            <!-- order detail list -->
            <div class="details">
               
                <!-- New Customers -->
         

            
<div class="recentOrders">
    <div class="cardHeader">
        <h2>
            Compras</h2>
        <a href="{{route('purchases.create')}}" class="btn">Registrar Compra</a>   

    </div>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Fecha</td>
                <td>Total</td>
                <td>Estado</td>
                <td>Acciones</td>

            </tr>
        </thead>
        <tbody>

          

   
        </tbody>
    </table>
</div>
</div>
@endsection