<div>
    {{-- Success is as dangerous as failure. --}}
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Autore</th>
            <th scope="col">Testo</th>
          </tr>
        </thead>
        <tbody>
          @foreach($articles as $article)
            <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->author}}</td>
            <td>{{$article->body}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
