@foreach ($responses as $res)
          <div class="border border-3 rounded-4 text-center p-3 pt-2 my-card">
            <div>
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person-fill avatar-icon fs-1"></i>
                  <div class="ms-2 fw-medium text-start">
                    <div class="text-start star-container">
                      <i class="bi bi-star-fill star-icon text-warning"></i>
                      <i class="bi bi-star-fill star-icon text-warning"></i>
                      <i class="bi bi-star-fill star-icon text-warning"></i>
                      <i class="bi bi-star-fill star-icon text-warning"></i>
                      <i class="bi bi-star-fill star-icon text-secondary"></i>
                    </div>
                    {{ $res->responden }}
                    @if ()
                      
                    @endif
                  </div>
                </div>
                <p class="text-muted text-start fs-smaller fw-medium">{{ $res->timecreated }}</p>
              </div>
              <div class="card-comment">
                <p class="text-start">
                  "{{ $res->comments }}"
                </p>
              </div>
            </div>
          </div>
@endforeach