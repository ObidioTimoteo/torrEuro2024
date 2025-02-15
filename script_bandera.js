function updateFlag(position) {
    const selectElement = document.getElementById(position);
    const flagElement = document.getElementById(position + 'Flag');
    const selectedCountry = selectElement.value;

    if (selectedCountry) {
        flagElement.src = `imagenes/${selectedCountry}.png`;
        flagElement.alt = `Bandera de ${selectedCountry}`;  
    } else {
        flagElement.src = '';
        flagElement.alt = '';
    }
}