function searchtel() {
    var searchValue = document.getElementById("t4").value;
    
    // Sử dụng AJAX để gửi yêu cầu HTTP
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "ControllersHome/ctlchecktel.php?s=" + encodeURIComponent(searchValue), true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("checktel").innerHTML = xhr.responseText;
        }
    };
    xhr.send();

    var input = document.getElementById("t4");
    var element = document.getElementById("checktel");

    if (input.value !== "") {
        element.style.display = "block";
    } else {
        element.style.display = "none";
    }
}
