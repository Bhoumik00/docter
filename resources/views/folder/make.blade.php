<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobile-Friendly Healthcare App</title>
    
    <!-- Include Bootstrap CSS (you can download it or link to a CDN) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        
        /* Hide scrollbars */
body {
    overflow: hidden;
}


.smartphone .content {
    overflow-y: auto;
    overflow-x:hidden;
}
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

        /* Search input styles */
        .srh {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Specialities styling */
        .column {
            width: 100%;
            padding: 10px;
            text-align: center;
            background-color: #f8f9fa; /* Light gray background */
            border-radius: 10px;
            margin-top: 10px;
        }

        /* Button styling */
        .btn {
            width: 100%;
            max-width: 300px;
            background-color: #007bff; /* Bootstrap primary color */
            border: none;
            border-radius: 5px;
            padding: 10px;
            margin-top: 20px;
            cursor: pointer;
        }

        /* Button text styling */
        .btn a {
            color: white; /* White text for better visibility */
            text-decoration: none;
        }

                 /* Popup styling */
                .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
            justify-content: center;
            align-items: center;
            z-index: 1;
            overflow-y: auto;   
        }

        .popup-content {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            max-height: 80vh; /* Maximum height for the content with scroll bar */
            overflow-y: auto; /* Enable vertical scrolling when needed */
        }
        a:hover{
            text-decoration:none;
        }

        .btn{
            width:150px;
            margin-top:10px;
        }

        .mobile-header {
    background-color: #333;
    color: #fff;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

body {
    margin: 0;
    font-family: 'Arial', sans-serif;
}

.mobile-header {
    background-color: #333;
    color: #fff;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 1.5em;
}

.nav-links {
    display: flex;
    position:fixed; 
    background-color:white;
    margin-left:-100px;
    height:50px;
    padding-top:15px;
    padding-left:15px;
    margin-top:-45px;
    width:310px;
    border-radius:5px;
   
}

.nav-links ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    
}

.nav-links li {
    margin-right: 10px;
}

.nav-links a {
    text-decoration: none;
    color: black;
}

.menu-toggle {
    font-size: 1.5em;
    cursor: pointer;
    display: none;
}

.button{
    margin-left:35px;
    margin-bottom:10px;

}

#btn1{
    width:270px;
}
    </style>
</head>
<body>

<div class="smartphone">
    <div class="content">
    <header class="mobile-header">
        <div class="logo">Your Logo</div>
        <nav class="nav-links">
            <ul>
                <li><a href="#">Clinic </a></li>
                <li><a href="#">Video  </a></li>
                <li><a href="#">Payment</a></li>
                <li><a href="#">Book</a></li>
            </ul>
        </nav>
        <div class="menu-toggle">&#9776;</div>
    </header>
        <input type="search" class="srh" placeholder="Search Symptoms">
        <div class="row">
            <div class="column">
                <div onclick="location.href='#'">
                <img src="{{ asset('image/docter1.jpg') }}" alt="Slide 1">
                <a href="/docter">  <h2>Dr.Bhoumik Sharma</h2>
                    <p>Physician</p></a>
                    <button id="btn" class="btn btn-success"> Contact Hospiital </button>
                    <button id="btn" class="btn btn-primary"> Book Client Visit </button>
                </div>
            </div>

            <div class="column">
                <div onclick="location.href='#'">
                <img src="{{ asset('image/docter1.jpg') }}" alt="Slide 1">
                <a href="/docter">  <h2>Dr.Bhoumik Sharma</h2>
                    <p>Physician</p></a>
                    <button id="btn" class="btn btn-success"> Contact Hospiital </button>
                    <button id="btn" class="btn btn-primary"> Book Client Visit </button>
                </div>
            </div>

            <div class="column">
                <div onclick="location.href='#'">
                <img src="{{ asset('image/docter1.jpg') }}" alt="Slide 1">
                <a href="/docter">  <h2>Dr.Bhoumik Sharma</h2>
                    <p>Physician</p></a>
                    <button id="btn" class="btn btn-success"> Contact Hospiital </button>
                    <button id="btn" class="btn btn-primary"> Book Client Visit </button>
                </div>
            </div>

            <div class="column">
                <div onclick="location.href='#'">
                <img src="{{ asset('image/docter1.jpg') }}" alt="Slide 1">
                <a href="/docter">  <h2>Dr.Bhoumik Sharma</h2>
                    <p>Physician</p></a>
                    <button id="btn" class="btn btn-success"> Contact Hospiital </button>
                    <button id="btn" class="btn btn-primary"> Book Client Visit </button>
                </div>
            </div>

            <div class="column">
                <div onclick="location.href='#'">
                <img src="{{ asset('image/docter1.jpg') }}" alt="Slide 1">
                <a href="/docter">  <h2>Dr.Bhoumik Sharma</h2>
                    <p>Physician</p></a>
                    <button id="btn" class="btn btn-success"> Contact Hospiital </button>
                    <button id="btn" class="btn btn-primary"> Book Client Visit </button>
                </div>
            </div>

            <div class="column">
                <div onclick="location.href='#'">
                <img src="{{ asset('image/docter1.jpg') }}" alt="Slide 1">
                <a href="/docter">  <h2>Dr.Bhoumik Sharma</h2>
                    <p>Physician</p></a>
                    <button id="btn" class="btn btn-success"> Contact Hospiital </button>
                    <button id="btn" class="btn btn-primary"> Book Client Visit </button>
                </div>
</div>
<div class="button">
<button id="btn1" class="btn btn-success" onclick="openPopup()"> Learn How We Book Appontment </button>  
</div>
</div>


<!-- Popup window -->
<div class="popup" id="doctorPopup">
    <div class="popup-content">
    <button onclick="closePopup()">close</button>
        <h3>List of Doctors</h3>
        <ul>
            <a href="#"><li>Covid</li></a>
            <a href="#"><li>skin & Hair</li></a>
            <a href="#"><li>Women's Health</li></a>
            <a href="#"><li>Covid</li></a>
            <a href="#"><li>skin & Hair</li></a>
            <a href="#"><li>Women's Health</li></a>
            <a href="#"><li>Covid</li></a>
            <a href="#"><li>skin & Hair</li></a>
            <a href="#"><li>Women's Health</li></a>
            <a href="#"><li>Covid</li></a>
            <a href="#"><li>skin & Hair</li></a>
            <a href="#"><li>Women's Health</li></a>
        </ul>
        
    </div>
</div>

<script>
    function openPopup() {
        document.getElementById('doctorPopup').style.display = 'flex';
    }

    function closePopup() {
        document.getElementById('doctorPopup').style.display = 'none';
    }

    document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', function () {
        navLinks.classList.toggle('menu-open');
    });
}); 
</script>
</body>
</html>
