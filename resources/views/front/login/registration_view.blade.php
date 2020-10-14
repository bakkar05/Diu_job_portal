
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Registration</title>
<link href="http://nha.teletalk.com.bd/lib/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://nha.teletalk.com.bd/lib/ajax.js"></script>
<script src="http://nha.teletalk.com.bd/lib/FormManager.js"></script>
<script src="http://nha.teletalk.com.bd/lib/form_submit.js"></script>
<script src="http://nha.teletalk.com.bd/lib/GetList.js"></script>
<script src="http://nha.teletalk.com.bd/lib/gpaBox.js"></script>
<script src="http://nha.teletalk.com.bd/lib/uniBox.js"></script>
<script src="http://nha.teletalk.com.bd/lib/subBox.js"></script>
<script src="http://nha.teletalk.com.bd/lib/examBox.js"></script>
<script src="http://nha.teletalk.com.bd/lib/validator.js"></script>
<script src="http://nha.teletalk.com.bd/lib/other_ps.js"></script>
<script type="text/javascript" src="http://nha.teletalk.com.bd/lib/JobAddField.js"></script>
<script type="text/javascript" src="http://nha.teletalk.com.bd/lib/JobEnable.js"></script>



<noscript>
  <style type="text/css">
    #appbody {display:none;}
  </style>
  <h1 align="center" style="color: red"> Please enable Javascript of your browser before you proceed. </h1>
</noscript>

</head>
<body id="appbody" ondragstart="return false" onselectstart="return false" onLoad="download(), dependencies();">
<form action="{{ url('/registration_2') }}" method="post" onsubmit="return app_form_validator(this)" name="app_form" id="app_form" enctype="multipart/form-data">
@csrf
      
      <input type="hidden" name="min_edu_stage" id="min_edu_stage" value="2" />
      <input type="hidden" name="edu_stage" id="edu_stage" value="3" />
      <input type="hidden" name="job_exp" id="job_exp" value="0" />
      <input type="hidden" name="edu_mas" id="edu_mas" value="0" />

<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="10" align="center" valign="middle" class="topbg">&nbsp;</td>
  </tr>
  <tr>
      <td height="100" align="left" valign="top" class="green"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14bold">
      <td height="120" align="left" valign="top" class="green"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14">
        <tr>
          <td width="16%" height="120" align="center" valign="middle" bgcolor="Green">
                                 <img src="images/govt_logo.png" width="94" height="94" /></td>

    
          <td width="60%" height="120" align="left" valign="middle" bgcolor="Green">
               <font color='white'>Dhaka International University</font><br />
          <font color='white'><font size='5'>DIU Job Portal</font><br />

          <td width="16%" height="120" align="center" valign="middle" bgcolor="Green">
                                 <img src="images/com_logo.png" width="94" height="94" /></td>

 
        </tr>
  </table>
</td>
      </tr>
  <tr>
                <td height="30" align="left" valign="middle" bgcolor="Green">


        </td>
      </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E3E3E3">
      <table width="100%" border="0" cellpadding="5" cellspacing="0" class="black12">
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Applicant's Picture<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12"><input type="file" name="picture" accept="image/*"></td>

          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Applicant's SIgnature<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12"><input type="file" name="signature" accept="image/*"></td>


      </table>
      <table width="100%" border="0" cellpadding="5" cellspacing="0" class="black12">
        <tr bgcolor="#A2A2A2">
          
      <input type="hidden" name="post_code" id="post_code" value="110" />
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Applicant's Name<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3"><input name="name" type="text" class="textfield03" id="name"  /></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Password<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3"><input name="password" type="password" class="textfield03"   /></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Father's Name<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3"><input name="fathername" type="text" class="textfield03" id="fathername"  /></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Mother's Name<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3"><input name="mothername" type="text" class="textfield03" id="mothername" /></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC" class="black12">Date of Birth<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#DCDCDC" class="black12">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC"><span class="black12">Day</span>
            <select name="b_day" class="textfield02" id="b_day">
              <option value="0" selected="selected">Select</option>
        <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
            </select>
            <span class="black12">Month</span>
            <select name="b_month" class="textfield02" id="b_month">
              <option value="0" selected="selected">Select</option>
        
        <option value="01">01 - January</option>
        <option value="02">02 - February</option>
        <option value="03">03 - March</option>
        <option value="04">04 - April</option>
        <option value="05">05 - May</option>
        <option value="06">06 - June</option>
        <option value="07">07 - July</option>
        <option value="08">08 - August</option>
        <option value="09">09 - September</option>
        <option value="10">10 - October</option>
        <option value="11">11 - November</option>
        <option value="12">12 - December</option>
            </select>
            <span class="black12">Year</span>
            <select name="b_year" class="textfield02" id="b_year">
              <option value="0" selected="selected">Select</option>
        <option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option>
            </select></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Gender<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3">
        <label>
                <input type="radio" name="sex" value="1" id="sex_01" />
                <span class="black12">Male</span>
      </label>
            <label>
                  <input type="radio" name="sex" value="2" id="sex_02" />
                  <span class="black12">Female</span>
      </label>
      <label>
                  <input type="radio" name="sex" value="3" id="sex_03" />
                  <span class="black12">Others</span>
      </label></td>
        </tr>
    <tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC" class="black12">Nationality<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#DCDCDC" class="black12">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
          <td width="30%" align="left" valign="middle"><select name="nationality" class="textfield02" id="nationality">
            <option value="Bangladeshi" selected="selected">Bangladeshi</option>
            </select></td>
          <td width="40%" align="right" valign="middle" class="black12">Religion<span class="red12">*</span> :</td>
          <td width="25%" align="right" valign="middle"><select name="religion" class="textfield02" id="religion">
                <option value="0" selected="selected">Select One</option>
                <option value="Islam">Islam</option>
                <option value="Hinduism">Hinduism</option>
                <option value="Christianity">Christianity</option>
                <option value="Buddhism">Buddhism</option>
                <option value="Others">Others</option>
              </select></td>
          <td width="5%" align="left" valign="middle">&nbsp;</td>
          </tr>
        </table></td>
        </tr>
    <tr>
          <td height = "30" align="left" valign="middle" bgcolor="#DCDCDC" class="black12">National ID<span class="red12">*</span></td>
          <td height = "30" align="center" valign="middle" bgcolor="#DCDCDC" class="black12">:</td>
          <td height = "30" align="left" valign="middle" bgcolor="#DCDCDC"><label>
                  <input name="nid" type="radio" id="nid_01" value="1" /> <span class="black12">Yes</span></label>
                <label><span class="black11">[National ID Number]</span> 
                  <input name="nid_no" id="xplod" type="text" class="DEPENDS ON nid BEING 1"  maxlength="20" ></label>
                <label><input type="radio" name="nid" value="2" id="nid_02" /> <span class="black12">No</span></label></td>
        </tr>
    <tr>
          <td height = "30" align="left" valign="middle" bgcolor="#DCDCDC" class="black12">Passport ID</td>
          <td height = "30" align="center" valign="middle" bgcolor="#DCDCDC" class="black12">:</td>
          <td height = "30" align="left" valign="middle" bgcolor="#DCDCDC"><label>
            <input type="radio" name="passport" value="1" id="passpost_01" />
            <span class="black12">Yes</span></label>
            <label><span class="black11">[Passport Number]</span>
              <input name="passport_no" type="text" id="xplod" class="DEPENDS ON passport BEING 1"  />
            </label>
            <label>
              <input type="radio" name="passport" value="2" id="passpost_02" />
              <span class="black12">No</span>
      </label>
        </tr>
    <tr>
          <td height = "30" align="left" valign="middle" bgcolor="#DCDCDC" class="black12">Birth Registration</td>
          <td height = "30" align="center" valign="middle" bgcolor="#DCDCDC" class="black12">:</td>
          <td height = "30" align="left" valign="middle" bgcolor="#DCDCDC"><label>
            <input type="radio" name="breg" value="1" id="breg_01" />
            <span class="black12">Yes</span></label>
            <label><span class="black11">[Registration Number]</span>
              <input name="breg_no" type="text" id="xplod" class="DEPENDS ON breg BEING 1"   />
            </label>
            <label>
              <input type="radio" name="breg" value="2" id="breg_02" />
              <span class="black12">No</span>
      </label>
        </tr>
        <tr>
          <td height = "30" align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Marital Status<span class="red12">*</span></td>
          <td height = "30" align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td height = "30" align="left" valign="middle" bgcolor="#E3E3E3"><label>
            <input type="radio" name="mstatus" value="1" id="mstatus_01" />
            <span class="black12">Married</span></label>
            <label><span class="black11">[Spouse Name]</span>
              <input name="s_name" type="text" id="xplod" class="DEPENDS ON mstatus BEING 1"   />
            </label>
            <label>
              <input type="radio" name="mstatus" value="2" id="mstatus_02" />
              <span class="black12">Single</span>
      </label></td>
        </tr>
  

  <tr>
          <td height = "30" align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Quota<span class="red12">*</span></td>
          <td height = "30" align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td height = "30" align="left" valign="middle" bgcolor="#E3E3E3"><select name="ffq" class="textfield02" id="ffq">
                <option value="0" selected="selected">Select One</option>
        <option value="1">Freedom Fighter</option>
        <option value="2">Child of Freedom Fighter</option>
        <option value="3">Grand Child of Freedom Fighter</option>
                                <option value="4">Physically Handicapped</option>
        <option value="5">Orphan</option>
        <option value="6">Ethnic Minority</option>
        <option value="7">Ansar-VDP</option>
        <option value="8">Female</option>
        <option value="9">Non Quota</option>
              </select></td>
        </tr>






     



    <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black12"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="48%" align="left" valign="middle" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                <tr>
                  <td td height="25" colspan="2" align="left" valign="middle" bgcolor="#A2A2A2" class="black12">Mailing/Present Address<span class="red12">*</span></td>
                </tr>
        <tr>
                  <td width="47%" align="left" valign="middle">Care of</td>
                  <td width="53%" align="left" valign="middle">
                    <input name="present_care" type="text" class="textfield06" id="present_care"/>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">
          Village/Town/<br />
                  Road/House/Flat</td>
                  <td width="53%" align="left" valign="middle">
                    <textarea name="present_vill" cols="45" rows="2" class="textfield06" id="present_vill" ></textarea>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">District</td>
                  <td align="left" valign="middle">
                    <select name="menu_one" class="textfield06a" id="menu_one" onchange="get_one_list(this); changeVisibility1(this)">
                    <option value="0" selected="selected">Select One</option>
          <option value="26">Bagerhat</option><option value="64">Bandarban</option><option value="32">Barguna</option><option value="29">Barishal</option><option value="30">Bhola</option><option value="10">Bogra</option><option value="54">Brahamanbaria</option><option value="56">Chandpur</option><option value="13">Chapai Nawabganj</option><option value="60">Chattogram</option><option value="19">Chuadanga</option><option value="61">Cox`s Bazar</option><option value="55">Cumilla</option><option value="40">Dhaka</option><option value="03">Dinajpur</option><option value="45">Faridpur</option><option value="59">Feni</option><option value="08">Gaibanda</option><option value="41">Gazipur</option><option value="47">Gopalganj</option><option value="53">Habiganj</option><option value="09">Jaipurhat</option><option value="36">Jamalpur</option><option value="23">Jashore</option><option value="28">Jhalokhathi</option><option value="20">Jhenaidah</option><option value="62">Khagrachhari</option><option value="25">Khulna</option><option value="38">Kishorganj</option><option value="07">Kurigram</option><option value="17">Kushtia</option><option value="05">Lalmonirhat</option><option value="57">Luxmipur</option><option value="48">Madaripur</option><option value="21">Magura</option><option value="39">Manikganj</option><option value="18">Meharpur</option><option value="52">Mouluvibazar</option><option value="44">Munshiganj</option><option value="34">Mymensingh</option><option value="11">Naogaon</option><option value="22">Narail</option><option value="43">Narayanganj</option><option value="42">Narsingdi</option><option value="12">Natore</option><option value="33">Netrokona</option><option value="04">Nilphamari</option><option value="58">Noakhali</option><option value="16">Pabna</option><option value="01">Panchagarh</option><option value="31">Patuakhali</option><option value="27">Pirojpur</option><option value="46">Rajbari</option><option value="14">Rajshahi</option><option value="63">Rangamati</option><option value="06">Rangpur</option><option value="24">Satkhira</option><option value="49">Shariatpur</option><option value="35">Sherpur</option><option value="15">Sirajganj</option><option value="50">Sunamganj</option><option value="51">Sylhet</option><option value="37">Tangail</option><option value="02">Thakurgaon</option>
          </select>
          </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Post Office</td>
                  <td align="left" valign="middle">
                    <input name="present_post" type="text" class="textfield06" id="present_post"  />
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Post Code</td>
                  <td align="left" valign="middle">
                    <input name="present_pcode" type="text" class="textfield06" id="present_pcode"  />
                  </td>
                </tr>
              </table></td>
              <td width="1%" align="left" valign="middle">&nbsp;</td>
              <td width="48%" align="left" valign="middle" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                <tr>
                  <td td height="25" colspan="2" align="left" valign="middle" bgcolor="#A2A2A2" class="black12">Permanent Address<span class="red12">*</span> <input name="copy" type="checkbox" id="copy" value="yes" onClick="fd();"/><span class="black11i">same as present address</span></td>
                </tr>
        <tr>
                  <td width="47%" align="left" valign="middle">Care of</td>
                  <td width="53%" align="left" valign="middle">
                    <input name="permanent_care" type="text" class="textfield06" id="permanent_care"  />
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">
          Village/Town/<br />
                  Road/House/Flat</td>
                  <td width="53%" align="left" valign="middle">
                    <textarea name="permanent_vill" cols="45" rows="2" class="textfield06" id="permanent_vill" ></textarea>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Home District</td>
                  <td align="left" valign="middle">
                    <select name="menu_two" class="textfield06a" id="menu_two" onchange="get_two_list(this); changeVisibility2(this)">
                    <option value="0" selected="selected">Select One</option>
          <option value="26">Bagerhat</option><option value="64">Bandarban</option><option value="32">Barguna</option><option value="29">Barishal</option><option value="30">Bhola</option><option value="10">Bogra</option><option value="54">Brahamanbaria</option><option value="56">Chandpur</option><option value="13">Chapai Nawabganj</option><option value="60">Chattogram</option><option value="19">Chuadanga</option><option value="61">Cox`s Bazar</option><option value="55">Cumilla</option><option value="40">Dhaka</option><option value="03">Dinajpur</option><option value="45">Faridpur</option><option value="59">Feni</option><option value="08">Gaibanda</option><option value="41">Gazipur</option><option value="47">Gopalganj</option><option value="53">Habiganj</option><option value="09">Jaipurhat</option><option value="36">Jamalpur</option><option value="23">Jashore</option><option value="28">Jhalokhathi</option><option value="20">Jhenaidah</option><option value="62">Khagrachhari</option><option value="25">Khulna</option><option value="38">Kishorganj</option><option value="07">Kurigram</option><option value="17">Kushtia</option><option value="05">Lalmonirhat</option><option value="57">Luxmipur</option><option value="48">Madaripur</option><option value="21">Magura</option><option value="39">Manikganj</option><option value="18">Meharpur</option><option value="52">Mouluvibazar</option><option value="44">Munshiganj</option><option value="34">Mymensingh</option><option value="11">Naogaon</option><option value="22">Narail</option><option value="43">Narayanganj</option><option value="42">Narsingdi</option><option value="12">Natore</option><option value="33">Netrokona</option><option value="04">Nilphamari</option><option value="58">Noakhali</option><option value="16">Pabna</option><option value="01">Panchagarh</option><option value="31">Patuakhali</option><option value="27">Pirojpur</option><option value="46">Rajbari</option><option value="14">Rajshahi</option><option value="63">Rangamati</option><option value="06">Rangpur</option><option value="24">Satkhira</option><option value="49">Shariatpur</option><option value="35">Sherpur</option><option value="15">Sirajganj</option><option value="50">Sunamganj</option><option value="51">Sylhet</option><option value="37">Tangail</option><option value="02">Thakurgaon</option>
          </select>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="top">P.S./Upazila <img src="images/loader.gif" border="0" align="absmiddle" name ="loading2" style="visibility:hidden"/></td>
                  <td align="left" valign="middle">
                    <select name="menu_two_list" class="textfield06a" id="menu_two_list" >
                      <option  value="0"selected="selected">Select One</option>
                    </select><br />
          <input name="ops2" type="text" class="textfield06" id="ops2" style="VISIBILITY: hidden" />
          </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Post Office</td>
                  <td align="left" valign="middle">
                    <input name="permanent_post" type="text" class="textfield06" id="permanent_post"  />
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Post Code</td>
                  <td align="left" valign="middle">
                    <input name="permanent_pcode" type="text" class="textfield06" id="permanent_pcode"  />
                  </td>
                </tr>
              </table></td>
              <td width="3%" align="left" valign="middle">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Mobile Number<span class="red12">*</span></td>
          <td height="30" align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="black12">
            <tr>
              <td width="26%" height="23" align="left" valign="middle"><input name="mobileno" type="text" class="textfield02" id="mobileno" maxlength="11"  /></td>
              <td width="70%" align="left" valign="middle" class="red11">Please mention a Mobile Number of any operator. Relevant information will be sent by SMS to that number.</td>
              <td width="4%" align="left" valign="middle" class="red12">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
    <tr>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Confirm Mobile<span class="red12">*</span></td>
          <td height="30" align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="black12">
            <tr>
              <td width="26%" height="23" align="left" valign="middle"><input name="confirmmobile" type="text" class="textfield02" id="confirmmobile" maxlength="11"  /></td>
              <td width="70%" align="left" valign="middle" class="black11">&laquo; Please Retype Mobile Number.</td>
              <td width="4%" align="left" valign="middle" class="red12">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
    <tr>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Email</td>
          <td height="30" align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3"><input name="Email" type="text" class="textfield03" id="Email" /></td>
        </tr>

        <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black12"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="97%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="50%" height="30" align="left" valign="middle">Academic Qualifications:</td>
                  <td width="1%" height="30" align="left" valign="middle">&nbsp;</td>
                  <td width="49%" height="30" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="top" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0">
                    <tr>
                      <td height="25" bgcolor="#A2A2A2" class="black12bold">SSC or Equivalent Level</td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                        <tr>
                          <td width="37%" align="left" valign="middle">Examination</td>
                          <td width="63%" align="left" valign="middle"><select name="exam1" class="textfield06a" id="exam1">
                            <option value="0" selected="selected">Select One</option>
           <option value="1">S.S.C</option><option value="2">Dakhil</option><option value="3">S.S.C Vocational</option><option value="4">O Level/Cambridge</option><option value="5">S.S.C Equivalent</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Board</td>
                          <td align="left" valign="middle"><select name="institute1" class="textfield06a" id="institute1">
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">Dhaka</option><option value="2">Cumilla</option><option value="3">Rajshahi</option><option value="4">Jashore</option><option value="5">Chittagong</option><option value="6">Barishal</option><option value="7">Sylhet</option><option value="8">Dinajpur</option><option value="9">Madrasah</option><option value="10">Technical</option><option value="15">Cambridge International - IGCE</option><option value="16">Edexcel International</option><option value="17">Bangladesh Technical Education Board (BTEB)</option><option value="20">Others</option>
                          </select></td>
                        </tr>
             <tr>
                          <td height="25" align="left" valign="middle">Roll No</td> 
                          <td height="25" align="left" valign="middle"><input name="roll1" type="text" class="textfield07b" id="roll1" /></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Result</td>
                          <td align="left" valign="middle"><table width="100%" border="0" cellpadding="0" cellspacing="1" class="black12" style="margin-bottom:1px;">
                            <tr>
                              <td width="55%" align="left" valign="middle"><select name="result1" class="textfield07" id="result1" onchange="Show_GpaTextBox(this.id,'result_gpa1');" >
                                <option value="0"selected="selected">Select</option>
                                <option value="1">1st Division</option>
                                <option value="2">2nd Division</option>
                                <option value="3">3rd Division</option>
                                <option value="4">GPA(out of 4)</option>
        <option value="5">GPA(out of 5)</option>
                              </select></td>
                              <td width="25%" align="left" valign="middle" id="TextBox_Marks1">
                <input name="result_gpa1" class="textfield_gpa" id="result_gpa1" style="VISIBILITY: hidden"  size="4" maxlength="4" /></td>
                              <td align="left" valign="middle" id="Caption_Marks1" class="black11">&nbsp;</td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Group/Subject</td>
                          <td align="left" valign="middle"><select name="subject1" class="textfield07" id="subject1">
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">Science</option><option value="2">Humanities</option><option value="3">Business Studies</option><option value="12">Agriculture Technology</option><option value="13">Architecture and Interior Design Technology</option><option value="15">Automobile Technology</option><option value="16">Civil Technology</option><option value="20">Computer Science & Technology</option><option value="21">Chemical Technology</option><option value="22">Electrical Technology</option><option value="23">Data Telecommunication and Network Technology</option><option value="24">Electrical and Electronics Technology</option><option value="27">Environmental Technology</option><option value="31">Instrumentation & Process Control Technology</option><option value="32">Mechanical Technology</option><option value="34">Mechatronics Technology</option><option value="36">Power Technology</option><option value="38">Refregeration & Air Conditioning Technology</option><option value="41">Telecommunication Technology</option><option value="42">Electronics Technology</option><option value="43">Library Science</option><option value="44">Survey</option><option value="45">General Mechanics</option><option value="46">Firm Machinery</option><option value="47">Textile Technology</option><option value="99">Others</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Passing Year</td>
                          <td align="left" valign="middle"><select name="year1" class="textfield07" id="year1">
                            <option value="0" selected="selected">Select One</option>
                            <option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option>
                          </select></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
                  <td rowspan="2" align="left" valign="middle">&nbsp;</td>
                  <td class="bdr02" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="3">
                    <tr>
                      <td height="25" bgcolor="#A2A2A2" class="black12bold">HSC or Equivalent Level</td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                        <tr>
                          <td width="37%" align="left" valign="middle">Examination</td>
                          <td width="63%" align="left" valign="middle"><select name="exam2" class="textfield06a" id="exam2" >
                            <option value="0"selected="selected">Select One</option>
              <option value="1">H.S.C</option><option value="2">Alim</option><option value="3">Business Management</option><option value="4">Diploma Engineering</option><option value="5">A Level/Sr. Cambridge</option><option value="6">H.S.C Equivalent</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Board</td>
                          <td align="left" valign="middle"><select name="institute2" class="textfield06a" id="institute2">
                            <option value="0" selected="selected">Select One</option>
              <option value="1">Dhaka</option><option value="2">Cumilla</option><option value="3">Rajshahi</option><option value="4">Jashore</option><option value="5">Chittagong</option><option value="6">Barishal</option><option value="7">Sylhet</option><option value="8">Dinajpur</option><option value="9">Madrasah</option><option value="10">Technical</option><option value="15">Cambridge International - IGCE</option><option value="16">Edexcel International</option><option value="17">Bangladesh Technical Education Board (BTEB)</option><option value="20">Others</option>
                          </select></td>
                        </tr>
            <td height="25" align="left" valign="middle">Roll No</td>
                        <td height="25"align="left" valign="middle"><input name="roll2" type="text" class="textfield07b" id="roll2" /></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Result</td>
                          <td align="left" valign="middle"><table width="100%" border="0" cellpadding="0" cellspacing="1" class="black12" style="margin-bottom:1px;">
                            <tr>
                              <td width="55%" align="left" valign="middle"><select name="result2" class="textfield07" id="result2" onchange="Show_GpaTextBox(this.id,'result_gpa2');" >
                                <option value="0"selected="selected">Select</option>
        <option value="1">1st Division</option>
                                <option value="2">2nd Division</option>
                                <option value="3">3rd Division</option>
                                <option value="4">GPA(out of 4)</option>
        <option value="5">GPA(out of 5)</option>
                              </select></td>
                              <td width="25%" align="left" valign="middle" id="TextBox_Marks2"><input name="result_gpa2" class="textfield_gpa" id="result_gpa2" style="VISIBILITY: hidden"   size="4" maxlength="4" /></td>
                            <td width="20%" align="left" valign="middle" id="Caption_Marks2" class="black11">&nbsp;</td>
              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Group/Subject <img src="images/loader.gif" border="0" align="absmiddle" name ="loading_hsc" style="visibility:hidden"/></td>
                          <td align="left" valign="middle"><select name="subject2" class="textfield07" id="subject2">
                            <option value="0"selected="selected">Select One</option>
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">Science</option><option value="2">Humanities</option><option value="3">Business Studies</option><option value="12">Agriculture Technology</option><option value="13">Architecture and Interior Design Technology</option><option value="15">Automobile Technology</option><option value="16">Civil Technology</option><option value="20">Computer Science & Technology</option><option value="21">Chemical Technology</option><option value="22">Electrical Technology</option><option value="23">Data Telecommunication and Network Technology</option><option value="24">Electrical and Electronics Technology</option><option value="27">Environmental Technology</option><option value="31">Instrumentation & Process Control Technology</option><option value="32">Mechanical Technology</option><option value="34">Mechatronics Technology</option><option value="36">Power Technology</option><option value="38">Refregeration & Air Conditioning Technology</option><option value="41">Telecommunication Technology</option><option value="42">Electronics Technology</option><option value="43">Library Science</option><option value="44">Survey</option><option value="45">General Mechanics</option><option value="46">Firm Machinery</option><option value="47">Textile Technology</option><option value="99">Others</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Passing Year</td>
                          <td align="left" valign="middle"><select name="year2" class="textfield07" id="year2">
                            <option value="0" selected="selected">Select One</option>
                            <option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option>
                          </select></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td align="left" valign="middle" class="gap01">&nbsp;</td>
                  <td align="left" valign="middle" class="gap01">&nbsp;</td>
                </tr>
              </table></td>
              <td width="3%" align="left" valign="top">&nbsp;</td>
            </tr>



            <tr>
              <td align="left" valign="top" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                <tr>
                  <td height="25" colspan="3" align="left" valign="middle" bgcolor="#A2A2A2" class="black12bold">Graduation/Equivalent Level</td>
                  <td align="left" valign="middle" bgcolor="#A2A2A2" class="subblack12">&nbsp;</td>
                </tr>
                <tr>
                  <td width="19%" align="left" valign="top">Examination</td>
                  <td width="34%" align="left" valign="middle">
                    <select name="exam3" class="textfield06a" id="exam3" >
                      <option value="0" selected="selected">Select One</option>
                      <option value="1">B.Sc(Engineering/Architecture)</option><option value="2">B.Sc(Agricultural Science)</option><option value="3">M.B.B.S./B.D.S</option><option value="4">Honors</option><option value="5">Pass Course</option><option value="6">Fazil</option><option value="8">Graduation Equivalent</option>
                    </select>
    <input name="other_exam3" type="text" class="textfield06" id="other_exam3" style="VISIBILITY: hidden"  />
                  </td>
                  <td width="17%" align="left" valign="top">Result</td>
                  <td width="30%" align="left" valign="top">
                    <table width="100%" border="0" cellpadding="0" cellspacing="1" class="black12" style="margin-bottom:1px;">
                          <tr>
                      <td width="55%" align="left" valign="middle">
                        <select name="result3" class="textfield07" id="result3" >
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">1st Class</option>
                            <option value="2">2nd Class</option>
                            <option value="3">3rd Class</option>
                            <option value="4">CGPA(out of 4)</option>
                            <option value="5">CGPA(out of 5)</option>
                            <option value="6">Pass</option>
                        </select>
                      </td>
                      <td width="25%" align="left" valign="middle" id="TextBox_Marks3">
        <input name="result_gpa3" class="textfield_gpa" id="result_gpa3" style="VISIBILITY: hidden"  size="4" maxlength="4" /></td>
                    <td width="20%" align="left" valign="middle" id="Caption_Marks3" class="black11">&nbsp;</td>
          </tr>
                  </table>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="top">Subject/Degree <img src="images/loader.gif" border="0" align="absmiddle" name ="loading3" style="visibility:hidden"/></td>
                  <td align="left" valign="top">
                    <select name="subject3" class="textfield06a" id="subject3" onchange="Show_SubTextBox(this.id,'other_subject3');">
                      
                    <option value="0">Select One</option><option value="301">Architecture [301]</option><option value="302">Chemical [302]</option><option value="303">Civil [303]</option><option value="304">Computer [304]</option><option value="305">Electrical [305]</option><option value="306">Electrical &amp; Electronics [306]</option><option value="307">Electronic [307]</option><option value="308">Genetic Engineering [308]</option><option value="309">Industrial [309]</option><option value="310">Leather Technology [310]</option><option value="311">Marine [311]</option><option value="312">Mechanical [312]</option><option value="313">Metallurgy [313]</option><option value="314">Mineral [314]</option><option value="315">Mining [315]</option><option value="316">Naval Architecture [316]</option><option value="317">Physical Planning [317]</option><option value="318">Regional Planning [318]</option><option value="319">Structural [319]</option><option value="320">Textile Technology [320]</option><option value="321">Town Planning [321]</option><option value="322">Urban Planning [322]</option><option value="323">Tele-Comunication Engineering [323]</option><option value="324">Computer Science &amp; Engineering [324]</option><option value="325">Microwave Engineering [325]</option><option value="327">Meritime Radio communication (General) [327]</option><option value="328">Radio Electronics [328]</option><option value="999">Others [999]</option></select>
                    <input name="other_subject3" type="text" class="textfield06" id="other_subject3" style="VISIBILITY: hidden"  />
                  </td>
                  <td align="left" valign="top">Passing Year</td>
                  <td align="left" valign="top">
                    <select name="year3" class="textfield07" id="year3">
                      <option value="0" selected="selected">Select One</option>
                      <option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="top">University/Institute</td>
                  <td align="left" valign="middle"><select name="institute3" class="textfield06a" id="institute3" >
                        <option value="0" selected="selected">Select One</option>
      <option value="110">Bangabandhu Sheikh Mujibur Rahman Science and Technology University</option><option value="111">Bangabandhu Sheikh Mujib Medical University</option><option value="112">Bangabandhu Sheikh Mujibur Rahman Agricultural University</option><option value="113">Bangladesh Agricultural University,Mymensingh</option><option value="114">Bangladesh Open University</option><option value="115">Bangladesh University of Engineering & Technology</option><option value="116">Bangladesh University of Professionals</option><option value="117">Chittagong University of Engineering & Technology</option><option value="118">Chittagong Veterinary and Animal Sciences University</option><option value="119">Comilla University</option><option value="120">Dhaka University</option><option value="121">Dhaka University of Engineering & Technology</option><option value="122">Hajee Mohammad Danesh Science & Technology University</option><option value="123">Islamic University, Kushtia </option><option value="124">Jagannath University</option><option value="125">Jahangirnagar University</option><option value="126">Jatiya Kabi Kazi Nazrul Islam University</option><option value="127">Jessore Science & Technology University</option><option value="128">Khulna University</option><option value="129">Khulna University of Engineering and Technology</option><option value="130">Mawlana Bhashani Science & Technology University</option><option value="131">National University</option><option value="132">Noakhali Science & Technology University</option><option value="133">Pabna University of Science and Technology</option><option value="134">Patuakhali Science And Technology University</option><option value="135">Rajshahi University</option><option value="136">Rajshahi University of Engineering & Technology</option><option value="137">Rangpur University</option><option value="138">Shahjalal University of Science & Technology</option><option value="139">Sher-e-Bangla Agricultural University</option><option value="140">Sylhet Agricultural University</option><option value="141">University of Chittagong</option><option value="222">Ahsanullah University of Science and Technology</option><option value="223">America Bangladesh University</option><option value="224">American International University Bangladesh</option><option value="225">ASA University Bangladesh</option><option value="226">Asian University of Bangladesh</option><option value="227">Atish Dipankar University of Science & Technology</option><option value="228">Bangladesh Islami University</option><option value="229">Bangladesh University</option><option value="230">Bangladesh University of Business & Technology (BUBT)</option><option value="231">BGC Trust University Bangladesh, Chittagong</option><option value="232">BRAC University</option><option value="233">Central Women's University</option><option value="234">City University</option><option value="235">Daffodil International University</option><option value="236">Darul Ihsan University</option><option value="237">Dhaka International University</option><option value="238">East Delta University , Chittagong</option><option value="239">East West University</option><option value="240">Eastern University</option><option value="241">Gono Bishwabidyalay</option><option value="242">Green University of Bangladesh</option><option value="243">IBAIS University</option><option value="244">Independent University, Bangladesh</option><option value="245">International Islamic University, Chittagong</option><option value="246">International University of Business Agriculture & Technology</option><option value="247">Leading University, Sylhet</option><option value="248">Manarat International University</option><option value="249">Metropolitan University, Sylhet</option><option value="250">North South University</option><option value="251">Northern University Bangladesh</option><option value="252">Premier University, Chittagong</option><option value="253">Presidency University</option><option value="254">Prime University</option><option value="255">Primeasia University</option><option value="256">Queens University</option><option value="257">Royal University of Dhaka</option><option value="258">Shanto Mariam University of Creative Technology</option><option value="259">Southeast University</option><option value="260">Southern University of Bangladesh , Chittagong</option><option value="261">Stamford University, Bangladesh</option><option value="262">State University Of Bangladesh</option><option value="263">Sylhet International University, Sylhet</option><option value="264">The Millenium University</option><option value="265">The Peoples University of Bangladesh</option><option value="266">The University of Asia Pacific</option><option value="267">United International University</option><option value="268">University of Development Alternative</option><option value="269">University of Information Technology & Sciences</option><option value="270">University of Liberal Arts Bangladesh</option><option value="271">University of Science & Technology, Chittagong</option><option value="272">University of South Asia</option><option value="273">Uttara University</option><option value="274">Victoria University of Bangladesh</option><option value="275">World University of Bangladesh</option><option value="333">Asian University for Women</option><option value="334">Islamic University of Technology</option><option value="335">South Asian University</option><option value="401">Dhaka Medical College</option><option value="402">Sir Salimullah Medical College</option><option value="403">Mymensingh Medical College</option><option value="404">Chittagong Medical College</option><option value="405">Rajshahi Medical College</option><option value="406">MAG Osmani Medical College</option><option value="407">Sher-E-Bangla Medical College</option><option value="408">Rangpur Medical College</option><option value="409">Comilla Medical College</option><option value="410">Khulna Medical College</option><option value="411">Shaheed Ziaur Rahman Medical College</option><option value="412">Dinajpur Medical College</option><option value="413">Faridpur Medical College</option><option value="414">Shaheed Suhrawardy Medical College</option><option value="415">Pabna Medical College</option><option value="416">Noakhali Medical College</option><option value="417">Cox's Bazar Medical College</option><option value="418">Jessore Medical College</option><option value="419">Shaheed Nazrul Islam Medical College</option><option value="420">Kushtia Medical College</option><option value="421">Satkhira Medical College</option><option value="422">Sheikh Sayera Khatun Medical College, Gopalganj</option><option value="501">Feni Medical College,Feni</option><option value="502">Gono Bishwabidyalay, Savar, Dhaka</option><option value="503">Ad-din Womens Medical College, Dhaka</option><option value="504">Anwer Khan Modern Medical College, Dhaka</option><option value="505">Bangladesh Medical College</option><option value="506">Jalalabad Rageb-Rabeya Medical College,Sylhet</option><option value="507">BGC Trust Medical College, Chittagong</option><option value="508">Central Medical College, Comilla</option><option value="509">Chottagram Ma-O-Shishu Hospital Medical College</option><option value="510">Community Based Medical College (cbmc), Mymensingh</option><option value="511">Community Medical College, Dhaka</option><option value="512">Delta Medical College, Dhaka</option><option value="513">Dhaka National Medical College</option><option value="514">Durra Samad Rahman Red Crescent Women�s Medical College, Sylhet</option><option value="515">Eastern Medical College, Comilla</option><option value="516">Enam Medical College, Savar, Dhaka</option><option value="517">Sylhet Women`s Medical College, Sylhet</option><option value="518">Green Life Medical College,Dhaka</option><option value="519">Holy Family Red Crescent Medical College, Dhaka</option><option value="520">Ibrahim Medical College, Dhaka</option><option value="521">Ibn Sina Medical College, Dhaka</option><option value="522">International Medical College, Gazipur</option><option value="523">Islami Bank Medical College, Rajshahi</option><option value="524">Jahurul Islam Medical College, Kishoregonj</option><option value="525">Jalalabad Ragib-Rabeya Medical College Sylhet</option><option value="526">Khawja Yunus Ali Medical College, Sirajganj</option><option value="527">Kumudini Medical College, Tangail</option><option value="528">Labaid Medical College[6] Dhanmondi, Dhaka</option><option value="529">Maulana Bhasani Medical College</option><option value="530">Medical College for Women and Hospital, Dhaka</option><option value="531">Nightingale Medical College, Dhaka</option><option value="532">North Bengal Medical College, Sirajganj</option><option value="533">North East Medical College, Sylhet</option><option value="534">Northern International Medical College, Dhaka</option><option value="535">Northern Private Medical College, Rangpur</option><option value="536">Popular Medical College & Hospital, Dhaka</option><option value="537">Prime Medical College, Rangpur</option><option value="538">Rangpur Community Hospital Medical College</option><option value="539">Sahabuddin Medical College and Hospital</option><option value="540">Samaj Vittik Medical College, Mirzanagar, Savar</option><option value="541">Shahabuddin Medical College, Dhaka</option><option value="542">Z. H. Sikder Women`s Medical College</option><option value="543">Southern Medical College, Chittagong</option><option value="544">Tairunnessa Memorial Medical College, Gazipur</option><option value="545">TMSS Medical College,Bogra</option><option value="546">University Of Science and Technology Chittagong. IAMS</option><option value="547">Uttara Adhunik Medical College,Dhaka</option><option value="548">Military Institute of Science and Technology (MIST)</option><option value="549">Sonargaon University</option><option value="600">Anwer Khan Modern University </option><option value="601">Bandarban University </option><option value="602">Bangabandhu Sheikh Mujibur Rahman Digital University</option><option value="603">Bangabandhu Sheikh Mujibur Rahman Maritime University</option><option value="604">Bangabandhu Sheikh Mujibur Rahman Science & Technology University</option><option value="605">Bangamata Sheikh Fojilatunnesa Mujib Science and Technology University</option><option value="606">Bangladesh Agricultural University</option><option value="607">Bangladesh Army International University of Science & Technology(BAIUST) ,Comilla</option><option value="608">Bangladesh Army University of Engineering and Technology (BAUET), Qadirabad</option><option value="609">Bangladesh Army University of Science and Technology(BAUST), Saidpur </option><option value="610">Bangladesh University of Health Sciences</option><option value="611">Bangladesh University of Textiles </option><option value="612">Barisal University</option><option value="613">Begum Rokeya University</option><option value="614">BGMEA University of Fashion & Technology(BUFT)</option><option value="615">Canadian University of Bangladesh</option><option value="616">CCN University of Science & Technology</option><option value="617">Chittagong Independent University </option><option value="618">Chittagong Medical University</option><option value="619">Cox's Bazar International University</option><option value="620">East Delta University </option><option value="621">European University of Bangladesh</option><option value="622">Exim Bank Agricultural University, Bangladesh</option><option value="623">Fareast International University</option><option value="624">Feni University</option><option value="625">First Capital University of Bangladesh</option><option value="626">German University Bangladesh</option><option value="627">Global University Bangladesh</option><option value="628">Hamdard University Bangladesh</option><option value="629">Ishakha International University, Bangladesh</option><option value="630">Islamic Arabic University</option><option value="631">Islamic University</option><option value="632">Jessore University of Science & Technology</option><option value="633">Khulna Agricultural University</option><option value="634">Khwaja Yunus Ali University </option><option value="635">N.P.I University of Bangladesh</option><option value="636">North Bengal International University</option><option value="637">North East University Bangladesh</option><option value="638">North Western University</option><option value="639">Northern University of Business & Technology, Khulna</option><option value="640">Notre Dame University Bangladesh</option><option value="641">Port City International University</option><option value="642">Rabindra Maitree University, Kushtia</option><option value="643">Rabindra University, Bangladesh</option><option value="644">Rajshahi Medical University </option><option value="645">Rajshahi Science & Technology University (RSTU), Natore</option><option value="646">Ranada Prasad Shaha University</option><option value="647">Rangamati Science and Technology University</option><option value="648">Sheikh Fazilatunnesa Mujib University</option><option value="649">Sheikh Hasina University </option><option value="650">Sonargaon University</option><option value="651">Sylhet Medical University</option><option value="652">The International University of Scholars</option><option value="653">Times University, Bangladesh</option><option value="654">University of Creative Technology, Chittagong</option><option value="655">University of Global Village</option><option value="656">Varendra University</option><option value="657">Z.H Sikder University of Science & Technology</option><option value="658">Z.N.R.F. University of Management Sciences</option><option value="999">Others</option>
                      </select>
            <input name="other_institute3" type="text" class="textfield06" id="other_institute3" style="VISIBILITY: hidden"  /></td>
                  <td align="left" valign="top">Course Duration</td>
                  <td align="left" valign="top">
                      <select name="duration3" class="textfield07" id="duration3">
                      <option value="0" selected="selected">Select One</option>
                      <option value="02">02 Years</option>
                      <option value="03">03 Years</option>
                      <option value="04">04 Years</option>
                      <option value="05">05 Years</option>

                    </select>
                  </td>
                </tr>
              </table>
        </td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
      <tr class="gap01">
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            
      
        

 
      </table></td>
        
    </td>
  </tr>
  </tr>
</table>

<center><button type="submit" class="btn btn-primary">Submit</button></center> 
</form>

</body>
</html>
