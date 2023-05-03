function cal() {
  try {
    var a = parseInt(document.f.gramostotales.value);
    document.f.gramosclientes.value = a * .40;
  } catch (e) {
  }

  try {
      var a = parseInt(document.f.gramostotales.value);
      document.f.gramosingreso.value = a * .60;
    } catch (e) {
    }

    try {
      var a = parseInt(document.f.gramostotales.value);
      document.f.pesostotales.value = a / 4;
    } catch (e) {
    }

    try {
    var a = parseInt(document.f.gramostotales.value);
    document.f.pesosclientes.value = (a / 4)*.40;
  } catch (e) {
  }

  try {
    var a = parseInt(document.f.gramostotales.value);
    document.f.ingresopesos.value = (a / 4)*.60;
  } catch (e) {
  }
}