/*jshint esversion: 6 */
$(document).ready(function () {
  $('.sidenav').sidenav();
  $('select').not('.disabled').formSelect();
  $('.carousel').carousel({
    fullWidth: true,
    indicators: true
  });
  $('#modal1').modal();
  $('.datepicker').datepicker();
});
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.fixed-action-btn');
  var instances = M.FloatingActionButton.init(elems, {
    direction: 'top',
  });
});
class shopfy {
  constructor(en, nen) {
    this.validator(en, nen);
  }
  validator(en, nen) {
    var companyPinn = sessionStorage.getItem("pinn");
    if (en == 'delete') {
      let set = "includes/companyFactory.php?q=contractDelete&pinn=" + nen + '&companyPinn=' + companyPinn;
      this.validatorAjax(set, en, nen);
    } else if (en == 'pouse') {
      let set = "includes/companyFactory.php?q=contractPouse&pinn=" + nen + '&companyPinn=' + companyPinn;
      this.validatorAjax(set, en, nen);
    } else if (en == 'cancel') {
      let set = "includes/companyFactory.php?q=contractCancel&pinn=" + nen + '&companyPinn=' + companyPinn;
      this.validatorAjax(set, en, nen);
    } else if (en == "activate") {
      let set = "includes/companyFactory.php?q=contractActivate&pinn=" + nen + '&companyPinn=' + companyPinn;
      this.validatorAjax(set, en, nen);
    } else {
      M.toast({
        html: `I am a en`
      });
    }
  }
  validatorAjax(set, en, nen) {
    fetch(set)
      .then(res => res.text())
      .then(data => {
        console.log(data);
        M.toast({
          html: `contract ${nen} ${en}`
        });
      }).catch(err => console.log(err));
  }
}
class shopfyTwo {
  constructor() {
    alert('ok');
  }
}

var makeTst = (en, nen) => new shopfy(en, nen);

 let tt = () => M.toast({html: `I am a en` });
