<form id="formCarrera" method="post">
    <div class="form-group" >
        <label for="">Carrera</label><br>
<<<<<<< HEAD
        <select id="carreraEE" name="carreraEE" placeholder="Carrera">
        <option value="0">Selecciona una opción</option>
        <?php foreach ($query2 as $carrera): 
            
        if (($ee->codigoCarr) == ($carrera->codigoCarr)){
          ?>
        <option selected="selected" value='<?php echo $carrera->codigoCarr; ?>'><?php echo $carrera->nombreCarr; ?></option>
         <?php }
        else { 
          ?>
               <option value='<?php echo $carrera->codigoCarr; ?>'><?php echo $carrera->nombreCarr; ?></option>
        
        <?php  } ?>
          <?php endforeach; ?>
        </select>
=======
        <select id="carreraEE" name="carreraEE" placeholder="Carrera"></select>
>>>>>>> 5cd6bfc06013ac884791a4a45d1b2fad0e31b069
    </div>
    <div class="form-group" >
        <label for="">NRC</label><br>
        <input type="text" id="nrc" name="nrc" placeholder="" value="<?php echo $ee->nrcEE; ?>">
    </div>
    <div class="form-group">
        <label for="">Nombre</label><br>
        <input type="text" id="nombreEE" name="nombreEE" placeholder="Nombre" value="<?php echo $ee->nombEE; ?>">
    </div>
    <div class="form-group" >
        <label for="">Periodo</label><br>
        <select id="periodoEE" name="periodoEE" placeholder="Periodo">
            <option value="0">Seleccione una opción..</option>
<<<<<<< HEAD
            <?php foreach ($arreglo3 as $periodos ):
            if (($ee->periodEE) == ($periodos)){  
            ?>
            <option selected="selected"><?php echo $periodos;?></option>
            <?php }
            else{ ?>
            <option ><?php echo $periodos;?></option>
            <?php } ?>
            <?php endforeach; ?>
=======
            <option value="1">FEB-JUL</option>
            <option value="2">AGO-ENE</option>
>>>>>>> 5cd6bfc06013ac884791a4a45d1b2fad0e31b069

        </select>
    </div>
    <div class="form-group" >
        <label for="">Área</label><br>
        <select id="areaEE" name="areaEE" placeholder="Área">
            <option value="0">Seleccione una opción...</option>
<<<<<<< HEAD
            <?php foreach ($arreglo as $areas ):
            if (($ee->areaEE) == ($areas)){  
            ?>
            <option selected="selected"><?php echo $areas;?></option>
            <?php }
            else{ ?>
            <option ><?php echo $areas;?></option>
            <?php } ?>
            <?php endforeach; ?>
        </select>
    </div>
=======
            <option value="1">Básica General</option>
            <option value="2">Iniciación  a la Diciplina</option>
            <option value="3">Diciplinaria</option>
            <option value="4">Terminal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Créditos</label><br>
        <input type="text" id="creditos" name="creditos" placeholder="Créditos" value="<?php echo $ee->creditEE; ?>">
    </div>
>>>>>>> 5cd6bfc06013ac884791a4a45d1b2fad0e31b069
    <div class="form-group" >
        <label for="">Tipo</label><br>
        <select id="tipoEE" name="tipoEE" placeholder="Tipo">
            <option value="0">Selecione una opción...</option>
<<<<<<< HEAD
            <?php foreach ($arreglo2 as $tipos ):
            if (($ee->tipoEE) == ($tipos)){  
            ?>
            <option selected="selected"><?php echo $tipos;?></option>
            <?php }
            else{ ?>
            <option ><?php echo $tipos;?></option>
            <?php } ?>
            <?php endforeach; ?>
=======
            <option value="1">Obligatoria</option>
            <option value="2">Optativa</option>
>>>>>>> 5cd6bfc06013ac884791a4a45d1b2fad0e31b069
        </select>
    </div>
    <div class="form-group" >
        <label for="">Horas Teóricas</label><br>
        <input type="text" id="hrsT" name="hrsT" placeholder="Numero de horas" value="<?php echo $ee->hrsteoriaEE; ?>">
    </div>
    <div class="form-group" >
        <label for="">Horas Prácticas</label><br>
        <input type="text" id="hrsP" name="hrsP" placeholder="Numero de horas" value="<?php echo $ee->hrspractEE; ?>">
    </div>
<<<<<<< HEAD
    <div class="form-group">
        <label for="">Créditos</label><br>
        <input type="text" id="creditos" name="creditos" placeholder="Créditos" value="<?php echo $ee->creditEE; ?>">
    </div>
=======
>>>>>>> 5cd6bfc06013ac884791a4a45d1b2fad0e31b069
    <button type="submit" id="submit" class="btn btn-default">Listo</button>
</form>