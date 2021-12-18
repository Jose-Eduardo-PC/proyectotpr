<label for="nombre"> Nombre </label>
        <input type="text" name="nombre" value="{{ isset($estudiante->nombre)?$estudiante->nombre:''}}" id="nombre">
    <br>
    
        <label for="apellido">apellido</label>
        <input type="text" name="apellido" value="{{ isset($estudiante->apellido)?$estudiante->apellido:''}}"id="apellido">
        <br>
    
    
        <label for="genero"> genero</label>
        <input type="text" name="genero" value="{{ isset($estudiante->genero)?$estudiante->genero:''}}"id="genero">
        <br>
    
    
        <label for="celular"> Celular</label>
        <input type="number" name="celular"  value="{{ isset($estudiante->celular)?$estudiante->celular:''}}" id="celular">
        <br>
    
    

        <label for="direccion">Direccion</label>
        <input type="text" name="direccion"  value="{{ isset($estudiante->direccion)?$estudiante->direccion:''}}" id="direccion">
        <br>
    
    
   
        <input type="submit" value="Guardar datos">


        <p> <a href="/estudiante"> volver </a></p>
                   

       

        <br>




        