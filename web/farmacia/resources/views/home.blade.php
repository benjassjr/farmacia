@extends("layouts.master")

@section("contenido")

    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="cardheader bg-success text-white">
                    <span>Agregar Medicamento</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre Medicamento</label>
                        <input type="text"  id="nombre-txt" class="form-control" placeholder="Ingrese medicamento">
                    </div>
                    <div class="mb-3">
                        <label for="marca-select" class="form-label">Tipo</label>
                        <select  id="marca-select" class="form-select">
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="anio-txt" class="form-label">Unidad</label>
                        <input type="number" class="form-control" id="anio-txt">
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="registrar-btn" class="btn btn-info text-light">Agregar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/consolasService.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
@endsection