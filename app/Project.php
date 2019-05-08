<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string title
 * @property string description
 */
class Project extends Model
{
    protected $guarded = ['id'];
}
