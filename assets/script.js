function prependZero(number) {
    if(number < 10) return "0" + number;
    return number;
}

docReady(function() {
    for(let i = 5; i < 19; i++) {
        $(".times").append('<option value="'+i+'">'+prependZero(i)+':00</option>')
    }
    $(".times").each(function() {
        $(this).find("option[value='"+$(this).data('default')+"']").prop('selected', true);

    })
})