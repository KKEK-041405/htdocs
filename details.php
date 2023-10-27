<?php
include('sql_query\config.php');
if(!$_SESSION["is_LoggedIn"]  || $_SESSION['is_admin']){
    header("Location: index.php");
}
$username11 = $_SESSION["username"];
$result = mysqli_query($conn,"SELECT * FROM `mbts`.`student_details` WHERE `Pin_no` = '$username11'");
$row = mysqli_fetch_assoc($result);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta link -->
    <meta charset="utf-8">
    <meta name="keywords" content="MBTS">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Nicepage 5.11.4, nicepage.com">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Page 1">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
    <!-- custom link -->
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <!-- datatable css -->
    <link rel="stylesheet" href="/static/jquery.dataTables.css">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="/static/bootstrap.min.css">
    <script src="/static/bootstrap.bundle.min.js"></script>
    <!-- font link -->
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <title>student</title>
    <script>
        Accession_no = "";

    </script>
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1"
    }</script>
    
</head>
<body class="u-body u-overlap u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-palette-4-base u-sticky u-sticky-279e u-header" id="sec-ab67"><style class="u-sticky-style" data-style-id="279e">.u-sticky-fixed.u-sticky-279e:before, .u-body.u-sticky-fixed .u-sticky-279e:before {borders: top right bottom left !important
}</style><h5 class="u-text u-text-default u-text-1"><?php echo $_SESSION['username']?></h5><h5 class="u-text u-text-default u-text-2">M.B.T.S Libary</h5><div class="u-border-5 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div></header>
    <section class="u-clearfix u-section-1" id="sec-2675">
      <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-palette-1-base u-size-12 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <a href="/admin.php?tab=books" class="u-align-left u-btn u-button-style u-hover-palette-1-light-2 u-palette-4-dark-1 u-text-hover-black u-btn-1" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">books&nbsp;<span class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path></svg></span>
                </a>
                <a href="/student.php?tab=on_due" class="u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-4-dark-1 u-radius-2 u-btn-2" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">on_due&nbsp;<span class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path></svg></span>
                </a>
                <a href="/student.php?tab=Transactions" class="u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-4-dark-1 u-radius-2 u-btn-3" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">Transactions&nbsp;<span class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path></svg></span>
                </a>
                <a href="/details.php" class="u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-4-dark-1 u-radius-2 u-btn-4" data-animation-name="customAnimationIn" data-animation-duration="1000">Details&nbsp;<span class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path></svg></span>
                </a>
                <a href="/logout.php" class="u-btn u-btn-round u-button-style u-hover-palette-4-base u-palette-3-base u-radius-50 u-btn-7">Logout
                </a>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-48 u-white u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2 P-2">
                <div class="u-container-layout u-container-layout-3">
                <h2 align="center">student_details</h2>
              <b style="font-size: 26px;">Pin_no :</b> <?php echo $row['Pin_no']."<br>";?>
              <b style="font-size: 26px;">Name :</b>   <?php echo $row['Name']."<br>";?>
                <b style="font-size: 26px;">Gender :</b> <?php echo $row['Gender']."<br>";?>
              <b style="font-size: 26px;">Branch :</b> <?php echo $row['Branch']."<br>";?>
              <b style="font-size: 26px;">Scheme :</b> <?php echo $row['Scheme']."<br>";?>
              </div>
              </div></div>
            </section>
            </body>
</html>