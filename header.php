<nav class=" navbar-expand-lg navbar navbar-dark">
    <a class="navbar-brand" href="#"><h5>Aether</h5></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="service.php">service </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="rooms.php">Rooms </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="otherfas.php">Other facilities </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="booking.php">Booking </a>
        </li>
      </ul>
      <div class="mx-2">
        <button class="btn btn-success" data-toggle="modal" data-target="#Sign-upModal">Sign-up</button>
        <button class="btn btn-success" data-toggle="modal" data-target="#LoginModal">Login</button>


      </div>
    </div>
  </nav>




  <!--Sign-up Modal -->
  <div class="modal fade" id="Sign-upModal" tabindex="-1" role="dialog" aria-labelledby="Sign-upModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Sign-upModalLabel">Get an Aether Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label required>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword2">Confirm Password</label>
              <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Create Account</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!--Login Modal -->
  <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="LoginModalLabel">Login to Aether</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

