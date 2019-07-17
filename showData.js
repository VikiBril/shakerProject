$("#logo_shaker").mouseover(function () {
  $(this).effect("shake", { times: 5 }, 200);
});

var id;
var admin;

$(document).ready(function () {

  id = $('#left_pref').attr('class');

  $.post('getuser.php',{userid : id},function(data){
    console.log(data);
    if(data == '0')
      admin = false;
    else{
      admin = true;
      $('#plus_logo').css('display','none');
    }

    $.ajax({
      dataType: "json",
      type: 'GET',
      contentType: "charset=utf-8",
      url: 'frontPage1.php',
      success: function (data) {
        var count = 1;
        console.log(data);
  
        $.each(data, function (key, val) {
          var container = document.createElement("div");
          container.className = "container";
          var small_container = document.createElement("div");
          small_container.className = "small_container";
          var img = document.createElement("img");
          var heart_lg = document.createElement('img');
          heart_lg.id = "heart_logo";
          heart_lg.className = "small_logos";
          var p1 = document.createElement("p");
          var p2 = document.createElement("p");
          p1.innerHTML = "<B>Need:</B> " + JSON.parse(val.collab);
          p2.innerHTML = "<B>Description:</B> " + val.description;
          var link = document.createElement('a');
          
          link.innerHTML = "<a href='proj_page.php?itemId="
            + val.proj_id + "&admin="+admin+" '>"
            + val.name + "</a>";
          img.setAttribute("src", val.picture);
          count++;
  
          container.appendChild(img);
          container.appendChild(link);
          container.appendChild(heart_lg);
          container.appendChild(small_container);
          small_container.appendChild(p1);
          small_container.appendChild(p2);
          var wrap = document.getElementById("wrapper");
          wrap.append(container);
        });
      }
    })
  });

  $.getJSON("data/users.json", function (data) {
    for( obj of data){
      if(id == obj.id){
        $('#user_logo').css('background-image','url('+obj.pic+')');
        break;
      }
    }
  });
});

