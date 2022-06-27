@extends('layouts.main')
@section('container')
      <div class="container rating-container">
        <h1 class="text-center big-font fw-bolder">{{ $average }}</h1>
        <p class="text-center">
          Based on <span class="fw-semibold">{{ $total }}</span> ratings
        </p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="text-start star-container">
            <i class="bi bi-star-fill fs-5 star-icon text-warning"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-warning"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-warning"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-warning"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-warning"></i>
          </div>
          <span class="mt-1">{{ $fifthStar }}</span>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="text-start star-container">
            <i class="bi bi-star-fill fs-5 star-icon text-warning"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-warning"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-warning"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-warning"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-secondary"></i>
          </div>
          <span class="mt-1">{{ $fourthStar }}</span>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="text-start star-container">
            <i class="bi bi-star-fill fs-5 star-icon text-warning"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-warning"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-warning"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-secondary"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-secondary"></i>
          </div>
          <span class="mt-1">{{ $thirdStar }}</span>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="text-start star-container">
            <i class="bi bi-star-fill fs-5 star-icon text-warning"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-warning"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-secondary"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-secondary"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-secondary"></i>
          </div>
          <span class="mt-1">{{ $secondStar }}</span>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="text-start star-container">
            <i class="bi bi-star-fill fs-5 star-icon text-warning"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-secondary"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-secondary"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-secondary"></i>
            <i class="bi bi-star-fill fs-5 star-icon text-secondary"></i>
          </div>
          <span class="mt-1">{{ $firstStar }}</span>
        </div>
      </div>
    </main>
@endsection('container')