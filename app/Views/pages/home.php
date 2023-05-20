<?= $this->extend("base") ?>
<?= $this->section("title-text") ?>
	<?= $title ?>
<?= $this->endSection() ?>

<?= $this->section("body") ?>
<header id="header">
  <nav class="navbar navbar-expand-lg navbar-dark bg-light bg-transparent" style="z-index: 10">
    <div class="nav-container container-fluid">
      <a class="navbar-brand" href="#">
        <img class="img-fluid align-baseline" src="images/logo_with_text.svg" alt="iron software logo" width="115" height="15" />
      </a>
      <a href="#main" class="skip-nav">Skip Navigation</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white active" aria-current="page" href="#">PRODUCTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">CAREER</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="big-brand-logo position-absolute top-0 end-0"></div>
  <div class="py-5">
    <article class="container-fluid">
      <div class="row align-items-center">
        <div class="col-12" style="z-index: 5">
          <img class="img-fluid" width="165" height="40" src="images/iron_pdf_logo_with_text.svg" alt="Ironpdf logo" /> <span class="align-middle"> for C++</span>
          <br />
          <p class="sub-header mt-4">Building on the success of IronPDF for .NET</p>
          <h1>Beta Software Program<br /><span class="color-fake-purple">IronPDF for C++</span></h1>
          <span class="color-fake-purple">Coming Soon</span>
        </div>
      </div>
    </article>
  </div>
</header>
<main id="main">
  <div class="py-5 position-relative" style="background: linear-gradient(90deg, #8e608e 28.16%, #402640 67.82%, #371a34 83.75%); z-index: 2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h2>Be one of the first</h2>
          <span class="sub-header">Sign up NOW to get early access!</span>
          <form action="/mail" method="POST">
            <div class="submit-button position-relative my-4">
              <input class="submit-button__input py-4 px-4 w-100" name="email" placeholder="Enter email address" type="text" />
              <button type="submit" class="submit-button__text px-4 text-white position-absolute end-0 border-0">Sign up now <i class="fa-solid fa-caret-right align-text-bottom"></i></button>
            </div>
          </form>
          <div class="button opacity-50 py-2 px-4 color-fake-purple d-inline-block"># Coming Soon</div>
          <br class="d-block d-sm-none" />
          <div class="ms-2 mt-sm-4 mt-md-0 d-inline-block">IronPDF Beta Program also coming soon for <span class="text-bold ms-2">Python</span> | <span class="text-bold">Node.JS</span> | <span class="text-bold">Java</span></div>
        </div>
      </div>
    </div>
  </div>
  <article class="accent-container">
    <div class="py-5">
      <div class="container-fluid">
        <h2 class="text-center"> IronPDF for C++ <span class="green-badge"><span class="position-absolute">COMING <br />SOON</span></span>
        </h2>
        <div class="d-flex justify-content-around align-items-stretch mt-5">
          <span class="text-center"># <br class="d-sm-inline d-md-none" /> Generate PDFs from HTML in C++</span>
          <span class="mx-3 word-separator"></span>
          <span class="text-center"># <br class="d-sm-inline d-md-none" /> Combine, split, and modify PDFs quickly in C++</span>
          <span class="mx-3 word-separator"></span>
          <span class="text-center"># <br class="d-sm-inline d-md-none" /> Extract text and images from PDFs using C++</span>
        </div>
      </div>
    </div>
    <div class="accent-container__second py-5">
      <div class="container-fluid">
        <p> The new <span class="text-bold">IronPDF library for C++</span> will enhance the C++ developer’s tool set with robust PDF generation and conversion capabilities. Developers will be able to generate new PDFs from HTML content (from text or from URL), as well as to combine, split, extract, and modify content from existing PDFs. </p>
        <p><span class="text-bold">IronPDF for C++</span> will help developers create C++ applications that can do all of these PDF processing tasks and more, with speed, precision, control, and excellence.</p>
      </div>
    </div>
  </article>
  <div style="background-color: var(--primary-color); padding: 100px 0px">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-12 col-lg-3">
          <div class="brand-img mx-auto ms-lg-0">
            <img src="images/html_to_pdf_icon.svg" width="270" height="180" alt="change htm to pdf icon" />
          </div>
        </div>
        <article class="col-12 col-lg-9 px-3">
          <h2>Why make a<span class="color-fake-purple"> C++ PDF Library </span></h2>
          <p>C++ is one of the most popular, oldest, and important programming languages in use, being the language of choice in low-level systems and network programming and other domains where performance is critical.</p>
          <p>The release of IronPDF for C++ will aid developers in building performant applications that can carry out PDF-related processing tasks</p>
        </article>
      </div>
    </div>
  </div>
</main>
<footer class="accent-container">
  <div style="padding: 100px 0px">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-12">
          <h2 class="mb-5">Early Access to <span class="color-fake-purple">C++ PDF Library</span></h2>
          <p class="mb-5"> Joining the early access program will allow you to collaborate closely with our engineering team. You will be playing a key role in the development process as you share your early experiences using the C++ PDF library before its official launch. Your continual feedback after we release the library will be immensely helpful as we release new features and improve on existing features. </p>
        </div>
        <article class="col-12">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-12 col-lg-4 px-1">
                <div class="tube d-flex align-items-center px-4 py-3 flex-row flex-md-row flex-lg-row">
                  <span class="button py-2 px-4"># Released </span>
                  <span class="mx-3 my-0 my-md-0 my-lg-0">
                    <img class="img-fluid" width="113" height="40" src="images/iron_for_java.svg" alt="asdf" />
                  </span>
                </div>
              </div>
              <div class="col-12 col-lg-4 px-1 py-3">
                <div class="tube tube--muted d-flex align-items-center px-4 py-3 flex-row flex-md-row flex-lg-row">
                  <span class="button button--invert py-2 px-4 color-fake-purple"># Coming Soon </span>
                  <span class="mx-3 my-0 my-md-0 my-lg-0">
                    <img class="img-fluid" width="113" height="40" src="images/iron_for_python.svg" alt="asdf" />
                  </span>
                </div>
              </div>
              <div class="col-12 col-lg-4 px-1">
                <div class="tube tube--muted d-flex align-items-center px-4 py-3 flex-row flex-md-row flex-lg-row">
                  <span class="button button--invert py-2 px-4 color-fake-purple"># Coming Soon </span>
                  <span class="mx-3 my-0 my-md-0 my-lg-0">
                    <img class="img-fluid" width="113" height="40" src="images/iron_for_nodejs.svg" alt="asdf" />
                  </span>
                </div>
              </div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
  <div class="accent-container__second py-5">
    <div class="container-fluid">
      <h3 class="text-center mb-4">Sign up to our <span class="color-fake-purple">Beta Program</span></h3>
      <div>
        <form action="/mail" method="POST">
          <div class="submit-button position-relative mx-auto">
            <input class="submit-button__input py-3 px-4 w-100" name="email" placeholder="Enter email address" type="text" />
            <button type="submit" class="submit-button__text px-4 text-white position-absolute end-0 border-0">Sign up now <i class="fa-solid fa-caret-right align-text-bottom"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</footer>
<?= $this->endSection() ?>