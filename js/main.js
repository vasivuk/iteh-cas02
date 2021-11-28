$('#dodajForm').submit(function(){
    event.preventDefault();
    console.log("Dodaj je pokrenuto");
    const $form = $(this);
    const $input = $form.find('input, select, button, textarea');
    
    const serijalizacija = $form.serialize();
    console.log(serijalizacija);

    request = $.ajax({
        url:'handler/add.php',
        type:'post',
        data:serijalizacija
    });

    request.done(function(result, textStatus, jqXHR){
        if(result=="Success"){
            alert("Kolokvijum uspesno zakazan");
            console.log("Dobar kolokvijum");
            location.reload(true);
        } else console.log("Kolokvijum nije dodat"+result);
        console.log(res);
    });
})