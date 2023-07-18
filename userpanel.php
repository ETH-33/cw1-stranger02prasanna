<?php
define('access',true);
include('config.php');
session_start();

if (!isset($_SESSION['user_name'])) {
   header('location:login.php');
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>
   <script src="https://kit.fontawesome.com/7f257b9379.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="./css/style.css">
   <link rel="stylesheet" href="./css/card.css">
   <style>
      /* Add custom CSS styles here for the message box */
      .message-box {
         position: fixed;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         width: 300px;
         padding: 20px;
         background-color: #fff;
         border-radius: 5px;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
         text-align: center;
         display: none;
      }

      .message-box input {
         display: block;
         width: 100%;
         margin-bottom: 10px;
         padding: 10px;
         border: 1px solid #ccc;
         border-radius: 4px;
         font-size: 14px;
      }

      .message-box button {
         padding: 10px 20px;
         background-color: #007bff;
         color: #fff;
         border: none;
         border-radius: 4px;
         font-size: 16px;
         cursor: pointer;
         transition: background-color 0.3s ease;
      }

      .message-box button:hover {
         background-color: #0056b3;
      }

      .message-box .tick {
         display: none;
         color: #007bff;
         animation: tickAnimation 0.6s ease-in-out infinite;
      }

      @keyframes tickAnimation {
         0% {
            opacity: 0;
            transform: scale(0.5);
         }
         50% {
            opacity: 1;
            transform: scale(1);
         }
         100% {
            opacity: 0;
            transform: scale(0.5);
         }
      }
   </style>
</head>
<body>
   <nav class="navbar bg-dark">
      <div class="container">
         <h1 class="logo">N.T</h1>
         <ul class="nav-items">
            <li class="nav-item"><a href="./logout.php">Log Out</a></li>
         </ul>
      </div>
   </nav>
   <section class="about">
      <div class="container">
         <h2 class="lg-heading text-black about-heading">Our Services</h2>
         <div class="card-container">
            <div class="card">
               <div class="card-inner">
                  <div class="card-front">
                     <div class="card-img-top">
                        <img src="img\ktm.jpg" alt="chitwan" />
                     </div>
                  </div>
                  <div class="card-back">
                     <div class="card-body">
                        <h5 class="card-title">Durbar Square</h5>
                        <p>Price: $270</p>
                        <ul>
                           <li>&#10004; Bed & Breakfast</li>
                           <li>&#10004; City Tour</li>
                           <li>&#10004; Newari cuisine</li>
                           <li>&#10004; Cultural Shows</li>
                           <li>&#10004; Short hike</li>
                        </ul>
                        <a href="#" class="btn-add-to-cart">Buy Package</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <div class="card-img-top">
                                <img src="img\paragliding-in-pokhara.jpg" alt="paragliding" />
                            </div>
                        </div>
                        <div class="card-back">
                            <div class="card-body">
                                <h5 class="card-title">Sarangkot</h5>
                                <p>Price: $100</p>
                                <ul>
                                    <li>&#10004; Paragliding</li>
                                    <li>&#10004; Bed & Breakfast</li>
                                    <li>&#10004; Boating</li>
                                    <li>&#10004; David Falls</li>
                                    <li>&#10004; Lake side view</li>
                                </ul>
                                <a href="#" class="btn-add-to-cart">Buy Package</a>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <div class="card-img-top">
                                <img src="img\the-main-maya-devi-temple.jpg" alt="the-main-maya" />
                            </div>
                        </div>
                        <div class="card-back">
                            <div class="card-body">
                                <h5 class="card-title">Mayadevi</h5>
                                <p>Price: $130</p>
                                <ul>
                                    <li>&#10004; Bed & Breakfast</li>
                                     <li>&#10004; Museum Visit</li>
                                      <li>&#10004; Historical Site Visit</li>
                                      <li>&#10004; Meditation</li>
                                      <li>&#10004; Cultural Tharu Dance</li>
                                </ul>
                                <a href="#" class="btn-add-to-cart">Buy Package</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <div class="card-img-top">
                                <img src="img\Chitwan-Jungle-Safari-by-Jeep.jpg" alt="chitwan" />
                            </div>
                        </div>
                        <div class="card-back">
                            <div class="card-body">
                                <h5 class="card-title">Chitwan</h5>
                                <p>Price: $100</p>
                                <ul>
                                    <li>&#10004; Bed & Breakfast</li>
                                    <li>&#10004; Jungle Safari</li>
                                    <li>&#10004; Wetland Visit</li>
                                    <li>&#10004; Camping</li>
                                    <li>&#10004; Cultural Tharu Dance</li>
                                </ul>
                                <a href="#" class="btn-add-to-cart">Buy Package</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <div class="card-img-top">
                                <img src="img\trekking.jpg" alt="trekking" />
                            </div>
                        </div>
                        <div class="card-back">
                            <div class="card-body">
                                <h5 class="card-title">Everest Base Camp</h5>
                                <p>Price: $1100</p>
                                <ul>
                                    <li>&#10004; Trekking</li>
                                     <li>&#10004; Home Stay</li>
                                      <li>&#10004; Helicopter upto Solukhumbu</li>
                                      <li>&#10004; Glacier hike</li>
                                      <li>&#10004; Tradition Food</li>
                                </ul>
                                <a href="#" class="btn-add-to-cart">Buy Package</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <div class="card-img-top">
                                <img src="img\Bungee-Jumping-in-Pokhara (1).jpg" alt="bungee" />
                            </div>
                        </div>
                        <div class="card-back">
                            <div class="card-body">
                                <h5 class="card-title">Bungee</h5>
                                <p>Price: $230</p>
                                <ul>
                                    <li>&#10004; Bungee</li>
                                    <li>&#10004; Rafting</li>
                                    <li>&#10004; Bed & Breakfast</li>
                                    <li>&#10004; Camping & BBQ</li>
                                    <li>&#10004; ATV ride</li>
                                </ul>
                                <a href="#" class="btn-add-to-cart">Buy Package</a> 
                            </div>
                        </div>
                    </div>
                </div>
         </div>
      </div>
   </section>
   <footer class="footer">
      <div class="social-media-links">
         <i class="fab fa-facebook fa-4x"></i>
         <i class="fab fa-twitter fa-4x"></i>
         <i class="fab fa-instagram fa-4x"></i>
      </div>
      <p>Nepal Tour And Travels &copy; 2023, All Rights Reserved</p>
   </footer>

   <!-- Add the message box HTML code here -->
   <div class="message-box" id="messageBox">
      <h3>Enter Your Debit Card No.</h3>
      <input type="text" id="debitCardNo" placeholder="Debit Card No." />
      <button id="confirmButton">Confirm</button>
      <i class="fas fa-check tick" id="tickIcon"></i>
   </div>
   <script>
   const buyButtons = document.querySelectorAll('.btn-add-to-cart');
   const messageBox = document.getElementById('messageBox');
   const debitCardNoInput = document.getElementById('debitCardNo');
   const confirmButton = document.getElementById('confirmButton');
   const tickIcon = document.getElementById('tickIcon');

   buyButtons.forEach(button => {
      button.addEventListener('click', () => {
         messageBox.style.display = 'block';
      });
   });

   confirmButton.addEventListener('click', () => {
      const debitCardNo = debitCardNoInput.value.trim();
      if (debitCardNo) {
         // Start animation and show success message
         confirmButton.style.display = 'none';
         tickIcon.style.display = 'inline-block';

         setTimeout(() => {
            // Hide the message box after 2 seconds
            messageBox.style.display = 'none';
            // Reset input field and animation
            debitCardNoInput.value = '';
            confirmButton.style.display = 'block';
            tickIcon.style.display = 'none';
            // Show payment success response
            showPaymentSuccess();
         }, 2000);
      }
   });

   function showPaymentSuccess() {
      const successMessage = document.createElement('p');
      successMessage.textContent = 'Payment successful!';
      successMessage.style.color = 'green';
      messageBox.appendChild(successMessage);
   }
</script>

</body>
</html>
