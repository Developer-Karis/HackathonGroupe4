<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body>

    @include('composant.nav')
    <form action="/message1" enctype="multipart/form-data"
        class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
        @csrf

        <input type="text" name="message">
        <select name="send_id" class="d-none">
            <option value="{{Auth::user()->contact}}">Salut</option>
        </select>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

    @auth
    <div class="container">
        <div class="row">

            @foreach ($msg as $item)
            @if ( Auth::user()->id==$item->user_id && Auth::user()->contact==$item->send_id ||
            Auth::user()->id==$item->send_id && Auth::user()->contact==$item->user_id)
            <div class="col-6">

                @if (Auth::user()->id==$item->user_id)
                <h4 class="badge bg-primary">{{$item->message}}</h4>
                @endif
            </div>
            <div class="col-6">
                @if (Auth::user()->id==$item->send_id)
                <h4 class="badge bg-success">{{$item->message}}</h4>
                @endif
            </div>

            @endif

            @endforeach



        </div>
    </div>
    @endauth


</body>

</html>