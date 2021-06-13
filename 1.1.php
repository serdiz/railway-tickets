<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RailwayTickets Page</title>

     <!-- Custom Style-->
    <link rel="stylesheet" href="Style3.css">
    <!--BOOTSTRAP LINK-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">

         </div>
     </div>
   </form>
	<nav>
		<label class="logo">Trainline</label>


		<ul>
			<li><a href="1.html">Home</a></li>
            <li class="active"><a href="railwaytickets.html">Railway tickets</a></li>
            <li><a href="2.html">Help </a></li>
            <li><a href="register.php">Register new account</a></li>
            <li><a href="register.php" class="btn">Log out</a></li>
        </ul>
	</nav>
    <section><br>
        <div class="container">
            <div class="jumbotron">
                <div class="card">
                    <div class="card-header">
                        <h2>All Available Trains</h2>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Almaty <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/></svg>Nur-Sultan</h5>
                        <table class="table table-dark table-hover table-bordered">
                            <thead>
                                <tr>

                                    <th scope="col"></th>
                                    <th scope="col">Train Name</th>


                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <form class = "box" action="insertt.php" method="post"
                                <tr>
                                    <td>001</td>
                                    <th>   	<div class="input-field">
                                             <input type="text" required name="Destination"

                                             placeholder="destination">
                                 </div></th>
                                    <td>   	<div class="input-field">
                                             <input type="text" required name="Id"
                                             placeholder="Id">
                                 </div></td>

                                    <td>   	<div class="input-field">
                                             <input type="text" required name="Price"
                                             placeholder="price">
                                 </div></td>
                                    <td>
                                      <div class="button">

                                       <div class="inner"></div>
                                         <button class="btn btn-success">Book Now</button>
                                    </td>
                                </tr>
                                <tr>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
