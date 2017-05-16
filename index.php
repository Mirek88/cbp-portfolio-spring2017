<?php 
$pdo = new PDO("mysql:host=localhost; dbname=notes; charset=utf8", "root", "rootroot");
var_dump($pdo);
    if($_POST) {
        $stmt = $pdo->prepare("INSERT INTO formportfolio (name, email, phone, message) VALUES (?, ?, ?, ?, NOW())");// in prepare, no variables, just placeholders
        $stmt->execute(array($_POST["name"], $_POST["email"], $_POST["phone"], $_POST["message"]));
        header("Location: index.php");// when I reload the page, form.php will only refresh, not send the data anymore.
        var_dump($_POST);
    }
?>

<!DOCTYPE html>

<html>

<head>
	<title>Miroslav Mráz - web development & project management</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Miroslav Mráz Web development Project management">
    <meta name="author" content="Miroslav Mráz">
    <meta name="keywords" content="web development, full stack, full stack development, web developer brno, developer brno, front end, project management">

    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

<header>
   <div class="header">
        <a class="logo" href="index.html"><img src="./img/logo-grey.png" alt="logo-miroslav-mraz"></a>
        <div class="menu">
            <ul>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#portfolio">MY PROJECTS</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </div>
    </div>
</header>

    <div class="hero-image"><img src="./img/hero-image3.png" style='height: 100%; width: 100%; object-fit: contain' alt="hero-image"/>
        <h1>Hi, I'm Miroslav,</h1>
        <h2>I do webs and project management</h2>
    </div>

    <section class="services" id="services">
    <div class="container">
        <div class="row">
            <h1 class="section-title">What do I offer?</h1>
        <div class="services-wrapper">
            <div class="col-md-4">
                <div class="code-icon"></div>
                <h3>Front-end coding</h3><p>I build fully responsive templates from scratch.</p>
            </div>
			<div class="col-md-4">
                <div class="full-stack"></div>
                <h3>Full-stack web development</h3>
                <p>I provide full website development from A-Z.</p>
            </div>
			<div class="col-md-4">
                <div class="pm"></div>
                <h3>Project management</h3>
                <p>Looking for someone who will take care of your project and manage everything around it?</p>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="portfolio" id="portfolio">
    <div class="container">
        <div class="row">
            <h1>Portfolio</h1>
            <div class="col-md-4">
                <div class="koorzy"><a href="www.koorzy.cz"></a></div>
            </div>
				<div class="col-md-4">
                    <div class="akademie-inovaci"><a href="www.akademie-inovaci.cz"></a></div>
                </div>
				<div class="col-md-4">
                    <div class="prirozene-vcelareni"><a href="www.prirozenevcelareni.cz"></a></div>

                </div>
        </div>
    </div>
    </section>

    <section class="form">
        <form action="" method="post">
    
            <div class="form" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-inner">
                            <div class="form-title">
                                <h2>Send me a message and I will contact you soon!</h2>
                            </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">YOUR NAME</label>
                                    <input type="text" name="name" id="">
                            </div>
                            <div class="col-md-4">
                                <label for="">YOUR EMAIL</label>
                                    <input type="email" name="email" id="">
                            </div>
                            <div class="col-md-4">
                                <label for="">YOUR CELL NUMBER</label>
                                    <input type="text" name="phone" id="">
                            </div>

                            <div class="col-md-12">
                                <label for="">YOUR MESSAGE</label>
                                    <textarea name="message" id="" placeholder="What do you want me to help you with?"></textarea>
                            <button type="submit" method="post" class="button button-green">SEND</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>
    
    <footer>
        <div class="footer" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a class="footer-logo" href="index.html">
                            <img src="./img/logo-grey.png" alt="logo-miroslav-mraz">
                        </a>
                        <p class="phone">cell phone: <a href="tel:+420777xxxxxx" data-fce="event" data-value="cell">+420777xxxxxx</a></p>
                         <p class="mail">email: <a href="info@miroslav.mraz.cz" data-fce="event" data-value="mail">info@miroslav.mraz.cz</a></p>
                   </div>
                     <div class="col-md-4">
                     <div class="footer-title">Services</div>
                         <ul>
                         <li>
                         <a href="#services" data-fce="event">Front-end coding</a>
                         </li>
                         <li>
                         <a href="#services" data-fce="event">Full-stack web development</a>
                         </li>
                         <li>
                         <a href="#services" data-fce="event">Project management</a>
                         </li>
                         </ul>
                    </div>
                     <div class="col-md-4">
                        <div class="footer-title">Navigation</div>
                        <ul>
                         <li>
                         <a href="#services" data-fce="event">Services</a>
                         </li>
                         <li>
                         <a href="#portfolio" data-fce="event">My projects</a>
                         </li>
                         <li>
                         <a href="#contact" data-fce="event">Contact</a>
                         </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            
    </footer>

</body>

</html>