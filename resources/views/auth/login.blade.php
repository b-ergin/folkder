<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetici Girişi</title>
</head>
<body>
    <h1>Yönetici Girişi</h1>

    <form method="POST" action="{{ route('login.store') }}">
        @csrf

        <div>
            <label for="email">E-posta</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}">

            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">Şifre</label>
            <input id="password" type="password" name="password">
            
            @error('password')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Giriş Yap</button>
    </form>
</body>
</html>
