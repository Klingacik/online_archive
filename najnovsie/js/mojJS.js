//toto som skusal urobit cely riadok tabulky clickable, ale vyzeralo to tak, ze ked som do Page.php pridal
//dole tento subor tak to nebralo, ale ked som to napisal do hlavicky v Page.ss tak to bralo, ale nevedel
//som spravit ten link
$(document).ready(function(){
    $("p").click(function(){
        $(this).hide();
    });
});