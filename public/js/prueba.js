
function disable() {
  document.getElementById("elpepe").disabled = true;
}

function enable() {
  document.getElementById("elpepe").disabled = false;
}

function nocotiza(nocot) {
  var checkbox = document.getElementById('nocot');
  if (checkbox.checked) {
    document.getElementById('monto').setAttribute('disabled', true);
    document.getElementById('uf').setAttribute('disabled', true);
  } else {
    document.getElementById('monto').removeAttribute('disabled', true);
    document.getElementById('uf').removeAttribute('disabled', true);
  }
}

function servicio() {
  var norm = document.getElementById('norm');

  norm.addEventListener('input', function () {
    if (norm == '') {
      document.getElementById('esp').setAttribute('disabled', true);
    } else {
      document.getElementById('esp').removeAttribute('disabled', false);
    }
  });
}

function laley19(ley19) {
  var checkbox = document.getElementById('ley19');
  if (checkbox.checked) {
    document.getElementById('rem').setAttribute('disabled', true);
    document.getElementById('pacto').setAttribute('disabled', true);
    document.getElementById('afp').setAttribute('disabled', true);
  } else {
    document.getElementById('rem').removeAttribute('disabled', true);
    document.getElementById('pacto').removeAttribute('disabled', true);
    document.getElementById('afp').removeAttribute('disabled', true);
  }

}
