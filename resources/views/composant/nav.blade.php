<div id="mySidenav" class="sidenav">
    <div>

        <a href="/" class="titre-nav"><h5>contact</h5></a>
        
    </div>

    <div> 
        <form action="/contact/{{Auth::user()->id}}" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
            @csrf
            <select name="contact">

            @foreach ($user as $item)
                
            <option value="{{$item->id}}">{{$item->name}}</option>
            
            @endforeach
            </select>
            <button type="submit">contactez</button>
            

        </form>


    </div >


</div>