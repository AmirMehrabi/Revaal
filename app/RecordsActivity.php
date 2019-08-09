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

    protected function activityChanges()
    {
        if ($this->wasChanged()) {
            return [
                'before' => array_except(array_diff($this->old, $this->getAttributes()), 'updated_at'),
                'after' => array_except($this->getChanges(), 'updated_at')
            ];
        }
    }
}
