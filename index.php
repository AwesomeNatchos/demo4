

<!DOCTYPE html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <?php
include 'includes/head.php';
?>
</head>


<body>
<?php
include 'includes/nav.php';
?>  



  
        
        <div id="main">
          <div class="add-card">
            <div id="input_title" class="hidden-input">
              <input id="title_value" type="text" style="font-size: 20px;" class="input-note" placeholder="Title">
            </div>
            <br>
            <input type="text" id="input_main" class="input-note" style="font-size: 17px;" placeholder="Take a note...">
            <br><br>
            <div id="input_extra" class="hidden-input">
             <div class = "custom-select" style="float: left;">
               <img src="download.svg">&nbsp;<select id="color_value">
                <option value="#FFFFFF">Color</option>
                <option value="#FEF4F4">White</option>
                <option value="#FB4A3A">Red</option>
                <option value="#FB5C3A">Orange</option>
                <option value="#FBE93A">Yellow</option>
                <option value="#28B463">Green</option>

              </select>&nbsp;
              <img src="label.svg">&nbsp;<select id="label_value">
                <option value="none">Label</option>
                <option value="Inspirational">Inspirational</option>
                <option value="Personal">Personal</option>
                <option value="Work">Work</option>
              </select>
            </div>
            <div id="sub-option" style="float: right;">
              <a href="#" onclick="submitFunction();">Submit</a>
            </div>

          </div>
        </div>

        <div style="display:none;"id="button_label">
          <select onChange="changeLabel(this);">
           <option value="none">Label</option>
                <option value="Inspirational">Inspirational</option>
                <option value="Personal">Personal</option>
                <option value="Work">Work</option>
          </select>
        </div>
         <div style="display:none;"id="button_color">
          <img src="download.svg">&nbsp;<select onChange="changeColor(this);">
            <option value="#FFFFFF">Color</option>
            <option value="#FEF4F4">White</option>
            <option value="#FB4A3A">Red</option>
            <option value="#FB5C3A">Orange</option>
            <option value="#FBE93A">Yellow</option>
            <option value="#28B463">Green</option>

          </select>
        </div>
        <div style="display:none;" id="button_delete">
          <svg width="24px" xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24" height="24px" class="gb_Ac"><path d="m6 19c0 1.1 0.9 2 2 2h8c1.1 0 2-0.9 2-2v-12h-12v12zm13-15h-3.5l-1-1h-5l-1 1h-3.5v2h14v-2z"></path><path d="m0 0h24v24h-24z" fill="none"></path></svg>
        </div>
        <div class="myGrid" id="myGrid">
          


      </div>

     
      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
      <script src="javaScripts\script.js"></script>  

    </body>
    </html>

<?php
include 'includes/footer.php';
?> 
