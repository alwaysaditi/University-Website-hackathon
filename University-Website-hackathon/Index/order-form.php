<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Order-Form</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="order-form-style.css">

</head>

<body>
    <div class="container">
        <form action="submit_order.php" method="post">
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
          <div class="row">
         <input type="submit" value="submit">
           </div>
        </form>
      </div>
</body>
</html>