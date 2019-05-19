<?php

namespace App;

use App\Events\ProjectCreated;
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

    protected $dispatchesEvents = [
        'created' => ProjectCreated::class
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

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
