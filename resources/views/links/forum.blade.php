@extends('template.template')

@section('content')
<div class="mt-5 pt-5">
    <div class="container">
        <div class="mb-5">
            <div class="card border-dark m-auto shadow p-3 mb-5 bg-white rounded" style="width: 50%;">
                <div class="card-body text-center">
                    <table class="table m-0">
                        <h1 class="text-center mb-5">Forum</h1>
                        <form action="/store-post" method="post">
                            @csrf
                            <label for="">Choisis le cours : </label>
                            <select name="sujet">
                                @foreach ($cours as $item)
                                <option value="{{$item->nom}}">{{$item->nom}}</option>
                                @endforeach
                            </select>
                            <label for="">Ecris la question</label>
                            <input type="text" name="question">
                            <button class="btn btn-primary mb-5">Ajouter un Post</button>
                        </form>
                        <thead>
                            <tr>
                                <th scope="col">Sujet</th>
                                <th scope="col">Question</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        @foreach ($forum as $item)
                        <form action="/show-post/{{$item->id}}" method="post">
                            @csrf
                            <tbody>
                                <tr>
                                    <td>{{$item->sujet}}</td>
                                    <td>{{$item->question}}</td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Voir le sujet</button>
                                    </td>
                                </tr>
                            </tbody>
                        </form>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop