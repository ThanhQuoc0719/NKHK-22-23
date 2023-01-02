var divaddtopic=document.querySelector(".div-add-topic");
var contentaddtopic=document.querySelector(".content-add-topic");
var inputtopic=document.querySelector(".input-topic");
var btninserttopic=document.querySelector(".btn-addtopic");

var btnaddtopic=document.querySelector(".btn-add-topic");

btnaddtopic.addEventListener("click", function(){
    divaddtopic.style.display="flex";
});

divaddtopic.addEventListener("click", function(){
    close(contentaddtopic)
}
);

contentaddtopic.addEventListener("click", function(event){
    event.stopPropagation();
})

function close(item) {
    item.style.animation = "close linear .4s forwards"
    setTimeout(function(){
        item.style.animation = "show linear .4s forwards";
        item.parentNode.style.display = "none";
    }, 400);
}

btninserttopic.addEventListener("click", function(){
    if(inputtopic.value == "")
        inputtopic.style.border = "3px solid red";
    else
    {
        inputtopic.style.border = "2px solid #000000";
        addtopic();
    }
})

function addtopic()
{
    var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			text = this.responseText;
            if(text == '1')
			    location.reload();
            else
                inputtopic.style.border = "3px solid red";
		}
			
	};
	xhttp.open("POST", "process.php", false);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("U=inserttopic&theme="+inputtopic.value);
}