<section class="w-50 mx-auto">
    <a class="btn btn-danger" href="/deleteAll">Delete All</a>
    <table class="table table-striped table-warning">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Age</th>
            <th scope="col">email</th>
            <th scope="col">tel</th>
            <th scope="col">bonus</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($members as $item)
            <tr>
              <th scope="row">{{$item->id}} </th>
              <td>{{$item->nom}} </td>
              <td>{{$item->age}} </td>
              <td>{{$item->email}} </td>
              <td>{{$item->tel}} </td>
              <td class="d-flex justify-around">
                  <a class="btn btn-info" href="/member/{{$item->id}}">Show</a>
                  <form action="/member/{{$item->id}} " method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger m-2">Supprimer</button>
                </form>
                <a class="btn btn-secondary" href="/member/{{$item->id}}/edit">Modifier</a>
              </td>
            </tr>
                
            @endforeach

        </tbody>
      </table>
</section>