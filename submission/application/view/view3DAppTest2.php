<!DOCTYPE html>
<html lang="en">
<head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/df33607bba.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../submission/assets/css/mystyle.css">
<!-- X3dom -->
<link rel='stylesheet' type='text/css' href='../submission/assets/css/x3dom.css'>
<!-- Include the x3dom JavaScript -->

<script type='text/javascript' src='assets/js/x3dom.js'></script>
<script type='text/javascript' src='assets/js/slideshow.js'></script>
<script type='text/javascript' src='assets/js/swap.js'></script>
<script type='text/javascript' src='assets/gallery/scripts/controller.js'></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script type='text/javascript' src='assets/js/getJsonData.js'></script>
<script type="text/javascript" src="assets/gallery/scripts/controller.js"></script>      
<script type='text/javascript' src='assets/js/CameraView.js'></script>

</head>
    <body id="bodyColor">
	<center>
		<table id="gallery"></table>
	</centre>
     <nav id="headerColor" class="navbar navbar-expand-sm navbar_coca_cola container-fluid">
        <!-- Brand/logo -->
        <div class="logo">
          <a class="navbar-brand" href="index.php">
              <h1>1</h1>
              <h1>oca</h1>
              <h2>Cola</h2>
              <h3>Journey</h3>
              <p>Refreshing the world, one story at a time</p>
          </a>
      </div>
        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="javascript:swap('main')">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Drinks</a>

              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="javascript:swap('coke')">Coca Cola</a>
                  <a class="dropdown-item" href="javascript:swap('sprite')">Sprite</a>
                  <a class="dropdown-item" href="javascript:swap('pepper')">Dr Pepper</a>
              </div>
            </li>

          </ul>
        </div>
      </nav>
      

      <div id="main" class="container-fluid main-contents" style="display: block;">
        
        
        

       
        <div class="row">
    <div class="col-sm-12">
        <div id="main_3d_image">
            <div id="main_text" class="col-xs-12 col-sm-4">
                <h2 id="title"></h2>
                <h3 id="subtitle"></h3>
                <p id="description"></p>
				<br>
            </div>
        </div>
    </div>
</div>
        
          

<div class="row">
	<div class="col-sm-4">
    <!-- Cola -->
		<div class="card">
			<a href="javascript:swap('coke')">
				<img class="card-img-top img-fluid img-thumbnail" src="assets/images/home/coca_cola.jpg" alt="Coca Cola">
		</a>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="card-body" id="coke-body">
		<br>
		<div class="card-title-wrapper">
			<h3 class="card-title" id="card-title-0"></h3>
		</div>
		<br>
		<p class="card-text" id="card-description-0"></p>
		<br>
		<a href="javascript:swap('coke')" class="btn btn-danger" id="card-button-0">Find out more ...</a>
		</div>
	</div>
</div>
		
<div class="row">
    <div class="col-sm-4">
        <!-- Sprite -->
        <div class="card">
            <a href="javascript:swap('sprite')">
                <img class="card-img-top img-fluid img-thumbnail" src="assets/images/home/sprite.jpg" alt="Sprite">
            </a>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="card-body" id="sprite-card"> <!-- Added id="sprite-card" -->
            <br>
            <div class="card-title-wrapper">
			
                <h3 class="card-title" id="sprite-title"></h3>
            </div>
            <br>
            <p class="card-text" id="sprite-description"></p>
            <br>
            <a href="javascript:swap('sprite')" class="btn btn-danger" id="sprite-button">Find out more ...</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-4">
        <!-- Dr Pepper -->
        <div class="card">
            <a href="javascript:swap('pepper')">
                <img class="card-img-top img-fluid img-thumbnail" src= "assets/images/home/dr_pepper.jpg" alt="Dr Pepper">
            </a>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="card-body" id="dr-pepper-card"> 
            <br>
            <div class="card-title-wrapper">
               <h3 class="card-title" id="dr-pepper-title"></h3>
            </div>
            <br>
             <p class="card-text" id="dr-pepper-description"></p>
            <br>
            <a href="javascript:swap('pepper')" class="btn btn-danger" id="dr-pepper-button">Find out more ...</a>
        </div>
    </div>
</div>
</div>

	 
	 
	 

	 
	 
		
		<!-- Coke page block element -->
        <div id="coke" class="container-fluid main contents" style="display: none;">
		
        
        <div class="slider coke-slider">
			<img name="slide" class="slide" alt="Coke Slideshow Image">
		</div>
        
   
	 <div class="row">
        <div class="col-sm-12">
            <div class="card-body" id="coke-content">
    <h3 class="card-title" id="content-title"></h3>
    <p class="card-text" id="content-description"></p>
    <iframe width="909" height="682" id="content-video" title="The history of Coca-cola" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <br>
   
</div>
        </div>
    </div>
            <!-- Row to hold two cards to hold 1) the X3D model and 2) the gallery -->
            <div class="row">
              <!-- Column to hold the X3D Model -->
              <div class="col-sm-9">
                <div class="card text-left">
                  <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
					  
                          <li class="nav-item">
                              <a class="nav-link active" href="javascript:swap('coke')">Coke</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="javascript:swap('sprite')">Sprite</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="javascript:swap('pepper')">Pepper</a>
                          </li>
                      </ul>
                  </div>
				  <div class="col-sm-12">
    
</div>

                  <!-- Bootstrap 4 card body to hold information about the X3D model-->
                 <div class="card-body model">
    <h4 class="card-title" id="coke-x3d-title"></h4>
    <p class="card-text" id="coke-x3d-description"></p>
    <div class="model3D bgCoke">
        <x3d>
            <scene>
                <inline url="https://users.sussex.ac.uk/~la480/3Dapp/Labs/submission/assets/x3d/newcokecanx3d.x3d"></inline>
				<Viewpoint DEF='Front_Camera' description='Front_Camera' orientation='0.2758 -0.9592 -0.06219 -0.4619' position='771.4 722.9 932.3' fieldOfView='0.6024'/>
    <Viewpoint DEF='Back_Camera' description='Back_Camera' orientation='0.006561 -0.9996 -0.02636 -2.654' position='977.6 630.2 -2594' fieldOfView='0.6024'/>
    <Viewpoint DEF='Top_Camera' description='Top_Camera' orientation='0.5158 0.6657 0.5392 -2.007' position='-222 2223 -824.3' fieldOfView='0.6024'/>
    <Viewpoint DEF='Bottom_Camera' description='Bottom_Camera' orientation='-0.05046 -0.7228 0.6892 -3.036' position='-74.63 -722 -858.9' fieldOfView='0.6024'/>
    <Viewpoint DEF='Right_Camera' description='Right_Camera' orientation='0.2575 0.9614 0.09659 -0.7439' position='-1308 911.9 666.8' fieldOfView='0.6024'/>
    <Viewpoint DEF='Left_Camera' description='Left_Camera' orientation='0.07782 -0.9948 -0.06619 -1.415' position='2201 843.5 -559.9' fieldOfView='0.6024'/>
            </scene>
        </x3d>
    </div> 
</div>
</div>
</div>

<!-- Add more margin-bottom here -->
<div class="col-sm-3 mb-5">
    <div class="card text-left">
        <div class="card-header gallery-header">
        </div>
        <div class="card-body">
            <h4 class="card-title" id="imageGallery-title"></h4>
            <!-- Dynamically generated image gallery using JS and PHP -->
            <div class="gallery" id="gallery_coke"></div>
            <p class="card-text" id="image-gallery-description"></p>
        </div>
    </div>
</div>

	<div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
                </div>
				<br>
				<div class="col-sm-4">
    <div class="card text-left">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Animation</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="card-Title x3dAnimationSubtitle drinksText">
                <h3>Animation Options</h3>
            </div>
            <a href="#" class="btn btn-danger btn-responsive" onclick="spin();">RotX</a>
            <a href="#" class="btn btn-danger btn-responsive">RotY</a>
            <a href="#" class="btn btn-danger btn-responsive">RotZ</a>
            <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
            <div class="card-text x3dAnimationDescription drinksText">
                <p>These buttons select a range of X3D animation options</p>
            </div>
        </div>
    </div>
</div>
<br>
<div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                <a class="dropdown-item" href="#">Vertex</a>
                              </div>
                            </li>
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Default</a>
                                <a class="dropdown-item" href="#">Onmi On/Off</a>
                                <a class="dropdown-item" href="#">Target On/Off</a>
                                <a class="dropdown-item" href="#">Headlight On/Off</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-success btn-responsive">Poly</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
                </div>
				 </div>
				  </div>
							
			
   
             
 <!-- End coke page -->






       <!-- Sprite page block element -->
        <div id="sprite" class="container-fluid main contents" style="display: none;">
		<div class="slider sprite-slider">
		<img name="slide" class="sprite-slide" alt="Sprite Slideshow Image">
		</div>
		
	  
	   <div class="row">
			<div class="col-sm-12">
				<div class="card-body" id="sprite-in-content">
					<div class="card-body" id="sprite-content">
					<h4 class="card-title" id="gallery-sprite-title"></h4>
                    <p class="card-text" id="sprite-card-description"></p>
                    <iframe id="sprite-video" width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <br>
                </div>
                </div>
            </div> 
           </div> 
        
            <!-- Row to hold two cards to hold 1) the X3D model and 2) the gallery -->
            <div class="row">
              <!-- Column to hold the X3D Model -->
              <div class="col-sm-9">
                <div class="card text-left">
                  <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
					  
                          <li class="nav-item">
                              <a class="nav-link active" href="javascript:swap('coke')">Coke</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="javascript:swap('sprite')">Sprite</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="javascript:swap('pepper')">Pepper</a>
                          </li>
                      </ul>
                  </div>
				  <div class="col-sm-12">
				  
</div>

                  <!-- Bootstrap 4 card body to hold information about the X3D model-->
                  

                      <div class="card-bodymodel">
        <h4 class="card-title" id="sprite-x3d-title"></h4>
        <p class="card-text" id="sprite-x3d-description"></p>
        <div class="model3D bgCoke">
            <x3d>
                <scene>
                    <inline url="https://users.sussex.ac.uk/~la480/3Dapp/Labs/Lab6/x3d/newspritex3d.x3d"> </inline>
					<Viewpoint DEF='Front_Camera' description='Front_Camera' orientation='0.2758 -0.9592 -0.06219 -0.4619' position='771.4 722.9 932.3' fieldOfView='0.6024'/>
    <Viewpoint DEF='Back_Camera' description='Back_Camera' orientation='0.006561 -0.9996 -0.02636 -2.654' position='977.6 630.2 -2594' fieldOfView='0.6024'/>
    <Viewpoint DEF='Top_Camera' description='Top_Camera' orientation='0.5158 0.6657 0.5392 -2.007' position='-222 2223 -824.3' fieldOfView='0.6024'/>
    <Viewpoint DEF='Bottom_Camera' description='Bottom_Camera' orientation='-0.05046 -0.7228 0.6892 -3.036' position='-74.63 -722 -858.9' fieldOfView='0.6024'/>
    <Viewpoint DEF='Right_Camera' description='Right_Camera' orientation='0.2575 0.9614 0.09659 -0.7439' position='-1308 911.9 666.8' fieldOfView='0.6024'/>
    <Viewpoint DEF='Left_Camera' description='Left_Camera' orientation='0.07782 -0.9948 -0.06619 -1.415' position='2201 843.5 -559.9' fieldOfView='0.6024'/>
                </scene>
            </x3d>
		</div> 
      
	<br>
      </div>
            </div>
        </div>
		<!-- Column to hold 3D Image gallery --> 
              <div class="col-sm-3 mb-5">
                  <div class="card text-left">
                      <div class="card-header gallery-header">
                          Gallery
                      </div>
                      <div class="card-body">
    <h4 class="card-title" id="gallery-sprite-title"></h4>
<div class="gallery" id="gallery_sprite"></div>

    <p class="card-text" id="gallery_sprite-description"></p>
</div>
</div>
</div>

<div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
							 <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>

                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
                </div>
				<br>
				<div class="col-sm-4">
    <div class="card text-left">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Animation</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="card-Title x3dAnimationSubtitle drinksText">
                <h3>Animation Options</h3>
            </div>
            <a href="#" class="btn btn-danger btn-responsive" onclick="spin();">RotX</a>
            <a href="#" class="btn btn-danger btn-responsive">RotY</a>
            <a href="#" class="btn btn-danger btn-responsive">RotZ</a>
            <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
            <div class="card-text x3dAnimationDescription drinksText">
                <p>These buttons select a range of X3D animation options</p>
            </div>
        </div>
    </div>
</div>
<br>
<div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                <a class="dropdown-item" href="#">Vertex</a>
                              </div>
                            </li>
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Default</a>
                                <a class="dropdown-item" href="#">Onmi On/Off</a>
                                <a class="dropdown-item" href="#">Target On/Off</a>
                                <a class="dropdown-item" href="#">Headlight On/Off</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-success btn-responsive">Poly</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
                </div>
				

    	 
           </div>   
        </div> <!-- End Sprite page -->






         <!-- Pepper page block element -->
       <div id="pepper" class="container-fluid main-contents" style="display: none;">
		
        
		<div class="slider drpepper-slider">
			<img name="slide" class="drpepper-slide" alt="Dr Pepper Slideshow Image">
		</div>		 
      
        

	<div class="card-body">
                <div class="card-body" id="pepper-content">
    <h3 class="card-title" id="content-title"></h3>
    <p class="card-text" id="content-description"></p>
    <iframe id="content-video" width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <br>
    <a href="#" class="btn btn-primary" id="content-button">Find out more ...</a>
</div>
            </div>
            <!-- Row to hold two cards to hold 1) the X3D model and 2) the gallery -->
            <div class="row">
              <!-- Column to hold the X3D Model -->
              <div class="col-sm-9">
                <div class="card text-left">
                  <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
					  
                          <li class="nav-item">
                              <a class="nav-link active" href="javascript:swap('coke')">Coke</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="javascript:swap('sprite')">Sprite</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="javascript:swap('pepper')">Pepper</a>
                          </li>
                      </ul>
                  </div>
				  <div class="col-sm-12">
    
</div>

                  <!-- Bootstrap 4 card body to hold information about the X3D model-->
                 <div class="card-bodymodel">
       <h4 class="pepper-x3d-title"></h4>
        <p class="pepper-x3d-description"></p>
        <div class="model3D bgCoke">
            <x3d>
                <scene>
                    <inline url="https://users.sussex.ac.uk/~la480/3Dapp/Labs/Lab6/x3d/newdrpepperx3d.x3d"> </inline>
                </scene>
            </x3d>
        </div> 
     

    </div>
            </div>
        </div>
    
    <!-- Column to hold 3D Image gallery --> 
              <div class="col-sm-3 mb-5">
                  <div class="card text-left">
                      <div class="card-header gallery-header">
                          Gallery
                      </div>
                      <div class="card-body">
                          <h4 class="card-title" id="gallery_pepper-title"></h4>
                          <!-- Dynamically generated image gallery using JS and PHP -->
                          <div class="gallery" id="gallery_pepper"></div>
                          <p class="card-text" id="gallery_pepper-description"></p>
						  
                      </div>
					   
                  </div>
                </div>
				<div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
                </div>
				<br>
				<div class="col-sm-4">
    <div class="card text-left">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Animation</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="card-Title x3dAnimationSubtitle drinksText">
                <h3>Animation Options</h3>
            </div>
            <a href="#" class="btn btn-danger btn-responsive" onclick="spin();">RotX</a>
            <a href="#" class="btn btn-danger btn-responsive">RotY</a>
            <a href="#" class="btn btn-danger btn-responsive">RotZ</a>
            <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
            <div class="card-text x3dAnimationDescription drinksText">
                <p>These buttons select a range of X3D animation options</p>
            </div>
        </div>
    </div>
</div>
<br>
<div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                <a class="dropdown-item" href="#">Vertex</a>
                              </div>
                            </li>
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Default</a>
                                <a class="dropdown-item" href="#">Onmi On/Off</a>
                                <a class="dropdown-item" href="#">Target On/Off</a>
                                <a class="dropdown-item" href="#">Headlight On/Off</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-success btn-responsive">Poly</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
                </div>
				
            </div> 
   	
	</div>
                </div>
            </div> 
   	<nav id="footerColor" class="navbar navbar-expand-sm footer container-fluid custom-footer">
    <div class="container-fluid">   
        <div class="navbar-text float-left copyright">
            <p><span class="align-baseline">&copy 2020 3D Apps | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
        </div>
        <div class="navbar-text social">
            <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
            <a href="#"><i class="fab fa-google-plus-square fa-2x"></i></a>
            <a href="#"><i class="fab fa-twitter-square fa-2x"></i></a>
            <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
        </div>
    </div>
</nav>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
