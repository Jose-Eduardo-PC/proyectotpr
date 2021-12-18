<label for="nombre"> Nombre </label>
        <input type="text" name="nombre" value="{{ isset($profesor->nombre)?$profesor->nombre:''}}" id="nombre">
    <br>
    
        <label for="apellido">apellido</label>
        <input type="text" name="apellido" value="{{ isset($profesor->apellido)?$profesor->apellido:''}}"id="apellido">
        <br>
    
    
        <label for="genero"> genero</label>
        <input type="text" name="genero" value="{{ isset($profesor->genero)?$profesor->genero:''}}"id="genero">
        <br>
    
    
        <label for="celular"> Celular</label>
        <input type="number" name="celular"  value="{{ isset($profesor->celular)?$profesor->celular:''}}" id="celular">
        <br>
    
    

        <label for="direccion">Direccion</label>
        <input type="text" name="direccion"  value="{{ isset($profesor->direccion)?$profesor->direccion:''}}" id="direccion">
        <br>
    
    
   



        <br>
        <input type="submit" value="Guardar datos">
        
       

        <p> <a href="/profesor"> volver </a></p>
                   

       

        <br>

        