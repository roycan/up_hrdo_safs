<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Everything is already finalized -->

<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Study Leave - HRDO Scholarship and Fellowship Services</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo_black_icon.ico'); ?>"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css">

  <!-- CSS Code -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/application_process.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/employee_header_footer_body.css'); ?>" />
  
  </head>


  <!-- HTML Code -->
  <body>

    <!-- HEADER-->
    <?php include('employee_header.php'); ?>

    <div id="segment1" class="ui vertical stripe segment">
      <br><h1 id="subqual"><center>Study Leave Qualifications</center></h1><br><br><br>
      <h4 id="sub"><center>Check out the list of qualifications before viewing the application process</center></h4>
      <div class="ui vertical stackable grid">
        <div class="three column row">
          <div class="column">
            <i id="icon1" class="red massive student icon"></i>
            <!-- <i class="red massive long arrow right icon"></i> -->
            <h3>&emsp;&emsp;&emsp;&emsp;&emsp;Qualification 1</h3>
            <i class="red check icon"></i>Proven Teaching Ability<br>
            <i class="red check icon"></i>Good Undergraduate and Graduate Record<br>
            <i class="red check icon"></i>Interest in Further Academic Development<br>
            <i class="red check icon"></i>Good Physical Health<br>
            <i class="red check icon"></i>Desire to Complete Grad Studies<br>
          </div>

          <div class="column">
            <i id="icon2" class="red massive user icon"></i>
            <h3>&emsp;&emsp;&emsp;&emsp;&emsp;Qualification 2</h3>
            <i class="red check icon"></i>Not a substitute<br>
            <i class="red check icon"></i>Rank must be an Assistant Professor or lower (with pay)<br>
            <i class="red check icon"></i>Service must at least be one (1) year<br>
            <i class="red check icon"></i>Tenured or being considered for tenure<br>
            <i class="red check icon"></i>Age must be no higher than 40 years old<br>
          </div>

          <div class="column">
            <i id="icon3" class="red massive users icon"></i>
            <h3>&emsp;&emsp;&emsp;&emsp;&emsp;Qualification 3</h3>
            <i class="red check icon"></i>Must be approved by the:<br>&emsp;
            <i class="red caret right icon"></i>Department Chair<br>&emsp;
            <i class="red caret right icon"></i>Department APC<br>&emsp;
            <i class="red caret right icon"></i>College ExeComm<br>&emsp;
            <i class="red caret right icon"></i>College Dean<br>&emsp;
            <i class="red caret right icon"></i>CU APFC<br>&emsp;
            <i class="red caret right icon"></i>Chancellor<br>&emsp;
          </div>
          </div>
        </div>
      </div>

      <div id="segment2" class="ui vertical stripe segment">
        <h1 id="subqual"><center>Obligations & Conditions</center></h1><br><br><br>
        <h4 id="sub1"><center>Check out the list of obligations and conditions before viewing the application process</center></h4>
        <div class="ui vertical stackable grid">
          <div class="two column row">
            <div class="three wide column">
              <i id="icon4" class="red massive help icon"></i>
            </div>

            <div class="twelve wide column">
              <div class="ui accordion">

                <div id="acctitle" class="title">
                  <i class="dropdown icon"></i>
                  <i class="red align justify icon"></i>Type
                </div>
                <div class="content">
                  <p><i class="red angle double right icon"></i>Study Leave with Pay (SLWP) and Study Leave without Pay (SLWOP)</p>
                  <p><i class="red angle double right icon"></i>As a University policy, UP faculty members are encouraged to pursue graduate studies in fields that are within the academic priorities of their departments, colleges and the University.
                  <p><i class="red angle double right icon"></i>Faculty members may be given tuition waiver and full or partial load reduction from their teaching. While the grant of full or partial load reduction is designed to help faculty students complete their studies in the soonest time possible, it is subject to conditions which ensure that units are able to meet their teaching responsibilities.</p>
                </div>

                <div id="acctitle" class="title">
                  <i class="dropdown icon"></i>
                  <i class="red hourglass half icon"></i>Effectivity
                </div>
                <div class="content">
                  <h4 id="sub2">Study Leave with Pay (SLWP)</h4>
                  <p><i class="red angle double right icon"></i>
                  Faculty members on study leave may enjoy a fellowship or full study leave with pay as follows, subject to availability of funds, exigencies of service, and based on merit.<br><br>&emsp;
                  <i class="red long arrow right right icon"></i>Master’s degree: at most two and a half years (30 months)<br>&emsp;
                  <i class="red long arrow right right icon"></i>Doctoral degree: Up to four years (48 months) after a master’s degree or its equivalent has been earned, Up to five years (60 months) for straight Ph.D. program<br><br>
                  <i class="red angle double right icon"></i>In very exceptional cases, and on the recommendation of the CU APFC, the Chancellor may authorize an extra semester for those pursuing a master’s degree or an extra year for those pursuing a doctoral degree.
                  </p>
                  <h4 id="sub2">Study Leave without Pay (SLWOP)</h4>
                  <p><i class="red angle double right icon"></i>
                  Faculty members on full study leave without pay shall enjoy complete de-loading from regular faculty duties and 100% waiver of tuition, laboratory and miscellaneous fees (except Student Fund fees) provided the study load is approved by the faculty member’s graduate advisor and department chair, subject to normal academic progress but no other entitlements. Those on such leave (local or foreign) are subject to the same requirements as local faculty Fellows, except in the matter of the return service obligation.
                  </p>
                </div>

                <div id="acctitle" class="title">
                  <i class="dropdown icon"></i>
                  <i class="red checked calendar icon"></i>Appointment
                </div>
                <div class="content">
                  <p><i class="red angle double right icon"></i>Full Time Appointment</p>
                </div>

                <div id="acctitle" class="title">
                  <i class="dropdown icon"></i>
                  <i class="red trophy icon"></i>Privileges
                </div>
                <div class="content">
                  <p><i class="red angle double right icon"></i>
                    Faculty members on full study leave with pay or on fellowship shall enjoy the following privileges:<br><br>&emsp;
                    <i class="red long arrow right right icon"></i>Full de-loading from regular faculty duties<br>&emsp;
                    <i class="red long arrow right right icon"></i>Full faculty salary and other benefits for regular faculty in the active service (including eligibility for promotions)<br>&emsp;
                    <i class="red long arrow right right icon"></i>100% waiver of tuition, laboratory and miscellaneous fees (except Student Fund fees) in University courses provided study load is approved by the faculty member’s graduate advisor and department chair<br>&emsp;
                    <i class="red long arrow right right icon"></i>Rights to some suitable faculty office or desk space (for local Fellows, to the extent available), but no further entitlements<br>&emsp;
                    <i class="red long arrow right right icon"></i>Thesis or dissertation allowance may be granted subject to the recommendation of the APFC, the availability of funds and approval by the Chancellor (During the leave with pay, the faculty member retains his/her faculty item.)<br>
                  </p>
                </div>

                <div id="acctitle" class="title">
                  <i class="dropdown icon"></i>
                  <i class="red clone icon"></i>Conditions
                </div>
                <div class="content">
                  <h4 id="sub2">Study Leave with Pay (SLWP)</h4>
                  <p><i class="red angle double right icon"></i>
                    Before the start of the full study leave with pay or fellowship, the Fellow (also those on full study leave with pay) must execute a return service contract with the University and the corresponding surety agreement:<br><br>&emsp;
                    <i class="red long arrow right right icon"></i>For local Fellows, the contract shall stipulate (among other things) a return service of one year (12 months) for every year spent, or a fraction thereof, on fellowship.<br>&emsp;
                    <i class="red long arrow right right icon"></i>For Fellows abroad, the return service shall be at the rate of two years (24 months) return service for every year, or fraction thereof, spent on fellowship or full study leave.
                  </p>
                  <p><i class="red angle double right icon"></i>
                    In case the Fellow does not fulfil the return service requirements, then s/he must reimburse the following to the University:<br><br>&emsp;
                    <i class="red long arrow right right icon"></i>All expenses incurred, plus<br>&emsp;
                    <i class="red long arrow right right icon"></i>An equity charge of 50% of the total amount expended, and<br>&emsp;
                    <i class="red long arrow right right icon"></i>Interest at the prevailing legal rate at the time of the breach or revocation of the contract.<br>&emsp;
                    <i>A member of the UP faculty or staff may act as guarantor in the surety agreement only if s/he is a relative of the faculty Fellow.</i>
                  </p>
                  <p><i class="red angle double right icon"></i>
                    The Fellow must commit to the following conditions:<br><br>&emsp;
                    <i class="red long arrow right right icon"></i>Complete, in the soonest time possible, the graduate program for which the fellowship was granted<br>&emsp;
                    <i class="red long arrow right right icon"></i>Study full-time (i.e., carry at least the normal load)<br>&emsp;
                    <i class="red long arrow right right icon"></i>Not engage in any other employment or practice of profession during the period of the award<br>&emsp;
                    <i class="red long arrow right right icon"></i>Submit at the end of each semester a true copy of grades and a progress report duly certified by the Fellow’s faculty adviser to the chair, dean, and Diliman Academic Personnel and Fellowship Committee.
                  </p>

                  <h4 id="sub2">Study Leave without Pay (SLWOP)</h4>
                  <p><i class="red angle double right icon"></i>
                    Before the start of the full study leave without pay or fellowship, the Fellow (also those on full study leave without pay) must execute a return service contract with the University and the corresponding surety agreement.<br><br>
                    <i class="red angle double right icon"></i>Faculty on full study leave without pay shall render one (1) year of service for every two (2) years of leave or a fraction thereof. The same limits on the total number of years imposed on faculty Fellows shall be imposed on those on full study leave without pay.<br><br><i>[1142nd BOR meeting, May 26, 2000]</i>
                  </p>
                </div>

                <div id="acctitle" class="title">
                  <i class="dropdown icon"></i>
                  <i class="red remove icon"></i>Restrictions
                </div>
                <div class="content">
                  <h4 id="sub2">Study Leave with Pay (SLWP)</h4>
                  <p><i class="red angle double right icon"></i>
                    No member of the faculty shall enrol as a student in the University System or in an outside institution without the permission of her/his Dean or Director and the Chancellor. Permission may be granted only when, considering the teaching load of the faculty member, the nature and scope of the course s/he intends to take, and the time the course requires, such study will not impair her/his efficiency as a member of the faculty.<br><br><i>[Art. 260]</i>
                  </p>

                  <h4 id="sub2">Study Leave without Pay (SLWOP)</h4>
                  <p><i class="red angle double right icon"></i>
                    Any member of the academic staff, officer, or employee of the University System shall be dropped fiom the service for unexplained absence for at least thirty (30) days after the expiration of the period of the leave granted. Page 29, Chapter 6.2.9 Leave Without Pay <br><br><i>(Study Leave/Special Detail), Faculty Manual, 2005.</i><br>

                    <i>(Refer to Section 2.12 Leaves and Special Detail of Chapter 10 Conduct,Restrictions and DiscipIine)</i>
                  </p>

                  <p><i class="red angle double right icon"></i>
                    10.2.12 Leaves and Special Detail University policy provides that no more than the equivalent of fifteen percent (15%) of the faculty may be allowed to go on leave of absence with pay at any given semester. The Executive Committee likewise adopted a policy that leaves and special detail taken during the semester which shall amount to losing twenty percent (20%) of class meetings shall not be allowed. Fast-tracking of class meetings for fhe reason that the faculty member is leaving for abroad is discouraged. Finally, leaves or special detail that start while the semester is ongoing and end after the next semester has started are not allowed. Faculty members should synchronize their leaves or special detail with the stmestral schedule.<br><br><i>(OC memo no. ERR-03-091,Sept. 3,2003)</i>
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="segment3" class="ui vertical stripe segment">
      <h1><center>Study Leave Application Process</center></h1><br><br><br>
      <div class="ui vertical stackable grid">
        <div class="five column row">
          <div id="verticalcol" class="four wide column">
            <i class="red massive mail icon"></i>
            <!-- <i class="red massive long arrow right icon"></i> -->
            <h3>Step 1</h3>
            <h4>Submit letter of request</h4>
            <div class="ui accordion">
              <div class="title">
                <i class="dropdown icon"></i>
                <i class="red align justify icon"></i>Full Details
              </div>
              <div class="content">
                <p><i class="red angle double right icon"></i>Submit letter of request with endorsement and complete documents attached to Scholarship section for validation</p>
              </div>
              <div class="title">
                <i class="dropdown icon"></i>
                <i class="red university icon"></i>Service Provider
              </div>
              <div class="content">
                <p><i class="red angle double right icon"></i>Scholarship Section</p>
              </div>
              <div class="title">
                <i class="dropdown icon"></i>
                <i class="red user icon"></i>Person in charge
              </div>
              <div class="content">
                <p><i class="red angle double right icon"></i>Frontline Staff of Scholarship Section</p>
              </div>
              <div class="title">
                <i class="dropdown icon"></i>
                <i class="red folder icon"></i>Forms
              </div>
              <div class="content">
                <p><i class="red check icon"></i>Letter of request for study leave addressed to the Chancellor, through channels with endorsement of Department Chair and Dean/Head of Unit/College (with Justication)</p>
                <p><i class="red check icon"></i>Copy of acceptance/admission from school/university</p>
                <p><i class="red check icon"></i>Certification from Department Chair for the yearly renewal of appointment if the period of study is beyond the effectivity of temporary appointment</p>
                <p><i class="red check icon"></i>Department's/Unit's Faculty Profile for the academic year (not to exceed 15% on leave with pay)</p>
                <p><i class="red check icon"></i>Duly accomplished Study Leave Contract and corresponding Suretyship agreement</p>
                <p><i class="red check icon"></i>University Clearance</p>
              </div>
            </div>
          </div>

          <div id="verticalcol" class="two wide column">
            <i class="red massive right angle icon"></i>
          </div>

          <div id="verticalcol" class="four wide column">
            <i class="red massive check circle icon"></i>
            <h3>Step 2</h3>
            <h4>Verify the appointment status</h4>
            <div class="ui accordion">
              <div class="title" id="fulldetails2">
                <i class="dropdown icon"></i>
                <i class="red align justify icon"></i>Full Details
              </div>
              <div class="content">
                <p><i class="red angle double right icon"></i>Verify the appointment status if effectivity of the study leave is within the approved period of appointment</p>
              </div>
              <div class="title" id="service2">
                <i class="dropdown icon"></i>
                <i class="red university icon"></i>Service Provider
              </div>
              <div class="content">
                <p><i class="red angle double right icon"></i>Appointment Section</p>
              </div>
              <div class="title" id="person2">
                <i class="dropdown icon"></i>
                <i class="red user icon"></i>Person in charge
              </div>
              <div class="content">
                <p><i class="red angle double right icon"></i>Analyst of Appointment Section</p>
              </div>
            </div>
          </div>

          <div id="verticalcol" class="two wide column">
            <i class="red massive right angle icon"></i>
          </div>

          <div id="verticalcol" class="four wide column">
            <i class="red massive lock icon"></i>
            <h3>Step 3</h3>
            <h4>Secure copy of Study Leave application</h4>
            <div class="ui accordion">
              <div class="title" id="fulldetails3">
                <i class="dropdown icon"></i>
                <i class="red align justify icon"></i>Full Details
              </div>
              <div class="content">
                <p><i class="red angle double right icon"></i>Secure receiving copy of the Study Leave Application </p>
              </div>
              <div class="title" id="service3">
                <i class="dropdown icon"></i>
                <i class="red university icon"></i>Service Provider
              </div>
              <div class="content">
                <p><i class="red angle double right icon"></i>Scholarship Section</p>
              </div>
              <div class="title" id="person3">
                <i class="dropdown icon"></i>
                <i class="red user icon"></i>Person in charge
              </div>
              <div class="content">
                <p><i class="red angle double right icon"></i>Frontline Staff of Scholarship Section </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>

    <!-- FOOTER -->
    <?php include('employee_footer.php'); ?>
  </body>


  <!-- JS Code -->
  <script>

  $('.ui.accordion')
    .accordion({
      'exclusive': false,
    }
  );

  $('.ui.dropdown')
    .dropdown()
  ;

  </script>

</html>
