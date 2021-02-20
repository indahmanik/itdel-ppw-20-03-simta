<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Progress Tugas Akhir</title>
    <style>
		footer {
			padding: 5px;
			background-color: grey;
			text-align: center; 
			}
	</style>
  </head>
  <body>
	<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <p class="navbar-brand" style="padding-top: 15px;">
        <img src="pict/Del.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        Institut Teknologi Del
      </p>

      <form class="form-inline" style="margin: left;">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><img src="pict/search_icon.png" width="23" height="23"></button>
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      </form>

      <?php
            if ($_SESSION["login"]) {
        ?>

        <form class="form-inline" style="margin-left: auto;">
            <p style= "padding-right: 30px; padding-top: 10px; font-size: 25px;">Hello, <?php echo $_SESSION["loginuser"]; ?>!</p>
            <a class="navbar-icon" href="#">
              <img src="pict/user_icon.png" width="30" height="30" style="margin-right: 30px;" >
              <img src="pict/bell_icon.png" width="30" height="30" data-toggle="tooltip" title="notification" style="margin-right: 30px;">
            </a>
        </form>
        <form action="logout.php">
          <button type="submit" class="btn btn-outline-primary" style="padding: 5px;">Log Out</button>
        </form>
        <?php } ?>
    </nav>

    <div class="row no-gutters">
        <div class="col-md-2" style="background-color: #dedede;">
            <div class="container" style="background-color: rgb(247, 247, 247)">
              <h5 style="padding-left: 10px; padding-top: 10px; color: #3327a1; padding-bottom: 10px;">Navigation</h5>
            </div>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="text-align: center;">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="profile.php">Profile</a>
                <a class="nav-link" href="messages.php">Messages</a>
                <a class="nav-link" href="upload.php">Upload</a>
                <a class="nav-link active" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Progress</a>
                <a class="nav-link" href="settings.php">Settings</a>
            </div>
            <br>
            <div class="row no-gutters">
              <div class="container" style="background-color: rgb(247, 247, 247)">
                <h5 style="padding-left: 10px; padding-top: 10px; color: #3327a1;">Event</h5>
              </div>
            </div>
            <div class="row no-gutters" >
              <div class="container" style="text-align: center;">
                <div class="card-body">
                  <form class="form-inline" action="event.php">
                    <button type="subbmit" class="btn btn-info" style="font-size: 15px; background-color: darkcyan; margin: auto;">Add New Event</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="row no-gutters">
                <div class="card-body">

                {% for ev in event %}
                    <h5 class="card-title" style="font-size: 17px;">{{ev['event']}}</h5>
                    <p class="card-text" style="font-size: 14px; text-align: right; color: #193Abf;">{{ev['tanggal']}}</p>
                {% endfor %}
                </div>
            </div>
        </div>

        <div class="col-md-8">
          <div class="scroll">
            <br>
            <br>
            <h4 style="font-family:'Times New Roman', Times, serif;  text-align: center; color:#193Abf"> Progress</h4><br />
		<div class="progress">
		<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
		<div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
		<div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
	  
	</div>
	  <br>
	  <br>
		<button type="button" class="btn btn-primary active btn-sm">Reviews</button>
      
	  <table>
		<tr class="table">
			<td><img src="pict/prof1.png" width="50px"/></td>
			<td>
				<b>Professor Z on Submission 1:</b>
				<p>"Hey Sublime! You need to fix the WHOLE document because i found some errors on it. now i want you to ..."</p>
          <a href="CekFile.php"> <p align="right"> Check Document</p></a>
        
			</td>
	  </table>
	  <table>
	  <tr class="table">
        <td><img src="pict/prof2.png" width="50px"/></td>
		<td>
		   <b>Professor X on Submission 5:</b>
           <p>"Hey Sublime! I already reviewed your document and I'll say it's already perfect! but I you can make it to be..."</p>
           <a href="CekFile.php"> <p align="right"> Check Document</p></a>
		</td>
	  </table>
  </div>
        </div>

        <div class="col-md-2" style="background: #edf4f7; margin-left: auto;">
            <fieldset class="scheduler-border">
                <h5 style="text-align: center; padding-left: 10px; padding-top: 10px; color: #3327a1;">Your Task</h5>
                  
                  <div class="accordion" id="accordionExample">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Task #1
                          </button>
                        </h5>
                      </div>
                  
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                          Revisi Dokumen Bab 1
                          <p>(Keterangan Task)</p>
                          <p style="color: rgb(196, 56, 56);">Deadline 16 November 2020</p>
                          <!-- <button type="button" class="btn btn-outline-primary" style="padding-right: 15px; padding-left: 15px; float: right; margin-bottom: 15px;">Submit</button> -->
                          <form action="submit.php">
                            <button type="submit" class="btn btn-primary btn-md" style="padding-right: 15px; padding-left: 15px; float: right; margin-bottom: 15px;">Submit</button>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Task #2
                          </button>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Revisi Dokumen Bab 3
                            <p>(Keterangan Task)</p>
                            <p style="color: rgb(196, 56, 56);">Deadline 30 November 2020</p>
                            <form action="submit.php">
                              <button type="submit" class="btn btn-primary btn-md" style="padding-right: 15px; padding-left: 15px; float: right; margin-bottom: 15px;">Submit</button>
                            </form>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Task #3
                          </button>
                        </h5>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            Revisi Dokumen Bab 5
                            <p>(Keterangan Task)</p>
                            <p style="color: rgb(196, 56, 56);">Deadline 25 Oktober 2020</p>
                               <form action="submit.php">
                                <button type="submit" class="btn btn-primary btn-md" style="padding-right: 15px; padding-left: 15px; float: right; margin-bottom: 15px;">Submit</button>
                              </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </fieldset>
            <br>
            <br>

            <div class="container" style="margin-left: 10px; margin-right: 10px;">
                <div class="row">
                    <div class="span12">
                        <table class="table-condensed table-bordered table-striped">
                            <thead>
                                <tr>
                                  <th colspan="7">
                                    <span class="btn-group">
                                        <a class="btn"><i class="icon-chevron-left"></i></a>
                                        <a class="btn active">September 2020</a>
                                        <a class="btn"><i class="icon-chevron-right"></i></a>
                                    </span>
                                  </th>
                                </tr>
                                <tr>
                                    <th>Su</th>
                                    <th>Mo</th>
                                    <th>Tu</th>
                                    <th>We</th>
                                    <th>Th</th>
                                    <th>Fr</th>
                                    <th>Sa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="muted">29</td>
                                    <td class="muted">30</td>
                                    <td class="muted">31</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td class="btn-primary"><strong>20</strong></td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td class="muted">1</td>
                                    <td class="muted">2</td>
                                    <td class="muted">3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

    </div>
	</section>
  <br>
  <br>
  <br>
  <br>
  <footer>
		<p>Sistem Informasi Manajemen Tugas Akhir Copyright © 2020</p>
	</footer>
 </body> 
</html>
