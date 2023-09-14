

<!-- <style>
    body {
    background: #222D32;
}
</style> -->

<div>
<div class="container colorBack">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 login-title">
                CONSIGLIACI UN IMMOBILE
            </div>

<div class="col-lg-12 login-form">
    <div class="col-lg-12 login-form">
        <form wire:submit.prevent="store">
            <div class="form-group">
                <label class="form-control-label">Nome</label>
                <input type="text" class="form-control" wire:model.blur="name">
                <div class="text-danger">@error('name') {{ $message }} @enderror</div>
            </div>

            <div class="form-group">
                <label class="form-control-label">Descrizione</label>
                <input type="text" class="form-control" wire:model.blur="description">
                <div class="text-danger">@error('description') {{ $message }} @enderror</div>
            </div>

            <div class="form-group">
                <label  class="form-control-label">Categoria</label>
                <select class="form-control" wire:model.blur="category_id">
                    <option value="null" disabled >seleziona una categoria</option>
                    @foreach($productCategories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>

                <div class="form-group">
                    <label class="form-control-label">Prezzo</label>
                    <input type="numeric" class="form-control" wire:model.blur="price">
                    <div class="text-danger">@error('price') {{ $message }} @enderror</div>
                </div>

                <div class="form--group">

                    <label class="form-control-label">Copertina</label>

                    <input type="file" class="form-control" wire:model="img">

                    <div class="text-danger">@error('img') {{ $message }} @enderror</div>
                </div>
                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-text">
                                <!-- Error Message -->
                            </div>
                            <div class="col-lg-6 login-btm login-button">
                                <button type="submit" class="btn btn-outline-primary">ADD</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
           </div>
        </div>
    </div>
</div>



