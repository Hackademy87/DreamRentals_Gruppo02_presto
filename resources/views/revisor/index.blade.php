

<x-layout>

    <div class="container my-4">
        <div class="row">
            <h4>Tutti gli utenti</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>{{$product_to_check ? 'ecco l annuncio da revisionare':'Non ci sono annunci da revisionare'}}</h3>
            </div>
        </div>


        <div class="container">
            @if($product_to_check)
            <div class="row justify-content-center">
                <div class="col-12 col-md-3">

                    <x-card :product='$product_to_check'></x-card>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <form action="{{ route('revisor.accept_product', $product_to_check) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn mx-2 button-customAccept">Accetta</button>
                    </form>

                    <form action="{{ route('revisor.reject_product', $product_to_check) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn mx-2 button-customReject">Rifiuta</button>
                    </form>
                </div>
            </div>
            @endif

        </div>
    </div>

<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product_is_revisioned as $product_to_check)
                    <tr>
                        <th scope="row">NOME : {{$product_to_check->name}}</th>
                        <td>{{$product_to_check->description}}</td>
                        <td>{{$product_to_check->price}}</td>
                        <td>{{$product_to_check->category->name}}</td>


                        <td>

                            <form method="POST" action="{{ route('revisor.reverse', $product_to_check) }}">
                                @csrf
                                <button class="btn button-custom" type="submit">Annulla</button>
                            </form>
                            @if ($product_to_check->is_accepted == false)
                            <form method="POST" action="{{ route('revisor.delete', $product_to_check) }}">
                                @method('DELETE')
                                @csrf
                                <button  class="btn button-customReject" type="submit">ELIMINA</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</div>
</x-layout>
