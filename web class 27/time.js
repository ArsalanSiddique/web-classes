
function tellTime() {
    var now = new Date();
    var theHr = now.getHours();
    var theMin = now.getMinutes();
    document.write(" time: " + theHr + ":" + theMin);
}


function greetings(name, shop) {

    var city = "Lahore";
    var message = "Hello " + name + "! welcome to our store " + shop + " in " + city;
    return message;

}