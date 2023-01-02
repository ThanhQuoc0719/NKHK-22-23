var containeradd=document.querySelector(".container-add");
var contentadd=document.querySelector(".content-add");
var btnclose=document.querySelector(".btn-close");
var btnagree=document.querySelector(".btn-agree");
var btninsert=document.querySelector(".btn-insert");
var input= document.querySelectorAll(".input_content");
var kt;
var theme=document.getElementById('lb_topic');
var postcode=document.getElementById('lb_tenma');
var songtitle=document.getElementById('lb_name');
var instructor=document.getElementById('lb_teacher');
var implementer=document.getElementById('lb_student');
var content=document.getElementById('lb_content');

btninsert.addEventListener("click",function(){
    containeradd.style.display="flex";
})

containeradd.addEventListener("click", function(){
    close(contentadd);
})
btnclose.addEventListener("click", function(){
    close(contentadd);
})

contentadd.addEventListener("click", function(event){
    event.stopPropagation();
})

btnagree.addEventListener("click", function(){
    kt = true;
    testinput();
    if(kt)
    {
        add();
    }
})

function testinput(){
    input.forEach((item, index) => {
        if(item.value == "")
        {
            kt = false;
            item.style.border = "3px solid red";
        }
        else
            item.style.border = "2px solid #000000";
    });
}

function add()
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			text = this.responseText;
            if(text == 1)
				location.reload();
			else
			{
				postcode.style.border = "3px solid red";
			}
		}
			
	};
	xhttp.open("POST", "process.php", false);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("U=insert&theme="+theme.value+"&postcode="+postcode.value+"&songtitle="+songtitle.value+"&instructor="+instructor.value+"&implementer="+implementer.value+"&content="+content.value);
}

function close(item) {
    item.style.animation = "close linear .4s forwards"
    setTimeout(function(){
        item.style.animation = "show linear .4s forwards";
        item.parentNode.style.display = "none";
    }, 400);
    postcode.style.border = "2px solid #000000";
}

