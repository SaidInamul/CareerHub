<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function __invoke() {
        $jobs = Job::query()
        ->with(['emploer', 'tags'])
        ->where('title', 'LIKE', '%' . request('search') . '%')
        ->get();
        
        return view('job.result', ['jobs' => $jobs]);
    }
}
