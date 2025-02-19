<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daha Ucuz</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="icon" href="logo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
    function validateForm() {
    let select1 = document.getElementById("neredenn").value;
    let select2 = document.getElementById("nereyee").value;
    let tarih = document.getElementById("tarihh").value;
    let tarih_iade= document.getElementById("tarih_iadee").value;
    if (select1=="geçersiz,"|| select2=="geçersiz," ||select1 === select2 ||tarih==="" || tarih_iade===tarih) {
       return false; // Formun gönderilmesini engelle
   }
}
    </script>
</head>
<body>
    <header id="header__home">
        <div class="container">
            <nav class="main-nav">
                <a href="index.html"><img src="logo.png" alt="" class="main-nav__logo"></a>

                <ul class="main-nav__items">
                    <li><a style="color: black;" href='index.html' href='/'>Anasayfa</a></li>
                    <li><a style="color: black;" href='anasayfa.html'>En ucuzu bul</a></li>
                    <li><a style="color: black;" href='iletisim.html'>İletişim</a></li>
                </ul>
            </nav>
          
        </div>
        <div class="container ">
            <form action="son.php"method="post" class="infoo" style="width: 100%;" onsubmit="return validateForm()"  >
              <div class="row">
                <div class="form-group col">
                    <label for="neredenn" >Nereden</label>
                    <img src="images/plane-departure.svg" style="width: 20px; height: 20px;">
                    <select name="nereden" id="neredenn" class="form-control"> 
                    <option value="geçersiz,">Seçiniz</option>
                        <option value="ADA,adana-havalimani">Adana Şakirpaşa (ADA) - Adana, Türkiye</option>
                        <option value="ESB,ankara-esenboga">Esenboğa (ESB) - Ankara, Türkiye</option>
                        <option value="AYT,antalya-havaalani-ic-hatlar">Antalya (AYT) - Antalya, Türkiye</option>
                        <option value="GZP,gaziantep-havalimani">Gazipaşa (GZP) - Alanya, Türkiye</option>
                        <option value="EDO,balikesir-edremit-havalimani">Edremit/Korfez (EDO) - Edremit/Körfez, Türkiye</option>
                        <option value="YEI,bursa-merkez">Yenisehir (YEI) - Bursa, Türkiye</option>
                        <option value="CKZ,canakkale-havalimani">Canakkale (CKZ) - Çanakkale, Türkiye</option>
                        <option value="DNZ,denizli-havalimani">Çardak (DNZ) - Denizli, Türkiye</option>
                        <option value="DIY,diyarbakir-havalimani">Diyarbakır (DIY) - Diyarbakır, Türkiye</option>
                        <option value="EZS,elazig-havalimani">Elazığ (EZS) - Elazığ, Türkiye</option>
                        <option value="ERZ,erzurum-havalimani">Erzurum (ERZ) - Erzurum, Türkiye</option>
                        <option value="AOE,eskisehir-havalimani">Eskişehir Anadolu (AOE) - Eskişehir, Türkiye</option>
                        <option value="GZT,gaziantep-havalimani-ic-hatlar">Gaziantep (GZT) - Gaziantep, Türkiye</option>
                        <option value="HTY,hatay-havalimani">Hatay (HTY) - Hatay, Türkiye</option>
                        <option value="ISE,kemer">Isparta Süleyman Demirel (ISE) - Isparta, Türkiye</option>
                        <option value="IST,istanbul-havalimani">İstanbul Havalimanı (IST) - İstanbul, Türkiye</option>
                        <option value="SAW,sabiha-gokcen-havalimani">Sabiha Gökçen (SAW) - İstanbul, Türkiye</option>
                        <option value="ADB,izmir-havalimani">İzmir Adnan Menderes (ADB) - İzmir, Türkiye</option>
                        <option value="KSY,erzurum-havalimani">Kars (KSY) - Kars, Türkiye</option>
                        <option value="ASR,kayseri-havalimani">Kayseri (ASR) - Kayseri, Türkiye</option>
                        <option value="KCO,gebze">Cengiz Topel (KCO) - Kocaeli, Türkiye</option>
                        <option value="KYA,konya-havalimani">Konya (KYA) - Konya, Türkiye</option>
                        <option value="KZR,eskisehir-havalimani">Kütahya Zafer Havalimanı (KZR) - Kütahya, Türkiye </option>
                        <option value="MLX,malatya-havalimani">Malatya (MLX) - Malatya, Türkiye</option>
                        <option value="DLM,dalaman-havalimani">Dalaman (DLM) - Dalaman, Türkiye</option>
                        <option value="BJV,bodrum-havalimani">Milas-Bodrum (BJV) - Bodrum, Türkiye</option>
                        <option value="NAV,nevsehir-havalimani">Kapadokya (NAV) - Nevşehir, Türkiye</option>
                        <option value="OGU,ordu-havalimani">Ordu Giresun (OGU) - Ordu, Türkiye</option>
                        <option value="RZV,rize">Rize-Artvin Havalimanı (RZV) - Rize, Türkiye</option>
                        <option value="SZF,samsun-havalimani">Samsun-Çarşamba (SZF) - Samsun, Türkiye</option>
                        <option value="NOP,samsun-havalimani">Sinop (NOP) - Sinop, Türkiye</option>
                        <option value="VAS,sivas-havalimani">Sivas (VAS) - Sivas, Türkiye</option>
                        <option value="GNY,sanliurfa-havalimani">Güney Anadolu (GNY) - Şanlıurfa, Türkiye</option>
                        <option value="TEQ,corlu">Çorlu (TEQ) - Tekirdağ, Türkiye</option>
                        <option value="TZX,trabzon-havalimani">Trabzon (TZX) - Trabzon, Türkiye</option>
                        <option value="USQ,denizli-havalimani">Uşak (USQ) - Uşak, Türkiye</option>
                        <option value="DNZ,denizli-havalimani">Denizli (DNZ) - Denizli, Türkiye</option>
                        <option value="VAN,van-havalimani">Van Ferit Melen (VAN) - Van, Türkiye</option>
                        <option value="ONQ,izmit">Zonguldak (ONQ) - Zonguldak, Türkiye</option>
                        <option value="ADF,sanliurfa-havalimani">Adıyaman (ADF) - Adıyaman, Türkiye</option>
                        <option value="AJI,van-havalimani">Ağrı (AJI) - Ağrı, Türkiye</option>
                        <option value="MZH,samsun-havalimani">Merzifon (MZH) - Amasya, Türkiye</option>
                        <option value="BAL,batman-havalimani">Batman (BAL) - Batman, Türkiye</option>
                        <option value="BGG,elazig-havalimani">Bingöl (BGG) - Bingöl, Türkiye</option>
                        <option value="ERC,erzurum-havalimani">Erzincan (ERC) - Erzincan, Türkiye</option>
                        <option value="YKO,van-havalimani">Yüksekova (YKO) - Hakkari, Türkiye</option>
                        <option value="IGD,van-havalimani">Iğdır (IGD) - Iğdır, Türkiye</option>
                        <option value="KCM,kahramanmaras-havalimani">Kahramanmaraş (KCM) - Kahramanmaraş, Türkiye</option>
                        <option value="KFS,samsun-havalimani">Kastamonu (KFS) - Kastamonu, Türkiye</option>
                        <option value="MQM,mardin-havalimani">Mardin (MQM) - Mardin, Türkiye</option>
                        <option value="MSR,diyarbakir-havalimani">Muş (MSR) - Muş, Türkiye</option>
                        <option value="SXZ,batman-havalimani">Siirt (SXZ) - Siirt, Türkiye</option>
                        <option value="NKT,batman-havalimani">Şerafettin Elçi (NKT) - Şırnak, Türkiye</option>
                        <option value="TJK,sivas-havalimani">Tokat (TJK) - Tokat, Türkiye</option>
                    </select>

                    
                </div>
                <div class="form-group col-1">
                    <a id="degistirr" class="btn"> <img style="margin-top: 27px; width: 35px; height: 30px;" id="değistirr" src="degistir.jpg"> </a>
                </div>
                    <div class="form-group col">
                        <label for="nereyee">Nereye</label>
                        <img src="images/plane-arrival.svg" style="width: 25px; height: 25px; margin-bottom: 5px;">
                        <select name="nereye" id="nereyee" class="form-control">
                        <option value="geçersiz,">Seçiniz</option>
                        <option value="ADA,adana-havalimani">Adana Şakirpaşa (ADA) - Adana, Türkiye</option>
                        <option value="ESB,ankara-esenboga">Esenboğa (ESB) - Ankara, Türkiye</option>
                        <option value="AYT,antalya-havaalani-ic-hatlar">Antalya (AYT) - Antalya, Türkiye</option>
                        <option value="GZP,gaziantep-havalimani">Gazipaşa (GZP) - Alanya, Türkiye</option>
                        <option value="EDO,balikesir-edremit-havalimani">Edremit/Korfez (EDO) - Edremit/Körfez, Türkiye</option>
                        <option value="YEI,bursa-merkez">Yenisehir (YEI) - Bursa, Türkiye</option>
                        <option value="CKZ,canakkale-havalimani">Canakkale (CKZ) - Çanakkale, Türkiye</option>
                        <option value="DNZ,denizli-havalimani">Çardak (DNZ) - Denizli, Türkiye</option>
                        <option value="DIY,diyarbakir-havalimani">Diyarbakır (DIY) - Diyarbakır, Türkiye</option>
                        <option value="EZS,elazig-havalimani">Elazığ (EZS) - Elazığ, Türkiye</option>
                        <option value="ERZ,erzurum-havalimani">Erzurum (ERZ) - Erzurum, Türkiye</option>
                        <option value="AOE,eskisehir-havalimani">Eskişehir Anadolu (AOE) - Eskişehir, Türkiye</option>
                        <option value="GZT,gaziantep-havalimani-ic-hatlar">Gaziantep (GZT) - Gaziantep, Türkiye</option>
                        <option value="HTY,hatay-havalimani">Hatay (HTY) - Hatay, Türkiye</option>
                        <option value="ISE,kemer">Isparta Süleyman Demirel (ISE) - Isparta, Türkiye</option>
                        <option value="IST,istanbul-havalimani">İstanbul Havalimanı (IST) - İstanbul, Türkiye</option>
                        <option value="SAW,sabiha-gokcen-havalimani">Sabiha Gökçen (SAW) - İstanbul, Türkiye</option>
                        <option value="ADB,izmir-havalimani">İzmir Adnan Menderes (ADB) - İzmir, Türkiye</option>
                        <option value="KSY,erzurum-havalimani">Kars (KSY) - Kars, Türkiye</option>
                        <option value="ASR,kayseri-havalimani">Kayseri (ASR) - Kayseri, Türkiye</option>
                        <option value="KCO,gebze">Cengiz Topel (KCO) - Kocaeli, Türkiye</option>
                        <option value="KYA,konya-havalimani">Konya (KYA) - Konya, Türkiye</option>
                        <option value="KZR,eskisehir-havalimani">Kütahya Zafer Havalimanı (KZR) - Kütahya, Türkiye </option>
                        <option value="MLX,malatya-havalimani">Malatya (MLX) - Malatya, Türkiye</option>
                        <option value="DLM,dalaman-havalimani">Dalaman (DLM) - Dalaman, Türkiye</option>
                        <option value="BJV,bodrum-havalimani">Milas-Bodrum (BJV) - Bodrum, Türkiye</option>
                        <option value="NAV,nevsehir-havalimani">Kapadokya (NAV) - Nevşehir, Türkiye</option>
                        <option value="OGU,ordu-havalimani">Ordu Giresun (OGU) - Ordu, Türkiye</option>
                        <option value="RZV,rize">Rize-Artvin Havalimanı (RZV) - Rize, Türkiye</option>
                        <option value="SZF,samsun-havalimani">Samsun-Çarşamba (SZF) - Samsun, Türkiye</option>
                        <option value="NOP,samsun-havalimani">Sinop (NOP) - Sinop, Türkiye</option>
                        <option value="VAS,sivas-havalimani">Sivas (VAS) - Sivas, Türkiye</option>
                        <option value="GNY,sanliurfa-havalimani">Güney Anadolu (GNY) - Şanlıurfa, Türkiye</option>
                        <option value="TEQ,corlu">Çorlu (TEQ) - Tekirdağ, Türkiye</option>
                        <option value="TZX,trabzon-havalimani">Trabzon (TZX) - Trabzon, Türkiye</option>
                        <option value="USQ,denizli-havalimani">Uşak (USQ) - Uşak, Türkiye</option>
                        <option value="DNZ,denizli-havalimani">Denizli (DNZ) - Denizli, Türkiye</option>
                        <option value="VAN,van-havalimani">Van Ferit Melen (VAN) - Van, Türkiye</option>
                        <option value="ONQ,izmit">Zonguldak (ONQ) - Zonguldak, Türkiye</option>
                        <option value="ADF,sanliurfa-havalimani">Adıyaman (ADF) - Adıyaman, Türkiye</option>
                        <option value="AJI,van-havalimani">Ağrı (AJI) - Ağrı, Türkiye</option>
                        <option value="MZH,samsun-havalimani">Merzifon (MZH) - Amasya, Türkiye</option>
                        <option value="BAL,batman-havalimani">Batman (BAL) - Batman, Türkiye</option>
                        <option value="BGG,elazig-havalimani">Bingöl (BGG) - Bingöl, Türkiye</option>
                        <option value="ERC,erzurum-havalimani">Erzincan (ERC) - Erzincan, Türkiye</option>
                        <option value="YKO,van-havalimani">Yüksekova (YKO) - Hakkari, Türkiye</option>
                        <option value="IGD,van-havalimani">Iğdır (IGD) - Iğdır, Türkiye</option>
                        <option value="KCM,kahramanmaras-havalimani">Kahramanmaraş (KCM) - Kahramanmaraş, Türkiye</option>
                        <option value="KFS,samsun-havalimani">Kastamonu (KFS) - Kastamonu, Türkiye</option>
                        <option value="MQM,mardin-havalimani">Mardin (MQM) - Mardin, Türkiye</option>
                        <option value="MSR,diyarbakir-havalimani">Muş (MSR) - Muş, Türkiye</option>
                        <option value="SXZ,batman-havalimani">Siirt (SXZ) - Siirt, Türkiye</option>
                        <option value="NKT,batman-havalimani">Şerafettin Elçi (NKT) - Şırnak, Türkiye</option>
                        <option value="TJK,sivas-havalimani">Tokat (TJK) - Tokat, Türkiye</option>
                        </select>
                    </div>

                    <div class="form-group col-2">
                        <label  for="tarihh">Gidiş</label>
                        <img src="images/calendar.svg" style="width: 25px; height: 25px; margin-bottom: 4px;" >
                        <input id="tarihh" name="tarih" style="height: 33px; margin-bottom: 10px; font-size: 12px;" type="date" class="form-control">
                    </div>
                    <div class="form-group col-2">
                        <label  for="tarihh">İade</label>
                        <img src="images/calendar.svg" style="width: 25px; height: 25px; margin-bottom: 4px;" >
                        <input id="tarih_iadee" name="tarih_iade" style="height: 33px; margin-bottom: 10px; font-size: 12px;" type="date" class="form-control">
                    </div>
                    <div class="form-group col-1">
                        <input type="submit" style="font-size: 15px; margin-top: 30px;" id=butonn class="btn btn-dark" value="En Ucuzu Bul">
                    </div>

              </div>
                    
                
             
            </form>
        </div>
        <div class="container">
        <?php
        // error_reporting(0);
        // ini_set('display_errors', 0);        
        echo '<div style="background-color: #3D3B3A; width: 700px; height: 25px;">
    <span style="margin-left: 9px;">Uçak Bileti</span>
    <img src="images/plane-beyaz.webp" style="width: 20px; height: 8px;">
</div>
<div style="background-color: #AFAFAF; width: 700px; height: 20px; font-size: 12px;">
    <span style="margin-left: 9px;"><b>Havayolu</b></span>
    <span style="margin-left: 95px;"><b>Kalkış</b></span>
    <span style="margin-left: 120px;"><b>Uçuş </b></span>
    <span style="margin-left: 150px;"><b>Fiyat ( Tek kişi )</b></span>
</div>';
                
                $tarih= $_POST["tarih"];
                $tarih2=$tarih;
                $tarih_iade= $_POST["tarih_iade"];
                $date = new DateTime($tarih);
                $tarih = $date->format('d.m.Y');
                $selected_value=$_POST["nereden"];
                list($nereden, $nereden2) = explode(',', $selected_value);
                $selected_value2=$_POST["nereye"];
                list($nereye, $nereye2) = explode(',', $selected_value2);
                
                
                
                
                $fgc=file_get_contents("https://www.ucuzabilet.com/ic-hat-arama-sonuc?from=" .$nereden. "&to=" .$nereye. "&ddate=" .$tarih. "&adult=1");
                $ucak_fiyat= explode('<td class="flight-price" data-sort-value="',$fgc);
                $ucak_firma= explode(' <div class="airline">',$fgc);
                $ucak_kalkis= explode('<b class="flight-time">',$fgc);
                $ucak_sure= explode('<span class="flight-duration">',$fgc);
                $ucak_aktarma= explode('<div  class="segment-count" data-cursor="on" data-toggle="tooltip" data-placement="bottom" title="',$fgc);
                
                  if(@$ucak_fiyat[1]==""){ 
                    echo '<div style="display: flex; flex-direction: row; background-color: white; width: 700px; height: 130px; border: 5px solid #E2E1E2;">';
                    echo '<div class="ucak_firma">';
                    echo '<span style="color: black; margin-top:10px; margin-left:5px;"><b>Kriterlerinize uygun uçuş bulunamamıştır. Lütfen arama kriterlerinizi değiştirip, yeniden arayınız.</b></span>';
                    echo '</div>';
                    echo '</div>';
                
                }
                else{
                $ucak_fiyat2= explode('"',$ucak_fiyat[1]);
                $ucak_fiyat_tmp=$ucak_fiyat2[0]; 
                $j=1;
                for($i=1; $i<count($ucak_fiyat); $i++){
                    $ucak_fiyat2= explode('"',$ucak_fiyat[$i]);
                    if($ucak_fiyat2[0]<$ucak_fiyat_tmp){
                        $ucak_fiyat_tmp=$ucak_fiyat2[0];
                        $j=$i;
                    }
                }
                $ucak_fiyat2 = explode('"',$ucak_fiyat[$j]);
                $ucak_firma2 = explode('<',$ucak_firma[$j]);
                $ucak_kalkis2= explode('<',$ucak_kalkis[$j]);
                $ucak_sure2  = explode('<',$ucak_sure[$j]);
                $ucak_aktarma2= explode('<',$ucak_aktarma[$j]);
                $ucak_aktarma2[0] = str_replace('">','',$ucak_aktarma2[0]);
                $ucak_aktarma2[0] = str_replace('Türkiye','',$ucak_aktarma2[0]);
                $ucak_fiyat2[0]= str_replace('.',',',$ucak_fiyat2[0]);


$ucuslar = array(
    array("aktarma" => $ucak_aktarma2[0], "firma" => $ucak_firma2[0], "kalkis" => $ucak_kalkis2[0], "sure" => $ucak_sure2[0], "kalkis_yeri" => $nereden, "varis_yeri" => $nereye, "fiyat" => $ucak_fiyat2[0])
);


foreach ($ucuslar as $ucus) {
    echo '<div style="display: flex; flex-direction: row; background-color: white; width: 700px; height: 130px; border: 5px solid #E2E1E2;">';
    echo '<div class="ucak_firma" style="width: 50px; height: 50px;">';
    if($ucak_firma2[0]=="Ajet"||$ucak_firma2[0]=="Pegasus "||$ucak_firma2[0]=="Sunexpress"){
        echo '<img src="images/' . $ucus["firma"] . '.webp" style="width: 30px; margin-left: 15px; margin-top: 42px;">';
        echo '<span style="color: black; margin-left: 15px; margin-top: 23px;">' . $ucus["firma"] . '</span>';
    }
    else{
        echo '<img src="images/' . $ucus["firma"] . '.webp" style="width: 30px; margin-left: 15px; margin-top: 16px;">';
        echo '<span style="color: black; margin-left: 15px; margin-top: 10px;">' . $ucus["firma"] . '</span>';
    }
    echo '</div>';
    echo '<div style="display: flex; flex-direction: column; width: 50px; height: 50px; margin-left: 20px; margin-top: 30px;">';
    echo '<span style="color: black; margin-left: 80px; margin-top: 15px;"><b>' . $ucus["kalkis"] . '</b></span>';
    echo '<span style="color: black; margin-left:85px ; margin-top:0px;">' . $ucus["kalkis_yeri"] . '</span>';
    echo '</div>';
    echo '<div style="display: flex; flex-direction: column; width: 50px; height: 50px; margin-left: 20px; margin-top: 29px;">';
    echo '<span style="white-space: nowrap; color: black; margin-left: 168px; margin-bottom: 8px;"><b>' . $ucus["sure"] . '</b></span>';
    if(strpos($ucak_aktarma2[0], 'Direkt') !== false){
        echo '<span style="font-size:12px; white-space: nowrap; color: black; margin-left: 168px; margin-bottom: 8px;">' . $ucus["aktarma"] .'</span>';
    }
    else{
    echo '<span style="font-size:12px; white-space: nowrap; color: black; margin-left: 100px; margin-bottom: 8px;">' . $ucus["aktarma"] .'</span>';
    }
    echo '<span style="color: black; margin-left: 168px ; margin-top:2px;">' . $ucus["varis_yeri"] . '</span>';
    echo '</div>';
    echo '<div style="display: flex; flex-direction: column; width: 300px; height: 50px; margin-left: 20px; margin-top: 30px;">';
    echo '<span style="color: black; margin-left: 265px; margin-top: 0px; font-size: 35px;"><b>' . $ucus["fiyat"] . '</b>₺</span>';
    echo '</div>';
    echo '</div>';
}
}


$fgc1=file_get_contents("https://www.enterprise.com.tr/rezervasyon/" .$nereden2. "-arac-kiralama?dropOffLocation=" .$nereden2. "-arac-kiralama&start=" .$tarih2. "T12:00&end=" .$tarih_iade. "T12:00&age=&campaign");
$araba_fiyat= explode('<div class="price"> <em class="price_type">₺</em> <span>',$fgc1);
$araba_model= explode('<h5 class="title" style="font-size:16px !important">',$fgc1);
$araba_vites= explode('<div class="properties_item"><i class="icon-gear"></i><span>',$fgc1);
$araba_kapasite= explode('<div class="properties_item"> <i class="icon-capacity"></i> <span>',$fgc1);
$araba_canta= explode('<div class="properties_item"><i class="icon-bag"></i><span>',$fgc1);

$j=1;
if(@$araba_fiyat[$j]==""){
    echo '<div style="display: flex; flex-direction: row; background-color: white; width: 700px; height: 130px; border: 5px solid #E2E1E2;">';
    echo '<div class="ucak_firma">';
    echo '<span style="color: black; margin-top:10px; margin-left:5px;"><b>Kriterlerinize uygun kiralık araç bulunamamıştır. Lütfen arama kriterlerinizi değiştirip, yeniden arayınız.</b></span>';
    echo '</div>';
    echo '</div>';
}

else{
    $araba_fiyat2= explode(',',$araba_fiyat[$j]);
    $araba_fiyat3= explode(',',$araba_fiyat[$j+1]);
    $araba_model2= explode('<',$araba_model[$j]);
    $araba_model2[0]=str_replace('veya','',$araba_model2[0]);
    $araba_vites2=explode('<',$araba_vites[$j]);
    $araba_kapasite2=explode('<',$araba_kapasite[$j]);
    $araba_canta2= explode('<',$araba_canta[$j]);




echo '</div>';

echo '<div class="container" style="margin-top: 5px;">';
echo '    <div style="background-color: #3D3B3A; width: 700px; height: 25px;">';
echo '        <span style="margin-left: 9px;">Araç Kiralama</span>';
echo '        <img src="images/car.svg" style="width: 30px; height: 18px;">';
echo '    </div>';
echo '    <div style="background-color: #AFAFAF; width: 700px; height: 20px; font-size: 12px;">';
echo '        <span style="margin-left: 80px;"><b>Araç</b></span>';
echo '        <span style="margin-left: 135px;"><b>Teslim Yeri</b></span>';
echo '        <span style="margin-left: 100px;"><b>Günlük</b></span>';
echo '        <span style="margin-left: 70px;"><b>Toplam</b></span>';
echo '    </div>';
echo '    <div style="display: flex; flex-direction: row; background-color: white; width: 700px; height: 130px; border: 5px solid #E2E1E2;">';
echo '        <div class="ucak_firma" style="width: 50px; height: 50px;">';
echo '            <span style="color: black; margin-left: 15px; margin-top: 2px;">'.$araba_model2[0].'</span>';
echo '        </div>';
echo '        <div style="display: flex; flex-direction: column; width: 50px; height: 50px; margin-left: 80px; margin-top: 15px;">';
echo '            <img src="images/users.svg" style="width: 30px; margin-left: 15px; margin-top: 10px;">';
echo '            <span style="white-space: nowrap; color: black; margin-left: 15px; font-size: 15px;"> '.$araba_kapasite2[0].' </span>';
echo '            <span style="white-space: nowrap; color: black; margin-left: 15px; font-size: 15px;"> '.$araba_canta2[0].' </span>';
echo '        </div>';
echo '        <div style="display: flex; flex-direction: column; width: 50px; height: 50px; margin-left: 20px; margin-top: 53px;">';
echo '            <span style="color: black; margin-left: 50px ;">'.$nereden.'</span>';
echo '        </div>';
echo '        <div style="display: flex; flex-direction: row; width: 300px; height: 50px; margin-left: 20px; margin-top: 26px;">';
echo '<span style="color: black; margin-left: 103px; margin-top: 0px; font-size: 30px;"><b>' . $araba_fiyat2[0] . ",00" . '</b>₺</span>';
echo '            <span style="color: black; margin-left: 20px; margin-top: 0px; font-size: 30px;"><b>' . $araba_fiyat3[0] . ",00" . '</b>₺</span>';
echo '        </div>';
echo '    </div>';
echo '</div>';
}

       
          
        ?>
    </header>
    
    <script src="info1.js"></script>

</body>
</html>