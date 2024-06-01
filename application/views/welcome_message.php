<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fredy's Portfolio</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/images/FG-favicon.png" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/essentials.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/layout.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700,900&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/images/FG.png" class="ml-20" style="height: 48px;" alt=""></a>
        <button class="navbar-toggler" id="solidColor" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#about-me">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php if ($this->session->flashdata('success')) { ?>
        <div class="vertical-center text-light-gray" style="position: fixed !important; z-index: 10; right: 10px; top:120px; border:1px; background: #3282b8;border-radius: 10px">
            <p class="alert-1 m-0 fs-16 text-white" style="padding: 10px 20px;"><i class="fas fa-check-circle mr-10"></i><?php echo $this->session->flashdata('success'); ?></p>
        </div>
        <script>
            setTimeout(function() {
                $('.alert-1').fadeOut('slow');
            }, 4000);
        </script>
    <?php } elseif ($this->session->flashdata('fail')) { ?>
        <div class="vertical-center text-light-gray alert-1" style="position: fixed !important; z-index: 10; right: 10px; top:120px; border:1px; background: #721C24;border-radius: 10px">
            <p class="m-0 fs-16 text-white" style="padding: 10px 20px;"><i class="fas fa-exclamation-circle mr-10"></i><?php echo $this->session->flashdata('fail'); ?></p>
        </div>
        <script>
            setTimeout(function() {
                $('.alert-1').fadeOut('slow');
            }, 4000);
        </script>
    <?php } ?>
    <section id="home">
        <div class="container text-center">
            <div class="random-shape-right"><img class="random-shape" src="<?php echo base_url(); ?>assets/images/random-shape-1.png" width="750" alt="" style="opacity: 0.5"></div>
            <div class="vertical-center text-center">
                <h2 class="title text-light-gray mb-0 letter-spacing-1" style="font-weight: 900;">Fredy Gunawan</h2>
                <h4 class="subtitle text-dark-gray letter-spacing-1">Web Developer / Designer</h4>
            </div>
        </div>

    </section>
    <section id="about-me">
        <div class="container">
            <div class="vertical-center">
                <img class="random-shape" src="<?php echo base_url(); ?>assets/images/random-shape-2.png" alt="" width="500" style="opacity: 0.5">
            </div>
            <div class="row mt-50 mb-50">
                <div class="col-md-6 text-white">
                    <h2 class="about-me m-0 text-light-gray text-center fs-45 letter-spacing-1" style="font-weight: 900;">About Me</h2>
                    <div class="line"></div>
                </div>
                <div class="col-md-6 text-white">
                    <h2 class="text-dark-gray fs-16 letter-spacing-1 line-height-30 pt-10">
                        I’m Fredy - a web developer currently living in Depok, Indonesia with 2 years of experience in the development and design of innovative static and dynamic websites.
                        <br><br>
                        I have diverse set of skills, ranging from design, to HTML + CSS + JS, all the way to PHP and Golang also Linux server administration.
                        <br><br>
                        I enjoy building everything from small business sites to rich interactive web apps. If you're a business seeking a web presence, don't hesitate to contact me.
                    </h2>
                    <a href="<?php echo base_url(); ?>assets/files/fredy_resume.pdf" download><button class="btn-custom">Download Resume</button></a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="projects">
        <div class="container hidden-sm-down">
            <h2 class="about-me m-0 text-light-gray text-center fs-45 letter-spacing-1" style="font-weight: 900;">Projects</h2>
            <div class="line hidden-sm-down"></div>
            <div class="row pt-40 pr-80 pl-80">
                <div class="col-md-6 pl-30 pr-30">
                    <a target="_blank" href="https://tripisland.ceteo.co.id/">
                        <div class="project-box">
                            <img id="trip_island" src="<?= base_url('assets/images/logo-tripisland.png') ?>" class="center responsive-logo" style="width: 350px;" alt="Trip Island">
                            <div class="overlay">
                                <div class="text text-white fs-20" style="height: auto; font-weight: 900">Trip Island</div>
                                <div class="text text-light-gray" style="padding-top: 0 !important">Developed data models, databases, and API using CodeIgniter and MySQL that it can be integrated by the mobile developer team. Designed dashboard admin according to the needs.</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 pl-30 pr-30">
                    <a target="_blank" href="http://bravass.space/">
                        <div class="project-box">
                            <img src="<?= base_url('assets/images/logo-bravass.png') ?>" class="center responsive-logo" style="width: 300px;" alt="Bravass Space">
                            <div class="overlay">
                                <div class="text text-white fs-20" style="height: auto; font-weight: 900">Bravass Space</div>
                                <div class="text text-light-gray" style="padding-top: 0 !important">Company website with a custom backend system to manage the products, news & events, and gallery to improve control over the sites content using polymer.js and Golang.</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 pl-30 pr-30">
                    <a target="_blank" href="https://makaronasnack.com/">
                        <div class="project-box">
                            <img src="<?= base_url('assets/images/logo-makarona.png') ?>" class="center responsive-logo" style="width: 320px;" alt="Makarona Snack">
                            <div class="overlay">
                                <div class="text text-white fs-20" style="height: auto; font-weight: 900">Makarona Snack</div>
                                <div class="text text-light-gray" style="padding-top: 0 !important">E-commerce website using LEMP stack. This website aims to simplify purchase transactions and make it easier for administrators to update product data from dashboard.</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 pl-30 pr-30">
                    <a target="_blank" href="https://www.inkindo-dki.org/">
                        <div class="project-box">
                            <img src="<?= base_url('assets/images/logo-inkindo.png') ?>" class="center responsive-logo" style="width: 250px;" alt="INKINDO DKI Jakarta">
                            <div class="overlay">
                                <div class="text text-white fs-20" style="height: auto; font-weight: 900">INKINDO DKI Jakarta</div>
                                <div class="text text-light-gray" style="padding-top: 0 !important">Web portal that has a registration feature for the requirements to become a consultant in Jakarta. Using CodeIgniter to create complex system flows also API.</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 pl-30 pr-30">
                    <a target="_blank" href="https://www.agmstore.com/">
                        <div class="project-box">
                            <img src="<?= base_url('assets/images/logo-agm.png') ?>" class="center responsive-logo" style="width: 200px;" alt="AGM Store">
                            <div class="overlay">
                                <div class="text text-white fs-20" style="height: auto; font-weight: 900">AGM Store</div>
                                <div class="text text-light-gray" style="padding-top: 0 !important">E-commerce website using LAMP stack. Also designed the admin dashboard page to receive transactions from customers.</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 pl-30 pr-30">
                    <a target="_blank" href="http://blog-himti.herokuapp.com/">
                        <div class="project-box">
                            <img src="<?= base_url('assets/images/logo-himti.png') ?>" class="center responsive-logo" style="width: 120px;" alt="Blog HIMTI">
                            <div class="overlay">
                                <div class="text text-white fs-20" style="height: auto; font-weight: 900">Blog HIMTI</div>
                                <div class="text text-light-gray" style="padding-top: 0 !important">Simple blog website using Bootstrap for the style and Laravel & Postgresql to manage the categories, tags and comments section.</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container hidden-md-up">
            <h2 class="about-me m-0 text-light-gray text-center fs-45 letter-spacing-1 pt-40" style="font-weight: 900;">Projects</h2>
            <div class="line text-center"></div>
            <div class="col-12">
                <div class="text-center mt-70">
                    <a target="_blank" href="https://tripisland.ceteo.co.id/">
                        <img src="<?= base_url('assets/images/logo-tripisland.png') ?>" style="width: 300px;" alt="Trip Island">
                    </a>
                    <p class="fs-20 m-0 pb-10 pt-10 fw-900 text-white">Trip Island</p>
                    <p class="text-dark-gray">Developed data models, databases, and API using CodeIgniter and MySQL that it can be integrated by the mobile developer team. Designed dashboard admin according to the needs.</p>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center mt-70">
                    <a target="_blank" href="http://bravass.space/">
                        <img src="<?= base_url('assets/images/logo-bravass.png') ?>" style="width: 300px; margin: 0 auto" alt="Bravass Space">
                    </a>
                    <p class="fs-20 m-0 pb-10 pt-10 fw-900 text-white">Bravass Space</p>
                    <p class="text-dark-gray">Company website with a custom backend system to manage the products, news & events, and gallery to improve control over the sites content using polymer.js.</p>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center mt-70">
                    <a target="_blank" href="https://makaronasnack.com/">
                        <img src="<?= base_url('assets/images/logo-makarona.png') ?>" style="width: 320px;" alt="Makarona Snack">
                    </a>
                    <p class="fs-20 m-0 pb-10 pt-10 fw-900 text-white">Makarona Snack</p>
                    <p class="text-dark-gray">E-commerce website using LEMP stack. This website aims to simplify purchase transactions and make it easier for administrators to update product data from dashboard.</p>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center mt-70">
                    <a target="_blank" href="https://www.inkindo-dki.org/">
                        <img src="<?= base_url('assets/images/logo-inkindo.png') ?>" style="width: 250pxpx; margin: 0 auto" alt="INKINDO DKI Jakarta">
                    </a>
                    <p class="fs-20 m-0 pb-10 pt-10 fw-900 text-white">INKINDO DKI Jakarta</p>
                    <p class="text-dark-gray">Web portal that has a registration feature for the requirements to become a consultant in Jakarta. Using CodeIgniter to create complex system flows also API.</p>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center mt-70">
                    <a target="_blank" href="https://www.agmstore.com/">
                        <img src="<?= base_url('assets/images/logo-agm.png') ?>" style="width: 200px;" alt="AGM Store">
                    </a>
                    <p class="fs-20 m-0 pb-10 pt-10 fw-900 text-white">AGM Store</p>
                    <p class="text-dark-gray">E-commerce website using LAMP stack. Also designed the admin dashboard page to receive transactions from customers.</p>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center mt-70">
                    <a target="_blank" href="http://blog-himti.herokuapp.com/">
                        <img src="<?= base_url('assets/images/logo-himti.png') ?>" style="width: 120px;" alt="Blog HIMTI">
                    </a>
                    <p class="fs-20 m-0 pb-10 pt-10 fw-900 text-white">Blog HIMTI</p>
                    <p class="text-dark-gray">Simple blog website using Bootstrap for the style and Laravel & Postgresql to manage the categories, tags and comments section.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="vertical-center">
                <img class="random-shape" src="<?php echo base_url(); ?>assets/images/random-shape-3.png" alt="" width="500" style="opacity: 0.5">
            </div>
            <h2 class="about-me m-0 text-light-gray text-center fs-45 letter-spacing-1" style="font-weight: 900;">Get In Touch</h2>
            <div class="line"></div>
            <div class="row pt-40">
                <div class="col-md-4 pb-50">
                    <h4 class="fs-20 text-light-gray mb-40" style="font-weight: 900">Contact Info</h4>
                    <a target="_blank" class="icon-contact text-dark-gray" style="width: 100%" href="https://goo.gl/maps/1gf4BkJxXeUCpSdC9">
                        <p class="fs-16 mb-20"><i class="fas fa-map-marker-alt mr-20"></i>Depok, Indonesia</p>
                    </a>
                    <a class="icon-contact text-dark-gray" style="width: 100%" href="#">
                        <p class="fs-16 mb-20"><i class="fas fa-envelope mr-17"></i>goenawan.fredy@gmail.com</p>
                    </a>
                    <a target="_blank" class="icon-contact text-dark-gray" style="width: 100%" href="https://www.linkedin.com/in/fredy-gunawan/">
                        <p class="fs-16 mb-20"><i class="fab fa-linkedin mr-20"></i>linkedin.com/in/fredy-gunawan</p>
                    </a>
                    <a target="_blank" class="icon-contact text-dark-gray" style="width: 100%" href="https://github.com/keleeeep/">
                        <p class="fs-16 mb-20"><i class="fab fa-github mr-20"></i>github.com/keleeeep</p>
                    </a>
                    <a target="_blank" class="icon-contact text-dark-gray" style="width: 100%" href="https://www.kelep.dev/">
                        <p class="fs-16 mb-20"><i class="fas fa-globe mr-20"></i>kelep.dev</p>
                    </a>
                </div>
                <div class="col-md-8">
                    <form name="send_email" method="post" action="<?= base_url('welcome/send') ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="text-dark-gray fs-15">EMAIL</label>
                            <input name="from" style="background: #1b262c; border-color: #2b353b; color: #9f9f9f" type="email" class="form-control" id="exampleInputPassword1" placeholder="Type your email address">
                        </div>
                        <div class="form-group">
                            <label class="text-dark-gray mt-20 fs-15">SUBJECT</label>
                            <input name="subject" style="background: #1b262c; border-color: #2b353b; color: #9f9f9f" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type your subject">
                        </div>
                        <div class="form-group">
                            <label class="text-dark-gray mt-20 fs-15">MESSAGE</label>
                            <textarea name="message" style="background: #1b262c; border-color: #2b353b; color: #9f9f9f" class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Type your message here"></textarea>
                        </div>
                        <button type="submit" class="btn-custom mt-20">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="copyright" style="background: #2b353b; position: relative;">
        <div class="container pl-80 pr-80" style="height: 50px">
            <a href="<?php echo base_url() ?>">
                <footer class="center text-dark-gray fs-12">Copyright &copy; 2020 <span class="text-white fw-500">Fredy Gunawan</span> </footer>
            </a>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/3bc2e700df.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

    <script>
        $(function() {
            $(window).scroll(function() {
                //ADD CLASS
                if ($(".navbar").offset().top > 90) {
                    $(".fixed-top").addClass("top-nav-collapse-scrolled");
                    $(".fixed-top").removeClass("top-nav-collapse");
                } else {
                    $(".fixed-top").addClass("top-nav-collapse");
                    $(".fixed-top").removeClass("top-nav-collapse-scrolled");
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Add scrollspy to <body>
            $('body').scrollspy({
                target: ".navbar",
                offset: 50
            });

            // Add smooth scrolling on all links inside the navbar
            $("#navbarCollapse a").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>

    <script>
        // Wait for the DOM to be ready
        $(function() {
            // Initialize form validation on the registration form.
            // It has the name attribute "registration"
            $("form[name='send_email']").validate({
                // Specify validation rules-->
                rules: {
                    // The key name on the left side is the name attribute
                    // of an input field. Validation rules are defined
                    // on the right side
                    subject: "required",
                    message: "required",
                    from: {
                        required: true,
                        // Specify that email should be validated
                        // by the built-in "email" rule
                        email: true
                    }
                },
                // Specify validation error messages
                messages: {
                    subject: "Please enter your subject",
                    message: "Please enter your message",
                    from: "Please enter a valid email address"
                },
                // Make sure the form is submitted to the destination defined
                // in the "action" attribute of the form when valid
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>
</body>

</html>