<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DentCare - Dental Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="dental/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="dental/lib/animate/animate.min.css" rel="stylesheet">
    <link href="dental/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="dental/lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="dental/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="dental/css/style.css" rel="stylesheet">
</head>

<body>

    @include('home.layout.spinner')

    @include('home.layout.topbar')
    @include('home.layout.navbar')
    @yield('home_content')
    {{-- @include('home.carousel')
    @include('home.banner')
    @include('home.about')
    @include('home.appointment')
    @include('home.service') --}}
    @include('home.layout.footer')
 
    
    @include('home.scrips.jsLibraries')
    @include('home.scrips.jsTemplates')
 
 </body>
 
 </html>