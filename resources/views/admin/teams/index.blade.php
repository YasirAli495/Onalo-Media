<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@include('admin.header')

<h2 class="text-center">Add New Member</h2>
<a href="{{ route('teams.create') }}" class="btn btn-success text-light" style="margin-left: 100px; margin-right:100px;">Add New Team Member</a>

<div class="team-container">
    @foreach($teamMembers as $member)
        <div class="team-card" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">
            <img src="{{ asset($member->image) }}" alt="{{ $member->name }}" class="team-image"  style="width: 340px;height: 300px"/>
            <div class="team-info">
                <div class="team-header">
                    <h1 class="team-name">{{ $member->name }}</h1>
                    
                </div>
                <p class="team-role">{{ $member->role }}</p>
            </div>
            <div style="display: flex; gap: 10px;">
                <!-- Edit button -->
                <a href="{{ route('teams.edit', $member->id) }}" class="btn btn-warning btn-sm text-white">Edit</a>
                            
                <!-- Delete form -->
                <form action="{{ route('teams.destroy', $member->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm text-light" onclick="return confirm('Are you sure you want to delete this team member?')">Delete</button>
                </form>
            </div>
            
        </div>
    @endforeach
</div>

@include('admin.footer')
