<div>
    {{-- The whole world belongs to you. --}}
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger mt-2">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form class="mt-3" wire:submit="update">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{$article->title}}"  wire:model.blur="title">
            </div>
            <div class="mb-3">
              <label class="form-label" >Autore</label>
              <input type="text" class="form-control" id="author" name="author" value="{{$article->author}}" wire:model.blur="author">
            </div>
            <div class="mb-3">
                <label class="form-label">Corpo dell'articolo</label>
                <textarea type="text" class="form-control" id="author" rows="10" name="body" wire:model.blur="body">{{$article->body}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Aggiorna</button>
          </form>
    </div>
