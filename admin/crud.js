function checkValid(){
    var inpInstruktor = document.getElementById("instruktor")
    var inpDiff = document.getElementById("kesulitan")
    if( document.getElementById("fileGambar").files.length == 0 ){
        alert('Anda Belum Memilih File!')
        event.preventDefault()
    }
    else if(inpInstruktor.value===""){
        alert('Anda Belum Memilih Instruktur!')
        event.preventDefault()
    }
    else if(inpDiff.value===""){
        alert('Anda Belum Memilih Tingkat Kesulitan!')
        event.preventDefault()
    }
}

function checkValid_edit(){
    var inpInstruktor = document.getElementById("instruktor")
    var inpDiff = document.getElementById("kesulitan")
    if(inpInstruktor.value===""){
        alert('Anda Belum Memilih Instruktur!')
        event.preventDefault()
    }
    else if(inpDiff.value===""){
        alert('Anda Belum Memilih Tingkat Kesulitan!')
        event.preventDefault()
    }
}