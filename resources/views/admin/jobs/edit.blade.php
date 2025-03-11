@include('admin.header')


    <h2 class="mb-4">Edit Job</h2>

    <form action="{{ route('admin.jobs.update', $job->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal container">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Job Title:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $job->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="company" class="form-label">Company Name:</label>
            <input type="text" name="company" id="company" class="form-control" value="{{ old('company', $job->company) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea name="description" id="description" class="form-control" required>{{ old('description', $job->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="salary" class="form-label">Salary:</label>
            <input type="number" name="salary" id="salary" class="form-control" value="{{ old('salary', $job->salary) }}" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location:</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $job->location) }}" required>
        </div>

        <div class="mb-3">
            <label for="job_type" class="form-label">Job Type:</label>
            <select name="job_type" id="job_type" class="form-select" required>
                <option value="FULL_TIME" {{ $job->job_type == 'FULL_TIME' ? 'selected' : '' }}>Full-Time</option>
                <option value="PART_TIME" {{ $job->job_type == 'PART_TIME' ? 'selected' : '' }}>Part-Time</option>
                <option value="CONTRACT" {{ $job->job_type == 'CONTRACT' ? 'selected' : '' }}>Contract</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="employer_logo" class="form-label">Employer Logo:</label>
            <input type="file" name="employer_logo" id="employer_logo" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Update Job</button>
    </form>


@include('admin.footer')
