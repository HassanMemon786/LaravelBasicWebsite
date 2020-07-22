<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Acme</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link {{Request::is('/') ? 'active' : '' }}" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Request::is('about') ? 'active' : '' }}" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Request::is('messages') ? 'active' : '' }}" href="/messages">Messages</a>
      </li>
     
  </div>
</nav>