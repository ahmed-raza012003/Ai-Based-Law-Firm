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
                    <img src="{{ asset('assets/images/casewiselogo.png') }}" style="height: 80px;" alt="Justice Law Partners">
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
                            <a class="nav-link ps-3 text-black fw-bold" href="#practice-areas">Practice Areas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-3 text-black fw-bold" href="#about-section">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-3 text-black fw-bold" href="#attorneys">Our Attorneys</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-3 text-black fw-bold" href="#faqs">FAQs</a>
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
                    <h1 style="color: #8B6508;">CaseWise Legal Solutions</h1>
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
                <img src="{{ asset('assets/images/home.png')}}" class="img-fluid" alt="Legal Team">
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section id="about-section" class="py-5 my-5" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <img src="{{ asset('assets/images/about-img.jpg')}}" class="img-fluid rounded-4 shadow" alt="About Our Firm">
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="ps-lg-5 mt-md-5 mt-sm-5">
                        <span class="badge mb-3" style="background-color: #8B6508;" >ABOUT OUR FIRM</span>
                        <h2 class="mb-4">Committed to Excellence in Legal Representation</h2>
                        <p class="lead">Founded in 1995, Justice Law Partners has been serving clients with dedication and achieving remarkable results in complex legal matters.</p>
                        
                        <div class="d-flex mt-4">
                            <div class="me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#8B6508" class="mb-2">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#8B6508" class="mb-2">
                                    <path d="M9,12l2,2l4-4m6-2A10,10 0 0,0 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"/>
                                </svg>
                            </div>
                            <div>
                                <h5>Client-Centered Approach</h5>
                                <p>We prioritize your needs and keep you informed at every step of the legal process.</p>
                            </div>
                        </div>
                       
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
                    <span class="badge mb-3" style="background-color: #8B6508;">OUR SERVICES</span>
                    <h2 class="mb-3">Legal Practice Areas</h2>
                    <p class="lead">Comprehensive legal expertise tailored to your needs.</p>
                </div>
            </div>
    
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm" style="background-image: url('{{ asset('assets/images/election.jpg') }}');">
                        <div class="card-body p-4">
                            <h4 class="mb-3">Election Laws</h4>
                            <p class="small">Legal support for candidates, campaigns, and electoral disputes.</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm" style="background-image: url('{{ asset('assets/images/family.jpg') }}');">
                        <div class="card-body p-4">
                            <h4 class="mb-3">Family Law</h4>
                            <p class="small">Assistance with divorce, custody, and family agreements.</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm" style="background-image: url('{{ asset('assets/images/criminal.jpg') }}');">
                        <div class="card-body p-4">
                            <h4 class="mb-3">Criminal Laws</h4>
                            <p class="small">Defense in criminal charges, bail, and legal rights protection.</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm" style="background-image: url('{{ asset('assets/images/land.jfif') }}');">
                        <div class="card-body p-4">
                            <h4 class="mb-3">Land & Property Law</h4>
                            <p class="small">Property deals, disputes, and legal title verification.</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm" style="background-image: url('{{ asset('assets/images/health-img.jpg') }}');">
                        <div class="card-body p-4">
                            <h4 class="mb-3">General Health Laws</h4>
                            <p class="small">Legal support in medical rights, ethics, and compliance.</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm" style="background-image: url('{{ asset('assets/images/labour-img.jpg') }}');">
                        <div class="card-body p-4">
                            <h4 class="mb-3">Labour Laws</h4>
                            <p class="small">Employment rights, contracts, and workplace disputes.</p>
                        </div>
                    </div>
                </div>
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
    <section id="attorneys" class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-8 mx-auto">
                    <span class="badge mb-3" style="background-color: #8B6508;">OUR TEAM</span>
                    <h2 class="mb-3">Meet Our Attorneys</h2>
                    <p class="lead">Experienced legal professionals dedicated to your case.</p>
                </div>
            </div>
    
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @php
                    $attorneys = [
                        [
                            'name' => 'Babar Awan',
                            'title' => 'Senior Advocate',
                            'expertise' => 'Criminal Law',
                            'image' => 'lawyer5.jfif'
                        ],
                        [
                            'name' => 'Latif Khosa',
                            'title' => 'Lawyer & Politician',
                            'expertise' => 'Former Governor Punjab',
                            'image' => 'lawyer6.jfif'
                        ],
                        [
                            'name' => 'Afrasiab Khattak',
                            'title' => 'Lawyer & Politician',
                            'expertise' => 'Human Rights Advocate',
                            'image' => 'lawyer3.jfif'
                        ],
                        [
                            'name' => 'Amir Ali Majid',
                            'title' => 'Lawyer & Author',
                            'expertise' => 'Islamic Law Specialist',
                            'image' => 'lawyer4.jfif'
                        ],
                        [
                            'name' => 'Abdul Hafiz Pirzada',
                            'title' => 'Barrister & Politician',
                            'expertise' => 'Architect of Constitution',
                            'image' => 'lawyer2.jpg'
                        ],
                        [
                            'name' => 'New Attorney',
                            'title' => 'Advocate',
                            'expertise' => 'Civil Law',
                            'image' => 'lawyer1.jpg'
                        ],
                    ];
                @endphp
    
                @foreach($attorneys as $attorney)
                    <div class="col">
                        <div class="card partner-card border-0 h-100 text-center p-3">
                            <img src="{{ asset('assets/images/' . $attorney['image']) }}" class="partner-img mx-auto" alt="{{ $attorney['name'] }}">
                            <h5 class="fw-bold mt-3 mb-1">{{ $attorney['name'] }}</h5>
                            <p class="text-muted mb-1">{{ $attorney['title'] }}</p>
                            <p class="text mb-0" style="color: #8B6508;">{{ $attorney['expertise'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <style>
        .partner-card {
            transition: box-shadow 0.3s ease-in-out;
            border-radius: 10px;
        }
    
        .partner-card:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
    
        .partner-img {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
    
    
    

    <!-- Consultation Form -->
    <section id="consultation" class="py-4 text-white" style="background-color: #1f1c35;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-3">Request a Free Consultation</h2>
                    <p class="mb-3" style="font-size: 0.95rem;">Complete the form and we'll contact you within 24 hours to discuss your legal needs.</p>
    
                    <div class="d-flex mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#EF7A15" class="me-2">
                            <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M16.2,16.2L11,13V7H12.5V12.2L17,14.9L16.2,16.2Z"/>
                        </svg>
                        <div>
                            <h6 class="mb-1">Quick Response</h6>
                            <p class="mb-0 text-muted small">We respond to all inquiries within 24 hours</p>
                        </div>
                    </div>
    
                    <div class="d-flex mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#EF7A15" class="me-2">
                            <path d="M12,3L2,12H5V20H19V12H22L12,3M12,7.7C14.1,7.7 15.8,9.4 15.8,11.5C15.8,14.5 12,18 12,18C12,18 8.2,14.5 8.2,11.5C8.2,9.4 9.9,7.7 12,7.7M12,10A1.5,1.5 0 0,0 10.5,11.5A1.5,1.5 0 0,0 12,13A1.5,1.5 0 0,0 13.5,11.5A1.5,1.5 0 0,0 12,10Z"/>
                        </svg>
                        <div>
                            <h6 class="mb-1">Local Expertise</h6>
                            <p class="mb-0 text-muted small">Serving clients throughout the region</p>
                        </div>
                    </div>
    
                    <div class="d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#EF7A15" class="me-2">
                            <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,11.99H19C18.47,16.11 15.72,19.78 12,20.93V12H5V6.3L12,3.19V11.99Z"/>
                        </svg>
                        <div>
                            <h6 class="mb-1">Confidential</h6>
                            <p class="mb-0 text-muted small">All consultations are completely confidential</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 mt-lg-0 mt-4">
                    <div class="card shadow border-0" style="background-color: #1f1c35;">
                        <div class="card-body p-3">
                            <form>
                                <div class="mb-2">
                                    <label for="name" class="form-label small text-white">Full Name</label>
                                    <input type="text" class="form-control form-control-sm bg-dark text-white border-secondary" id="name" required>
                                </div>
                                <div class="mb-2">
                                    <label for="email" class="form-label small text-white">Email Address</label>
                                    <input type="email" class="form-control form-control-sm bg-dark text-white border-secondary" id="email" required>
                                </div>
                                <div class="mb-2">
                                    <label for="phone" class="form-label small text-white">Phone Number</label>
                                    <input type="tel" class="form-control form-control-sm bg-dark text-white border-secondary" id="phone">
                                </div>
                                <div class="mb-2">
                                    <label for="practice-area" class="form-label small text-white">Practice Area</label>
                                    <select class="form-select form-select-sm bg-dark text-white border-secondary" id="practice-area">
                                        <option selected>Select an area</option>
                                        <option>Family Laws</option>
                                        <option>Criminal laws</option>
                                        <option>Land & Property Laws</option>
                                        <option>Labour Laws</option>
                                        <option>General Health Laws</option>
                                        <option>Election Laws</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label small text-white">Brief Description of Your Legal Issue</label>
                                    <textarea class="form-control form-control-sm bg-dark text-white border-secondary" id="message" rows="2"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm w-100">Request Free Consultation</button>
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
                    <span class="badge mb-3" style="background-color: #8B6508;">TESTIMONIALS</span>
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
                            <p class="mb-4 testimonial-quote">"Justice Law Partners handled my divorce with compassion. They made a difficult process much easier to navigate."</p>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/client1.jfif')}}" class="rounded-circle me-3" width="50" height="50" alt="Client">
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
                                <img src="{{ asset('assets/images/client2.png')}}" class="rounded-circle me-3" width="50" height="50" alt="Client">
                                <div>
                                    <h6 class="mb-0">Sarah Williams</h6>
                                    <small class="text-muted">Labour Law Client</small>
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
                                <img src="{{ asset('assets/images/client3.jpg')}}" class="rounded-circle me-3" width="50" height="50" alt="Client">
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
    <section id="faqs" class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge mb-3" style="background-color: #8B6508;">FAQS</span>
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
            
            {{-- <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary">View All FAQs</a>
            </div> --}}
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 text-white" style="background-color: #1f1c35; font-size: 0.9rem;">
        <div class="container">
            <div class="row">
                <!-- Logo and Description -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="{{ asset('assets/images/casewise-logo.png')}}" style="height: 70px;" class="mb-3" alt="Casewise Legal Solutions">
                    <p class="text-white">Casewise Legal Solutions is committed to providing expert legal counsel across diverse practice areas. Your justice is our priority.</p>
                </div>
    
                <!-- Practice Areas -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="mb-3 text-white">Practice Areas</h6>
                    <ul class="list-unstyled text-white">
                        <li class="mb-2">Criminal Laws</li>
                        <li class="mb-2">Family Laws</li>
                        <li class="mb-2">Labour Laws</li>
                        <li class="mb-2">Land & Property Laws</li>
                        <li class="mb-2">Election Laws</li>
                        <li class="mb-2">General Health Laws</li>
                    </ul>
                </div>
    
                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="mb-3 text-white">Contact</h6>
                    <p class="text-white mb-2"><i class="bi bi-geo-alt-fill me-2"></i>Rahim Yar Khan, Pakistan</p>
                    <p class="text-white mb-2"><i class="bi bi-telephone-fill me-2"></i>+92 304 8237137</p>
                    <p class="text-white"><i class="bi bi-envelope-fill me-2"></i>info@casewiselegal.com</p>
                </div>
    
                <!-- Live Chat CTA -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="mb-3 text-white">Need Help?</h6>
                    <p class="text-white">Start a conversation with our legal team. We're here to assist you.</p>
                    <a href="#" class="btn btn-sm" style="background-color: #8B6508;">Free Consultancy</a>
                    <div class="d-flex mt-3" style="gap: 15px;">
                        <a href="#" class="text-white"><i class="bi bi-facebook fs-6"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-instagram fs-6"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-twitter-x fs-6"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-linkedin fs-6"></i></a>
                    </div>
                </div>
            </div>
    
            <hr class="bg-light my-4">
    
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="text-white mb-0">&copy; 2025 Casewise Legal Solutions. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list-inline mb-0 small">
                        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
                        <li class="list-inline-item"><span class="text-white mx-2">|</span></li>
                        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Terms of Use</a></li>
                        <li class="list-inline-item"><span class="text-white mx-2">|</span></li>
                        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
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