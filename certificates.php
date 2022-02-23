<?php include "./include/header.php";


include "db.php";

$about_query = "SELECT * FROM `jag_ass_secretary`";
$about_display = mysqli_query($connection, $about_query);
// $about_result = mysqli_fetch_assoc($about_display);


?>
        
        
        <img src="img/Certificates.jpg" style="width:100%"/>
        


<!--certificate popup-->
<!-- The Modal -->
  <div class="modal fade" id="myModalcertificate1">
    <div class="modal-dialog">
      <div class="modal-content">      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">HARI OM CASTING COMPANY PVT. LTD. 9001</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>        
        <!-- Modal body -->
        <div class="modal-body">
          <img src="img/HARI OM CASTING COMPANY PVT. LTD. 9001.jpg" style="width:100%"/>
        </div>        
        <!-- Modal footer -->              
      </div>
    </div>
  </div>



<!-- The Modal -->
  <div class="modal fade" id="myModalcertificate2">
    <div class="modal-dialog">
      <div class="modal-content">      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">HARI OM CASTING COMPANY PVT. LTD. 14001</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>        
        <!-- Modal body -->
        <div class="modal-body">
          <img src="img/HARI OM CASTING COMPANY PVT. LTD. 14001.jpg" style="width:100%"/>
        </div>        
        <!-- Modal footer -->               
      </div>
    </div>
  </div>



<!-- The Modal -->
  <div class="modal fade" id="myModalcertificate3">
    <div class="modal-dialog">
      <div class="modal-content">      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">HARI OM CASTING COMPANY PVT. LTD. 45001</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>        
        <!-- Modal body -->
        <div class="modal-body">
          <img src="img/HARI OM CASTING COMPANY PVT. LTD. 45001.jpg"  style="width:100%"/>
        </div>        
       <!-- Modal footer -->               
      </div>
    </div>
  </div>
<!--//certificate popup-->


<!-- Team Start -->
<div class="team">
    <div class="container">
      
      <div class="section-header text-center" style="margin: 0 auto 5px auto;">
            <p>QUALITY</p>
        
        
            <!-- <h2>Our Engineers & Workers</h2> -->
        </div>
      <h6 style="font-family: initial;">We adopt the Quality Standard Policy of "zero defects" We have been in the field of iron castings for the past 10 years and evolved to adopt the quality standard as “zero defects”.  We do take quality as conformance to the requirement. At the same time a continuous improvement is in our general practice in our processes in the business operation. We run through three staged quality i.e. “Input -WIP- Output”. In the Input we have stringent quality assay to induct BoM in the process which includes the finest scrap, coal, alloys and chemicals from the world's preferred vendors and producers. In the WIP we take up a rigorous process monitoring system and various tests in the routing process to ensure that no item moves frontward without fitting the quality bill. In the Output or FG we have a dedicated and trained team led by profoundly experienced team lead team to inspect, confirm and approve each FG which comes out. Here every item has to pass through a strict FG quality checklist.</h6>
      
        <div class="section-header text-center">
            <p>Certifications</p>
            <!-- <h2>Our Engineers & Workers</h2> -->
        </div>
        <div class="row">
        <?php
               // while($row1234 = mysqli_fetch_assoc($team_display)){
                ?>
            <div class="col-lg-4 col-md-6">
                <div class="team-item">                    
                      	  <a  data-toggle="modal" data-target="#myModalcertificate1" style="cursor:pointer">
                            <div class="team-img">
                        	<img src="img/HARI OM CASTING COMPANY PVT. LTD. 9001.jpg" alt="Team Image">
                    	</div>                                        
                    <div class="team-text">
                      <h2>HARI OM CASTING COMPANY PVT. LTD. 9001</h2>
                        <p><?php //echo $row1234['description']?></p>
                     </div></a>
                </div>
            </div>
          
          
          
          <div class="col-lg-4 col-md-6">
                <div class="team-item">                    
                      	 <a  data-toggle="modal" data-target="#myModalcertificate2" style="cursor:pointer">
                           <div class="team-img">
                        	<img src="img/HARI OM CASTING COMPANY PVT. LTD. 14001.jpg" alt="Team Image">
                    	</div>                                        
                    <div class="team-text">
                     <h2>HARI OM CASTING COMPANY PVT. LTD. 14001</h2>
                        <p><?php //echo $row1234['description']?></p>
                           </div></a>
                </div>
            </div>
          
          
          <div class="col-lg-4 col-md-6">
                <div class="team-item">                    
                      <a  data-toggle="modal" data-target="#myModalcertificate3" style="cursor:pointer">
                        <div class="team-img">
                        	<img src="img/HARI OM CASTING COMPANY PVT. LTD. 45001.jpg" alt="Team Image">
                    	</div>                                        
                    <div class="team-text">
                      <h2>HARI OM CASTING COMPANY PVT. LTD. 45001</h2>
                        <p><?php //echo $row1234['description']?></p>
                     </div></a>
                </div>
            </div>
              
              
           <?php //}?>
        </div>
    </div>
</div>
<!-- Team End -->



        
   

<?php include "./include/footer.php"?>