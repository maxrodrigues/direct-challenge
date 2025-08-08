<div class="row mt-3 pt-3 pb-3">
    <div class="col-2">
        <a href="<?=url_to('home')?>" class="btn btn-primary w-100">
            <i class="bi bi-arrow-left me-1"></i>
            Voltar
        </a>
    </div>
</div>

<form method="post" action="<?=url_to('save-report')?>" id="save-report">
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
            <button type="button" class="btn btn-primary" id="submit">Enviar</button>
            <button type="reset" class="btn btn-secondary">Cancelar</button>
        </div>
    </div>
</form>

<div class="toast align-items-center border-0 position-absolute button-0 end-0"
     role="alert"
     aria-live="assertive"
     aria-atomic="true" id="toast">
    <div class="d-flex">
        <div class="toast-body" id="toast-body">
            Hello, world! This is a toast message.
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
</div>

<script>
    $(function() {
        $('#submit').click(function (event){
            event.preventDefault();
            let toast = bootstrap.Toast.getOrCreateInstance(document.getElementById('toast'))
            // $('#loader').removeClass('d-none');
            $.ajax({
                url: '<?=url_to('save-report')?>',
                type: 'POST',
                dataType: 'text',
                data: $('#save-report').serialize(),
                success: function(data){
                    $('#save-report').trigger('reset')
                    $('#toast').addClass('text-bg-success')
                    $('#toast-body').text(data.toString())
                    toast.show()
                },
                error: function(data, textStatus, errorMessage){
                    let errors = JSON.parse(data.responseText);
                    $('#toast').addClass('text-bg-danger')
                    $('#toast-body').html(errors.messages.error)
                    toast.show();
                },
            })

        })
    })
</script>
