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
			$('.head_t').hide();
			$('.social_t').hide();
			$('.contact_t').hide();
			$('.logo_t').hide();
			
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
<body class="bg-light" style="height:100%;">


<section>
	
	
	


<div class="container-fluid">
	<div class="row jolof">
		<div class="col-sm-12 bg-white d-flex justify-content-between">
			<span><a href="index.php" style="text-decoration:none;float:left;" class="pr-3">	
			<h1 class="animated fadeInLeft" style="color:#777;"> EDITOR </h1>
		</a>
		<a href="editor.php" target="_blank" rel="noopener noreferrer" class="btn m-2" style="background-color:#61a733;color:white;"> New </a> <a href="#savy" data-toggle="collapse" class="btn m-2" style="background-color:#61a733;color:white;"> Save </a> <a href="#savy" data-toggle="collapse" class="btn m-2" style="background-color:#61a733;color:white;"> Save As </a> </span>
		
		<span>
			<a href="edit.php" class="btn m-2" style="background-color:#61a733;color:white;"> View </a> <a href="" class="btn m-2" style="background-color:#61a733;color:white;"> Help </a> <a href="edit.php" class="btn m-2" style="background-color:#61a733;color:white;"> Close </a> </span>
		</div>
		<div class="col-sm-8" style="background-color:#61a733;">
			<br><div class="row">
			<div class="col-sm-3 animated fadeInLeft">
			<br>
			<div class="card" style="background-color:inherit;">
			
			<a href="#f1" data-toggle="collapse"><li align="center" class="list-group-item m-0 p-2 text-white d-flex justify-content-between" style="background-color:#61a733;"><span>Texts & Fields</span><span class="fas fa-angle-down"></span></li></a>
		        <div align="center" class="collapse bg-white" id="f1">
		            <div class="d-flex justify-content-between">
		            <a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="p" draggable="true" ondragstart="drag(event)" onclick="addElem('p')"> Texts <br> New Line</a> 
			        <a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="label" draggable="true" ondragstart="drag(event)" onclick="addElem('textarea')"> Textfield <br> Same Line </a>
			        </div>
			        <div class="d-flex justify-content-between">
			        <a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="address" draggable="true" ondragstart="drag(event)" onclick="addElem('address')"> Address </a>
			        
			        <a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="address" draggable="true" ondragstart="drag(event)" onclick="addElem('address')"> Contact </a>
			        </div>
			        <div class="d-flex justify-content-between">
			        <a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="address" draggable="true" ondragstart="drag(event)" onclick="addElem('address')"> Personal </a>
			        
			        </div>
			    </div>
			    
			    <a href="#f4" data-toggle="collapse"><li align="center" class="list-group-item m-0 p-2 text-white d-flex justify-content-between" style="background-color:#61a733;"><span>Social Media</span><span class="fas fa-angle-down"></span></li></a>
		        <div align="center" class="collapse bg-white" id="f4">
		            <div class="d-flex justify-content-between">
		            
			
					<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="facebook" draggable="true" ondragstart="drag(event)" onclick="addEle('facebook', 'a')"> <span class="fab fa-facebook"></span> </a>
					<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="twitter" draggable="true" ondragstart="drag(event)" onclick="addEle('twitter', 'a')"> <span class="fab fa-twitter"></span> </a>
					</div>
					<div class="d-flex justify-content-between">
					<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="linkedin" draggable="true" ondragstart="drag(event)" onclick="addEle('linkedin', 'a')"> <span class="fab fa-linkedin"></span> </a>
					<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="instagram" draggable="true" ondragstart="drag(event)" onclick="addEle('instagram', 'a')"> <span class="fab fa-instagram"></span> </a>
					</div>
					<div class="d-flex justify-content-between">
					<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="google-plus" draggable="true" ondragstart="drag(event)" onclick="addEle('google-plus', 'a')"> <span class="fab fa-google-plus"></span> </a>
					</div>
				</div>
			
			    <a href="#f3" data-toggle="collapse"><li align="center" class="list-group-item m-0 p-2 text-white d-flex justify-content-between" style="background-color:#61a733;"><span>Legal & Compliance</span><span class="fas fa-angle-down"></span></li></a>
		        <div align="center" class="collapse bg-white" id="f3">
		            <div class="d-flex justify-content-between">
		            
			
					<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="h1" draggable="true" ondragstart="drag(event)" onclick="addElem('h1')"> H1 </a>
					<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="h2" draggable="true" ondragstart="drag(event)" onclick="addElem('h2')"> H2 </a>
					</div>
					<div class="d-flex justify-content-between">
					<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="h3" draggable="true" ondragstart="drag(event)" onclick="addElem('h3')"> H3 </a>
					<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="h4" draggable="true" ondragstart="drag(event)" onclick="addElem('h4')"> H4 </a>
					</div>
					<div class="d-flex justify-content-between">
					<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="h5" draggable="true" ondragstart="drag(event)" onclick="addElem('h5')"> H5 </a>
					</div>
				</div>
				<a href="#f5" data-toggle="collapse"><li align="center" class="list-group-item m-0 p-2 text-white d-flex justify-content-between" style="background-color:#61a733;"><span>Tables</span><span class="fas fa-angle-down"></span></li></a>
		        <div align="center" class="collapse bg-white" id="f5">
		            <div class="d-flex justify-content-between">
		            
			        <a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="1x1" draggable="true" ondragstart="drag(event)" onclick="addElem('h1')"> 1x1 </a>
					<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="1x2" draggable="true" ondragstart="drag(event)" onclick="addElem('h1')"> 1x2 </a>
					<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="1x3" draggable="true" ondragstart="drag(event)" onclick="addElem('h2')"> 1x3 </a>
					</div>
					<div class="d-flex justify-content-between">
					<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="2x2" draggable="true" ondragstart="drag(event)" onclick="addElem('h3')"> 2x2 </a>
					<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="2x3" draggable="true" ondragstart="drag(event)" onclick="addElem('h4')"> 2x3 </a>
					</div>
					
				</div>
			
			    <a href="#f2" data-toggle="collapse"><li align="center" class="list-group-item m-0 p-2 text-white d-flex justify-content-between" style="background-color:#61a733;"><span>Images & Icons</span><span class="fas fa-angle-down"></span></li></a>
		        <div align="center" class="collapse bg-white" id="f2">
		            <div class="d-flex justify-content-between">
		            
			<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="img" draggable="true" ondragstart="drag(event)" onclick="addElem('textarea')"> Image </a>
			<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="a" draggable="true" ondragstart="drag(event)" onclick="addElem('a')"> Hyperlink </a>
			    </div>
			    <div class="d-flex justify-content-between">
		            
			<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="banner" draggable="true" ondragstart="drag(event)" onclick="addElem('textarea')"> Banner </a>
			<a class="flex-fill p-3" style="color:#61a733;border:1px dotted rgba(0,0,0,.1);" id="logo" draggable="true" ondragstart="drag(event)" onclick="addElem('a')"> Logo </a>
			    </div>
			  </div>
				
			
			</div>
		
		</div>
		<div class="col-sm-9">
			<br><br><br><br><br><br><br>
			<form method="post" action="" enctype="multipart/form-data">
					<div class="render_a">
					<div class="row bg-white m-5 animated bounceInUp render" style="box-shadow:1px 1px 1px 1px red;">
						
						<div class="col-sm-6 mb-2" id="head" style="border:1px 1px 1px 1px groove silver;" ondrop="drop(event, 'head')" ondragover="allowDrop(event)">
							<br>
							<input type="hidden" name="head_num" class="head_num" value="0">
						</div>
						<div class="col-sm-6 mb-2" id="social" style="border:1px 1px 1px 0px groove silver;" ondrop="drop(event, 'social')" ondragover="allowDrop(event)">
							<br>
							<input type="hidden" name="social_num" class="social_num" value="0">
						</div>
						<div class="col-sm-6 mb-2" id="contact" style="border:0px 1px 1px 1px groove silver;" ondrop="drop(event, 'contact')" ondragover="allowDrop(event)">
							<br>
							<input type="hidden" name="contact_num" class="contact_num" value="0">
						</div>
						<div class="col-sm-6 mb-2" id="logo" style="border:0px 1px 1px 0px groove silver;" ondrop="drop(event, 'logo')" ondragover="allowDrop(event)">
							<br>
							<input type="hidden" name="logo_num" class="logo_num" value="0">
						</div>
							
						
					</div>
					</div>
					<input type="hidden" name="activa" class="activa">
					<input type="hidden" name="setting" class="setting">
					<input type="hidden" name="simg" class="simg">
					<input type="hidden" name="biu" class="biu" value="0">
					<input type="hidden" name="table" class="table" value="default">
			
		</div>
		</div>
		</div>
		<div class="col-sm-4 bg-white animated slideInDown" style="border:1px solid rgba(0,0,0,.1);padding:5px;height:1200px;">
			<div style="overflow:auto;">
				<img style="float:left;margin:5px;" src="1.jpg" height="50px" width="50px">
				<div style="float:left;"><h5 class="border border-light"> Shobha Newsletter </h5><label> RE: Contact Details </label></div>
			</div><hr>
			<label>
				Dear Mr. Jones, <br>
				My contact information is in my email signature below. <br>
				Regards, <br>
				
				<div class="renderd_a">
				    <div class="renderd">
    				<div class="render" style="overflow:auto;">
    				<div class="yhead" style="float:left;width:78%;position:relative;padding:9px;"> </div>
    				<div class="ysocial" style="float:left;position:relative;width:20%;padding:9px;"> </div>
    			</div><hr>
    				<div style="overflow:auto;">
    				<div class="ycontact" style="float:left;width:67%;position:relative;padding:9px;">
    					
    				</div>
    				<div class="ylogo" style="float:left;position:relative;width:30%;padding:9px;"> </div>
			        </div><hr>
			       </div>
			       </div>
				<b>From:</b> Peter Jones <br>
				<b>Sent:</b> Monday, July 18, 9:28 AM <br>
				<b>To:</b> User <br>
				<b>Subject:</b> Contact details<br>


				Dear Sir/Madam, <br>

				Could you please send me your contact details? <br>

				Regards <br>

				Peter Jones
			</label>
		</div>
	</div>
</div>				

<div class="container collapse fully" id="fullElement" style="top:40%;position:absolute;z-index:50;">
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4 bg-light border border-primary">
			<p align="right"><a href="#fullElement" data-toggle="collapse"><span class="fas fa-window-close x2"></span></a></p>
			<h4 align="center"> SETTINGS </h4>
			<div align="center" class="d-flex justify-content-between">
				<span> Alignment: </span>
				<span class="fas fa-align-left" onclick="update('text-align', 'left')"> Left </span>
				<span class="fas fa-align-center" onclick="update('text-align', 'center')"> Center </span>
				<span class="fas fa-align-right" onclick="update('text-align', 'right')"> Right </span>
			</div><br>
			<div align="center" class="d-flex justify-content-between">
				<span> Style: </span>
				<span class="fas fa-bold" onclick="update('font-weight', 'bold')"> Bold </span>
				<span class="fas fa-italic" onclick="update('font-style', 'italic')"> Italics </span>
				<span class="fas fa-underline" onclick="update('text-decoration', 'underline')"> Underline </span>
			</div><br>
			<div align="center" class="d-flex justify-content-between">
				<span> Display Mode: </span>
				<span class="fas fa-bold" onclick="update('display', 'block')"> Block </span>
				<span class="fas fa-italic" onclick="update('display', 'inline')"> Inline </span>
				<span class="fas fa-italic" onclick="update('display', 'block-inline')"> Block-inline </span>
			</div><br>
		    
		    
		       <div align="center" class="d-flex justify-content-between simgs">
				
				
			</div><br>
			<div align="center" class="d-flex justify-content-between">
				<span> Padding: </span>
				<span> <input type='text' onchange="update('padding', this.value)" placeholder="e.g 1, 2, 3, 5, 9"></span>
				
				
			</div><br>
			<div align="center" class="d-flex justify-content-between">
				<span> Font Size: </span>
				<span> <input type='text' onchange="update('font-size', this.value)" placeholder="e.g 1, 2, 3, 5, 9"></span>
				
				
			</div><br>
			<div align="center" class="d-flex justify-content-between">
				<span> Font Family: </span>
				<span> <select onchange="update('font-family', this.value)">
				        <option> arial </option>
				        <option> times new roman </option>
				        <option> helvetica </option>
				        <option> times </option>
				        <option> courier </option>
				        <option> verdana </option>
				        <option> courier new </option>
				        <option> arial narrow </option>
				        <option> candara </option>
				        <option> geneva </option>
				        <option> calibri </option>
				        <option> optima </option>
				        <option> cambria </option>
				        <option> garamond </option>
				        <option> perpetua </option>
				        <option> monaco </option>
				        <option> didot </option>
				        <option> bush script mt </option>
				        <option> lucida bright </option>
				        <option> copperplate </option>
				        <option> Monospace </option>
				        <option> sans-serif </option>
				        <option> cursive </option>
				        <option> system-ui </option>
				        <option> Fantasy  </option>
				       

				    </select>
				</span>
				
				
			</div><br>
			<div align="center" class="d-flex justify-content-between">
				<span> Margin: </span>
				
				<span> <input type='text' onchange="update('margin', this.value)" placeholder="e.g 1, 2, 3, 5, 9"></span>
				
			</div><br>
			<div align="center" class="d-flex justify-content-between">
				<span> Text Color: </span>
				<span> <input type='color' onchange="update('color', this.value)"></span>
				
			</div><br>
			<div align="center" class="d-flex justify-content-between">
				<span> Background Color: </span>
				<span> <input type='color' onchange="update('background-color', this.value)"></span>
				
			</div><br>
			<div align="center" class="d-flex justify-content-between">
				<span> Left Vertical Line: </span>
				
				<span> <input type='color' onchange="update('border-left', this.value)"></span>
				
			</div><br>
			<div align="center" class="d-flex justify-content-between">
				<span> Right Vertical Line: </span>
				
				<span> <input type='color' onchange="update('border-right', this.value)"></span>
				
			</div><br>
			<div align="center" class="d-flex justify-content-between">
				<span> Top Horizontal Line: </span>
				
				<span> <input type='color' onchange="update('border-top', this.value)"></span>
				
			</div><br>
			<div align="center" class="d-flex justify-content-between">
				<span> Bottom Horizontal Line: </span>
				
				<span> <input type='color' onchange="update('border-bottom', this.value)"></span>
				
			</div><br>
			
		</div>
	</div>
</div>

<div class="container collapse" id="savy" style="top:25%;position:absolute;z-index:70;">
	<div class="row">
		<div class="col-sm-4 m-0 p-0">
		</div>
		<div class="col-sm-4 bg-light border border-primary">
			<li align="center" class="list-group-item bg-info m-0 p-0"> Save As</li>
			<p align="right"><span class="fas fa-window-close align-right" data-toggle="collapse" data-target="#savy"></span></p>
			<div class="feedback text-danger"></div>
			<div class="form-group">
			     <div class="input-group">
			         <input type="text" name="name" class="form-control name" placeholder="Enter the name of the Signature" required>
			         </div>
			 </div>
			         <button type="button" class="btn btn-primary" onclick="sub()">Submit Signature </button><br>
		</div>
	</div>
</div>
</form>
<div class="dismiss"></div>
<div class="head_f"></div>
<div class="social_f"></div>
<div class="contact_f"></div>
<div class="logo_f"></div>
<div class="lhead"></div>
<div class="lsocial"></div>
<div class="lcontact"></div>
<div class="llogo"></div>
</section>
<script>


	function addEle(we, re) {
		var po = we;
		var oi = re;
		var act = $('.activa').val();
		var num = $('.'+act+'_num').val();
		var b = '1';
		var ty = parseInt(num) + parseInt(b);
		$('.'+act+'_num').val(ty);
		$('.'+act).append('<div class="form-group"><div class="input-group"><input type="text" name="'+act+'_'+ty+'" class="form-control" onchange="createEle(this.value, \''+act+'\', \''+po+'\')" placeholder="'+po+' Link"><span class="fas fa-trash" onclick="delEle(\'\')" style="cursor:pointer;"></span></div></div>');
	}
	function addElem(wi, we) {
		var pi = wi;
		var acti = we;
		
		//var acti = $('.activa').val();
		var numi = $('.'+acti+'_num').val();
		var b = '1';
		var tyi = parseInt(numi) + parseInt(b);
		$('.'+acti+'_num').val(tyi);
		if(pi == 'facebook' || pi == 'twitter' || pi == 'instagram' || pi == 'linkedin' || pi == 'google-plus') {
			var total = '<div class="form-group '+acti+'_'+tyi+'op"><div class="input-group"><input type="text" name="'+acti+'_'+tyi+'" class="form-control '+acti+'_'+tyi+'" onchange="createEle(this.value, \''+acti+'\', \''+pi+'\', \''+acti+'_'+tyi+'\')" placeholder="'+pi+' Link"><button data-target="#fullElement" data-toggle="collapse" type="button" onclick="track(\''+acti+'\', \''+acti+'_'+tyi+'\')"><span class="fas fa-cog x1"></span></button><button type="button" onclick="delet(\''+acti+'\', \''+acti+'_'+tyi+'\')"><span class="fas fa-window-close x1"></span></button></div></div>';
		}
		else if(pi == 'img' || pi == 'banner' || pi == 'logo') {
			var total = '<div class="form-group '+acti+'_'+tyi+'op"><div class="input-group"><label for="'+acti+'_'+tyi+'" style="cursor:pointer;">Add Image</label><br><input type="file" name="'+acti+'_'+tyi+'" id="'+acti+'_'+tyi+'" class="form-control '+acti+'_'+tyi+'" onchange="createElem(this.value, \''+acti+'\', \''+pi+'\', \''+acti+'_'+tyi+'\')" placeholder="'+pi+' Element" style="display:none;"><button data-target="#fullElement" data-toggle="collapse" type="button" onclick="tracks(\''+acti+'\', \''+acti+'_'+tyi+'\',  \''+pi+'\')"><span class="fas fa-cog x1"></span></button><button type="button" onclick="delet(\''+acti+'\', \''+acti+'_'+tyi+'\')"><span class="fas fa-window-close x1"></span></button></div></div>';
		}
		else if(pi == 'br') {
			var total = '<div class="form-group '+acti+'_'+tyi+'op"><div class="input-group"><input type="hidden" name="'+acti+'_'+tyi+'" class="form-control '+acti+'_'+tyi+'" onmouseout="createElem(this.value, \''+acti+'\', \''+pi+'\', \''+acti+'_'+tyi+'\')" value="br"><span class="p-1 border border-primary" onmouseout="createElem(this.value, \''+acti+'\', \''+pi+'\', \''+acti+'_'+tyi+'\')">/N</span><button type="button" onclick="delet(\''+acti+'\', \''+acti+'_'+tyi+'\')"><span class="fas fa-window-close x1"></span></button></div></div>';
		}
		else if(pi == 'a') {
		    var total = '<div class="form-group '+acti+'_'+tyi+'op"><div class="input-group"><input type="text" name="'+acti+'_'+tyi+'" class="form-control '+acti+'_'+tyi+' '+acti+'_'+tyi+'a" onchange="createElem(this.value, \''+acti+'\', \''+pi+'\', \''+acti+'_'+tyi+'\')" placeholder="'+pi+' Link"><input type="text" name="'+acti+'_'+tyi+'" class="form-control '+acti+'_'+tyi+' '+acti+'_'+tyi+'b" onchange="createElem(this.value, \''+acti+'\', \''+pi+'\', \''+acti+'_'+tyi+'\')" placeholder="'+pi+' Text"><button data-target="#fullElement" data-toggle="collapse" type="button" onclick="track(\''+acti+'\', \''+acti+'_'+tyi+'\')"><span class="fas fa-cog x1"></span></button><button type="button" onclick="delet(\''+acti+'\', \''+acti+'_'+tyi+'\')"><span class="fas fa-window-close x1"></span></button></div></div>';
		}
		
		else if(pi == '1x2' || pi == '1x3' || pi == '2x2' || pi == '2x3' || pi == '1x1') {
				var wo = '';
		$('.render').appendTo('.dismiss');
		$('.renderd').appendTo('.dismiss');
		$('.dismiss').html(wo);
		if(pi == '1x2') {
		    $('.render_a').append('<div class="row bg-white m-5 animated bounceInUp render" style="box-shadow:1px 1px 1px 1px red;"><div class="col-sm-6 mb-2" id="head" style="border:1px dotted silver;" ondrop="drop(event, \'head\')" ondragover="allowDrop(event)"><br><input type="hidden" name="head_num" class="head_num" value="0"></div><div class="col-sm-6 mb-2" id="social" style="border:1px dotted silver;" ondrop="drop(event, \'social\')" ondragover="allowDrop(event)"><br><input type="hidden" name="social_num" class="social_num" value="0"></div><div class="col-sm-12 mb-2" id="contact" style="border:1px dotted silver;" ondrop="drop(event, \'contact\')" ondragover="allowDrop(event)"><br><input type="hidden" name="contact_num" class="contact_num" value="0"></div><div class="col-sm-12 mb-2" id="logo" style="border:1px dotted silver;" ondrop="drop(event, \'logo\')" ondragover="allowDrop(event)"><br><input type="hidden" name="logo_num" class="logo_num" value="0"></div></div>');
		    
		    $('.renderd_a').append('<div class="renderd"><div class="render" style="overflow:auto;"><div class="yhead" style="float:left;width:50%;position:relative;"> </div><div class="ysocial" style="float:left;width:49%;position:relative;"> </div></div><hr><div style="overflow:auto;"><div class="ycontact" style="float:left;width:100%;"></div><div class="ylogo" style="float:left;width:100%;"> </div></div><hr></div>');
		    $('.table').val('1x2');
		    
		}
		
		if(pi == '1x3') {
		    $('.render_a').append('<div class="row bg-white m-5 animated bounceInUp render" style="box-shadow:1px 1px 1px 1px red;"><div class="col-sm-4 mb-2" id="head" style="border:1px dotted silver;" ondrop="drop(event, \'head\')" ondragover="allowDrop(event)"><br><input type="hidden" name="head_num" class="head_num" value="0"></div><div class="col-sm-4 mb-2" id="social" style="border:1px dotted silver;" ondrop="drop(event, \'social\')" ondragover="allowDrop(event)"><br><input type="hidden" name="social_num" class="social_num" value="0"></div><div class="col-sm-4 mb-2" id="contact" style="border:1px dotted silver;" ondrop="drop(event, \'contact\')" ondragover="allowDrop(event)"><br><input type="hidden" name="contact_num" class="contact_num" value="0"></div><div class="col-sm-12 mb-2" id="logo" style="border:1px dotted silver;" ondrop="drop(event, \'logo\')" ondragover="allowDrop(event)"><br><input type="hidden" name="logo_num" class="logo_num" value="0"></div></div>');
		    
		    $('.renderd_a').append('<div class="renderd"><div class="render" style="overflow:auto;"><div class="yhead" style="float:left;width:31%;position:relative;"> </div><div class="ysocial" style="float:left;width:32%;position:relative;"> </div><div class="ycontact" style="float:left;width:32%;position:relative;"></div></div><hr><div style="overflow:auto;"><div class="ylogo" style="float:left;width:100%;"> </div></div><hr></div>');
		    $('.table').val('1x3');
		    
		}
		
		if(pi == '2x2') {
		    $('.render_a').append('<div class="row bg-white m-5 animated bounceInUp render" style="box-shadow:1px 1px 1px 1px red;"><div class="col-sm-6 mb-2" id="head" style="border:1px dotted silver;" ondrop="drop(event, \'head\')" ondragover="allowDrop(event)"><br><input type="hidden" name="head_num" class="head_num" value="0"></div><div class="col-sm-6 mb-2" id="social" style="border:1px dotted silver;" ondrop="drop(event, \'social\')" ondragover="allowDrop(event)"><br><input type="hidden" name="social_num" class="social_num" value="0"></div><div class="col-sm-6 mb-2" id="contact" style="border:1px dotted silver;" ondrop="drop(event, \'contact\')" ondragover="allowDrop(event)"><br><input type="hidden" name="contact_num" class="contact_num" value="0"></div><div class="col-sm-6 mb-2" id="logo" style="border:1px dotted silver;" ondrop="drop(event, \'logo\')" ondragover="allowDrop(event)"><br><input type="hidden" name="logo_num" class="logo_num" value="0"></div></div>');
		    
		    $('.renderd_a').append('<div class="renderd"><div class="render" style="overflow:auto;"><div class="yhead" style="float:left;width:49%;padding:9px;position:relative;"> </div><div class="ysocial" style="float:left;width:49%;padding:9px;position:relative;"> </div></div><hr><div style="overflow:auto;"><div class="ycontact" style="float:left;width:49%;padding:9px;position:relative;"> </div><div class="ylogo" style="float:left;width:49%;padding:9px;position:relative;"> </div></div><hr></div>');
		    
		    $('.table').val('2x2');
		}
		
		if(pi == '1x1') {
		    $('.render_a').append('<div class="row bg-white m-5 animated bounceInUp render" style="box-shadow:1px 1px 1px 1px red;"><div class="col-sm-12 mb-2" id="head" style="border:1px dotted silver;" ondrop="drop(event, \'head\')" ondragover="allowDrop(event)"><br><input type="hidden" name="head_num" class="head_num" value="0"><input type="hidden" name="social_num" class="social_num" value="0"><input type="hidden" name="contact_num" class="contact_num" value="0"><input type="hidden" name="logo_num" class="logo_num" value="0"></div></div>');
		    
		    $('.renderd_a').append('<div class="renderd"><div class="render" style="overflow:auto;"><div class="yhead" style="width:100%;padding:9px;position:relative;"> </div><div class="ysocial" style="width:100%;padding:9px;position:relative;"> </div><div class="ycontact" style="width:100%;padding:9px;position:relative;"> </div><div class="ylogo" style="width:100%;padding:9px;position:relative;"> </div></div><hr></div>');
		    
		    $('.table').val('1x1');
		}
		
		if(pi == '2x3') {
		    $('.render_a').append('<div class="row bg-white m-5 animated bounceInUp render" style="box-shadow:1px 1px 1px 1px red;"><div class="col-sm-12 mb-2" id="head" style="border:1px dotted silver;" ondrop="drop(event, \'head\')" ondragover="allowDrop(event)"><br><input type="hidden" name="head_num" class="head_num" value="0"></div><div class="col-sm-4 mb-2" id="social" style="border:1px dotted silver;" ondrop="drop(event, \'social\')" ondragover="allowDrop(event)"><br><input type="hidden" name="social_num" class="social_num" value="0"></div><div class="col-sm-4 mb-2" id="contact" style="border:1px dotted silver;" ondrop="drop(event, \'contact\')" ondragover="allowDrop(event)"><br><input type="hidden" name="contact_num" class="contact_num" value="0"></div><div class="col-sm-4 mb-2" id="logo" style="border:1px dotted silver;" ondrop="drop(event, \'logo\')" ondragover="allowDrop(event)"><br><input type="hidden" name="logo_num" class="logo_num" value="0"></div></div>');
		    
		    $('.renderd_a').append('<div class="renderd"><div class="render" style="overflow:auto;"><div class="yhead" style="float:left;width:100%;"> </div></div><hr><div style="overflow:auto;"><div class="ysocial" style="float:left;width:32%;position:relative;"> </div><div class="ycontact" style="float:left;width:32%;position:relative;"></div><div class="ylogo" style="float:left;width:32%;"> </div></div><hr></div>');
		    
		    $('.table').val('2x3');
		}
		
			
			var total = '';
		}
		else {
			var total = '<div class="form-group '+acti+'_'+tyi+'op"><div class="input-group"><input type="text" name="'+acti+'_'+tyi+'" class="form-control '+acti+'_'+tyi+'" onchange="createElem(this.value, \''+acti+'\', \''+pi+'\', \''+acti+'_'+tyi+'\')" placeholder="'+pi+' Element"><button data-target="#fullElement" data-toggle="collapse" type="button" onclick="track(\''+acti+'\', \''+acti+'_'+tyi+'\')"><span class="fas fa-cog x1"></span></button><button type="button" onclick="delet(\''+acti+'\', \''+acti+'_'+tyi+'\')"><span class="fas fa-window-close x1"></span></button></div></div>';
		}
		
		return total;
	}
	
	var zi = '';
	function createEle(wq, rq, lq, lp) {
		var pq = wq;
		var oq = rq;
		var mq = lq;
		var mp = lp;
		if($('a').hasClass('c'+mp) == true) {
			    $('.y'+oq).find('.c'+mp).replaceWith('<a href="'+pq+'" class="c'+mp+' '+mp+'"><span class="fab fa-'+mq+' x2"></span></a>')
			}
			else {
		        $('.y'+oq).append('<a href="'+pq+'" class="c'+mp+' '+mp+'"><span class="fab fa-'+mq+' x2"></span></a>');
			}
	}
	function createElem(wi, ri, li, lo) {
		var pi = wi;
		var oi = ri;
		var mi = li;
		var mo = lo;
		if(mi == 'a') {
		    if($('.'+mo+'a').val() && $('.'+mo+'b').val()) {
		        var cey = $('.'+mo+'b').val()
		        var pq = $('.'+mo+'a').val()
			if($('a').hasClass('c'+mo) == true) {
			    $('.y'+oi).find('.c'+mo).replaceWith('<'+mi+' href="'+pq+'" class="c'+mo+' '+mo+'"> '+cey+' </'+mi+'>')
			}
			else {
			    $('.y'+oi).append('<'+mi+' href="'+pq+'" class="c'+mo+' '+mo+'"> '+cey+' </'+mi+'>');
			}
		}
		}
		else if(mi == 'br') {
		    if(zi != mo) {
			    if($('br').hasClass('c'+mo) == true) {
			    $('.y'+oi).find('.c'+mo).replaceWith('<'+mi+' class="c'+mo+' '+mo+'" />')
			}
			else {
			    $('.y'+oi).append('<'+mi+' class="c'+mo+' '+mo+'" />');
			    zi = mo;
			}
		    }
		}
		else if(mi == 'img') {
		    var fd = new FormData(); 
                var files = $('.'+mo)[0].files[0]; 
               
                fd.append('file', files); 
                
                   $.ajax({ 
                    url: 'uploader.php', 
                    type: 'post', 
                    data: fd, 
                    contentType: false, 
                    processData: false, 
                    success: function(data){ 
                        
                        if(data == '0') {
						alert('Unable to upload image');
						exit();
						
					}
					else if(data == '1') {
						alert('Image type is not allowed.');
						exit();
						
					}
					
					else {
					    if($('img').hasClass('c'+mo) == true) {
            			    $('.y'+oi).find('.c'+mo).replaceWith('<'+mi+' class="c'+mo+' '+mo+'" src="'+data+'" height="90px" width="90px">')
            			}
            			else {
					        $('.y'+oi).append('<'+mi+' class="c'+mo+' '+mo+'" src="'+data+'" height="90px" width="90px">');  
            			}
					}
					
                    }, 
                }); 
					
			
		}
		else if(mi == 'banner') {
		    var fd = new FormData(); 
                var files = $('.'+mo)[0].files[0]; 
               
                fd.append('file', files); 
                
                   $.ajax({ 
                    url: 'uploader.php', 
                    type: 'post', 
                    data: fd, 
                    contentType: false, 
                    processData: false, 
                    success: function(data){ 
                        
                        if(data == '0') {
						alert('Unable to upload image');
						exit();
						
					}
					else if(data == '1') {
						alert('Image type is not allowed.');
						exit();
						
					}
					
					else {
					    if($('img').hasClass('c'+mo) == true) {
            			    $('.y'+oi).find('.c'+mo).replaceWith('<img class="c'+mo+' '+mo+'" src="'+data+'" height="90px" width="95%">')
            			}
            			else {
					        $('.y'+oi).append('<img class="c'+mo+' '+mo+'" src="'+data+'" height="90px" width="95%">');
            			}
					}
					
                    }, 
                }); 
					
			
			
		}
		else if(mi == 'logo') {
		    var fd = new FormData(); 
                var files = $('.'+mo)[0].files[0]; 
               
                fd.append('file', files); 
                
                   $.ajax({ 
                    url: 'uploader.php', 
                    type: 'post', 
                    data: fd, 
                    contentType: false, 
                    processData: false, 
                    success: function(data){ 
                        
                        if(data == '0') {
						alert('Unable to upload image');
						exit();
						
					}
					else if(data == '1') {
						alert('Image type is not allowed.');
						exit();
						
					}
					
					else {
					    if($('img').hasClass('c'+mo) == true) {
            			    $('.y'+oi).find('.c'+mo).replaceWith('<img class="c'+mo+' '+mo+'" src="'+data+'" height="60px" width="60px">')
            			}
            			else {
					        $('.y'+oi).append('<img class="c'+mo+' '+mo+'" src="'+data+'" height="60px" width="60px">');
            			}
					}
					
                    }, 
                }); 
			
		}
		else {
		    if($(mi).hasClass('c'+mo) == true) {
            			    $('.y'+oi).find('.c'+mo).replaceWith('<'+mi+' class="c'+mo+' '+mo+'">'+pi+'</'+mi+'>')
            			}
            			else {
			                $('.y'+oi).append('<'+mi+' class="c'+mo+' '+mo+'">'+pi+'</'+mi+'>');
            			}
		}
		
	}
	
	function uploader(ui, up) {
	     var fd = new FormData(); 
                var files = $('.'+up)[0].files[0]; 
               
                fd.append('file', files); 
                
                   $.ajax({ 
                    url: 'uploader.php', 
                    type: 'post', 
                    data: fd, 
                    contentType: false, 
                    processData: false, 
                    success: function(data){ 
                        
                        if(data == '0') {
						alert('Unable to upload image');
						exit();
						
					}
					else if(data == '1') {
						alert('Image type is not allowed.');
						exit();
						
					}
					
					else {
					    var relsut = data;
					}
					
                    }, 
                }); 
					
				
	return relsut;
                        
	}
	var filly = '<div class="row"><div class="col-sm-4"></div><div class="col-sm-4 bg-light border border-primary"><p align="right"><a href="#fullElement" data-toggle="collapse"><span class="fas fa-window-close x2"></span></a></p><h4 align="center"> SETTINGS </h4><div align="center" class="d-flex justify-content-between"><span> Alignment: </span><span class="fas fa-align-left" onclick="update(\'text-align\', \'left\')"> Left </span><span class="fas fa-align-center" onclick="update(\'text-align\', \'center\')"> Center </span><span class="fas fa-align-right" onclick="update(\'text-align\', \'right\')"> Right </span></div><br><div align="center" class="d-flex justify-content-between"><span> Style: </span><span class="fas fa-bold" onclick="update(\'font-weight\', \'bold\')"> Bold </span><span class="fas fa-italic" onclick="update(\'font-style\', \'italic\')"> Italics </span><span class="fas fa-underline" onclick="update(\'text-decoration\', \'underline\')"> Underline </span></div><br><div align="center" class="d-flex justify-content-between"><span> Display Mode: </span><span class="fas fa-bold" onclick="update(\'display\', \'block\')">Block </span><span class="fas fa-italic" onclick="update(\'display\', \'inline\')"> Inline </span><span class="fas fa-italic" onclick="update(\'display\', \'block-inline\')"> Block-inline </span></div><br><div align="center" class="d-flex justify-content-between simgs"></div><br><div align="center" class="d-flex justify-content-between simgsc"></div><br><div align="center" class="d-flex justify-content-between"><span> Padding: </span><span> <input type=\'text\' onchange="update(\'padding\', this.value)" placeholder="e.g 1, 2, 3, 5, 9"></span></div><br><div align="center" class="d-flex justify-content-between"><span> Font Size: </span><span> <input type=\'text\' onchange="update(\'font-size\', this.value)" placeholder="e.g 1, 2, 3, 5, 9"></span></div><br><div align="center" class="d-flex justify-content-between"><span> Font Family: </span><span> <select onchange="update(\'font-family\', this.value)"><option> arial </option><option> times new roman </option><option> helvetica </option><option> times </option><option> courier </option><option> verdana </option><option> courier new </option><option> arial narrow </option><option> candara </option><option> geneva </option><option> calibri </option><option> optima </option><option> cambria </option><option> garamond </option><option> perpetua </option><option> monaco </option><option> didot </option><option> bush script mt </option><option> lucida bright </option><option> copperplate </option><option> Monospace </option><option> serif </option><option> Monospace </option><option> sans-serif </option><option> cursive </option><option> system-ui </option><option> Fantasy  </option></select></span></div><br><div align="center" class="d-flex justify-content-between"><span> Margin: </span><span> <input type=\'text\' onchange="update(\'margin\', this.value)" placeholder="e.g 1, 2, 3, 5, 9"></span></div><br><div align="center" class="d-flex justify-content-between"><span> Text Color: </span><span> <input type=\'color\' onchange="update(\'color\', this.value)"></span></div><br><div align="center" class="d-flex justify-content-between"><span> Background Color: </span><span> <input type=\'color\' onchange="update(\'background-color\', this.value)"></span></div><br><div align="center" class="d-flex justify-content-between"><span> Left Vertical Line: </span><span> <input type=\'color\' onchange="update(\'border-left\', this.value)"></span></div><br><div align="center" class="d-flex justify-content-between"><span> Right Vertical Line: </span><span> <input type=\'color\' onchange="update(\'border-right\', this.value)"></span></div><br><div align="center" class="d-flex justify-content-between"><span> Top Horizontal Line: </span><span> <input type=\'color\' onchange="update(\'border-top\', this.value)"></span></div><br><div align="center" class="d-flex justify-content-between"><span> Bottom Horizontal Line: </span><span> <input type=\'color\' onchange="update(\'border-bottom\', this.value)"></span></div><br></div></div>';
	
	function track(wi, we) {
		$('.fully').html(filly);
		$('.activa').val(wi);
		$('.setting').val(we);
		
	}
	function tracks(wi, we, wa) {
		$('.fully').html(filly);
		$('.activa').val(wi);
		$('.setting').val(we);
		$('.simgs').html('<span> Image Resolution: </span><span> <input type="text" onchange="update(\'width\', this.value)" placeholder="width" style="width:48%;"></span><span> <input type="text" onchange="update(\'height\', this.value)" placeholder="height" style="width:48%;"></span>');
		$('.simgsc').html('<span> Image Centralization: </span><span class="fas fa-align-center" onclick="update(\'margin-top\', \'10%\')"> Centralize </span><span class="fas fa-align-left" onclick="update(\'margin-top\', \'100%\')"> Decentralize </span>');
		
	}
	
	function delet(wi, we) {
		var wo = '';
		$('.'+we+'op').appendTo('.dismiss');
		$('.c'+we).appendTo('.dismiss');
		$('.dismiss').html(wo);
		
		
	}
	
	function update(wi, we) {
		var biu = $('.biu').val();
		var tu = $('.setting').val();
		var ku = $('.activa').val();
		
		if(we == 'bold' || we == 'italic' || we == 'underline') {
			
			if(biu == '0') {
				$('.'+tu).css(wi, we);
				$('.biu').val('1');
			}
			else {
				$('.'+tu).css(wi, "");
				$('.biu').val('0');
			}
		}
		else if (wi == 'height') {
		 $('.c'+tu).height(we);   
		}
		else if (wi == 'width') {
		 if(we >130) {
		     we = '95%';
		 }
		 $('.c'+tu).width(we);   
		}
		else if (wi == 'padding' ||wi == 'margin') {
		 $('.c'+tu).css(wi, we+'px');
		}
		else if (wi == 'margina') {
		 $('.c'+tu).css('margin', we);
		}
		else if (wi == 'border-left' || wi == 'border-right' || wi == 'border-bottom' || wi == 'border-top') {
		 $('.y'+ku).css(wi, '1px solid '+we);   
		 $('.l'+ku).append(wi+':1px solid '+we+';');
		}
		else if (wi == 'font-size') {
		 $('.c'+tu).css(wi, we+'px');   
		}
		else {
			$('.c'+tu).css(wi, we);
		}
	}
	
	$('.social_btn').click(function() {
		$('.activa').val('social');
	})
	$('.contact_btn').click(function() {
		$('.activa').val('contact');
	})
	$('.logo_btn').click(function() {
		$('.activa').val('logo');
	})
	
function createEditor(res, name) {
		var result = res;
		var source = name;
		if(source == 'color') {
			$('.' + source).removeClass('text-danger').removeClass('text-primary').removeClass('text-success').removeClass('text-warning').addClass('text-'+result);
			$('.colors').removeClass('bg-danger').removeClass('bg-primary').removeClass('bg-success').removeClass('bg-warning').addClass('bg-'+result);
		}
		else if(source == 'skill1a' || source == 'skill1b' || source == 'skill1c' || source == 'skill2a' || source == 'skill2b' || source == 'skill2c' || source == 'skill3a' || source == 'skill3b' || source == 'skill3c' || source == 'skill4a' || source == 'skill4b' || source == 'skill4c') {
			
			var cf = $('.'+source +'_p').val();
			//alert(cf);
			$('.' + source).html(result + ' ' + cf +'%');
			$('.' + source).css('width', cf + "%");
			//$('.' + source).aria-valuenow = "50";
		}
		else if(source == 'facebook' || source == 'twitter' || source == 'instagram' || source == 'linkedin') {
			
			//var cf = $('.'+source +'_p').val();
			//alert(cf);
			$('.' + source).attr('href', result);
			//$('.' + source).css('width', cf + "%");
			//$('.' + source).aria-valuenow = "50";
		}
		else if(source == 'logo') {
			
			//var cf = $('.'+source +'_p').val();
			//alert(cf);
			$('.' + source).attr('src', result);
			//$('.' + source).css('width', cf + "%");
			//$('.' + source).aria-valuenow = "50";
		}
		//else if(source == 'address' || source == 'coverContent') {
			
		//}
		else {
			$('.' + source).html(res);
		}
		
		
	}
	
	function sub() {
		var head = '';
		var social = '';
		var contact = '';
		var logo = '';
		
		var h1 = $('.head_num').val();
		var h2 = $('.social_num').val();
		var h3 = $('.contact_num').val();
		var h4 = $('.logo_num').val();
		var name = $('.name').val();
		var head_t = $('.lhead').html();
		var social_t = $('.lsocial').html();
		var contact_t = $('.lcontact').html();
		var logo_t = $('.llogo').html();
		
		var r = 0;
		var t = 0;
		var v = 1;
		
		if(h1 > 0) {
			for(var i = 1;i<=h1;i++) {
				$('.chead_'+i).clone().appendTo(".head_f");
				$('.head_f').append('~');
			}
		}
		else {
			t = parseInt(t) + parseInt(v);
		}
		if(h2 > 0) {
			for(var i = 1;i<=h2;i++) {
				social += $('.csocial_'+i).clone().appendTo(".social_f");
				$('.social_f').append('~');
			}
		}
		else {
			t = parseInt(t) + parseInt(v);
		}
		if(h1 > 0) {
			for(var i = 1;i<=h3;i++) {
				contact += $('.ccontact_'+i).clone().appendTo(".contact_f");
				$('.contact_f').append('~');
			}
		}
		else {
			t = parseInt(t) + parseInt(v);
		}
		if(h4 > 0) {
			for(var i = 1;i<=h4;i++) {
				logo += $('.clogo_'+i).clone().appendTo(".logo_f");
				$('.logo_f').append('~');
			}
		}
		else {
			t = parseInt(t) + parseInt(v);
		}
		
		if(t > 3) {
			alert('You cannot save this signature without any field added!');
			exit();
		}
		else {
		    head = $('.head_f').html();
		    social = $('.social_f').html();
		    contact = $('.contact_f').html();
		    logo = $('.logo_f').html();
		   var table = $('.table').val();
		    var url = 'change.php';
				var da = {
					'head' : head,
					'social' : social,
					'contact' : contact,
					'logo' : logo,
					'name' : name,
					'table' : table,
					'head_t' : head_t,
					'social_t' : social_t,
					'contact_t' : contact_t,
					'logo_t' : logo_t,
				};
				
				$.post(
					'upload.php',
					da,
				function(data) {
					if(data == 'Success') {
						$('.feedback').html('Signature has been added successfully!');
						
					}
					else {
					    $('.feedback').html(data);
					}
					
				});
		}
	}
</script>

