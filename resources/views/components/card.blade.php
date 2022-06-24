<div class="border border-3 rounded-4 text-center p-3 pt-2 my-card">
    <div>
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <i class="bi bi-person-fill avatar-icon fs-1"></i>
                <div class="ms-2 fw-medium text-start">
                    <div class="text-start star-container">
                        @if ($rating == 1)
                        <i class="bi bi-star-fill star-icon text-warning"></i>
                        <i class="bi bi-star-fill star-icon text-secondary"></i>
                        <i class="bi bi-star-fill star-icon text-secondary"></i>
                        <i class="bi bi-star-fill star-icon text-secondary"></i>
                        <i class="bi bi-star-fill star-icon text-secondary"></i>
                        @elseif ($rating == 2)
                        <i class="bi bi-star-fill star-icon text-warning"></i>
                        <i class="bi bi-star-fill star-icon text-warning"></i>
                        <i class="bi bi-star-fill star-icon text-secondary"></i>
                        <i class="bi bi-star-fill star-icon text-secondary"></i>
                        <i class="bi bi-star-fill star-icon text-secondary"></i>
                        @elseif ($rating == 3)
                        <i class="bi bi-star-fill star-icon text-warning"></i>
                        <i class="bi bi-star-fill star-icon text-warning"></i>
                        <i class="bi bi-star-fill star-icon text-warning"></i>
                        <i class="bi bi-star-fill star-icon text-secondary"></i>
                        <i class="bi bi-star-fill star-icon text-secondary"></i>
                        @elseif ($rating == 4)
                        <i class="bi bi-star-fill star-icon text-warning"></i>
                        <i class="bi bi-star-fill star-icon text-warning"></i>
                        <i class="bi bi-star-fill star-icon text-warning"></i>
                        <i class="bi bi-star-fill star-icon text-warning"></i>
                        <i class="bi bi-star-fill star-icon text-secondary"></i>
                        @elseif ($rating == 5)
                        <i class="bi bi-star-fill star-icon text-warning"></i>
                        <i class="bi bi-star-fill star-icon text-warning"></i>
                        <i class="bi bi-star-fill star-icon text-warning"></i>
                        <i class="bi bi-star-fill star-icon text-warning"></i>
                        <i class="bi bi-star-fill star-icon text-warning"></i>
                        @endif
                    </div>
                    {{ $responden }}
                </div>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-end">
                <span class="text-muted text-start fs-smaller fw-medium lh-1">
                    {{ $timecreated }}
                </span>
                <span>
                    @if ($mealtime == 'B')
                    Breakfast
                    @elseif ($mealtime == 'L')
                    Lunch
                    @elseif ($mealtime == 'D')
                    Dinner
                    @endif
                </span>
            </div>
        </div>
        <div class="card-comment">
        <p class="text-start">
            "{{ $comments }}"
        </p>
    </div>
    @if ($type == 'Food')    
    <div>
        <img
          class="float-start img-fluid"
          src="https://dummyimage.com/600x400/000/fff"
          alt="image-comment"
        />
      </div>
    @endif
</div>
</div>