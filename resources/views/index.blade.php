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
              title="Rating about the environment"
            ></i>
            <h3 class="m-0 me-2">Environment</h3>
            <span class="text-muted me-1">4.5</span
            ><i class="bi bi-star-fill star-icon text-warning"></i>
          </div>
          <a
            class="text-decoration-none fw-medium text-muted"
            href="/environment"
            >View all</a
          >
        </div>
        <div class="d-flex gap-2 card-container">
          @foreach ($eresponses as $res)
          <x-card type="Environment" responden="{{ $res->responden }}" timecreated="{{ $res->timecreated }}" comments="{{ $res->comments }}" rating="{{ $res->rating }}" mealtime="{{ $res->mealtime }}"/>
          @endforeach
        </div>
      </div>
      <div class="container-lg mt-3">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <div class="d-flex justify-content-center align-items-center">
            <i
              class="bi bi-exclamation-circle-fill me-2 fs-5"
              data-bs-toggle="tooltip"
              data-bs-placement="top"
              data-bs-custom-class="custom-tooltip"
              title="Rating about how they serve you"
            ></i>
            <h3 class="m-0 me-2">Service</h3>
            <span class="text-muted me-1">4.5</span
            ><i class="bi bi-star-fill star-icon text-warning"></i>
          </div>
          <a
            class="text-decoration-none fw-medium text-muted"
            href="/service"
            >View all</a
          >
        </div>
        <div class="d-flex gap-2 card-container">
          @foreach ($sresponses as $res)
          <x-card type="Service" responden="{{ $res->responden }}" timecreated="{{ $res->timecreated }}" comments="{{ $res->comments }}" rating="{{ $res->rating }}" mealtime="{{ $res->mealtime }}"/>
          @endforeach
        </div>
      </div>
      <div class="container-lg mt-3">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <div class="d-flex justify-content-center align-items-center">
            <i
              class="bi bi-exclamation-circle-fill me-2 fs-5"
              data-bs-toggle="tooltip"
              data-bs-placement="top"
              data-bs-custom-class="custom-tooltip"
              title="Rating how the food taste"
            ></i>
            <h3 class="m-0 me-2">Food</h3>
            <span class="text-muted me-1">4.5</span
            ><i class="bi bi-star-fill star-icon text-warning"></i>
          </div>
          <a
            class="text-decoration-none fw-medium text-muted"
            href="/food"
            >View all</a
          >
        </div>
        <div class="d-flex gap-2 card-container">
          @foreach ($fresponses as $res)
          <x-card type="Service" responden="{{ $res->responden }}" timecreated="{{ $res->timecreated }}" comments="{{ $res->comments }}" rating="{{ $res->rating }}" mealtime="{{ $res->mealtime }}"/>
          @endforeach
        </div>
      </div>
    </main>
    @endsection('container')