<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="./styles.css" rel="stylesheet">
    <link href="contact.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@200&family=Dancing+Script&family=Nanum+Myeongjo&family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
  
  <!--Font for icons on contact page-->
    <link rel="stylesheet" href="fonts/icomoon/style.css" />


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
            
  <!-- Style -->
  <link rel="stylesheet" href="css/contact.css" />

    <title>Contact Me</title>
  </head>
    
    
  <body id="showcase">
    
    <!--Navigation-->

    <nav class="navbar navbar-expand-lg navbar-light navigation fixed-top bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><img src="./photos/teianna-marie-photos/teianna-marie-treasures-crown.jpg" class="crownNav"></a>
        <button class="navbar-toggler" id="navToggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0 mr-5">
            <li class="nav-item">
              <a class="nav-link" href="index.php"><span class="navigationLinks">Home</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " href="workshops.php" id="navbarDropdown" role="button" aria-expanded="false">
                <span class="navigationLinks">Workshops</span>
              </a>
              
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="navigationLinks">Shop</span>
              </a>
              <ul class="dropdown-menu dropdownForNavbar" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item yellow-dropdown-item" href="ebooks.php">Ebooks</a></li>
                <li><a class="dropdown-item yellow-dropdown-item" href="products.php">Products</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item tc" href="treasureclub.php">Treasure Chest</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true"><span class="navigationLinks">Contact</span></a>
            </li>
          </ul>
          <div class="ms-auto">
            <a href="https://www.facebook.com/TeinamarriesTreasures/" class="fa fa-facebook socialIconNav fs-3"></a>
            <a href="https://www.instagram.com/teinamarrie/" class="fa fa-instagram socialIconNav fs-3"></a>
            <a href="#" class="fa fa-youtube socialIconNav fs-3"></a>
            <a href="https://www.linkedin.com/in/teinamarrie-scuderi/" class="fa fa-linkedin socialIconNav fs-3"></a>
          </div>

        </div>
      </div>
    </nav>

    

    <!--Background Header-->

    <header>
      <div class="row">
        <div class="fixed-bottom" id="bottom-images">
        <img src="./photos/teianna-marie-photos/teianna-marie-treasures-left-4.jpg" id="left" class="img-fluid" alt="">
        <img src="./photos/teianna-marie-photos/teianna-marie-treasures-right-4.jpg" id="right" class="img-fluid float-end">
        </div>
      </div>
    </header>

    <!--Main Article-->
    <body>
        <div class="content">
          <div class="container">
            <div class="row align-items-stretch no-gutters contact-wrap">
              <div class="col-md-8">
                <div class="form h-100">
                  <h3>Send me a message</h3>
                  <form
                    class="mb-5"
                    method="post"
                    id="contactForm"
                    name="contactForm"
                    action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" onsubmit="event.preventDefault(); validateContact();"
                  >
                    <div class="row">
                      <div class="col-md-6 form-group mb-5">
                        <label for="" class="col-form-label">Name</label>
                        <input
                          type="text"
                          class="form-control"
                          name="name"
                          id="name"
                          placeholder="Your name"/>
                      </div>
                      <div class="col-md-6 form-group mb-5">
                        <label for="" class="col-form-label">Email</label>
                        <input
                          type="text"
                          class="form-control"
                          name="email"
                          id="email"
                          placeholder="Your email"/>
                      </div>
                    </div>
      
                    <div class="row">
                           <div class="col-md-6 form-group mb-5">
                             <label for="" class="col-form-label">Phone</label>
                             <input type="text" class="form-control" name="phone" id="phone"  placeholder="Phone #">
                           </div>
                           <div class="col-md-6 form-group mb-5">
                             <label for="" class="col-form-label">Company</label>
                             <input type="text" class="form-control" name="company" id="company"  placeholder="Company  name">
                           </div>
                         </div>

                        <div class="row">
                          <div class="col-md-12 form-group mb-5">
                            <label for="reasonForContact" class="col-form-label">Reason for Contact</label>
                            <select class="custom-select" id="reasonForContact" name="reasonForContact">
              <option selected>Choose...</option>
              <option value="eventBooking">Event Booking</option>
              <option value="findYourTreasure">Find Your Treasure</option>
              <option value="products">Products</option>
              <option value="wonderfulWomenWorkshops">Wonderful Women Workshops</option>
              <option value="treasureClub">Treasure Club</option>
              <option value="other">Other</option>
      
            </select>
                          </div>
                        </div>
           
                         <div class="row">
                           <div class="col-md-12 form-group mb-5">
                             <label for="message" class="col-form-label">Message</label>
                             <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message"></textarea>
                           </div>
                         </div>
                         <div class="row">
                           <div class="col-md-12 form-group">
                             <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                             <span class="submitting"></span>
                           </div>
                         </div>
                  </form>
      
      
                  <div id="form-message-warning mt-4"></div> 
                  <div id="form-message-success">
                    Your message was sent, thank you!
                  </div>
      
                </div>
              </div>
              <div class="col-md-4">
                <div class="contact-info h-100">
                  <h3>Contact Information</h3>
                  <p class="mb-5">Thank you very much for checking out my website. Please do not hesitate to fill out the contact sheet to the left of your screen if you have any questions or concerns in regards to the content, products, or materials on my website. If you would like schedule a time to book an event or consultation with me select the button below titled, "Book Now" and fill out the provided information. Have a fantastic day!</p>
                  <ul class="list-unstyled">
                    <li class="d-flex">
                      <span class="wrap-icon icon-room mr-3"></span>
                      <span class="text">Salt Lake City, UT, 84113</span>
                    </li>
                    <li class="d-flex">
                      <span class="wrap-icon icon-phone mr-3"></span>
                      <span class="text">+ (801)-638-3945</span>
                    </li>
                    <li class="d-flex">
                      <span class="wrap-icon icon-envelope mr-3"></span>
                      <span class="text">www.teinamarrie.com</span>
                    </li>
                  </ul>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <script id="setmore_script" type="text/javascript" src="https://my.setmore.com/webapp/js/src/others/setmore_iframe.js"></script><a id="Setmore_button_iframe" style="float:none" href="https://my.setmore.com/bookingpage/b51535d9-e2cd-4c1b-94df-23c33a20ef0a"><img border="none" src="https://storage.googleapis.com/setmore-assets/2.0/Images/Integration/book-now-blue.svg" alt="Book an appointment with Teinamarrie's Treasures using Setmore" /></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
        </div>
      
      
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/main.js"></script>
      </body>            

    <!--Footer-->
    <footer>
      <div class="footer mb-2">
        <div class="text-center text-white">&#169; Copyright Teinamarrie's Treasures</span>. All Rights Reserved</div>
        <div class="text-center text-white">Designed by <span class="text-white">SLCC Webdev Students</span></div>
        <div>
          <a href="https://www.facebook.com/TeinamarriesTreasures/" class="fa fa-facebook socialIconFoot fs-3"></a>
          <a href="https://www.instagram.com/teinamarrie/" class="fa fa-instagram socialIconFoot fs-3"></a>
          <a href="#" class="fa fa-youtube socialIconFoot fs-3"></a>
          <a href="https://www.linkedin.com/in/teinamarrie-scuderi/" class="fa fa-linkedin socialIconFoot fs-3"></a>
        </div>
      </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="./js/contact.js"></script>

  </body>
</html>
<?php
  include "database.php";
  
  $tableName = "treasuresform_responses";

  $result = "";
  $name = $email = $phone = $company = $reasonForContact = $message = "";

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = cleanse_data($_POST['name']);
    $email = cleanse_data($_POST['email']);
    $phone = cleanse_data($_POST['phone']);
    $company = cleanse_data($_POST['company']);
    $reasonForContact = cleanse_data($_POST['reasonForContact']);
    $message = cleanse_data($_POST['message']);

    contact_form_insert($tableName, $name, $email, $phone, $company, $reasonForContact, $message);

    $targetEmail = "elsasser01@gmail.com, wesleyowood@gmail.com";
    $subject = "New Contact Entry From: ".$name." ".$email;
    $body =  "New Contact Form Entry: \nName: ".$name."\nEmail: ".$email."\nPhone: ".$phone."\nCompany: ".$company."\nReason For Contact: ".$reasonForContact."\nMessage: ".$message; 

    mail($targetEmail, $subject, $body);
  }

  function cleanse_data($data){
    return htmlspecialchars(stripslashes(trim($data)));
  }



?>