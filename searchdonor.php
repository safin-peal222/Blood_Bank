<?php 

include 'header.php';

?>
<div id="main-content">

<h2>Add New Record</h2>



<form action="searchresult.php" class="post-form" method="post">


<div class="form-group">

<label>Blood Group</label>
<select name="class">
<option value="" selected disabled>Blood Group</option>
<option value="A+">A+</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="A-">A-</option>
<option value="AB+">AB+</option>
<option value="O+">O+</option>
<option value="AB-">AB-</option>
</select>
</div>

<input class="submit" type="submit" name-"search_by_bg" value="Save"  />


</form>


</div>




