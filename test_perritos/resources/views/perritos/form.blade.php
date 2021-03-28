<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" placeholder="ingrese el nombre" name = "nombre" id = "nombre"  value = "{{ isset($perro->nombre)?$perro->nombre:'' }}" style = "text-transform:uppercase;">
</div>
<div class="form-group">
    <label for="color">Color</label>
    <input type="text" class="form-control" placeholder="ingrese el color" name = "color" id = "color" value = "{{ isset($perro->color)?$perro->color:'' }}" style = "text-transform:uppercase;">
</div>
<div class="form-group">
    <label for="raza">Raza</label>
    <input type="text" class="form-control" placeholder="ingrese la raza" name = "raza" id = "raza" value = "{{ isset($perro->raza)?$perro->raza:'' }}" style = "text-transform:uppercase;">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>

<div id="error"></div>