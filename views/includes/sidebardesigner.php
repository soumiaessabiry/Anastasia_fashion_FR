<script>
		$(document).ready(function(){
			$(".hamburger .hamburger__inner").click(function(){
			  $(".wrapper").toggleClass("active")
			})

			$(".top_navbar .fas").click(function(){
			   $(".profile_dd").toggleClass("active");
			});
		})
	</script>
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
                 <p class="profile_name">nom designer fashion</p>
              </div>
            </div>
            <ul>
              <li>
                <a href="dashborddesigner">
                  <span class="icon"><img src="https://img.icons8.com/nolan/45/home-page.png"/></span>
                  <span class="title">Mon Dashbord </span>
                </a>
              </li>
              <li>
                <a href="home">
                  <span class="icon"><img src="https://img.icons8.com/nolan/45/home-page.png"/></span>
                  <span class="title"> Home </span>
                </a>
              </li>
              <li>
                <a href="profilfashiondes">
                  <span class="icon"><img src="https://img.icons8.com/external-mixed-line-solid-yogi-aprelliyanto/45/undefined/external-profile-file-and-folder-mixed-line-solid-yogi-aprelliyanto.png"/></span>
                  <span class="title"> Profil </span>
                </a>
              </li>
              <li>
                <a href="produiddesigner">
                  <span class="icon"><img src="https://img.icons8.com/external-creatype-filed-outline-colourcreatype/45/undefined/external-fashion-outfit-filed-outline-creatype-filed-outline-colourcreatype-25.png"/></span>
                  <span class="title"> Mes Product </span>
                </a>
              </li>
              <li>
                <a href="commanddesigner">
                  <span class="icon"><img src="https://img.icons8.com/nolan/45/shopping-1.png"/></span>
                  <span class="title">Mes Command</span>
                </a>
              </li>
              <li>
                 <a href="clientdesigner">
                  <span class="icon"><img src="https://img.icons8.com/fluency/45/undefined/user-group-woman-woman.png"/></span>
                  <span class="title">Mes client</span>
                </a>
              </li>
            </ul>
          </div>
      </div>