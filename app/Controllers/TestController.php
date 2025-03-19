<?php

namespace App\Controllers;

class TestController extends BaseController
{
    public function instruction()
    {
        return view('instruction', ['title' => 'API Test Guide']);
    }

    public function listStudents()
    {
        return view('list_students', ['title' => 'Students List']);
    }


//     Разделение ответственности $id studentDetails($id), поступает из URL-адреса.
//     Массив $data['id'] = $id; используется для передачи этого значения в представление.
//     Это разделение позволяет отделить логику получения данных от логики их отображения.
// Гибкость:
// В будущем вам может понадобиться обработать $id в контроллере перед тем, как передать его в представление.
// Например, вы можете проверить, существует ли студент с таким ID, или выполнить другие проверки.

    // Функция compact() позволяет создать массив из переменных с тем же именем, что и ключи массива.
    public function studentDetails($id)
    {
        $title = 'Student Details';
        return view('student_details', compact('id', 'title'));
    }

    public function addStudent()
    {
        return view('add_student', ['title' => 'Add Student']);
    }

    public function updateStudent($id)
    {
        $title = 'Update Student';
        return view('update_student', compact('id', 'title'));
    }

    public function deleteStudent($id)
    {
        $title = 'Delete Student';
        return view('delete_student', compact('id', 'title'));
    }

}