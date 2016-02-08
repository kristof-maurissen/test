//Array van groenten
var aGroenten = [
    ["aardappelen", 0.95, "kg"],
    ["avocado", 2.69, "stuk"],
    ["bloemkool", 1.93, "stuk"],
    ["brocoli", 1.29, "stuk"],
    ["champignons", 0.89, "250g"],
    ["chinese kool", 1.59, "stuk"],
    ["groene kool", 1.69, "stuk"],
    ["knolselder", 1.29, "stuk"],
    ["komkommer", 2.49, "stuk"],
    ["kropsla", 1.69, "stuk"],
    ["paprika", 0.89, "net"],
    ["prei", 2.99, "bundel"],
    ["princessenbonen", 1, "250g"],
    ["rapen", 0.99, "bundel"],
    ["rode kool", 1.39, "stuk"],
    ["sla iceberg", 1.49, "stuk"],
    ["spinazie vers", 1.89, "300g"],
    ["sjalot", 0.99, "500g"],
    ["spruiten", 1.86, "kg"],
    ["trostomaat", 2.99, "500g"],
    ["ui", 0.89, "kg"],
    ["witloof 1ste keus", 1.49, "700g"],
    ["wortelen", 2.59, "kg"],
    ["courgetten", 1.5, "stuk"]
];

//Array van winkels
var aoWinkels = [
    {naam: "de fruitmand", adres: "steenstraat 34", post: 8000, gemeente: "Brugge", tel: "050342218", manager: "Francine Lapoule"},
    {naam: "Jos & Anneke", adres: "visserijstraat 1", post: 8400, gemeente: "Oostende", tel: "059463689", manager: "Jos Leman"},
    {naam: "groene vingers", adres: "hoogstraat 108", post: 9000, gemeente: "Gent", tel: "091342218"},
    {naam: "de buurtwinkel", adres: "die laene 22", post: 2000, gemeente: "Antwerpen", tel: "0230342218", manager: "Bert Simoens"}
];

//Array van mogelijke fouten
var oFouten = {
    required: {
        msg: "verplicht veld",
        test: function (elem) {
            return elem.value != "";
        }
    },
    aantal: {
        msg: "getal verwacht",
        test: function(elem){
            //aantal test enkel de inhoud als getal als er een inhoud is
            if(elem.value != ""){
                return !isNaN(elem.value) && elem.value>0;
            }else{
                return true;
            }
        }
    }
}

window.onload = function () {
    //Indien Javascript actief is in de browser verberg de div met melding 'geen javascript'.
    //Toon daarna de div met de content.
    var eJSActief = document.getElementById('eJSActief');
    eJSActief.style.display = 'none';
    var eMidden = document.getElementById('midden');
    eMidden.style.display = 'block';
    
    //DOM referenties
    var eFrmBestel = document.frmBestel;    
        
    //functies voor het opvullen van de selects bij het inladen van de pagina
    vulWinkelOpties();
    vulGroentenOpties();
        
    eFrmBestel.addEventListener('submit', function(e){
        e.preventDefault();
        var bValid = valideer(this);
        console.log('formulier ' + this.name + ' valideert ' + bValid);
        if (bValid === true) {
            maakWinkelmandje(this);
        }
    });
}

function vulWinkelOpties() {
    /*
     * Vult de winkel select op 
     */
    var eWinkel = document.getElementById('winkel');
    var eDocFrag = document.createDocumentFragment();
    
    for (var i = 0; i < aoWinkels.length; i++) {
        var eOpt = document.createElement('option');
        var sValue = document.createTextNode(aoWinkels[i]["naam"]);
        eOpt.appendChild(sValue);
        eOpt.title = (aoWinkels[i]["adres"] + ", " + aoWinkels[i]["post"] + " " + aoWinkels[i]["gemeente"]);
        eDocFrag.appendChild(eOpt);
    }
    eWinkel.appendChild(eDocFrag);
}

function vulGroentenOpties() {
    /*
     * Vult de groenten select op 
     */
    var eGroenten = document.getElementById('groente');
    var eDocFrag = document.createDocumentFragment();
    
    for(var i = 0; i < aGroenten.length; i++){
        var eOpt = document.createElement('option');
        var sValue = document.createTextNode(aGroenten[i][0] + "(" + aGroenten[i][1] + "\u20AC/" + aGroenten[i][2] + ")");
        eOpt.appendChild(sValue);
        eDocFrag.appendChild(eOpt);
    }
    
    eGroenten.appendChild(eDocFrag);
}

function valideer(frm) {
    /*
     * Valideert de volledige form
     * @frm het te controleren formulier
     */
    var bValid = true;
    
    //lus doorheen alle form elementen van het formulier
    for (var i = 0; i < frm.elements.length; i++) {
        //verwijder vorige foutboodschappen
        hideErrors(frm.elements[i]);
        //valideer veld
        var bVeld = valideerVeld(frm.elements[i]);
        console.log("het element %s met name %s valideert %s", frm.elements[i].nodeName, frm.elements[i].name, bVeld);
        if (bVeld === false) {
            bValid = false;
        }
    }
    return bValid;
}

function valideerVeld(elem) {
    /*
     * valideert één veld volgens zijn class
     * @elem het te valideren veld
     */

    var aFoutBoodschappen = [];

    for (var fout in oFouten) {
        var re = new RegExp("(^|\\s)" + fout + "(\\s|$)");
        if (re.test(elem.className)) {
            var bTest = oFouten[fout].test(elem);

            if (bTest === false) {
                aFoutBoodschappen.push(oFouten[fout].msg);
            }
        }
    }
    if (aFoutBoodschappen.length > 0) {
        showErrors(elem, aFoutBoodschappen);
    }
    return !(aFoutBoodschappen.length > 0);
}

function showErrors(elem, aErrors) {
    /*
     toont alle fouten voor één element
     @elem element, te valideren veld
     @aErrors array, fouten voor dit element
     */

    var eBroertje = elem.nextSibling;
    if (!eBroertje || !(eBroertje.nodeName == "UL" && eBroertje.className == "fouten")) {
        eBroertje = document.createElement('ul');
        eBroertje.className = "fouten";
        elem.parentNode.insertBefore(eBroertje, elem.nextSibling);
    }
//plaats alle foutberichten erin
    for (var i = 0; i < aErrors.length; i++) {
        var eLi = document.createElement('li');
        eLi.innerHTML = aErrors[i];
        eBroertje.appendChild(eLi);
    }
}


function hideErrors(elem) {
    /*
     verwijdert alle fouten voor één element
     @elem het element waarvoor fouten verwijdert worden
     */
    var eBroertje = elem.nextSibling;
    if (eBroertje && eBroertje.nodeName == "UL" && eBroertje.className == "fouten") {
        elem.parentNode.removeChild(eBroertje);
    }
}

function maakWinkelmandje(frm){
    /*
     * Vult indien alles correct valideert het winkelmandje in
     * @frm het form waaruit gegevens in het mandje geplaatst worden
     */
    var eWinkelmandje = document.getElementById('winkelmandje');
    var eLeeg = document.getElementById('leeg');
    var eTotaal = document.getElementById('totaal');
    
    var eRij = document.createElement('div');
    eRij.className = 'item';
    
    eLeeg.style.display = 'none';
    
    //Maakt een div groente aan en plaatst die in de rij
    var eGroenteDiv = document.createElement('div');
    eGroenteDiv.className = 'cel cellinks groente';
    var aGroente = frm.groente.value.split("(");
    var sGroente = document.createTextNode(aGroente[0]);
    eGroenteDiv.appendChild(sGroente);
    eRij.appendChild(eGroenteDiv);
    
    //Maakt een div aantal aan en plaatst die in de rij
    var eAantalDiv = document.createElement('div');
    eAantalDiv.className = 'cel aantal';
    var nAantal = frm.aantal.value;
    var sAantal = document.createTextNode(nAantal);
    eAantalDiv.appendChild(sAantal);
    eRij.appendChild(eAantalDiv);
    
    //Maakt een div met de prijs per stuk en plaatst die in de rij
    var eStukprijsDiv = document.createElement('div');
    eStukprijsDiv.className = 'cel stukprijs';
    var aStukprijs = aGroente[1].split("\u20AC/");
    var nStukprijs = aStukprijs[0];
    var sStukprijs = document.createTextNode(nStukprijs);
    eStukprijsDiv.appendChild(sStukprijs);
    eRij.appendChild(eStukprijsDiv);
    
    //Maakt een div met het subtotaal van de rij en plaatst die in de rij
    var eSubtotaalDiv = document.createElement('div');
    eSubtotaalDiv.className = 'cel celrechts subtotaal';    
    var nSubtotaal = (parseFloat(nAantal) * parseFloat(nStukprijs)).toFixed(2);
    var sSubtotaal = document.createTextNode(nSubtotaal);
    eSubtotaalDiv.appendChild(sSubtotaal);
    eRij.appendChild(eSubtotaalDiv);
    
    //Plaatst de volledige rij in het winkelmandje
    eTotaal.parentNode.insertBefore(eRij, eTotaal); 
    
    //Berekent het totaal van alle rijen a.d.h.v. alle elementen met een subtotaal class
    var eTotaal = document.getElementById('totNum');    
    var aSubtotalen = document.querySelectorAll('.subtotaal');
    var nTotaal = 0;
    for (var i = 0; i < aSubtotalen.length; i++) {
        nTotaal += parseFloat(aSubtotalen[i].innerHTML);
    }
    nTotaal = parseFloat(nTotaal).toFixed(2);
    eTotaal.innerHTML = nTotaal;
    
    
    
      
    
}

