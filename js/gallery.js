function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}

function getSlike() {
  var slikeAPI = "http://localhost/zavrsni_vocar/server/index.php?type=slike"; //cal to database
  var galerijaSlika = document.getElementById("galerijaSlika");

  var xhr = new XMLHttpRequest();
  xhr.open("GET", slikeAPI, true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send();

  xhr.onreadystatechange = function() {
    if (this.readyState == 4) {
      var slike = JSON.parse(this.responseText);

      slike.forEach(function(slika) {
        var divSlicica = document.createElement("div");
        var slicica = document.createElement("img");
        divSlicica.className = "placeholder";
        slicica.src = slika.Putanja;
        slicica.alt = slika.Naslov;
        slicica.title = slika.Naslov;
        divSlicica.appendChild(slicica);
        galerijaSlika.appendChild(divSlicica);
      });
    }
  };
}

getSlike();
