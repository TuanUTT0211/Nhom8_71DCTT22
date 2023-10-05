function searchuser() {
    var searchValue = document.getElementById("t1").value;
    
    // Sử dụng AJAX để gửi yêu cầu HTTP
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "ControllersHome/ctlcheckuser.php?s=" + encodeURIComponent(searchValue), true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("checkuser").innerHTML = xhr.responseText;
        }
    };
    xhr.send();

    var input = document.getElementById("t1");
    var element = document.getElementById("checkuser");

    if (input.value !== "") {
        element.style.display = "block";
    } else {
        element.style.display = "none";
    }
}
