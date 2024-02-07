<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LRS extends Model
{
  protected $fillable = [
    'stopid',
    'start_time',
    'end_time',
    'machine_name',
    'loss_category',
    'loss_reason',
    'loss_duration',
    'can_edit'
];
}
