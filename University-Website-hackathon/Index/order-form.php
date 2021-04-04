<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Order-Form</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <style>
    
  </style>

  <link rel="stylesheet" href="order-form-style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgb(12, 12, 12)">
    <a class="navbar-brand" href="#">
        <img src="logo4.jpg" class="d-inline-block align-center" alt="">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active pl-3">
                <a class="nav-link" href="index.php" style="color: white" ;><b>Home</b> <span
                        class="sr-only"></span></a>
            </li>
            <li class="nav-item pl-3">
                <a class="nav-link" href="canteen.php" style="color: white;"><b>Canteen service</b> </span></a>
            </li>
            <li class="nav-item pl-3">
                <a class="nav-link" href="lost1.php" style="color: white;"><b>Lost and found service</b></a>
            </li>
        </ul>
        
    </div>
</nav>
<br>
<br>

    <div class="container">
        <form action="submit_order.php?name='$username" method="post">
          <div class="row">
            <div class="col-25">
              <label for="fname">First Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name='firstname' placeholder="Your name.."/>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="email">Email</label>
            </div>
            <div class="col-75">
              <input type="text" id="email" name='Email' placeholder="Your email.."/>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="your order">Your Order</label>
            </div>
            <div class="col-75">
              <select id="Order" name='Order'>
                <option value="veg-noodles">Veg Noodles</option>
                <option value="sprouts-salad">Sprouts Salad</option>
                <option value="sweet-corn-soup">Sweet Corn Soup</option>
                <option value="capsicum-double-cheese-pizza">capsicum double cheese pizza</option>
                <option value="chai-pakoras">Chai Pakoras</option>
                <option value="idli-special">Idli Special</option>
                <option value="vanilla-pastry">Vanilla Pastry</option>
                <option value="fresh-rosogulla">Fresh Rosogulla</option>
                <option value="fresh-fruit-juice">Fresh fruit juice</option>

              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="Any-specifications">Any other specifications?</label>
            </div>
            <div class="col-75">
              <textarea id="subject" name='subject' placeholder="Write something.." style="height:200px"></textarea>
            </div>
          </div>
          <div class="row" >
         <input type="submit" value="submit">
           </div>
        </form>
      </div>
</body>
</html>