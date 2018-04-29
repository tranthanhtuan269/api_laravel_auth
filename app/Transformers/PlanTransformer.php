<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Plan;
use App\Transformers\UserTransformer;

class PlanTransformer extends TransformerAbstract
{
    protected $availableIncludes = [];
    // protected $availableIncludes = ['user'];
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Plan $plan)
    {
        return [
            'id'                => $plan->id,
            'title'             => $plan->title,
            'line'              => $plan->line,
            'buyer_id'          => $plan->buyer_id,
            'order_id'          => $plan->order_id,
            'start_cut'         => $plan->start_cut->toDateTimeString(),
            'created_at'        => $plan->created_at->toDateTimeString(),
            'created_at_human'  => $plan->created_at->diffForHumans()
        ];
    }

    // public function includeUser(Plan $plan)
    // {
    //     return $this->item($plan->user, new UserTransformer);
    // }

    // public function includeJobs(Plan $plan)
    // {
    //     return $this->collection($plan->posts, new PostTransformer);
    // }
}
