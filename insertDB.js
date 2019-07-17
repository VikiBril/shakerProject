
var tmpcol;

$( document ).ready(function() {
  if(window.location.search == '')
    $('#submitBtn').attr('onclick','submit()');
  else{
    console.log(window.location.search);
    var longid = window.location.search.substring(1).split('?');
    projid = longid[ 0 ].split('=')[1];
    console.log(projid);
    $.get('./proj_page_code.php',{variable: projid},function(data){
      data = JSON.parse(data);
      console.log(data.picture);
      $('#projname').val(data.name);
      $('#projPic').val(data.picture);
      tmpcol = data.col;
      $('#proDesc').val(data.description);

      $('#submitBtn').attr('onclick','update()');

    });

  }
});

var submit = function(){

  var Name = $('#projname').val();
  var Pic = $('#projPic').val();
  var Col = [];
  var Des = $('#proDesc').val();
  
  $.each($("input[name='collab[]']:checked"), function(){            
    Col.push($(this).val());
  });

  Col = JSON.stringify(Col);

  $.get('./insert_project.php',{projName: Name, picture: Pic, collab: Col, description: Des},function(data){
    if(data == 'false')
      console.log('error')
    else
      window.location.replace('./frontPage.php');
  });
};

var update = function(){

  var Name = $('#projname').val();
  var Pic = $('#projPic').val();
  var Col = [];
  var Des = $('#proDesc').val();

  $.each($("input[name='collab[]']:checked"), function(){            
    Col.push($(this).val());
  });

  if(Col.length == 0)
    Col = tmpcol;
  else
    Col = JSON.stringify(Col);

  $.get('./update_project.php',{projToDel: projid, projName: Name ,picture: Pic, collab: Col, description: Des},function(data){
    if(data == 'false')
      console.log('error')
    else
      window.location.replace('./frontPage.php');
  });
};
/*
$("#button").on('click', function myAjax() {
  $.ajax({
       type: "POST",
       url: 'your_url/ajax.php',
       data:{action:'call_this'},
       success:function(html) {
         alert(html);
       }

  });
});*/
