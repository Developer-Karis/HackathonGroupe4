@extends('template.template')

@section('content')
<div class="mt-5 pt-5">
    <div class="card border-dark m-auto shadow p-3 mb-5 bg-white rounded" style="width: max-content;">
        <form action="/update-page1/{{Auth::user()->id}}" method="post">
            @csrf
            <div class="card-body text-center">
                <h2 class="card-title mb-5">Liste de Questions 1/4</h2>
                <p class="card-text mb-5" style="font-size: 20px;">Est-ce que vous maîtrisez la matière <span
                        class="font-weight-bold">HTML, CSS ?</span></p>
                <p class="card-text" style="font-size: 17px;">Si vous avez des <span
                        class="font-weight-bold">lacunes</span>. Cliquez sur <span class="font-weight-bold">Help
                        !</span><br><br>
                    Si vous <span class="font-weight-bold">maîtrisez la matière</span>. Cliquez sur <span
                        class="font-weight-bold">Suivant !</span>
                </p>
                <select name="cours_id" class="d-none">
                    <option value="1">HTML / CSS</option>
                </select>
                <a href="#" class="btn btn-primary btn-lg mt-3 mr-2">Help</a>
                <button class="btn btn-primary btn-lg mt-3" type="submit">Suivant</button>
            </div>
        </form>
    </div>
</div>
@stop