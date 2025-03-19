<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\StudentModel;

class Students extends ResourceController
{
    use ResponseTrait;

    protected $modelName = 'App\Models\StudentModel';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        $student = $this->model->find($id);
        if ($student) {
            return $this->respond($student);
        } else {
            return $this->failNotFound('Student not found');
        }
    }

    public function create()
    {
        $data = $this->request->getPost();
        if ($this->model->insert($data)) {
            $response = [
                'status'   => 201,
                'error'    => null,
                'messages' => [
                    'success' => 'Student created successfully'
                ]
            ];
            return $this->respondCreated($response);
        } else {
            return $this->fail($this->model->errors());
        }
    }

    public function update($id = null)
    {
        $data = $this->request->getJSON(); // Изменено: используем getJSON()
        if ($data === null) {
            return $this->fail('Invalid JSON data'); // Добавлено: проверка на валидность JSON
        }
        if ($this->model->update($id, $data)) {
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Student updated successfully'
                ]
            ];
            return $this->respond($response);
        } else {
            return $this->fail($this->model->errors());
        }
    }


    public function delete($id = null)
    {
        if ($this->model->delete($id)) {
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Student deleted successfully'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Student not found');
        }
    }
}