<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class StudentImport implements ToModel, WithHeadingRow, WithValidation
{
    use Importable;

    protected $idClasses;
    protected $idSchool;
    protected $id_period;
    protected $major;

    public function __construct($data)
    {
        $this->idClasses = $data['idClasses'];
        $this->idSchool = $data['idSchool'];
        $this->id_period = $data['id_period'];
        $this->major = $data['major'];
    }

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Student([
            'name' => $row['nama'],
            'id_classes' => $this->idClasses,
            'id_period' => $this->id_period,
            'phone' => $row['phone'],
            'nis' => $row['nis'],
            'address' => $row['alamat'],
            'major' => $this->major,
            'gender' => $row['jenis_kelamin']

        ]);
    }

    public function rules(): array
    {
        return [
            '*.nama' => 'required',
            '*.nis' => 'required|unique:users,nis',
        ];
    }
}
