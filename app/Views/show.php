<form method="post" action="<?= url_to('update-report', $report['id']) ?>">
<div class="row mb-3">
    <div class="col-md-4">
        <label for="patient">Paciente</label>
        <input type="text" class="form-control" name="patient" id="patient" value="<?= esc($report['patient']) ?>" readonly/>
    </div>
    <div class="col-md-4">
        <label for="birthDate">Data de Nascimento</label>
        <input type="text" class="form-control" name="birthDate" id="birthDate" value="<?= esc($report['birth_date']) ?>" readonly/>
    </div>
    <div class="col-md-4">
        <label for="exam">Nome do Exame</label>
        <input type="text" class="form-control" name="exam" id="exam" value="<?= esc($report['exam']) ?>" readonly/>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-12">
        <div id="editor-container">
            <div class="editor-container__editor"><div id="editor"></div></div>
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-4">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status1" value="2" <?= $report['status'] == 2 ? "checked" : ""; ?>>
            <label class="form-check-label" for="status1">
                Liberado
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="status2" value="3" <?= $report['status'] == 3 ? "checked" : ""; ?>>
            <label class="form-check-label" for="status2">
                Negado
            </label>
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-4">
        <label for="doctor">Médico Responsável</label>
        <input type="text" class="form-control" name="doctor" id="doctor" value="<?= esc($report['doctor']) ?>"/>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary" id="submit">Enviar</button>
        <button type="reset" class="btn btn-secondary">Cancelar</button>
    </div>
</div>
</form>
