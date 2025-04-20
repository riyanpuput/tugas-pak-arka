<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk - {{ $product['name'] }}</title>
</head>
<body>
    <h1>Detail Produk</h1>

    <div>
        <h2>{{ $product['name'] }}</h2>
        <p>Harga: Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
        <a href="{{ url('/products') }}">Kembali ke Daftar Produk</a>
    </div>
</body>
</html>