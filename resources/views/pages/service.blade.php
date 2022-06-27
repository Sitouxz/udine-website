@extends('layouts.main')
@section('container')
      <div class="container-lg mt-3">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <div class="d-flex justify-content-center align-items-center">
            <i
              class="bi bi-exclamation-circle-fill me-2 fs-5"
              data-bs-toggle="tooltip"
              data-bs-placement="top"
              data-bs-custom-class="custom-tooltip"
              title="Rating how they serve"
            ></i>
            <h3 class="m-0 me-2">Service</h3>
            <span class="text-muted me-1">{{ $saverageRating }}</span
            ><i class="bi bi-star-fill star-icon text-warning"></i>
          </div>
        </div>
        <div class="d-flex flex-column gap-2">
        @foreach ($responses as $res)
          <x-card type="Service" responden="{{ $res->responden }}" timecreated="{{ $res->timecreated }}" comments="{{ $res->comments }}" rating="{{ $res->rating }}" mealtime="{{ $res->mealtime }}"/>
          @endforeach
        </div>
      </div>
    </main>
@endsection('container')