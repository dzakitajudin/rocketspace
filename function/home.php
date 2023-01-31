<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Rocket Space</title>
	<meta name="author" content="Dzaki Tajudin" />
	<meta name="description" content="Rocket Space" />
	<meta name="Resource-type" content="Document" />
    <link rel="shortcut icon" href="../assets/img/favicon.png">

    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.css" /> -->
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <!-- External Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/home.css" />
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="../assets/img/rocketspace_logo_kecil.png" height="60">
          Rocket Space
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              News
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" id="article" href="#sec-article">Articles</a>
              <a class="dropdown-item" id="event" href="#sec-event">Events</a>
              <!-- <div class="dropdown-divider"></div> -->
              <a class="dropdown-item" id="aboutus" href="#sec-aboutus">About Us</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Organization
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" id="structure" href="#sec-structure">Structure</a>
              <a class="dropdown-item" id="department" href="#sec-department">Department</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="employee.php">Employee Directory</a>
          </li>
        </ul>
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 0.5em; color: #000">Hello, <?php echo $_COOKIE['FirstName'].' '.$_COOKIE['LastName'];?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" onClick="return logout();">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- </header> -->
    <section id="intro">
        <div class="animation-logo">
            <img src="../assets/img/homepage_rocketspace_large.png" class="">
        </div>
        <div class="body-text">
            <p style="font-size: 35px;margin-left: -2em">Learn Together</p>
            <p>Explore More</p>
            <p style="font-size: 40px;margin-left: -2em">Success In The Future</p>
          <!-- <button type="button" class="btn btn-learnmore">Learn More</button> -->
        </div>
        <div id="intro-scroll">
        <p class="pulse">Scroll down</p>
        </div>
    </section>
    <section id="sec-event">
        <h1>Event</h1>
        <!-- <div class="dept-container"> -->
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../assets/img/event1.png" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Innovation & Technology Webinar</h5>
                                <p>Lets Talk About The Future</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/event2.png" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Conference Webinar Online</h5>
                                <p>Join The Webinar With Us</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/event3.png" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Choose Your Destination Webinar</h5>
                                <p>A Great Experience</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                </div>
            </div>
        <!-- </div> -->
    </section>
    <section id="sec-article">
        <h1>Article</h1>
        <div class="dept-container">
            <div class="row">
                <div class="card card-article mb-3">
                    <img class="card-img-top" src="../assets/img/article1.png" alt="Article1">
                    <div class="card-body">
                        <h5 class="card-title">Web Programming</h5>
                        <p class="card-text">A web developer is a person in charge of creating and developing websites, or in other terms web development.</p>
                        <a href="#" class="btn btn-article">Read More...</a>
                    </div>
                </div>
                <div class="card card-article mb-3">
                    <img class="card-img-top" src="../assets/img/article2.png" alt="Article2">
                    <div class="card-body">
                        <h5 class="card-title">Digital Content</h5>
                        <p class="card-text">Digital content is any content that exists in the form of digital data. Also known as digital media, digital content is stored on digital or analog storage in specific formats.</p>
                        <a href="#" class="btn btn-article">Read More...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec-structure">
        <h1>Company Structure</h1>
        <div class="dept-container">
            <div class="row">
                <div class="cards" style="justify-content: space-evenly !important;">     
                    <div class="card card-structure expandUp" id="department-card">
                        <img src="../assets/img/department.png" alt="Departments">
                        <div class="card-content">
                        <h5>10 Departments</h5>
                        </div><!-- .card-content -->
                    </div><!-- .card -->
                    <div class="card card-structure expandUp">
                        <img src="../assets/img/division.png" alt="Divisions">
                        <div class="card-content">
                            <h5>5 Divisions</h5>
                        </div><!-- .card-content -->
                    </div><!-- .card -->
                    <div class="card card-structure expandUp">
                        <img src="../assets/img/employees.png" alt="Employees">
                        <div class="card-content">
                        <h5>1000 Employees</h5>
                        </div><!-- .card-content -->
                    </div><!-- .card -->
                </div><!-- .cards -->
            </div>
            <div class="row">
                <img src="../assets/img/structure.png" alt="Structure" style="width: 100%">
            </div>
        </div>
    </section>
    <section id="sec-department">
        <h1>Department</h1>
        <div class="dept-container">
        <div class="row">
            <div class="cards">     
            <div class="card">
                <img src="../assets/img/hr.png" alt="Human Resource">
                <div class="card-content">
                <h5>Human Resource</h5>
                <div>
                    <button id="btnHr">Details</button>
                </div>
                </div><!-- .card-content -->
            </div><!-- .card -->
            <div class="card">
                <img src="../assets/img/finance.png" alt="Finance">
                <div class="card-content">
                    <h5>Finance</h5>
                <div>
                    <button id="btnFinance">Details</button>
                </div>
                </div><!-- .card-content -->
            </div><!-- .card -->
            <div class="card">
                <img src="../assets/img/it.png" alt="It">
                <div class="card-content">
                <h5>Information Technology</h5>
                <div>
                    <button id="btnIt">Details</button>
                </div>
                </div><!-- .card-content -->
            </div><!-- .card -->
            <div class="card">
                <img src="../assets/img/mb.png" alt="Mb">
                <div class="card-content">
                <h5>Management Business</h5>
                <div>
                    <button id="btnMb">Details</button>
                </div>
                </div><!-- .card-content -->
            </div><!-- .card -->
            <div class="card">
                <img src="../assets/img/legal.png" alt="Legal">
                <div class="card-content">
                <h5>Legal</h5>
                <div>
                    <button id="btnLegal">Details</button>
                </div>
                </div><!-- .card-content -->
            </div><!-- .card -->
            <div class="card">
                <img src="../assets/img/qa.png" alt="Qa">
                <div class="card-content">
                    <h5>Quality Assurance</h5>
                <div>
                    <button id="btnQa">Details</button>
                </div>
                </div><!-- .card-content -->
            </div><!-- .card -->
            <div class="card">
                <img src="../assets/img/marketing.png" alt="Marketing">
                <div class="card-content">
                    <h5>Marketing</h5>
                <div>
                    <button id="btnMarketing">Details</button>
                </div>
                </div><!-- .card-content -->
            </div><!-- .card -->
            <div class="card">
                <img src="../assets/img/creative.png" alt="Creative">
                <div class="card-content">
                    <h5>Creative</h5>
                <div>
                    <button id="btnCreative">Details</button>
                </div>
                </div><!-- .card-content -->
            </div><!-- .card -->
            <div class="card">
                <img src="../assets/img/bd.png" alt="Bd">
                <div class="card-content">
                    <h5>Business Development</h5>
                <div>
                    <button id="btnBd">Details</button>
                </div>
                </div><!-- .card-content -->
            </div><!-- .card -->
            <div class="card">
                <img src="../assets/img/audit.png" alt="Audit">
                <div class="card-content">
                    <h5>Audit</h5>
                <div>
                    <button id="btnAudit">Details</button>
                </div>
                </div><!-- .card-content -->
            </div><!-- .card -->
            </div><!-- .cards -->
        </div>
        </div>
        <!-- The Modal -->
        <div class="modalHr" id="modalHr">
        <!-- Modal Content -->
        <div class="modal-content-hr">
            <div class="modal-container-hr">
            <span class="closeHr">&times;</span>
            <!-- <img src="../assets/img/hr.png" alt="HR" id="hrmodal" class="shadow expandUp"> -->
            <div class="hr-desc">
                <h2>Human Resource Job Description</h2>
                <p>Group who is responsible for managing the employee life cycle (i.e., recruiting, hiring, onboarding, training, and firing employees) and administering employee benefits.</p>
            </div>
            </div>
        </div>
        </div>
        <div class="modalFinance" id="modalFinance">
        <!-- Modal Content -->
        <div class="modal-content-finance">
            <div class="modal-container-finance">
            <span class="closeFinance">&times;</span>
            <!-- <img src="img/Finance.png" alt="Finance" id="financemodal" class="shadow expandUp"> -->
            <div class="finance-desc">
                <h2>Finance Job Description</h2>
                <p>Financial officers are in charge of overseeing the financial transactions of a company. We have 1 division :</p>
                <p>1. Accounting</p>
            </div>
            </div>
        </div>
        </div>
        <div class="modalIt" id="modalIt">
        <!-- Modal Content -->
        <div class="modal-content-it">
            <div class="modal-container-it">
            <span class="closeIt">&times;</span>
            <!-- <img src="img/it.png" alt="it" id="itmodal" class="shadow expandUp"> -->
            <div class="it-desc">
                <h2>Information Technology Job Description</h2>
                <p>Responsible in providing technical support and ensuring the whole company runs smoothly. We have 2 division : </p>
                <p>1. Enterprise Division</p>
                <p>2. Operational Support</p>
            </div>
            </div>
        </div>
        </div>
        <div class="modalMb" id="modalMb">
        <!-- Modal Content -->
        <div class="modal-content-mb">
            <div class="modal-container-mb">
            <span class="closeMb">&times;</span>
            <!-- <img src="img/mb.png" alt="mb" id="mbmodal" class="shadow expandUp"> -->
            <div class="mb-desc">
                <h2>Management Business Job Description</h2>
                <p>Who controls and directs the personnel and activities of an organization or a department.</p>
            </div>
            </div>
        </div>
        </div>
        <div class="modalLegal" id="modalLegal">
        <!-- Modal Content -->
        <div class="modal-content-legal">
            <div class="modal-container-legal">
            <span class="closeLegal">&times;</span>
            <!-- <img src="img/mb.png" alt="mb" id="mbmodal" class="shadow expandUp"> -->
            <div class="legal-desc">
                <h2>Legal Job Description</h2>
                <p>Make and review company legal documents based on laws and regulations applicable.</p>
            </div>
            </div>
        </div>
        </div>
        <div class="modalQa" id="modalQa">
        <!-- Modal Content -->
        <div class="modal-content-qa">
            <div class="modal-container-qa">
            <span class="closeQa">&times;</span>
            <!-- <img src="img/mb.png" alt="mb" id="mbmodal" class="shadow expandUp"> -->
            <div class="qa-desc">
                <h2>Quality Assurance Job Description</h2>
                <p>responsible for monitoring, inspecting and proposing measures to correct or improve an organization's final products in order to meet established quality standards.</p>
            </div>
            </div>
        </div>
        </div>
        <div class="modalMarketing" id="modalMarketing">
        <!-- Modal Content -->
        <div class="modal-content-marketing">
            <div class="modal-container-marketing">
            <span class="closeMarketing">&times;</span>
            <!-- <img src="img/mb.png" alt="mb" id="mbmodal" class="shadow expandUp"> -->
            <div class="marketing-desc">
                <h2>Marketing Job Description</h2>
                <p>responsible for planning, creating, and executing marketing campaigns to expand their company’s reach and potential customer pipeline.</p>
            </div>
            </div>
        </div>
        </div>
        <div class="modalCreative" id="modalCreative">
        <!-- Modal Content -->
        <div class="modal-content-creative">
            <div class="modal-container-creative">
            <span class="closeCreative">&times;</span>
            <!-- <img src="img/mb.png" alt="mb" id="mbmodal" class="shadow expandUp"> -->
            <div class="creative-desc">
                <h2>Creative Job Description</h2>
                <p>responsible for generating attention-grabbing ideas that will entice the consumer or target audience. Members of the team work together to develop conceptual campaigns designed to stand apart from competitors. Whe have 2 division :</p>
                <p>1. Digital Content</p>
                <p>2. Animation Graphic</p>
            </div>
            </div>
        </div>
        </div>
        <div class="modalBd" id="modalBd">
        <!-- Modal Content -->
        <div class="modal-content-bd">
            <div class="modal-container-bd">
            <span class="closeBd">&times;</span>
            <!-- <img src="img/mb.png" alt="mb" id="mbmodal" class="shadow expandUp"> -->
            <div class="bd-desc">
                <h2>Business Development Job Description</h2>
                <p>responsible for helping organizations obtain better brand recognition and financial growth. They coordinate with company executives and sales & marketing professionals to review current market trends in order to propose new business ideas that can improve revenue margins.</p>
            </div>
            </div>
        </div>
        </div>
        <div class="modalAudit" id="modalAudit">
        <!-- Modal Content -->
        <div class="modal-content-audit">
            <div class="modal-container-audit">
            <span class="closeAudit">&times;</span>
            <!-- <img src="img/mb.png" alt="mb" id="mbmodal" class="shadow expandUp"> -->
            <div class="audit-desc">
                <h2>Audit Job Description</h2>
                <p>checking that financial reports and records are accurate and reliable. ensuring that assets are protected. identifying if and where processes are not working as they should and advising on changes to be made. preparing reports, commentaries and financial statements.</p>
            </div>
            </div>
        </div>
        </div>
    </section>
    <section id="sec-aboutus">
        <div class="dept-container">
        <h1>Vision</h1>
        <div class="about1">
            <p>Our vision is to become the best and biggest IT consulting company, and become a field of work for people out there who need it</p>
            <img src="../assets/img/vision.png" alt="vision" id="vision">
        </div>
        <div class="about2">
            <img src="../assets/img/mision.png" alt="mission" id="mission">
            <h1>Mission</h1>
            <p>helping many people who have skills according to their talents. and make them feel comfortable in this company.</p>
        </div>
        <div class="author">
            <div class="mb-wrap mb-style-3">
            <div class="mb-thumb"></div>
            <blockquote>
                <p>as the name implies, Rocket Space. It is hoped that it will always fly in the air to a farther level.</p>
            </blockquote>
            <div class="mb-attribution">
                <!-- <p class="mb-author">Name</p> -->
                <p style="color: #5b5a5a;font-weight: bold">Founder</p>
            </div>
            </div>
        </div>
        </div>
    </section>
    <div class="footer">
      <p class="copyright">Copyright Rocket Space &copy;<?php echo date("Y"); ?></p>
    </div>
    <div onclick="topFunction()" id="gototop" title="Jump To Top"><img src="../assets/img/arrowup.svg"></div>

    <!-- ==================== MODAL ERROR ======================================= -->

    <!-- Token Expired -->
    <div class="modal fade" id="modal-login-token-expired" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" style="color: #2972b3;font-weight: bold">Rocket Space: Info</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Token Expired. Please Login again</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal" onClick="return redirect_index();">Close</button>
        </div>
        </div>
    </div>
    </div>

<!-- Optional JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<!-- External Js -->
<script src="../assets/js/home.js"></script>
</body>
</html>