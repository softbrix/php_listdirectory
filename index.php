<!DOCTYPE html>
<html>
<head>
  <title>List a directory</title>
  <style>
  #images img {
    width: 200px;
    height: 200px;
  }
  </style>
<body>

<div id="images">
</div>
<div id="content">
  Loading
</div>

<script language="text/javascript" type="text/javascript">
  function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("content").innerHTML = this.responseText;

       var files = JSON.parse(this.responseText);
       var imagesNode = document.getElementById("images");
       images.innerHTML = "";
       files.forEach((itm) => {
         if(!itm.toLowerCase().endsWith("jpg")) {
           return;
         }
         var imgNode = document.createElement("img");
         imgNode.setAttribute("alt", itm);
         imgNode.setAttribute("src", "get.php?id=" + itm);

         images.appendChild(imgNode);
       });
      }
      if(this.readyState === XMLHttpRequest.DONE) {
        setTimeout(loadDoc, 5000);
      }
    };
    xhttp.open("GET", "list.php", true);
    xhttp.send();
  }
  loadDoc();
</script>
</body>
</html>
