<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">

    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item {{ $page=="dashboard"?"active":"" }}">
        <a class="nav-link" href="/dashboard">Dashboard</a>
      </li>
      <li class="nav-item  {{ $page=="pemesanan"?"active":"" }}">
        <a class="nav-link" href="/pemesanan">Pemesanan</a>
      </li>
      <li class="nav-item  {{ $page=="produk"?"active":"" }}">
        <a class="nav-link" href="/produk">Produk</a>
      </li>
      <li class="nav-item  {{ $page=="data"?"active":"" }}">
        <a class="nav-link" href="/data">Data*</a>
      </li>
      <li class="nav-item  {{ $page=="pemesan"?"active":"" }}">
        <a class="nav-link" href="/pemesan">Pemesan</a>
      </li>
    </ul>
  </div>
</div>
</nav>