<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Sample;
use App\Transformers\UserTransformer;

class SampleTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['user'];
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Sample $sample)
    {
        return [
            'id'                => $sample->id,
            'date_plan'         => $sample->date_plan,
            'go'                => $sample->go,
            'sample_maker'      => $sample->sample_maker,
            'pattern_status'    => $sample->pattern_status,
            'sample_status'     => $sample->sample_status,
            'user_id'           => $sample->user_id,
            'created_at'        => $sample->created_at->toDateTimeString(),
            'created_at_human'  => $sample->created_at->diffForHumans()
        ];
    }

    public function includeUser(Sample $sample)
    {
        return $this->item($sample->user, new UserTransformer);
    }
}
