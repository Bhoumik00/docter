<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobile-Friendly Healthcare App</title>
    
    <!-- Include Bootstrap CSS (you can download it or link to a CDN) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        /* The device with borders */
        .smartphone {
            position: relative;
            width: 100%;
            max-width: 360px;
            height: 640px;
            margin: auto;
            border: 16px black solid;
            border-top-width: 60px;
            border-bottom-width: 60px;
            border-radius: 36px;
            overflow: hidden;
        }

        /* The horizontal line on the top of the device */
        .smartphone:before {
            content: '';
            display: block;
            width: 60px;
            height: 5px;
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #333;
            border-radius: 10px;
        }

        /* The circle on the bottom of the device */
        .smartphone:after {
            content: '';
            display: block;
            width: 35px;
            height: 35px;
            position: absolute;
            left: 50%;
            bottom: -65px;
            transform: translate(-50%, -50%);
            background: #333;
            border-radius: 50%;
        }

        /* The screen (or content) of the device */
        .smartphone .content {
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }

        /* Style for the slideshow container */
        .slideshow-container {
            max-width: 100%;
            position: relative;
            margin: auto;
            text-align: center;
            margin-top: 20px;
        }

        /* Style for each slide */
        .mySlides {
            display: none;
        }

        .mySlides img {
            width: 100%;
            border-radius: 10px;
        }

        /* Style for the navigation dots */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            cursor: pointer;
        }

        .active {
            background-color: #717171;
        }

        /* Search input styles */
        .srh {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Button styles */
        .button {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .button button {
            margin-bottom: 10px;
        }

        .button a {
            text-decoration: none;
        }

        .button button, .button a {
            width: 100%;
            padding: 15px;
            border: 2px solid #04AA6D;
            border-radius: 5px;
            font-size: 16px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            background-color: #04AA6D;
        }

        .button button:hover, .button a:hover {
            background-color: #008CBA;
            border-color: #008CBA;
        }
    </style>
</head>
<body>

<div class="smartphone">
    <div class="content">
        <div class="slideshow-container">
            <!-- Slides -->
            <div class="mySlides">
                <img src="{{ asset('image/docter1.jpg') }}" alt="Slide 1">
            </div>

            <div class="mySlides">
                <img src="{{ asset('image/docter.jpg') }}" alt="Slide 2">
            </div>

            <div class="mySlides">
                <img src="{{ asset('image/docter3.jpg') }}" alt="Slide 3">
            </div>

            <!-- Navigation dots -->
            <div style="text-align: center; margin-top: 20px;">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
        <input class="srh" type="search" placeholder="Search for Medicine and lab tests" name="srch"> 
        <div class="button">
            <a href="/book"><button>Book Appointment</button></a>
            <a href="#"><button>Instant Video Consult</button></a>
            <br><br>
        </div>
    </div>
</div>

<script>
    // JavaScript to handle the slideshow functionality
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        const slides = document.getElementsByClassName("mySlides");
        const dots = document.getElementsByClassName("dot");
        
        // Hide all slides
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        
        // Reset and increment the slide index
        slideIndex++;
        
        // If we reach the end, start over
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        
        // Display the current slide
        slides[slideIndex - 1].style.display = "block";
        
        // Highlight the corresponding dot
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        dots[slideIndex - 1].className += " active";
        
        // Set the interval for the next slide (change 3000 to adjust slide duration in milliseconds)
        setTimeout(showSlides, 3000);
    }
</script>

</body>
</html>
