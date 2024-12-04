@extends('layouts.user.appcopy')

@section('title', 'Keranjang Belanja')

@section('content')
<div class="container">
    <h1 class="mb-4">Keranjang Belanja</h1>

    @if(session('cart') && count(session('cart')) > 0)
    <form action="{{ route('cart.bulkAction') }}" method="POST">
        @csrf
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">
                        <input type="checkbox" id="select-all" onclick="toggleSelectAll()">
                    </th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Total</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $id => $details)
                <tr>
                    <td>
                        <input type="checkbox" name="selected_items[]" value="{{ $id }}" class="item-checkbox">
                    </td>
                    <td>
                        <img src="{{ asset($details['image'] ?? 'assets/images/products/default.jpg') }}" alt="Gambar Produk" style="width: 100px; height: auto; border-radius: 8px;">
                    </td>
                    <td>{{ $details['name'] }}</td>
                    <td>Rp {{ number_format($details['price'], 0, ',', '.') }}</td>
                    <td>
                        <form action="{{ route('cart.update', $id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <div class="input-group" style="max-width: 120px;">
                                <button class="btn btn-sm btn-outline-secondary" name="action" value="decrease">-</button>
                                <input type="text" class="form-control text-center" value="{{ $details['quantity'] }}" readonly>
                                <button class="btn btn-sm btn-outline-secondary" name="action" value="increase">+</button>
                            </div>
                        </form>
                    </td>
                    <td>Rp {{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }}</td>
                    <td>
                        <form action="{{ route('cart.remove', $id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-right">
            <button type="submit" name="action" value="delete" class="btn btn-danger">Hapus yang Dipilih</button>
            <a href="{{ route('layouts.user.checkout') }}" class="btn btn-primary">Checkout</a>
        </div>
    </form>
    @else
    <p class="text-center">Keranjang Anda kosong. <a href="{{ route('user.produk.index') }}">Belanja sekarang</a>.</p>
    @endif
</div>

<script>
    function toggleSelectAll() {
        const selectAll = document.getElementById('select-all');
        const checkboxes = document.querySelectorAll('.item-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.checked = selectAll.checked;
        });
    }
</script>
@endsection




