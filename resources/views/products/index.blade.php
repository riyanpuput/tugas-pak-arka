<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk E-Commerce</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <ul>
        @foreach ($products as $id => $product)
            <li>
                <a href="{{ url('/product/' . $id) }}">
                    {{ $product['name'] }}
                </a> - Rp {{ number_format($product['price'], 0, ',', '.') }}
            </li>
        @endforeach
    </ul>
</body>
</html>