<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
</head>
<body>
        <h1>Quantidade de Usuarios: {{ count($data) }}</h1>
        <a href="{{ route('user.create')}} "> Cadastrar Usuário</a> 

        @foreach($data as $item)
            <ul>
                <li>
                    {!! $item->id !!}
                </li>
                <li>
                    {!! $item->name !!}
                </li>
                <li>
                    {!! $item->email !!}
                </li>
                <li>
                    {!! $item->password !!}
                </li>
                <li>
                    <a href="{{ url('/user/show',$item->id) }}">Editar</a>
                   <!--  <a href="{{ route('user.show',$item->id) }}">Editar</a> -->
                </li>
                <li>
                    <a href="{{ route('user.delete',$item->id) }}">Deletar</a>
                </li>

                
            </ul>
        @endforeach

        
</body>
</html>