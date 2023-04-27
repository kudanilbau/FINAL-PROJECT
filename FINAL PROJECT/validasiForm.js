function validasiForm(){
    var email = document.getElementById("email").value;
    var nama = document.getElementById("nama").value;
    var phone_number = document.getElementById("phone_number").value;
    var selected_option = document.getElementsById("selected_option").value;

    var xhr = new XMLHttpRequest();

    xhr.open("POST", "validasi.php", true);
    xhr.setRequestHeader("Content-type", "appliccation/x-www-form-urlencoded");
    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status === 200){
            document.getElementById("pesan-kesalahan").innerHTML = xhr.responseText;
        }
    };
    xhr.send("email=" + email + "&nama=" + nama `&phone_number=${phone_number}`);

    return false;
}