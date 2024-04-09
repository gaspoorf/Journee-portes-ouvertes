document.addEventListener('DOMContentLoaded', function() {
    var RDC = document.querySelector('.RDC');
    var btn1 = document.querySelector('.btn1');

    RDC.classList.add('none');
    btn1.classList.add('active');
});

function toggleEtage(etageName) {
    var RDC = document.querySelector('.RDC');
    var etage = document.querySelector('.etage');

    var btn1 = document.querySelector('.btn1');
    var btn2 = document.querySelector('.btn2');
    
  
    if (etageName === 'RDC') {
        btn1.classList.remove('active');
        btn2.classList.add('active');
        etage.classList.remove('display');
        etage.classList.add('none');
        RDC.classList.remove('none');
        RDC.classList.add('display');
    } else if (etageName === 'etage') {
        btn2.classList.remove('active');
        btn1.classList.add('active');
        RDC.classList.remove('display');
        RDC.classList.add('none');
        etage.classList.remove('none');
        etage.classList.add('display');
    }
}
