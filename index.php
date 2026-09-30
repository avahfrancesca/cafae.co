<?php

$message_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username   = "root";          // Default XAMPP username
    $password   = "";              // Default XAMPP password
    $dbname     = "cafae.co.db";    // Database name

    $conn = new mysqli($servername,$username, $password,$dbname);

    if ($conn->connect_error) {$message_status = "error_conn";
    } else {
        // Sanitize inputs
        $fullname =$conn->real_escape_string(trim($_POST['fullname']));$email    = $conn->real_escape_string(trim($_POST['email']));
        $subject  =$conn->real_escape_string(trim($_POST['subject']));$message  = $conn->real_escape_string(trim($_POST['message']));

        $sql = "INSERT INTO inquiries (fullname, email, subject, message) VALUES ('$fullname', '$email', '$subject', '$message')";

        if ($conn->query($sql) === TRUE) {$message_status = "success";
        } else {
            $message_status = "error_sql";
        }
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafae.Co</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=Space+Grotesk:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-beige text-darkchoco">

    <nav class="navbar navbar-expand-lg navbar-light bg-beige border-bottom border-beige-subtle sticky-top py-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold fs-3 text-darkchoco" href="#home">
                <i class="bi bi-cup-hot-fill text-latte"></i> Cafae.Co
            </a>
            <button class="navbar-toggler border-latte text-darkchoco" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-semibold">
                    <li class="nav-item"><a class="nav-link text-uppercase" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="btn btn-latte ms-lg-3 text-light fw-bold" href="#contact">Book Now</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="badge bg-latte text-light mb-3 px-3 py-2 text-uppercase fs-6">Neighborhood Coffee </span>
                    <h1 class="display-3 fw-extrabold mb-3 text-darkchoco">Great Coffee, <span class="text-latte">Right Around the Corner.</span></h1>
                    <p class="lead text-muted-choco mb-4">Cafae.Co brings rich espresso, smooth specialty cold drinks, and local flavor pairings right to your neighborhood street corner and events.</p>
                    <div class="d-flex gap-3">
                        <a href="#menu" class="btn btn-latte btn-lg text-light fw-bold">Explore Menu</a>
                        <a href="#contact" class="btn btn-outline-darkchoco btn-lg">Contact Cafae.Co</a>
                    </div>

            
                    <div class="card bg-beige-card border-beige-subtle mt-5 p-3 shadow-sm">
                        <h5 class="text-darkchoco mb-3"><i class="bi bi-calendar-week text-latte"></i> Cafae Weekly Schedule</h5>
                        <ul class="list-unstyled mb-0 text-muted-choco fs-6">
                            <li class="d-flex justify-content-between py-1 border-bottom border-beige-subtle">
                                <span>Mon - Wed</span><strong class="text-darkchoco">U-Belt / Katipunan Pop-up(7 AM - 2 PM)</strong>
                            </li>
                            <li class="d-flex justify-content-between py-1 border-bottom border-beige-subtle">
                                <span>Thu - Fri</span><strong class="text-darkchoco">BGC / Makati CBD Plaza(8 AM - 4 PM)</strong>
                            </li>
                            <li class="d-flex justify-content-between py-1">
                                <span>Sat - Sun</span><strong class="text-latte">Legazpi / Salcedo Sunday Market(7 AM - 11 PM)</strong>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 text-center position-relative">
                    <div class="cup-container mx-auto">
                        <div class="steam-container">
                            <div class="steam steam-1"></div>
                            <div class="steam steam-2"></div>
                            <div class="steam steam-3"></div>
                        </div>
                        <div class="cup">
                            <div class="cup-body">
                                <div class="cup-logo">
                                    <i class="bi bi-cup-hot"></i>
                                    <span>Cafae.Co</span>
                                </div>
                            </div>
                            <div class="cup-handle"></div>
                            <div class="cup-saucer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-5 border-bottom border-beige-subtle bg-beige-card">
        <div class="container py-lg-4">
            <div class="text-center mb-5">
                <h2 class="text-darkchoco fw-bold text-uppercase">Our Services</h2>
                <p class="text-muted-choco">Bringing specialty coffee experiences closer to your community and special gatherings.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-beige border-beige-subtle h-100 p-4 service-card shadow-sm">
                        <div class="icon-box text-latte mb-3 fs-1"><i class="bi bi-truck"></i></div>
                        <h4 class="h5 fw-bold text-darkchoco">Coffee Cart Catering</h4>
                        <p class="text-muted-choco">Full mobile espresso bar setup for weddings, corporate events, and private parties.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-beige border-beige-subtle h-100 p-4 service-card shadow-sm">
                        <div class="icon-box text-latte mb-3 fs-1"><i class="bi bi-geo-alt"></i></div>
                        <h4 class="h5 fw-bold text-darkchoco">Campus Pop-ups</h4>
                        <p class="text-muted-choco">On-demand pop-up setups for school fairs, exam weeks, and campus organizations.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-beige border-beige-subtle h-100 p-4 service-card shadow-sm">
                        <div class="icon-box text-latte mb-3 fs-1"><i class="bi bi-box-seam"></i></div>
                        <h4 class="h5 fw-bold text-darkchoco">Bean Subscription</h4>
                        <p class="text-muted-choco">Freshly roasted local coffee beans delivered directly to your doorstep weekly or monthly.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-beige border-beige-subtle h-100 p-4 service-card shadow-sm">
                        <div class="icon-box text-latte mb-3 fs-1"><i class="bi bi-mortarboard"></i></div>
                        <h4 class="h5 fw-bold text-darkchoco">Barista Basics Class</h4>
                        <p class="text-muted-choco">Hands-on workshops covering espresso extraction, milk steaming, and latte art techniques.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="menu" class="py-5 border-bottom border-beige-subtle">
        <div class="container py-lg-4">
            <div class="text-center mb-5">
                <h2 class="text-darkchoco fw-bold text-uppercase">Featured Menu</h2>
                <p class="text-muted-choco">Handcrafted beverages and pairings made with locally sourced beans.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-beige-card border-beige-subtle h-100 overflow-hidden shadow-sm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIzBSL3X5BwZJV0WA3Rp_OGz89pOMVvE5BsQoOjfhDy-Hptv5ESTrDdDw&s=10" class="card-img-top" alt="Matcha Latte">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title fw-bold text-darkchoco mb-0">Matcha Latte</h5>
                                <span class="badge bg-latte text-light fs-6">₱160</span>
                            </div>
                            <p class="card-text text-muted-choco">Stone-ground shade-grown Japanese green tea whisked with silky milk and lightly sweetened. Earthy, smooth, and balanced.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-beige-card border-beige-subtle h-100 overflow-hidden shadow-sm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwtACOrbJKYfAfnsXVEdZxyktazWpJxHQktMfXGJ17ECgKvfOL0D6VRK97&s=10" class="card-img-top" alt=Pistachio Cream Croissant">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title fw-bold text-darkchoco mb-0">Pistachio Cream Croissant</h5>
                                <span class="badge bg-latte text-light fs-6">₱200</span>
                            </div>
                            <p class="card-text text-muted-choco">Golden croissant filled with smooth pistachio frangipane and dusted with crushed roasted pistachios.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-beige-card border-beige-subtle h-100 overflow-hidden shadow-sm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAdsmKFpHcY9-ey-s9KrvHrLPDbYJ6wEPBzEfG3dCanZGhFZ8BAK7rEh0O&s=10" class="card-img-top" alt="Spanish Latte">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title fw-bold text-darkchoco mb-0">Spanish Latte</h5>
                                <span class="badge bg-latte text-light fs-6">₱120</span>
                            </div>
                            <p class="card-text text-muted-choco">Double espresso combined with steamed whole milk and sweetened condensed milk for a rich, silky flavor with a velvety finish.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-beige-card border-beige-subtle h-100 overflow-hidden shadow-sm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwtACOrbJKYfAfnsXVEdZxyktazWpJxHQktMfXGJ17ECgKvfOL0D6VRK97&s=10" class="card-img-top" alt="Pain au Chocolat">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title fw-bold text-darkchoco mb-0">Pain au Chocolat</h5>
                                <span class="badge bg-latte text-light fs-6">₱195</span>
                            </div>
                            <p class="card-text text-muted-choco">Classic French butter pastry wrapped around dark chocolate batons.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-beige-card border-beige-subtle h-100 overflow-hidden shadow-sm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMki1TnlS4QejNy5ODlmWffpzJyKvxCUKqHH5otWbB5jED4rTLu50cE3c&s=10"class="card-img-top" alt="Iced Dark Chocolate Mocha"> 
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title fw-bold text-darkchoco mb-0">Iced Dark Chocolate Mocha</h5>
                                <span class="badge bg-latte text-light fs-6">₱140</span>
                            </div>
                            <p class="card-text text-muted-choco">Rich double espresso poured over Dutch-processed dark chocolate syrup and chilled milk, served iced with a cocoa drizzle.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-beige-card border-beige-subtle h-100 overflow-hidden shadow-sm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJelm7QbGCF36duHGLcdr5HCH72tM6A6ECWWA54CN8EuqEJWgTiZg3oSEc&s=10" class="card-img-top" alt="Matcha Mille Crepe Cake">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title fw-bold text-darkchoco mb-0">Matcha Mille Crepe Cake</h5>
                                <span class="badge bg-latte text-light fs-6">₱265</span>
                            </div>
                            <p class="card-text text-muted-choco">wenty paper-thin Japanese green tea crepes layered with light matcha pastry cream, finished with a dusting of ceremonial-grade matcha powder.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5 border-bottom border-beige-subtle bg-beige-card">
        <div class="container py-lg-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="text-darkchoco fw-bold text-uppercase mb-3">About Cafae.Co</h2>
                    <p class="text-darkchoco leading-relaxed">Cafae.Co brings rich, specialty coffee culture directly to your neighborhood streets and university hubs—delivering premium brews at pocket-friendly prices.</p>
                    <p class="text-muted-choco mb-4">Sourced directly from local farmers in Benguet and Batangas, our beans are roasted in small batches to preserve peak flavor while uplifting Filipino coffee farmers.</p>
                    
                    <div class="card bg-beige border-beige-subtle p-3 shadow-sm">
                        <h5 class="text-darkchoco mb-2"><i class="bi bi-code-slash text-latte"></i> Developer & Founder</h5>
                        <p class="text-darkchoco mb-1 fw-semibold">Web Developer / Project Lead</p>
                        <p class="text-muted-choco small mb-0">Designed and built with Bootstrap 5, CSS animation, and MySQL backend connection (`cafae.co.db`).</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 bg-beige border border-beige-subtle rounded text-center shadow-sm">
                        <i class="bi bi-shop fs-1 text-latte mb-3 d-block"></i>
                        <h4 class="text-darkchoco fw-bold">Beige Aesthetics meets Specialty Coffee</h4>
                        <p class="text-muted-choco">Our soft beige and warm latte palette reflects an inviting, calm, and approachable neighborhood coffee spot.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container py-lg-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="text-darkchoco fw-bold text-uppercase">Contact & Booking</h2>
                        <p class="text-muted-choco">Inquire for catering, pop-ups, subscriptions, or general messages.</p>
                    </div>

                    <?php if ($message_status == "success"): ?>
                        <div class="alert alert-success alert-dismissible fade show bg-success text-white border-0 mb-4" role="alert">
                            <i class="bi bi-check-circle-fill me-2"></i> <strong>Success!</strong> Your inquiry has been submitted!
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>
                    <?php elseif ($message_status == "error_conn"): ?>
                        <div class="alert alert-danger alert-dismissible fade show bg-danger text-white border-0 mb-4" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i> <strong>Database Connection Failed!</strong> Please make sure MySQL is active in XAMPP and database <code>cafae.co.db</code> exists.
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>
                    <?php elseif ($message_status == "error_sql"): ?>
                        <div class="alert alert-warning alert-dismissible fade show bg-warning text-dark border-0 mb-4" role="alert">
                            <i class="bi bi-exclamation-circle-fill me-2"></i> <strong>Database Error!</strong> Table <code>inquiries</code> not found. Please create the table in phpMyAdmin.
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <form action="index.php#contact" method="POST" class="card bg-beige-card border-beige-subtle p-4 p-md-5 shadow-sm">
                        <div class="mb-3">
                            <label for="fullname" class="form-label text-darkchoco">Full Name</label>
                            <input type="text" class="form-control bg-beige text-darkchoco border-beige-subtle" id="fullname" name="fullname" placeholder="Enter Full Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-darkchoco">Email Address</label>
                            <input type="email" class="form-control bg-beige text-darkchoco border-beige-subtle" id="email" name="email" placeholder="Enter Email Address" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label text-darkchoco">Subject / Service</label>
                            <select class="form-select bg-beige text-darkchoco border-beige-subtle" id="subject" name="subject" required>
                                <option value="" selected disabled>Select subject</option>
                                <option value="Coffee Cart Catering">Coffee Cart Catering</option>
                                <option value="Campus Pop-up Request">Campus Pop-up Request</option>
                                <option value="Bean Subscription Inquiry">Bean Subscription Inquiry</option>
                                <option value="Barista Basics Class">Barista Basics Class</option>
                                <option value="General Inquiry">General Inquiry</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label text-darkchoco">Message</label>
                            <textarea class="form-control bg-beige text-darkchoco border-beige-subtle" id="message" name="message" rows="4" placeholder="Tell us about your event date, location, or inquiry details." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-latte btn-lg text-light fw-bold w-100">Submit Inquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4 bg-beige-card border-top border-beige-subtle text-center text-muted-choco">
        <div class="container">
            <p class="mb-0">&copy; 2026 Cafae.Co</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>