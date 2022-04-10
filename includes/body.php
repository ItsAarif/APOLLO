<body>
  <?php
  include "header.php";
 
  ?>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/cs03.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>APOLLO <br></strong> An Open Autonomous Driving Platform</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">All About Autonomous Vehicles</p>
            <div>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Welcome to APOLLO</h1>
            
            </div>
            
            <div class="browse d-md-flex col-md-12" >
                <div class="row">
                  <?php
                  $type_query = "SELECT * FROM event_type";
                  $run_query = mysqli_query($con,$type_query);
                  
                  if(mysqli_num_rows($run_query) > 0){
                    $i=0;   
                    while($row = mysqli_fetch_array($run_query)){
                           
                      $type_id = $row["type_id"];
                      $type_title = $row["type_title"];
                      $tag_id=$i++;
                      echo "
                      <span class='d-flex justify-content-center align-items-md-center'><a href='#$tag_id' style='border-radius:20px;margin-bottom:20px;'><i class=''></i>$type_title</a></span>
                                   
                      ";
                    }
                    
                  }
                  ?>
            	
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-guarantee"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">All About Self Driving Cars in One Place</h3>
                <p>Get Information, Algorithms All on this Portal, All in One for Self Driving Cars.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Explore Various Algorithms Related to Autonomous Vehicle</h3>
                <p>AI technologies power self-driving car systems. Developers of self-driving cars use vast amounts of data from image recognition systems, along with machine learning and neural networks, to build systems that can drive autonomously.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Easy to Contribute in Autonomous Vehicle Open Source Projects</h3>
                <p>Open source projects in Autonomous Vehicle are an excellent way for coders and developers to test their mettle and learn more advanced methods.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">APOLLO Pages</h3>
                <p>You can use APOLLO Pages to host a algorithm about self driving car directly from a repository.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    <section class=" ftco-destination">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Banners</span>
            <h2 class="mb-4"><strong>Algorithms</strong> Posters</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="single-slider owl-carousel ftco-animate">
    					<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/cs011.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/cs022.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/cs033.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/cs044.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/cs055.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/cs066.jpg);">
		    						
		    					</a>
		    					
		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    
    <section class=" bg-light" id="Algorithms">
    	<div class="container" id="0">
    		<div class="row justify-content-start mb-5 pb-3">
             <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Algorithms</span>
            <h2 class="mb-4"><strong>Explore Autonomous Vehicle</strong>  AIgorithms</h2>
          </div>
        </div>  
    		<div class="row" id="technical" >
    			<div class="col-md-12 ftco-animate">
    				<div id="accordion">
    					<div class="row" >
                <div class="col-md-12">
                  <div id="get_events"></div>
                      <?php
                      $event_query = "SELECT * FROM event_type";
                      $run_query1 = mysqli_query($con,$event_query);
                      
                      if(mysqli_num_rows($run_query1) > 0){
                          
                        while($row = mysqli_fetch_array($run_query1)){
                            
                        $type_id = $row["type_id"];
                        $type_title= $row["type_title"];
                        echo " 
                        <div class='card'>
                        <div class='card-header' id='$type_id'>
                               <a class='card-link' data-toggle='collapse'  href='#menu$type_id' aria-expanded='false' aria-controls='menu$type_id'>$type_title<span class='collapsed'><i class='icon-plus-circle'></i></span><span class='expanded'><i class='icon-minus-circle'></i></span></a>
                               </div> 
                               <div id='menu$type_id' class='collapse'>
                               <div class='card-body'>
                                 <div class='row'>";
                                 $type_query = "SELECT * FROM events,event_type WHERE events.type_id=event_type.type_id";
                                 $run_query2 = mysqli_query($con,$type_query);
                                 if(mysqli_num_rows($run_query2) > 0){
                       
                                 while($row = mysqli_fetch_array($run_query2)){
                                   $newtype_id    = $row['type_id'];
                                   $event_id   = $row['event_id'];
                                   $event_title = $row['event_title'];
                                   $type_title = $row['type_title'];
                                   $event_price = $row['event_price'];
                                   $img_link = $row['img_link'];
                                  
                                   if($newtype_id==$type_id){
                    
                                   echo "
                               
                                   
                                       
                                   <div class='col-md-6 col-lg-3 ftco-animate'>
                                   <div class='destination'>
                                     <a href='#' class='img img-2 d-flex justify-content-center align-items-center' style='background-image: url(./images/$img_link);'>
                                       <div class='d-flex justify-content-center align-items-center'>
                                         
                                       </div>
                                     </a>
                                     <div class='text p-3'>
                                       <h3><a href='#'>$event_title</a></h3>
                                       <p class='price' style='font-weight: 400;font-size: 18px;color: #2f89fc;'>
                                         $event_price
                                         <span>RS</span>
                                       </p>
                                       <p>Click on this Link to know more about this Algorithm</p>
                                       <hr>
                                       <p class='bottom-area d-flex'>
                                         <span><i class='icon-map-o'></i> Arif</span> 
                                         <span class='ml-auto'><a href='http://localhost/FinalYearProject/IDE/index.html'>View</a></span>
                                       </p>
                                     </div>
                                   </div>
                                 </div>";
                                   }
                    
                                 }
                                 }
                                 
                              echo"  
                              </div>
                               </div>
                             </div>
                             </div>
                             ";
                    
                    
                        }
                        
                        
                      }
                      ?>
                    
                  </div>           
    					</div>
				    </div>
    			</div>
    		</div>
    	</div>
    </section>
    
    

    

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Some Interesting Facts</h2>
            <span class="subheading">Autonomous Vehicle Statistics Indicate a Positive Momentum</span>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100000">0</strong>
		                <span>Algorithms</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="73">0</strong>
		                <span>Vehicle Security Against Hackers (in %)</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="72">0</strong>
		                <span>System Security Against Hackers (in %)</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="71">0</strong>
		                <span>Self-Driving Vehicles Getting Confused by Unexpected Situations (in %)</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


   

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-5 heading-section ftco-animate">
          	<span class="subheading">Best Self Driving Car Portal</span>
            <h2 class="mb-4 pb-3"><strong>What</strong> We Provide?</h2>
            <p>As there is no centralised source of information related to autonomous self driving cars. There are many blogs and information available about autonomous cars but they are  at different location or on different websites. So we have come up with the idea which will be beneficial for many students and people who are intrersted in the world of autonous cars . The idea is we will be creating open source platform also you can say  information hub about self driving cars where people can  collect  knowledge about self driving cars as well as they can enhance available code or output by making their own changes in the code which will be there on our portal.</p>
            <p>It will be efficient because all information is at one place and  of course it will be free of cost so it  will be helpful for beginners.</p>
            <p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
          </div>
					<div class="col-md-1"></div>
          <div class="col-md-6 heading-section ftco-animate">
          	<span class="subheading">Founders</span>
            <h2 class="mb-4 pb-3"><strong>Our</strong> Founders</h2>
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel">
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(https://www.rrce.org/rrce/wp-content/uploads/2013/07/Dr.Balakrishna-R.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
                        
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4">
		                    <p class="mb-5">Dr .R.Balakrishna is currently working as a Professor & Principal, Dept. of Computer Science and Engineering since 2010. His research and professional career spans about 15 years of Teaching & research, 1 Year Industrial Experience at TCS. His expertise is primarily in the domains of Ad hoc Networks, Mobile Computing, Networks, and Distributed OS.</p>
		                    <p class="name">Mr. Arif Chaudhary</p>
		                    <span class="position">Student</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(https://www.rrce.org/rrce/wp-content/uploads/2014/01/Dr.-Usha-S.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4">
		                    <p class="mb-5">S. Usha, is working as a professor and head , CSE, RRCE. Graduated from Manonmanium Sundaranar University, in Computer Science and Engineering during the year 1998. She obtained her Master degree in Computer Science and Engineering and PhD degree from sathyabama university in the area of Mobile Ad Hoc Networks in the year 2013. She has 54 publications in International and National conferences, 22 publication in national journal and international journals in the area of Mobile Ad hoc Networks and wireless security.</p>
		                    <p class="name">Mr. Harsh Singh</p>
		                    <span class="position">Student</span>
		                  </div>
		                </div>
		              </div>
<div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(https://www.rrce.org/rrce/wp-content/uploads/2014/01/Dr.-Usha-S.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4">
		                    <p class="mb-5">S. Usha, is working as a professor and head , CSE, RRCE. Graduated from Manonmanium Sundaranar University, in Computer Science and Engineering during the year 1998. She obtained her Master degree in Computer Science and Engineering and PhD degree from sathyabama university in the area of Mobile Ad Hoc Networks in the year 2013. She has 54 publications in International and National conferences, 22 publication in national journal and international journals in the area of Mobile Ad hoc Networks and wireless security.</p>
		                    <p class="name">Ms. Hrutuja Saswade</p>
		                    <span class="position">Student</span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>

    

    
		
		

    
  
                                    