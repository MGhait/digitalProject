{{-- Do your work, then step back. --}}
<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            @if(count($features) > 0)
                @foreach($features as $feature)
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="{{ 0.1 + ($loop->iteration -1 )*0.2 }}s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="{{ $feature->icon }} fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">{{ $feature->name }}</h5>
                            <p class="m-0">{{ $feature->description }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
<!-- Feature End -->
