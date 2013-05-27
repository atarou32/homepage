<!DOCTYPE html>
<html>
  <head>
  
    <style type="text/css">
      #wrapper{
        margin:0 auto;
        width:800px;
      }
      #middle{
        background-color:#fcc;
      }
      #menu{
        float:left;width:230px;
      }
      #content{
	position:relative;
        padding-left:20px;
	padding-right:20px;
        background-color: #fff;
        width:75%;
	left:10%;
      }
      #footer{
        background-color:#cfc;
        padding:10px;
      }
      .response_success {
        margin: 10px 10px;
        padding: 5px;
        border: medium solid #6666ff;
	border-width: 2px;
      }

      .response_error {
        margin: 10px 10px;
        padding: 5px;
        border: medium solid #ff6666;
	border-width: 2px;
      }        
      .clearfix:after {
      	content: ".";
        display: block;
        clear:both;
	height:0;
	visibility:hidden;
      }
      .clearfix {
        min-height:1px;
	display:inline-block;
      }
      * html .clearfix {
        height: 1px;
        height: auto;
        overflow: hidden;
      }
     
      .clearfix {
	display:block;
      }

      .border {
        margin: 10px 10px;
        padding: 5px;
        border: medium solid #DDAAAA;
	border-width: 2px;
      }
      .border > .p {
	padding-left:2em;
      }
        

      </style>
      <meta charset="UTF-8">
      <title><?php echo htmlspecialchars($title, ENT_QUOTES,"UTF-8"); ?></title>
    </head>
    <body>
      <div id="wrapper">
        <div style="background-color:#ccf;padding:10px">
	  <h1><?php echo htmlspecialchars($title, ENT_QUOTES,"UTF-8"); ?></h1>
	</div>
        <div id="middle" class="clearfix">
          <?php if (isset($_SESSION['error'])): ?>
	  <div class="response_error">
            <?php if (is_array($_SESSION['error'])): ?>
              <?php foreach ($_SESSION['error'] as $error): ?>
                <p><? echo htmlspecialchars($error, ENT_QUOTES); ?></p>
              <?php endforeach; ?>
            <? else: ?>
              <?php echo htmlspecialchars($_SESSION['error']); ?>
            <? endif; ?>
          </div>
	  <?php endif; ?>
 	  <?php if (isset($_SESSION['success'])): ?>
          <div class="response_success">
            <?php if (is_array($_SESSION['success'])): ?>
              <?php foreach ($_SESSION['success'] as $success): ?>
                <p><? echo htmlspecialchars($success, ENT_QUOTES); ?></p>
              <?php endforeach; ?>
            <? else: ?>
              <?php echo htmlspecialchars($_SESSION['success']); ?>
            <? endif; ?>
          </div>
	  <?php endif; ?>
          <div id="content">
            <?php echo $content; ?>
          </div>
        </div>
        <div id="footer">&copy katamome atarou 2013</div>
      </div>
    </body>
</html>

