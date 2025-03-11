@include('admin.header')

<div class="container py-5">
    <h2>Create Job</h2>

    <form action="{{ route('admin.jobs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Job Title:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="company" class="form-label">Company Name:</label>
            <input type="text" name="company" id="company" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
        </div>

        <div class="mb-3">
            <label for="salary" class="form-label">Salary:</label>
            <input type="number" name="salary" id="salary" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location:</label>
            <input type="text" name="location" id="location" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="job_type" class="form-label">Job Type:</label>
            <select name="job_type" id="job_type" class="form-select" required>
                <option value="FULL_TIME">Full-Time</option>
                <option value="PART_TIME">Part-Time</option>
                <option value="CONTRACT">Contract</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="employer_logo" class="form-label">Employer Logo:</label>
            <input type="file" name="employer_logo" id="employer_logo" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Save Job</button>
    </form>
</div>

@include('admin.footer')
