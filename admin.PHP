<?php
    include('sql_query\config.php');
    if(!$_SESSION["is_LoggedIn"] || !$_SESSION['is_admin']){
            header("Location: index.php");
    }
    
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en-IN"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="MBTS">
    <meta name="description" content="">
    <title>Page 1</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="Page-1.css" media="screen">
  <link rel="stylesheet" href="/static/jquery.dataTables.css">
    <link rel="stylesheet" href="/static/bootstrap.min.css">
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.11.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Page 1">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/" /></head>
  <body class="u-body u-overlap u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-palette-4-base u-sticky u-sticky-279e u-header" id="sec-ab67"><style class="u-sticky-style" data-style-id="279e">.u-sticky-fixed.u-sticky-279e:before, .u-body.u-sticky-fixed .u-sticky-279e:before {
borders: top right bottom left !important
}</style><h5 class="u-text u-text-default u-text-1"><?php echo $_SESSION['username']?></h5><h5 class="u-text u-text-default u-text-2">M.B.T.S Libary</h5><div class="u-border-5 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div></header>
    <section class="u-clearfix u-section-1" id="sec-2675">
      <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-palette-1-base u-size-12 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <a href="/admin.php?tab=books" class="u-align-left u-btn u-button-style u-hover-palette-1-light-2 u-palette-4-dark-1 u-text-hover-black u-btn-1" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">books&nbsp;<span class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path></svg></span>
                </a>
                <a href="/admin.php?tab=requests" class="u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-4-dark-1 u-radius-2 u-btn-2" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">requests&nbsp;<span class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path></svg></span>
                </a>
                <a href="/admin.php?tab=Transactions" class="u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-4-dark-1 u-radius-2 u-btn-3" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">Transactions&nbsp;<span class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path></svg></span>
                </a>
                <a href="/admin.php?tab=add_Book" class="u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-4-dark-1 u-radius-2 u-btn-4" data-animation-name="customAnimationIn" data-animation-duration="1000">add_Book&nbsp;<span class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path></svg></span>
                </a>
                <a href="/admin.php?tab=ADD_students" class="u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-4-dark-1 u-radius-2 u-btn-5" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">ADD_students&nbsp;<span class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path></svg></span>
                </a>
                <a href="/logout.php" class="u-btn u-btn-round u-button-style u-hover-palette-4-base u-palette-3-base u-radius-50 u-btn-7">Logout
                </a>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-48 u-white u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2 P-2"><?php
      
      if ($_SERVER["REQUEST_METHOD"] == "GET") {
          if (isset($_GET['tab'])) {
              # code...
              echo "<h1>".$_GET['tab']."</h1>";
          }
          else
          header("Location: /admin.php?tab=books");
          
      }
  ?>
                <?php
                if($_GET['tab'] == "books"){
                $result = mysqli_query($conn,"SELECT DISTINCT  * FROM `mbts`.`books` WHERE 1");
                echo "<table id='mytable' class='display'><thead>
                <tr id='details of book'>
                    <th scope='col' onclick=''>Accession_no</th>
                    <th scope='col' onclick=''>Title</th>
                    <th scope='col' onclick=''>Branch</th>
                    <th scope='col' onclick=''>Author</th>
                    <th scope='col'>Status</th>
                </tr></thead>";
                while($row = mysqli_fetch_assoc($result)){
                    $Status = ($row['is_available'] == 1) ? "available" : "unavailable" ;
                    $id = $row['Accession_no'];
                    echo "<tr><td>".$row['Accession_no']."</td>
                              <td>".$row['Title']."</td>
                              <td>".$row['Branch']."</td>
                              <td>".$row['Author']."</td>
                              <td>".$Status."</td>
                            </tr>";
            
                } 
            
                }
                elseif($_GET['tab'] == "requests"){
                    $result = mysqli_query($conn,"SELECT DISTINCT  DISTINCT `Transaction_id`, `Accession_no`, `Title`, `Reciver_pin-no`, `Status`, `Transaction_Position` FROM `mbts`.`transactions` WHERE `Status` = 'waiting for admin to accept'");
                    echo "<table class='table' id='mytable' class='display'>
                    <thead><tr>
                        <th scope='col' onclick=''>Transaction_id</th>
                        <th scope='col' onclick=''>Accession_no</th>
                        <th scope='col' onclick=''>Title</th>
                        <th scope='col' onclick=''>Reciver_pin-no</th>
                        <th scope='col' onclick=''>Actions</th>
                    </tr></thead>";
                    while($row = mysqli_fetch_assoc($result)){
                        // $Status = ($row['is_available'] == 1) ? "available" : "unavailable" ;
                      
                        echo "<tr><td>".$row['Transaction_id']."</td>
                                    <td>".$row['Accession_no']."</td>
                                    <td>".$row['Title']."</td>
                                    <td>".$row['Reciver_pin-no']."</td>
                                    <td><button type='button'id=".$row['Accession_no']." class='Accept_request btn btn-primary' data-bs-toggle='modal' data-bs-target='#myModal' >Accept</button></td>
                                </tr>";
                    }
            
                }
                elseif($_GET['tab'] == "Transactions"){
                    $result = mysqli_query($conn,"SELECT DISTINCT  * FROM `mbts`.`transactions` ");
                    echo "<table class='table' id='mytable' class='display'>
                    <thead><tr>
                        <th scope='col' onclick=''>Transaction_id</th>
                        <th scope='col' onclick=''>Accession_no</th>
                        <th scope='col' onclick=''>Title</th>
                        <th scope='col' onclick=''>Reciver_pin-no</th>
                        <th scope='col' onclick=''>issuance_date</th>
                        <th scope='col' onclick=''>Due_date</th>
                        <th scope='col' onclick=''>Status</th>
                        <!-- <th>Actions</th> -->
                    </tr></thead>";
                    while($row = mysqli_fetch_assoc($result)){
                        
                        
                        if($row['Status'] == 'Collect Book by this evening'){
                          $Status =  "student will collect book by evening  <button type='button'id=".$row['Accession_no']." class='Book_collected btn btn-primary' data-bs-toggle='modal' data-bs-target='#Bookcollectedmodal ' >
                          Collected
                          </button>";

                        }
                        elseif($row['Status'] == 'book was collected by student'){
                          $Status = "student will collect book by evening  <button type='button'id=".$row['Accession_no']." class='Book_returned btn btn-primary' data-bs-toggle='modal' data-bs-target='#Bookreturnmodal ' >
                          Accept return 
                          </button>" ;
                        }
                        else{
                          
                        $Status = $row['Status'] ;
                        }
                        echo "<tr><td>".$row['Transaction_id']."</td>
                                    <td>".$row['Accession_no']."</td>
                                    <td>".$row['Title']."</td>
                                    <td>".$row['Reciver_pin-no']."</td>
                                    <td>".$row['issuance_date']."</td>
                                    <td>".$row['Due_date']."</td>
                                    <td>".$Status."</td>
                                </tr>";
            
                    } 
            
                }
                elseif($_GET['tab'] == "add_Book"){ 
                    echo '<form method="POST" action="/Addbook.php" enctype="multipart/form-data">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Accession number</label>
                        <input type="text" name="BookID" class="form-control" id="inputCity" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputCity">BOOK Title</label>
                        <input type="text" name="Title" class="form-control" id="inputCity" required>
                      </div>
                      </div>
                      <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Branch</label>
                        <select  name="Branch" class="form-control" required>
            
                          <option value="" selected>choose...</option>
                          <option value="DCME">DCME</option>
                          <option value="DME">DME</option>
                          <option value="DEEE">DEEE</option>
                          <option value="DECE">DECE</option>
                          <option value="DCE">DCE</option>
                          <option value="Genaral">Genaral</option>
                        </select>
                      </div>
                      </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Author</label>
                        <input type="text" name="Author" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                      </div>
                    </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="id_no">is_available</label>
                          <select name="is_available" class="form-control">
                          <option value="1">Available</option>
                          <option value="2">UnAvailable</option>
                         </select>
                        </div>
                      </div>
                      <div class="form-row">
                      <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary" class="form-control"><i class="fa fa-plus"></i> Add Book</button>
                      </div>
                    </div>
                    </form>';
                }
                elseif($_GET['tab'] == "ADD_students"){ 
                  $tag3 = "";
                    if(isset($_SESSION["student_exist"]) && $_SESSION["student_exist"]){
                      $tag3 = "<h6>User already exist!</h6>";
                      $_SESSION["student_exist"] = false;
                    }
                    if(isset($_SESSION['Addstudent_Sucess'])&& $_SESSION['Addstudent_Sucess'] ){
                      $tag3 = "<h6>Added Successfully!</h6>";
                      $_SESSION['Addstudent_Sucess'] = false;
                    }
                    echo '<form method="POST" class="p-3" action="/addstudent.php" enctype="multipart/form-data">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Pin number</label>
                        <input type="text" name="pin" class="form-control" id="inputCity">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputCity">Name</label>
                        <input type="text" name="password" class="form-control" id="inputCity">
                      </div>
                      </div>
                      <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Branch</label>
                        <input type="text" name="confrimpass" class="form-control">
                      </div>
                      <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Gender</label>
                        <input type="text" name="Gender" class="form-control">
                      </div>
                      <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="College">College</label>
                        <input type="text" name="College" value= "MBTS"class="form-control">
                      </div>
                      <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Scheme</label>
                        <input type="text" name="Scheme" class="form-control">
                      </div>
                      <br>
                      <div class="form-row">
                      <div class="col-md-12 text-left">
                    <button type="submit" class="btn btn-primary" class="form-control"><i class="fa fa-plus"></i> Add Student</button>'.
                    
                    $tag3
                      .'</div>
                    </div>
                    </form>';
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
</body>
<!-- RequestConfrimModal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Accept request</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="h6"><b>Your are accepting requesting of</b></div>
                    <div><b>Accession_no : </b><Accession_no id="RequestedBookID"></Accession_no></div>
                    <div><b>Book Title : </b><BookTitle id="RequestedBookTitle"></BookTitle></div>
                    <div><b>Reciver Pin_no : </b><BookTitle id="ReciversPinno"></BookTitle></div>
                </div>
                <div class="modal-footer">
                    <form action="/AcceptBook.php" method="post">
                        <input type="text" name="ReciversPinno1" id="ReciversPinno1" value=''hidden>
                        <input type="text" name="Accessioninput" id="Accessioninput" value='' hidden>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" ID='request_confrim'>Confrim</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
<!-- BookCollectedModal -->
<div class="modal fade" id="Bookcollectedmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Collected</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="h6"><b>Your are Confrimming that this book is collected by student</b></div>
            <div><b>Accession_no : </b><Accession_no id="ConfrimBookID"></Accession_no></div>
            <div><b>Book Title : </b><BookTitle id="confrimBookTitle"></BookTitle></div>
            <div><b>Reciver Pin_no : </b><BookTitle id="confrimReciversPinno"></BookTitle></div>
        </div>
        <div class="modal-footer">
            <form action="/BookCollected.php" method="post">
                <input type="text" name="confrimReciversPinno1" id="confrimReciversPinno1" value='' hidden>
                <input type="text" name="confrimAccessioninput" id="confrimAccessioninput" value='' hidden>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" ID='request_confrim'>Confrim</button>
            </form>
        </div>
        </div>
    </div>
    </div>    
        </div>
        <!-- BookCollectedModal -->
<div class="modal fade" id="Bookreturnmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Collected</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="h6"><b>Your are Confrimming that this book is returned by student</b></div>
            <div><b>Accession_no : </b><Accession_no id="ConfrimBookID1"></Accession_no></div>
            <div><b>Book Title : </b><BookTitle id="confrimBookTitle1"></BookTitle></div>
            <div><b>Reciver Pin_no : </b><BookTitle id="confrimReciversPinno_1"></BookTitle></div>
        </div>
        <div class="modal-footer">
            <form action="/Bookreturned.php" method="post">
                <input type="text" name="confrimReciversPinno1" id="confrimReciversPinno2" value='' hidden>
                <input type="text" name="confrimAccessioninput" id="confrimAccessioninput1" value='' hidden>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" ID='request_confrim2'>Confrim</button>
            </form>
        </div>
        </div>
    </div>
    </div>    
        </div>
          </div>
        </div>
      </div>
    </section>
  
  
    <script src="/static/jquery-3.7.0.min.js"></script>
    <script src="/static/jquery.dataTables.js"></script>
    <script src="/static/bootstrap.min.js"></script>
    <script>
        function logout() {
            window.location = "logout.php";
        }

    </script>
      <script>
        $(document).ready(function () {
      $('#mytable').DataTable();

    });
  </script>
    <script>  
        requests =document.getElementsByClassName('Accept_request');
        Array.from(requests).forEach((element) => {
          element.addEventListener("click", (e) => {
            console.log("edit ");
            tr = e.target.parentNode.parentNode;
            Accession_no = tr.getElementsByTagName("td")[1].innerText;
            BookTitle =tr.getElementsByTagName('td')[2].innerText;
            Pinno =tr.getElementsByTagName('td')[3].innerText;
            document.getElementById('RequestedBookID').innerHTML = Accession_no;
            document.getElementById('RequestedBookTitle').innerHTML = BookTitle;
            document.getElementById('ReciversPinno').innerHTML = Pinno;
            document.getElementById('ReciversPinno1').value = Pinno;
            document.getElementById('Accessioninput').value = Accession_no;
      })
    })
    </script>
    <script>  
        requests =document.getElementsByClassName('Book_collected');
        Array.from(requests).forEach((element) => {
        element.addEventListener("click", (e) => {
          tr = e.target.parentNode.parentNode;
          Accession_no = tr.getElementsByTagName("td")[1].innerText;
          BookTitle =tr.getElementsByTagName('td')[2].innerText;
        Pinno =tr.getElementsByTagName('td')[3].innerText;
        document.getElementById('ConfrimBookID').innerHTML = Accession_no;
        document.getElementById('confrimBookTitle').innerHTML = BookTitle;
        document.getElementById('confrimReciversPinno').innerHTML = Pinno;
        document.getElementById('confrimReciversPinno1').value = Pinno;
        document.getElementById('confrimAccessioninput').value = Accession_no;
      })
    })
    </script>
    <script>  
        requests =document.getElementsByClassName('Book_returned');
        Array.from(requests).forEach((element) => {
        element.addEventListener("click", (e) => {
          tr = e.target.parentNode.parentNode;
          Accession_no = tr.getElementsByTagName("td")[1].innerText;
          BookTitle =tr.getElementsByTagName('td')[2].innerText;
        Pinno =tr.getElementsByTagName('td')[3].innerText;
        document.getElementById('ConfrimBookID1').innerHTML = Accession_no;
        document.getElementById('confrimBookTitle1').innerHTML = BookTitle;
        document.getElementById('confrimReciversPinno_1').innerHTML = Pinno;
        document.getElementById('confrimReciversPinno2').value = Pinno;
        document.getElementById('confrimAccessioninput1').value = Accession_no;
      })
    })
    </script>
</body>
</html>