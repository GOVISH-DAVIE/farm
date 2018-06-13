<!-- container -->
<div class="container " style="width:100% ">
  <ul class="collapsible collapsible popout">
      <li>
        <div class="card-panel teal collapsible-header">
          <span class="lime-text  accent-2 text-darken-2 "> <strong> add a new contract  </strong></span>
      <a class="waves-effect waves-light red darken-4 btn  " href="#"><i class="material-icons ">add</i> </a>
      </div>
      <div class="row collapsible-body">
   <form class="col s12" name="contract" method="post">
     <div class="row">
       <div class="input-field col s12 m6">
         <i class="material-icons prefix">assignment</i>
         <input id="productname" name="productname" type="text" class="validate">
         <label for="productname">product name</label>
       </div>
       <div class="input-field col s12 m6">
         <i class="material-icons prefix">av_timer</i>
         <input id="avDays" name="days" type="number" class="validate">
         <label for="avDays">average time in days</label>
       </div>
       <div class="input-field col s12 m6">
         <i class="material-icons prefix">av_timer</i>
         <input id="datePick" name="datePick" type="text"  class="datepicker" >
         <label for="datePick">starts on (pick a date )</label>
       </div>
       <div class="input-field col s12 m6">
         <i class="material-icons prefix">av_timer</i>
         <input id="toDatePick" name="toDatePick" type="text"  class="datepicker" >
         <label for="toDatePick">stops on (pick a date )</label>
       </div>
       <div class="input-field col s12 m6">
         <i class="material-icons prefix">layers</i>
         <input id="size"  name="size"type="number" class="validate">
         <label for="size">size  on delivery in kG</label>
       </div>
       <div class="input-field col s12 m6">
         <i class="material-icons prefix">edit</i>
         <textarea id="textarea1" class="materialize-textarea"name="description"></textarea>
         <label for="textarea1">description</label>
       </div>
       <button class="btn waves-effect waves-light" type="button" name="action" id="sendContract" onclick="submitContractFunc()">Submit
         <i class="material-icons right">send</i>
       </button>

     </div>
   </form>
 </div>
   </li>

</ul>


  <div class="row" id="inputRender"></div>
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
<!-- <script src="js/shopy.js" charset="utf-8"></script> -->
<script type="text/javascript">
$(document).ready(function(){
  $('.modal').modal();
   $('.collapsible').collapsible();
});
</script>
