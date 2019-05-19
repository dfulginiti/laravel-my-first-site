<?php

namespace App\Events;

use App\Project;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

/**
 * @property Project $project
 */
class ProjectCreated
{
    use Dispatchable, SerializesModels;

    public $project;

    /**
     * Create a new event instance.
     * @param Project $project
     *
     * @return void
     */
    public function __construct(Project $project)
    {
        $this->project = $project;
    }
}
