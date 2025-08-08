<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Report;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;
use Exception;

class SaveReportController extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        try {
            $rules = [
                'patient' => 'required|string|min_length[6]',
                'birthDate' => 'required|string|valid_date[d/m/Y]',
                'exam' => 'required|string',
            ];

            $data = $this->request->getPost(array_keys($rules));

            if(! $this->validateData($data, $rules)) {
                return $this->failValidationErrors($this->validator->listErrors());
            }

            $report = new Report();
            $save = $report->insert([
                'patient' => $this->request->getPost('patient'),
                'birth_date' => $this->request->getPost('birthDate'),
                'exam' => $this->request->getPost('exam'),
            ]);

            if(! $save) {
                throw new \Exception("Failed to save report");
            }

            return $this->respondCreated('Created report successfully');

        } catch (Exception $exception) {
            $this->fail($exception->getMessage());
        }
    }
}
