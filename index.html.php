<!DOCTYPE html>
<html lang="en">

<head>
	<?php 
	include 'links/csslinks.php';
	?>
</head>

<body onload="fetch();">
<nav class="navbar navbar-expand-lg p-3 navbar-light navbar-toggleable-sm fixed-top ">
  <a class="navbar-brand pl-5" href="#">COVID - 19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#homeid">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptomsid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventionsid">preventions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="worldcoronalive.php">worldcoronalive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiadaywise.php">indiandaywise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">indiacoronalive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
    </ul>
   
  </div>
</nav>
<!-- Main Header -->
<section class="main-header" id="homeid">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-6 col-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="images/all.png" width="300" height="300" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col-lg-7 col-md-6 col-12 order-lg-2 order-1">
            <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                <h1>
                    Let's Stay Safe & Fight Together Against Cor<span class="corona-rot"><img src="images/covid-19.png" width="100" height="100" alt="" class="img-fluid"><span>na Virus
                </h1>
            </div>
        </div>
    </div>
</section>	
<!-- Corona Update -->
<section class="corona-updates" id="worldcoronaid">
    <div class="mb-3">
        <h3 class="text-uppercase text-center">
            covid-19 Live updates of the world
        </h3>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center" id="tbval">
        <thead>
          <tr>
            <th>Country</th>
            <th>TotalConfirmed</th>
            <th>TotalRecovered</th>
            <th>TotalDeaths</th>
            <th>NewConfirmed</th>
            <th>NewRecovered</th>
            <th>NewDeaths</th>
        </tr>
        </thead>
      </table>

    </div>
    <!-- <div class="d-flex justify-content-around align-items-center">
        <div>
            <h1 class="count">1524266</h1>
            <p>Passenger screen at airport</p>
        </div>
        <div>
            <h1 class="count">512</h1>
            <p>Active COVID-19 cases</p>
        </div>
        <div>
            <h1 class="count">40</h1>
            <p>Cured/Dischanrge Cases</p>
        </div>
        <div>
            <h1 class="count">9</h1>
            <p>Death Cases</p>
        </div>
    </div> -->
</section>
<!-- About CORONA Virus -->
<section>
  <div class="container-fluid sub-section pt-5 pb-5" id="aboutid">
    <div class="section-header text-center mb-5 mt-4">
    <h1>About COVID-19</h1>
    </div>
    <div class="row">
      <div class="col-lg-5 col-md-6 col-12 ml-lg-5 ml-md-5 ml-0">
      <img src="images/aboutcorona.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
      <h2>What is COVID-19 (Corona Virus)</h2>
        <p>The Novel Coronavirus (2019-nCoV) is a respiratory illness first identified in Wuhan City, China. Symptoms include fever, cough, and shortness of breath. The virus can be spread person-to-person in close proximity or from contact with contaminated surfaces.</p>
        <p>The World Health Organization (WHO) has declared the coronavirus outbreak a pandemic and has named the disease caused by the virus COVID-19. It is related to other coronaviruses such as SARS and MERS, but is not the same virus.</p>
      </div>
    </div>
  </div>
</section>

<!-- About CORONA Virus Symptoms -->
<section>
  <div class="container-fluid pt-5 pb-5" id="symptomsid">
    <div class="section-header text-center mb-5 mt-4">
      <h1>Coronavirus Symptoms</h1>
    </div>
    <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/cough.png" class="img-fluid" width="120" height="120" alt=""/>
          <figcaption>Cough</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/runnynose.png" class="img-fluid" width="120" height="120" alt=""/>
          <figcaption>Runny Nose</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/fever.png" class="img-fluid" width="120" height="120" alt=""/>
          <figcaption>Fever</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/cold.png" class="img-fluid" width="120" height="120" alt=""/>
          <figcaption>Cold</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/tiredness.png" class="img-fluid" width="120" height="120" alt=""/>
          <figcaption>Tiredness</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
          <img src="images/difficultyBreathing.png" class="img-fluid" width="120" height="120" alt=""/>
          <figcaption>Difficulty Breathing(Severe Causes)</figcaption>
        </figure>
      </div>
    </div>
    </div>
</section>

<!-- About CORONA Virus Preventions -->
<section>
  <div class="container-fluid sub-section pt-5 pb-5" id="preventionsid">
    <div class="section-header text-center mb-5 mt-4">
      <h1>6 Steps Preventions Against Corona Virus</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
              <img src="images/handsanitizer.png" alt="" class="img-fluid" width="90" height="90"/>
              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p> Wash your hands regularly for 20 seconds with soap and water or alcohol-based hand rub.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                <img src="images/facemask.png" alt="" class="img-fluid" width="90" height="90"/>
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>Cover your nose and mouth with a disposable tissues or flexed elbow when you cough or sneeze.</p>
              </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                <img src="images/quarantine.png" alt="" class="img-fluid" width="90" height="90"/>
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>Avoid close contact (1 meter or 3 feet) with people who are unwell.</p>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                <img src="images/stayhome.png" alt="" class="img-fluid" width="90" height="90"/>
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>Stay home and self-isolate from others in the household if you fill unwell. </p>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                <img src="images/tvnews.png" alt="" class="img-fluid" width="90" height="90"/>
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>Stay informed by watching news & follow the recommended practice.</p>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                <img src="images/medicalcare.png" alt="" class="img-fluid" width="90" height="90"/>
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>If you have fever, cough and difficulty breathing seek medical care early.</p>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- >Contact Us ASAP -->
<section>
  <div class="container-fluid pt-5 pb-5" id="contactid">
    <div class="section-header text-center mb-5 mt-4">
      <h1>Contact Us ASAP</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
        <form action="" method="POST">
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="username" placeholder="Name" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Email" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>Mobile</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="mobile" placeholder="Mobile" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label>Select Symptoms</label>
            <div class="clearfix"></div>
            <div class="form-check form-check-inline sympt1">
              <label class="check">cold
                <input type="checkbox" checked="checked" name="coronasymp[]" value="cold">
              <span class="checkmark"></span>
              </label>
            </div>
            <div class="form-check form-check-inline">
              <label class="check ">fever
                  <input type="checkbox" name="coronasymp[]" value="fever">
                <span class="checkmark"></span>
              </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="check ">difficulty in breath
                <input type="checkbox"  name="coronasymp[]" value="breath">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="check ">feeling weekS
                <input type="checkbox"  name="coronasymp[]" value="tired">
              <span class="checkmark"></span>
            </label>
          </div>
          
        </div>

          <div class="form-group">
            <label>Any message you want to give us</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
          </div>

          <div class="form-group">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="mt-5">
  <div class="text-white text-center container-fluid">
    <p class="mb-0 py-2">&copy;copyright by COVID-19</p>
  </div>
</footer>
<section class="scroll_top">
    <a href="#" class="scrollToTop text-center"> <i class="fas fa-arrow-up"></i></a>
</section>
<div class="overlay"></div>
<?php
include 'links/jslinks.php';
?>
<script>
function fetch(){
    $.get("https://api.covid19api.com/summary",
        function (data){
            //console.log(data['Countries'].length);
            var tbval = document.getElementById('tbval');

            for(i=1; i<(data['Countries'].length); i++){
                var x = tbval.insertRow();
               
                x.insertCell(0);
                tbval.rows[i].cells[0].innerHTML= data['Countries'][i-1]['Country'];
                tbval.rows[i].cells[0].style.background='#7a4a91';
                tbval.rows[i].cells[0].style.color='#ffffff';

                x.insertCell(1);
                tbval.rows[i].cells[1].innerHTML= data['Countries'][i-1]['TotalConfirmed'];
                tbval.rows[i].cells[1].style.background='#4bb7d8';

                x.insertCell(2);
                tbval.rows[i].cells[2].innerHTML= data['Countries'][i-1]['TotalRecovered'];
                tbval.rows[i].cells[2].style.background='#9cc850';

                x.insertCell(3);
                tbval.rows[i].cells[3].innerHTML= data['Countries'][i-1]['TotalDeaths'];
                tbval.rows[i].cells[3].style.background='#f36e23';

                x.insertCell(4);
                tbval.rows[i].cells[4].innerHTML= data['Countries'][i-1]['NewConfirmed'];
                tbval.rows[i].cells[4].style.background='#4bb7d8';

                x.insertCell(5);
                tbval.rows[i].cells[5].innerHTML= data['Countries'][i-1]['NewRecovered'];
                tbval.rows[i].cells[5].style.background='#9cc850';

                x.insertCell(6);
                tbval.rows[i].cells[6].innerHTML= data['Countries'][i-1]['NewDeaths'];
                tbval.rows[i].cells[6].style.background='#f36e23';                
            }
        }
    )
}
</script>
</body>

</html>


<!-- <?php
include 'dbcon.php';

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $symp=$_POST['coronasymp'];
  $msg=$_POST['message'];

  $chk = "";
  foreach($symp as $chk1){
    $chk .= $chk1."," ;
  }
  $insertquery = " insert into coronacases(username, email, mobile, symptoms, message) values ('$username', '$email', '$mobile', '$chk', '$msg' )";
  
  $query = mysqli_query($con, $insertquery);
  
      if($query){
        ?>
        <script>
        alert("Data inserted successfully");
        </script>
        <?php
    }else{
        ?>
        <script>
        alert("Data not inserted");
        </script>
        <?php
    }
}
?> -->

