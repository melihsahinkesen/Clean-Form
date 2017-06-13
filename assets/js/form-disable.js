
function isFastVal(frm)
{
  var fast_realname = frm.f_realname.value;
  var fast_telno = frm.f_telno.value;
  var toplantiBtnGonder = document.querySelector("#fast-f-btnGonder");

  if ( fast_realname==null || fast_realname=="" )
  {
    document.getElementById('f_name_hata').style.display = 'inline-block';
    document.getElementById('f_tel_hata').style.display = 'none';
    document.getElementById('f_realname').focus();
    return false;
  } 
  if ( fast_telno==null || fast_telno=="" || fast_telno.length < 11 )
  {  
    document.getElementById('f_name_hata').style.display = 'none';
    document.getElementById('f_tel_hata').style.display = 'inline-block';
    document.getElementById('f_telno').focus();
    return false;
  }
  else { 
    document.getElementById('f_name_hata').style.display = 'none'; 
    document.getElementById('f_tel_hata').style.display = 'none'; 

    document.getElementById('fast-f-btnGonder').style.display = 'none';
    document.getElementById('f-form-gonderiliyor').style.display = 'inline-block';
  };
  return true;
}


function isMiceVal(frm)
{
  var mice_realname = frm.mice_realname.value;
  var mice_telno = frm.mice_telno.value;
  var mice_email = frm.mice_email.value;
  var toplantiBtnGonder = document.querySelector("#toplanti-btnGonder");

  if ( mice_realname==null || mice_realname=="" )
  {
    document.getElementById('mice_name_hata').style.display = 'inline-block';
    document.getElementById('mice_tel_hata').style.display = 'none';
    document.getElementById('mice_email_hata').style.display = 'none';
    document.getElementById('mice_realname').focus();
    return false;
  } 
  if ( mice_telno==null || mice_telno=="" || mice_telno.length < 11 )
  {  
    document.getElementById('mice_name_hata').style.display = 'none';
    document.getElementById('mice_tel_hata').style.display = 'inline-block';
    document.getElementById('mice_email_hata').style.display = 'none';
    document.getElementById('mice_telno').focus();
    return false;
  }
  if ( mice_email==null || mice_email=="" )
  {  
    document.getElementById('mice_name_hata').style.display = 'none';
    document.getElementById('mice_tel_hata').style.display = 'none';
    document.getElementById('mice_email_hata').style.display = 'inline-block';
    document.getElementById('mice_email').focus();
    return false;
  }
  else { 
    document.getElementById('mice_name_hata').style.display = 'none'; 
    document.getElementById('mice_tel_hata').style.display = 'none'; 
    document.getElementById('mice_email_hata').style.display = 'none';

    document.getElementById('toplanti-btnGonder').style.display = 'none';
    document.getElementById('mice-form-gonderiliyor').style.display = 'inline-block';
  };
  return true;
}
