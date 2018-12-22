

<form action="{{ route('company.jobs.store') }}" method="POST" >

    {{ csrf_field() }}

    <!-- Job Title -->

    <div class="form-group">
        <label>Job Title</label>
        <input type="text" name="title" class="form-control" >
    </div>

    <!-- Job Location , Type , Category -->

    <div class="row">

        <!-- Job Location -->
        <div class="col">
            <div class="form-group">
                <label>Job Location<small>(optional)</small></label>
                <input type="text" name="location" class="form-control" placeholder="e.g: London">
            </div>
        </div>

        <!-- Job Type -->
        <div class="col">
            <div class="form-group">
                <label>Job Type</label>
                <select class="form-control" name="job_type">
                    <!-- From Database -->
                    @foreach($job_types as $job_type)
                        <option value="{{ $job_type -> id }}" > {{ $job_type->name }} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Job Category -->
        <div class="col">
            <div class="form-group">
                <label>Job Category</label>
                <select class="js-example-basic-multiple form-control" name="job_categories[]" multiple="multiple">
                    <!-- From Database -->
                    @foreach($job_categories as $job_category)
                        <option value="{{ $job_category -> id }}" > {{ $job_category->name }} </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <!-- Job Salary , Career Level , Job Experience -->

    <div class="row">
        <!-- Job Salary -->
        <div class="col">
            <div class="form-group">
                <label>Job Salary<small>(optional)</small></label>
                <select class="js-example-basic-multiple form-control" name="salaries[]" multiple="multiple">
                    <!-- From Database -->
                    @foreach($salaries as $salary)
                        <option value="{{ $salary -> id }}" > {{ $salary->salary_range }} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Career Level -->
        <div class="col">
            <div class="form-group">
                <label>Career Level<small>(optional)</small></label>
                <select class="js-example-basic-multiple form-control" name="career_levels[]" multiple="multiple">
                    <!-- From Database -->
                    @foreach($career_levels as $career_level)
                        <option value="{{ $career_level -> id }}" > {{ $career_level->name }} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Job Experience -->
        <div class="col">
            <div class="form-group">
                <label>Job Experience<small>(optional)</small></label>
                <select class="js-example-basic-multiple form-control" name="job_experiences[]" multiple="multiple">
                    <!-- From Database -->
                    @foreach($experiences as $experience)
                        <option value="{{ $experience -> id }}" > {{ $experience->name }} </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <!-- Gender , Job Industry , Job Qualification -->

    <div class="row">
        <!-- Gender -->
        <div class="col">
            <div class="form-group">
                <label>Gender<small>(optional)</small></label>
                <select class="js-example-basic-multiple form-control" name="gender" multiple="multiple">
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
        </div>

        <!-- Job Industry -->
        <div class="col">
            <div class="form-group">
                <label>Job Industry<small>(optional)</small></label>
                <select class="js-example-basic-multiple form-control" name="job_industries[]" multiple="multiple">
                    <!-- From Database -->
                    @foreach($industries as $industry)
                        <option value="{{ $industry -> id }}" > {{ $industry->name }} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Job Qualification -->
        <div class="col">
            <div class="form-group">
                <label>Job Qualification<small>(optional)</small></label>
                <select class="js-example-basic-multiple form-control" name="job_qualifications[]" multiple="multiple">
                    <!-- From Database -->
                    @foreach($qualifications as $qualification)
                        <option value="{{ $qualification -> id }}" > {{ $qualification->name }} </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <!-- Job Description -->

    <div class="form-group">
        <label>Job Description </label>
        <textarea name = "description" class="form-control"></textarea>
    </div>

    <!--Application email/URL -->

    <div class="form-group">
        <label>Application email/URL</label>
        <input type="text" name="application_email_or_url" class="form-control" >
    </div>

    <hr>

    <!-- Submit Button -->

    <button type="submit" class="btn btn-primary" name="submit" value="submit">Post a Job</button>

</form>