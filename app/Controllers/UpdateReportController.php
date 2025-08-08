<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Trait\ValidationTrait;

class UpdateReportController extends BaseController
{
    use ResponseTrait, ValidationTrait;
    public function index($reportId)
    {
        try {

            $rules = $this->validationUpdateRules();
            if(! $this->validateData($this->request->getPost(array_keys($rules)), $rules)) {
                return $this->failValidationErrors($this->validator->listErrors());
            }

            $updateReport = model('Report')->update($reportId, [
                'patient' => $this->request->getPost('patient'),
                'doctor' => $this->request->getPost('doctor'),
                'exam' => $this->request->getPost('exam'),
                'status' => $this->request->getPost('status'),
                'report_text' => $this->request->getPost('reportText'),
            ]);

            return $this->respond('cheguei', 200);
        } catch ( \Exception $e ) {

            log_message('error', $e->getMessage(), [$e]);

            return $this->fail($e->getMessage());
        }
//        echo "<pre>";
//        die(var_dump($this->request->getPost()));
//        $updateReport = model('Report')->update($reportId, [
//            'patient' => $this->request->getPost('patient'),
//            'doctor' => $this->request->getPost('doctor'),
//            'exam' => $this->request->getPost('exam'),
//            'status' => $this->request->getPost('status'),
//            'report' => $this->request->getPost('report'),
//        ]);
//
//        if(! $updateReport) {
//            throw new \Exception('Update report not found');
//        }
//
//        return redirect()->to(url_to('show-report', $reportId));
    }
}
