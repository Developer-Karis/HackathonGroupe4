@extends('template.template')

@section('content')
<h1 class="text-center mt-5">Membre du Staff</h1>
<div class="mt-5 pt-5">
    <div class="row p-0 m-0">
        <div class="col-6">
            <h1 class="text-center mb-5" style="text-decoration: underline;">Les Coachs</h1>
            <div class="mb-5">
                <div class="card border-dark m-auto shadow p-3 mb-5 bg-white rounded" style="width: 24rem;">
                    <div class="card-body text-center">
                        @foreach ($userCoach as $item)
                        <h2 class="card-title mb-3">Nom : {{$item->name}}</h2>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <h1 class="text-center mb-5" style="text-decoration: underline;">Les Students</h1>
            <div class="mb-5">
                <div class="card border-dark m-auto shadow p-3 mb-5 bg-white rounded" style="width: 24rem;">
                    <div class="card-body text-center">
                        @foreach ($userStudent as $item)
                        <h2 class="card-title mb-3">Nom : {{$item->name}}</h2>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop