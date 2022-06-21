<?php if( $_SESSION['role']!='Client'){
  header('location:home');
  }?>

<div class="top_navbar">

    <div class="hamburger">
       <div class="hamburger__inner">
         <div class="one"></div>
         <div class="two"></div>
         <div class="three"></div>
       </div>
    </div>
    <div class="menu">
      <div class="logo">
      <a class="navbar-brand" href="#!"><img src="././public/image/logo.jpg" style="width:70PX;border-radius: 20px;" alt="logo"></a>

      </div>
     
    </div>
  </div>
    
  <div class="main_container">
      <div class="sidebar">
          <div class="sidebar__inner">
            <div class="profile">
              <div class="img">
              <img src="https://img.icons8.com/color/48/undefined/circled-user-male-skin-type-7--v1.png"/>
              </div>
              <div class="profile_info">
                 <p>Welcome</p>
                 <p class="profile_name"></p>
              </div>
            </div>
            <ul>
              <li>
                <a href="profilClient">
                  <span class="icon"><img src="https://img.icons8.com/external-creatype-filed-outline-colourcreatype/45/undefined/external-fashion-outfit-filed-outline-creatype-filed-outline-colourcreatype-25.png"/></span>
                  <span class="title"> Mon profil </span>
                </a>
              </li>
              <li>
                <a href="moncommand">
                  <span class="icon"><img src="https://img.icons8.com/nolan/45/shopping-1.png"/></span>
                  <span class="title">Mon Command</span>
                </a>
              </li>
              <li>
                 <a href="logout">
                  <span class="icon"><img src="https://img.icons8.com/fluency/45/undefined/user-group-woman-woman.png"/></span>
                  <span class="title">logout</span>
                </a>
              </li>
            </ul>
          </div>
      </div>