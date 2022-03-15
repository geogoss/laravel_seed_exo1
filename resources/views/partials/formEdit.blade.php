<section class="w-50 mx-auto mb-5">
    <div class="bg-primary py-5">
        <h1 class="text-center text-white">Créer un nouveau membre</h1>
       
        <form class="w-75 mx-auto" action="/member/{{$member->id}} " method="POST">
            @csrf
            @method('PUT')  
            <div class="mb-3">
              <label for="addSmallerInputName" class="form-label">Nom</label>
              <input name="nom" type="text" value="{{$member->nom}} " class="form-control" id="addSmallerInputName"
                  aria-describedby="addSmallerInputNameHelp">
          </div>
            <div class="mb-3">
              <label for="addSmallerInputName" class="form-label">Age</label>
              <input name="age" type="number" value="{{$member->age}}" class="form-control" id="addSmallerInputName"
                  aria-describedby="addSmallerInputNameHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">Email</label>
              <input name="email" type="text" value="{{$member->email}} " class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">Tel</label>
              <input name="tel" type="text" value="{{$member->tel}} " class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>

          <button type="submit" class="btn btn-primary">Modifier</button>
          </form>
    </div>
</section>
