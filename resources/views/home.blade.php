<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La meva primera pàgina</title>
</head>
<body>
    <h1>Hola mundo laravel- {!!"Hola mundo $nombre $apellido"!!} </h1>
    
    <ul>
        <?php foreach ($posts as $key =>$post): ?>
            <li>{{$post}}</li>
        <?php endforeach; ?>


        @isset($posts2)
            isset
        @endisset
        @empty($posts2)
            empty  
        @endempty
        @forelse ($posts as $post)

            <?php //dd($loop) ?>


                
           
            
            <li>
                @if ($loop->first)
                Primer:
                
                @elseif ($loop->last)
                Últim:

                @else 
                Medio:
                @endif
                {{$post}}
            </li>
        @empty
            <li>Buit</li>
        @endforelse
            

    </ul>
</body>
</html>