<?php
if (isset($_POST['form-submit'])) {
	require_once('../assets/php/add.php');
} else if (isset($_POST['login-submit'])) {
	require_once('../assets/php/login.php');
}
?>
<!doctype html>
<html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Stacked HTML CSS Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <nav class="nav">
          <div class="burger">
            <div class="burger__patty"></div>
          </div>

          <ul class="nav__list">
            <li class="nav__item">
              <a href="../index.html" class="nav__link"><i class="fa fa-home" aria-hidden="true"></i></a>
            </li>
            <li class="nav__item">
              <a href="calendar.html" class="nav__link"><i class="fa fa-calendar" aria-hidden="true"></i></a>
            </li>
            <li class="nav__item">
              <a href="customization.html" class="nav__link"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </li>
            <li class="nav__item" id="nav__filler">
              <span class="nav__link"></span>
            <li class="nav__item" id="settings_item">
              <a href="settings/settings-profile.html" class="nav__link"><i class="fa fa-cog" aria-hidden="true"></i></a>
            </li>
          </ul>
        </nav>
<!-- 
        <section class="panel" id="page1">
          <article class="panel__wrapper">
            <div class="panel__content"> -->
              <div class="home-content container-fluid" style="border: solid;">
                <div class="row">
                  <div class="col-md-10">
                    <div class="card"  style="border: solid;">
                      <form class="form-inline"> 
                        <button class="btn col-lg-1" id="previous" onclick="previous()">
                          <i class="fa fa-angle-left" aria-hidden="true"></i></button>
                        <span class="card-header col-lg-2" id="monthAndYear">
                          <label class="lead" for="month"></label>
                          <select class="form-control col-lg-3" name="month" id="month" onchange="jump()">
                            <option value=0>Jan</option>
                            <option value=1>Feb</option>
                            <option value=2>Mar</option>
                            <option value=3>Apr</option>
                            <option value=4>May</option>
                            <option value=5>Jun</option>
                            <option value=6>Jul</option>
                            <option value=7>Aug</option>
                            <option value=8>Sep</option>
                            <option value=9>Oct</option>
                            <option value=10>Nov</option>
                            <option value=11>Dec</option>
                          </select>
                          
                          <label for="year"></label>
                          <select class="form-control col-lg-3" name="year" id="year" onchange="jump()">
                            <option value=1990>1990</option>
                            <option value=1991>1991</option>
                            <option value=1992>1992</option>
                            <option value=1993>1993</option>
                            <option value=1994>1994</option>
                            <option value=1995>1995</option>
                            <option value=1996>1996</option>
                            <option value=1997>1997</option>
                            <option value=1998>1998</option>
                            <option value=1999>1999</option>
                            <option value=2000>2000</option>
                            <option value=2001>2001</option>
                            <option value=2002>2002</option>
                            <option value=2003>2003</option>
                            <option value=2004>2004</option>
                            <option value=2005>2005</option>
                            <option value=2006>2006</option>
                            <option value=2007>2007</option>
                            <option value=2008>2008</option>
                            <option value=2009>2009</option>
                            <option value=2010>2010</option>
                            <option value=2011>2011</option>
                            <option value=2012>2012</option>
                            <option value=2013>2013</option>
                            <option value=2014>2014</option>
                            <option value=2015>2015</option>
                            <option value=2016>2016</option>
                            <option value=2017>2017</option>
                            <option value=2018>2018</option>
                            <option value=2019>2019</option>
                            <option value=2020>2020</option>
                            <option value=2021>2021</option>
                            <option value=2022>2022</option>
                            <option value=2023>2023</option>
                            <option value=2024>2024</option>
                            <option value=2025>2025</option>
                            <option value=2026>2026</option>
                            <option value=2027>2027</option>
                            <option value=2028>2028</option>
                            <option value=2029>2029</option>
                            <option value=2030>2030</option>
                          </select>
                        </span>
                        <button class="btn col-lg-1" id="next" onclick="next()">
                          <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                      </form>
                      <table class="table table-bordered table-responsive-md" id="calendar">
                        <thead>
                        <tr>
                          <th>Sun</th>
                          <th>Mon</th>
                          <th>Tue</th>
                          <th>Wed</th>
                          <th>Thu</th>
                          <th>Fri</th>
                          <th>Sat</th>
                        </tr>
                        </thead>
            
                        <tbody id="calendar-body">
            
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="events-content">
                      <div class="row">
                        <div class="col-md-8" id="event-box">
                          <h1>Events available:</h1>
                          <ul id="event-list">
                            <li>Event 1</li>
                            <li>Event 2</li>
                            <li>Event 3</li>
                            <li>Event 4</li>
                            <li>Event 5</li>
                            <li>Event 6</li>
                          </ul>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8" id="plugin-box">
                          <div style="height: 30vh; background-color: rgb(172, 31, 113);">SAMPLE</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <!-- </div>
          </article>
        </section> -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/java.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        

    </body>
</html>