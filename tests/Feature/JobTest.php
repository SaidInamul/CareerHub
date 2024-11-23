<?php

namespace Tests\Feature;

use App\Models\Job;
use App\Models\Employer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobTest extends TestCase
{   
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    // public function test_example(): void
    // {
    //     $this->assertTrue(true);
    // }

    public function test_job_belongs_to_employer () : void {
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        $this->assertTrue($job->employer->is($employer));
    }

    public function test_creating_job () : void {
        // Create an employer first
        $employer = Employer::factory()->create();

        // Create a job associated with the employer
        $jobData = [
            'title' => 'Software Developer',
            'salary' => '$80,000 USD',
            'location' => 'Remote',
            'schedule' => 'Full-time',
            'url' => 'https://example.com/job/software-developer',
            'featured' => true,
            'employer_id' => $employer->id,
        ];

        $job = Job::create($jobData);

        // Assert that the job exists in the database
        $this->assertDatabaseHas('jobs', [
            'title' => $jobData['title'],
            'employer_id' => $employer->id,
        ]);

        // Assert that the job is associated with the employer
        $this->assertTrue($job->employer->is($employer));
    }
}
