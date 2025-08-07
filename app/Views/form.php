<!--<form method="post" action="/save-medial-report" >-->
<?php echo form_open('save-medical-report'); ?>
    <div class="row mb-3">
        <div class="col-md-4">
            <label for="patient">Paciente</label>
            <input type="text" class="form-control" name="patient" id="patient"/>
        </div>
        <div class="col-md-4">
            <label for="birthDate">Data de Nascimento</label>
            <input type="text" class="form-control" name="birthDate" id="birthDate"/>
        </div>
        <div class="col-md-4">
            <label for="exam">Nome do Exame</label>
            <input type="text" class="form-control" name="exam" id="exam"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary" id="submit">Enviar</button>
            <button type="reset" class="btn btn-secondary">Cancelar</button>
        </div>
    </div>
<?php echo form_close(); ?>
<!--</form>-->
<!--<script>-->
<!--    $(function() {-->
<!--        $('#submit').click(function (){-->
<!--            $('#loader').removeClass('d-none');-->
<!--        })-->
<!--    })-->
<!--</script>-->
