<!DOCTYPE html>
<html lang="en">
    
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justice Law Partners</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png')}}" type="image/x-icon">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- Top Contact Bar -->
    <div class="bg-dark">
        <div class="container">
            <div class="row justify-content-center align-item-center pt-2 pb-2">
                <div class="col-4 col-md-4 col-sm-4 col-12 d-flex justify-content-center justify-content-md-start">
                    <span class="fs-6 text-dark text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: #228B22;" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M16.2,16.2L11,13V7H12.5V12.2L17,14.9L16.2,16.2Z"/>
                        </svg>
                        <span class="text-light ms-2">Mon-Fri: 9AM-6PM</span>
                    </span>
                </div>
                <div class="col-4 col-md-4 col-sm-4 col-12 d-flex justify-content-center">
                    <span class="fs-6 text-dark text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: #228B22;" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <span class="text-light ms-2">+92 (336) 7441190</span>
                    </span>
                </div>
                <div class="col-4 col-md-4 col-sm-4 col-12 d-flex justify-content-center justify-content-md-end">
                    <span class="fs-6 text-dark text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="color: #228B22;" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z"/>
                        </svg>
                        <span class="text-light ms-2">Ahjzi</span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <div class="container shadow" style="border-radius: 40px;">
        <nav class="navbar navbar-expand-lg mt-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/images/casewise-logo.png') }}" style="height: 80px;" alt="Justice Law Partners">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link ps-3 text-black fw-bold" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-3 text-black fw-bold" href="#">Practice Areas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-3 text-black fw-bold" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-3 text-black fw-bold" href="#">Our Attorneys</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-3 text-black fw-bold" href="#">Contact</a>
                        </li>
                    </ul>
                    <div>
                        <a href="#consultation" class="btn btn-primary me-2">Free Consultation</a>
                        <a href="{{ route('login') }}" class="btn btn-outline-secondary">Client Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Hero Section -->
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12 col-12 mt-5">
                <div>
                    <h1 style="color: #EF7A15;">Justice Law Partners</h1>
                    <h1 class="hero-head1">Experienced Legal Representation You Can Trust</h1>
                </div>
                <div>
                    <p class="fs-4 mt-4">
                        With over 50 years of combined experience, our team provides exceptional legal services tailored to your specific needs. We fight for your rights and deliver results.
                    </p>
                </div>
                <div class="mt-4">
                    <a href="#consultation" class="btn btn-primary btn-lg me-3">Free Consultation</a>
                    <a href="#practice-areas" class="btn btn-outline-secondary btn-lg">Our Services</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12">
                <img src="{{ asset('assets/images/home-banner.png')}}" class="img-fluid" alt="Legal Team">
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <img src="{{ asset('assets/images/about-img.jpg')}}" class="img-fluid rounded-4 shadow" alt="About Our Firm">
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="ps-lg-5 mt-md-5 mt-sm-5">
                        <span class="badge bg-primary mb-3">ABOUT OUR FIRM</span>
                        <h2 class="mb-4">Committed to Excellence in Legal Representation</h2>
                        <p class="lead">Founded in 1995, Justice Law Partners has been serving clients with dedication and achieving remarkable results in complex legal matters.</p>
                        
                        <div class="d-flex mt-4">
                            <div class="me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#EF7A15" class="mb-2">
                                    <path d="M9,12l2,2l4-4m6-2A10,10 0 0,0 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/>
                                </svg>
                            </div>
                            <div>
                                <h5>Proven Track Record</h5>
                                <p>Over 1,000 successful cases handled with a 95% success rate in litigation matters.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mt-3">
                            <div class="me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#EF7A15" class="mb-2">
                                    <path d="M9,12l2,2l4-4m6-2A10,10 0 0,0 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/>
                                </svg>
                            </div>
                            <div>
                                <h5>Client-Centered Approach</h5>
                                <p>We prioritize your needs and keep you informed at every step of the legal process.</p>
                            </div>
                        </div>
                        
                        <a href="#" class="btn btn-outline-primary mt-4">Learn More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Practice Areas Section -->
    <section id="practice-areas" class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary mb-3">OUR SERVICES</span>
                <h2 class="mb-3">Legal Practice Areas</h2>
                <p class="lead">We provide comprehensive legal services across various specialties to meet all your legal needs.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm" style="background-image: url('{{ asset('assets/images/criminal-img.jpg') }}');">
                    <div class="card-body p-4">
                        <h4 class="mb-3">Criminal Law</h4>
                        <p>Business formation, contracts, mergers & acquisitions, and corporate compliance services.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm" style="background-image: url('{{ asset('assets/images/family-img.png') }}');">
                    <div class="card-body p-4">
                        <h4 class="mb-3">Family Law</h4>
                        <p>Divorce, child custody, adoption, and other family-related legal matters.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm" style="background-image: url('{{ asset('assets/images/criminal-img.jpg') }}');">
                    <div class="card-body p-4">
                        <h4 class="mb-3">Criminal Defense</h4>
                        <p>Aggressive representation for DUI, drug charges, white collar crimes, and more.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm" style="background-image: url('{{ asset('assets/images/land-img.webp') }}');">
                    <div class="card-body p-4">
                        <h4 class="mb-3">Land & Property Law</h4>
                        <p>Property transactions, landlord-tenant disputes, zoning issues, and more.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm" style="background-image: url('{{ asset('assets/images/health-img.jpg') }}');">
                    <div class="card-body p-4">
                        <h4 class="mb-3">General Health Laws</h4>
                        <p>Wills, trusts, probate, and asset protection strategies.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm" style="background-image: url('{{ asset('assets/images/labour-img.jpg') }}');">
                    <div class="card-body p-4">
                        <h4 class="mb-3">Labour Laws</h4>
                        <p>Compensation for accidents, medical malpractice, and wrongful death cases.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="#" class="btn btn-primary btn-lg">View All Practice Areas</a>
        </div>
    </div>
</section>

<style>
.card {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    border-radius: 0.25rem; /* Maintain Bootstrap card border radius */
    overflow: hidden; /* Ensure content doesn't overflow */
}

/* Remove default card body background and padding adjustments */
.card-body {
    background: transparent; /* Remove any background color */
    color: #fff; /* White text for all content */
    position: relative;
    z-index: 2;
}

/* Ensure all text within card-body is white */
.card-body h4,
.card-body p,
.card-body a {
    color: #fff;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7); /* Text shadow for readability */
}

/* Semi-transparent overlay for better text readability */
.card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.01); /* Semi-transparent black overlay */
    z-index: 1;
}

/* Ensure card content is above the overlay */
.card-body > * {
    position: relative;
    z-index: 2;
}
</style>

<style>
.card-body {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    color: #fff; /* White text for better contrast */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7); /* Text shadow for readability */
}

/* Optional: Add a semi-transparent overlay to improve text readability */
.card-body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
    z-index: 1;
}

/* Ensure card content is above the overlay */
.card-body > * {
    position: relative;
    z-index: 2;
}

/* Adjust link color for better visibility */
.card-body a {
    color: #00ccff; /* Bright color for links */
    font-weight: bold;
}
</style>

    <!-- Attorneys Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge bg-primary mb-3">OUR TEAM</span>
                    <h2 class="mb-3">Meet Our Attorneys</h2>
                    <p class="lead">Experienced legal professionals dedicated to your case.</p>
                </div>
            </div>
            
            <div class="swiper attorneySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ asset('assets/images/attorneys/attorney1.jpg')}}" class="card-img-top" alt="John Smith">
                            <div class="card-body text-center">
                                <h5 class="card-title mb-1">John Smith</h5>
                                <p class="text-muted mb-2">Senior Partner</p>
                                <p class="text-primary">Corporate Law Specialist</p>
                                <div class="d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-sm btn-outline-primary me-2">Profile</a>
                                    <a href="#" class="btn btn-sm btn-primary">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ asset('assets/images/attorneys/attorney2.jpg')}}" class="card-img-top" alt="Sarah Johnson">
                            <div class="card-body text-center">
                                <h5 class="card-title mb-1">Sarah Johnson</h5>
                                <p class="text-muted mb-2">Partner</p>
                                <p class="text-primary">Family Law Expert</p>
                                <div class="d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-sm btn-outline-primary me-2">Profile</a>
                                    <a href="#" class="btn btn-sm btn-primary">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ asset('assets/images/attorneys/attorney3.jpg')}}" class="card-img-top" alt="Michael Chen">
                            <div class="card-body text-center">
                                <h5 class="card-title mb-1">Michael Chen</h5>
                                <p class="text-muted mb-2">Partner</p>
                                <p class="text-primary">Criminal Defense Attorney</p>
                                <div class="d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-sm btn-outline-primary me-2">Profile</a>
                                    <a href="#" class="btn btn-sm btn-primary">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ asset('assets/images/attorneys/attorney4.jpg')}}" class="card-img-top" alt="Emily Rodriguez">
                            <div class="card-body text-center">
                                <h5 class="card-title mb-1">Emily Rodriguez</h5>
                                <p class="text-muted mb-2">Associate</p>
                                <p class="text-primary">Real Estate Law</p>
                                <div class="d-flex justify-content-center mt-3">
                                    <a href="#" class="btn btn-sm btn-outline-primary me-2">Profile</a>
                                    <a href="#" class="btn btn-sm btn-primary">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-primary">View All Attorneys</a>
            </div>
        </div>
    </section>

    <!-- Consultation Form -->
    <section id="consultation" class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-4">Request a Free Consultation</h2>
                    <p class="lead mb-4">Complete the form and we'll contact you within 24 hours to discuss your legal needs.</p>
                    
                    <div class="d-flex mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#EF7A15" class="me-3">
                            <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M16.2,16.2L11,13V7H12.5V12.2L17,14.9L16.2,16.2Z"/>
                        </svg>
                        <div>
                            <h5 class="mb-1">Quick Response</h5>
                            <p class="mb-0 text-muted">We respond to all inquiries within 24 hours</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#EF7A15" class="me-3">
                            <path d="M12,3L2,12H5V20H19V12H22L12,3M12,7.7C14.1,7.7 15.8,9.4 15.8,11.5C15.8,14.5 12,18 12,18C12,18 8.2,14.5 8.2,11.5C8.2,9.4 9.9,7.7 12,7.7M12,10A1.5,1.5 0 0,0 10.5,11.5A1.5,1.5 0 0,0 12,13A1.5,1.5 0 0,0 13.5,11.5A1.5,1.5 0 0,0 12,10Z"/>
                        </svg>
                        <div>
                            <h5 class="mb-1">Local Expertise</h5>
                            <p class="mb-0 text-muted">Serving clients throughout the region</p>
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#EF7A15" class="me-3">
                            <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,11.99H19C18.47,16.11 15.72,19.78 12,20.93V12H5V6.3L12,3.19V11.99Z"/>
                        </svg>
                        <div>
                            <h5 class="mb-1">Confidential</h5>
                            <p class="mb-0 text-muted">All consultations are completely confidential</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mt-lg-0 mt-4">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="practice-area" class="form-label">Practice Area</label>
                                    <select class="form-select" id="practice-area">
                                        <option selected>Select an area</option>
                                        <option>Corporate Law</option>
                                        <option>Family Law</option>
                                        <option>Criminal Defense</option>
                                        <option>Real Estate</option>
                                        <option>Estate Planning</option>
                                        <option>Personal Injury</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Brief Description of Your Legal Issue</label>
                                    <textarea class="form-control" id="message" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Request Free Consultation</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge bg-primary mb-3">TESTIMONIALS</span>
                    <h2 class="mb-3">What Our Clients Say</h2>
                    <p class="lead">Hear from people we've helped through difficult legal situations.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#EF7A15" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                            </div>
                            <p class="mb-4 testimonial-quote">"Justice Law Partners handled my divorce with compassion and professionalism. They made a difficult process much easier to navigate."</p>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/clients/client1.jpg')}}" class="rounded-circle me-3" width="50" height="50" alt="Client">
                                <div>
                                    <h6 class="mb-0">Robert Johnson</h6>
                                    <small class="text-muted">Family Law Client</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#EF7A15" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                            </div>
                            <p class="mb-4 testimonial-quote">"The corporate team helped us navigate a complex merger. Their attention to detail and strategic advice was invaluable."</p>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/clients/client2.jpg')}}" class="rounded-circle me-3" width="50" height="50" alt="Client">
                                <div>
                                    <h6 class="mb-0">Sarah Williams</h6>
                                    <small class="text-muted">Corporate Client</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#EF7A15" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                            </div>
                            <p class="mb-4 testimonial-quote">"Facing criminal charges was terrifying, but my attorney fought aggressively for my rights and got the charges reduced."</p>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/clients/client3.jpg')}}" class="rounded-circle me-3" width="50" height="50" alt="Client">
                                <div>
                                    <h6 class="mb-0">Michael Brown</h6>
                                    <small class="text-muted">Criminal Defense Client</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge bg-primary mb-3">FAQS</span>
                    <h2 class="mb-3">Frequently Asked Questions</h2>
                    <p class="lead">Answers to common questions about our legal services.</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    How much do you charge for a consultation?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We offer free initial consultations for most practice areas. During this meeting, we'll discuss your legal issue and determine how we can help.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    What payment options do you offer?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We offer flexible payment options including hourly rates, flat fees for certain services, and payment plans. In personal injury cases, we typically work on a contingency fee basis.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0 shadow-sm">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    How long will my case take?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The duration varies depending on the complexity of your case and whether it goes to trial. Simple matters may resolve in weeks, while complex litigation can take months or years.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="accordion" id="faqAccordion2">
                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    Will I work directly with an attorney?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    Yes, you'll work directly with one of our attorneys throughout your case. We believe in maintaining close communication with our clients.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                    What should I bring to my first meeting?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    Bring any documents related to your case, such as contracts, court papers, or correspondence. Also bring a list of questions and a timeline of events if applicable.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0 shadow-sm">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                    Do you handle cases outside your local area?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion2">
                                <div class="accordion-body">
                                    While we primarily serve clients in our local area, we can handle certain matters in other jurisdictions, particularly corporate and federal cases.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary">View All FAQs</a>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge bg-primary mb-3">LEGAL INSIGHTS</span>
                    <h2 class="mb-3">Recent Legal Articles</h2>
                    <p class="lead">Stay informed with our latest legal updates and insights.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('assets/images/blog/blog1.jpg')}}" class="card-img-top" alt="Blog Post">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Corporate Law</span>
                            <h5 class="card-title">Understanding Business Contracts</h5>
                            <p class="card-text text-muted">Key clauses every business owner should include in their contracts to protect their interests.</p>
                            <a href="#" class="text-primary text-decoration-none">Read Article →</a>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <small class="text-muted">Posted on May 15, 2023</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('assets/images/blog/blog2.jpg')}}" class="card-img-top" alt="Blog Post">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Family Law</span>
                            <h5 class="card-title">Child Custody Guidelines</h5>
                            <p class="card-text text-muted">What factors courts consider when determining child custody arrangements.</p>
                            <a href="#" class="text-primary text-decoration-none">Read Article →</a>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <small class="text-muted">Posted on April 28, 2023</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('assets/images/blog/blog3.jpg')}}" class="card-img-top" alt="Blog Post">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Criminal Law</span>
                            <h5 class="card-title">Your Rights During Arrest</h5>
                            <p class="card-text text-muted">What you should know about your rights if you're arrested or detained by police.</p>
                            <a href="#" class="text-primary text-decoration-none">Read Article →</a>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <small class="text-muted">Posted on April 10, 2023</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="#" class="btn btn-primary">View All Articles</a>
            </div>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#EF7A15" class="me-3 mt-1">
                            <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z"/>
                        </svg>
                        <div>
                            <h5>Our Office</h5>
                            <p class="mb-0 text-muted">123 Legal Avenue, Suite 500<br>Lawyersville, LV 12345</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#EF7A15" class="me-3 mt-1">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <div>
                            <h5>Call Us</h5>
                            <p class="mb-0 text-muted">Main: (555) 123-4567<br>Fax: (555) 123-4568</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#EF7A15" class="me-3 mt-1">
                            <path d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6M20 6L12 11L4 6H20M20 18H4V8L12 13L20 8V18Z"/>
                        </svg>
                        <div>
                            <h5>Email Us</h5>
                            <p class="mb-0 text-muted">info@justicelawpartners.com<br>consult@justicelawpartners.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5" style="background-color: #1f1c35;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/law-logo-white.png')}}" style="height: 40px;" class="mb-3" alt="Justice Law Partners">
                    <p class="text-muted">Providing exceptional legal services since 1995. Committed to justice, excellence, and client satisfaction.</p>
                    <div class="d-flex mt-4" style="gap: 15px;">
                        <a href="#" class="text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z"/></svg></a>
                        <a href="#" class="text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z"/></svg></a>
                        <a href="#" class="text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z"/></svg></a>
                        <a href="#" class="text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.46 12.92,11.24V10.13H10.13V18.5H12.92V13.57C12.92,12.8 13.54,12.17 14.31,12.17A1.4,1.4 0 0,1 15.71,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,5.95 7.81,5.19 6.88,5.19A1.69,1.69 0 0,0 5.19,6.88C5.19,7.81 5.95,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z"/></svg></a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-white mb-3">Practice Areas</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Corporate Law</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Family Law</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Criminal Defense</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Real Estate Law</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Estate Planning</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Personal Injury</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-white mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">About Us</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Our Attorneys</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Testimonials</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Blog</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Careers</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-3">Newsletter</h5>
                    <p class="text-muted">Subscribe to our newsletter for legal updates and firm news.</p>
                    <form class="mb-3">
                        <div class="input-group">
                            <input type="email" class="form-control bg-dark border-secondary text-white" placeholder="Your email">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                    <p class="text-muted small">We respect your privacy. Unsubscribe at any time.</p>
                </div>
            </div>
            
            <hr class="my-4 bg-secondary">
            
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="text-muted mb-0">&copy; 2023 Justice Law Partners. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="text-muted text-decoration-none">Privacy Policy</a></li>
                        <li class="list-inline-item"><span class="text-muted mx-2">•</span></li>
                        <li class="list-inline-item"><a href="#" class="text-muted text-decoration-none">Terms of Service</a></li>
                        <li class="list-inline-item"><span class="text-muted mx-2">•</span></li>
                        <li class="list-inline-item"><a href="#" class="text-muted text-decoration-none">Sitemap</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Initialize Attorney Swiper
        var attorneySwiper = new Swiper(".attorneySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                },
            },
            autoplay: {
                delay: 5000,
            },
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>