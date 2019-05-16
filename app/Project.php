<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property int owner_id
 * @property string title
 * @property string description
 */
class Project extends Model
{
    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    /**
     * @param $task
     */
    public function addTask($task)
    {
        $this->tasks()->create($task);
    }
}
