@include('admin.header')

<h2 class="mb-4">Job List</h2>
<a href="{{ route('admin.jobs.create') }}" class="btn btn-success text-light mb-3 container">Add New Job</a>

@if(session('success'))
    <div class="alert alert-success mb-3">{{ session('success') }}</div>
@endif

<div class="table-responsive container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Company</th>
                <th>Description</th>
                <th>Salary</th>
                <th>Location</th>
                <th>Job Type</th>
                <th>Logo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
                <tr>
                    <td>{{ $job->title }}</td>
                    <td>{{ $job->company }}</td>
                    <td>
                        <div class="description-container">
                            <p class="job-description" id="description-{{ $job->id }}">{{ Str::limit($job->description, 100) }}</p>
                            <a href="javascript:void(0);" class="show-more-less" data-job-id="{{ $job->id }}">Show More</a>
                            <p class="full-description" id="full-description-{{ $job->id }}" style="display:none;">{{ $job->description }}</p>
                        </div>
                    </td>
                    <td>{{ $job->salary }}</td>
                    <td>{{ $job->location }}</td>
                    <td>{{ $job->job_type }}</td>
                    <td>
                        @if($job->employer_logo)
                            <img src="{{ asset($job->employer_logo) }}" alt="Employer Logo" style="width: 50px; height: auto;">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.jobs.edit', $job->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning btn-sm">Del</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('admin.footer')

<script>
    // Show More/Less functionality
    document.querySelectorAll('.show-more-less').forEach(function (button) {
        button.addEventListener('click', function () {
            var jobId = this.getAttribute('data-job-id');
            var fullDescription = document.getElementById('full-description-' + jobId);
            var shortDescription = document.getElementById('description-' + jobId);

            if (fullDescription.style.display === 'none') {
                fullDescription.style.display = 'block';
                shortDescription.style.display = 'none';
                this.textContent = 'Show Less';
            } else {
                fullDescription.style.display = 'none';
                shortDescription.style.display = 'block';
                this.textContent = 'Show More';
            }
        });
    });
</script>
