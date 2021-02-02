const queryString = window.location.search;

const urlParams = new URLSearchParams(queryString);

const novel_name = urlParams.get('novel_name');
const chapter_no = parseInt(urlParams.get('chapter_no'));
document.onkeydown = checkKey;

function checkKey(e) {

    e = e || window.event;

    
    if (e.keyCode == '37') {
    	cp=chapter_no-1;
    	window.location="read.php?novel_name="+novel_name+"&chapter_no="+cp;
    }
    else if (e.keyCode == '39') {
       	
    	cp=chapter_no+1;
    	window.location="read.php?novel_name="+novel_name+"&chapter_no="+cp;
    }

}