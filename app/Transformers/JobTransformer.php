<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Job;
use App\Transformers\UserTransformer;
use App\Transformers\PostTransformer;

class JobTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['user'];
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Job $job)
    {
        return [
            'id'                => $job->id,
            'date_plan'         => $job->date_plan,
            'start_at'          => $job->start_at,
            'done_at'           => $job->done_at,
            'status'            => $job->status,
            'plan_id'           => $job->plan_id,
            'user_id'           => $job->user_id,
            'created_at'        => $job->created_at->toDateTimeString(),
            'created_at_human'  => $job->created_at->diffForHumans()
        ];
    }

    public function includeUser(Job $job)
    {
        return $this->item($job->user, new UserTransformer);
    }

    // public function includePlan(Topic $topic)
    // {
    //     return $this->item($topic->plan, new PlanTransformer);
    // }
}
