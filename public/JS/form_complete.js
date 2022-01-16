//js permettant de preremplir les hotel names et adresses input du form automatiquement en cliquant sur "reserver" dans les descriptifs correspondants

window.onload = function(){

    var button1= document.getElementById('btn-1');
    button1.onclick = function(event) {
    var formHotelName = document.getElementById('hotel_name');
    formHotelName.focus();
    formHotelName.selectedIndex="1";
    }

    var button2 = document.getElementById('btn-2');
    button2.onclick = function(event) {
    var formHotelName = document.getElementById('hotel_name');
    formHotelName.focus();
    formHotelName.selectedIndex="2";
    }

    var button3 = document.getElementById('btn-3');
    button3.onclick = function(event) {
    var formHotelName = document.getElementById('hotel_name');
    formHotelName.focus();
    formHotelName.selectedIndex="3";

    }

    var button4 = document.getElementById('btn-4');
    button4.onclick = function(event) {
    var formHotelName = document.getElementById('hotel_name');
    formHotelName.focus();
    formHotelName.selectedIndex="4";
    }

    var button5 = document.getElementById('btn-5');
    button5.onclick = function(event) {
    var formHotelName = document.getElementById('hotel_name');
    formHotelName.focus();
    formHotelName.selectedIndex="5";
    }
}

