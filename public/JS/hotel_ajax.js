
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
        xhr.send(data);
       
    }); 

});
