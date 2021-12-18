<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
		<title>Deal'N'Buy</title>
		<style type="text/css">
			/* body{
				background: linear-gradient(to right, #3333ff 0%, #00cc99 100%);
			} */
			#heading{
				background: linear-gradient(to right, #3333ff 0%, #00cc99 100%);
				padding: 1em;
				border-radius: 4px;
				font-size: 1.5em;
			}
			#head-wrapper{}
			/* #content-container{background: white} */
			.nav-item{
				background: linear-gradient(to right, #3333ff 0%, #00cc99 100%);
				border-radius:6px;
			}
			.nav-link{
				color:white;
			}
			.nav-link:hover{
				color: white;
				font-weight: bold
			}
			.item{
				border: solid lightgray 1px;
				border-radius: 10px;
			}
			.item > img{
				height:100px;
				width:100px;
			}
			.item p{
				font-size: 1.5em;
				color: blue;
				margin: auto;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<br>
		<div class="container mb-5" id="head-container">
			<div class="d-flex justify-content-center" id="head-wrapper">
				<h6 id="heading" class="text-white">
					<i class="bi bi-pencil-square"></i> Post an Ad
				</h6>
			</div>
		</div>

		<div class="d-flex justify-content-around container-fluid" id="content-container">
			{{-- <div class="row"> --}}
				<div class="container col-3 mr-5 p-4">
					<ul class="nav flex-column justify-content-center">
						<li class="nav-item mb-1">
							<a class="nav-link" href="#">Appliances</a>
						</li>
						<li class="nav-item mb-1">
							<a class="nav-link" href="#">Electronic</a>
						</li>
						<li class="nav-item mb-1">
							<a class="nav-link" href="#">ex3</a>
						</li>
						<li class="nav-item mb-1">
							<a class="nav-link" href="#">Real estate</a>
						</li>
						<li class="nav-item mb-1">
							<a class="nav-link" href="#">Vehicles</a>
						</li>
						<ul class="nav nav-pills nav-justified">
							<li class="nav-item m-1" style="padding: 0%;">
								<a href="{{url('/en/user-registration')}}" class="nav-link mt-3">Sign Up</a>
							</li>
							<li class="nav-item m-1" style="padding: 0%;">
								<a href="{{url('/en/user-login')}}" class="nav-link mt-3">Login</a>
							</li>
						</ul>
					</ul>
				</div>
				<div class="container col-9">
					<div class="d-flex flex-row">
						<a href="#">
							<div class="p-5 m-2 item">
								<img src="{{ asset('icons/car.svg') }}" alt="Image of a Car">
								<p>Cars</p>
							</div>
						</a>
						<a href="#">
							<div class="p-5 m-2 item">
								<img src="{{ asset('icons/boat.svg') }}" alt="Image of a Boat">
								<p>Boats</p>
							</div>
						</a>
						<a href="#">
							<div class="p-5 m-2 item">
								<img src="{{ asset('icons/truck.svg') }}" alt="Image of a Truck">
								<p>Trucks</p>
							</div>
						</a>
						<a href="#">
							<div class="p-5 m-2 item">
								<img src="{{ asset('icons/telephone.svg') }}" alt="Image of a Telephone">
								<p>Phone</p>
							</div>
						</a>
					</div>
					<div class="d-flex flex-row">
						<a href="#">
							<div class="p-5 m-2 item">
								<img src="{{ asset('icons/tap.svg') }}" alt="Image of Finger Tap">
								<p>Pennant</p>
							</div>
						</a>
						<a href="#">
							<div class="p-5 m-2 item">
								<img src="{{ asset('icons/receipt.svg') }}" alt="Image of a ">
								<p>Link</p>
							</div>
						</a>
						<a href="#">
							<div class="p-5 m-2 item">
								<img src="{{ asset('icons/motorbike.svg') }}" alt="Image of a Motorbike">
								<p>Motorbike</p>
							</div>
						</a>
						<a href="#">
							<div class="p-5 m-2 item">
								<img src="{{ asset('icons/sports.svg') }}" alt="Image of Sports">
								<p>Sport</p>
							</div>
						</a>
					</div>
				</div>
			{{-- </div> --}}
		</div>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	</body>
</html>
