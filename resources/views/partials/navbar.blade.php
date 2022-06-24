<header class="header-shadow">
  <!-- Fixed navbar -->
  <nav
    class="navbar navbar-expand-md navbar-white fixed-top bg-white shadow-sm"
  >
    <div class="container">
      <div>
        <img src="./assets/images/header-icon.svg" alt="" />
        <a
          class="navbar-brand fw-normal text-black ms-2 logo-font"
          href="/"
          >Unklab Dine</a
        >
      </div>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="bi bi-list text-dark"></i>
      </button>
      <div class="collapse navbar-collapse flex-grow-0" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0 fw-semibold">
          <li class="nav-item">
            <a
              class="nav-link {{ ($title === 'Home') ? 'active text-primary' : '' }}"
              aria-current="page"
              href="/"
              >Home</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/vote/vote1.html">Rate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Best Menu') ? 'active text-primary' : '' }}" href="/best-menu">Best Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/overall-rating.html"
              >Overall Rating</a
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>