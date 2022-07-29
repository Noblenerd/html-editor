<?php
    include('connect.php');
    $id = $_GET['id'];
    
    $result = mysqli_query($con, "SELECT * FROM signatures WHERE ID='$id'") or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $headi = '';
    $table = $row['Tables'];
    $name = $row['Name'];
    $head_t = $row['Head_t'];
    $social_t = $row['Social_t'];
    $contact_t = $row['Contact_t'];
    $logo_t = $row['Logo_t'];
    $heady = explode('~', $row['Head']);
    $head_n = count($heady);
    for($i=0;$i<$head_n;$i++) {
        $headi .= $heady[$i];
    }
    
    $sociali = '';
    $socialy = explode('~', $row['Social']);
    $social_n = count($socialy);
    for($i=0;$i<$social_n;$i++) {
        $sociali .= $socialy[$i];
    }
    
    $contacti = '';
    $contacty = explode('~', $row['Contact']);
    $contact_n = count($contacty);
    for($i=0;$i<$contact_n;$i++) {
        $contacti .= $contacty[$i];
    }
    
    $logoi = '';
    $logoy = explode('~', $row['Logo']);
    $logo_n = count($logoy);
    for($i=0;$i<$logo_n;$i++) {
        $logoi .= $logoy[$i];
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title> HTML </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <script src='spectrum.js'></script>
<link rel='stylesheet' href='spectrum.css' />
<script src="https://fastcdn.org/FileSaver.js/1.1.20151003/FileSaver.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" integrity="sha256-a2tobsqlbgLsWs7ZVUGgP5IvWZsx8bTNQpzsqCSm5mk=" crossorigin="anonymous" />
  
  <style>
	html {
	    height:100%;
	}
	.men {
  display: block;
  position: fixed;
  bottom: 0px;
  right: 0px;
  width: 100%;
  height: 60px;
  //border-radius: 50%;
  background: red;
  color: #fff;
  text-align: center;
  font-size: 16x;
  z-index:20;
}
    a {
        text-decoration:none;
    }
     
    .flex-fill:hover {
        transform: scale(1.14);
    }
    .flex-fill:active {
        transform: scale(1.14);
    }
    .jolof a{
        box-shadow:1px 1px 1px 1px red;
    }
	.men_desk {
			display:none;
		}
	.naty input[type="radio"] {
		visibility: hidden;
		
	}
	.naty input[type="radio"] + label {
		cursor: pointer;
		color:white;
		
	}
	.naty input[type="radio"]:checked + label{
		
		color: red;
	}
	.formy {
		width:47%;
		padding:9px;
		float:left;
	}
	@media screen AND (min-width: 550px) {
		.formy {
			width:31%;
			padding:9px;
		}
		.wr {
			border-right: 2px groove white;
		}
		.men {
			display:none;
		}
		.men_desk {
			display:block;
		}
	}
  </style>
  <script>
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev, ft) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  var dis = addElem(data, ft);
  var ti = document.createElement("span");    
  //var dat = document.createElementNode(dis);
  ti.innerHTML = dis;
  ev.target.appendChild(ti);
}
</script>
	<script>
		$('document').ready(function() {
			$('.search-form').hide();
			$('.logy').show();
			$('.regy').hide();
			$('.pshow').show();
			$('.pupd').hide();
			$('.serv_5').hide();
			$('.serv_6').hide();
			$('.serv_7').hide();
			$('.sec_2').hide();
			
			$('.search-icon').click(function() {
				$('.search-form').toggle();
			})
			$('.regg').click(function() {
				$('.logy').toggle();
				$('.regy').toggle();
			})
			
			$('.logg').click(function() {
				$('.logy').toggle();
				$('.regy').toggle();
			})
			$('.pup').click(function() {
				$('.pshow').toggle();
				$('.pupd').toggle();
			})
			$('.psh').click(function() {
				$('.pshow').toggle();
				$('.pupd').toggle();
			})
			
		});
	</script>
  </head>
<body class="bg-white" style="height:100%;">

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8 bg-white animated slideInDown print" style="border:1px solid rgba(0,0,0,.1);padding:5px;width:100%;">
				<?php 
				    if($table == 'default') {
				        echo '<div style="overflow:auto;width:100%;">
				<div class="yhead" style="float:left;width:70%;position:relative;' .$head_t .'">' . htmlspecialchars_decode($headi) .' </div>
				<div class="ysocial" style="float:left;width:29%;position:relative;' .$social_t .'">' .htmlspecialchars_decode($sociali) .' </div>
			</div><hr>
				<div style="overflow:auto;">
				<div class="ycontact" style="float:left;width:64%;position:relative;' .$contact_t .'">
					'. htmlspecialchars_decode($contacti) .'
				</div>
				<div class="ylogo" style="float:left;width:34%;position:relative;' .$logo_t .'">' . htmlspecialchars_decode($logoi) .' </div>
			</div>';        
				    }
				    
				    
				    else if($table == '1x2') {
				        echo '<div style="overflow:auto;width:100%;">
				<div class="yhead" style="float:left;width:50%;position:relative;' .$head_t .'">' . htmlspecialchars_decode($headi) .' </div>
				<div class="ysocial" style="float:left;width:49%;position:relative;' .$social_t .'">' .htmlspecialchars_decode($sociali) .' </div>
			</div><hr>
				<div style="overflow:auto;">
				<div class="ycontact" style="float:left;width:100%;' .$contact_t .'">
					'. htmlspecialchars_decode($contacti) .'
				</div>
				<div class="ylogo" style="float:left;width:100%;' .$logo_t .'">' . htmlspecialchars_decode($logoi) .' </div>
			</div>';        
				    }
				    else if($table == '1x1') {
				        echo '<div style="overflow:auto;width:100%;">
				<div class="yhead" style="width:100%;' .$head_t .'">' . htmlspecialchars_decode($headi) .' </div>
				<div class="ysocial" style="float:left;width:100%;' .$social_t .'">' .htmlspecialchars_decode($sociali) .' </div>
			</div><hr>
				<div style="overflow:auto;">
				<div class="ycontact" style="float:left;width:100%;' .$contact_t .'">
					'. htmlspecialchars_decode($contacti) .'
				</div>
				<div class="ylogo" style="float:left;width:100%;' .$logo_t .'">' . htmlspecialchars_decode($logoi) .' </div>
			</div>';        
				    }
				    
				else if($table == '1x3') {
				        echo '<div style="overflow:auto;width:100%;">
				<div class="yhead" style="float:left;width:33%;position:relative;' .$head_t .'">' . htmlspecialchars_decode($headi) .' </div>
				<div class="ysocial" style="float:left;width:33%;position:relative;' .$social_t .'">' .htmlspecialchars_decode($sociali) .' </div>
				<div class="ycontact" style="float:left;width:33%;position:relative;' .$contact_t .'">
					'. htmlspecialchars_decode($contacti) .'
				</div>
			</div><hr>
				<div style="overflow:auto;">
				
				<div class="ylogo" style="float:left;width:100%;' .$logo_t .'">' . htmlspecialchars_decode($logoi) .' </div>
			</div>';        
				    }
				    
				    
				else if($table == '2x2') {
				        echo '<div style="overflow:auto;width:100%;">
				<div class="yhead" style="float:left;width:50%;position:relative;' .$head_t .'">' . htmlspecialchars_decode($headi) .' </div>
				<div class="ysocial" style="float:left;width:49%;position:relative;' .$social_t .'">' .htmlspecialchars_decode($sociali) .' </div>
			</div><hr>
				<div style="overflow:auto;">
				<div class="ycontact" style="float:left;width:50%;position:relative;' .$contact_t .'">
					'. htmlspecialchars_decode($contacti) .'
				</div>
				<div class="ylogo" style="float:left;width:49%;position:relative;' .$logo_t .'">' . htmlspecialchars_decode($logoi) .' </div>
			</div>';        
				    }
				    
				else if($table == '2x3') {
				        echo '<div style="overflow:auto;width:100%;">
				<div class="yhead" style="float:left;width:100%;' .$head_t .'">' . htmlspecialchars_decode($headi) .' </div>
				
			</div><hr>
				<div style="overflow:auto;">
				<div class="ysocial" style="float:left;width:33%;position:relative;' .$social_t .'">' .htmlspecialchars_decode($sociali) .' </div>
				<div class="ycontact" style="float:left;width:33%;position:relative;' .$contact_t .'">
					'. htmlspecialchars_decode($contacti) .'
				</div>
				<div class="ylogo" style="float:left;width:33%;position:relative;' .$logo_t .'">' . htmlspecialchars_decode($logoi) .' </div>
			</div>';        
				    }
				    else {
				        echo '<div style="overflow:auto;width:100%;">
				<div class="yhead" style="float:left;width:70%;position:relative;' .$head_t .'">' . htmlspecialchars_decode($headi) .' </div>
				<div class="ysocial" style="float:left;width:29%;position:relative;' .$social_t .'">' .htmlspecialchars_decode($sociali) .' </div>
			</div><hr>
				<div style="overflow:auto;">
				<div class="ycontact" style="float:left;width:64%;position:relative;' .$contact_t .'">
					'. htmlspecialchars_decode($contacti) .'
				</div>
				<div class="ylogo" style="float:left;width:34%;position:relative;' .$logo_t .'">' . htmlspecialchars_decode($logoi) .' </div>
			</div>';        
				    }
				?>
				
			
		</div>
    </div>
</div>
</html>


<button class="btn btn-danger cancel" style="position:absolute;top:0;"> Cancel </button>
<button class="btn btn-success export" style="position:absolute;top:0;right:0;"> Export </button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js" integrity="sha512-csNcFYJniKjJxRWRV1R7fvnXrycHP6qDR21mgz1ZP55xY5d+aHLfo9/FcGDQLfn2IfngbAHd8LdfsagcCqgTcQ==" crossorigin="anonymous"></script>
<script>
    $('.export').click(function() {
        
        var blob = new Blob([$("html").html()], {type: "text/html;charset=utf-8"});
saveAs(blob, "<?php echo $name; ?>.html");    
    });
     $('.cancel').click(function() {
        
        location.href="edit.php";
    });
    
</script>
