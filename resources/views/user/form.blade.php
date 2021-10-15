<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário</title>
</head>
<body>
            @if ($errors->any())
            {{ $errors }}
            @endif
        @if(!empty($data->id))
        <form action="{{ route('user.update',$data->id) }}" method="POST">
        @else
        <form action="{{ route('user.store') }}" method="POST">
        @endif
        @csrf
        @if(!empty($data->id))
        <input type="hidden" name="id" value="{!! $data->id !!}">
        @endif
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" @if(!empty($data->name)) value="{{ $data->name }}" @else value="{{ old('name') }}" @endif  >
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" @if(!empty($data->email)) value="{{ $data->email }}" @else value="{{ old('email') }}" @endif >
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>