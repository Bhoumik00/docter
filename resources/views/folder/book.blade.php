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
    </style>
</head>
<body>

<div class="smartphone">
    <div class="content">
        <input type="search" class="srh" placeholder="Search Symptoms">
        <div class="row">
            <div class="column">
                <div onclick="location.href='#'">
                <a href="/docter">  <h2>General</h2>
                    <p>Physician</p></a>
                </div>
            </div>
            <div class="column">
                <div onclick="location.href='#'">
                <a href="/fever"> <h2>Fever</h2>
                    <p>Treatment</p></a>
                </div>
            </div>
            <div class="column">
                <div onclick="location.href='#'">
                <a href="#"><h2>Dental</h2>
                    <p>Care</p></a>
                </div>
            </div>
            <div class="column">
                <div onclick="location.href='#'">
                <a href="#"><h2>ENT</h2></a>
                </div>
            </div>
            <div class="column">
                <div onclick="location.href='#'">
                <a href="#"><h2>Mental</h2>
                    <p>Wellness</p></a>
                </div>
            </div>
            <div class="column">
                <div onclick="location.href='#'">
                <a href="#"><h2>Bone </h2>
                    <p>& Joints</p></a>
                </div>
            </div>
        </div>
        <button class="btn" onclick="openPopup()">View all Specialties</button>
    <br></div>
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
</script>
</body>
</html>
