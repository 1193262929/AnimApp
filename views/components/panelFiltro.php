<section class="panel-filtro">
    <div class="panel-filtro__titulo">
        <i class="fa-solid fa-filter"></i>
        <h2>Filtro de búsqueda</h2>
    </div>
    
    <div class="card shadow-sm border-success">
        <div class="card-body">
            <form class="d-grid gap-2"  method="post">
                <div class="opcion-filtro">
                    <div class="form-check d-flex align-items-center gap-2 m-0">
                        <input class="form-check-input" type="radio" name="filtro" value="perro" id="perro" required>
                        <label class="form-check-label" for="perro">Perro</label>
                    </div>
                </div>
                <div class="opcion-filtro">
                    <div class="form-check d-flex align-items-center gap-2 m-0">
                        <input class="form-check-input" type="radio" name="filtro" value="gato" id="gato" required>
                        <label class="form-check-label" for="gato">Gato</label>
                    </div>
                </div>
                <button class="btn btn-success mt-2">Consultar</button>
            </form>
        </div>
    </div>
</section>