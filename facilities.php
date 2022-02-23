<?php include "./include/header.php";
include "db.php";

$about_query1 = "SELECT * FROM `jag_chairman`where `description`='MELTING'";
$about_display1 = mysqli_query($connection, $about_query1);


$about_query2 = "SELECT * FROM `jag_chairman`where `description`='MOULDING'";
$about_display2 = mysqli_query($connection, $about_query2);


$about_query3 = "SELECT * FROM `jag_chairman`where `description`='INSPECTION'";
$about_display3 = mysqli_query($connection, $about_query3);

$about_query4 = "SELECT * FROM `jag_chairman`where `description`='CARRIER MACHINES'";
$about_display4 = mysqli_query($connection, $about_query4);

$about_query5 = "SELECT * FROM `jag_chairman`where `description`='FETTLING & PAINTING'";
$about_display5 = mysqli_query($connection, $about_query5);

$about_query6 = "SELECT * FROM `jag_chairman`where `description`='AUXILLARY MACHINE'";
$about_display6 = mysqli_query($connection, $about_query6);

$about_query7 = "SELECT * FROM `jag_chairman`where `description`='POLLUTION CONTROL & RAIN WATER HARVESTING'";
$about_display7 = mysqli_query($connection, $about_query7);
//$about_result = mysqli_fetch_assoc($about_display);

?>

<style>
/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color:#0a0937;
  width: 100%;
  height: auto;
  box-shadow: 2px 2px 6px gray;
}
  .technologies-title{
    color:#ff7701;
   
  }
/* Style the buttons inside the tab */
.tab button {
  width:100%;
 display: inline-block;
    background-color: inherit;
    color: #fff;
    padding:15px 25px 15px 25px;
    /*width: auto;*/
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 0.9em;
    font-weight: 600;
}

/* Change background color of buttons on hover */
.tab button:hover {
  color: #005eb8;
}

/* Style the tab content */
.tabcontent {
  position:relative;
  float: left;
  padding: 0px 12px;
  /*border: 1px solid #ccc;*/
  width: 100%;
  border-left: none;
  height: 100%;
  /*box-shadow: 2px 2px 6px gray;*/
}

.tab .active{
border-left:5px solid #ff7701;
background:#171644;
color:#ff7701;
  font-weight: 700;
}

.technologies-title:after{
content: '';
    display: block;
    width: 40px;
    height: 2px;
    background-color: #ed8b00;
    margin: 12px 0 0;
	}
.technologies-content{
	font-size: 18px;
    line-height: 1.78;
    text-align: left;
    margin-bottom: 0;
	}
.technology-logos{
  width:200px;
	margin-right: 12px;
    display: flex;
    flex-wrap: wrap;
    /* height: 100px;
    height: 100px;
    width: 115px; */
    padding: 10px;
    background: #fff;
    margin-right: 10px;
    /* -webkit-box-shadow: 0 2px 6px 0 rgba(0,0,0,.05); */
    box-shadow: 0 14px 14px 0 rgba(0,0,0,.09);
    margin-bottom: 10px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
	}
.tech-images{
	max-height: 100%;
    max-width: 100%;
	}
	.main-logo{
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
	}
.main-tech{
  margin-top:50px;
	height:auto;
width:100%;
box-shadow: 0 2px 6px 0 rgba(0,0,0,.05);
	}
@media(max-width:700px){
.tab button {	
width: 40%;
}
	}
  .footer {
    position: inherit!important;
  }
  
  
  
  @media(min-width:576px){
    
.main-tech {
    display: flex;
}

.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #171644;
    width: 300px!important;
    height: 100%;
    }
}
  
  @media(min-width:576px){
   .facilities-text {
     padding: 0 120px;
    }
  }
</style>
</head>
<body>
<img src="img/facilities.jpg" style="width:100%"/>  
  
  <div style="padding:10px;">
  
  <p style="margin-top:10px" class="facilities-text">Hariom Casting Co. Pvt. Ltd. is one of the leading iron casting companies in eastern India. The
company was setup in the year 2012 in Jamshedpur, popularly known as Steel City in Jharkhand
known for its rich deposit or metal ores, coal and minerals. The city is also well connected with
the rail network and in a close proximity of sea and air ports which enable us to do the
international business with ease. <br>
  <br>The massive railway network and other modes of transportation between the states
Jharkhand and west Bengal connecting us to The ports at Kolkata and Haldia helps us to
reach the International market and makes it one of the most convenient place for a
merchant to do business in India.<br>
<br>Further, the company has enriched its knowledge and experience in casting the items 
ranging from 5 Kg to 900 kg with perfection.
This experience has also been augmented by sophisticated, IT system and 
applications software for design, IOT, enterprise applications, testing facilities with 
chemical and mechanical lab, load test machine, spectrometer, advance microscopes 
      and image analyzer.<br>
    <br>With dual induction furnace of Inductotherm of 1 ton each and fully automated sand 
plant with throughput of 40 tons per hour we have the production capacity of 2 tons 
of casting per hour. The spinner hanger type shot blasting has also been installed for 
better surface finish of the castings.<br>
    <br>We also use black bitumen, epoxy and water based paint. The paints coating is also 
checked for its quality by proper devices.<br>
    <br>A proper pollution control devices and equipment (wet scrubber bag type duct 
collectors, cyclone filters) and rain water harvesting systems have also been installed 
in the plant.<br>
    <br>An integral part of the production facility is the culture of safety which is the 
essential tenet in every action we perform in the plant and the commitment for 
making a safer work atmosphere is mandatory for everyone working in the company.</p>
  </div>
<div class="main-tech">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'tech1')" id="defaultOpen">MELTING</button>
  <button class="tablinks" onclick="openCity(event, 'tech2')">MOULDING</button>
  <button class="tablinks" onclick="openCity(event, 'tech3')">INSPECTION</button>
  <button class="tablinks" onclick="openCity(event, 'tech4')">CARRIER MACHINES</button>
  <button class="tablinks" onclick="openCity(event, 'tech5')">FINISHING</button>
  <button class="tablinks" onclick="openCity(event, 'tech6')">AUXILLARY MACHINE</button>
  <button class="tablinks" onclick="openCity(event, 'tech7')">POLLUTION CONTROL & RAIN WATER HARVESTING</button>
  <button class="tablinks" onclick="openCity(event, 'tech8')">OFFICE & INFRASTRUCTURE</button>
  
  
  
  
  
  
  
</div>
 
<div id="tech1" class="tabcontent">
  <h3 class="technologies-title">MELTING</h3>
<div class="main-content">
   
  <div class="main-logo">
            <?php while($about_result1 = mysqli_fetch_assoc($about_display1)){?>
  <div class="technology-logos" data-toggle="tooltip" title="">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result1['image']) . '"' ?> class="tech-images" />
   <h6 style="
    width: 100%;
    text-align: center;
    color: #0a0937;
    margin-top: 10px;
"><?php echo $about_result1['title'];?></h6>
  </div>
  <?php }?>
    
  </div>
</div>
</div>

<div id="tech2" class="tabcontent">
  <div class="main-content">
  <h3 class="technologies-title">MOULDING</h3>
  
  <div class="main-logo">
  <?php while($about_result2 = mysqli_fetch_assoc($about_display2)){?>
  <div class="technology-logos">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result2['image']) . '"' ?> class="tech-images" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"/>
    <h6 style="
    width: 100%;
    text-align: center;
    color: #0a0937;
    margin-top: 10px;
"><?php echo $about_result2['title'];?></h6>

  </div>
    <?php }?>
  
  </div>
</div>
</div>

<div id="tech3" class="tabcontent">
   <div class="main-content">
  <h3 class="technologies-title">INSPECTION</h3>
  
  <div class="main-logo">
  <?php while($about_result3 = mysqli_fetch_assoc($about_display3)){?>
  <div class="technology-logos">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result3['image']) . '"' ?> class="tech-images" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"/>
  <h6 style="
    width: 100%;
    text-align: center;
    color: #0a0937;
    margin-top: 10px;
"><?php echo $about_result3['title'];?></h6>

  </div>
    <?php }?>
  
  </div>
</div>
</div>

<div id="tech4" class="tabcontent">
  <div class="main-content">
  <h3 class="technologies-title">CARRIER MACHINES</h3>
  
  <div class="main-logo">
  <?php while($about_result4 = mysqli_fetch_assoc($about_display4)){?>
  <div class="technology-logos">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result4['image']) . '"' ?> class="tech-images" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"/>
   <h6 style="
    width: 100%;
    text-align: center;
    color: #0a0937;
    margin-top: 10px;
"><?php echo $about_result4['title'];?></h6>

  </div>
  <?php }?>
  </div>
</div>
</div>
  
  <div id="tech5" class="tabcontent">
  <div class="main-content">
  <h3 class="technologies-title">FINISHING</h3>
  
  <div class="main-logo">
  <?php while($about_result5 = mysqli_fetch_assoc($about_display5)){?>
  <div class="technology-logos">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result5['image']) . '"' ?> class="tech-images" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"/>
      <h6 style="
    width: 100%;
    text-align: center;
    color: #0a0937;
    margin-top: 10px;
"><?php echo $about_result5['title'];?></h6>
  </div>
  <?php }?>
  </div>
</div>
</div>
  
  <div id="tech6" class="tabcontent">
  <div class="main-content">
  <h3 class="technologies-title">AUXILLARY MACHINE</h3>
  
  <div class="main-logo">
  <?php while($about_result6 = mysqli_fetch_assoc($about_display6)){?>
  <div class="technology-logos">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result6['image']) . '"' ?> class="tech-images" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"/>
    <h6 style="
    width: 100%;
    text-align: center;
    color: #0a0937;
    margin-top: 10px;
"><?php echo $about_result6['title'];?></h6>

  </div>
 <?php }?> 
  </div>
</div>
</div>
  
  <div id="tech7" class="tabcontent">
  <div class="main-content">
  <h3 class="technologies-title">POLLUTION CONTROL & RAIN WATER HARVESTING</h3>
  
  <div class="main-logo">
  <?php while($about_result7 = mysqli_fetch_assoc($about_display7)){?>
  <div class="technology-logos">
  <img 
<?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result7['image']) . '"' ?> class="tech-images" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"/>
        <h6 style="
    width: 100%;
    text-align: center;
    color: #0a0937;
    margin-top: 10px;
"><?php echo $about_result7['title'];?></h6>

  </div>
  <?php }?>
  </div>
</div>
</div>

  <div id="tech7" class="tabcontent">
  <div class="main-content">
  <h3 class="technologies-title">POLLUTION CONTROL & RAIN WATER HARVESTING</h3>
  
  <div class="main-logo">
  <?php while($about_result8 = mysqli_fetch_assoc($about_display8)){?>
  <div class="technology-logos">
  <img 
<?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result8['image']) . '"' ?> class="tech-images" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"/>
        <h6 style="
    width: 100%;
    text-align: center;
    color: #0a0937;
    margin-top: 10px;
"><?php echo $about_result8['title'];?></h6>

  </div>
  <?php }?>
  </div>
</div>
</div>
</div>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
  
  <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
   <?php include "include/footer.php"?>