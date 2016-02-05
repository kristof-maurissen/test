/* global aModernArt */

//image_gallery_versie1.js
//een Javacript_PF project
var versie = " versie 3.0 ";
window.onload = function(){
    //noscript verbergen
    var eNoScript = document.getElementById('noscript');
    eNoScript.style.display = "none";
    
    //object detection
    //is de array geladen
    if(typeof aModernArt == "undefined"){
        throw new Error("array aModernArt niet gevonden");
        alert("array aModernArt niet gevonden");
    }
    else{
        //console.log(aModernArt[0][0]);
  
    //console.log(aModernArt[0][0]); //check of aModernArt aanwezig is 
    //versie info
    var eKop   = document.querySelector('h1');
    eKop.innerHTML  = eKop.innerHTML + versie;
    
    var eImg   = document.getElementById('plaatshouder');
    //console.log(eImg);
    //Dynamische keuzelijst
    var eKeuzelijst   = maakKeuzelijst(aModernArt); //maakKeuzelijst is functie, aModernArt is array
    var eSidebar      = document.querySelector('aside');
    eSidebar.appendChild(eKeuzelijst);
    
    //eventhandler

    eKeuzelijst.addEventListener('change',function(e){ // of function()
        var waarde = this.value;
      // console.log(waarde);
        if(waarde != "" && waarde != null){
           toonFoto(waarde, eImg); 
           //console.log(waarde, eImg);
        }
    });
    
    }
}//einde window.onload


function maakKeuzelijst(a){
    /*
     *return SELECT element
     *@a array van images
     */
    var nArt            = a.length;
    var eSelect         = document.createElement('select');
    eSelect.id          = "keuzelijst";
    //standaard option element
    var eOption         = document.createElement('option');
    eOption.innerHTML   = "Maak uw keuze";
    eOption.setAttribute("value", "");
    eSelect.appendChild(eOption);
    //andere option elementen met artiesten
    for(var i=0;i<nArt;i++){
        var eOption     = document.createElement('option');
        eOption.innerHTML   = a[i][2];
        eOption.value       = i;
        eSelect.appendChild(eOption);
    }
    return eSelect;
}


function toonFoto(nIndex, eImg){
/* wisselt de bron van het src attribuut van de img#beeld
@ nIndex, een hyperlink element
@ eImg, plaatshouder img
@aModernArt array,global
*/
aArt = aModernArt[nIndex]; //subarray
sPad  = aArt[0]; //source
console.log(aArt[0]);
sInfo = aArt[1]; //info
sNaam = aArt[2]; //naam
//console.log(sNaam);

eImg.src  = "art/" + sPad; //wissel de foto in de plaatshouder
//eImg.src 		= "art/" + sPad;
console.log(eImg);
var eInfo = document.getElementById('info');

if (eInfo){
    //wijzig info
    eInfo.innerHTML = sInfo;
}
else {
    //maak een nieuw p#info aan
    
    var eInfo = document.createElement('p');
    eInfo.id = "info";
    eInfo.innerHTML = sInfo;
    //eImg.parentNode.appendChild(eInfo);
    eImg.parentNode.insertBefore(eInfo,eImg.parentNode.firstChild);
}
}


