var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img0");
var captionText = document.getElementById("caption");
this.img.onclick = function(){
   
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("x")[0];

// When the user clicks on <span> (x), close the modal
/*span.onclick = function() { 
  modal.style.display = "none";
} */


function clickImage(event){
	if(event.target.className == "modalImg"){
		var imageSrc = event.target.src;
		 modal.style.display = "block";
    	 modalImg.src = imageSrc;
   		captionText.innerHTML = event.target.alt;
	}
}

document.addEventListener("click", clickImage, true);