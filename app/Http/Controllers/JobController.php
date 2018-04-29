<?php

namespace App\Http\Controllers;

use App\Job;

use Illuminate\Http\Request;
use App\Http\Requests\StoreJobRequest;
use App\Transformers\JobTransformer;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::latestFirst()->paginate(25);
        $jobsCollection = $jobs->getCollection();

        return fractal()
                ->collection($jobsCollection)
                ->parseIncludes(['user'])
                ->transformWith(new JobTransformer)
                ->paginateWith(new IlluminatePaginatorAdapter($jobs))
                ->toArray();
    }

    public function show(Job $job)
    {
        return fractal()
                ->item($job)
                ->parseIncludes(['user'])
                ->transformWith(new JobTransformer)
                ->toArray();
    }

    public function store(StoreJobRequest $request)
    {
        $job            = new Job;
        $job->date_plan = $request->date_plan;
        $job->start_at  = $request->start_at;
        $job->done_at   = $request->done_at;
        $job->status    = $request->status;
        $job->plan_id   = $request->plan_id;
        $job->user()->associate($request->user());

        $job->save();

        return fractal()
                ->item($job)
                ->parseIncludes(['user'])
                ->transformWith(new JobTransformer)
                ->toArray();
    }
}
