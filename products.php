<?php include "include/header.php";

$about_query1 = "SELECT * FROM `jag_product` where `category`='Complete sewer cover'";
$about_display1 = mysqli_query($connection, $about_query1);

$about_query2 = "SELECT * FROM `jag_product` where `category`='Intresting Gratings'";
$about_display2 = mysqli_query($connection, $about_query2);

$about_query3 = "SELECT * FROM `jag_product` where `category`='Surface Box'";
$about_display3 = mysqli_query($connection, $about_query3);

$about_query4 = "SELECT * FROM `jag_product` where `category`='Mannual Steps & Lifting Key'";
$about_display4 = mysqli_query($connection, $about_query4);







?>
<style>
/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #fff;
  width: 100%;
  height: auto;
  box-shadow: 2px 2px 6px gray;
}
  .technologies-title{
    color:#ff7701;
  }
/* Style the buttons inside the tab */
.tab button {
 display: inline-block;
    background-color: inherit;
    color: black;
    padding:15px 25px 15px 25px;
    width: auto;
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
  float: left;
  padding: 20px 12px;
  /*border: 1px solid #ccc;*/
  width: 100%;
  border-left: none;
  height: 100%;
  /*box-shadow: 2px 2px 6px gray;*/
}

.tab .active{
border-left:5px solid #ff7701;
background:#dedede;
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
  
  .highlight{
    font-weight: 800;
    background: #ff7701;
    font-size: 20px;
    padding: 5px 15px;
    color: #fff;
    border-radius: 0 15px 15px 0;
  }
  
  .price-body ul li{
   text-align:left; 
  }
  .price-header p{
   font-size:18px; 
  }
  .price .price-item.featured-item h3{
   margin-bottom:20px; 
  }
  
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
</style>
</head>
<body>
       <img src="img/Products.jpg" style="width:100%"/>  
  
  
  <div class="container-fluid">
    <div class="row">
      <div style="
    text-align: center;
    display: block;
    width: 100%;
"><h3 style="
    color: #0a0937;
    font-family: system-ui;
    padding-top: 15px;
">PRODUCT SELECTOR / LOADING CLASS</h3></div>
       <div class="col-md-12">

        
        
        <div class="price">
      <div class="price-item">
                           
        <div class="row">
          <div class="col-md-3"><img src="img/x1.PNG" style="width:100%;"/></div>
          <div class="col-md-3"><img src="img/x2.PNG" style="width:100%;"/></div>
          <div class="col-md-3"><img src="img/x3.PNG" style="width:100%;"/></div>
          <div class="col-md-3"><img src="img/x4.PNG" style="width:100%;"/></div>
        </div>
        
        
          </div>
                        </div>
      </div>
    <div class="col-md-12">
      <div class="price">
      
      <div class="price-item featured-item" >
                            <div class="price-header">
                              
                              
                              <p class="text-left"><span class="highlight">Class A 15 </span> The appropriate class of manhole top or gully top to be used depends upon the place
of installation. The selection of the appropriate class is the responsibility of the designer.
However, if there remains any doubt then stronger class should be selected.
</p>
                              <p class="text-left"><span class="highlight">Class B 125 </span> Cover & Gratings capable for withstanding 125KN Test Load mainly used for areas were only
occasional vehicular access like domestic driveways
</p>
                              
                              <p class="text-left"><span class="highlight">Class C 250 </span> Cover & Gratings capable for withstanding 250KN Test Load mainly used for areas were used in
lightly trafficked roads and private car parks.

</p>
                              
                              <p class="text-left"><span class="highlight">Class D 400 </span> Cover & Gratings capable for withstanding 400KN Test Load mainly used for areas where high
trafficked roads like public car parks and lorries access including carriage ways
</p>
                              
                               <p class="text-left"><span class="highlight">Class E 600 </span> Cover & Gratings capable for withstanding 600KN Test Load mainly used for areas where high
wheel loads have access like Non-public roads, industrial loading areas, aircraft cargo handling
pavements.

</p>
                              
                               <p class="text-left"><span class="highlight">Class F 900 </span> Cover & Gratings capable for withstanding 900KN Test Load mainly used in areas like Docks,
Airport Landing strips and extreme heavy-duty application.
</p>
                            </div>
                                                                          
                           
                        </div>
      </div>
    </div>
     
      
      
  </div>
  </div>
  
<div class="main-tech">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'tech1')" id="defaultOpen">Complete Sewer Vent Cover</button>
  <button class="tablinks" onclick="openCity(event, 'tech2')">Intresting Gratings</button>
  <button class="tablinks" onclick="openCity(event, 'tech3')">Surface Box & Tree Grate</button>
  <button class="tablinks" onclick="openCity(event, 'tech4')">Mannual Steps & Lifting Key</button>
  
</div>

<div id="tech1" class="tabcontent">
<div class="main-content">
  <h3 class="technologies-title">Complete Sewer Vent Cover</h3>
  
  <div class="main-logo">
  <?php while($row = mysqli_fetch_assoc($about_display1)){?>
  <div class="technology-logos">
     <a class="btn" target="_blank" href="pdf.php?id=<?php echo $row['id']?>">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> class="tech-images"/>
    </a>
  </div>
  <?php }?>
  
  </div>
</div>
</div>

<div id="tech2" class="tabcontent">
  <div class="main-content">
  <h3 class="technologies-title">Intresting Gratings</h3>
  
  <div class="main-logo">
  <?php while($row = mysqli_fetch_assoc($about_display2)){?>
  <div class="technology-logos">
     <a class="btn" target="_blank" href="pdf.php?id=<?php echo $row['id']?>">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> class="tech-images"/>
    </a>
  </div>
  <?php }?>
  </div>
</div>
</div>

<div id="tech3" class="tabcontent">
   <div class="main-content">
  <h3 class="technologies-title">Surface Box</h3>
  
  <div class="main-logo">
  <?php while($row = mysqli_fetch_assoc($about_display3)){?>
  <div class="technology-logos">
     <a class="btn" target="_blank" href="pdf.php?id=<?php echo $row['id']?>">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> class="tech-images"/>
    </a>
  </div>
  <?php }?>
  
  </div>
</div>
</div>

<div id="tech4" class="tabcontent">
  <div class="main-content">
  <h3 class="technologies-title">Mannual Steps & lifting key</h3>
  
  <div class="main-logo">
  <?php while($row = mysqli_fetch_assoc($about_display4)){?>
  <div class="technology-logos">
     <a class="btn" target="_blank" href="pdf.php?id=<?php echo $row['id']?>">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> class="tech-images"/>
    </a>
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
   <?php include "include/footer.php"?>