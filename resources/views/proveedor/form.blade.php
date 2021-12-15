<label for="nombre"> Nombre </label>
        <input type="text" name="nombre" value="{{ isset($proveedor->nombre)?$proveedor->nombre:''}}" id="nombre">
    <br>
    
        <label for="apellido">apellido</label>
        <input type="text" name="apellido" value="{{ isset($proveedor->apellido)?$proveedor->apellido:''}}"id="apellido">
        <br>
    
    
        <label for="email"> email</label>
        <input type="text" name="email" value="{{ isset($proveedor->email)?$proveedor->email:''}}"id="email">
        <br>
    
    
        <label for="celular"> Celular</label>
        <input type="number" name="celular"  value="{{ isset($proveedor->celular)?$proveedor->celular:''}}" id="celular">
        <br>
    
    

        <label for="direccion">Direccion</label>
        <input type="text" name="direccion"  value="{{ isset($proveedor->direccion)?$proveedor->direccion:''}}" id="direccion">
        <br>
    
    
   
        <label for="estado"> Estado</label>
        <input type="text" name="estado" value="{{ isset($proveedor->estado)?$proveedor->estado:''}}"id="estado">



        <br>
        <input type="submit" value="Guardar datos">
        <br>




        