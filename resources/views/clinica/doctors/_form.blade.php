@csrf
@include('clinica.partials.validation-errors')
<div class="form-group">
    <input type="text" name="rut" id="rut" placeholder="RUT"
    value="{{ old('rut', $doctor->rut) }}">
</div>
<div class="form-group">
    <input type="text" name="name_doctor" id="name_doctor" placeholder="Nombre"
    value="{{ old('name_doctor', $doctor->name_doctor) }}">
</div>
<div class="form-group">
    <input type="text" name="apellido_doctor" id="apellido_doctor" placeholder="Apellidos"
    value="{{ old('apellido_doctor', $doctor->apellido_doctor) }}">
</div>
<div class="form-group">
    <input type="text" name="email" id="email" placeholder="Email"
    value="{{ old('email', $doctor->email) }}">
</div>
<div class="form-group">
    <input type="text" name="direccion" id="direccion" placeholder="Direccion"
    value="{{ old('direccion', $doctor->direccion) }}">
</div>
<div class="form-group">
    <select name="especialidad" id="especialidad">
        <option value="0">Pedriata</option>
        <option value="1">Cirujano</option>
        <option value="2">Psiquiatra</option>
    </select>
</div>
<div>
    <button type="submit" class="btn btn-success">Aceptar</button>
</div>