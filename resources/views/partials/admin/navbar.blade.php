<div class="main-container d-flex">
  @include('partials.admin.sidebar', ['dataAdmin' => $dataAdmin])
  <div class="content">
      <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg">
          <div class="container-fluid">
              <a class="navbar-brand" href="/admin">Transport Berkah Armada</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="btn btn-success border border-white" style="background-color: #c90000">Keluar</button>
            </form>
          </div>
      </nav>
