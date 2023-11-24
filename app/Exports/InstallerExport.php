<?php

namespace App\Exports;

use App\Models\Installer;
use Maatwebsite\Excel\Concerns\FromQuery;


class UsersExport implements FromQuery
{
    public function collection()
    {
        return Installer::all();
    }
}