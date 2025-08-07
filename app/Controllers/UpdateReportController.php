<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UpdateReportController extends BaseController
{
    public function index($reportId)
    {
//        echo "<pre>";
//        die(var_dump($this->request->getPost()));
        $updateReport = model('Report')->update($reportId, [
            'patient' => $this->request->getPost('patient'),
            'doctor' => $this->request->getPost('doctor'),
            'exam' => $this->request->getPost('exam'),
            'status' => $this->request->getPost('status'),
            'report' => $this->request->getPost('report'),
        ]);

        if(! $updateReport) {
            throw new \Exception('Update report not found');
        }

        return redirect()->to(url_to('show-report', $reportId));
    }
}
