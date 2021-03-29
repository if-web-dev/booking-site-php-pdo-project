

window.onload = function(){
//js permettant de preremplir les hotel names et adresses input du form automatiquement en cliquant sur "reserver" dans les descriptifs correspondants
    var button = document.getElementById('btn-1');
    button.onclick = function(event) {
    var formHotelName = document.getElementById('hotel_name');
    var formHotelAdress = document.getElementById('hotel_adress')
    formHotelName.selectedIndex="1";
    formHotelAdress.value = "89 Rue de Provence, 75009 Paris";
    }

    var button = document.getElementById('btn-2');
    button.onclick = function(event) {
    var formHotelName = document.getElementById('hotel_name');
    var formHotelAdress = document.getElementById('hotel_adress')
    formHotelName.selectedIndex="2";
    formHotelAdress.value = "69 Rue de Gerland, 69002 Lyon";
    }

    var button = document.getElementById('btn-3');
    button.onclick = function(event) {
    var formHotelName = document.getElementById('hotel_name');
    var formHotelAdress = document.getElementById('hotel_adress')
    formHotelName.selectedIndex="3";
    formHotelAdress.value = "55th Avenue, 10018 New York";
    }

    var button = document.getElementById('btn-4');
    button.onclick = function(event) {
    var formHotelName = document.getElementById('hotel_name');
    var formHotelAdress = document.getElementById('hotel_adress')
    formHotelName.selectedIndex="4";
    formHotelAdress.value = "14 Kata Noi rd, 83100 Kata Beach";
    }

    var button = document.getElementById('btn-5');
    button.onclick = function(event) {
    var formHotelName = document.getElementById('hotel_name');
    var formHotelAdress = document.getElementById('hotel_adress')
    formHotelName.selectedIndex="5";
    formHotelAdress.value = "297 Avenue Paseo De La Reforma, Mexico City";
    }
}

