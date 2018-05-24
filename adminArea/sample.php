<!DOCTYPE html>
<html>
<HEAD>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</HEAD>
<body>

<h2>The XMLHttpRequest Object</h2>

<h3>Start typing a name in the input field below:</h3>

<form action="sample.php"> 
  <select name="productSubject" required="required" id="productSemester">
      <option>Select a subject</option>
      <option>Select 1</option>
      <option>Select 2</option>
      <option>Semester3</option>
                  
  </select>
</form>

<p>Suggestions: <span id="txtHint"></span></p> 

<script>
  var str="hello";
   var selectedSemester;
   function getHouseModel(){
      var selectedSemester=$('#productSemester').val();
      aler(selectedSemester);
}
function showHint() {
  
  var xhttp;
  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?q="+str, true);
  xhttp.send();   
}
</script>

</body>
</html>
