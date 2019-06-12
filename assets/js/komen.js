(function validasi_input(form){
  if (form.name.value == ""){
    javascript:alert("Nama Anda masih kosong!");
    return (false);
  }

  pola_email=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  if (!pola_email.test(form.email.value)){
    alert ('Penulisan Email tidak benar atau masih belum terisi');
    form.email.focus();
    return false;
  }
return (true);
})(jQuery);

