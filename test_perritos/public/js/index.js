
function validarForm()
{
    console.log("si entra");
    var nom = document.getElementById("nombre").value;
    var col = document.getElementById("color").value;
    var raza = document.getElementById("raza").value;
    
    if(nom == "")
    {
        alert("Debe Ingresar un nombre");
        return false;
    }
    if(col== "")
    {
        alert("Debe Ingresar un color");
        return false;
    }
    if(raza == "")
    {
        alert("Debe Ingresar una raza");
        return false;
    }
}
