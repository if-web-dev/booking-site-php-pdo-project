
window.addEventListener("load", function(event) {

    var formHotel = document.getElementById("formHotel");
    
    formHotel.addEventListener('submit', function(event){
       
        console.log(formHotel);
        var data = new FormData(formHotel);
        console.log(data);
        event.preventDefault();
        event.stopPropagation();
        
        var xhr = new XMLHttpRequest();
        xhr.addEventListener('readystatechange', function(event){
            if(xhr.readyState==4){
                if(xhr.status=="200"){
                    var result = document.getElementById('result');
                    result.innerHTML = xhr.responseText;
                    console.log(this.response);

                }else{
                    alert("error code" + xhr.status + " : " + xhr.statusText);
                }
            }
        });
        xhr.open("POST", "./controllers/form.hotel.controller.php", true);
        //xhr.setRequestHeader("Content-type","multipart/form-data");
        //xhr.send(`submit=${formHotel.submit.value}&user_name=${formHotel.user_name.value}&user_mail=${formHotel.user_mail.value}&date_start=${formHotel.date_start.value}&date_end=${formHotel.date_end.value}&hotel_id=${formHotel.hotel_id.value}`);
        xhr.send(data);
       
    }); 

});
