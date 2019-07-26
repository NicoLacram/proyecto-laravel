@extends('layouts.plantilla2')
@section('content')
<div class="container col-10 _cart">
    <section class="row">
        @if (session()->get('user.cart'))
        <article class="col-12">
            <br>
            <section class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Curso</th>
                            <th scope="col">Descripcion </th>
                            <th scope="col">Available</th>
                            <th scope="col">Modalidad</th>
                            <th scope="col">Nivel</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-center">Price</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                                                                                                                                                                                    @php
                                                                                                                                                                                    $total = 0;
                                                                                                                                                                                    @endphp
                        @foreach (session()->get('user.cart') as $curso)

                                                                                                                                            @php
                                                                                                                                                $total = $total + $curso['price']
                                                                                                                                            @endphp

                            <tr>
                                <td><img src={{asset("storage/coursePic/$curso[image]")}} width="100" height="100"/> </td>
                                <td class="initialism">{{$curso['name']}}</td>
                                <td class="">{{$curso['description']}}</td>
                                <td >In stock</td>
                                <td class="">{{$curso['category']->name}}</td>
                                <td class="">{{$curso['level']->name}}</td>
                                <td><input id="quantity" class="form-control" type="number" value="1"/></td>
                                <p id="errorQuantity"></p>
                                <td class="text-right">${{$curso['price']}}</td>
                            <td class="text-right __delete"><a href='/cart/remove/{{$curso['id']}}' class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                            </tr>


                        @endforeach

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Sub-Total</td>
                        <td></td>
                        <td class="text-right" id="subtotal">${{$total}}</td>
                        <td></td>

                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>Total</strong></td>
                        <td></td>
                        <td class="text-right" id='total'>${{$total}}</td>
                        <td></td>

                        </tr>
                    </tbody>
                </table>
            </section>
        </article>
        <section class="col mb-2">
            <article class="row">
                <section class="col-sm-12  col-md-6">
                <a href='/listadoCursos' class="btn btn-block btn-outline-primary">Continue Shopping</a>
                </section>
                <section class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                </section>
            </article>
            <br>
        </section>

            @else
            <div class='container mb-5 mt-5'>
                <h2 class='text-center mb-5 mt-5'> Su carrito se encuentra vacio!!! </h2>
            </div>
            @endif

</section>
</div>
<section class="caja2">
</section>
@endsection
