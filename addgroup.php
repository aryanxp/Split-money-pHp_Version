<?php
// Initialize the session
session_start();
require_once "config.php";
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/customfont.css">
    <link href="stylefba0.css?v=1527233455" rel="stylesheet" type="text/css" />
    <link href="css/flat-ui.css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="page-header">
        <h1>Welcome to <strong>Split Money</strong></h1>
    </div>
    <!-- <div class="row">
        <div class="col-xs-5">
            <h4>Enter number of group member</h4>
        </div>
        <div class="col-xs-5 form-group <?php echo (!empty($grp_nom_err)) ? 'has-error' : ''; ?>">
                <input type="number" name="grp_nom" min="2" max="40" step="1" name="p" value="3<?php echo $grp_nom; ?>" id="count" class="form-control">
                <span class="help-block"><?php echo $grp_nom_err; ?></span>
            </div>
        <div class="col-xs form-group">
        <input type="submit" class="btn btn-primary" value="GO">
        </div>
    </div>
</form> -->
<a href="welcome.php"><i class="fa-icon fas fa-angle-left " aria-hidden="true"></i>Back</a>
        <div><h3>
			How many people are in your group?</h3><br/>
			<div id="countw">
				<div id="down">
				<input value="-" type="button" onclick="change('d')" class="btn btn-hg btn-info"/>
				</div>
				<div id="countw2">
					<div class="form-group">
						<div class="input-group">
						<span class="input-group-addon"><span class="input-icon fui-user"></span></span> <input type="number" min="2" max="40" step="1" name="p" value="3" id="count" class="form-control input-hg">
				</div></div></div>
				<div id="up">
				<input value="+" type="button" onclick="change('u')" class="btn btn-hg btn-info"/>
				</div>
			</div>
			<input type="hidden" value="none" name="o" />
			<br />
			Give it a name!			<br />
			<input maxlength="40" type="text" id="text" name="name" placeholder="e.g. Roadtrip" class="form-control"/>
			<br />
			
			<input value="Go!" id="go" class="btn btn-hg btn-success" type="submit">
			</div></form>
</body>
</html>