<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ShowReportController extends BaseController
{
    public function index($reportId)
    {
        $report = model('Report')->find($reportId);
        return $this->render('show', ['report' => $report]);
    }
}
