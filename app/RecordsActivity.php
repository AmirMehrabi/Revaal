<?php

namespace App;

trait RecordsActivity
{

    public function recordActivity($description)
    {
        $this->activity()->create([
            'project_id' => class_basename($this) === 'Project' ?  $this->id : $this->project->id,
            'description' => $description,
            'changes' => $this->activityChanges()
        ]);
    }
}
