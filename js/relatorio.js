
 
 //botão adicionar mais serviços em pacote
    $(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls form:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btnCancelar')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
    $(this).parents('.entry:first').remove();

    e.preventDefault();
    return false;
  });


     //imprimir
      document.getElementById('btnImprimir').onclick = function() {
          window.print();
        };
        
 
});
    $(document).ready(function() {
       $('#editarComanda').click(function(){ 
          $('html, body').animate({scrollTop:0}, 'linear');
      return false;

         });
     });

 $(document).ready(function() {
       $('#editarComanda2').click(function(){ 
          $('html, body').animate({scrollTop:0}, 'linear');
      return false;

         });
     });
        
         $(document).ready(function() {
       $('#editarComanda3').click(function(){ 
          $('html, body').animate({scrollTop:0}, 'linear');
      return false;

         });
     });
    