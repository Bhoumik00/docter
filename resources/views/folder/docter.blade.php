<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobile-Friendly Healthcare App</title>
    
    <!-- Include Bootstrap CSS (you can download it or link to a CDN) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>

body {
    overflow: hidden;
}


.smartphone{
    overflow-y: auto;
    overflow-x:hidden;
}
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

        .smartphone .content {
            width: 100%;
            max-height: 100%;
            overflow-y: auto;
            background: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }



        body {
            
            font-family: Arial, sans-serif;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .card {
            width: 200px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-content {
            padding: 15px;
        }
    </style>
</head>
<body>

<div class="smartphone">
    <div class="content">
    <button onclick="redirectToPage()">Back</button>
        <div class="head">
            <h2> Medi Dinesh </h2>
        </div>
        <div class="card">
            <img src="{{ asset('image/docter3.jpg') }}" alt="Image 1">
            <div class="card-content">
                <span class="description">Description</span>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('image/docter.jpg') }}" alt="Image 2">
            <div class="card-content">
                <span class="description">Description 2</span>
            </div>
        </div>
       
        <div class="card">
            <img src="{{ asset('image/docter.jpg') }}" alt="Image 2">
            <div class="card-content">
               <a href=""><span class="description">Description 2</span></a>
            </div>
        </div>
        <div class="grid-container">
  <div class="card">Card 1 Content</div>
  <div class="card">Card 2 Content</div>
  <div class="card">Card 3 Content</div>
 
  <!-- Add more cards as needed -->
</div>        <!-- Add more cards as needed -->
    </div>
</div>

<script>
    function redirectToPage() {
        // Your Laravel condition here
        var condition = true; // Replace with your actual condition

        if (condition) {
            // Redirect to another page
            window.location.href = '/home'; // Replace with the actual URL
        } else {
            window.location.href = '/book';
        }
    }
</script>
</body>
</html>
