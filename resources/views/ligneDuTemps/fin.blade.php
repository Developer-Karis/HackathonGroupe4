@extends('template.template')

@section('content')
<div class="mt-5 pt-5">
    <div class="card border-dark m-auto shadow p-3 mb-5 bg-white rounded" style="width: max-content;">
        <div class="card-body text-center">
            <h2 class="card-title mb-5">Fin des Questions !</h2>
            <p class="card-text" style="font-size: 20px;">Merci d'avoir répondue aux questions.<br><br> <span
                    class="font-weight-bold">Besoin d'aide ? Clique sur le button Help !</span></p>
            <a href="/message" class="btn btn-primary border-dark btn-lg mt-3 mr-2 px-5 py-3">Help</a>
        </div>
    </div>
</div>
@stop