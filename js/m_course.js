var vue = new Vue({
  el: '#app',
  data: {
    en_name: '',
    REF: ''    
  },
    mounted () {
        axios
          .get('m_course_data.php?Command=generate')
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

    var url = "m_course_data.php";
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
      vue.REF = XMLAddress1[0].childNodes[0].nodeValue;

      XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("en_name");
      vue.en_name = XMLAddress1[0].childNodes[0].nodeValue;

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

    var url = "m_course_data.php";
    url = url + "?Command=" + "save_item";
    url = url + "&REF=" + document.getElementById("REF").value;
    url = url + "&course_code=" + document.getElementById("course_code").value;
    url = url + "&course_name=" + document.getElementById("course_name").value;
    url = url + "&faculty_ref=" + document.getElementById("faculty_ref").value;
    url = url + "&faculty_name=" + document.getElementById("faculty_name").value;
    url = url + "&batch_ref=" + document.getElementById("batch_ref").value;
    url = url + "&batch_code=" + document.getElementById("batch_code").value;
    url = url + "&des=" + document.getElementById("des").value;
    url = url + "&level=" + document.getElementById("level").value;
    url = url + "&type=" + document.getElementById("type").value;
    url = url + "&requirement_1=" + document.getElementById("requirement_1").value;
    url = url + "&requirement_2=" + document.getElementById("requirement_2").value;
    url = url + "&requirement_3=" + document.getElementById("requirement_3").value;
    url = url + "&requirement_4=" + document.getElementById("requirement_4").value;
    url = url + "&requirement_5=" + document.getElementById("requirement_5").value;
    url = url + "&duration=" + document.getElementById("duration").value;
    url = url + "&amount=" + document.getElementById("amount").value;

    if (document.getElementById("active").checked) {
        url = url + "&active=" + "1";
    }else{
        url = url + "&active=" + "0";
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
    var url = "m_course_data.php";
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

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("IDF");
        var IDF = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("objSup");
        var objSup = JSON.parse(XMLAddress1[0].childNodes[0].nodeValue);

        if (IDF === "Master") {
            
            opener.document.getElementById('REF').value = objSup.REF;
            opener.document.getElementById('content_code').value = objSup.content_code;
            opener.document.getElementById('content_name').value = objSup.content_name;

        }

      
        self.close();
    
    }
    
}
