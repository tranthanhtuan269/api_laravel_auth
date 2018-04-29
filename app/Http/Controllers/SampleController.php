<?php

namespace App\Http\Controllers;

use App\Sample;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSampleRequest;
use App\Transformers\SampleTransformer;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class SampleController extends Controller
{
    public function index(){
        $samples = Sample::latestFirst()->paginate(25);
        $samplesCollection = $samples->getCollection();

        return fractal()
                ->collection($samplesCollection)
                ->parseIncludes(['user'])
                ->transformWith(new SampleTransformer)
                ->paginateWith(new IlluminatePaginatorAdapter($samples))
                ->toArray();
    }

    public function show(Sample $sample)
    {
        return fractal()
                ->item($sample)
                ->parseIncludes(['user'])
                ->transformWith(new SampleTransformer)
                ->toArray();
    }

    public function store(StoreSampleRequest $request)
    {
        $sample                 = new Sample;
        $sample->date_plan      = $request->date_plan;
        $sample->go             = $request->go;
        $sample->sample_maker   = $request->sample_maker;
        $sample->pattern_status = $request->pattern_status;
        $sample->sample_status  = $request->sample_status;
        $sample->user()->associate($request->user());

        $sample->save();

        return fractal()
                ->item($sample)
                ->parseIncludes(['user'])
                ->transformWith(new SampleTransformer)
                ->toArray();
    }
}
