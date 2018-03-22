function pisca() {
    var $pisca = $('#pisca');
    $pisca.addClass('mostrar');
    setTimeout(function () {
        $pisca.removeClass('mostrar');
    }, 750);
}

window.onload = function () {
    setInterval(pisca, 1100);
}