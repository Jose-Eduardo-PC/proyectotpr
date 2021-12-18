
        <label for="titulo_tema">titulo_tema</label>
        <input type="text" name="titulo_tema" value="{{ isset($tema->apellido)?$tema->titulo_tema:''}}"id="apellido">
        <br>
    
    
        <label for="descripcion"> descripcion</label>
        <input type="text" name="descripcion" value="{{ isset($tema->descripcion)?$tema->descripcion:''}}"id="descripcion">
        <br>
    
        <label for="estado"> estado</label>
        <input type="text" name="estado" value="{{ isset($tema->estado)?$tema->estado:''}}"id="estado">
        <br>
    
   
        <input type="submit" value="Guardar datos">


        <p> <a href="/tema"> volver </a></p>
                   

       

        <br>