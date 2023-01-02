
var btndeletetopic = document.querySelectorAll(".icon-delete-topic");
var idtheme;
btndeletetopic.forEach((item, index) => {
    item.addEventListener("click", function(){
        thongbao.innerHTML = "Việc xóa đề tài nghiên cứu sẽ xóa tất cả các bài liên quan!!!"
        idtheme = item.parentNode.parentNode.children[0].innerHTML;
        divdelete.style.display="flex";
    });
});

divdelete.addEventListener("click", function(){
    close(contentdelete)
}
);

btnmesagecancel.addEventListener("click", function(){
    close(contentdelete)
}
);

contentdelete.addEventListener("click", function(event){
    event.stopPropagation();
})

function close(item) {
    item.style.animation = "close linear .4s forwards"
    setTimeout(function(){
        item.style.animation = "show linear .4s forwards";
        item.parentNode.style.display = "none";
    }, 400);
}

btnmesageagree.addEventListener("click", function(){
    deletebai();
})

function deletebai()
{
    var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			text = this.responseText;
            console.log(text);
			// location.reload();
		}
			
	};
	xhttp.open("POST", "process.php", false);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("U=delete&id="+id);
}