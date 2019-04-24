<nav class="navbar is-dark is-fixed-top" id="navbar-scrolling">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://ctcircle.test">
        <img src="images/ctc-favicon.png" style="min-height: 45px !important;">
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div class="navbar-menu">
      <div class="navbar-end">
        <a class="navbar-item is-tab is-active">
          What's On
        </a>

        <a class="navbar-item">
          About Us
        </a>

        <a class="navbar-item">
          History
        </a>

        <a class="navbar-item">
          Join the CTC!
        </a>

        <a class="navbar-item">
          Login
        </a>

      </div>
    </div>
  </div>
</nav>
<nav class="navbar is-black nav-links" id="navbar">
    <div class="container">
            <div class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item">
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a class="navbar-item" style="padding-left: 0px !important; ">
                        <i class="fab fa-twitter-square fa-lg"></i>
                    </a>
                </div>
            </div>
    </div>
</nav>
<nav class="navbar is-dark nav-menu" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://ctcircle.test">
        <img src="{{asset('images/red-badge-transparent-white-border.png')}}">
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-end">
        <a class="navbar-item is-underlined">
          What's On
        </a>

        <a class="navbar-item">
          About Us
        </a>

        <a class="navbar-item">
          History
        </a>

        <a class="navbar-item">
          Join the CTC!
        </a>

        <a class="navbar-item">
          Login
        </a>

      </div>
    </div>
  </div>
</nav>
<script type="text/javascript">
  //Navbar scrolling here
  window.onscroll = function() {scrollFunction();};
  function scrollFunction() {
    if (document.body.scrollTop > 210 || document.documentElement.scrollTop > 210) {
      document.getElementById("navbar-scrolling").style.top = "0";
    } else {
      document.getElementById("navbar-scrolling").style.top = "-50px";
    }
  }
</script>
