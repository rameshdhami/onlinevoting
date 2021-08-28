				<ul class="navbar-nav mr-auto">
                  <li class="nav-item index">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item voter_register">
                    <a class="nav-link" href="voter_register.php">Register</a>
                  </li>
                  <li class="nav-item login">
                    <a class="nav-link" href="login.php">Login</a>
                  </li>
                  <li class="nav-item about">
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                  <li class="nav-item contact">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                  <?php if (isset($_SESSION['admin_id'])) { ?>
                   
                  <li class="nav-item contact">
                    <a class="nav-link" href="admindashboard.php">Dashboard</a>
                  </li>
                  <li class="nav-item contact">
                    <a class="nav-link" href="adminlogout.php">Logout</a>
                  </li>
                  <?php } ?>
                </ul>

              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
              </form>
