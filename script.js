let sliderItems = $(".slider-box-item.normal");
let sliderBox = $(".slider-box");
let now = 0;
let sliderBullets = $(".bullets-content-box-item");

let siID = setInterval(function(){
    $(".radius-arrow-right").click();
}, 2000);


sliderBox.css("width", (sliderItems.length + 2) * 100 + "%");

$(".radius-arrow-left").click(function(event){
    clearInterval(siID)

    siID = setInterval(function(){
        $(".scroll-icon-box-arrow-right").click();
    }, 2000);
    if( now ===  0 ){
        now--;
        sliderBox.animate({
            left: -100 * (now + 1 ) + "%"
        },500, function(){
            now = sliderItems.length - 1;
            sliderBox.css("left", -100 * ( now + 1 ) + "%");
        
            sliderBullets.removeClass("active");
            sliderBullets.eq(now).addClass("active");
        });
    }else{
        now--;
        sliderBox.animate({
            left: -100 * (now + 1 ) + "%"
        })   
        sliderBullets.removeClass("active");
        sliderBullets.eq(now).addClass("active");
    }
});

$(".radius-arrow-right").click(function(event){
    clearInterval(siID)

    siID = setInterval(function(){
        $(".scroll-icon-box-arrow-right").click();
    }, 2000);

    if( now == sliderItems.length - 1 ){
        now++;
        sliderBox.animate({
            left: -100 * (now + 1) + "%"
        }, 500, function(){
            now = 0;
            sliderBox.css("left", -100 * (now + 1 ) + "%")
            
            sliderBullets.removeClass("active");
            sliderBullets.eq(now).addClass("active");
        });
    }else{
        now++;
        sliderBox.animate({
            left: -100 * (now + 1 ) + "%"
        });
        sliderBullets.removeClass("active");
        sliderBullets.eq(now).addClass("active");
    }
});

sliderBullets.click(function(event){
    clearInterval(siID)

    siID = setInterval(function(){
        $(".radius-arrow-right").click();
    },2000);

    let clickNum = sliderBullets.index( $(this) );
    now = clickNum;
    sliderBox.animate({
        left: -100 * (now + 1) + "%"
    });

    sliderBullets.removeClass("active");
    $(this).addClass("active")
});


let form = $(".popup-content-box form");
let emailRegexp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

form.submit(function(event){
    event.preventDefault();

    let fioInput = $(this).find("input[name=fio]");
    let emailInput = $(this).find("input[name=email]");
    let telInput = $(this).find("[name=phone]");

    // console.log(fioInput.val().length )
    if( fioInput.val().length ===0 || emailRegexp.test( emailInput.val() ) == false || telInput.val().length == 0 ){

        fioInput.val().length == 0 ? fioInput.addClass("error") : fioInput.removeClass("error");
        emailRegexp.test( emailInput.val() ) == false ? emailInput.addClass("error") : emailInput.removeClass("error");
        telInput.val().length == 0 ? telInput.addClass("error") : telInput.removeClass("error");

    }else{
        fioInput.removeClass("error");
        emailInput.removeClass("error");
        telInput.removeClass("error");
        
        this.submit();
    }
});
form.find("input").keyup(function(event){
    if( $(this).attr("name") == "email" ){
        emailRegexp.test( $(this).val() ) == false ? $(this).addClass("error") : $(this).removeClass("error");
    }else{
        $(this).val().length === 0 ? $(this).addClass("error") : $(this).removeClass("error");
    }

    console.log( $(this).attr("name") );
});

let form_contacts = $(".form-contacts-content form");

form_contacts.submit(function(event){
    event.preventDefault();

    let fioInput = $(this).find("input[name=fio]");
    let emailInput = $(this).find("input[name=email]");

    if( fioInput.val().length ===0 ){
        fioInput.val().length == 0 ? fioInput.addClass("error") : fioInput.removeClass("error");
        emailRegexp.test( emailInput.val() ) == false ? emailInput.addClass("error") : emailInput.removeClass("error");
    }else{
        fioInput.removeClass("error");
        emailInput.removeClass("error");
     
        this.submit();
    }
});
form_contacts.find("input").keyup(function(event){
    if( $(this).attr("name") == "email" ){
        emailRegexp.test( $(this).val() ) == false ? $(this).addClass("error") : $(this).removeClass("error");
    }else{
        $(this).val().length === 0 ? $(this).addClass("error") : $(this).removeClass("error");
    }

    console.log( $(this).attr("name") );
});
















$(".about-main").click(function(event){
    event.preventDefault();
});

$(".about-company").click(function(event){
    event.preventDefault();
});


$(".about-reviews").click(function(event){
    event.preventDefault();
});

$(".burger").click(function(event){
    $(this).toggleClass("burger-active");
    $("nav").toggleClass("active")
});