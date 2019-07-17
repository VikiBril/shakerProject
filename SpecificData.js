
var longid = window.location.search.substring(1).split('?');
var textarray = longid[0].split('&');
var projid = textarray[ 0 ].split('=')[1];
var admin;
var mode;
if(textarray.length >= 2)
  admin = textarray[1].split('=')[1];
if(textarray.length >= 3)
  mode = textarray[2].split('=')[1];


$('#saveNotes').attr('onclick','saveNotes()');


var saveNotes = function(){
  var notes = $('#notes').val();
  $.post('savenotes.php',{proj: projid, notes:notes},function(data){
    if(data == 'false')
      console.log('error');
    else
      window.location.replace('frontPage.php');
  });
};
if(admin == 'false'){
  $('.row').css('display','none');
  $('.notesbox').css('display','none');  
}else{
  $('#plus_logo').css('display','none');
}

/*
    $.ajax({
        type: 'POST',
        url: 'proj_page.php',
        data: {'variable': projid},
      });
*/

var wrap = document.getElementById("wrapper");
var projpic = document.getElementById("projpic");
var projinfo = document.getElementById("proj_info");

$.get('proj_page_code.php',{variable: projid},function(data){
    var obj = JSON.parse(data);
    var img = document.createElement("img");
    img.className = "proj_pic";
    img.id = "projpic";
    var p3 = document.createElement("p");
    p3.innerHTML ="<b>  תיאור הפרוייקט: </b>"+ obj.description; 
    p3.className = "proj_info";
    var p2 = document.createElement("p");
    p2.innerHTML ="<b>  שיתוף פעולה עם: </b>"+ JSON.parse(obj.collab);
    p2.className = "proj_info";
    var p1 = document.createElement("p");
    p1.innerHTML = "<b>  שם הפרוייקט: </b>"+ obj.name;
    p1.className = "proj_info";
    img.setAttribute("src",obj.picture);

    if(admin)
      $('#notes').val(obj.Notes);

    projinfo.append(p1);
    projinfo.append(p2);
    projinfo.append(p3);
    projpic.append(img);
    wrap.appendChild(projinfo);
    wrap.appendChild(projpic);


    img.addEventListener("click",showOptions);
});


function showOptions(){
    
    var div =document.createElement("div");
    var ul = document.createElement("ul");
    var li = document.createElement("li");
    var li2 = document.createElement("li");
    var a1 = document.createElement("a");
    var a2= document.createElement("a");

    var div2 = document.createElement("div"); //options
    div2.style.height = "20px";
    div.style.width = "165px";
    div2.innerText = "Options";
    div2.style.backgroundColor = "gray";
    div2.style.marginBottom = '15px';
    div2.style.textAlign = "center";
    div2.style.color = "white";

    var span = document.createElement("span");
        span.innerText = "x";
        span.style.float = "left";

        span.addEventListener("click",closeDiv);
        

    div.style.backgroundColor = "white";
        div.id = "div_";
        div.style.width = "140px";
        div.style.backgroundcolor="white";
        div.style.position="absolute";
        div.style.top = "67px";
        div.style.right = "-120px";
        div.style.border = "0.1px solid" ;
        div2.appendChild(span);
        //div.style.display = "block";
        
    /*var pencil = document.createElement ("img");
    pencil.setAttribute("src","https://i.imgur.com/rbXhCro.png");
    pencil.style.marginLeft = "10px";
    var bin = document.createElement ("img");
    bin.setAttribute("src","https://i.imgur.com/TABp9TD.png");
    bin.style.marginLeft = "10px";
    li.appendChild(pencil);
    li2.appendChild(bin); */
    div.appendChild(div2);

    if(admin == 'false'){
      a1.setAttribute("href","./start_new_proj.php?itemId="+projid);
      a1.innerText = "Edit";
      a1.style.marginLeft = "5px";

      a2.setAttribute('onclick','deleteProject()');
      a2.setAttribute("href","#");
      a2.innerText = "Delete";
      a2.style.marginLeft = "5px";

      var pencil = document.createElement ("img");
      pencil.setAttribute("src","https://i.imgur.com/rbXhCro.png");
      pencil.style.marginLeft = "10px";
      var bin = document.createElement ("img");
      bin.setAttribute("src","https://i.imgur.com/TABp9TD.png");
      bin.style.marginLeft = "10px";
      li.appendChild(pencil);
      li2.appendChild(bin);
      li.style.listStyleType = "none";
      li.style.marginBottom = "10px";
      li2.style.listStyleType = "none";
      li.append(a1);
      li2.append(a2);
      ul.appendChild(li);
      ul.appendChild(li2);

    }else{
      a1.setAttribute("href","./proj_page.php?itemId="+projid+"&admin="+admin+"&enable=true");
      a1.innerText = "Notes";
      a1.style.marginLeft = "5px";

      var notes1 = document.createElement("img");
      notes1.setAttribute("src", "https://i.imgur.com/nN7WXp5.png");
      notes1.style.marginLeft = "10px";

      li.append(notes1);
      li.append(a1);
      ul.appendChild(li);

    }


    //if the user is yonit    

    div.appendChild(ul);
    projpic.append(div);
    

}

function closeDiv(){
    var toclose = document.getElementById("div_");
    toclose.remove();
}
function deleteProject(){
$.get('delete_project.php',{projToDel: projid},function(data){
    if(data == 'false')
      console.log('error')
    else{
      window.location.replace('./frontPage.php');
    }
  });
}

function notes(){
  window.location.replace('prog_page.php?id='+projid+'&mode=admin');
};

$.getJSON("data/users.json", function (data) {
  var id = $('#left_pref').attr('class');
  for( obj of data){
    if(id == obj.id){
      $('#user_logo').css('background-image','url('+obj.pic+')');
      break;
    }
  }
});

