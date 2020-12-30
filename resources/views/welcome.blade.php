@include('template.template')

@auth
<div class="mt-5 pt-5">
    <div class="card border-dark m-auto shadow p-3 mb-5 bg-white rounded" style="width: max-content;">
        <div class="card-body text-center">
            <h2 class="card-title mb-4">Bienvenue sur la Plateforme d'entraide !</h2>
            <p class="card-text" style="font-size: 18px;">Afin de compléter votre inscription et trouvez <br> si
                besoin un partenaire pour vos
                lacunes. <br><br> Cliquez sur commencer !</p>
            <a href="/page1" class="btn btn-lg mt-3" style="background-color: #DEB5AE;">Commencer</a>
        </div>
    </div>
</div>
@endauth