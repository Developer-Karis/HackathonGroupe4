@extends('template.template')

@section('content')
<div class="mt-5 pt-5">
    <div class="container">
        <div class="mb-5">
            <div class="card border-dark m-auto shadow p-3 mb-5 bg-white rounded" style="width: 50%;">
                <div class="card-body text-center">
                    <table class="table m-0">
                        <h1 class="text-center mb-5">Forum</h1>
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Sujet</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    <a href="" class="btn btn-primary">Voir le sujet</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop