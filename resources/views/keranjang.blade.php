@extends('layouts.mainSC')

@section('content')
    <section class="spad">
        @if (session()->has('success'))
            <div class="container alert alert-success col-lg-4" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="container">
            <div class="border-bottom">
                <h4 class="mb-3">Keranjang Saya</h4>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12">
                        <table>
                            <thead>
                                <tr>
                                    <th class="col-lg-3">Produk</th>
                                    <th class="col-lg-2">Harga</th>
                                    <th class="col-lg-3">Quantity</th>
                                    <th class="col-lg-2">Action</th>
                                    <th class="col-lg-2">Subtotal Produk</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td class="col-3">
                                            {{-- <img src="img/cart/cart-1.jpg" alt=""> --}}
                                            <h6>{{ $item->nama }}</h6>
                                        </td>

                                        <td class="">
                                            Rp {{ $item->harga }}
                                        </td>
                                        <td class="col-2">
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
                                        <td class="col-2">
                                            Rp {{ $item->harga*$item->quantity }}
                                        </td>
                                        <td class="col-2">
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

                <div class="col-lg-12 mt-5">
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

                            <li>Subtotal <span>Rp
                                <?php
                                    $jumlah=0;
                                    foreach ($items as $item) {
                                        $jumlah=$jumlah+$item->harga*$item->quantity;
                                    }
                                    echo $jumlah;
                                ?>
                            </span></li>
                        </ul>
                        {{-- <a href="/checkout" class="primary-btn">PROCEED TO CHECKOUT</a> --}}
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="mt-4">
                        <a href="/catalog" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="/checkout" class="primary-btn cart-btn cart-btn-right">CHECKOUT</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endsection
