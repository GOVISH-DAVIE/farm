/*jshint esversion: 6 */
class formClasses {
  constructor() {

  }
  signUpFunc() {
    let pinn = Math.floor(1e17 + Math.random() * 9e16);
        pinn = pinn.toString();
        pinn = pinn.slice(2, pinn.length);
      let  signUpnames = document.forms.signUp.names.value;
      let  signUpEmails = document.forms.signUp.emails.value;
      let  signUpPasswords = document.forms.signUp.password.value;
      let  set = 'includes/clientFactory.php?q=cd&signUpnames=' + signUpnames + '&signUpEmails=' + signUpEmails + '&signUpPasswords=' + signUpPasswords + '&pinn=' + pinn;
        this.sendAjax(set, pinn);
  }

  CompanysignUpFunc() {
    let pinn = Math.floor(1e17 + Math.random() * 9e16);
        pinn = pinn.toString();
        pinn = pinn.slice(2, pinn.length);
       let signUpnames = document.forms.signUp.names.value;
      let  signUpEmails = document.forms.signUp.emails.value;
      let  signUpPasswords = document.forms.signUp.password.value;
      let  set = 'includes/companyFactory.php?q=cd&signUpnames=' + signUpnames + '&signUpEmails=' + signUpEmails + '&signUpPasswords=' + signUpPasswords + '&pinn=' + pinn;
    this.sendAjax(set, pinn);
  }

  clientsignupfunc() {
    let pinn = Math.floor(1e17 + Math.random() * 9e16);
    pinn = pinn.toString();
    pinn = pinn.slice(2, pinn.length);
  let signUpnames = document.forms.signUp.names.value;
  let signUpEmails = document.forms.signUp.emails.value;
  let signUpPasswords = document.forms.signUp.password.value;
  let set = 'includes/clientFactory.php?q=cd&signUpnames=' + signUpnames + '&signUpEmails=' + signUpEmails + '&signUpPasswords=' + signUpPasswords + '&pinn=' + pinn;
    this.sendAjax(set, pinn);
  }

  contractSubmit() {
 let pinn = Math.floor(1e17 + Math.random() * 9e16);
  let   productname = document.forms.contract.productname.value;
  let   days = document.forms.contract.days.value;
  let   datePick = document.forms.contract.datePick.value;
  let   toDatePick = document.forms.contract.toDatePick.value;
  let   size = document.forms.contract.size.value;
  let   description = document.forms.contract.description.value;
  let   companyPinn = sessionStorage.getItem("pinn");
  let   set = 'includes/companyFactory.php?q=appContracts&productname=' + productname + '&days=' + days + '&companyPinn=' + companyPinn + '&datePick=' + datePick + '&size=' + size + '&description=' + description + '&toDatePick=' + toDatePick + '&pinn=' + pinn;
     this.formAjax(set);
  }
  alerts() {
    console.log("ok");
  }
  formAjax(set) {
    fetch(set)
      .then(res => res.text())
      .then(data => {
        console.log(data);

      }).catch(err => console.log(err));
  }

  fetchAjax(set, dir) {
    fetch(set)
      .then(res => res.json())
      .then(data => {
        let obj = data;
        var i = 0;
        do {

          dir.innerHTML += `  <div class="col s12 m3">
                    <div class="card">
                       <div class="card-image waves-effect waves-block waves-light">
                         <img class="activator" src="https://materializecss.com/images/office.jpg">
                       </div>
                       <div class="card-content">
                         <span class="card-title activator grey-text text-darken-4">${obj.productname[i]}<i class="material-icons right">more_vert</i></span>
                         <p><a href="#">This is a link</a></p>
                       </div>
                       <div class="card-reveal">
                         <span class="card-title grey-text text-darken-4 ">${obj.productname[i]}<i class="material-icons right">close</i></span>
                         <p>${obj.description[i]}</p>
                         <p> starts on ${obj.datepick[i]}</p>
                          <p> ends on ${obj.toDatePick[i]}</p>
                           <p> size ordered on ${obj.size[i]}</p>
                            <p> for howmany days ${obj.days[i]}</p>
                             <p>contract code ${obj.pinn[i]}</p>
                       </div>
                       <div class="card-tabs">
                          <ul class="tabs tabs-fixed-width">
                            <li class="tab col s4"><a href="#test4" onclick="makeTst('delete',${obj.pinn[i]})"  ><button class = "btn  waves-effect z-depth-5 darken-5 btn-small waves-teal">delete</button></a></li>
                            <li class="tab col s4"><a href="#test4" onclick="makeTst('pouse',${obj.pinn[i]})"  ><button class = "btn  waves-effect z-depth-5 darken-5 btn-small waves-teal">pouse</button></a></li>
                            <li class="tab col s4"><a href="#test4" onclick="makeTst('cancel',${obj.pinn[i]})"  ><button class = "btn  waves-effect z-depth-5 darken-5 btn-small waves-teal">cancel</button></a></li>
                          </ul>
                          <ul class="tabs tabs-fixed-width">
                            <li class="tab col s4"><a href="#test4" onclick="makeTst('activate',${obj.pinn[i]})"  ><button class = "btn  waves-effect z-depth-2 darken-5 btn-small waves-teal">activate</button></a></li>
                            <li class="tab col s4"><a href="#test4" onclick="makeTst('edit',${obj.pinn[i]})"  ><button class = "btn  waves-effect z-depth-2 darken-5 btn-small waves-teal">edit</button></a></li>
                            <li class="tab col s4"><a href="#test4" onclick="makeTst('applied',${obj.pinn[i]})"  ><button class = "btn  waves-effect z-depth-2 darken-5 btn-small waves-teal">applied</button></a></li>
                          </ul>
                        </div>
                        <div class="card-tabs">
                           <ul class="tabs tabs-fixed-width">
                              created_on : ${obj.created_on[i]}<br />
                                updated_on : ${obj.updated_on[i]}<br />
                           </ul>
                         </div>
                   </div>
               </div>`;
          i++;

        } while (i < obj.id.length);
      }).catch(err => console.log(err));
  }


  sendAjax(set, pinn) {
    fetch(set)
      .then(res => res.text())
      .then(data => {
        alert(data);
        sessionStorage.setItem('id', data);
        sessionStorage.setItem('pinn', pinn);
        document.location.replace('sess.php?q=' + data + '&pinn=' + pinn);
      }).catch(err => console.log(err));
  }

}
const jsRender = new formClasses();
 let signuprenderfunc = () => jsRender.CompanysignUpFunc();
     submitContractFunc = () => jsRender.contractSubmit();
     clientsignUp  =() => jsRender.clientsignupfunc();


class urlcontrol extends formClasses {
  constructor(length = 20) {
    super(length);
    //  http://localhost/farm/index.php?q=6bf139745db70cefca22689dea99833f
    let url = window.location.href;
    console.log('====================================');
    console.log(sessionStorage.getItem("id"));
    console.log('====================================');
    if (sessionStorage.getItem("id") == "users") {
      this.usersUrlSort(url); 
    } else if (sessionStorage.getItem("id") == "company") {
      this.companyUrlSort(url);
    }
    // this.urlSort(url);
  }
  companyUrlSort(url) {
    let urll = url.split("?");
    console.log(urll[1]);
    let Qurl = urll[1].split('=');
    console.log(Qurl[0]);
    if (Qurl[0] == 'q') {
      if (Qurl[1] == "6bf139745db70cefca22689dea99833f") {
        console.log("contact");
        let set = "includes/companyFactory.php?q=myContracts";
             dir = document.getElementById('inputRender');
        this.fetchAjax(set, dir);
      } else if (Qurl[1] == "dc843a5259846c618f65bac0f3614f5c") {
        console.log('home');
      }
    }
  }

    usersUrlSort(url) {
      let urll = url.split("?");
      console.log(urll[1]);
      let Qurl = urll[1].split('=');
      console.log(Qurl[0]);
      if (Qurl[0] == 'q') {
        if (Qurl[1] == "6bf139745db70cefca22689dea99833f") {
          console.log("contact");
          let set = "includes/clientFactory.php?q=contracts";
          dir = document.getElementById('inputRender');
          this.fetchAjax(set, dir);
        } else if (Qurl[1] == "dc843a5259846c618f65bac0f3614f5c") {
          console.log('home');
        }
      }
    }

}
let uu = new urlcontrol();
