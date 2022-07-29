<!DOCTYPE html>
<html lang="en">
<head>
  <title> HTML Editor </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <script src='spectrum.js'></script>
<link rel='stylesheet' href='spectrum.css' />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" integrity="sha256-a2tobsqlbgLsWs7ZVUGgP5IvWZsx8bTNQpzsqCSm5mk=" crossorigin="anonymous" />
  
  <style>
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
<body class="bg-light">


<section class="bg-danger">
	
	
	
</section>

<div class="container-fluid">
	<div class="row jolof">
		<div class="col-sm-12 bg-white">
			<span><a href="index.php" style="text-decoration:none;float:left;" class="pr-3">	
			<h1 class="animated fadeInLeft" style="color:#777;"> EDITOR </h1>
		</a>
		
		</div>
		
	</div>
</div>				

<div class="container-fluid" style="background-color:#61a733;">
    <div class="row">
        
        <div class="col-sm-2">
        </div>
        <div class="col-sm-10">
            <br><br><div class="row">
                <?php
                
                include('connect.php');
                $user = 'exclaimer';
                if(isset($_GET['dell'])) {
                    echo 'Signature Deleted!';
                }
                $result = mysqli_query($con, "SELECT * FROM signatures WHERE Username='$user' ORDER BY ID DESC") or die(mysqli_error($con));
                while($row = mysqli_fetch_array($result)) {
                    echo '<div align="center" class="col-sm-3 card m-2">
                    <h3> ' .$row['Name'] .' </h3>
                    <img src="2.jpg" height="120px" width="100%"> <br>
                    <b> Name: </b> <i style="color:#61a733;"> ' .$row['Name'] .' </i> <br>
                    <b> Username: </b> <i style="color:#61a733;"> ' .$row['Username'] .' </i> <br>
                    <b> Email: </b> <i style="color:#61a733;"> Details needed </i> <br> <br>
                    <div style="overflow:auto;">
                    <a href="viewer.php?id=' .$row['ID'] .'" class="btn text-white" style="box-shadow:1px 1px 1px 1px red;background-color:#61a733;width:49%;float:left;"> View </a><a href="editing.php?id=' .$row['ID'] .'" class="btn text-white" style="box-shadow:1px 1px 1px 1px red;background-color:#61a733;width:49%;float:left;"> Edit </a><a href="delete_sig.php?id=' .$row['ID'] .'" class="btn text-white" style="box-shadow:1px 1px 1px 1px red;background-color:#61a733;width:49%;float:left;"> Delete </a></div><br>
                </div>';    
                }
            ?>
                
              
                <div align="center" class="col-sm-3 card m-2" style="height:180px;">
                    <br><br><br>
                    <a href="editor.php" class="btn text-white" style="box-shadow:1px 1px 1px 1px red;background-color:#61a733"> Add new Signature </a>
                </div>
            </div>
        </div>
    </div>  
</div>