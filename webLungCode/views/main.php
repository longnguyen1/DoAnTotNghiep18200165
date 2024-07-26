<?php
  //$app->url('assets/images/blog-lg.jpg');
  //$categories = Category::select(3);
  $experts = Expert::select()->get();
?>

  <section id="hero" style="background-image:url(assets/images/billboard-bg.png); background-repeat: no-repeat; ">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 pe-5 mt-5 mt-md-0">
          <h2 class="display-1 text-uppercase">Trang thông tin về các chuyên gia</h2>
          <div>
            <form id="form" class="d-flex align-items-center position-relative ">
              <input type="text" name="email" placeholder="chat với chatGPT"
                class="form-control bg-white border-0 rounded-4 shadow-none px-4 py-3 w-100">
              <button class="btn btn-primary rounded-4 px-3 py-2 position-absolute align-items-center m-1 end-0"><svg
                  xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                  <use href="#search" />
                </svg></button>
            </form>

          </div>
        </div>
        <div class="col-md-6 mt-5">
          <img src="assets/images/billboard-img.jpg" alt="img" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="padding-medium mt-xl-5">
    <div class="container">
    <h1>
      <?php
      /*
        $this->url('assets/images/blog-lg.jpg');*/
      ?>
      <img src="assets/images/blog-lg.jpg">
    </h1>
      <div class="row align-items-center mt-xl-5">
        <div class="offset-md-1 col-md-5">
          <img src="assets/images/about-img.jpg" alt="img" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-5 mt-5 mt-md-0">
          <div class="mb-3">
            <p class="text-secondary ">Learn more about us</p>
            <h2 class="display-6 fw-semibold">About Us</h2>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestiae nam commodi dolore vitae?
            Numquam minima cum asperiores deleniti possimus provident, officia itaque esse eius, delectus incidunt
            laudantium adipisci laboriosam!</p>
          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
              <use href="#tick-circle" class="text-secondary" />
            </svg>
            <p class="ps-4">Engage with a worldwide community of inquisitive and imaginative individuals.</p>
          </div>
          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
              <use href="#tick-circle" class="text-secondary" />
            </svg>
            <p class="ps-4">Learn a skill of your choice from the experts around the world from various industries</p>
          </div>
          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
              <use href="#tick-circle" class="text-secondary" />
            </svg>
            <p class="ps-4">Learn a skill of your choice from the experts around the world from various industries</p>
          </div>
          <a href="about.php" class="btn btn-primary px-5 py-3 mt-4">Learn more</a>


        </div>
      </div>
    </div>
  </section>

  <section id="category">
    <div class="container ">
      <div class="d-md-flex justify-content-between align-items-center">
        <div>
          <p class="text-secondary ">Pick your niche and get started</p>
          <h2 class="display-6 fw-semibold">Popular Categories</h2>
        </div>
        <div class="mt-4 mt-md-0">
          <a href="#" class="btn btn-primary px-5 py-3">View all categories</a>
        </div>
      </div>
      <div class="row g-md-3 mt-2">
        <div class="col-md-4">
          <div class="primary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                <use href="#pencil-box" class="svg-primary" />
              </svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Graphic Design</p>
                <p class="category-paragraph m-0">
                    <a href="views\IT.php" class="btn btn-primary">Tìm hiểu thêm</a>
                </p>
              </div>
            </div>
          </div>
          <div class="tertiary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                <use href="#speakerphone" class="svg-tertiary" />
              </svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">SEO & Marketing</p>
                <p class="category-paragraph m-0">
                    <a href="views\IT.php" class="btn btn-primary">Tìm hiểu thêm</a>
                </p>
              </div>
            </div>
          </div>
          <div class="secondary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                <use href="#handshake" class="svg-secondary" />
              </svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Business & Finance</p>
                <p class="category-paragraph m-0">
                    <a href="views\IT.php" class="btn btn-primary">Tìm hiểu thêm</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gray rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                <use href="#camera" class="svg-gray" />
              </svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Video & Photography</p>
                <p class="category-paragraph m-0">
                    <a href="views\IT.php" class="btn btn-primary">Tìm hiểu thêm</a>
                </p>
              </div>
            </div>
          </div>
          <div class="secondary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                <use href="#laptop" class="svg-secondary" />
              </svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Computer Science</p>
                <p class="category-paragraph m-0">
                    <a href="views\IT.php" class="btn btn-primary">Tìm hiểu thêm</a>
                </p>
            </div>
            </div>
          </div>
          <div class="tertiary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                <use href="#fitness" class="svg-tertiary" />
              </svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Health & Fitness</p>
                <p class="category-paragraph m-0">
                    <a href="views/IT.php" class="btn btn-primary">Tìm hiểu thêm</a>
                </p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  
  <section id="testimonial" class="padding-medium bg-primary-subtle">
    <div class="container">
      <div class="text-center mb-4">
        <p class="text-secondary ">What our students say about us</p>
        <h2 class="display-6 fw-semibold">Reviews</h2>
      </div>
      <div class="row">
        <div class="offset-md-1 col-md-10">
          <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper">

              <div class="swiper-slide pe-md-5">
                <div class="my-4">
                  <p class="text-muted">“Condimentum vel viverra morbi quisque lobortis eu leo. A nulla pulvinar at
                    ut in sit libero, sed. Quis congue pretium in enim gravida quam netus in lorem. Nulla at nibh lorem
                    nunc sapien egestas at cursus. ”</p>
                  <div class="row">
                    <div class="col-3"> <img src="<?php $_this->url('assets/images/reviwer1.jpg');?>" alt="img" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-9">
                      <h5 class="m-0 mt-2">Recco Gracia</h5>
                      <p class="text-muted">Web Developer</p>
                    </div>

                  </div>
                </div>
              </div>
              <div class="swiper-slide pe-md-5">
                <div class="my-4">
                  <p class="text-muted">“Condimentum vel viverra morbi quisque lobortis eu leo. A nulla pulvinar at
                    ut in sit libero, sed. Quis congue pretium in enim gravida quam netus in lorem. Nulla at nibh lorem
                    nunc sapien egestas at cursus. ”</p>
                  <div class="row">
                    <div class="col-3"> <img src="<?php $_this->url('assets/images/reviwer2.jpg');?>" alt="img" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-9">
                      <h5 class="m-0 mt-2">Bicky Yeal</h5>
                      <p class="text-muted">Web Developer</p>
                    </div>

                  </div>
                </div>
              </div>
              <div class="swiper-slide pe-md-5">
                <div class="my-4">
                  <p class="text-muted">“Condimentum vel viverra morbi quisque lobortis eu leo. A nulla pulvinar at
                    ut in sit libero, sed. Quis congue pretium in enim gravida quam netus in lorem. Nulla at nibh lorem
                    nunc sapien egestas at cursus. ”</p>
                  <div class="row">
                    <div class="col-3"> <img src="<?php $_this->url('assets/images/reviwer3.jpg');?>" alt="img" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-9">
                      <h5 class="m-0 mt-2">Lilly Will</h5>
                      <p class="text-muted">Web Developer</p>
                    </div>

                  </div>
                </div>
              </div>
              <div class="swiper-slide pe-md-5">
                <div class="my-4">
                  <p class="text-muted">“Condimentum vel viverra morbi quisque lobortis eu leo. A nulla pulvinar at
                    ut in sit libero, sed. Quis congue pretium in enim gravida quam netus in lorem. Nulla at nibh lorem
                    nunc sapien egestas at cursus. ”</p>
                  <div class="row">
                    <div class="col-3"> <img src="<?php $_this->url('assets/images/reviwer1.jpg');?>" alt="img" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-9">
                      <h5 class="m-0 mt-2">Recco Gracia</h5>
                      <p class="text-muted">Web Developer</p>
                    </div>

                  </div>
                </div>
              </div>
              <div class="swiper-slide pe-md-5">
                <div class="my-4">
                  <p class="text-muted">“Condimentum vel viverra morbi quisque lobortis eu leo. A nulla pulvinar at
                    ut in sit libero, sed. Quis congue pretium in enim gravida quam netus in lorem. Nulla at nibh lorem
                    nunc sapien egestas at cursus. ”</p>
                  <div class="row">
                    <div class="col-3"> <img src="<?php $_this->url('assets/images/reviwer2.jpg');?>" alt="img" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-9">
                      <h5 class="m-0 mt-2">Recco Gracia</h5>
                      <p class="text-muted">Web Developer</p>
                    </div>

                  </div>
                </div>
              </div>

            </div>

            <div class="swiper-pagination"></div>

          </div>
        </div>
      </div>
    </div>


  </section>

  <section id="points" class="padding-medium pt-0">
    <div class="container">
      <div class="text-center">
        <p class="text-secondary ">What features we provide</p>
        <h2 class="display-6 fw-semibold">Core Features</h2>
      </div>
      <div class="row align-items-center mt-5">
        <div class="col-md-6 pe-md-5">

          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
              <use href="#tick-circle" class="text-secondary" />
            </svg>
            <p class="ps-4">Engage with a worldwide community of inquisitive and imaginative individuals.</p>
          </div>
          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
              <use href="#tick-circle" class="text-secondary" />
            </svg>
            <p class="ps-4">Engage with a worldwide community of inquisitive and imaginative individuals.</p>
          </div>
          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
              <use href="#tick-circle" class="text-secondary" />
            </svg>
            <p class="ps-4">Learn a skill of your choice from the experts around the world from various industries</p>
          </div>
          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
              <use href="#tick-circle" class="text-secondary" />
            </svg>
            <p class="ps-4">Learn a skill of your choice from the experts around the world from various industries</p>
          </div>

        </div>
        <div class="col-md-6 pe-md-5">

          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
              <use href="#tick-circle" class="text-secondary" />
            </svg>
            <p class="ps-4">Engage with a worldwide community of inquisitive and imaginative individuals.</p>
          </div>
          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
              <use href="#tick-circle" class="text-secondary" />
            </svg>
            <p class="ps-4">Engage with a worldwide community of inquisitive and imaginative individuals.</p>
          </div>
          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
              <use href="#tick-circle" class="text-secondary" />
            </svg>
            <p class="ps-4">Learn a skill of your choice from the experts around the world from various industries</p>
          </div>
          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
              <use href="#tick-circle" class="text-secondary" />
            </svg>
            <p class="ps-4">Learn a skill of your choice from the experts around the world from various industries</p>
          </div>

        </div>
      </div>
    </div>
  </section>

  