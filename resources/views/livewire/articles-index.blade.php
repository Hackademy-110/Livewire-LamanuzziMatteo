<div>
    {{-- Success is as dangerous as failure. --}}
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Autore</th>
            <th scope="col">Testo</th>
            <th scope="col">Aggiorna</th>
            <th scope="col">Elimina</th>
          </tr>
        </thead>
        <tbody>
          @foreach($articles as $article)
            <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->author}}</td>
            <td>{{$article->body}}</td>
            <td><a href="{{route('article.update',$article)}}" class="btn btn-warning">Modifica</a></td>
            <td><a href="{{route('article.delete',$article)}}" class="btn btn-danger">Elimina</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
