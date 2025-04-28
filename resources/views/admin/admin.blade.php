<!DOCTYPE html>
<html>
<head>
    <title>Form Admin</title>
</head>
<body>
    <h1>Form Admin</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.store') }}" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <label>No. HP:</label><br>
        <input type="text" name="phone" value="{{ old('phone') }}"><br><br>

        <label>Alamat:</label><br>
        <input type="text" name="address" value="{{ old('address') }}"><br><br>

        <label>pilih:</label><br>
        <select name="role">
            <option value="">--Pilih bidang--</option>
            <option value="Super Admin" {{ old('role') == 'Super Admin' ? 'selected' : '' }}>Super Admin</option>
            <option value="Kasir" {{ old('role') == 'Kasir' ? 'selected' : '' }}>Kasir</option>
        </select><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>