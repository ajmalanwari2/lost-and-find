<?php

namespace App\Model\LostAndFind;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LostAndFindModel extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = ['id'];

}
