

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

        @if($product_to_check)
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product_to_check)
                            <tr>
                                <th scope="row">NOME : {{$product_to_check->name}}</th>
                                <td>{{$product_to_check->description}}</td>
                                <td>{{$product_to_check->price}}</td>
                                <td>{{$product_to_check->category->name}}</td>
                                <td><img class="px-2 py-2" style="height:100px; width:100px;" src="{{ Storage::url($product_to_check->img)}}" alt=""></td>
                                <td>
                                    <form action="{{ route('revisor.accept_product', $product_to_check) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-primary">Accetta</button>
                                    </form>

                                    <form action="{{ route('revisor.reject_product', $product_to_check) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-primary">Rifiuta</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
</x-layout>
