<div class="row mb-1">
    <div class="col-3">
        <a href="/add-medical-report" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i>
            Adicionar Novo Registro
        </a>
    </div>
</div>
<div class="row mb-3 p-3">
    <div class="row mb-1">
        <div class="col-12">
            <div class="d-flex justify-content-end align-items-center">
                <div>
                    <select class="form-select">
                        <option>.: Status :.</option>
                        <option value="waiting">Aguardando aprovação</option>
                        <option value="approved">Aprovado</option>
                        <option value="denied">Negado</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Paciente</th>
            <th>Exame</th>
            <th>Data</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
            <?php if (count($reports) > 0) { ?>
                <?php foreach ($reports as $report): ?>
                <tr>
                    <td>
                        <a href="<?= url_to('show-report', $report['id']) ?>">
                            <i class="bi bi-pencil"></i>
                        </a>
                    </td>
                    <td><?= esc($report['patient']) ?></td>
                    <td><?= esc($report['exam']) ?></td>
                    <td><?= esc($report['created_at']) ?></td>
                    <td>
                        <span class="badge text-bg-warning">
                            <?= esc($report['status']) ?>
                        </span>
                    </td>
                </tr>
                <?php endforeach ?>
            <?php } else { ?>
                <tr>
                    <td colspan="5" class="text-center">Nenhum resultado para a pesquisa</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
