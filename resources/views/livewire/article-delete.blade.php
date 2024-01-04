<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div>
                <div>
                    <h3 class="text-danger">Sei sicuro di voler cancellare l'articolo?</h3>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Titolo</label>
                  <p type="text" class="form-control" id="exampleInputEmail1" name="title"  wire:model.blur="title">{{$article->title}}</p>
                </div>
                <div class="mb-3">
                  <label class="form-label" >Autore</label>
                  <p type="text" class="form-control" id="author" name="author" wire:model.blur="author">{{$article->author}}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Corpo dell'articolo</label>
                    <p type="text" class="form-control" id="author" name="body" wire:model.blur="body">{{$article->body}}</p>
                </div>
                <button class="btn btn-primary" wire:click="delete({{$article}})">Conferma</button>
        </div>
    
</div>
