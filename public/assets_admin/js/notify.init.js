var redirect;
var dataQuestion='DESEJA REALMENTE EXCLUIR?';
function question(){
    var qst=new PNotify({
        title: 'OPISSS!!',
        text: dataQuestion, //'DESEJA REALMENTE EXCLUIR?',
        icon: 'glyphicon glyphicon-question-sign',
        hide: false,
        confirm: {
            confirm: true
        },
        buttons: {
            closer: false,
            sticker: false
        },
        history: {
            history: false
        },
        addclass: 'stack-modal',
        stack: {'dir1': 'down', 'dir2': 'right', 'modal': true}
    }).get().on('pnotify.confirm', function(){
       $('.ui-pnotify-modal-overlay').remove();
        window.location=redirect;

    }).on('pnotify.cancel', function(){
            $('.ui-pnotify-modal-overlay').remove();
            return false;

    });
}
$(function(){
    $(".excluir").on('click',function(e){
        e.preventDefault();
        if($(this)[0].hasAttribute('data-question')){
            dataQuestion=$(this).attr('data-question');
        }
        redirect=$(this).attr('href');

        question();
    });
    $(".confirm").on('click',function(e){
        e.preventDefault();
        if($(this)[0].hasAttribute('data-question')){
            dataQuestion=$(this).attr('data-question');
        }
        redirect=$(this).attr('href');

        question();
    });
})