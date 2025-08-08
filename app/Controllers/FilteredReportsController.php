<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Report;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

class FilteredReportsController extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        try {
            $report = new Report();

            $results = $report->where('status', $this->request->getPost())->findAll();

            return $this->respond([
                'data' => $results,
            ], 200);

        } catch (Exception $e) {
            return $this->fail($e->getMessage(), $e->getCode());
        }
    }
}
