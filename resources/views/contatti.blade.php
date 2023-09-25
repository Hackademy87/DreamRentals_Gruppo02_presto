
<x-layout>


    <form action="{{route('contatti.nuovo')}}" method="POST">

    @csrf

    <div class="container container-fluid mt-lg-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="image">
                    <img src="https://media.istockphoto.com/id/1444325054/it/foto/segno-di-spunta-per-scegliere-la-figura-umana-in-legno-per-reclutare-in-azienda-assunzione.webp?b=1&s=170667a&w=0&k=20&c=5CcmsywvnWR3vIN3r2cP-xb5GrZBGEio_Z8WRuoeKwA=" alt="Immagine di candidatura">
                </div>
            </div>
            <div class="col-8 col-md-6">
                <div class="form">
                    <form id="candidaturaForm">
                        <div class="mb-3">
                            <label class="form-label" for="nome">{{__('ui.nome')}}:</label>
                            <input type="text" id="nome" name="nome" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nome">{{__('ui.esperienza')}}:</label>
                            <input type="text" id="nome" name="nome" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="motivazioni">{{__('ui.motivazione')}}</label>
                            <textarea id="motivazioni" name="motivazioni" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn button-custom">Invia la tua candidatura</button>
                    </form>
                </div>
            </div>
            </div>
        </div>








    </x-layout>
