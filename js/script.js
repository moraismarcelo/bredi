//form validation
$(function() {
    $("form[name='productForm']").validate({
      rules: {
        productName: "required",
        productPrice: "required",
        productCategory: "required",
      },
      messages: {
        productName: "Por favor insira o nome do produto.",
        productPrice: "Por favor insira o preço do produto.",
        productCategory: "Por favor escolha uma categoria para o produto.",
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });
  //Delet validation
   $(".deleteButton").click(function(){
    if(confirm("Deseja remover o produto selecionado?")){
    }
    else{
        return false;
    }
});