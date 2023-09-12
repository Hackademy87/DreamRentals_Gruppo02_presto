<div>
    <form wire:submit.prevent="store">
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" wire:model.blur="name">
            <div class="text-danger">@error('name') {{ $message }} @enderror</div> 
        </div>
        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input type="numeric" class="form-control" wire:model.blur="price">
            <div class="text-danger">@error('price') {{ $message }} @enderror</div> 
        </div>
        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <input type="text" class="form-control" wire:model.blur="description">
            <div class="text-danger">@error('description') {{ $message }} @enderror</div> 
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>