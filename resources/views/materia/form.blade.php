<label for="nombre"> Nombre </label>
        <input type="text" name="nombre" value="{{ isset($materia->nombre)?$materia->nombre:''}}" id="nombre">
    <br>
    
        <label for="curso">curso</label>
        <input type="text" name="curso" value="{{ isset($materia->curso)?$materia->curso:''}}"id="curso">
        <br>
    
    
        <label for="grado"> grado</label>
        <input type="text" name="grado" value="{{ isset($materia->grado)?$materia->grado:''}}"id="grado">
        <br>
    
    
    

        <br>
        <input type="submit" value="Guardar datos">

        <p> <a href="/materia"> volver </a></p>
        <br>




        