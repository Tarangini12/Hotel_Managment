<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
  <title>Aether</title>

<?php
    include("header.php");
    ?>


<section class="rooms sec-width" id="rooms">
    <div class="title">
        <h1>Booking</h1>
    </div>
    <div class="rooms-container">
        <div class="book">
            <form class="book-form">
            <div class="form-item">
                    <label for="customerid">Customer Id</label>
                    <input type="number" id="customerId">
                </div>
                <div class="form-item">
                    <label for="firstName">First name</label>
                    <input type="text" id="firstName">
                </div>
                <div class="form-item">
                    <label for="lastName">Last name</label>
                    <input type="text" id="lastName">
                </div>

                <div class="form-item">
                    <label for="address">Address</label>
                    <input type="text" id="address">
                </div>

                <div class="form-item">
                    <label for="country">Country</label>
                    <input type="text" id="address">
                </div>

                <div class="form-item">
                    <label for="state">State</label>
                    <input type="text" id="address">
                </div>
               

                <div class="form-item">
                    <label for="checkin-date">Check-in-date</label>
                    <input type="date" id="checkin-date">
                </div>
                <div class="form-item">
                    <label for="checkout-date">check-out-date</label>
                    <input type="date" id="checkout-date">
                </div>

                <div class="form-item">
                    <label for="adult">Adult</label>
                    <input type="number" min="1" value="1" id="adult">
                </div>

                <div class="form-item">
                    <label for="children">Children</label>
                    <input type="number" min="1" value="1" id="children">
                </div>

                <div class="form-item">
                    <label for="room">Room</label>
                    <input type="number" min="1" value="1" id="children">
                </div>
                <div class="form-item">
                    <input type="submit" class="btn" value="Book now">
                </div>
            </form>
        </div>
    </div>
</section>

<?php
    include("footer.php")
    ?>

</html>