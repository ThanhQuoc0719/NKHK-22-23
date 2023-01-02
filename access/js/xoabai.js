var divdelete=document.querySelector(".div-delete");
var contentdelete=document.querySelector(".content-delete");
var btnmesageagree=document.querySelector(".btn-mesage-agree");
var btnmesagecancel=document.querySelector(".btn-mesage-cancel");
var thongbao = document.querySelector(".thongbao");
var btndelete = document.querySelectorAll(".icon-delete");
var btndeletetopic = document.querySelectorAll(".icon-delete-topic");
var id;
var idtheme;
var e;
btndelete.forEach((item, index) => {
    item.addEventListener("click", function(){
        thongbao.innerHTML = "Bạn có chắc chắn muốn xóa không?";
        id = item.parentNode.parentNode.children[0].innerHTML;
        e = "article";
        divdelete.style.display="flex";
    });
});

btndeletetopic.forEach((item, index) => {
    item.addEventListener("click", function(){
        thongbao.innerHTML = "Việc xóa đề tài nghiên cứu sẽ xóa tất cả các bài liên quan!!!"
        idtheme = item.parentNode.parentNode.children[0].innerHTML;
        e = "topic";
        divdelete.style.display="flex";
    });
})

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
    if(e == "article")
        deletebai();
    else
        deletetopic();
})

function deletebai()
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
	xhttp.send("U=delete&id="+id);
}

function deletetopic()
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
	xhttp.send("U=deletetopic&theme="+idtheme);
}