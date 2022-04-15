<nav class="navbar navbar-expand-lg navbar-light bg-light postion-relative py-5">
  <div class="container-fluid">
    <div class="brand-image d-flex flex-row flex-nowrap justify-content-between">
      <a class="navbar-brand mx-5" href="#"><img src="./images/client/logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse px-5" id="navbarTogglerDemo01">
      <ul class="navbar-nav mb-2 mb-lg-0 fw-normal">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Công trình <i class="bi bi-chevron-down"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sản phẩm <i class="bi bi-chevron-down fw-bold"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Hỏi đáp</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Liên hệ</a>
        </li>
      </ul>
      <div class="d-flex flex-column-reverse position-relative">
        <select name="sl-lang" class="sl-lang px-2 text-center id=" lang">
          <option value="vi" selected>Vi</option>
          <option value="en">En</option>
        </select>
        <form class="d-flex form-search position-absolute">
          <div class="d-flex flex-row flex-nowrap">
            <input type="text" name="keyword" class="px-2" id="keyword" placeholder="Search" />
            <button class="btn btn-search"><i class="bi bi-search"></i></button>
          </div>
        </form>
      </div>
    </div>
</nav>