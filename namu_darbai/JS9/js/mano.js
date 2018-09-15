//  Parašykite funkciją, kuri spausdina prekių sąrašą konsolėje formatu pvz.:

// 			#1
// 			Prekė: Atsuktuvas
// 			Pagaminimo data: 2018
// 			Spava: geltona
// 			Kaina: 5 EUR
//
// 			#2
// 			Prekė: Raktas
// 			Pagaminimo data: 2018
// 			Rankenos spava: pilka
// 			Kaina: 2 EUR
//
//
// Prekės (objektai) yra sudėti į objektų masyvą. Objektų masyvas paduodamas funkcijai kaip argumentas.

function printArrayToList(objectArray) {
  document.write("<table>");
  for (var i = 0; i < objectArray.length; i++) {
    document.write("<tr>");
    document.write("<td>"+objectArray[i].first+"</td>")
    document.write("</tr>");
    document.write("<tr>");
    document.write("<td>"+objectArray[i].second+"</td>")
    document.write("</tr>");
    document.write("<tr>");
    document.write("<td>"+objectArray[i].third+"</td>")
    document.write("</tr>");
    document.write("<tr>");
    document.write("<td>"+objectArray[i].fourth+"</td>")
    document.write("</tr>");
    document.write("<tr>");
    document.write("<td>"+objectArray[i].fifth+"</td>")
    document.write("</tr>");
    document.write("<tr>");
    document.write("<td><br>");
    document.write("</td>");
    document.write("</tr>");
  }
document.write("</table>");
}
