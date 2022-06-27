 <?php if($_SESSION['role']!='Admin'){

  header('location:home');
  echo $_SESSION['role'];
}?> 

<div class="container-fluid   " style="max-width: 100vw;max-height:100vh;" >
            <div class=" row fixed-top " style="background: #410839; ">  
                <button class="btn btnmenu  " type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop" style="justify-content: flex-start;">
                    <img src="https://img.icons8.com/nolan/64/menu-squared-2.png"/ class="d-flex justify-content-start " style="margin-left:50px">   
                </button>
                
                <div class="offcanvas offcanvas-start"  style="width: 290px;" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                    <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="staticBackdropLabel">Menu </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body " style="width: 290px;">
                        <div class="d-grid  col-12 mt-3">
                              <div class="profile_info">
                                  <h4>Welcome</h4>
                                  <p class="profile_name"></p>
                              </div
                          </div>
                          <div class="d-grid col-12 mt-3">
                              <button class="btn btnsidbar py-4 fs-4" type="button">
                                  <a href="Dashboardadmin" >
                                      <span class="title">Mon Dashboard</span>
                                  </a>
                              </button>
                          </div>
                          <div class="d-grid col-12 mt-3">
                              <button class="btn btnsidbar py-4 fs-4" type="button">
                                  <a href="home" >
                                      <span class="icon"><img src="https://img.icons8.com/color/40/undefined/administrator-male-skin-type-7.png"/></span>
                                      <span class="title">Home</span>
                                  </a>
                              </button>
                          </div>
                          <div class="d-grid col-12 mt-3">
                              <button class="btn btnsidbar py-4 fs-4" type="button">
                                  <a href="Admin" >
                                      <span class="icon"><img src="https://img.icons8.com/color/40/undefined/administrator-male-skin-type-7.png"/></span>
                                      <span class="title">Admins</span>
                                  </a>
                              </button>
                          </div>
                          <div class="d-grid col-12 mt-3">
                              <button class="btn btnsidbar py-4 fs-4" type="button">
                                  <a href="fashiondesigner">
                                      <span class="icon"><img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/40/undefined/external-fashion-lifestyles-flaticons-lineal-color-flat-icons-4.png"/></span>
                                      <span class="title">Fashion designer</span>
                                  </a>
                              </button>
                          </div>
                          <div class="d-grid col-12 mt-3">
						  <button class="btn btnsidbar py-4 fs-4" type="button">
                                  <a href="productanastasia">
                                      <span class="icon"><img src="https://img.icons8.com/external-creatype-filed-outline-colourcreatype/40/undefined/external-fashion-outfit-filed-outline-creatype-filed-outline-colourcreatype-25.png"/></span>
                                      <span class="title">Product Anastasia</span>
                                  </a>
                              </button>
                          </div>
                          <div class="d-grid col-12 mt-3">
                              <button class="btn btnsidbar py-4 fs-4" type="button">
                                  <a href="commandanastasia">
                                      <span class="icon"><img src="https://img.icons8.com/nolan/40/shopping-1.png"/></span>
                                      <span class="title">Command</span>
                                  </a>
                              </button>
                          </div>
                          <div class="d-grid col-12 mt-3">
                              <button class="btn btnsidbar py-4 fs-4" type="button">
                                  <a href="clientanastasia">
                                  <span class="icon"><img src="https://img.icons8.com/fluency/40/undefined/user-group-woman-woman.png"/></span>
                                  <span class="title">Client Anastasia</span>
                              </a></button>
                          </div>
                          <div class="d-grid col-12 mt-3">
                              <button class="btn btnsidbar py-4 fs-4" type="button">
                                  <a href="logout">
                                      <span class="icon"><img src="https://img.icons8.com/fluency/40/undefined/user-group-woman-woman.png"/></span>
                                      <span class="title">logout</span>
                                  </a>
                              </button>
                          </div>
                    </div>
                </div>
            </div>
   </div>
   </div>