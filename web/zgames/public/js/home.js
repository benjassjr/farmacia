
const cargarMarcas = async()=>{
    //Ir a buscar las marcas a la api
    let resultado = await axios.get("api/marcas/get");
    let marcas = resultado.data;

    let marcaSelect = document.querySelector("#marca-select");
    marcas.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        marcaSelect.appendChild(option);
    });
    //Cargar las marcas dentro del select
};

cargarMarcas();
document.querySelector("#registrar-btn").addEventListener("click", async()=>{
    let nombre = document.querySelector("#nombre-txt").value;
    let marca = document.querySelector("#marca-select").value;
    let anio = document.querySelector("#anio-txt").value;
    let consola = {};
    consola.nombre = nombre;
    consola.marca = marca;
    consola.anio = anio;
    
    let res = await crearConsola(consola);
    Swal.fire("Consola Creada", "Consola creada exitosamente", "info");
});