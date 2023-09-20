<x-layout>
<x-slot name='title'>
contatti
</x-slot>
<div class="container">
<div class="row">
<div class="col-12 my-4">
<h3>Lavora con noi</h3>


<form action="{{route('contatti.nuovo')}}" method="POST">

@csrf

<div class="mb-3">
<label class="form-label">Nome</label>
<input type="text" name="name" class="form-control">
</div>
<div class="mb-3">
<label class="form-label">Motivazioni</label>
<input type="text" name="motive" class="form-control">
</div>
<button type="submit" class="btn button-custom">invia la tua candidatura</button>
</form>

</div>
</div>
</div>





</x-layout>
