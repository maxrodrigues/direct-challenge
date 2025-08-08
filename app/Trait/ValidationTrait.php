<?php

namespace App\Trait;
trait ValidationTrait
{
    public function validationCreateRules(): array
    {
        return [
            'patient' => 'required|string|min_length[6]',
            'birthDate' => 'required|string|valid_date[d/m/Y]',
            'exam' => 'required|string',
        ];
    }

    public function validationUpdateRules(): array
    {
        return [
            'status' => 'required',
            'reportText' => 'required|string',
            'doctor' => 'required|string',
        ];
    }
}
