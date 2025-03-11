<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@include('admin.header')

<h1 class="text-center">Add Services to DigitalMedia</h1>

<a href="create-card" class="btn btn-primary" style=" margin-left: 100px; margin-right: 100px; ">Add New Card</a>



<div class="custom-card-container">
    @foreach ($cards as $card)
        
            <div class="custom-card1" data-aos="fade-up" data-aos-duration="700">
                <div class="custom-card-header">
                    <div class="custom-card-icon">
                        <img src="{{ asset($card->image) }}" alt="{{ $card->title }}">
                    </div>
                </div>
                <h1 class="custom-card-heading text-light">{{ $card->title }}</h1>
                <p class="custom-card-description text-light">{{ $card->description }}</p>
                <div class="custom-card-footer">
                    <form action="{{ route('admin.cards.destroy', $card->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn sm-btn btn-warning m-3">
                            Del
                        </button>
                    </form>
                    <a href="{{ route('admin.cards.edit', $card->id) }}" class=" btn btn-sm btn-primary ">
                        Edit
                    </a>
                </div>
            </div>
        
    @endforeach
</div>











@include('admin.footer')