function searchemail() {
    var searchValue = document.getElementById("t6").value;
    
    // Sử dụng AJAX để gửi yêu cầu HTTP
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "ControllersHome/ctlcheckemail.php?s=" + encodeURIComponent(searchValue), true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("checkemail").innerHTML = xhr.responseText;
        }
    };
    xhr.send();

    var input = document.getElementById("t6");
    var element = document.getElementById("checkemail");

    if (input.value !== "") {
        element.style.display = "block";
    } else {
        element.style.display = "none";
    }
}
