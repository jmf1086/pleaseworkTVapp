<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Successful LogIN</title>
</head>

<body>
	<h1><span style="color: blue">Welcome to Joeys TV APP</span></h1>
	<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Joeys TV Tracker</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" rel="stylesheet" type="text/css"/>
<link href="file:///C|/Users/joey/Desktop/TestApp/TestApp/styles/custom.css" rel="stylesheet" type="text/css">
<style type="text/css">
</style>
<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>

</head> 
<body> 


<div id="page" data-role="page" data-theme="b">
	<div data-role="header" data-theme="b">
  	<h1>Joeys Tv Tracker</h1>
	<div class="logo"><img src="img/tv.jpg" width="200" height="" alt=""/> </div>
	<p>This is your one stop place to keep track of all your TV shows. If you need a show to watch check out the Popular Show section!!<p>
	</div>
	<div data-role="content">	
		<ul data-role="listview" data-theme="c">
			<li><a href="#shows">Your Shows!</a></li>
            <li><a href="#aboutus">About Us</a></li>
			<li><a href="#pshows">Popular Shows</a></li>
			<li><a href="#comments">Comments</a></li>
			
		</ul>		
	</div>
	<div data-role="footer" data-theme="b">
	  <h4>Your App &copy; 2017</h4>
	</div>
</div>
<div data-role="page" id="shows" data-add-back-btn="true" data-transition="slide">
  <div data-role="header">
    <h1>Your Shows</h1>
  </div>
  <div data-role="content">Your Shows</div>
  <div data-role="footer">
    <h4>&copy;</h4>
  </div>
</div>
<div data-role="page" id="aboutus" data-add-back-btn="true" data-transition="slide">
  <div data-role="header">
    <h1>About Us</h1>
    <h3>We are a small group of people looking to make your tv watching life easier.<br/>
    We charge nothing for our services. The only thing we ask is you be respectful.</h3>
  </div>
  <div data-role="content">
    <p></p>
    <p>&nbsp;</p>
  </div>
  <div data-role="footer">
    <h4>&copy;</h4>
  </div>
</div>
<div data-role="page" id="comments" data-add-back-btn="true" data-transition="slide">
  <div data-role="header">
    <h1>Comments</h1>
  </div>
  <div data-role="content">
    <table width="400" border="1">
      <tbody>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </tbody>
    </table>
    <form id="InsertCommentsForum" name="InsertCommentsForum" method="post">
      <table width="500" border="1">
        <tbody>
          <tr>
            <td>&nbsp;            <div data-role="fieldcontain">
              <label for="textinput">Name:</label>
              <input name="textinput" type="text" id="textinput" form="InsertCommentsForum" value=""  />
            </div></td>
          </tr>
          <tr>
            <td>&nbsp;
              <div data-role="fieldcontain">
                <label for="textinput2">Email:</label>
                <input name="textinput2" type="text" id="textinput2" form="InsertCommentsForum" value=""  />
            </div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;
              <div data-role="fieldcontain">
                <label for="textarea">Comments:</label>
                <textarea name="textarea" cols="40" rows="8" id="textarea" form="InsertCommentsForum"></textarea>
            </div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><input type="submit" name="submit" id="submit" value="Submit"></td>
          </tr>
        </tbody>
      </table>
      <table width="500" border="1">
        <tbody>
          <tr>
            <td>Latest Comments</td>
          </tr>
          <tr>
            <td>Posters Name:</td>
          </tr>
          <tr>
            <td>Comments:</td>
          </tr>
          <tr>
            <td>Posted date:</td>
          </tr>
        </tbody>
      </table> 
    </form>
    <p>&nbsp;</p>
  </div>
  <div data-role="footer">
    <h4>&copy;</h4>
  </div>
</div>
<div data-role="page" id="pshows" data-add-back-btn="true" data-transition="slide">
  <div data-role="header">
    <h1>Popular Shows</h1>
    <h2>The Good Place<br/>
    Brooklyn Nine Nine<br/>
    Bob's Burgers<br/></h2>
  </div>
  <div data-role="content"></div>
  <div data-role="footer">
    <h4>&copy;</h4>
  </div>
</div>

  </div>
</div>
</body>
</html>

	<br/>logout
</body>
</html>