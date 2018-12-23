
@if(!empty($jobs) && count($jobs))
    <div class="card">
<div class="card-header">
    All Posted Jobs
    <a class="btn btn-primary float-right" href="{{ route('company.jobs.create') }}" role="button">Post a Job</a>

</div>

<div class="card-body">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Job Title</th>
            <th scope="col">Job type</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>

            @foreach($jobs as $key => $job)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $job->title }}</td>
                    <td>{{ $job->getJobtype->name }}</td>
                    <td><a class="btn btn-primary" href="#" role="button">Show Details</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
    <hr>
@else
    <div class="card">
    <div class="card-header">
        There is No posted Job
    </div>
    <div class="card-body text-center">
        <h5 class="card-title">No Current Job</h5>
        <p class="card-text">For Posting a job Click the Following button</p>
        <a class="btn btn-primary" href="{{ route('company.jobs.create') }}" role="button">Post a Job</a>
    </div>
</div>
    <hr>
@endif

