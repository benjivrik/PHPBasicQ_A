<!DOCTYPE html>
<html  lang="en">
<head>
      <title> 30 Days Basic PHP Q&A Challenge | Stunt-Business </title>
      <meta charset="UTF-8">
      <meta name="author" content="Benjamin Kataliko Viranga" >
      <meta name="Keywords" content = "Benjamin Kataliko, Benjamin Kataliko Viranga , Benjamin Viranga, Stunt Business" > 
      <meta name="viewport" content="width=device-width, initial-scale=1.0">  
      <meta name="description" content="Stunt Business 30 Days basic PHP Q&A "> 
      <meta name="csrf-token" content="tYG7b2djXWgKYZOj12mZB4xBUXSWorWxfhplqz67">


      <link rel="apple-touch-icon" sizes="180x180" href="https://www.stuntbusiness.ca/img/stunt-business-logo/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="https://www.stuntbusiness.ca/img/stunt-business-logo/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="https://www.stuntbusiness.ca/img/stunt-business-logo/favicon-16x16.png">
      <link rel="manifest"      href="https://www.stuntbusiness.ca/img/stunt-business-logo/site.webmanifest">
      <link rel="mask-icon"     href="https://www.stuntbusiness.ca/img/stunt-business-logo/safari-pinned-tab.svg" color="#5bbad5">
      <link rel="shortcut icon" href="https://www.stuntbusiness.ca/img/stunt-business-logo/favicon.ico">
      <meta name="msapplication-TileColor" content="#603cba">
      <link name="msapplication-config" href="https://www.stuntbusiness.ca/img/stunt-business-logo/browserconfig.xml">
      <meta name="theme-color" content="#ffffff">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
      
      <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="./outputs_util/all_stuntb.css">
      <link rel="stylesheet" type="text/css" href="https://www.stuntbusiness.ca/css/regular-pages/welcome-page.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>
<nav class="navbar  navbar-expand-md navbar-light fixed-top" id="navbar-first">
        <a class="navbar-brand brand pl-2" href="#">
        <img src="./outputs_util/stunt-business.png" alt="Stunt's logo" height="45" class="logo">
        </a> 
        
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown"> 
                <a  class="nav-link" id="languages" style="min-width:50px;text-align:center">
                <i class="fa fa-globe" style="padding-left:0px 5px 0px 5px;"></i>
                <span class="fa fa-caret-down"></span>
                </a> 
                <div class="dropdown-menu" id="lang">
                    <a class="dropdown-item" href="https://www.stuntbusiness.ca/fr/home">Français</a>
                    <a class="dropdown-item" href="https://www.stuntbusiness.ca/en/home">English </a>
                </div>
            </li>
        </ul>
        
        <ul class="navbar-toggler float-right list-unstyled p-2 mr-2 my-auto" id="drop-btn">
            <li data-toggle="collapse" data-target="#nv-first" aria-expanded="true"> <i class="fa fa-chevron-down" id="fa-up-down"></i> </li>
        </ul>
        <div class="collapse navbar-collapse" id="nv-first">
        

        <ul class="navbar-nav ml-auto">

            <li class= "nav-item">
            <a class="nav-link" 
                href="https://www.stuntbusiness.ca/en/contact">Contact</a></li>

            <li class= "nav-item"><a  class="nav-link" href="https://www.stuntbusiness.ca/en/about">About us</a></li>
            <li class= "nav-item"><a  class="nav-link" href="https://www.stuntbusiness.ca/en/faqs">FAQs</a></li>        
            <li class= "nav-item">
                <a class="nav-link" href="https://www.stuntbusiness.ca/en/log-in">
                Log in
                </a>
            </li>
            
        </ul>
    </div>
</nav>

<div class="row-text hide fixed-top" id="navbar-display">
    <div class="col-text">
        <div class="lang-content">
            <a  class="lang-link" href="https://www.stuntbusiness.ca/fr/home">Français</a>
        </div>
    </div> 
    <div class="col-text">
        <div class="lang-content">
            <a  class="lang-link my-auto" href="https://www.stuntbusiness.ca/en/home">English </a>
        </div>
    </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="init-content">
        <h4 class="pt-3"><b> 30 Days Basic PHP Q&A Challenge </b></h4>
        <br>
        <div>
            → Answers for the PHP Q&A started by the community member instagram : <br>
            <a href="https://www.instagram.com/benjivrik" target="_new">
                <span class="fa-stack fa-lg icon-instagram">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-instagram fa-stack-1x"></i>
                </span>
                @benjivrik
            </a>
            <br>
            → Github code : <br>
            <a href="https://github.com/Stunt-Business" target="_new">
                <span class="fa-stack fa-lg icon-github">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x"></i>
                </span>
                @Stunt-Business
            </a>
            <br><br>

        </div>
        <hr>
        <h5 id="day2"> Day 2 - Output </h5>
         <p> <b>Data Type</b></p>
        <div class="output">
            <?php
                require('./day2.php');
            ?>
        </div>
        <hr>
        <h5 id="day3"> Day3 - Output </h5>
        <p> <b> Functions. </b></p>
        <div class="output">
            <?php
                require('./day3.php');
            ?>
        </div>
        <hr>
        <h5 id="day4"> Day4 - Output </h5>
         <p> <b> Challenge I - Process input sent from webpage form. </b></p>
        <div class="output">
            <form class="form-inline" method="POST" action="./day4.php">
                <label for="user-input">Enter your number : </label>
                <input type="number" 
                       name="usr-input"
                       class="ml-2 form-control" 
                       placeholder="Enter your number" 
                       id="usr-input" value="0" required>
                <button type="submit"  class="ml-2 custom-btn btn btn-primary" style="width: 15%;">Submit</button>
            </form>
        </div>
        <hr>
        <h5 id="day5"> Day5 - Output </h5>
        <p> <b> Arrays. </b></p>
        <div class="output">
            <?php
                require('./day5.php');
            ?>
        </div>
        <hr>
        <h5 id="day6"> Day6 - Output </h5>
        <p> <b> Loops. </b></p>
        <div class="output">
            <?php
                require('./day6.php');
            ?>
        </div>
        <hr>
        <h5 id="day7"> Day7 - Output </h5>
        <p> <b> Conditions and booleans. </b></p>
        <div class="output">
            <form class="form-inline" method="POST" action="./day7.php">
                <label for="user-input">Enter your number : </label>
                <input type="number" 
                       name="usr-input"
                       class="ml-2 form-control" 
                       placeholder="Enter your number" 
                       id="usr-input" value="0" required>
                <button type="submit"  class="ml-2 custom-btn btn btn-primary" style="width: 15%;">Submit</button>
            </form>
        </div>
        <hr>
        <h5 id="day8"> Day8 - Output </h5>
        <p> <b> Challenge II - Basic Calculator </b></p>
        <div class="output">
            <form class="form-inline" method="POST" action="./day8.php">
                <label for="user-input">Enter your operands and your operation : </label>
                <input type="number" 
                       name="oper1"
                       class="ml-2 form-control" 
                       placeholder="Enter your number" 
                       id="usr-input" value="0" required>
                <select name = "op" 
                        class="ml-2 form-control"
                       id="operations">
                    <option value="+" disabled>+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <input type="number" 
                       name="oper2"
                       class="ml-2 form-control" 
                       placeholder="Enter your number" 
                       id="usr-input" value="0" required>
                <button type="submit"  
                        class="ml-2 custom-btn btn btn-primary" 
                        style="width: 15%;">Calculate</button>
            </form>
        </div>
        <hr>
        <h5 id="day9"> Day9 - Output </h5>
        <p> <b> Regular Expressions (regEx) </b></p>
        <div class="output">
            <div class="m-1">
                <br> 
                <div>
                  <span class="mb-2"> 
                    <b> Parse the following text, find the number of appearance of a word or a letter and replace it with REPLACED </b>  
                  </span>
                </div>
                <br>
                <pre>
                    At Stunt, we believe that our services must be rendered upon 
                    three important pillars: customization, expertise, and transparency. 
                    We will carefully listen to your needs and provide relevant comments 
                    and advice as to what can be done to make your product the best it can be. 
                    Our partnerships with other professionals ensure that we produce the best possible outcome. 
                    Furthermore, we will always 
                    let you know how we intend to proceed with the programming of your product 
                    and include you in the process.
                </pre>
            </div>
           <form class="form-inline" method="POST" action="./day9.php">
                <div class="form-group">
                    <input class="form-control" 
                           required="required" 
                           placeholder="word to look for" 
                           name="word" type="text">
                </div>
                <button type="submit"  
                        class="ml-2 custom-btn btn btn-primary" 
                        style="width: 15%;">Search and Replace</button>
           </form>
           <hr>
           <div>
           </div>
        </div>
        <hr>
        <h5 id="day10"> Day10 - Output </h5>
        <p> <b> Challenge III - Form Validation </b></p>
        <div class="output">
            <form class="form-inline" method="POST" action="./day10.php">
            <div class="form-group">
                <input class="custom-form form-control" 
                       required="required" 
                       placeholder="Name" 
                       name="name" type="text">
            </div>
            <div class="form-group">
                <input class="custom-form form-control" 
                       required="required" 
                       placeholder="XYZ followed by 10 number" 
                       name="phone_number" type="text">
            </div>

            <div class="form-group">
                <input class="custom-form form-control" 
                       required="required" 
                       placeholder="Email Address" 
                       name="email" type="text">
            </div>

            <button type="submit"  
                    class="ml-2 custom-btn btn btn-primary" 
                    style="width: 15%;">Submit</button>
           </form>
           
        </div>
        <hr>

      </div>
    </div>
  </div>
</div>

<footer class="page-footer">
     <div class="container-fluid">
       <div class="col-md-12">
        <div class="row pt-4">
            
            <div class="mx-auto col-md-4">
            <h4 class="p-4"> Contact Us</h4>
            <ul class="list-unstyled  pl-4">
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/contact#email-us"> Email us </a></li>
                
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/contact#join-us"> Join our team! </a></li>
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/contact#contact-form"> General Inquiry </a></li>
            </ul>
            </div>
            <div class="col-md-4">
            <h4 class="p-4"> About us<span class="glyphicon glyphicon-info-sign"></span> </h4>
            <ul class="list-unstyled  pl-4">
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/about#who-are-we"> What is Stunt-Business? </a></li>
                
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/about#why-choosing-us"> Why choose us? </a></li>
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/about#representant."> Meet the Founders </a></li>
            </ul>
            </div>
            <div class="col-md-4">
            <h4 class="p-4"> Our Services<span class="glyphicon glyphicon-wrench"></span></h4>
            <ul class="list-unstyled pl-4">
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/services"> Web Development </a></li>
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/services"> Programming </a></li>
                <li> <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/services"> Tutoring </a></li>
                
            </ul>
            </div>
        </div>
        </div>
        <div class="col-md-12" style="bottom:0 !important;">
        <hr class="end-of-box-footer">
        <div class ="row">
            <div class="mr-auto">
                <ul class="list-inline ml-4 pl-3">
                    <li class="list-inline-item">
                    <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/legal/terms-and-conditions"> Terms and Conditions </a>
                    </li>
                    <li class="list-inline-item"> 
                    <a class="link-no-deco" href="https://www.stuntbusiness.ca/en/legal/data-privacy"> Data Privacy </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="end-of-box-footer">
        <div class="row"> 
            <div class="mx-auto">
            <h4 class="text-center">Give us your feedback!<span class="glyphicon glyphicon-comment" ></span></h4>
            <ul class="list-inline ml-5 mr-5">
                <li class = "list-inline-item">
                <a href="https://www.facebook.com/StuntBusiness" target="_new">
                    <span class="fa-stack fa-lg icon-facebook">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x"></i>
                    </span>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="https://www.twitter.com/BusinessStunt" target="_new">
                    <span class="fa-stack fa-lg icon-twitter">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x"></i>
                </span>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.instagram.com/stuntbusiness" target="_new">
                <span class="fa-stack fa-lg icon-instagram">
                <i class="fa fa-square fa-stack-2x"></i>
                <i class="fa fa-instagram fa-stack-1x"></i>
                </span>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.linkedin.com/company/stunt-business/" target="_new">
                <span class="fa-stack fa-lg icon-linkedin">
                <i class="fa fa-square fa-stack-2x"></i>
                <i class="fa fa-linkedin fa-stack-1x"></i>
                </span>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://github.com/Stunt-Business" target="_new">
                <span class="fa-stack fa-lg icon-github">
                <i class="fa fa-square fa-stack-2x"></i>
                <i class="fa fa-github fa-stack-1x"></i>
                </span>
                </a>
            </li>
        </ul>  
        </div>
        </div> <!-- End of the row -->           
    </div>
    </div>
    <hr class="end-of-box-footer">
  <div class="footer-copyright text-center"> 
    &copy 
    <a class="link-no-deco" href="https://www.stuntbusiness.ca" >
    Stunt-Business - <?php echo date("Y"); ?>  </a>
  </div>
</footer>

<script>
jQuery(document).ready(function() {
  
      // var width, height;
      //dropdown menu function

      jQuery("#languages").click(function () {
            var width, height;
            width = jQuery(window).width(); 
            height = jQuery(window).height();
            if(width >= 768)//check width
            {
              jQuery("#navbar-display").addClass('hide');
              //toggle the regular dropdown
              if( jQuery("#lang").css('display') !== 'none')
              {
                  jQuery("#lang").slideUp('fast');
              }//endif
              else
              {
                if( jQuery("#lang").css('display') === 'none'){
                    jQuery("#lang").slideDown('fast');
                }//endif
              }//endelse
            } //endif
            else
            {
              if( jQuery("#navbar-display").css('display') !== 'none')
              {
                  jQuery("#navbar-display").addClass('hide');
              }//endif
              else
              {
                if( jQuery("#navbar-display").css('display') === 'none'){
                    jQuery("#navbar-display").removeClass('hide');
                    jQuery("#nv-first").collapse('hide');
                    jQuery("#nv-second").collapse('hide');
                    jQuery("#fa-up-down").addClass("fa-chevron-down");
                    jQuery("#fa-up-down-second").addClass("fa-chevron-down");


                }//endif
              }//endelse
            }//endelse
        });

        //dropdown btn checking first
        jQuery("#drop-btn").click(function () {
          if( jQuery("#nv-first").css('display') !== 'none')
          {
              jQuery("#fa-up-down").removeClass("fa-chevron-up");
              jQuery("#fa-up-down").addClass("fa-chevron-down");
              jQuery("#nv-first").collapse('hide');
              jQuery("#navbar-display").addClass('hide');
          }//endif
          else
          {
            if( jQuery("#nv-first").css('display') === 'none'){
                jQuery("#fa-up-down").removeClass("fa-chevron-down");
                jQuery("#fa-up-down").addClass("fa-chevron-up");
                jQuery("#nv-first").collapse('show');
                jQuery("#navbar-display").addClass('hide');
            }//endif
          }//endelse
      });
      //dropdown btn checking second
      jQuery("#drop-btn-second").click(function () {
          if( jQuery("#nv-second").css('display') !== 'none')
          {
              jQuery("#fa-up-down-second").removeClass("fa-chevron-up");
              jQuery("#fa-up-down-second").addClass("fa-chevron-down");
              jQuery("#nv-second").collapse('hide');
              jQuery("#navbar-display").addClass('hide');
          }//endif
          else
          {
            if( jQuery("#nv-second").css('display') === 'none'){
                jQuery("#fa-up-down-second").removeClass("fa-chevron-down");
                jQuery("#fa-up-down-second").addClass("fa-chevron-up");
                jQuery("#nv-second").collapse('show');
                jQuery("#navbar-display").addClass('hide');
            }//endif
          }//endelse
      });

      
});
$('.alert-success').fadeIn().delay(5000).fadeOut();
$('.alert-warning').fadeIn().delay(5000).fadeOut();
</script>
</body>
</html>