<!DOCTYPE html>
<html>
<head>
<title>FeedbackCafé</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<script>
function validateForm() {
    var isValid = true;
    var questions = document.getElementsByClassName("agile_info_select");

    for (var i = 0; i < questions.length; i++) {
        var radios = questions[i].getElementsByTagName("input");
        var isRadioChecked = false;
        for (var j = 0; j < radios.length; j++) {
            if (radios[j].type === "radio" && radios[j].checked) {
                isRadioChecked = true;
                break;
            }
        }
        if (!isRadioChecked) {
            isValid = false;
            alert("Please answer all questions.");
            break;
        }
    }

    return isValid;
}
</script>
</head>
<body class="agileits_w3layouts">
    <h1 class="agile_head text-center">Feedback Form</h1>
    <div class="w3layouts_main wrap">
	  <h3>Please help us to serve you better by taking a couple of minutes. </h3>

	    <form action="feedback.php" method="post" class="agile_form" onsubmit="return validateForm();">

		  <h2><span style="color: red;">*</span> How would you rate the quality of our customer service during your visit today?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="view1" value="excellent" id="excellent1" required> 
				 	  <label for="excellent1">excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view1" value="good" id="good1"> 
					  <label for="good1"> good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="view1" value="neutral" id="neutral1">
					 <label for="neutral1">neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="view1" value="poor" id="poor1"> 
					  <label for="poor1">poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	 
			 
			 <!-- Add required attribute here -->
			 <h2><span style="color: red;">*</span> How satisfied were you with the taste and presentation of the food you ordered?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="view2" value="excellent" id="excellent2" required> 
				 	  <label for="excellent2">excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view2" value="good" id="good2"> 
					  <label for="good2"> good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="view2" value="neutral" id="neutral2">
					 <label for="neutral2">neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="view2" value="poor" id="poor2"> 
					  <label for="poor2">poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	 

			 <!-- Add required attribute here -->
			 <h2><span style="color: red;">*</span> Did our staff meet your expectations in terms of attentiveness and responsiveness?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="view3" value="excellent" id="excellent3" required> 
				 	  <label for="excellent3">excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view3" value="good" id="good3"> 
					  <label for="good3"> good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="view3" value="neutral" id="neutral3">
					 <label for="neutral3">neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="view3" value="poor" id="poor3"> 
					  <label for="poor3">poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	 
			 
			 <!-- Add required attribute here -->
			 <h2><span style="color: red;">*</span> Were you pleased with the variety and freshness of the ingredients used in your meal?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="view4" value="excellent" id="excellent4" required> 
				 	  <label for="excellent4">excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view4" value="good" id="good4"> 
					  <label for="good4"> good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="view4" value="neutral" id="neutral4">
					 <label for="neutral4">neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="view4" value="poor" id="poor4"> 
					  <label for="poor4">poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	 

			<h2><span style="color: red;">*</span> If you have specific feedback, please write to us...</h2>
			<textarea placeholder="Additional comments" class="w3l_summary" name="comments" required=""></textarea>
			<input type="text" placeholder="Your Name" name="name" required />
			<input type="email" placeholder="Your Email" name="email" required />
			<input type="text" placeholder="Your Number" name="num" required /><br>
			<center><input type="submit" value="submit Feedback" class="agileinfo"
			style="width: 35%;" /></center>
	  </form>
	</div>
	<div class="agileits_copyright text-center">
			<p>© 2024 </p>
	</div>
</body>
</html>
