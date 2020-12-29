@extends('template.template')

@section('content')
<div class="mt-5 pt-5">
    <div class="card border-dark m-auto shadow p-3 mb-5 bg-white rounded" style="width: max-content;">
        <form action="/update-page4/{{Auth::user()->id}}" method="post">
            @csrf
            <div class="card-body text-center">
                <h2 class="card-title mb-5">Liste de Questions 4/4</h2>
                <p class="card-text mb-5" style="font-size: 20px;">Est-ce que vous maîtrisez la matière <span
                        class="font-weight-bold">Laravel ?</span></p>
                <p class="card-text" style="font-size: 17px;">
                    C'est la dernière <span class="font-weight-bold">question</span>. Cliquez sur <span
                        class="font-weight-bold">Fin !</span>
                </p>
                <div class="d-flex justify-content-center mt-4" style="font-size: 22px;">
                    <div class="form-check mr-4">
                        <input class="form-check-input" type="radio" name="flexRadio4" id="flexRadioDefault1" checked
                            style="height: 1em;" class="mr-2" value="oui">
                        <label class="form-check-label" for="flexRadioDefault1">Oui</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadio4" id="flexRadioDefault2"
                            style="height: 1em;" value="non">
                        <label class="form-check-label" for="flexRadioDefault2">Non</label>
                    </div>
                </div>
                <button class="btn btn-primary border-dark btn-lg mt-4 px-5 py-3" type="submit">Fin</button>
            </div>
        </form>
    </div>
</div>
@stop