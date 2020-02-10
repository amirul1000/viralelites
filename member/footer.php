
      
<!-- Resources for the modal -->


  <script src="js/AccountsModal.js"></script>
  


<script type="text/javascript">
    accounts = JSON.parse('[""]');
</script>

<script src="js/HashtagsModal.js"></script>



  <script>
    var acc = JSON.parse('{}');
    addAccounts(acc);
  </script>


<style>
    #helpBut {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 30px;
      margin-bottom: 60px;
      z-index: 900;
    }
</style>
<!-- HELP -->
<a id="helpBut" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored  mdl-color-text--white" target="_blank" href="info.php?type=tips" data-upgraded=",MaterialButton,MaterialRipple">
    <i class="material-icons fa fa-question"></i>
<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>


<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#selectCountry">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="selectCountry" tabindex="-1" role="dialog" aria-labelledby="SelectCountry2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="selectCountryTitle">Select Your Country</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
          <!-- <span aria-hidden="true">&times;</span> -->
        <!-- </button> -->
      </div>
      <div class="modal-body">
        <div class="btn-group bootstrap-select form-control"><button type="button" class="dropdown-toggle btn" data-toggle="dropdown" role="button" data-id="selCountry" title="Afghanistan"><span class="filter-option pull-left">Afghanistan</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Afghanistan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Åland Islands</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Albania</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Algeria</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">American Samoa</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Andorra</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Angola</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Anguilla</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Antarctica</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Antigua and Barbuda</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Argentina</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Armenia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="12"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Aruba</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="13"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Australia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="14"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Austria</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="15"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Azerbaijan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="16"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bahamas</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="17"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bahrain</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="18"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bangladesh</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="19"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Barbados</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="20"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Belarus</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="21"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Belgium</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="22"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Belize</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="23"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Benin</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="24"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bermuda</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="25"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bhutan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="26"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bolivia, Plurinational State of</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="27"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bonaire, Sint Eustatius and Saba</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="28"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bosnia and Herzegovina</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="29"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Botswana</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="30"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bouvet Island</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="31"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Brazil</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="32"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">British Indian Ocean Territory</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="33"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Brunei Darussalam</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="34"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Bulgaria</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="35"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Burkina Faso</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="36"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Burundi</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="37"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cambodia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="38"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cameroon</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="39"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Canada</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="40"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cape Verde</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="41"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cayman Islands</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="42"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Central African Republic</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="43"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Chad</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="44"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Chile</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="45"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">China</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="46"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Christmas Island</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="47"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cocos (Keeling) Islands</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="48"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Colombia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="49"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Comoros</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="50"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Congo</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="51"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Congo, the Democratic Republic of the</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="52"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cook Islands</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="53"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Costa Rica</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="54"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Côte d'Ivoire</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="55"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Croatia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="56"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cuba</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="57"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Curaçao</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="58"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cyprus</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="59"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Czech Republic</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="60"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Denmark</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="61"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Djibouti</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="62"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Dominica</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="63"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Dominican Republic</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="64"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Ecuador</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="65"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Egypt</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="66"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">El Salvador</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="67"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Equatorial Guinea</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="68"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Eritrea</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="69"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Estonia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="70"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Ethiopia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="71"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Falkland Islands (Malvinas)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="72"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Faroe Islands</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="73"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Fiji</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="74"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Finland</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="75"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">France</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="76"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">French Guiana</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="77"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">French Polynesia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="78"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">French Southern Territories</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="79"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Gabon</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="80"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Gambia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="81"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Georgia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="82"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Germany</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="83"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Ghana</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="84"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Gibraltar</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="85"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Greece</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="86"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Greenland</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="87"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Grenada</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="88"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Guadeloupe</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="89"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Guam</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="90"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Guatemala</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="91"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Guernsey</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="92"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Guinea</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="93"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Guinea-Bissau</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="94"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Guyana</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="95"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Haiti</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="96"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Heard Island and McDonald Islands</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="97"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Holy See (Vatican City State)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="98"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Honduras</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="99"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Hong Kong</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="100"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Hungary</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="101"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Iceland</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="102"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">India</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="103"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Indonesia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="104"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Iran, Islamic Republic of</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="105"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Iraq</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="106"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Ireland</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="107"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Isle of Man</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="108"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Israel</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="109"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Italy</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="110"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Jamaica</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="111"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Japan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="112"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Jersey</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="113"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Jordan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="114"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Kazakhstan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="115"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Kenya</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="116"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Kiribati</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="117"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Korea, Democratic People's Republic of</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="118"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Korea, Republic of</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="119"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Kuwait</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="120"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Kyrgyzstan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="121"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Lao People's Democratic Republic</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="122"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Latvia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="123"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Lebanon</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="124"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Lesotho</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="125"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Liberia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="126"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Libya</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="127"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Liechtenstein</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="128"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Lithuania</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="129"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Luxembourg</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="130"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Macao</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="131"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Macedonia, the former Yugoslav Republic of</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="132"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Madagascar</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="133"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Malawi</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="134"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Malaysia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="135"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Maldives</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="136"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Mali</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="137"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Malta</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="138"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Marshall Islands</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="139"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Martinique</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="140"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Mauritania</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="141"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Mauritius</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="142"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Mayotte</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="143"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Mexico</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="144"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Micronesia, Federated States of</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="145"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Moldova, Republic of</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="146"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Monaco</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="147"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Mongolia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="148"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Montenegro</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="149"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Montserrat</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="150"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Morocco</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="151"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Mozambique</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="152"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Myanmar</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="153"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Namibia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="154"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Nauru</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="155"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Nepal</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="156"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Netherlands</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="157"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">New Caledonia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="158"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">New Zealand</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="159"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Nicaragua</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="160"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Niger</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="161"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Nigeria</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="162"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Niue</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="163"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Norfolk Island</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="164"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Northern Mariana Islands</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="165"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Norway</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="166"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Oman</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="167"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Pakistan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="168"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Palau</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="169"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Palestinian Territory, Occupied</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="170"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Panama</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="171"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Papua New Guinea</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="172"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Paraguay</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="173"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Peru</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="174"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Philippines</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="175"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Pitcairn</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="176"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Poland</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="177"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Portugal</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="178"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Puerto Rico</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="179"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Qatar</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="180"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Réunion</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="181"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Romania</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="182"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Russian Federation</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="183"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Rwanda</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="184"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Saint Barthélemy</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="185"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Saint Helena, Ascension and Tristan da Cunha</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="186"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Saint Kitts and Nevis</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="187"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Saint Lucia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="188"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Saint Martin (French part)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="189"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Saint Pierre and Miquelon</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="190"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Saint Vincent and the Grenadines</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="191"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Samoa</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="192"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">San Marino</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="193"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Sao Tome and Principe</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="194"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Saudi Arabia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="195"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Senegal</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="196"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Serbia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="197"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Seychelles</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="198"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Sierra Leone</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="199"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Singapore</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="200"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Sint Maarten (Dutch part)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="201"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Slovakia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="202"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Slovenia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="203"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Solomon Islands</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="204"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Somalia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="205"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">South Africa</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="206"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">South Georgia and the South Sandwich Islands</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="207"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">South Sudan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="208"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Spain</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="209"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Sri Lanka</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="210"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Sudan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="211"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Suriname</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="212"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Svalbard and Jan Mayen</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="213"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Swaziland</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="214"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Sweden</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="215"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Switzerland</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="216"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Syrian Arab Republic</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="217"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Taiwan, Province of China</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="218"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Tajikistan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="219"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Tanzania, United Republic of</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="220"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Thailand</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="221"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Timor-Leste</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="222"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Togo</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="223"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Tokelau</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="224"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Tonga</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="225"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Trinidad and Tobago</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="226"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Tunisia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="227"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Turkey</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="228"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Turkmenistan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="229"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Turks and Caicos Islands</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="230"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Tuvalu</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="231"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Uganda</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="232"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Ukraine</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="233"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">United Arab Emirates</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="234"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">United Kingdom</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="235"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">United States</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="236"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">United States Minor Outlying Islands</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="237"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Uruguay</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="238"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Uzbekistan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="239"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Vanuatu</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="240"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Venezuela, Bolivarian Republic of</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="241"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Viet Nam</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="242"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Virgin Islands, British</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="243"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Virgin Islands, U.S.</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="244"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Wallis and Futuna</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="245"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Western Sahara</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="246"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Yemen</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="247"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Zambia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="248"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Zimbabwe</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" data-style="btn" data-container="body" id="selCountry" name="selCountry" data-size="10" tabindex="-98">
          <!-- <option value=""></option> -->
            <option value="AF">Afghanistan</option>
            <option value="AX">Åland Islands</option>
            <option value="AL">Albania</option>
            <option value="DZ">Algeria</option>
            <option value="AS">American Samoa</option>
            <option value="AD">Andorra</option>
            <option value="AO">Angola</option>
            <option value="AI">Anguilla</option>
            <option value="AQ">Antarctica</option>
            <option value="AG">Antigua and Barbuda</option>
            <option value="AR">Argentina</option>
            <option value="AM">Armenia</option>
            <option value="AW">Aruba</option>
            <option value="AU">Australia</option>
            <option value="AT">Austria</option>
            <option value="AZ">Azerbaijan</option>
            <option value="BS">Bahamas</option>
            <option value="BH">Bahrain</option>
            <option value="BD">Bangladesh</option>
            <option value="BB">Barbados</option>
            <option value="BY">Belarus</option>
            <option value="BE">Belgium</option>
            <option value="BZ">Belize</option>
            <option value="BJ">Benin</option>
            <option value="BM">Bermuda</option>
            <option value="BT">Bhutan</option>
            <option value="BO">Bolivia, Plurinational State of</option>
            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
            <option value="BA">Bosnia and Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BV">Bouvet Island</option>
            <option value="BR">Brazil</option>
            <option value="IO">British Indian Ocean Territory</option>
            <option value="BN">Brunei Darussalam</option>
            <option value="BG">Bulgaria</option>
            <option value="BF">Burkina Faso</option>
            <option value="BI">Burundi</option>
            <option value="KH">Cambodia</option>
            <option value="CM">Cameroon</option>
            <option value="CA">Canada</option>
            <option value="CV">Cape Verde</option>
            <option value="KY">Cayman Islands</option>
            <option value="CF">Central African Republic</option>
            <option value="TD">Chad</option>
            <option value="CL">Chile</option>
            <option value="CN">China</option>
            <option value="CX">Christmas Island</option>
            <option value="CC">Cocos (Keeling) Islands</option>
            <option value="CO">Colombia</option>
            <option value="KM">Comoros</option>
            <option value="CG">Congo</option>
            <option value="CD">Congo, the Democratic Republic of the</option>
            <option value="CK">Cook Islands</option>
            <option value="CR">Costa Rica</option>
            <option value="CI">Côte d'Ivoire</option>
            <option value="HR">Croatia</option>
            <option value="CU">Cuba</option>
            <option value="CW">Curaçao</option>
            <option value="CY">Cyprus</option>
            <option value="CZ">Czech Republic</option>
            <option value="DK">Denmark</option>
            <option value="DJ">Djibouti</option>
            <option value="DM">Dominica</option>
            <option value="DO">Dominican Republic</option>
            <option value="EC">Ecuador</option>
            <option value="EG">Egypt</option>
            <option value="SV">El Salvador</option>
            <option value="GQ">Equatorial Guinea</option>
            <option value="ER">Eritrea</option>
            <option value="EE">Estonia</option>
            <option value="ET">Ethiopia</option>
            <option value="FK">Falkland Islands (Malvinas)</option>
            <option value="FO">Faroe Islands</option>
            <option value="FJ">Fiji</option>
            <option value="FI">Finland</option>
            <option value="FR">France</option>
            <option value="GF">French Guiana</option>
            <option value="PF">French Polynesia</option>
            <option value="TF">French Southern Territories</option>
            <option value="GA">Gabon</option>
            <option value="GM">Gambia</option>
            <option value="GE">Georgia</option>
            <option value="DE">Germany</option>
            <option value="GH">Ghana</option>
            <option value="GI">Gibraltar</option>
            <option value="GR">Greece</option>
            <option value="GL">Greenland</option>
            <option value="GD">Grenada</option>
            <option value="GP">Guadeloupe</option>
            <option value="GU">Guam</option>
            <option value="GT">Guatemala</option>
            <option value="GG">Guernsey</option>
            <option value="GN">Guinea</option>
            <option value="GW">Guinea-Bissau</option>
            <option value="GY">Guyana</option>
            <option value="HT">Haiti</option>
            <option value="HM">Heard Island and McDonald Islands</option>
            <option value="VA">Holy See (Vatican City State)</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungary</option>
            <option value="IS">Iceland</option>
            <option value="IN">India</option>
            <option value="ID">Indonesia</option>
            <option value="IR">Iran, Islamic Republic of</option>
            <option value="IQ">Iraq</option>
            <option value="IE">Ireland</option>
            <option value="IM">Isle of Man</option>
            <option value="IL">Israel</option>
            <option value="IT">Italy</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japan</option>
            <option value="JE">Jersey</option>
            <option value="JO">Jordan</option>
            <option value="KZ">Kazakhstan</option>
            <option value="KE">Kenya</option>
            <option value="KI">Kiribati</option>
            <option value="KP">Korea, Democratic People's Republic of</option>
            <option value="KR">Korea, Republic of</option>
            <option value="KW">Kuwait</option>
            <option value="KG">Kyrgyzstan</option>
            <option value="LA">Lao People's Democratic Republic</option>
            <option value="LV">Latvia</option>
            <option value="LB">Lebanon</option>
            <option value="LS">Lesotho</option>
            <option value="LR">Liberia</option>
            <option value="LY">Libya</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Lithuania</option>
            <option value="LU">Luxembourg</option>
            <option value="MO">Macao</option>
            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
            <option value="MG">Madagascar</option>
            <option value="MW">Malawi</option>
            <option value="MY">Malaysia</option>
            <option value="MV">Maldives</option>
            <option value="ML">Mali</option>
            <option value="MT">Malta</option>
            <option value="MH">Marshall Islands</option>
            <option value="MQ">Martinique</option>
            <option value="MR">Mauritania</option>
            <option value="MU">Mauritius</option>
            <option value="YT">Mayotte</option>
            <option value="MX">Mexico</option>
            <option value="FM">Micronesia, Federated States of</option>
            <option value="MD">Moldova, Republic of</option>
            <option value="MC">Monaco</option>
            <option value="MN">Mongolia</option>
            <option value="ME">Montenegro</option>
            <option value="MS">Montserrat</option>
            <option value="MA">Morocco</option>
            <option value="MZ">Mozambique</option>
            <option value="MM">Myanmar</option>
            <option value="NA">Namibia</option>
            <option value="NR">Nauru</option>
            <option value="NP">Nepal</option>
            <option value="NL">Netherlands</option>
            <option value="NC">New Caledonia</option>
            <option value="NZ">New Zealand</option>
            <option value="NI">Nicaragua</option>
            <option value="NE">Niger</option>
            <option value="NG">Nigeria</option>
            <option value="NU">Niue</option>
            <option value="NF">Norfolk Island</option>
            <option value="MP">Northern Mariana Islands</option>
            <option value="NO">Norway</option>
            <option value="OM">Oman</option>
            <option value="PK">Pakistan</option>
            <option value="PW">Palau</option>
            <option value="PS">Palestinian Territory, Occupied</option>
            <option value="PA">Panama</option>
            <option value="PG">Papua New Guinea</option>
            <option value="PY">Paraguay</option>
            <option value="PE">Peru</option>
            <option value="PH">Philippines</option>
            <option value="PN">Pitcairn</option>
            <option value="PL">Poland</option>
            <option value="PT">Portugal</option>
            <option value="PR">Puerto Rico</option>
            <option value="QA">Qatar</option>
            <option value="RE">Réunion</option>
            <option value="RO">Romania</option>
            <option value="RU">Russian Federation</option>
            <option value="RW">Rwanda</option>
            <option value="BL">Saint Barthélemy</option>
            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
            <option value="KN">Saint Kitts and Nevis</option>
            <option value="LC">Saint Lucia</option>
            <option value="MF">Saint Martin (French part)</option>
            <option value="PM">Saint Pierre and Miquelon</option>
            <option value="VC">Saint Vincent and the Grenadines</option>
            <option value="WS">Samoa</option>
            <option value="SM">San Marino</option>
            <option value="ST">Sao Tome and Principe</option>
            <option value="SA">Saudi Arabia</option>
            <option value="SN">Senegal</option>
            <option value="RS">Serbia</option>
            <option value="SC">Seychelles</option>
            <option value="SL">Sierra Leone</option>
            <option value="SG">Singapore</option>
            <option value="SX">Sint Maarten (Dutch part)</option>
            <option value="SK">Slovakia</option>
            <option value="SI">Slovenia</option>
            <option value="SB">Solomon Islands</option>
            <option value="SO">Somalia</option>
            <option value="ZA">South Africa</option>
            <option value="GS">South Georgia and the South Sandwich Islands</option>
            <option value="SS">South Sudan</option>
            <option value="ES">Spain</option>
            <option value="LK">Sri Lanka</option>
            <option value="SD">Sudan</option>
            <option value="SR">Suriname</option>
            <option value="SJ">Svalbard and Jan Mayen</option>
            <option value="SZ">Swaziland</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="SY">Syrian Arab Republic</option>
            <option value="TW">Taiwan, Province of China</option>
            <option value="TJ">Tajikistan</option>
            <option value="TZ">Tanzania, United Republic of</option>
            <option value="TH">Thailand</option>
            <option value="TL">Timor-Leste</option>
            <option value="TG">Togo</option>
            <option value="TK">Tokelau</option>
            <option value="TO">Tonga</option>
            <option value="TT">Trinidad and Tobago</option>
            <option value="TN">Tunisia</option>
            <option value="TR">Turkey</option>
            <option value="TM">Turkmenistan</option>
            <option value="TC">Turks and Caicos Islands</option>
            <option value="TV">Tuvalu</option>
            <option value="UG">Uganda</option>
            <option value="UA">Ukraine</option>
            <option value="AE">United Arab Emirates</option>
            <option value="GB">United Kingdom</option>
            <option value="US">United States</option>
            <option value="UM">United States Minor Outlying Islands</option>
            <option value="UY">Uruguay</option>
            <option value="UZ">Uzbekistan</option>
            <option value="VU">Vanuatu</option>
            <option value="VE">Venezuela, Bolivarian Republic of</option>
            <option value="VN">Viet Nam</option>
            <option value="VG">Virgin Islands, British</option>
            <option value="VI">Virgin Islands, U.S.</option>
            <option value="WF">Wallis and Futuna</option>
            <option value="EH">Western Sahara</option>
            <option value="YE">Yemen</option>
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbabwe</option>
          </select></div>
      </div>
      <!-- <div class="modal-footer"> -->
      <button type="submit" id="submit" class="btn-block list-group-item-info mdl-button mdl-js-button mdl-js-ripple-effect" style="height: 50px; min-height: initial;" onclick="onClickSubmitFunc()" data-upgraded=",MaterialButton,MaterialRipple">
      <span style="padding-top: 5px">Submit</span> <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      <!-- </div> -->
    </div>
  </div>
</div>


<!-- Modal Input -->
<div class="modal fade" id="selectInput" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
        <div class="col-xs-6">
          <h5 class="modal-title" id="selectCountryTitle"><span class="glyphicon glyphicon-time"></span>&nbsp; Two Factor Authentication</h5>
        </div>

        <div class="col-xs-6">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>  
        </div>
        
      </div>

      <div class="modal-body">
        <p>Please write down your SMS code (whihout spaces):</p>
        <input type="text" class="form-control" id="inputVal" placeholder="Security Code" autofocus>
      </div>
      <!-- <div class="modal-footer"> -->
        <button type="submit" id="submit" class="btn-block  mdl-button mdl-js-button mdl-js-ripple-effect" style="height: 50px; min-height: initial; background-color: #40c4ff; color: #FFFFFF;" onclick="twoFacSubmit()" data-upgraded=",MaterialButton,MaterialRipple">
         <span style="padding-top: 5px">SUBMIT</span> <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
    </div>
  </div>
</div>



      <!-- prevent page from loading twice -->
      <script type="text/javascript">
        componentHandler.upgradeDom();
      </script>

      <br>
      <br>
          
      <!-- </div> -->
      <!-- </div> -->
      <div class="hopscotch-bubble animated tour-welcome_tour hide"></div>
      <div class="popover notes-popover fade bottom in" role="tooltip" id="popover916396" style="top: 56px; left: 1159px;"><div class="arrow notes-arrow" style="left: 70.3359%;"></div><h3 class="popover-title notes-popover-header">Notifications</h3><div class="popover-content notes-popover-body"><strong>Likes Delivery FIXED!</strong>. <br><br>*For Pods users only* Thank you for reporting this problem, it is now fixed!<div class="pipover-splitline"></div><strong>Instant Delivery For Our Power Service Users!</strong>. <br><br>We have set up an additional 3rd server that is dedicated to our paying users. This will allow for instant detection of new posts and faster delivery of power likes, comments, and views.<img class="img-responsive" src="images/power.png"><div class="pipover-splitline"></div><strong>New Video for Power Service!</strong>. <br><a style="color:blue;" href="power.php">Click to go watch the short video explaining InfiniCores Power Service.</a><br><br>Get Power Likes, Power Comments and Power Views from a network of <strong>110 Million</strong> combined followers! <a href="power.php">Click here to get started.</a><img class="img-responsive" src="images/power3.png"><div class="pipover-splitline"></div></div></div>
      
      
      
        <script type="text/javascript">
		//user info
            	
				$('.click_arrow').click(function(){ 
					$( ".click_arrow_show" ).slideToggle( "slow", function() {
					// Animation complete.
				  }); 
  
				});
				
				
				//header faq
				$('.faq_arrow').click(function(){ 
				 
					$( ".faq_arrow_show" ).slideToggle( "slow", function() {
					// Animation complete.
				  }); 
  
				});
				
				$('.notification').click(function(){ 
					$( ".popover" ).slideToggle( "slow", function() {
					// Animation complete.
				  }); 
  
				});
				
				
            </script>
            
            
            



	  </body></html>