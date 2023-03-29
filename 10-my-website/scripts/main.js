// Über console können Inhalte in der JS-Console (im Browser) ausgegeben werden
console.log("Hello World!");

// Einzeilige Kommentare in JavaScript

/**
 * So sehen mehrzeilige Kommentare
 * in JavaScript aus
 */

// Über das document kann ich diverse HTML-Elemente ansprechen
document.getElementById('ads');

// ... und dann etwas damit machen. Hier ausgeben
console.log(document.getElementById('ads'));

// Statt nur ausgeben kann über JS auch HTML (und CSS) geändert werden
// Hier setze ich das das CSS display-Property auf 'none'; blende es aus
// document.getElementById('ads').style.display = "none";

// Neu/schöner: kann über document.querySelector besser selektieren
console.log(document.querySelector("#ads"));      // ID
console.log(document.querySelectorAll(".link"));  // Klassen
console.log(document.querySelectorAll("span"));   // Elemente

// Erste h1 rot einfärben
document.querySelector('h1').style.color = "#f00";

// Variablen: speichern Werte. Kann ich mit const oder let definieren
// const: für Konstanten (Wert ändert sich NIE)
// let: Wert kann geändert werden

let paragraph = document.createElement('p'); // <p>-Tag mit JS erzeugt und in Variable 'paragraph' gespeichert
paragraph.innerText = "Ich wurde mit JS erzeugt 😘"; // Text des p-Tag's setzen (eigentlicher Content)
document.querySelector('body').appendChild(paragraph); // Den erzeugten paragraph ans Ende des <body> anhängen

/**
 * Events & Funktionen
 * Events sind best. Aktionen die auftreten, z.B. User klickt irgendwo, scrollt, etc.
 * Mit Funktionen kann ich darauf reagieren und Code ausführen. 
 * Anders gesagt: "Wenn hier geklickt wurde, dann mache das"
 */
function appendImage() {
  let image = document.createElement('img');  // Leeres <img> erstellt
  image.setAttribute('src', 'images/mountains.jpg'); // src-Attribut setzen
  document.querySelector('body').appendChild(image); // image an body anhängen
}

function hideAds() {
  // In LS ablegen dass ich ads nicht mehr sehen will
  localStorage.setItem('hide-ads', true);

  // Wirklich hiden
  document.querySelector('#ads').style.display = 'none';
}

// Code in geschw. Klammern wird ausgeführt wenn unsere Seite geladen ist
window.onload = () => {
  // Prüfen ob ads angezeigt werden soll
  const hideAds = localStorage.getItem('hide-ads');

  // Wert wird als string abgelegt, daher Vergleich auf String
  if (hideAds === 'true') {  // Kurzform: if(hideAds) { ... }
    document.querySelector('#ads').style.display = 'none';
  }
};