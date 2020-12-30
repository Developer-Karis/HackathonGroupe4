@extends('template.template')

@section('content')
<h1 class="text-center text-white mt-5">Tous les cours</h1>
<div class="mt-5 pt-5">
    <div class="row p-0 m-0">
        @foreach ($cours as $item)
        <div class="col-4">
            <div class="mb-5">
                <div class="card border-dark m-auto shadow p-3 mb-5 bg-white rounded" style="width: 24rem;">
                    <div class="card-body text-center">
                        <h2 class="card-title mb-3">{{$item->nom}}</h2>
                        @if ($loop->iteration == 1)
                        <img src="https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582748_1280.png" alt=""
                            class="pl-0" height="150">
                        <img src="https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582747_960_720.png" alt=""
                            class="pl-0" height="150">
                        @elseif($loop->iteration == 2)
                        <img src="https://yuccalabs.com/build/images/javascript.bcb36bfb.png" alt="" class="pl-0"
                            height="150">
                        @elseif($loop->iteration == 3)
                        <img src="https://ionicframework.com/docs/assets/icons/logo-react-icon.png" alt="" class="pl-0"
                            height="150">
                        @else
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"
                            alt="" class="pl-0" height="150">
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop