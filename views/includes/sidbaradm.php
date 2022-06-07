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
      <a class="navbar-brand" href="#!"><img src="../public/image/logo.jpg" style="width:70PX;border-radius: 20px;" alt="logo"></a>

      </div>
      <div class="right_menu">
        <ul>
          <li>
          <img  class="fas " src="https://img.icons8.com/color/48/undefined/circled-user-male-skin-type-7--v1.png"/>
            <div class="profile_dd">
               <div class="dd_item"><a href="../views/profilAdmin.php">Profile</a></div>
               <div class="dd_item">Logout</div>
            </div>
          </li>
        </ul>
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
                 <p class="profile_name">non Admin</p>
              </div>
            </div>
            <ul>
              <li>
                <a href="../views/Admin.php" >
                  <span class="icon"><img src="https://img.icons8.com/color/40/undefined/administrator-male-skin-type-7.png"/></span>
                  <span class="title">Admins</span>
                </a>
              </li>
              <li>
                <a href="../views/fashiondesigner.php">
                  <span class="icon"><img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/45/undefined/external-fashion-lifestyles-flaticons-lineal-color-flat-icons-4.png"/></span>
                  <span class="title">Fashion designer</span>
                </a>
              </li>
              <li>
                <a href="../views/productanastasia.php">
                  <span class="icon"><img src="https://img.icons8.com/external-creatype-filed-outline-colourcreatype/45/undefined/external-fashion-outfit-filed-outline-creatype-filed-outline-colourcreatype-25.png"/></span>
                  <span class="title">Product Anastasia</span>
                </a>
              </li>
              <li>
                <a href="../views/commandanastasia.php">
                  <span class="icon"><img src="https://img.icons8.com/nolan/45/shopping-1.png"/></span>
                  <span class="title">Command</span>
                </a>
              </li>
              <li>
                 <a href="../views/clientanastasia.php">
                  <span class="icon"><img src="https://img.icons8.com/fluency/45/undefined/user-group-woman-woman.png"/></span>
                  <span class="title">Client Anastasia</span>
                </a>
              </li>
            </ul>
          </div>
      </div>