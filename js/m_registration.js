var vue = new Vue({
  el: '#app',
  data: {
    en_name: '',
    REF: ''    
  },
    mounted () {
        axios
          .get('m_registration_data.php?Command=generate')
          .then(response => {
            this.en_name = response.data[1]
            this.REF = response.data[0]
        })
    }
});


function GetXmlHttpObject() {
    var xmlHttp = null;
    try {
        // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
    } catch (e) {
// Internet Explorer
        try {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}

function keyset(key, e) {

    if (e.keyCode == 13) {
        document.getElementById(key).focus();
    }
}

function got_focus(key) {
    document.getElementById(key).style.backgroundColor = "#000066";
}

function lost_focus(key) {
    document.getElementById(key).style.backgroundColor = "#000000";
}



function getdt() {

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }

    var url = "m_registration_data.php";
    url = url + "?Command=" + "getdt";
    url = url + "&ls=" + "new";

    xmlHttp.onreadystatechange = assign_dt;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}

function assign_dt() {
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
    {

      XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("id");
      document.getElementById('REF').value = XMLAddress1[0].childNodes[0].nodeValue;

    }
}





function save_info()
{

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null)
    {
        alert("Browser does not support HTTP Request");
        return;
    }
     if (document.getElementById('REF').value == "") {
        document.getElementById('REF').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'></span></div>";
        return false;
    }
            
   

    var url = "m_registration_data.php";
    url = url + "?Command=" + "save_item";
    url = url + "&REF=" + document.getElementById("REF").value;
    url = url + "&first_name=" + document.getElementById("first_name").value;
    url = url + "&last_name=" + document.getElementById("last_name").value;
    url = url + "&guardian_name=" + document.getElementById("guardian_name").value;
    url = url + "&guardian_tel=" + document.getElementById("guardian_tel").value;
    url = url + "&address_1=" + document.getElementById("address_1").value;
    url = url + "&address_2=" + document.getElementById("address_2").value;
    url = url + "&tel_1=" + document.getElementById("tel_1").value;
    url = url + "&tel_2=" + document.getElementById("tel_2").value;
    url = url + "&sex=" + document.getElementById("sex").value;
    url = url + "&dob=" + document.getElementById("dob").value;
    url = url + "&email=" + document.getElementById("email").value;
    url = url + "&remark=" + document.getElementById("remark").value;
    url = url + "&joineddate=" + document.getElementById("joineddate").value;
    
    if (document.getElementById("active").checked) {
        url = url + "&active=" + "1";
    }else{
        url = url + "&active=" + "0";
    }

    if (document.getElementById("black_list").checked) {
        url = url + "&black_list=" + "1";
    }else{
        url = url + "&black_list=" + "0";
    }
    
    
   
    xmlHttp.onreadystatechange = salessaveresult;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);



}


function salessaveresult() {
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {

        if (xmlHttp.responseText == "Saved") {
            alert(xmlHttp.responseText);
            // document.getElementById('msg_box').innerHTML = "<div class='alert alert-success' role='alert'><span class='center-block'>Saved</span></div>";
            // $("#msg_box").hide().slideDown(400).delay(2000);
            // $("#msg_box").slideUp(400);
        } else {
            alert(xmlHttp.responseText);
            // document.getElementById('msg_box').innerHTML = "<div class='alert alert-warning' role='alert'><span class='center-block'>" + xmlHttp.responseText + "</span></div>";
        }
    }
}


function getForm(REF, IDF)
{
   
    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null)
    {
        alert("Browser does not support HTTP Request");
        return;
    }
    var url = "m_registration_data.php";
    url = url + "?Command=" + "getForm";
    url = url + "&REF=" + REF;
    url = url + "&IDF=" + IDF;

    xmlHttp.onreadystatechange = getFromValues;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}

function getFromValues()
{
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
    {

        // console.log(xmlHttp.responseXML);
        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("IDF");
        var IDF = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("objSup");
        var objSup = JSON.parse(XMLAddress1[0].childNodes[0].nodeValue);

        if (IDF === "Master") {
            opener.document.getElementById('REF').value = objSup.REF;
            opener.document.getElementById('first_name').value = objSup.first_name;
            opener.document.getElementById('last_name').value = objSup.last_name;
            opener.document.getElementById('guardian_name').value = objSup.guardian_name;
            opener.document.getElementById('guardian_tel').value = objSup.guardian_tel;
            opener.document.getElementById('address_1').value = objSup.address_1;
            opener.document.getElementById('address_2').value = objSup.address_2;
            opener.document.getElementById('tel_1').value = objSup.tel_1;
            opener.document.getElementById('tel_2').value = objSup.tel_2;
            opener.document.getElementById('sex').value = objSup.sex;
            opener.document.getElementById('dob').value = objSup.dob;
            opener.document.getElementById('email').value = objSup.email;
            opener.document.getElementById('remark').value = objSup.remark;
            opener.document.getElementById('joineddate').value = objSup.joineddate;

            if (objSup.active == 1) {
                opener.document.getElementById('active').checked = true;
            }else{
                opener.document.getElementById('active').checked = false;
            }
            if (objSup.black_list == 1) {
                opener.document.getElementById('black_list').checked = true;
            }else{
                opener.document.getElementById('black_list').checked = false;
            }
           
          
        }

        
        if (IDF === "sess_allo") {

            XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("objallo");
            var objallo = JSON.parse(XMLAddress1[0].childNodes[0].nodeValue);
            console.log(objallo);

            opener.document.getElementById('player_ref').value = objSup.REF;
            opener.document.getElementById('player_Name').value = objSup.first_name;
            
            var table = window.opener.document.getElementById("example");
           

            for (var i = 1; i < table.rows.length-1; i++) {
                table.rows[i].setAttribute("class", "");
            }
            for (var i = 1; i < table.rows.length-1; i++) {
                for (var j = 0; j < objallo.length; j++) {
                    if (table.rows[i].cells[0].innerHTML == objallo[j].REF_SESS) {
                        table.rows[i].setAttribute("class", "selected");
                    }
                }
            }


            
        }

        if (IDF === "payment") {
            opener.document.getElementById('student_ref').value = objSup.REF;
            opener.document.getElementById('student_name').value = objSup.first_name;
        }

      
        self.close();
    
    }
    
}
