

<label for="nombre_cargo"> Nombre </label>
<input type="text" name="nombre_cargo" value="{{ isset($rol->nombre_cargo)?$rol->nombre_cargo:' ' }}" id="nombre_cargo">
<br>
<label for="estado"> Estado </label>
<input type="text" name="estado"  value="{{ isset($rol->estado)?$rol->estado:''}}" id="estado">
<br>
<input type="submit" value="Guardar datos" >



