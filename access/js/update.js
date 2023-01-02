var containerupdate=document.querySelector(".container-update");
var contentupdate=document.querySelector(".content-update");
var btncloseup=document.querySelector(".btn-close-up");
var btnagreeup=document.querySelector(".btn-agree-up");
var btnupdate=document.querySelectorAll(".icon-update");
var inputup= document.querySelectorAll(".input_content-up");

var themeup=document.getElementById('lb_topic-up');
var songtitleup=document.getElementById('lb_name-up');
var instructorup=document.getElementById('lb_teacher-up');
var implementerup=document.getElementById('lb_student-up');
var contentup=document.getElementById('lb_content-up');

btnupdate.forEach((item, index) => {
    item.addEventListener("click", function(){
        id = item.parentNode.parentNode.children[0].innerHTML;
        themeup.value = item.parentNode.parentNode.children[2].innerHTML;
        songtitleup.value = item.parentNode.parentNode.children[1].innerHTML;
        instructorup.value = item.parentNode.parentNode.children[4].innerHTML;
        implementerup.value = item.parentNode.parentNode.children[5].innerHTML;
        getcontent(id, contentup);
        containerupdate.style.display="flex";
    });
});

containerupdate.addEventListener("click", function(){
    close(contentupdate);
})
btncloseup.addEventListener("click", function(){
    close(contentupdate);
})

contentupdate.addEventListener("click", function(event){
    event.stopPropagation();
})

btnagreeup.addEventListener("click", function(){
    kt = true;
    testinputup();
    if(kt)
    {
        update();
    }
})

function testinputup(){
    inputup.forEach((item, index) => {
        if(item.value == "")
        {
            kt = false;
            item.style.border = "3px solid red";
        }
        else
            item.style.border = "2px solid #000000";
    });
}

function update()
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			text = this.responseText;
		    location.reload();
		}
			
	};
	xhttp.open("POST", "process.php", false);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("U=update&theme="+themeup.value+"&id="+id+"&songtitle="+songtitleup.value+"&instructor="+instructorup.value+"&implementer="+implementerup.value+"&content="+contentup.value);
}

function close(item) {
    item.style.animation = "close linear .4s forwards"
    setTimeout(function(){
        item.style.animation = "show linear .4s forwards";
        item.parentNode.style.display = "none";
    }, 400);
}

