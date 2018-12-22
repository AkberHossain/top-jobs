

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
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<hr>

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