<?php
require ('connection.php');
require ('top.php');

    ?>
<!--Login Form-->
<div class="container py-5">
  <div class="row py-5">
    <form class="col-md-9 m-auto" method="post" role="form">
      <div class="row">

        <div class="form-group col-md-6 mb-3">
          <label for="inputemail">Email</label>
          <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group col-md-6 mb-3">
          <label for="inputpassword">Password</label>
          <input type="text" class="form-control mt-1" id="password" name="password" placeholder="Password">
        </div>
      </div>
<!--      <h5>New user <a href="register.html"> Register </a></h5>-->
      <a class="btn btn-primary" href="#" role="button">Login</a>


    </form>


<!--    Register Form-->

    <div class="container py-5">
      <div class="row py-5">
        <form class="col-md-9 m-auto" method="post" role="form">
          <div class="row">
            <div class="form-group col-md-6 mb-3">
              <label for="inputname">Name</label>
              <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group col-md-6 mb-3">
              <label for="inputemail">Email</label>
              <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6 mb-3">
              <label for="inputMbnumber">Mobile Number</label>
              <input type="number" class="form-control mt-1" id="mbnumber" name="mbnumber" placeholder="Mobile Number">
            </div>
            <div class="form-group col-md-6 mb-3">
              <label for="inputpassword">Password</label>
              <input type="email" class="form-control mt-1" id="password" name="password" placeholder="password">
            </div>
          </div>


          <div class="row">
            <div class="col text-end mt-2">
              <button type="submit" class="btn btn-success btn-lg px-3">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>