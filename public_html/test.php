<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            overflow-x: hidden;
               background-color:white
               ; /* Black background color */
        }

        header {
            background-color: #9fd9dd;
            padding: 20px;
            text-align: center;
        }

        section {
            padding: 20px;
        }

        h5, h1, p {
            color:black
            ; /* White text color */
        }

        p {
            background-color: grey background color */
            padding: 15px; /* Added padding for better readability */
            border-radius: 5px; /* Rounded corners */
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 15px;
            background-color: #888; /* Grey color */
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            transition: background-color 0.3s ease; /* Smooth transition */
        }

        a:hover {
            background-color: #7acba5; /* Light blue-green color on hover */
        }

        @media only screen and (max-width: 768px) {
            a {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <header>
        <h5>Your Health Is Your Priority</h5>
        <h1>Quality Home Care with Advanced Best Care</h1>
        <p>We will help you to feel better and enjoy every single day of your life.</p>
        <a href="https://wa.me/+254722688126?text=I Want to book a session of an ambulance or homecare services">BOOK NOW</a>
    </header>

    <section>
        <p>Advanced Best Care, a beacon of distinction in the healthcare industry, is committed to delivering personalized and compassionate home health care services.</p>
        <p>Discover the strength of Advanced Best Care's home health care services, tailored for post-surgery recovery, chronic illness management, and compassionate elder care.</p>
                <p>We provide comprehensive homecare services with a team of specialists, including visiting doctors and nurses, available 24/7. Our dedicated assistant nurses and home therapists ensure personalized care, supported by nutritionists to cater to the holistic well-being of our patients.</p></p>
        <p>Rest easy with Advanced Best Care's standby ambulance services, equipped with advanced life support systems and manned by skilled paramedics, ensuring a swift and secure response in emergencies.</p>

    </section>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .container.reverse {
            flex-direction: row-reverse;
        }

        .content {
            flex: 1;
            max-width: 600px;
            background-color: #f0f0f0; /* Set background color for text */
            padding: 20px;
            border-radius: 10px; /* Optional: Add border-radius for a rounded appearance */
        }

        h2 {
            color: #333;
        }

        p {
            color: #555;
        }

        .images {
            flex: 1;
            display: flex;
            justify-content: center;
            overflow: hidden; /* Hide overflow to prevent background color from extending to images */
        }

        .images img {
            max-width: 100%;
            height: auto;
        }

        .images.visible {
            opacity: 1;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
    <title>Homecare Services</title>
</head>
<body>

<div class="container">
    <div class="content">
        <h2>Homecare Services</h2>
        <h3
        >
            Advanced Best Care is dedicated to providing personalized and compassionate home health care services.
            Our team of skilled professionals is committed to ensuring your well-being and recovery in the comfort
            of your own home.
        </h3>
        
    </div>

    <div class="images" id="homecareImages">
        <img src="https://advancedbestcare.000webhostapp.com/homecarenew.jpg" alt="Homecare Services Image">
    </div>
</div>

<div class="container reverse">
    <div class="content">
        <h2>Standby Ambulance Services</h2>
        <h3
        >
            Rest easy with our standby ambulance services. Equipped with advanced life support systems and manned
            by skilled paramedics, we ensure a swift and secure response in emergencies. Your safety is our priority.
        </h3>
    </div>

    <div class="images" id="ambulanceImages">
        <img src="https://advancedbestcare.000webhostapp.com/ambulance.png" alt="Ambulance Services Image">
    </div>
</div>

<script>
    // Intersection Observer to make images visible on scroll
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5 // Adjust threshold as needed
    };

    const homecareObserver = new IntersectionObserver(handleIntersection, observerOptions);
    const ambulanceObserver = new IntersectionObserver(handleIntersection, observerOptions);

    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }

    homecareObserver.observe(document.getElementById('homecareImages'));
    ambulanceObserver.observe(document.getElementById('ambulanceImages'));
</script>
 


</body>
</html>



