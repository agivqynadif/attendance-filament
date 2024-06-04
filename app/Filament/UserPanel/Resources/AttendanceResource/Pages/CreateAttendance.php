<?php

namespace App\Filament\UserPanel\Resources\AttendanceResource\Pages;

use App\Filament\UserPanel\Resources\AttendanceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAttendance extends CreateRecord
{
    protected static string $resource = AttendanceResource::class;
}
