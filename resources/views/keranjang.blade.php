@extends('layouts.mainSC')

@section('content')
    <section class="spad">
        @if (session()->has('success'))
            <div class="container alert alert-success col-lg-4" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        <table>
                            <thead>
                                <tr>
                                    <th class="col-lg-4">Products</th>
                                    <th class="col-lg-2">Price</th>
                                    <th class="col-lg-1">Quantity</th>
                                    <th class="col-lg-2">Action</th>
                                    <th class="col-lg-2">Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td class="col-lg-5">
                                            <img src="img/cart/cart-1.jpg" alt="">
                                            <h5>{{ $item->nama }}</h5>
                                        </td>
                                        <td class="fw-bold">
                                            Rp {{ $item->harga }}
                                        </td>
                                        <td class="">
                                            <div class="">
                                                <form action="/update" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id}}" >
                                                    <input type="number" name="quantity" value="{{ $item->quantity }}" min="1"/>
                                                    <td class="">
                                                        <button type="submit" class="btn btn-success">update</button>
                                                    </td>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="">
                                            Rp {{ $item->harga*$item->quantity }}
                                        </td>
                                        <td class="">
                                            <form action="/remove" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $item->id }}" name="id">
                                                <button onclick="return confirm('Apakah anda yakin untuk menghapus Cart {{ $item->nama }}?')"><span class="icon_close"></span></button>
                                            </form>
                                            {{-- <span class="icon_close"></span> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-4">
                        <a href="/catalog" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Total Produk<span>{{ $items->count() }}</span></li>
                            <li>Total Item<span>
                                <?php
                                    $count=0;
                                    foreach ($items as $item) {
                                        $count=$count+$item->quantity;
                                    }
                                    echo $count;
                                ?>
                                </span>
                            </li>
                            <li>Subotal <span>Rp
                                <?php
                                    $jumlah=0;
                                    foreach ($items as $item) {
                                        $jumlah=$jumlah+$item->harga*$item->quantity;
                                    }
                                    echo $jumlah;
                                ?>
                            </span></li>
                        </ul>
                        <a href="/checkout" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
