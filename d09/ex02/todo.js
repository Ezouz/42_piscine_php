  function setCookie(cname, cvalue, exdays) {
      document.cookie = cname + "=" + cvalue + ";" + "" + ";path=/";
  }

  function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for(var i = 0; i <ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') {
              c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length);
          }
      }
      return "";
  }

  function ft_prompt() {
    var to_do = prompt("what the plan ?", "");
    if (to_do == null || to_do == "")
      return;
    else {
      document.getElementById("ft_list").innerHTML = '<div onclick="ft_del(this)"> - ' + to_do + '</div>' + document.getElementById("ft_list").innerHTML;
      setCookie('todolist', document.getElementById('ft_list').innerHTML, "");
    }

  }

  function ft_del(elem){
    if (confirm("Do you really want to delete this element from the list ?")) {
        elem.parentNode.removeChild(elem);
        setCookie('todolist', document.getElementById('ft_list').innerHTML, "");
  }
    return;
}

function charger_fenetre(){
  document.getElementById("ft_list").innerHTML = getCookie('todolist');
}

charger_fenetre();
