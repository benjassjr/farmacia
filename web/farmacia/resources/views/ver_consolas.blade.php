@extends("layouts.master")

@section("contenido")

    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped table-responsive">
                    <thead class="bg-warning">
                    <tr>
                        <th>Medicamento</th>
                        <th>Tipo</th>
                        <th>Unidad</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody id="tbody-consola">

                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
@endsection

@section("javascript")
    <script src="{{asset('js/servicios/consolasService.js')}}"></script>
    <script src="{{asset('js/ver_consolas.js')}}"></script>
@endsection