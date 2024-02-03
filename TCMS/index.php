<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome to TCMS, UiTMCK</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-indigo w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">

<img src="/TCMS/taekwando.jpeg" class="w3-circle w3-margin-right" style="width:150px">
    <h3 class="w3-padding-64"><b><br>Taekwando Club Management System (TCMS)</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About Us</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">ATMS Committee</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Coaches Name</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Activities</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
    <a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Membership</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-indigo w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-light-gray w3-margin-right" onclick="w3_open()">☰</a>
  <span>TCMS, UiTMCK</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->

  <div class="w3-container" style="margin-top:80px" id="showcase">
    <p align="right"><a href="crud/index.php">Login to Admin</a>

    <h1 class="w3-jumbo"><b>Welcome to Taekwando Club Management System(TCMS)</b></h1>

    <h1 class="w3-xxxlarge w3-text-indigo "><b>About Us </b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="/TCMS/mission.jpg" style="width:100%" onclick="onClick(this)" alt="Mission and Vision">
      <img src="/TCMS/history.jpg" style="width:100%" onclick="onClick(this)" alt="Light, white and tight scandinavian design">
      
    </div>

    <div class="w3-half">
      <img src="/TCMS/team members.jpg" style="width:100%" onclick="onClick(this)" alt="Team members">
      <img src="/TCMS/representative.jpg" style="width:100%" onclick="onClick(this)" alt="Taewando Training">
      
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Committee -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>ATMS Committee</b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <p>We are the best team! Come join us ! </p>
    <p>Experience the strength and dedication of the UiTM Cawangan Kelantan Taekwondo Club through our exceptional committee. Comprising passionate individuals with a deep commitment to the art of Taekwondo, our committee members bring expertise, leadership, and a shared vision for fostering excellence within our club. United by a common goal, our dedicated committee works tirelessly to create a supportive and inspiring environment for all members. Meet the driving force behind our success as we strive to empower individuals, instill discipline, and build a community where every member can reach their full potential
<div>
    <table class="w3-table">
    <tr>
      <th> Name</th>
      <th>Position</th>
      <th>Phone number</th>
    </tr>
    <tr>
      <td>Muhd Irwan Saifullah</td>
      <td>President</td>
      <td>011-23457822</td>
    </tr>
    <tr>
      <td>Khairina Irdina</td>
      <td>Vice President</td>
      <td>018-44551234</td>
    </tr>
    <tr>
      <td>Safiah Fatima</td>
      <td>Secretary</td>
      <td>012-33896899</td>
    </tr>
    <tr>
      <td>Fatihah Husna</td>
      <td>Vice Secretary</td>
      <td>014-66778989</td>
    </tr>
    <tr>
      <td>Farhah Saidatul</td>
      <td>Treasurer</td>
      <td>017-61086734</td>
    </tr>
  </table>
</div>
    </p>
  </div>
  
  <!-- Coaches Name -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Coaches Name</b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <p>The best team in the world.</p>
    <p>Welcome to the Taekwondo Club at UITM Machang, where excellence meets expertise in martial arts! Our club takes pride in having the best Taekwondo coach, dedicated to shaping champions and fostering a culture of discipline and skill development.

<p>Join us on a journey of self-discovery and mastery under the guidance of our accomplished Taekwondo coach. With a wealth of experience and a passion for teaching, our coach is committed to bringing out the best in every student, whether you're a beginner or an experienced practitioner.</p>

Discover the art of Taekwondo in a supportive and engaging environment, where our coach's expertise extends beyond techniques to instill values of respect, perseverance, and sportsmanship. Be part of a community that values not only the physical aspects of martial arts but also the mental and emotional growth that comes with it.

<p>Experience the difference of training with the best Taekwondo coach at UITM Machang's Taekwondo Club. Unleash your potential, build your skills, and embark on a journey towards becoming the best version of yourself.</p>
    </p>
    <p><b>Our coaches are thoughtfully chosen</b>:</p>
  </div>

  <!-- The Coaches -->
  <div class="w3-row-padding w3-grayscale">
    
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-indigo">
        <img src="/TCMS/1.png" alt="John" style="width:60%">
        <div class="w3-container">
          <h3>Master Zakaria Ismail</h3>
          <p class="w3-opacity">Main Coach</p>
          <p>Master Zakaria,with over two decades of experience in Taekwondo, brings a wealth of knowledge and a legacy of producing skilled athletes. </p>
          <p>Phone number:017-23459999</p>
          <p>Email:zamaster@gmail.com</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-indigo">
        <img src="/TCMS/2.png" alt="2" style="width:60%">
        <div class="w3-container">
          <h3>Master Roland Choong</h3>
          <p class="w3-opacity">Second Coach</p>
          <p>Extensive competitive experience into dynamic and effective coaching</p>
          <p>Inspires students to surpass their limits, fostering a culture of resilience and sportsmanship within the training hall.</p>
          <p>Phone number:018-99987766</p>
          <p>Email:roland0@gmail.com</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-indigo">
        <img src="/TCMS/3.png" alt="3" style="width:60%">
        <div class="w3-container">
          <h3>Madam Juana Ahmad</h3>
          <p class="w3-opacity">Third Coach</p>
          <p>Has innovative teaching methods, seamlessly blends traditional Taekwondo principles with modern training techniques.</p>
          <p>Phone number:011-44672891</p>
          <p>Email:juana@gmail.com</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Activities -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Activities</b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <p>Engage in dynamic and invigorating training sessions at the UiTM Cawangan Kelantan Taekwondo Club, where our members participate in a variety of activities focused on refining techniques, enhancing physical fitness, and developing mental discipline. From fundamental drills to advanced sparring sessions, our activities cater to practitioners of all skill levels.</p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Tournaments</li>
        <li class="w3-padding-16">Kejohahanan Kebangsaaan KUKKIWON </li>
        <li class="w3-padding-16">IUMW Poomsae Tournament</li>
        <li class="w3-padding-16">University of Nottingham Malaysia Poomsae Tournament</li>
        <li class="w3-padding-16">Kenaikan Pangkat Tali Pinggang (every semester) </li>
        
        
          
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-blue-gray w3-padding-large w3-hover-black">Register</button>
        </li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-blue-gray w3-xlarge w3-padding-32">Tournaments</li>
        <li class="w3-padding-16">Asian University Game</li>
        <li class="w3-padding-16">GOYANG World Poomsae</li>
        <li class="w3-padding-16">Sparring Senior Female</li>
        <li class="w3-padding-16">Sparring Senior Male</li>
        <li class="w3-padding-16">Kejohanan Taekwando Elite Malaysia</li>
        
           </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-blue-gray w3-padding-large w3-hover-black">Register</button>
        </li>
      </ul>
    </div>
  </div>
  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <p>Do you want to join us? Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-blue-gray w3-margin-bottom">Send Message</button>
    </form>  
  </div>
  <title>TCMS Application</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #787878;">
      TCMS Application
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New User</h3>
         <p class="text-muted">Complete the form below to add a new user</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">First Name:</label>
                  <input type="text" class="form-control" name="first_name" placeholder="Albert">
               </div>

               <div class="col">
                  <label class="form-label">Last Name:</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Einstein">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>

            <div class="form-group mb-3">
               <label>Gender:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="male" value="male">
               <label for="male" class="form-input-label">Male</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="female" value="female">
               <label for="female" class="form-input-label">Female</label>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>


<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
