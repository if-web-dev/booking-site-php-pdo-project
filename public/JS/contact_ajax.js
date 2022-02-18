window.addEventListener("load", function(event) {

    var formContact = document.getElementById("contact-form");
    
    formContact.addEventListener('submit', function(event){
        //var data = new FormData(formHotel);
        event.preventDefault();
        
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
        xhr.open("POST", "controllers/form.contacts.controller.php", true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded; charset=UTF-8");
        xhr.send(`submit=${formContact.submit.value}&contact_name=${formContact.contact_name.value}&contact_email=${formContact.contact_email.value}&contact_msg=${formContact.contact_msg.value}`);
        //xhr.send(data);
    });

});