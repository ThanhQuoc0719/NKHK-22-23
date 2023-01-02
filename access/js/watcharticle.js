var containerwatchdetail=document.querySelector(".container-watch-detail");
var contentwatch=document.querySelector(".content-watch");
var btnclosewatch=document.querySelector(".btn-close-watch");
var iconwatch=document.querySelectorAll(".icon-watch");

var watchpostcode=document.getElementById('watch-postcode');
var watchtheme=document.getElementById('watch_topic');
var watchsongtitle=document.getElementById('article-title');
var watchinstructor=document.getElementById('watch_teacher');
var watchimplementer=document.getElementById('watch_student');
var watchcontent=document.getElementById('watch_content');

iconwatch.forEach((item, index) => {
    item.addEventListener("click", function(){
        watchpostcode.innerHTML = item.parentNode.parentNode.children[0].innerHTML;
        watchtheme.innerHTML = item.parentNode.parentNode.children[2].innerHTML;
        watchsongtitle.innerHTML = item.parentNode.parentNode.children[1].innerHTML;
        watchinstructor.innerHTML = item.parentNode.parentNode.children[4].innerHTML;
        watchimplementer.innerHTML = item.parentNode.parentNode.children[5].innerHTML;
        getcontent(watchpostcode.innerHTML, watchcontent);
        containerwatchdetail.style.display="flex";
    });
});

containerwatchdetail.addEventListener("click", function(){
    close(contentwatch);
})
btnclosewatch.addEventListener("click", function(){
    close(contentwatch);
})

contentwatch.addEventListener("click", function(event){
    event.stopPropagation();
})

function getcontent(id, item)
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			text = this.responseText;
            item.value= text;
            
		}
	};
	xhttp.open("POST", "process.php", false);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("U=getcontent&id="+id);
}

function close(item) {
    item.style.animation = "close linear .4s forwards"
    setTimeout(function(){
        item.style.animation = "show linear .4s forwards";
        item.parentNode.style.display = "none";
    }, 400);
}

