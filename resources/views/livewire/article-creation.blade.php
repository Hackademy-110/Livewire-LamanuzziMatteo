<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
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
    <form class="mt-3" wire:submit="create">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="titolo che vuoi mettere all'articolo"  wire:model.blur="title">
        </div>
        <div class="mb-3">
          <label class="form-label" >Autore</label>
          <input type="text" class="form-control" id="author" name="author" placeholder="il nome dell'autore" wire:model.blur="author">
        </div>
        <div class="mb-3">
            <label class="form-label">Corpo dell'articolo</label>
            <textarea type="text" class="form-control" id="author" rows="10" name="body" placeholder="il contenuto dell'articolo" wire:model.blur="body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
      </form>
</div>
