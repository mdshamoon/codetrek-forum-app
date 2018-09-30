alert("some alert");

function aler(){
	alert("Submitted");
	
}
var likes=0;
var dislikes=0;
document.getElementById("likes-no").innerHTML=likes;
document.getElementById("dislikes-no").innerHTML=dislikes;

var likes_count=false;
var dislikes_count=false;

function like()
{

	
	if(likes_count==false){
	likes++;

	likes_count=true;
	document.getElementById("likes").classList.add("text-success");

	if(dislikes_count==true){
	dislikes--;
	dislikes_count=false;
	document.getElementById("dislikes").classList.remove("text-danger");
}

	}
	else{
    likes--;
    likes_count=false;
    document.getElementById("likes").classList.remove("text-success");
    

	}
	document.getElementById("likes-no").innerHTML=likes;
	document.getElementById("dislikes-no").innerHTML=dislikes;

}

function dislike()
{
	if(dislikes_count==false){
	dislikes++;
	dislikes_count=true;
	document.getElementById("dislikes").classList.add("text-danger");

	if(likes_count==true){
	likes--;

	likes_count=false;
	document.getElementById("likes").classList.remove("text-success");
}

	}
	else{
    dislikes--;
    dislikes_count=false;
    document.getElementById("dislikes").classList.remove("text-danger");
	}
	document.getElementById("dislikes-no").innerHTML=dislikes;
	document.getElementById("likes-no").innerHTML=likes;
}