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
                    <select class="form-select" onchange="searchByStatus()" id="status" name="status">
                        <option>.: Status :.</option>
                        <option value="1">Aguardando aprovação</option>
                        <option value="2">Aprovado</option>
                        <option value="3">Negado</option>
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
        <tbody id="report-list">
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
                    <td><?= esc($report['birth_date']) ?></td>
                    <td>
                        <?php if($report['status'] == 1): ?>
                        <span class="badge text-bg-warning">Aguardando Analise</span>
                        <?php elseif($report['status'] == 2) : ?>
                            <span class="badge text-bg-success">Autorizado</span>
                        <?php else: ?>
                            <span class="badge text-bg-danger">Indeferido</span>
                        <?php endif ?>
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

<script>
    function searchByStatus(){
        let status = document.getElementById('status').value;
        $.ajax({
            url: '<?=url_to('filtered-report')?>',
            type: 'POST',
            data: {status: status},
            dataType: 'json',
            success: function(response){
                drawTable(response.data);
            },
            error: function(data){
                console.log(data);
            },
        })
    }

    function drawTable(data)
    {
        let table = document.getElementById('report-list');
        let url = '/medical-report/'
        console.log(url)
        table.innerHTML = '';
        $.each(data, function(index, data){
            table.innerHTML += `<tr>
                                    <td>
                                        <a href="${url + '/' + data.id}">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    </td>
                                    <td>${data.patient}</td>
                                    <td>${data.exam}</td>
                                    <td>${data.birth_date}</td>
                                    <td>${examBadge(data.status)}</td>
                                </tr>`;
        })
    }

    function examBadge(data)
    {
        console.log(data);
        switch (data) {
            case '2':
                return '<span class="badge text-bg-success">Autorizado</span>'
                break;
            case '3':
                return '<span class="badge text-bg-danger">Indeferido</span>'
                break;
            default:
                return '<span class="badge text-bg-warning">Aguardando Analise</span>'
                break;
        }
    }
</script>
