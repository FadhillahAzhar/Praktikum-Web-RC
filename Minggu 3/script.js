function warna(value){
    switch (value) {
        case 'red':
            document.body.style.background = 'red';
            document.body.style.color = 'black';
            break;
        case 'blue':
            document.body.style.background = 'blue';
            document.body.style.color = 'black';
            break;
        case 'black':
            document.body.style.background = 'black';
            document.body.style.color = 'white';
            break;

        default:
            document.body.style.background = 'white';
            document.body.style.color = 'black';
    } 

}

function weather(value){
    var cuaca = document.getElementById("weather")

    switch (value) {
        case 'Rainy':
            cuaca.innerHTML = "Rain is falling outside, take a rain coat and a brolly, and don't stay out for too long."
            break;
        case 'Snowy':
            cuaca.innerHTML = "Snow is falling. Maybe it's time to make a snowman you saw on that movie."
            break;
        case 'Stormy':
            cuaca.innerHTML = "It's Stormy outside. Becareful when using your electronics"
            break;
        case 'Hurricane':
            cuaca.innerHTML = "I heard there's a hurricane. I think it's better to stay at home for the time being."
            break;

        default:
            cuaca.innerHTML = "It is nice and sunny outside today. Wear shorts! Go to the beach, or the park, and get an ice cream."
    } 
}


function factorial(){
    var angka = document.getElementById("angka").value
    var hasil = angka
  
    if (angka < 0) {
        hasil='Error'
    }
    else if (angka === 0) {
        hasil=1
    }
    else {
        let n = 1;
        for (i = 1; i <= angka; i++) {
            n *= i;
        }
        hasil=n
    }

    var factorial = document.getElementById("factorial")
    factorial.innerHTML = `The factorial of ${angka} is ${hasil}`
}