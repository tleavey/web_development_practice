var n=0;
var x= 4;//$('#slideTest li').length;
setInterval(function() { 
    if ( n < (x - 1)){n++;}
    else {n=0};
    var goimg = $('#slideTest li img' + ':eq(' + n +')').attr('src');
    $('#imgT').fadeOut(500, function() {
    $('#imgT').attr('src', goimg).fadeIn(500);
});
},  3000)


function validateText(){
  
  var textEntry = document.getElementById("textbox").value;

  if (textEntry.length < 10) {
    alert("Must enter 10 or more characters.");
  }
  if (textEntry.length < 500 && textEntry.length > 9) {
    var updatedEntry = textEntry;
    while (updatedEntry.length < 501) {
      updatedEntry += textEntry;
    }
    document.getElementById("secondParagraph").innerHTML = updatedEntry;
  }
}

function hide(idOfTile) {
  document.getElementById(idOfTile).style.display='none';
}

function clearPics(){
  var allTiles = document.getElementsByClassName('tile');
  for(var key in allTiles) {
    if(allTiles.hasOwnProperty(key))
      allTiles[key].style.display = "none";
  }
  return true;
}

function resetPics(){
  var allTiles = document.getElementsByClassName('tile');
  for(var key in allTiles) {
    if(allTiles.hasOwnProperty(key))
      allTiles[key].style.display = 'inline-block';
  }
  return true;
}