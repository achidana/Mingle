function getData(name, email) {

  console.log(name + " " + email)

  $.ajax({
  url: './php/users.php',
  method: 'POST',
  async: false,
  ContentType: 'application/json; charset=utf-8',
  dataType: 'json',
  data: {},
  success: function(data) {
  }
});
}
