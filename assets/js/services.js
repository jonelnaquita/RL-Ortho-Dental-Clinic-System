document.getElementById("one").addEventListener("click", function(event){
    event.preventDefault();
    document.getElementById("descOne").style.display = "block";
    document.getElementById("descTwo").style.display = "none";
});
document.getElementById("two").addEventListener("click", function(event){
    event.preventDefault();
    document.getElementById("descOne").style.display = "none";
    document.getElementById("descTwo").style.display = "block";
});
document.getElementById("three").addEventListener("click", function(event){
    event.preventDefault();
    document.getElementById("descOne").style.display = "none";
    document.getElementById("descTwo").style.display = "none";
	document.getElementById("descThree").style.display = "block";
});
document.getElementById("four").addEventListener("click", function(event){
    event.preventDefault();
    document.getElementById("descOne").style.display = "none";
    document.getElementById("descTwo").style.display = "none";
	document.getElementById("descThree").style.display = "none";
	document.getElementById("descFour").style.display = "block";
});
document.getElementById("five").addEventListener("click", function(event){
    event.preventDefault();
    document.getElementById("descOne").style.display = "none";
    document.getElementById("descTwo").style.display = "none";
	document.getElementById("descThree").style.display = "none";
	document.getElementById("descFour").style.display = "none";
	document.getElementById("descFive").style.display = "block";
});