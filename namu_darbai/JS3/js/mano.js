// Parašykite funkciją, kuri patikrina jūsų įvestą amžių. Jeigu jūsų amžius yra 18 ir daugiau, tada rodomas pranešimas, kad jūs galite užeiti į svetainę, priešingu atveju, rodomas pranešimas, kad į svetainę užeiti negalite. Javascript rašomas atskirame faile.


function checkAge(age) {
  if (isNaN(age)) {
    return "Įvedėte ne skaičių";
  }
  else if (age >= 18) {
    return "Galite užeiti į svetainę";
  }
  else{
    return "Užeiti į svetainę negalite";
  }
}
