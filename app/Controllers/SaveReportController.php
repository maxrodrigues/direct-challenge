<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Report;
use CodeIgniter\HTTP\ResponseInterface;

class SaveReportController extends BaseController
{
    public function index()
    {
        try {
            $report = new Report();
            $save = $report->insert([
                'patient' => $this->request->getPost('patient'),
                'birth_date' => $this->request->getPost('birthDate'),
                'exam' => $this->request->getPost('exam'),
            ]);

            if(! $save) {
                throw new \Exception("Failed to save report");
            }

            return redirect()->to('/');
        } catch (\Throwable $e) {
            die($e->getMessage());
        }
    }
}
