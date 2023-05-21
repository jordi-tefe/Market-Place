    start here without committing 


     





























































.slideOutUp {
  -webkit-animation-name: slideOutUp;
  animation-name: slideOutUp; }

.timeLine {
	position: relative;
	padding: 70px 0px;
	text-align: center;
	width: 100%;
	overflow: hidden; 
}
.timeLine .row .lineHeader:before {
	position: absolute;
	top: 0;
	margin: auto;
	content: "\f102";
	font-family: FontAwesome;
	color: #DDD;
	font-size: 36px;
	margin-left: -10px; 
}
.timeLine .row .lineHeader:after {
	content: '';
	width: 3px;
	position: absolute;
	top: 35px;
	bottom: 35px;
	left: 50%;
	border-radius: 50px;
	background-color: #DDD; 
}
.timeLine .row .lineFooter:before {
	position: absolute;
	bottom: 0;
	margin: auto;
	content: "\f103";
	font-family: FontAwesome;
	color: #DDD;
	font-size: 36px;
	margin-left: -10px; 
}
.timeLine .row .item {
	visibility: hidden;
	float: left;
	margin-bottom: 2%;
	padding: 0px;
	clear: left; 
}
.timeLine .row .item:before {
	content: '';
	width: 15px;
	height: 15px;
	border: 3px solid darkred;
	background-color: white;
	border-radius: 50%;
	position: absolute;
	right: -9px;
	top: 10px; 
}
.timeLine .row .item:after {
	content: '';
	height: 1px;
	width: 5%;
	position: absolute;
	background-color: #890025;
	top: 16px;
	right: 8px; 
}
.timeLine .row .item .caption {
	margin: auto;
	width: 85%;
	background: #F0F0F0;
	min-height: 200px;
	position: relative;
	color: #333;
	border: 1px solid #aaa;
	box-shadow: 2px 2px 10px 1px rgba(0, 0, 0, 0.5); 
}
.timeLine .row .item .caption .star {
	width: 50px;
	padding: 5px 0px;
	font-weight: bold;
	line-height: 15px;
	position: absolute;
	z-index: 999;
	top: -10px;
	left: 20px;
	background-color: rgba(139, 0, 0, 0.8);
	color: white;
	box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.5); 
}
.timeLine .row .item .caption .star span {
	display: inline-block; 
	margin: 0px;
	padding-bottom: 5px;
	line-height: 20px;
}
.timeLine .row .item .caption .star:before {
	content: '';
	position: absolute;
	top: 0px;
	left: -10px;
	z-index: 2;
	border-right: 10px solid #5e0808;
	border-bottom: 0px solid transparent;
	border-top: 10px solid transparent; 
}
.timeLine .row .item .caption .image {
	position: relative; 
}
.timeLine .row .item .caption .image img {
	width: 100%;
	min-height: 200px;
	max-height: 400px; 
}
.timeLine .row .item .caption .image video {
	width: 100%;
	height: 100%;
	position: relative; 
}
.timeLine .row .item .caption .image .controll {
	width: 100%;
	height: 100%;
	position: absolute;
	left: 0px;
	top: 0px;
	background-color: rgba(0, 0, 0, 0.3);
	color: rgba(255, 255, 255, 0.7);
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-webkit-align-items: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-webkit-justify-content: center;
	-ms-flex-pack: center;
	justify-content: center; 
}
.timeLine .row .item .caption .image .title {
	background-color: darkred;
	padding: 0px 20px;
	position: absolute;
	z-index: 9;
	left: -10px;
	bottom: 10px;
	display: inline-block;
	opacity: 0;
	color: white;
	box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.5); 
}
.timeLine .row .item .caption .image .title:before {
	content: '';
	position: absolute;
	bottom: -10px;
	left: 0px;
	z-index: 2;
	border-left: 10px solid transparent;
	border-bottom: 0px solid transparent;
	border-top: 10px solid #5e0000; 
}
.timeLine .row .item .textContent {
	padding: 15px 10px; 
}
.timeLine .row .item .textContent p {
	text-justify: justify;
	text-align: left;
	padding: 0px 10px;
	border-left: 5px solid #890025;
}
.timeLine .row .pull-right {
	float: right;
	margin-bottom: 0%;
	margin-top: 3%;
	clear: right; 
}
.timeLine .row .pull-right:before {
	content: '';
	width: 15px;
	height: 15px;
	border: 3px solid darkred;
	background-color: white;
	border-radius: 50%;
	position: absolute;
	left: -6px;
	top: 14px; 
}
.timeLine .row .pull-right:after {
	content: '';
	height: 1px;
	width: 5%;
	position: absolute;
	background-color: #890025;
	top: 21px;
	left: 12px; 
}

/* Smart Phones Screen */
@media (max-width: 767px) {
  .timeLine .row .item {
    margin-bottom: 4%; }
    .timeLine .row .item:before {
      display: none; }
    .timeLine .row .item:after {
      display: none; }
  .timeLine .row .pull-right {
    margin-top: 0%; }
    .timeLine .row .pull-right:before {
      display: none; }
    .timeLine .row .pull-right:after {
      display: none; } }
/* small Screen */
@media (min-width: 768px) and (max-width: 991px) {
  .timeLine .row .item {
    margin-bottom: 4%; }
    .timeLine .row .item:before {
      display: none; }
    .timeLine .row .item:after {
      display: none; }
  .timeLine .row .pull-right {
    margin-top: 0%; }
    .timeLine .row .pull-right:before {
      display: none; }
    .timeLine .row .pull-right:after {
      display: none; } }










